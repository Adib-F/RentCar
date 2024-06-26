@extends('layout.app')

@section('title', 'Status')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
<body class="min-h-screen text-black bg-gray-100">
<br>
<div class="container px-4 mx-auto mt-10 mb-6 sm:px-8 md:px-12 lg:px-24 xl:px-32">
    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($rentals as $rental)
            <div class="shadow-xl card w-72 bg-base-100 shadow-slate-300">
                <figure class="px-5 pt-5 bg-orange-400">
                    <img src="{{ asset('storage/' . ($rental->kendaraan->Gambar ?? 'default-image.png')) }}" alt="Car Image" class="w-[14rem] h-[10rem] mb-4" />
                </figure>
                <div class="items-center text-center bg-white card-body h-60">
                    <h2 class="font-extrabold card-title">{{ $rental->kendaraan->Nama_Kendaraan }}</h2>
                    <br>
                    @if ($rental->Pengajuan == 'Menunggu Konfirmasi Admin')
                        <h4 class="mb-6 font-bold text-orange-400">{{ $rental->Pengajuan }}</h4>
                    @else
                        @foreach ($rental->status as $status)
                            <h4 class="mb-6 font-bold text-orange-400">{{ $status->Status_Pengiriman }}</h4>
                        @endforeach
                    @endif
                    <br>
                    <div class="card-actions">
                        <button class="px-8 font-extrabold text-black bg-orange-400 btn">Detail Pesanan</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
@endsection

@section('footer')
    @include('components.footer')
@endsection
