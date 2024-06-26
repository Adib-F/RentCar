@extends('layout.app')

@section('title', 'Cars')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <section class="py-8 bg-gray-100 shadow-inner">
        <div class="container px-4 mx-auto mb-6 sm:px-8 md:px-12 lg:px-24 xl:px-16">
            <h1 class="mb-10 text-2xl font-bold text-center">Mobil</h1>
            <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <!-- Car Card -->
                @foreach ($cars as $car)
                    <div class="w-full bg-gray-300 shadow-xl card glass bg-gradient-to-b">
                        <figure class="px-10 pt-10">
                            <img src="{{ asset('storage/' . $car->Gambar) }}" class="mb-4 w-[12rem] h-[8rem]" />
                        </figure>
                        <div class="items-center text-center bg-white card-body">
                            <div class="absolute right-4 top-[11.8rem]">
                                <span class="font-bold test-sm ">
                                    {{ $car->Stok > 0 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </span>
                            </div>
                            <h2 class="text-xl font-bold card-title">{{ $car->Nama_Kendaraan }}</h2>
                            <p class="text-xl font-bold">Rp {{ number_format($car->Harga, 0, ',', '.') }}</p>
                            <div class="flex items-center justify-between">
                                <div class="justify-start px-2 card-actions">
                                    @if ($car->Stok > 0)
                                        <a href="{{ route('showRentalForm', $car->Id_Kendaraan) }}">
                                            <button class="bg-orange-400 btn">
                                                RENTAL
                                            </button>
                                        </a>
                                    @else
                                        <button class="bg-orange-400 btn" style="pointer-events: none;" disabled>
                                            RENTAL
                                        </button>
                                    @endif
                                </div>
                                <div class="justify-end card-actions">
                                    <button class="btn bg-slate-300"
                                        onclick="document.getElementById('my_modal_{{ $car->Id_Kendaraan }}').showModal()">DETAILS</button>
                                    <dialog id="my_modal_{{ $car->Id_Kendaraan }}" class="modal fade">
                                        <div class="w-6/12 bg-white modal-box">
                                            <div class="bg-white">
                                                <h3 class="text-lg font-bold">Detail Kendaraan</h3>
                                                <hr class="my-4 border-t border-gray-500">
                                                <div class="flex justify-center mb-4">
                                                    <img src="{{ asset('storage/' . $car->Gambar) }}" class="w-64 h-40">
                                                </div>
                                                <table class="w-full text-left table-auto">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-sm font-bold">Nama Kendaraan:</td>
                                                            <td class="text-sm">{{ $car->Nama_Kendaraan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-bold">Merk:</td>
                                                            <td class="text-sm">{{ $car->Merk }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-bold">Harga: </td>
                                                            <td class="text-sm">Rp. {{ number_format($car->Harga) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-bold">Stok:</td>
                                                            <td class="text-sm">{{ $car->Stok }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-bold">Deskripsi:</td>
                                                            <td class="text-sm">{{ $car->Deskripsi }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="flex justify-end mt-4">
                                                    <button class="btn bg-slate-300"
                                                        onclick="document.getElementById('my_modal_{{ $car->Id_Kendaraan }}').close()">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </dialog>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div id="customAlert">
        @if (session('berhasil'))
            <div class="fixed px-4 py-2 text-white transform -translate-x-1/2 bg-red-500 rounded shadow-lg top-4 left-1/2">
                {{ session('berhasil') }}</div>
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
