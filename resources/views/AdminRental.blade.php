@extends('layout/app')

@section('title')
Admin Rental
@endsection

@section('navbar')
  @include('components/navbaradmin')
@endsection

@section('content')
<body class="font-poppins">
<div class="text-left ml-[21rem] mt-12 mb-4">
    <ul>
      <li class="text-xl font-bold mb-">RENTAL</li>
    </ul>
</div>
<table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
  <thead class="">
    <tr>
      <th class="p-2 text-xs border border-slate-200">No</th>
      <th class="p-2 text-xs border border-slate-200">Penyewa</th>
      <th class="p-2 text-xs border border-slate-200">Kendaraan</th>
      <th class="p-2 text-xs border border-slate-200">Alamat</th>
      <th class="p-2 text-xs border border-slate-200">No. Handphone</th>
      <th class="p-2 text-xs border border-slate-200">Total</th>
      <th class="p-2 text-xs border border-slate-200">SIM</th>
      <th class="p-2 text-xs border border-slate-200">Bukti</th>
      <th class="p-2 text-xs border border-slate-200">Aksi</th>
    </tr>
  </thead>

  @foreach ($rentals as $nomor => $rental)
  <tbody class="text-center">
    <tr>
      <td class="p-2 text-xs border border-slate-200">{{$nomor + 1}}</td>
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
        <button class="mr-1 text-xs bg-yellow-400 rounded-lg btn btn-xs" onclick="modaldetail{{$rental->Id_Rental}}.showModal()">Detail</button>
        <button class="mr-1 text-xs bg-green-400 rounded-lg btn btn-xs" onclick="modaledit{{$rental->Id_Rental}}.showModal()">Edit</button>
        <button class="text-xs bg-red-400 rounded-lg btn btn-xs" onclick="modalhapus{{$rental->Id_Rental}}.showModal()">Delete</button>
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
            <img src="{{ asset('storage/' . $rental->Gambar) }}" class="w-64 h-40">
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
          <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="document.getElementById('modaldetail{{$rental->Id_Kendaraan}}').close();">Batal</button>
          </div>
        </div>
      </div>
    </dialog>

<dialog id="modaledit{{$rental->Id_Rental}}" class="modal">
  <div class="w-6/12 bg-white modal-box">
    <form method="POST" action="{{route('updateRental', $rental->Id_Rental)}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <h3 class="text-lg font-bold">Edit Data rental</h3>
      <hr class="my-4 border-t border-gray-500 ">

        <div class="grid grid-cols-2 gap-4">
          <div><label for="alamat" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Alamat</label>
          <input id="alamat" type="text" name="alamat" value="{{$rental->Alamat}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Alamat" required/></div>

          <div><label for="sim" class="text-sm font-bold leading-tight tracking-normal text-gray-800">SIM</label>
          <input id="sim" type="file" name="sim_rental" value="{{$rental->SIM}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"></div>

          <div><label for="tanggal_sewa" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Tanggal Sewa</label>
          <input id="tanggal_sewa" type="date" name="tanggal_sewa" value="{{$rental->Tanggal_Sewa}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Tangal Sewa" required/></div>

          <div><label for="tanggal_selesai" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Tanggal Selesai</label>
          <input id="tanggal_selesai" type="text" name="tanggal_selesai" value="{{$rental->Tanggal_Selesai}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Tanggal Selesai"required /></div>

          <div><label for="bukti_pembayaran" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Bukti Pembayaran</label>
          <input id="bukti_pembayaran" type="file" name="bukti_pembayaran" value="{{$rental->Bukti_Pembayaran}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black"></div>
        </div>
      <div class="flex justify-end">
      <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="document.getElementById('modaledit{{$rental->Id_Rental}}').close();">Batal</button>
      <button type="submit" class="bg-green-400 border btn">Update</button>
      </div>
    </form>
  </div>
</dialog>

<dialog id="modalhapus{{$rental->Id_Rental}}" class="modal">
  <div class="modal-box">
    <h3 class="py-4 text-lg font-bold text-center">Apakah anda yakin ingin menghapus data dengan ID {{$rental->Id_Rental}}</h3>
    <div class="flex justify-center">
      <div class="modal-action">
        <form method="POST" action="{{route('deleteRental', $rental->Id_Rental)}}">
          @csrf
          @method('DELETE')
          <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="document.getElementById('modalhapus{{$rental->Id_Rental}}').close();">Batal</button>
          <button type="submit" class="text-white bg-red-500 border btn" value="Delete">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</dialog>
</body>

@endforeach
@endif
@endsection

