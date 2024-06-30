@extends('layout/app')

@section('title')
    Admin Riwayat
@endsection

@section('navbar')
    @include('components/navbaradmin')
@endsection

@section('content')

    <body class="font-poppins">
        <div class="text-left ml-[21rem] mt-4 mb-4">
            <ul>
                <li class="mb-4 text-xl font-bold">Riwayat</li>
                <li>
                    <a href="{{ route('cetakLaporan') }}" class="text-sm bg-blue-400 rounded-full btn btn-sm">
                        Cetak Laporan
                    </a>
                </li>
            </ul>
        </div>
        <table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
            <thead class="">
                <tr>
                    <th class="border border-slate-200 p-2 w-[8rem] text-xs">No</th>
                    <th class="border border-slate-200 p-2 w-[16rem] text-xs">No Pesanan</th>
                    <th class="border border-slate-200 p-2 w-[8rem] text-xs">Tanggal Mulai</th>
                    <th class="border border-slate-200 p-2 w-[8rem] text-xs">Tanggal Selesai</th>
                    <th class="border border-slate-200 p-2 w-[16rem] text-xs">Detail Pesanan</th>
                </tr>
            </thead>

            @foreach ($riwayats as $riwayat)
                <tbody class="text-center">
                    <tr>
                        <td class="p-2 text-xs border border-slate-200">
                            {{ ($riwayats->currentPage() - 1) * $riwayats->perPage() + $loop->iteration }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $riwayat->No_Pesanan }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $riwayat->Rental->Tanggal_Sewa }}</td>
                        <td class="p-2 text-xs border border-slate-200">{{ $riwayat->Rental->Tanggal_Selesai }}</td>
                        <td class="p-2 text-xs border border-slate-200">
                            <button class="mr-1 text-xs bg-yellow-400 rounded-lg btn btn-xs"
                                onclick="modaldetail{{ $riwayat->Id_Riwayat }}.showModal()">Detail</button>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
        <div class="flex justify-end mt-3 mr-32 join">
            @if ($riwayats->onFirstPage())
                <button class="mr-1 join-item btn btn-xs" disabled><</button>
            @else
                <a href="{{ $riwayats->previousPageUrl() }}" class="mr-1 join-item btn btn-xs"><</a>
            @endif

            <div class="flex rounded-none outline outline-1">
                @foreach ($riwayats->getUrlRange(1, $riwayats->lastPage()) as $page => $url)
                    <a href="{{ $url }}" class="join-item btn btn-xs {{ $page == $riwayats->currentPage() ? 'bg-orange-400' : '' }}">
                        {{ $page }}
                    </a>
                @endforeach
            </div>

            @if ($riwayats->hasMorePages())
                <a href="{{ $riwayats->nextPageUrl() }}" class="ml-1 join-item btn btn-xs">></a>
            @else
                <button class="ml-1 join-item btn btn-xs" disabled>></button>
            @endif
        </div>

    </body>

    @foreach ($riwayats as $riwayat)
        <dialog id="modaldetail{{ $riwayat->Id_Riwayat }}" class="modal">
            <div class="w-6/12 bg-white modal-box">
                <div class="bg-white">
                    <h3 class="text-lg font-bold">Detail Rental</h3>
                    <hr class="my-4 border-t border-gray-500">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('storage/' . $riwayat->Rental->Kendaraan->Gambar) }}" class="w-64 h-40">
                    </div>
                    <table class="w-full text-left table-auto">
                        <tbody>
                            <tr>
                                <td class="text-sm font-bold">Nama Penyewa:</td>
                                <td class="text-sm">{{ $riwayat->Rental->User->Nama_Lengkap }}</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-bold">Nama Kendaraan:</td>
                                <td class="text-sm">{{ $riwayat->Rental->Kendaraan->Nama_Kendaraan }}</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-bold">Alamat</td>
                                <td class="text-sm">{{ $riwayat->Rental->Alamat }}</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-bold">Nomor Handphone:</td>
                                <td class="text-sm">{{ $riwayat->Rental->User->No_Handphone }}</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-bold">Tanggal Sewa:</td>
                                <td class="text-sm">{{ $riwayat->Rental->Tanggal_Sewa }}</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-bold">Tanggal Selesai:</td>
                                <td class="text-sm">{{ $riwayat->Rental->Tanggal_Selesai }}</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-bold">Total Harga:</td>
                                <td class="text-sm">Rp {{ number_format($riwayat->Rental->Total_Harga, 0, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-end mt-4">
                        <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                            onclick="document.getElementById('modaldetail{{ $riwayat->Id_Riwayat }}').close();">Batal</button>
                    </div>
                </div>
            </div>
        </dialog>
    @endforeach
@endsection
