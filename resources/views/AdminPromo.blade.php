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
      <li><button class="text-sm bg-orange-400 rounded-full btn btn-sm" onclick="modaltambah.showModal()">+ Tambahkan Data </button></li>
    </ul>
</div>
<table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
  <thead class="">
    <tr>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Nama Promo</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Deskripsi</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Diskon %</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Gambar</th>
      <th class="border border-slate-200 p-2 w-[9rem] text-xs">Aksi</th>
    </tr>
  </thead>

  @foreach ($promos as $promo )
  <tbody class="text-center">
    <tr>
      <td class="p-2 text-xs border border-slate-200">{{$promo->Nama_Promo}}</td>
      <td class="p-2 text-xs border border-slate-200">{{$promo->Deskripsi}}</td>
      <td class="p-2 text-xs border border-slate-200">{{$promo->Diskon}}</td>
      <td class="p-2 text-xs border border-slate-200">
      <img src="{{ asset('storage/' . $promo->Gambar) }}" class="w-64 h-20">
      </td>
      <td class="p-2 text-xs border border-slate-200">
    <div class="flex flex-col items-center justify-center h-full">
      <button class="mb-1 text-xs bg-green-400 rounded-lg btn btn-xs" onclick="modaledit{{$promo->Id_Promo}}.showModal()">Edit</button>
      <button class="text-xs bg-red-400 rounded-lg btn btn-xs" onclick="modalhapus{{$promo->Id_Promo}}.showModal()">Delete</button>
    </div>
  </td>     </tr>
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

<dialog id="modaltambah" class="modal">
  <div class="w-6/12 bg-white modal-box">
    <form method="POST" action="{{route('addPromo')}}" enctype="multipart/form-data">
    @csrf
      <h3 class="text-lg font-bold">Tambah Data Promo</h3>
      <hr class="my-4 border-t border-gray-500 ">
        <div class="grid grid-cols-2 gap-4">
          <div><label for="nama" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Nama Promo</label>
          <input id="nama" type="text" name="nama_promo" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Nama Promo" required/></div>

          <div><label for="deskripsi" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Deskripsi</label>
          <input id="deskripsi" type="text" name="deskripsi" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Deskripsi" required/></div>

          <div><label for="diskon" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Diskon</label>
          <input id="diskon" type="text" name="diskon" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Diskon" required /></div>

          <div><label for="gambar" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Gambar</label>
          <input id="gambar" type="file" name="gambar" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Gambar"></div>
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
<dialog id="modaledit{{$promo->Id_Promo}}" class="modal">
  <div class="w-6/12 bg-white modal-box">
    <form method="POST" action="{{route('updatePromo', $promo->Id_Promo)}}" enctype="multipart/form-data"">
    @csrf
    @method('PUT')
      <h3 class="text-lg font-bold">Edit Data Promo</h3>
      <hr class="my-4 border-t border-gray-500 ">
        <div class="grid grid-cols-2 gap-4">
          
          <div><label for="nama" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Nama Promo</label>
          <input id="nama" type="text" name="nama_promo" value="{{$promo->Nama_Promo}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Nama Promo" required/></div>

          <div><label for="kode" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Kode Promo</label>
          <input id="kode" type="text" name="kode_promo" value="{{$promo->Kode_Promo}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Kode Promo" required /></div>

          <div><label for="deskripsi" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Deskripsi</label>
          <input id="deskripsi" type="text" name="deskripsi" value="{{$promo->Deskripsi}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Deskripsi" required/></div>

          <div><label for="diskon" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Diskon</label>
          <input id="diskon" type="text" name="diskon" value="{{$promo->Diskon}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="DIskon"required /></div>

          <div><label for="gambar" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Gambar</label>
          <input id="gambar" type="file" name="gambar" value="{{$promo->Gambar}}" class="flex items-center w-full h-8 pl-3 mt-1 mb-2 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-black" placeholder="Gambar" required/></div>
        </div>
      <div class="flex justify-end">
      <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="document.getElementById('modaledit{{$promo->Id_Promo}}').close();">Batal</button>
      <button type="submit" class="bg-green-400 border btn">Update</button>
      </div>
    </form>
  </div>
</dialog>

<dialog id="modalhapus{{$promo->Id_Promo}}" class="modal">
  <div class="modal-box">
    <h3 class="py-4 text-lg font-bold text-center">Apakah anda yakin ingin menghapus data dengan ID {{$promo->Id_Promo}}</h3>
    <div class="flex justify-center">
      <div class="modal-action">
      <form method="POST" action="{{route('deletePromo', $promo->Id_Promo)}}">
      @csrf
      @method('DELETE')
          <button type="button" class="mr-4 text-white bg-gray-500 border btn" onclick="document.getElementById('modalhapus{{$promo->Id_Promo}}').close();">Batal</button>
          <button type="submit" class="text-white bg-red-500 border btn" value="Delete">Hapus</button>
    </form>
      </div>
    </div>
  </div>
  <script>
document.addEventListener('DOMContentLoaded', () => {
  const openSidebarButton = document.getElementById('open-sidebar');
  const sidebarToggle = document.getElementById('sidebar-toggle');
  const sidebarIcon = document.getElementById('toggle-icon');
  const sidebar = document.getElementById('sidebar');
  const sidebarCheckbox = document.getElementById('my-sidebar');

  // Function to open the sidebar
  const openSidebar = () => {
    sidebar.classList.remove('-translate-x-full');
    sidebar.classList.add('translate-x-0');
    sidebarIcon.classList.add('rotate-180');
    sidebarCheckbox.checked = true;
  };

  // Function to close the sidebar
  const closeSidebar = () => {
    sidebar.classList.remove('translate-x-0');
    sidebar.classList.add('-translate-x-full');
    sidebarIcon.classList.remove('rotate-180');
    sidebarCheckbox.checked = false;
  };

  // Event listener for the new open sidebar button
  openSidebarButton.addEventListener('click', openSidebar);

  // Event listener for the sidebar toggle button
  sidebarToggle.addEventListener('click', () => {
    if (sidebarCheckbox.checked) {
      closeSidebar();
    } else {
      openSidebar();
    }
  });

  // Initially open the sidebar
  openSidebar();
});
</script>
</dialog>
@endforeach
@endif
@endsection

