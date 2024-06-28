@extends('layout/app')

@section('title')
    Admin Pengguna
@endsection

@section('navbar')
    @include('components/navbaradmin')
@endsection
@section('content')

    <body class="font-poppins">
        <div class="text-left ml-[21rem] mt-4 mb-4">
            <ul>
                <li class="mb-4 text-xl font-bold">Pengguna</li>
                <li>
                    <button class="text-sm bg-orange-400 rounded-full btn btn-sm" onclick="modaltambah.showModal()">+
                        Tambahkan Data </button>
                </li>
            </ul>
            @if (session('berhasil'))
                <div class="px-2 py-2 mt-2 text-green-700 bg-green-100 border border-green-400 rounded">
                    {{ session('berhasil') }}
                </div>
            @endif
        </div>

        <table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
            <thead class="">
                <tr>
                    <th class="p-2 text-xs border border-slate-200">No</th>
                    <th class="p-2 text-xs border w-[10rem] border-slate-200">Nama Lengkap</th>
                    <th class="p-2 text-xs border w-[6rem] border-slate-200">Username</th>
                    <th class="p-2 text-xs border w-[8rem] border-slate-200">No Handphone</th>
                    <th class="p-2 text-xs border w-[8rem] border-slate-200">NIK</th>
                    <th class="p-2 text-xs border w-[6rem] border-slate-200">Roles</th>
                    <th class="p-2 text-xs border w-[10rem] border-slate-200">Email</th>
                    <th class="p-2 text-xs border border-slate-200">Aksi</th>
                </tr>
            </thead>

            <!-- Menampilakan data pengguna dari database -->
            <tbody class="text-center">
                    @foreach ($penggunas as $pengguna)
                    <tr>
                        <td class="p-2 text-xs border border-slate-200">{{ ($penggunas->currentPage() - 1) * $penggunas->perPage() + $loop->iteration }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $pengguna->Nama_Lengkap }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $pengguna->Username }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $pengguna->No_Handphone }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $pengguna->NIK }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $pengguna->Roles }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $pengguna->Email }}</td>
                        <td class="flex items-center justify-center p-2 text-xs border border-slate-200">
                            <button class="mr-1 text-xs bg-green-400 rounded-lg btn btn-xs"
                                onclick="modaledit{{ $pengguna->Id_Pengguna }}.showModal()">Edit</button>
                            <button class="text-xs bg-red-400 rounded-lg btn btn-xs"
                                onclick="modalhapus{{ $pengguna->Id_Pengguna }}.showModal()">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
        </table>
        <div class="flex justify-end mt-3 mr-24 join">
            @if ($penggunas->onFirstPage())
                <button class="mr-1 join-item btn btn-xs" disabled><</button>
            @else
                <a href="{{ $penggunas->previousPageUrl() }}" class="mr-1 join-item btn btn-xs"><</a>
            @endif

            <div class="flex rounded-none outline outline-1">
                @foreach ($penggunas->getUrlRange(1, $penggunas->lastPage()) as $page => $url)
                    <a href="{{ $url }}" class="join-item btn btn-xs {{ $page == $penggunas->currentPage() ? 'bg-orange-400' : '' }}">
                        {{ $page }}
                    </a>
                @endforeach
            </div>

            @if ($penggunas->hasMorePages())
                <a href="{{ $penggunas->nextPageUrl() }}" class="ml-1 join-item btn btn-xs">></a>
            @else
                <button class="ml-1 join-item btn btn-xs" disabled>></button>
            @endif
        </div>

        <!-- Modal Create Pengguna -->
        <dialog id="modaltambah" class="modal">
            <div class="w-6/12 bg-white modal-box">
                <form method="POST" action="{{ route('addPengguna') }}">
                    @csrf
                    <h3 class="text-lg font-bold">Tambah Data Pengguna</h3>
                    <hr class="my-4 border-t border-gray-500 ">
                    <div class="grid grid-cols-2 gap-4">
                        <div><label for="nama"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Nama
                                Lengkap</label><br>
                            @error('nama_lengkap')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="nama" type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="Nama Lengkap" required />
                        </div>

                        <div><label for="username"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Username</label><br>
                            @error('username')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="username" type="text" name="username" value="{{ old('username') }}"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="Username" required />
                        </div>

                        <div><label for="hp" class="text-sm font-bold leading-tight tracking-normal text-gray-800">No
                                Handphone</label><br>
                            @error('no_handphone')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="hp" type="text" name="no_handphone" value="{{ old('no_handphone') }}"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="No Handphone" required>
                        </div>

                        <div><label for="nik"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">NIK</label><br>
                            @error('nik')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="nik" type="text" name="nik" value="{{ old('no_handphone') }}"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="NIK" required>
                        </div>

                        <div>
                            <label for="roles"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Roles</label><br>
                            @error('roles')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            <select id="roles" name="roles" value="{{ old('roles') }}"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm text-gray-600 bg-white border border-gray-300 rounded font-norma focus:outline-none focus:border focus:border-black">
                                <option value="" disabled selected hidden>Pilih Role</option>
                                <option value="Admin">Admin</option>
                                <option value="Penyewa">Penyewa</option>
                            </select>
                        </div>

                        <div><label for="email"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Email</label><br>
                            @error('email')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="Email" required />
                        </div>

                        <div><label for="password"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Password</label><br>
                            @error('password')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            <input id="password" type="password" name="password" value="{{ old('password') }}"
                                class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                placeholder="Password" />
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                            onclick="document.getElementById('modaltambah').close();">Batal</button>
                        <button type="submit" class="bg-orange-400 border btn">Tambah</button>
                    </div>
                </form>
            </div>
        </dialog>

        <!-- Modal Edit Pengguna -->
        @if ($penggunas)
            @foreach ($penggunas as $pengguna)
                <dialog id="modaledit{{ $pengguna->Id_Pengguna }}" class="modal">
                    <div class="w-6/12 bg-white modal-box">
                        <form method="POST" action="{{ route('updatePengguna', $pengguna->Id_Pengguna) }}">
                            @csrf
                            @method('PATCH')
                            <h3 class="text-lg font-bold">Edit Data Pengguna</h3>
                            <hr class="my-4 border-t border-gray-500 ">
                            <div class="grid grid-cols-2 gap-4">
                                <div><label for="nama"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Nama
                                        Lengkap</label><br>
                                    @error('nama_lengkap')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="nama" type="text" name="nama_lengkap"
                                        value="{{ $pengguna->Nama_Lengkap }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Nama Lengkap" />
                                </div>

                                <div><label for="username"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Username</label><br>
                                    @error('username')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="username" type="text" name="username"
                                        value="{{ $pengguna->Username }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Username" />
                                </div>

                                <div><label for="hp"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">No
                                        Handphone</label><br>
                                    @error('no_handphone')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="hp" type="text" name="no_handphone"
                                        value="{{ $pengguna->No_Handphone }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="No Handphone" />
                                </div>

                                <div><label for="nik"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">NIK</label><br>
                                    @error('nik')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="nik" type="text" name="nik" value="{{ $pengguna->NIK }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="NIK" required>
                                </div>

                                <div>
                                    <label for="roles"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Roles</label><br>
                                    @error('roles')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                    <select id="roles" name="roles"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm text-gray-600 bg-white border border-gray-300 rounded font-norma focus:outline-none focus:border focus:border-black">
                                        <option value="{{ $pengguna->Roles }}" selected disabled hidden>Pilih Roles
                                        </option>
                                        <option value="Admin"
                                            {{ old('roles', $pengguna->Roles) == 'Admin' ? 'selected' : '' }}>Admin
                                        </option>
                                        <option value="Pengguna"
                                            {{ old('roles', $pengguna->Roles) == 'Pengguna' ? 'selected' : '' }}>Pengguna
                                        </option>
                                    </select>
                                </div>



                                <div><label for="email"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Email</label><br>
                                    @error('email')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="email" type="email" name="email" value="{{ $pengguna->Email }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Email" />
                                </div>

                                <div><label for="password"
                                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">Password</label><br>
                                    @error('password')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="password" type="password" name="password"
                                        value="{{ $pengguna->Password }}"
                                        class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"
                                        placeholder="Password" />
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                    onclick="document.getElementById('modaledit{{ $pengguna->Id_Pengguna }}').close();">Batal</button>
                                <button class="bg-green-400 border btn">Update</button>
                            </div>
                        </form>
                    </div>
                </dialog>

                <dialog id="modalhapus{{ $pengguna->Id_Pengguna }}" class="modal">
                    <div class="modal-box">
                        <h3 class="py-4 text-lg font-bold text-center">Apakah anda yakin ingin menghapus data dengan ID
                            {{ $pengguna->Id_Pengguna }}</h3>
                        <div class="flex justify-center">
                            <div class="modal-action">
                                <form method="POST" action="{{ route('deletePengguna', $pengguna->Id_Pengguna) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                        onclick="document.getElementById('modalhapus{{ $pengguna->Id_Pengguna }}').close();">Batal</button>
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
