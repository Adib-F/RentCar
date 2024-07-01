<?php

namespace App\Http\Controllers;

use Auth;
use Midtrans\Snap;
use App\Models\Rental;
use App\Models\Kendaraan;
use Midtrans\Transaction;
use App\Models\KlaimPromo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RentalController extends Controller
{
    public function index()
    {
        return view('rental');
    }

    public function cekRental()
    {
        $ongoingRental = Rental::where('Id_Pengguna', auth()->id())
            ->where(function ($query) {
                $query->whereHas('status', function ($subquery) {
                    $subquery->whereIn('Status_Pengiriman', ['Kendaraan sedang dikirim', 'Kendaraan dalam perjalanan']);
                })
                    ->orWhere('Pengajuan', 'Pending');
            })
            ->first();

        return $ongoingRental ? true : false;
    }

    public function showRentalForm($kendaraanId)
    {
        if (Auth::check() && $this->cekRental()) {
            return back()->with('berhasil', 'Anda belum menyelesaikan rental sebelumnya');
        }

        $kendaraan = Kendaraan::find($kendaraanId);
        $promos = KlaimPromo::where('Status', 'Belum_digunakan')
            ->where('Id_Pengguna', auth()->id())
            ->with('Promo')
            ->get();

        return view('rental', compact('kendaraan', 'promos'));
    }
    public function process(Request $request, $kendaraanId)
{
    $request->validate([
        'alamat' => 'required|string|max:255',
        'no_telepon' => 'required|string|max:15',
        'sim' => 'required|file|mimes:jpeg,png,jpg',
        'tanggal_sewa' => 'required|date',
        'tanggal_selesai' => 'required|date|after_or_equal:tanggal_sewa',
        'promo' => 'nullable|exists:Promo,Id_Promo',
        'total_harga' => 'required',
    ]);

    $simPath = $request->file('sim')->store('image/gambarSIM', 'public');

    // Generate Snap Token before creating rental
    \Midtrans\Config::$serverKey = config('midtrans.serverKey');
    \Midtrans\Config::$isProduction = false; // Set to true for production environment

    // Set order_id to a unique value (e.g., timestamp)
    $orderId = uniqid(); // You can adjust this to ensure uniqueness

    $params = [
        'transaction_details' => [
            'order_id' => $orderId, // Use unique order_id
            'gross_amount' => $request->total_harga,
        ],
        'customer_details' => [
            'first_name' => auth()->user()->Nama_Lengkap,
            'email' => auth()->user()->Email,
            'phone' => $request->no_telepon,
        ],
    ];
    $snapToken = \Midtrans\Snap::getSnapToken($params);

    // Create rental data array
    $transaction = [
        'Id_Pengguna' => auth()->id(),
        'Id_Kendaraan' => $kendaraanId,
        'Alamat' => $request->alamat,
        'No_Handphone' => $request->no_telepon,
        'SIM' => $simPath,
        'Tanggal_Sewa' => $request->tanggal_sewa,
        'Tanggal_Selesai' => $request->tanggal_selesai,
        'Id_Promo' => $request->promo,
        'Total_Harga' => $request->total_harga,
        'Pengajuan' => 'Pending', // Set default status to Pending
        'snap_token' => $snapToken,
        'order_id' => $orderId, // Save order_id in rental data
    ];

    // Create rental with snap_token and order_id
    $rental = Rental::create($transaction);

    $kendaraan = Kendaraan::find($kendaraanId);
        $kendaraan->Stok -= 1;
        $kendaraan->save();

    if ($request->promo) {
        KlaimPromo::where('Id_Promo', $request->promo)
            ->where('Id_Pengguna', auth()->id())
            ->update(['Status' => 'Sudah_digunakan']);
    }

    return redirect()->route('status')->with('berhasil', 'Rental berhasil ditambahkan. Silakan lakukan pembayaran.')->with('snapToken', $snapToken)->with('rentalId', $rental->id);
}


public function callback(Request $request)
{
    try {
        // Dump and die untuk melihat semua data dalam request
        $payload = $request->all();

        // Log payload untuk debug
        \Log::info('incoming-midtrans', [
            'payload' => $payload,
        ]);

        // Cek apakah semua kunci yang diperlukan ada dalam request
        $requiredKeys = ['order_id', 'status_code', 'gross_amount', 'signature_key', 'transaction_status'];
        foreach ($requiredKeys as $key) {
            if (!array_key_exists($key, $payload)) {
                \Log::error("Missing required key: $key", $payload);
                return response()->json(['status' => 'error', 'message' => "Missing required key: $key"], 400);
            }
        }

        $orderId = $payload['order_id'];
        $statusCode = $payload['status_code'];
        $grossAmount = $payload['gross_amount'];
        $reqSignature = $payload['signature_key'];

        // Generate signature
        $signature = hash('sha512', $orderId . $statusCode . $grossAmount . config('midtrans.serverKey'));

        // Validasi signature
        if ($signature != $reqSignature) {
            \Log::error('Invalid signature', ['generated_signature' => $signature, 'request_signature' => $reqSignature]);
            return response()->json(['message' => 'Invalid signature'], 400);
        }

        $transactionStatus = $payload['transaction_status'];
        $rental = Rental::where('order_id', $orderId)->first();

        if (!$rental) {
            \Log::error('Rental not found', ['orderId' => $orderId]);
            return response()->json(['message' => 'Rental not found'], 404); // Ubah response code ke 404 jika tidak ditemukan
        }

        if ($transactionStatus == 'capture') {
            $rental->Pengajuan = 'Menunggu Konfirmasi Admin';
            $rental->save();
            \Log::info('Rental updated: ' . $orderId);
        } else if ($transactionStatus == 'expire') {
            $rental->Pengajuan = 'Ditolak';
            $rental->save();
        }

        // Log transaksi untuk debug
        \Log::info('Transaction status: ' . $transactionStatus);

        return response()->json(['status' => 'success'], 200);
    } catch (\Exception $e) {
        \Log::error('Callback error: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
    }
}







}
