@extends('layout.app')

@section('title', 'Cars')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <div class="container py-8 mx-auto mt-20 shadow-inner">
        <div class="container px-4 mb-6 sm:px-8 md:px-12 lg:px-24 xl:px-16">
            <h1 class="mb-10 text-4xl font-bold text-center">Mobil</h1>
            <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <!-- Car Card -->
                @foreach ($cars as $car)
                    <div class="w-full bg-gray-300 shadow-xl card glass bg-gradient-to-b">
                        <figure class="px-10 pt-10 bg-slate-300">
                            <img src="{{ asset('storage/' . $car->Gambar) }}" class="mb-4 w-[12rem] h-[8rem]" />
                        </figure>
                        <div class="relative items-center text-center bg-white card-body">
                            <div class="absolute top-2">
                                <span class="font-bold text-xs rounded-xl inline-block {{ $car->Stok > 0 ? 'bg-green-400 w-[5rem]' : 'bg-red-400 w-[7rem]' }}">
                                    {{ $car->Stok > 0 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </span>
                            </div>
                            <h2 class="font-bold text-md card-title">{{ $car->Nama_Kendaraan }}</h2>
                            <p class="font-bold text-md">Rp {{ number_format($car->Harga, 0, ',', '.') }}/ Hari</p>
                            <div class="flex items-center justify-center mt-4 space-x-2">
                                <div class="card-actions">
                                    <button class="bg-gray-300 btn btn-sm w-28"
                                        onclick="document.getElementById('modalDetail_{{ $car->Id_Kendaraan }}').showModal()">DETAIL</button>
                                    <dialog id="modalDetail_{{ $car->Id_Kendaraan }}" class="modal">
                                        <div class="w-6/12 bg-white modal-box">
                                        <figure class="px-10 bg-slate-300">
                                            <img src="{{ asset('storage/' . $car->Gambar) }}" class="mb-4 w-[12rem] h-[8rem]" />
                                        </figure>
                                            <p class="mt-3 text-xl font-extrabold text-center">{{ $car->Nama_Kendaraan }}</p>
                                            <p class="mb-2 text-sm font-extrabold text-center">{{ $car->Merk }}</p>
                                            <p class="mb-10 text-sm text-center">{{ $car->Deskripsi }}</p>
                                            <div class="grid justify-between grid-cols-2 gap-4 ">
                                                <p class="mr-10 text-lg font-extrabold">Rp {{ number_format($car->Harga, 0, ',', '.') }}/ Hari</p>
                                                <p class="pl-32 text-lg font-extrabold">Stok: {{ $car->Stok }}</p>
                                            </div>

                                            <form method="dialog" class="modal-backdrop">
                                                <button class="btn bg-slate-300" type="button" onclick="document.getElementById('modalDetail_{{ $car->Id_Kendaraan }}').close()">Close</button>
                                            </form>
                                        </div>
                                    </dialog>
                                </div>
                                <div class="card-actions">
                                    @if ($car->Stok > 0)
                                        <a href="{{ route('showRentalForm', $car->Id_Kendaraan) }}">
                                            <button class="bg-orange-400 btn-sm btn w-28">
                                                RENTAL
                                            </button>
                                        </a>
                                    @else
                                        <button class="bg-orange-400 btn-sm btn w-28" style="pointer-events: none;" disabled>
                                            RENTAL
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="customAlert">
        @if (session('berhasil'))
            <div class="fixed z-50 px-4 py-2 text-white transform -translate-x-1/2 bg-red-500 rounded shadow-lg top-4 left-1/2">
                {{ session('berhasil') }}
            </div>
        @endif
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alertBox = document.querySelector('#customAlert > div');
            if (alertBox) {
                setTimeout(() => {
                    alertBox.style.display = 'none';
                }, 3000);
            }
        });
    </script>
@endsection
