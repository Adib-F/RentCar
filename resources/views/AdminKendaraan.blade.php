@extends('layout/app')

@section('title')
    Admin Kendaraan
@endsection

@section('navbar')
    @include('components/navbaradmin')
@endsection

@section('content')

    <body class="font-poppins">
        <div class="text-left ml-[21rem] mt-4 mb-4">
            <ul>
                <li class="mb-4 text-xl font-bold">Kendaraan</li>
                <li><button class="text-sm bg-orange-400 rounded-full btn btn-sm" onclick="modaltambah.showModal()">+
                        Tambahkan Data </button></li>
            </ul>
        </div>
        <table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
            <thead class="">
                <tr>
                    <th class="p-2 text-xs border border-slate-200">No</th>
                    <th class="p-2 text-xs border border-slate-200">Nama Kendaraan</th>
                    <th class="border border-slate-200 p-2 w-[8rem] text-xs">Jenis</th>
                    <th class="border border-slate-200 p-2 w-[8rem] text-xs">Merek</th>
                    <th class="border border-slate-200 p-2 w-[8rem] text-xs">Harga</th>
                    <th class="border border-slate-200 p-2 w-[8rem] text-xs">Stok</th>
                    <th class="border border-slate-200 p-2 w-[8rem] text-xs">Aksi</th>
                </tr>
            </thead>

            @foreach ($kendaraans as $nomor => $kendaraan)
                <tbody class="text-center">
                    <tr>
                        <td class="p-2 text-xs border border-slate-200">{{ $nomor + 1 }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $kendaraan->Nama_Kendaraan }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $kendaraan->Jenis_Kendaraan }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $kendaraan->Merk }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $kendaraan->Harga }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $kendaraan->Stok }}</td>
                        <td class="flex items-center justify-center p-2 text-xs border border-slate-200">
                            <button class="mr-1 text-xs bg-yellow-400 rounded-lg btn btn-xs"
                                onclick="modaldetail{{ $kendaraan->Id_Kendaraan }}.showModal()">Detail</button>
                            <button class="mr-1 text-xs bg-green-400 rounded-lg btn btn-xs"
                                onclick="modaledit{{ $kendaraan->Id_Kendaraan }}.showModal()">Edit</button>
                            <button class="text-xs bg-red-400 rounded-lg btn btn-xs"
                                onclick="modalhapus{{ $kendaraan->Id_Kendaraan }}.showModal()">Delete</button>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
        <div class="flex justify-end mt-3 join">
            <button class="mr-1 join-item btn btn-xs"><</button>
            <div class="flex rounded-none outline outline-1">
              <button class="bg-orange-400 join-item btn btn-xs btn-active">1</button>
              <button class="join-item btn btn-xs ">2</button>
              <button class="join-item btn btn-xs">3</button>
              <button class="join-item btn btn-xs">4</button>
            </div>
            <button class="ml-1 join-item btn btn-xs">></button>
          </div>

        <dialog id="modaltambah" class="modal">
            <div class="w-6/12 bg-white modal-box">
                <form method="POST" action="{{ route('addKendaraan') }}" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-lg font-bold">Tambah Data Kendaraan</h3>
                    <hr class="my-4 border-t border-gray-500 ">

                    <div class="grid grid-cols-2 gap-4">
                        <div><label for="nama"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Nama Kendaraan</label>
                            @error('nama_kendaraan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="nama" type="text" name="nama_kendaraan"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="Nama Kendaraan" required value="{{ old('nama_kendaraan') }}">
                        </div>

                        <div>
                            <label for="jenis"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Jenis
                                Kendaraan</label><br>
                            @error('jenis_kendaraan')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            <select id="jenis" name="jenis_kendaraan" value="{{ old('jenis_kendaraan') }}"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm text-gray-600 bg-white border border-gray-300 rounded font-norma focus:outline-none focus:border focus:border-black">
                                <option value="" disabled selected hidden>Pilih Jenis Kendaraan</option>
                                <option value="Mobil">Mobil</option>
                                <option value="Motor">Motor</option>
                            </select>
                        </div>

                        <div><label for="merk"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Merk</label>
                            @error('merk')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="merk" type="text" name="merk"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="Merk" required value="{{ old('merk') }}">
                        </div>

                        <div><label for="harga"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Harga</label>
                            @error('harga')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="harga" type="text" name="harga"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="Harga"required value="{{ old('harga') }}">
                        </div>

                        <div><label for="stok"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Stok</label>
                            @error('stok')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="stok" type="text" name="stok"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="Stok" required value="{{ old('stok') }}">
                        </div>

                        <div><label for="gambar"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800 ">Gambar</label>
                            @error('gambar')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="gambar" type="file" name="gambar"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"required />
                        </div>
                    </div>

                    <div>
                        <label for="deskripsi"
                            class="text-sm font-bold leading-tight tracking-normal text-gray-800">Deskripsi
                            Kendaraan</label>
                        @error('deskripsi')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <textarea id="deskripsi" name="deskripsi" rows="3"
                            class="flex items-center w-full pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                            placeholder="Deskripsi" required>{{ old('deskripsi') }}</textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="reset" class="bg-blue-400 border btn"
                            onclick="modaltambah.close()">Batal</button>
                        <button type="submit" class="bg-orange-400 border btn">Tambah</button>
                    </div>
                </form>
            </div>
        </dialog>

        @if ($kendaraans)
            @foreach ($kendaraans as $kendaraan)
                <dialog id="modaldetail{{ $kendaraan->Id_Kendaraan }}" class="modal">
                    <div class="w-6/12 bg-white modal-box">
                        <div class="bg-white">
                            <h3 class="text-lg font-bold">Detail Kendaraan</h3>
                            <hr class="my-4 border-t border-gray-500">
                            <div class="flex justify-center mb-4">
                                <img src="{{ asset('storage/' . $kendaraan->Gambar) }}" class="w-64 h-40">
                            </div>
                            <table class="w-full text-left table-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-sm font-bold">Nama Kendaraan:</td>
                                        <td class="text-sm">{{ $kendaraan->Nama_Kendaraan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-bold">Jenis:</td>
                                        <td class="text-sm">{{ $kendaraan->Jenis_Kendaraan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-bold">Merk:</td>
                                        <td class="text-sm">{{ $kendaraan->Merk }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-bold">Harga: Rp.</td>
                                        <td class="text-sm">{{ $kendaraan->Harga }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-bold">Stok:</td>
                                        <td class="text-sm">{{ $kendaraan->Stok }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-bold">Deskripsi:</td>
                                        <td class="text-sm">{{ $kendaraan->Deskripsi }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="flex justify-end mt-4">
                                <button type="submit" class="mr-4 text-white bg-gray-500 border btn"
                                    onclick="document.getElementById('modaldetail{{ $kendaraan->Id_Kendaraan }}').close();">Batal</button>
                            </div>
                        </div>
                    </div>
                </dialog>

                <dialog id="modaledit{{ $kendaraan->Id_Kendaraan }}" class="modal">
                    <div class="w-6/12 bg-white modal-box">
                        <form method="POST" action="{{ route('updateKendaraan', $kendaraan->Id_Kendaraan) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h3 class="text-lg font-bold">Edit Data Kendaraan</h3>
                            <hr class="my-4 border-t border-gray-500 ">

                            <div class="grid grid-cols-2 gap-4">
                                <div><label for="nama"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Nama
                                        Kendaraan</label>
                                    @error('nama_kendaraan')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="nama" type="text" name="nama_kendaraan"
                                        value="{{ $kendaraan->Nama_Kendaraan }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Nama Kendaraan" required />
                                </div>

                                <div>
                                    <label for="jenis" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Jenis Kendaraan</label>
                                    <select id="jenis" name="jenis_kendaraan"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm text-gray-600 bg-white border border-gray-300 rounded font-norma focus:outline-none focus:border focus:border-black">
                                        <option value="{{ $kendaraan->Jenis_Kendaraan }}" disabled selected hidden>{{ $kendaraan->Jenis_Kendaraan }}</option>
                                        <option value="Mobil" {{ old('jenis_kendaraan', $kendaraan->Jenis_Kendaraan) == 'Mobil' ? 'selected' : '' }}>Mobil</option>
                                        <option value="Motor" {{ old('jenis_kendaraan', $kendaraan->Jenis_Kendaraan) == 'Motor' ? 'selected' : '' }}>Motor</option>
                                    </select>
                                    @error('jenis_kendaraan')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div><label for="merk"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Merk</label>
                                    @error('merk')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="merk" type="text" name="merk" value="{{ $kendaraan->Merk }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Merk" required />
                                </div>

                                <div><label for="harga"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Harga</label>
                                    @error('deskripsi')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="harga" type="text" name="harga" value="{{ $kendaraan->Harga }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Harga"required />
                                </div>

                                <div><label for="stok"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Stok</label>
                                    @error('stok')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="stok" type="text" name="stok" value="{{ $kendaraan->Stok }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Stok" required />
                                </div>

                                <div><label for="gambar"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Gambar</label>
                                    @error('gambar')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="gambar" type="file" name="gambar"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Gambar">
                                </div>

                                <div>
                                    <label for="deskripsi"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">
                                        Deskripsi Kendaraan
                                    </label>
                                    @error('deskripsi')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    <textarea id="deskripsi" name="deskripsi" rows="3"
                                        class="flex items-center w-full pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Deskripsi">{{ old('deskripsi', $kendaraan->Deskripsi) }}</textarea>
                                </div>


                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                    onclick="document.getElementById('modaledit{{ $kendaraan->Id_Kendaraan }}').close();">Batal</button>
                                <button type="submit" class="bg-green-400 border btn">Update</button>
                            </div>
                        </form>
                    </div>
                </dialog>

                <dialog id="modalhapus{{ $kendaraan->Id_Kendaraan }}" class="modal">
                    <div class="modal-box">
                        <h3 class="py-4 text-lg font-bold text-center">Apakah anda yakin ingin menghapus data dengan ID
                            {{ $kendaraan->Id_Kendaraan }}</h3>
                        <div class="flex justify-center">
                            <div class="modal-action">
                                <form method="POST" action="{{ route('deleteKendaraan', $kendaraan->Id_Kendaraan) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                        onclick="document.getElementById('modalhapus{{ $kendaraan->Id_Kendaraan }}').close();">Batal</button>
                                    <button type="submit" class="text-white bg-red-500 border btn"
                                        value="Delete">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </dialog>
    </body>
    @endforeach
    @endif

@endsection
