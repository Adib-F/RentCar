@extends('layout.app')

@section('title', 'Motor')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <section class="py-8 bg-gray-100 shadow-inner">
        <div class="container mx-auto">
            <h1 class="mb-10 text-2xl font-bold text-center">MOTOR</h1>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Motor Card -->
                @foreach ($motors as $motor)
                    <div class="bg-gray-300 shadow-xl card w-84 glass bg-gradient-to-b">
                        <figure class="px-10 pt-10"><img src="{{ asset('storage/' . $motor->Gambar) }}"
                                class="mb-4 w-[12rem]" /></figure>
                        <div class="items-center text-center bg-white card-body">
                            <h2 class="text-xl font-bold card-title">{{ $motor->Nama_Kendaraan }}</h2>
                            <p class="text-xl font-bold">{{ $motor->Harga }}</p>
                            <div class="flex items-center justify-between">
                                <div class="justify-start px-2 card-actions">
                                    <button class="bg-orange-400 btn">RENTAL</button>
                                </div>
                                <div class="justify-end card-actions">
                                    <button class="btn bg-slate-300"
                                        onclick="document.getElementById('my_modal_1{{ $motor->Id_Kendaraan }}').showModal()">DETAILS</button>
                                    <dialog id="my_modal_1{{ $motor->Id_Kendaraan }}" class="modal">
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
                                                            <td class="text-sm">{{ $motor->Harga }}</td>
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
                                                        onclick="document.getElementById('my_modal_1{{ $motor->Id_Kendaraan }}').close();">Batal</button>
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
