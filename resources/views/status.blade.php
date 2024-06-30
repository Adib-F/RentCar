@extends('layout.app')

@section('title', 'Status')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <div class="container px-4 mx-auto mb-3 mt-28 sm:px-8 md:px-12 lg:px-24 xl:px-32 m">
        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @if ($rentals->isEmpty())
            <div class="flex items-center justify-center min-h-screen mx-auto ml-16 bg-gray-100 ">
                    <div class="flex-col items-center justify-center text-center bg-gray-400 rounded-lg w-80 p-14 ml-80">
                        <p class="text-2xl font-bold text-gray-700">Anda belum memiliki riwayat pesanan</p>
                    </div>
                </div>
            @else
                @foreach ($rentals as $rental)
                    <div class="shadow-xl card w-72 bg-base-100 shadow-slate-300">
                        <figure class="px-5 pt-5 bg-orange-400">
                            <img src="{{ asset('storage/' . ($rental->kendaraan->Gambar ?? 'default-image.png')) }}" alt="Car Image" class="w-[14rem] h-[10rem] mb-4" />
                        </figure>
                        <div class="items-center text-center bg-white card-body h-60">
                            <h2 class="font-extrabold card-title">{{ $rental->kendaraan->Nama_Kendaraan }}</h2>
                            <br>
                            @if ($rental->Pengajuan == 'Pending')
                                <div class="mt-[4rem] card-actions">
                                    <button class="px-8 font-extrabold text-black bg-orange-400 btn bayar-sekarang"
                                        onclick="payNow('{{ $rental->snap_token }}')">Bayar Sekarang</button>
                                </div>
                            @elseif ($rental->Pengajuan == 'Menunggu Konfirmasi Admin')
                                <h4 class="mb-6 font-bold text-orange-400">{{ $rental->Pengajuan }}</h4>
                                <div class="card-actions">
                                    <button class="px-8 font-extrabold text-black bg-orange-400 btn" onclick="openModal('modaldetail{{$rental->Id_Rental}}')">Detail Pesanan</button>
                                </div>
                            @else
                                @foreach ($rental->status as $status)
                                    <h4 class="mb-6 font-bold text-orange-400">{{ $status->Status_Pengiriman }}</h4>
                                    <br>
                                    <div class="card-actions">
                                        <button class="px-8 font-extrabold text-black bg-orange-400 btn" onclick="openModal('modaldetail{{$rental->Id_Rental}}')">Detail Pesanan</button>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <dialog id="modaldetail{{$rental->Id_Rental}}" class="modal">
                        <div class="w-6/12 bg-white modal-box">
                            <div class="bg-white">
                                <h3 class="text-lg font-bold">Detail Rental</h3>
                                <hr class="my-4 border-t border-gray-500">
                                <div class="flex justify-center mb-4">
                                    <img src="{{ asset('storage/' . $rental->Kendaraan->Gambar) }}" class="w-64 h-40">
                                </div>
                                <table class="w-full text-left table-auto">
                                    <tbody>
                                        <tr>
                                            <td class="text-sm font-bold">Nama Penyewa:</td>
                                            <td class="text-sm">{{ $rental->User->Nama_Lengkap }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Nama Kendaraan:</td>
                                            <td class="text-sm">{{ $rental->Kendaraan->Nama_Kendaraan }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Alamat</td>
                                            <td class="text-sm">{{$rental->Alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Nomor Handphone:</td>
                                            <td class="text-sm">{{ $rental->User->No_Handphone }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Tanggal Sewa:</td>
                                            <td class="text-sm">{{ $rental->Tanggal_Sewa }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Tanggal Selesai:</td>
                                            <td class="text-sm">{{ $rental->Tanggal_Selesai }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Total Harga:</td>
                                            <td class="text-sm">Rp {{ number_format($rental->Total_Harga, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="flex justify-end mt-4">
                                    <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="closeModal('modaldetail{{$rental->Id_Rental}}')">Batal</button>
                                </div>
                            </div>
                        </div>
                    </dialog>
                @endforeach
            @endif
        </div>
    </div>
    <div id="customAlert">
        @if (session('berhasil'))
            <div class="fixed z-50 px-4 py-2 text-white transform -translate-x-1/2 bg-red-500 rounded shadow-lg top-4 left-1/2">
                {{ session('berhasil') }}
            </div>
        @endif
    </div>

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.clientKey') }}"></script>
    <script type="text/javascript">
        function payNow(snapToken) {
            snap.pay(snapToken, {
                onSuccess: function(result) {
                    // Handle success
                    console.log(result);
                },
                onPending: function(result) {
                    // Handle pending
                    console.log(result);
                },
                onError: function(result) {
                    // Handle error
                    console.log(result);
                }
            });
        }

        function openModal(modalId) {
            document.getElementById(modalId).showModal();
        }

        function closeModal(modalId) {
            document.getElementById(modalId).close();
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alertBox = document.querySelector('#customAlert > div');
            if (alertBox) {
                setTimeout(() => {
                    alertBox.style.display = 'none';
                }, 2000);
            }
            });
    </script>
@endsection

@section('footer')
    @include('components.footer')
@endsection
