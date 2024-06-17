@extends('layout/app')

@section('title')
Admin Rental
@endsection

@section('navbar')
@include('components/navbaradmin')
@endsection

@section('content')
<body class="font-poppins">
    <div class="text-left ml-[21rem] mt-4 mb-4">
        <ul>
            <li class="mb-6 text-xl font-bold">Rental</li>
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
                <th class="p-2 text-xs border w-[8rem] border-slate-200">Kendaraan</th>
                <th class="p-2 text-xs border w-[10rem] border-slate-200">Alamat</th>
                <th class="p-2 text-xs border w-[8rem] border-slate-200">No. Handphone</th>
                <th class="p-2 text-xs border w-[6rem] border-slate-200">Total</th>
                <th class="p-2 text-xs border w-[4rem] border-slate-200">SIM</th>
                <th class="p-2 text-xs border w-[5rem] border-slate-200">Bukti</th>
                <th class="p-2 text-xs border w-[6rem] border-slate-200">Aksi</th>
            </tr>
        </thead>

        @foreach ($rentals as $rental)
        <tbody class="text-center">
            <tr>
                <td class="p-2 text-xs border border-slate-200">{{ ($rentals->currentPage() - 1) * $rentals->perPage() + $loop->iteration }}</td>
                <td class="p-2 text-xs border border-slate-200">{{$rental->User->Username}}</td>
                <td class="p-2 text-xs border border-slate-200">{{$rental->Kendaraan->Nama_Kendaraan}}</td>
                <td class="p-2 text-xs border border-slate-200">{{$rental->Alamat}}</td>
                <td class="p-2 text-xs border border-slate-200">{{$rental->User->No_Handphone}}</td>
                <td class="p-2 text-xs border border-slate-200">{{$rental->Total_Harga}}</td>
                <td class="p-2 text-xs border border-slate-200">
                    <button class="mr-1 text-xs bg-yellow-200 rounded-lg btn btn-xs" onclick="modalsim{{$rental->Id_Rental}}.showModal()">SIM</button>
                </td>
                <td class="p-2 text-xs border border-slate-200">
                    <button class="mr-1 text-xs bg-yellow-200 rounded-lg btn btn-xs" onclick="modalbukti{{$rental->Id_Rental}}.showModal()">Bukti</button>
                </td>
                <td class="flex items-center justify-center p-2 text-xs border border-slate-200">
                    @if ($rental->Pengajuan === 'Disetujui')
                    <button class="mr-1 text-xs bg-green-400 rounded-lg btn btn-xs">Disetujui</button>
                    @elseif ($rental->Pengajuan === 'Ditolak')
                    <button class="mr-1 text-xs bg-red-400 rounded-lg btn btn-xs">Ditolak</button>
                    @else
                    <button class="mr-1 text-xs bg-gray-400 rounded-lg btn btn-xs" onclick="modaledit{{$rental->Id_Rental}}.showModal()">Persetujuan</button>
                    @endif
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>
    <div class="flex justify-end mt-3 mr-8 join">
        @if ($rentals->onFirstPage())
            <button class="mr-1 join-item btn btn-xs" disabled><</button>
        @else
            <a href="{{ $rentals->previousPageUrl() }}" class="mr-1 join-item btn btn-xs"><</a>
        @endif

        <div class="flex rounded-none outline outline-1">
            @foreach ($rentals->getUrlRange(1, $rentals->lastPage()) as $page => $url)
                <a href="{{ $url }}" class="join-item btn btn-xs {{ $page == $rentals->currentPage() ? 'bg-orange-400' : '' }}">
                    {{ $page }}
                </a>
            @endforeach
        </div>

        @if ($rentals->hasMorePages())
            <a href="{{ $rentals->nextPageUrl() }}" class="ml-1 join-item btn btn-xs">></a>
        @else
            <button class="ml-1 join-item btn btn-xs" disabled>></button>
        @endif
    </div>
</body>

