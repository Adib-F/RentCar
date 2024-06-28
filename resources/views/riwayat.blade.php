@extends('layout/app')

@section('title')
    Riwayat
@endsection

@section('navbar')
    @include('components/navbar')
@endsection

@section('content')
    <body class="min-h-screen text-black bg-gray-100 mt-20">
        <div class="container px-4 py-4 mx-auto">
            <div class="row">
                @foreach ($riwayats as $riwayat)
                    <div class="w-[70rem] mx-auto flex items-center mb-4 mt-6 justify-between bg-gray-300 rounded-lg shadow-sm">
                        <div class="flex items-center">
                            <img src="{{ asset('storage/' . $riwayat->Rental->Kendaraan->Gambar) }}" alt="" class="w-32 h-20 ml-3">
                            <div class="ml-3">
                                <p class="text-lg font-bold">{{ $riwayat->Rental->Kendaraan->Nama_Kendaraan }}</p>
                                <p class="text-sm text-gray-600">No Pesanan:{{ $riwayat->No_Pesanan }}</p>
                                <p class="text-sm text-gray-600">Total Harga: {{ $riwayat->Rental->Total_Harga }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <a href="#"
                                class="h-1 px-2 py-1 mx-2 text-black bg-orange-400 border-none rounded-full btn btn-sm hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Detail
                                Pesanan</a>
                            <a href="{{ route('cetakResi', $riwayat->Id_Riwayat) }}"
                                class="h-3 px-2 py-1 mx-2 text-black bg-orange-400 border-none rounded-full btn btn-sm hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Cetak
                                Resi</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
@endsection

@section('footer')
    @include('components/footer')
@endsection
