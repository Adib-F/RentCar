@extends('layout/app')

@section('title')
    Admin Promo
@endsection

@section('navbar')
    @include('components/navbaradmin')
@endsection

@section('content')

    <body class="font-poppins">
        <div class="text-left ml-[21rem] mt-12 mb-4">
            <ul>
                <li class="text-xl font-bold mb-">PROMO</li>
                <li><button class="text-sm bg-orange-400 rounded-full btn btn-sm" onclick="modaltambah.showModal()">+
                        Tambahkan Data </button></li>
            </ul>
            @if(session('berhasil'))
            <div class="px-2 py-2 mt-2 text-green-700 bg-green-100 border border-green-400 rounded">
                {{ session('berhasil') }}
            </div>
        @endif
        </div>
        <table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
            <thead class="">
                <tr>
                    <th class="p-2 text-xs border border-slate-200">No</th>
                    <th class="border border-slate-200 p-2 w-[10rem] text-xs">Nama Promo</th>
                    <th class="border border-slate-200 p-2 w-[10rem] text-xs">Deskripsi</th>
                    <th class="border border-slate-200 p-2 w-[6rem] text-xs">Diskon %</th>
                    <th class="border border-slate-200 p-2 w-[12rem] text-xs">Gambar</th>
                    <th class="p-2 text-xs border border-slate-200 w-[10rem]">Aksi</th>
                </tr>
            </thead>

            @foreach ($promos as $promo)
                <tbody class="text-center">
                    <tr>
                        <td class="p-2 text-xs border border-slate-200">{{ ($promos->currentPage() - 1) * $promos->perPage() + $loop->iteration }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $promo->Nama_Promo }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $promo->Deskripsi }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $promo->Diskon }}</td>
                        <td class="p-2 text-xs border border-slate-200">
                            <img src="{{ asset('storage/' . $promo->Gambar) }}" class="w-64 h-20">
                        </td>
                        <td class="p-2 text-xs border border-slate-200">
                            <div class="flex items-center justify-center h-full space-x-1">
                                <button class="text-xs bg-green-400 rounded-lg btn btn-xs"
                                    onclick="modaledit{{ $promo->Id_Promo }}.showModal()">Edit</button>
                                <button class="text-xs bg-red-400 rounded-lg btn btn-xs"
                                    onclick="modalhapus{{ $promo->Id_Promo }}.showModal()">Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
        <div class="flex justify-end mt-3 mr-56 join">
            @if ($promos->onFirstPage())
                <button class="mr-1 join-item btn btn-xs" disabled><</button>
            @else
                <a href="{{ $promos->previousPageUrl() }}" class="mr-1 join-item btn btn-xs"><</a>
            @endif

            <div class="flex rounded-none outline outline-1">
                @foreach ($promos->getUrlRange(1, $promos->lastPage()) as $page => $url)
                    <a href="{{ $url }}" class="join-item btn btn-xs {{ $page == $promos->currentPage() ? 'bg-orange-400' : '' }}">
                        {{ $page }}
                    </a>
                @endforeach
            </div>

            @if ($promos->hasMorePages())
                <a href="{{ $promos->nextPageUrl() }}" class="ml-1 join-item btn btn-xs">></a>
            @else
                <button class="ml-1 join-item btn btn-xs" disabled>></button>
            @endif
        </div>
    </body>

    <dialog id="modaltambah" class="modal">
        <div class="w-6/12 bg-white modal-box">
            <form method="POST" action="{{ route('addPromo') }}" enctype="multipart/form-data">
                @csrf
                <h3 class="text-lg font-bold">Tambah Data Promo</h3>
                <hr class="my-4 border-t border-gray-500 ">
                <div class="grid grid-cols-2 gap-4">
                    <div><label for="nama" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Nama
                            Promo</label>
                        <input id="nama" type="text" name="nama_promo"
                            class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                            placeholder="Nama Promo" required />
                    </div>

                    <div><label for="deskripsi"
                            class="text-sm font-bold leading-tight tracking-normal text-gray-800">Deskripsi</label>
                        <input id="deskripsi" type="text" name="deskripsi"
                            class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                            placeholder="Deskripsi" required />
                    </div>

                    <div><label for="diskon"
                            class="text-sm font-bold leading-tight tracking-normal text-gray-800">Diskon</label>
                        <input id="diskon" type="text" name="diskon"
                            class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                            placeholder="Diskon" required />
                    </div>

                    <div><label for="gambar"
                            class="text-sm font-bold leading-tight tracking-normal text-gray-800">Gambar</label>
                        <input id="gambar" type="file" name="gambar"
                            class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                            placeholder="Gambar">
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="button" class="bg-blue-400 border btn" onclick="modaltambah.close()">Batal</button>
                    <button type="submit" class="bg-orange-400 border btn">Tambah</button>
                </div>
            </form>
        </div>
    </dialog>

    @if ($promos)
        @foreach ($promos as $promo)
            <dialog id="modaledit{{ $promo->Id_Promo }}" class="modal">
                <div class="w-6/12 bg-white modal-box">
                    <form method="POST" action="{{ route('updatePromo', $promo->Id_Promo) }}"
                        enctype="multipart/form-data"">
                        @csrf
                        @method('PUT')
                        <h3 class="text-lg font-bold">Edit Data Promo</h3>
                        <hr class="my-4 border-t border-gray-500 ">
                        <div class="grid grid-cols-2 gap-4">

                            <div><label for="nama"
                                    class="text-sm font-bold leading-tight tracking-normal text-gray-800">Nama Promo</label>
                                <input id="nama" type="text" name="nama_promo" value="{{ $promo->Nama_Promo }}"
                                    class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                    placeholder="Nama Promo">
                            </div>

                            <div><label for="deskripsi"
                                    class="text-sm font-bold leading-tight tracking-normal text-gray-800">Deskripsi</label>
                                <input id="deskripsi" type="text" name="deskripsi" value="{{ $promo->Deskripsi }}"
                                    class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                    placeholder="Deskripsi">
                            </div>

                            <div><label for="diskon"
                                    class="text-sm font-bold leading-tight tracking-normal text-gray-800">Diskon</label>
                                <input id="diskon" type="text" name="diskon" value="{{ $promo->Diskon }}"
                                    class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                    placeholder="Diskon">
                            </div>

                            <div><label for="gambar"
                                    class="text-sm font-bold leading-tight tracking-normal text-gray-800">Gambar</label>
                                <input id="gambar" type="file" name="gambar" value="{{ $promo->Gambar }}"
                                    class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                    placeholder="Gambar">
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                onclick="document.getElementById('modaledit{{ $promo->Id_Promo }}').close();">Batal</button>
                            <button type="submit" class="bg-green-400 border btn">Update</button>
                        </div>
                    </form>
                </div>
            </dialog>

            <dialog id="modalhapus{{ $promo->Id_Promo }}" class="modal">
                <div class="modal-box">
                    <h3 class="py-4 text-lg font-bold text-center">Apakah anda yakin ingin menghapus data dengan ID
                        {{ $promo->Id_Promo }}</h3>
                    <div class="flex justify-center">
                        <div class="modal-action">
                            <form method="POST" action="{{ route('deletePromo', $promo->Id_Promo) }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                    onclick="document.getElementById('modalhapus{{ $promo->Id_Promo }}').close();">Batal</button>
                                <button type="submit" class="text-white bg-red-500 border btn"
                                    value="Delete">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </dialog>
        @endforeach
    @endif
@endsection
