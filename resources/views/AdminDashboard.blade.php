@extends('layout/app')

@section('title')
    Dashboard
@endsection

@section('navbar')
    @include('components/navbaradmin')
@endsection

@section('content')

    <body class="font-poppins">
        <div class="mt-8 mb-16 text-left pl-96">
            <ul>
                <li class="text-xl font-semibold">Hi, {{auth()->user()->Username}}</li>
                <li class="text-3xl font-bold">Dashboard</li>
            </ul>
        </div>

        <div class="grid max-w-4xl grid-cols-3 gap-x-56 gap-y-8 mx-96 ">
            <div class="w-56 mr-4 bg-orange-200 h-28">
                <ul>
                    <li class="mt-2 ml-4 text-xl font-bold text-white">Pengguna</li>
                    <li class="mb-4 mr-8 text-3xl font-bold text-right text-white">{{ $penggunaCount }}</li>
                    <li class="text-center text-white bg-orange-400"><a href="{{ route('AdminPengguna') }}">more ></a></li>
                </ul>
            </div>
            <div class="w-56 bg-red-300 h-28">
                <ul>
                    <li class="mt-2 ml-4 text-xl font-bold text-white">Kendaraan</li>
                    <li class="mb-4 mr-8 text-3xl font-bold text-right text-white">{{ $kendaraanCount }}</li>
                    <li class="text-center text-white bg-red-400"><a href="{{ route('AdminKendaraan') }}">more ></a></li>
                </ul>
            </div>
            <div class="w-56 bg-cyan-500 h-28">
                <ul>
                    <li class="mt-2 ml-4 text-xl font-bold text-white">Rental</li>
                    <li class="mb-4 mr-8 text-3xl font-bold text-right text-white">{{ $rentalCount }}</li>
                    <li class="text-center text-white bg-cyan-700"><a href="{{ route('AdminRental') }}">more ></a></li>
                </ul>
            </div>
            <div class="w-56 bg-green-400 h-28">
                <ul>
                    <li class="mt-2 ml-4 text-xl font-bold text-white">Promo</li>
                    <li class="mb-4 mr-8 text-3xl font-bold text-right text-white">{{ $promoCount }}</li>
                    <li class="text-center text-white bg-green-500"><a href="{{ route('AdminPromo') }}">more ></a></li>
                </ul>
            </div>
            <div class="w-56 bg-yellow-500 h-28">
                <ul>
                    <li class="mt-2 ml-4 text-xl font-bold text-white">Status</li>
                    <li class="mb-4 mr-8 text-3xl font-bold text-right text-white">{{ $statusCount }}</li>
                    <li class="text-center text-white bg-yellow-400"><a href="{{ route('AdminStatus') }}">more ></a></li>
                </ul>
            </div>
            <div class="w-56 bg-fuchsia-500 h-28">
                <ul>
                    <li class="mt-2 ml-4 text-xl font-bold text-white">Riwayat</li>
                    <li class="mb-4 mr-8 text-3xl font-bold text-right text-white">{{ $riwayatCount }}</li>
                    <li class="text-center text-white bg-fuchsia-600"><a href="{{ route('AdminRiwayat') }}">more ></a></li>
                </ul>
            </div>
        </div>
    </body>
@endsection
