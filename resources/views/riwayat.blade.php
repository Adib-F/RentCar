@extends('layout/app')

@section('title')
    Riwayat
@endsection

@section('navbar')
    @include('components/navbar')
@endsection

@section('content')
    <body class="min-h-screen mt-20 text-black bg-gray-100">
        <div class="container px-4 py-4 mx-auto">
            <div class="row">
                @if($riwayats->isEmpty())
                <div class="flex items-center justify-center min-h-screen bg-gray-100 ">
                    <div class="inline-flex flex-col items-center justify-center p-10 bg-gray-400 rounded-lg">
                        <p class="text-2xl font-bold text-gray-700">Anda belum memiliki riwayat pesanan</p>
                    </div>
                </div>
                @else
                    @foreach ($riwayats as $riwayat)
                        <div class="w-[70rem] mx-auto flex items-center mb-4 mt-6 justify-between bg-gray-300 rounded-lg shadow-sm">
                            <div class="flex items-center">
                                <img src="{{ asset('storage/' . $riwayat->Rental->Kendaraan->Gambar) }}" alt="" class="w-32 h-20 ml-3">
                                <div class="ml-3">
                                    <p class="text-lg font-bold">{{ $riwayat->Rental->Kendaraan->Nama_Kendaraan }}</p>
                                    <p class="text-sm text-gray-600">No Pesanan: {{ $riwayat->No_Pesanan }}</p>
                                    <p class="text-sm text-gray-600">Total Harga: Rp {{ number_format($riwayat->Rental->Total_Harga, 0, ',', '.') }}</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <a onclick="openModal('modaldetail{{$riwayat->Id_Rental}}')"
                                    class="h-1 px-2 py-1 mx-2 text-black bg-orange-400 border-none rounded-full btn btn-sm hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Detail
                                    Pesanan</a>
                                <a href="{{ route('cetakResi', $riwayat->Id_Riwayat) }}"
                                    class="h-3 px-2 py-1 mx-2 text-black bg-orange-400 border-none rounded-full btn btn-sm hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Cetak
                                    Resi</a>
                            </div>
                        </div>
                        <dialog id="modaldetail{{$riwayat->Id_Rental}}" class="modal">
                        <div class="w-6/12 bg-white modal-box">
                            <div class="bg-white">
                                <h3 class="text-lg font-bold">Detail Rental</h3>
                                <hr class="my-4 border-t border-gray-500">
                                <div class="flex justify-center mb-4">
                                    <img src="{{ asset('storage/' . $riwayat->Rental->Kendaraan->Gambar) }}" class="w-64 h-40">
                                </div>
                                <table class="w-full text-left table-auto">
                                    <tbody>
                                        <tr>
                                            <td class="text-sm font-bold">Nama Penyewa:</td>
                                            <td class="text-sm">{{ $riwayat->Rental->User->Nama_Lengkap }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Nama Kendaraan:</td>
                                            <td class="text-sm">{{ $riwayat->Rental->Kendaraan->Nama_Kendaraan }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Alamat</td>
                                            <td class="text-sm">{{$riwayat->Rental->Alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Nomor Handphone:</td>
                                            <td class="text-sm">{{ $riwayat->Rental->User->No_Handphone }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Tanggal Sewa:</td>
                                            <td class="text-sm">{{ $riwayat->Rental->Tanggal_Selesai }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Tanggal Selesai:</td>
                                            <td class="text-sm">{{ $riwayat->Rental->Tanggal_Selesai }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-bold">Total Harga:</td>
                                            <td class="text-sm">Rp {{ number_format($riwayat->Rental->Total_Harga, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="flex justify-end mt-4">
                                    <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="closeModal('modaldetail{{$riwayat->Id_Rental}}')">Batal</button>
                                </div>
                            </div>
                        </div>
                    </dialog>
                    @endforeach
                @endif
            </div>
        </div>
    </body>

`    <script>
        function openModal(modalId) {
                document.getElementById(modalId).showModal();
            }

            function closeModal(modalId) {
                document.getElementById(modalId).close();
            }
    </script>`
@endsection

@section('footer')
    @include('components/footer')
@endsection
