@extends('layout/app')

@section('title')
    Admin Status
@endsection

@section('navbar')
    @include('components/navbaradmin')
@endsection

@section('content')

    <body class="font-poppins">
        <div class="text-left ml-[21rem] mt-4 mb-4">
            <ul>
                <li class="mb-8 text-xl font-bold">Status</li>
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
                    <th class="p-2 text-xs border w-[6rem] border-slate-200">Penyewa</th>
                    <th class="p-2 text-xs border w-[8rem] border-slate-200">No Hp</th>
                    <th class="p-2 text-xs border w-[10rem] border-slate-200">Alamat</th>
                    <th class="p-2 text-xs border w-[12rem] border-slate-200">Status</th>
                    <th class="p-2 text-xs border w-[8rem] border-slate-200">Detail Pesanan</th>
                    <th class="p-2 text-xs border w-[10rem] border-slate-200">Aksi</th>
                </tr>
            </thead>

            @foreach ($statuss as $status)
                <tbody class="text-center">
                    <tr>
                        <td class="p-2 text-xs border border-slate-200">{{ ($statuss->currentPage() - 1) * $statuss->perPage() + $loop->iteration }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $status->Rental->User->Username }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $status->Rental->User->No_Handphone }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $status->Rental->Alamat }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $status->Status_Pengiriman }}</td>
                        <td class="p-2 text-xs border border-slate-200">
                            <button class="mr-1 text-xs bg-yellow-400 rounded-lg btn btn-xs"
                                onclick="modaldetail{{ $status->Id_Status }}.showModal()">Detail</button>
                        </td>
                        <td class="p-2 text-xs border border-slate-200">
                            <div class="dropdown dropdown-buttom">
                                <div tabindex="0" role="button"
                                    class="w-32 h-6 px-1 py-0 text-xs bg-yellow-500 btn btn-sm">Perbarui Status</div>
                                <ul tabindex="0"
                                    class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                    <form method="POST" action="{{ route('updatePengiriman', $status->Id_Status) }}">
                                        @csrf
                                        @method('PUT')
                                        <li>
                                            <button type="submit" name="status" value="Kendaraaan dalam perjalanan"
                                                class="w-full text-xs text-left">Kendaraan dalam perjalanan</button>
                                        </li>
                                        <li>
                                            <button type="submit" name="status" value="Kendaraan telah sampai"
                                                class="w-full text-xs text-left">Kendaraan telah sampai</button>
                                        </li>
                                    </form>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
        <div class="flex justify-end mt-3 mr-36 join">
            @if ($statuss->onFirstPage())
                <button class="mr-1 join-item btn btn-xs" disabled><</button>
            @else
                <a href="{{ $statuss->previousPageUrl() }}" class="mr-1 join-item btn btn-xs"><</a>
            @endif

            <div class="flex rounded-none outline outline-1">
                @foreach ($statuss->getUrlRange(1, $statuss->lastPage()) as $page => $url)
                    <a href="{{ $url }}" class="join-item btn btn-xs {{ $page == $statuss->currentPage() ? 'bg-orange-400' : '' }}">
                        {{ $page }}
                    </a>
                @endforeach
            </div>

            @if ($statuss->hasMorePages())
                <a href="{{ $statuss->nextPageUrl() }}" class="ml-1 join-item btn btn-xs">></a>
            @else
                <button class="ml-1 join-item btn btn-xs" disabled>></button>
            @endif
        </div>

        @foreach ($statuss as $status)
            <dialog id="modaldetail{{ $status->Id_Status }}" class="modal">
                <div class="w-6/12 bg-white modal-box">
                    <div class="bg-white">
                        <h3 class="text-lg font-bold">Detail Rental</h3>
                        <hr class="my-4 border-t border-gray-500">
                        <div class="flex justify-center mb-4">
                            <img src="{{ asset('storage/' . $status->Rental->Kendaraan->Gambar) }}" class="w-64 h-40">
                        </div>
                        <table class="w-full text-left table-auto">
                            <tbody>
                                <tr>
                                    <td class="text-sm font-bold">Nama Penyewa:</td>
                                    <td class="text-sm">{{ $status->Rental->User->Nama_Lengkap }}</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-bold">Nama Kendaraan:</td>
                                    <td class="text-sm">{{ $status->Rental->Kendaraan->Nama_Kendaraan }}</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-bold">Alamat</td>
                                    <td class="text-sm">{{ $status->Rental->Alamat }}</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-bold">Nomor Handphone:</td>
                                    <td class="text-sm">{{ $status->Rental->User->No_Handphone }}</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-bold">Tanggal Sewa:</td>
                                    <td class="text-sm">{{ $status->Rental->Tanggal_Sewa }}</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-bold">Tanggal Selesai:</td>
                                    <td class="text-sm">{{ $status->Rental->Tanggal_Selesai }}</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-bold">Total Harga:</td>
                                    <td class="text-sm">{{ $status->Rental->Total_Harga }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="flex justify-end mt-4">
                            <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                onclick="document.getElementById('modaldetail{{ $status->Id_Status }}').close();">Batal</button>
                        </div>
                    </div>
                </div>
            </dialog>
        @endforeach

    </body>
@endsection