@if ($rentals)
@foreach ($rentals as $rental)
<dialog id="modalsim{{$rental->Id_Rental}}" class="modal">
    <div class="w-6/12 bg-white modal-box">
        <div class="bg-white">
            <h3 class="text-lg font-bold">SIM</h3>
            <hr class="my-4 border-t border-gray-500">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('storage/' . $rental->SIM) }}" class="w-64 h-40">
            </div>
            <div class="flex justify-end mt-4">
                <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="document.getElementById('modalsim{{$rental->Id_Rental}}').close();">Batal</button>
            </div>
        </div>
    </div>
</dialog>

<dialog id="modalbukti{{$rental->Id_Rental}}" class="modal">
    <div class="w-6/12 bg-white modal-box">
        <div class="bg-white">
            <h3 class="text-lg font-bold">Bukti</h3>
            <hr class="my-4 border-t border-gray-500">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('storage/' . $rental->Bukti_Pembayaran) }}" class="w-64 h-40">
            </div>
            <div class="flex justify-end mt-4">
                <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="document.getElementById('modalbukti{{$rental->Id_Rental}}').close();">Batal</button>
            </div>
        </div>
    </div>
</dialog>

<dialog id="modaldetail{{$rental->Id_Rental}}" class="modal">
    <div class="w-6/12 bg-white modal-box">
        <div class="bg-white">
            <h3 class="text-lg font-bold">Detail Rental</h3>
            <hr class="my-4 border-t border-gray-500">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('storage/' . $rental->Kendaraan->Gambar) }}" class="w-64 h-40">
            </div>
            <table class="w-full text-left table-auto">
                <tbody>
                    <tr>
                        <td class="text-sm font-bold">Nama Penyewa:</td>
                        <td class="text-sm">{{ $rental->User->Nama_Lengkap }}</td>
                    </tr>
                    <tr>
                        <td class="text-sm font-bold">Nama Kendaraan:</td>
                        <td class="text-sm">{{ $rental->Kendaraan->Nama_Kendaraan }}</td>
                    </tr>
                    <tr>
                        <td class="text-sm font-bold">Alamat</td>
                        <td class="text-sm">{{$rental->Alamat}}</td>
                    </tr>
                    <tr>
                        <td class="text-sm font-bold">Nomor Handphone:</td>
                        <td class="text-sm">{{ $rental->User->No_Handphone }}</td>
                    </tr>
                    <tr>
                        <td class="text-sm font-bold">Tanggal Sewa:</td>
                        <td class="text-sm">{{ $rental->Tanggal_Sewa }}</td>
                    </tr>
                    <tr>
                        <td class="text-sm font-bold">Tanggal Selesai:</td>
                        <td class="text-sm">{{ $rental->Tanggal_Selesai }}</td>
                    </tr>
                    <tr>
                        <td class="text-sm font-bold">Total Harga:</td>
                        <td class="text-sm">{{ $rental->Total_Harga }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-end mt-4">
                <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="document.getElementById('modaldetail{{$rental->Id_Rental}}').close();">Batal</button>
            </div>
        </div>
    </div>
</dialog>

<dialog id="modaledit{{$rental->Id_Rental}}" class="modal">
    <div class="w-6/12 bg-white modal-box">
        <form method="POST" action="{{ route('updateRentalStatus', $rental->Id_Rental) }}">
            @csrf
            @method('PUT')
            <h3 class="text-lg font-bold">Persetujuan Rental</h3>
            <hr class="my-4 border-t border-gray-500">

            <div class="text-center">
                <p class="mb-4">Apakah Anda ingin menyetujui atau menolak rental ini?</p>
            </div>

            <div class="flex justify-end">
                <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="document.getElementById('modaledit{{$rental->Id_Rental}}').close();">Batal</button>
                <button type="submit" name="status" value="Disetujui" class="mr-4 bg-green-400 border btn">Setuju</button>
                <button type="submit" name="status" value="Ditolak" class="bg-red-400 border btn">Tolak</button>
            </div>
        </form>
    </div>
</dialog>


@endforeach
@endif
@endsection


