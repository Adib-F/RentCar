@extends('layout.app')

@section('title', 'Status')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
<body class="min-h-screen text-black mt-12">
<br>
<div class="container px-4 mx-auto mt-10 mb-6 sm:px-8 md:px-12 lg:px-24 xl:px-32">
    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        @foreach ($rentals as $rental)
            <div class="w-full bg-gray-300 shadow-xl card glass bg-gradient-to-b">
                <figure class="px-10 pt-10 bg-orange-400">
                    <img src="{{ asset('storage/' . ($rental->kendaraan->Gambar ?? 'default-image.png')) }}" alt="Car Image" class="mb-4 w-[12rem] h-[8rem]" />
                </figure>
                <div class="items-center text-xl text-center  bg-white card-body ">
                    <p class="text- font-bold card-title">{{ $rental->kendaraan->Nama_Kendaraan }}</p>
                   
                    @if ($rental->Pengajuan == 'Menunggu Konfirmasi Admin')
                        <p class="mb-2 font-bold text-sm text-orange-400">{{ $rental->Pengajuan }}</p>
                    @else
                        @foreach ($rental->status as $status)
                            <p class="mb-2 font-bold text-sm text-orange-400">{{ $status->Status_Pengiriman }}</p>
                        @endforeach
                    @endif
        
                    <div class="flex items-center justify-center mt-4">
                        <div class="card-actions">
                            <button class="btn bg-orange-400 btn-sm w-28"
                                    onclick="document.getElementById('modalDetail_{{ $rental->kendaraan->Id_Kendaraan }}').showModal()">DETAIL</button>
                            <dialog id="modalDetail_{{ $rental->kendaraan->Id_Kendaraan }}" class="modal">
                                <div class="modal-box w-6/12 bg-white">
                                    <figure class="px-8 bg-slate-300">
                                        <img src="{{ asset('storage/' . ($rental->kendaraan->Gambar ?? 'default-image.png')) }}" class="mb-4 w-[12rem] h-[8rem]" />
                                    </figure>
                                    <p class="text-xl text-center font-extrabold mt-3">{{ $rental->kendaraan->Nama_Kendaraan }}</p>
                                    <p class="text-sm text-center font-extrabold mb-2">{{ $rental->kendaraan->Merk }}</p>
                                    <p class="text-sm text-center mb-10">{{ $rental->kendaraan->Deskripsi }}</p>
                                    <div class="justify-between grid grid-cols-2 gap-4">
                                        <p class="text-lg font-extrabold mr-10">Rp. {{ number_format($rental->kendaraan->Harga) }}/ Hari</p>
                                        <p class="text-lg font-extrabold pl-32">Stok: {{ $rental->kendaraan->Stok }}</p>
                                    </div>
                                    <form method="dialog" class="modal-backdrop">
                                        <button class="btn bg-slate-300" type="button" onclick="document.getElementById('modalDetail_{{ $rental->kendaraan->Id_Kendaraan }}').close()">Close</button>
                                    </form>
                                </div>
                            </dialog>
                        </div>
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
