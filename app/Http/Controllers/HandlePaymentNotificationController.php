<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HandlePaymentNotificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function callback(Request $request)
    {
        $payload = $request->all();

        Log::info('incoming-midtrans', [
            'payload' => $payload,
        ]);

        $orderId = $payload['order_id'];
        $statusCode = $payload['status_code'];
        $grossAmount = $payload['gross_amount'];

        $reqSignature = $payload['signature_key'];
        $signature = hash('sha512', $orderId . $statusCode . $grossAmount . config('midtrans.serverKey'));

        if ($signature != $reqSignature) {
            return response()->json(['message' => 'Invalid signature'], 400);
        }

        $transactionStatus = $payload['transaction_status'];

        $rental = Rental::find($orderId);
        if (!$rental) {
            return response()->json(['message' => 'Rental not found'], 400);
        }

        if ($transactionStatus == 'capture') {
            $rental->Pengajuan = 'Menunggu Konfirmasi Admin';
            $rental->save();
        } else if ($transactionStatus == 'expire') {
            $rental->Pengajuan = 'Ditolak';
            $rental->save();
        }
        return response()->json(['message' => 'Success']);

    }
}
