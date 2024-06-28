@extends('layout.app')

@section('title', 'Motorcycles')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <div class="container py-8 shadow-inner mx-auto mt-16">
        <div class="container px-4 mb-6 sm:px-8 md:px-12 lg:px-24 xl:px-16">
            <h1 class="mb-10 text-2xl font-bold text-center">Motor</h1>
            <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <!-- Motorcycle Card -->
                @foreach ($motors as $motor)
                    <div class="w-full bg-gray-300 shadow-xl card glass bg-gradient-to-b">
                        <figure class="px-10 pt-10 bg-slate-300">
                            <img src="{{ asset('storage/' . $motor->Gambar) }}" class="mb-4 w-[12rem] h-[8rem]" />
                        </figure>
                        <div class="items-center text-center bg-white card-body relative">
                            <div class="absolute top-2">
                                <span class="font-bold text-xs rounded-xl inline-block {{ $motor->Stok > 0 ? 'bg-green-400 w-[5rem]' : 'bg-red-400 w-[7rem]' }}">
                                    {{ $motor->Stok > 0 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </span>
                            </div>
                            <h2 class="text-md font-bold card-title">{{ $motor->Nama_Kendaraan }}</h2>
                            <p class="text-md font-bold">Rp. {{ number_format($motor->Harga) }}/ Hari</p>
                            <div class="flex items-center justify-center space-x-2 mt-4">
                                <div class="card-actions">
                                    <button class="btn bg-gray-300 btn-sm w-28"
                                        onclick="document.getElementById('modalDetail_{{ $motor->Id_Kendaraan }}').showModal()">DETAIL</button>
                                    <dialog id="modalDetail_{{ $motor->Id_Kendaraan }}" class="modal">
                                        <div class="modal-box w-6/12 bg-white">
                                        <figure class="px-10 bg-slate-300">
                                            <img src="{{ asset('storage/' . $motor->Gambar) }}" class="mb-4 w-[12rem] h-[8rem]" />
                                        </figure>
                                            <p class="text-xl text-center font-extrabold mt-3">{{ $motor->Nama_Kendaraan }}</p>
                                            <p class="text-sm text-center font-extrabold mb-2">{{ $motor->Merk }}</p>
                                            <p class="text-sm text-center mb-10">{{ $motor->Deskripsi }}</p>
                                            <div class=" justify-between grid grid-cols-2 gap-4">
                                                <p class="text-lg font-extrabold mr-10">Rp. {{ number_format($motor->Harga) }}/ Hari</p>
                                                <p class="text-lg font-extrabold pl-32">Stok: {{ $motor->Stok }}</p>
                                            </div>

                                            <form method="dialog" class="modal-backdrop">
                                                <button class="btn bg-slate-300" type="button" onclick="document.getElementById('modalDetail_{{ $motor->Id_Kendaraan }}').close()">Close</button>
                                            </form>
                                        </div>
                                    </dialog>
                                </div>
                                <div class="card-actions">
                                    @if ($motor->Stok > 0)
                                        <a href="{{ route('showRentalForm', $motor->Id_Kendaraan) }}">
                                            <button class="btn-sm bg-orange-400 btn w-28">
                                                RENTAL
                                            </button>
                                        </a>
                                    @else
                                        <button class="btn-sm bg-orange-400 btn w-28" style="pointer-events: none;" disabled>
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
            <div class="fixed px-4 py-2 text-white transform -translate-x-1/2 bg-red-500 rounded shadow-lg top-4 left-1/2">
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
