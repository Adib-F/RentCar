@extends('layout.app')

@section('title', 'Motor')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <div id="customAlert">
        @if (session('berhasil'))
            <div class="fixed px-4 py-2 text-white transform -translate-x-1/2 bg-red-500 rounded shadow-lg top-4 left-1/2">
                {{ session('berhasil') }}</div>
        @endif
    </div>
    <section class="py-8 bg-gray-100 shadow-inner">
        <div class="container px-4 mx-auto mb-6 sm:px-8 md:px-12 lg:px-24 xl:px-16">
            <h1 class="mb-10 text-2xl font-bold text-center">Motor</h1>
            <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <!-- Motor Card -->
                @foreach ($motors as $motor)
                    <div class="w-full bg-gray-300 shadow-xl card glass bg-gradient-to-b">
                        <figure class="px-10 pt-10">
                            <img src="{{ asset('storage/' . $motor->Gambar) }}" class="mb-4 w-[12rem] h-[8rem]" />
                        </figure>
                        <div class="items-center text-center bg-white card-body">
                            <div class="absolute right-4 top-[11.8rem]">
                                <span class="font-bold">
                                    {{ $motor->Stok > 0 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </span>
                            </div>
                            <h2 class="text-xl font-bold card-title">{{ $motor->Nama_Kendaraan }}</h2>
                            <p class="text-xl font-bold">Rp. {{ number_format($motor->Harga) }}</p>
                            <div class="flex items-center justify-between">
                                <div class="justify-start px-2 card-actions">
                                    @if ($motor->Stok > 0)
                                        <a href="{{ route('showRentalForm', $motor->Id_Kendaraan) }}">
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
                                        onclick="document.getElementById('my_modal_{{ $motor->Id_Kendaraan }}').showModal()">DETAILS</button>
                                    <dialog id="my_modal_{{ $motor->Id_Kendaraan }}" class="modal">
                                        <div class="w-6/12 bg-white modal-box">
                                            <div class="bg-white">
                                                <h3 class="text-lg font-bold">Detail Kendaraan</h3>
                                                <hr class="my-4 border-t border-gray-500">
                                                <div class="flex justify-center mb-4">
                                                    <img src="{{ asset('storage/' . $motor->Gambar) }}" class="w-64 h-40">
                                                </div>
                                                <table class="w-full text-left table-auto">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-sm font-bold">Nama Kendaraan:</td>
                                                            <td class="text-sm">{{ $motor->Nama_Kendaraan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-bold">Jenis:</td>
                                                            <td class="text-sm">{{ $motor->Jenis_Kendaraan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-bold">Merk:</td>
                                                            <td class="text-sm">{{ $motor->Merk }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-bold">Harga: Rp.</td>
                                                            <td class="text-sm">Rp. {{ number_format($motor->Harga) }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-bold">Stok:</td>
                                                            <td class="text-sm">{{ $motor->Stok }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-sm font-bold">Deskripsi:</td>
                                                            <td class="text-sm">{{ $motor->Deskripsi }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="flex justify-end mt-4">
                                                    <button type="submit" class="mr-4 text-white bg-gray-500 border btn"
                                                        onclick="document.getElementById('my_modal_{{ $motor->Id_Kendaraan }}').close();">Batal</button>
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
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alertBox = document.querySelector('#customAlert > div');
            if (alertBox) {
                setTimeout(() {
                    alertBox.style.display = 'none';
                }, 3000);
            }
        });
    </script>
@endsection
