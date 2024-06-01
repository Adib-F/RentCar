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
      <li><button class="text-sm btn btn-sm rounded-full bg-orange-400" onclick="modaltambah.showModal()">+ Tambahkan Data </button></li>
    </ul>
</div>
<table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
  <thead class="">
    <tr>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Nama Promo</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Kode Promo</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Deskripsi</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Diskon %</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Gambar</th>
      <th class="border border-slate-200 p-2 w-[9rem] text-xs">Aksi</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td class="border border-slate-200 p-2 text-xs">Promo Hari Pahlawan</td>
      <td class="border border-slate-200 p-2 text-xs">P-01</td>
      <td class="border border-slate-200 p-2 text-xs">Ini </td>
      <td class="border border-slate-200 p-2 text-xs">10%</td>
      <td class="border border-slate-200 p-2 text-xs">promo1.png</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">2</td>
      <td class="border border-slate-200 p-2 text-xs">P-02</td>
      <td class="border border-slate-200 p-2 text-xs">ini adalah</td>
      <td class="border border-slate-200 p-2 text-xs">15%</td>
      <td class="border border-slate-200 p-2 text-xs">promo2.png</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">3</td>
      <td class="border border-slate-200 p-2 text-xs">p-03</td>
      <td class="border border-slate-200 p-2 text-xs">ini adalah</td>
      <td class="border border-slate-200 p-2 text-xs">10%</td>
      <td class="border border-slate-200 p-2 text-xs">promo3.png</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">4</td>
      <td class="border border-slate-200 p-2 text-xs">p-04</td>
      <td class="border border-slate-200 p-2 text-xs">ini adalah</td>
      <td class="border border-slate-200 p-2 text-xs">15%</td>
      <td class="border border-slate-200 p-2 text-xs">promo4.png</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr> 
      <td class="border border-slate-200 p-2 text-xs">5</td>
      <td class="border border-slate-200 p-2 text-xs"></td>
      <td class="border border-slate-200 p-2 text-xs">0875637881</td>
      <td class="border border-slate-200 p-2 text-xs">Sagulung</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.700.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">6</td>
      <td class="border border-slate-200 p-2 text-xs"></td>
      <td class="border border-slate-200 p-2 text-xs">08134757372</td>
      <td class="border border-slate-200 p-2 text-xs">Batu Ampar</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.450.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">7</td>
      <td class="border border-slate-200 p-2 text-xs"></td>
      <td class="border border-slate-200 p-2 text-xs">08134758389</td>
      <td class="border border-slate-200 p-2 text-xs">Botania</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.550.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
   
  </tbody>
</table>
<div class=" join flex justify-end mt-3 ">
  <button class="join-item btn btn-xs mr-1"><</button>
  <div class="outline outline-1 rounded-none flex">
    <button class="join-item btn btn-xs btn-active bg-orange-400">1</button>
    <button class="join-item btn btn-xs ">2</button>
    <button class="join-item btn btn-xs">3</button>
    <button class="join-item btn btn-xs">4</button>
  </div>
  <button class="join-item btn btn-xs  ml-1">></button>
</div>
</body>

<dialog id="modaltambah" class="modal">
  <div class="modal-box w-6/12 bg-white">
    <form action="" class=" bg-white">
      <h3 class="font-bold text-lg">Tambah Data Kendaraan</h3>
      <hr class="border-t border-gray-500 my-4 ">

        <div class="grid gap-4 grid-cols-2">
          <div><label for="nama" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nama Kendaraan</label>
          <input id="nama" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Nama Kendaraan" required/></div>

          <div><label for="jenis" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Jenis</label>
          <input id="jenis" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Mobil/Motor" required /></div>

          <div><label for="merk" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Merk</label>
          <input id="merk" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Merk" required/></div>

          <div><label for="harga" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Harga</label>
          <input id="harga" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Harga"required /></div>

          <div><label for="gambar" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Gambar</label>
          <input id="gambar" type="file" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Gambar" required/></div>

          <div><label for="stok" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Stok</label>
          <input id="stok" type="number" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Stok" required/></div>
        </div>
    
      <div class="flex justify-end">
      <button class="btn bg-orange-400 border">Tambah</button>
      </div>
    </form>
  </div>
  <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>

<dialog id="modaledit" class="modal">
  <div class="modal-box w-6/12 bg-white">
    <form action="" class=" bg-white">
      <h3 class="font-bold text-lg">Edit Data Kendaraan</h3>
      <hr class="border-t border-gray-500 my-4 ">

        <div class="grid gap-4 grid-cols-2">
          <div><label for="nama" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nama Kendaraan</label>
          <input id="nama" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Nama Kendaraan" required/></div>

          <div><label for="jenis" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Jenis</label>
          <input id="jenis" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Mobil/Motor" required /></div>

          <div><label for="merk" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Merk</label>
          <input id="merk" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Merk" required/></div>

          <div><label for="harga" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Harga</label>
          <input id="harga" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Harga"required /></div>

          <div><label for="gambar" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Gambar</label>
          <input id="gambar" type="file" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Gambar" required/></div>

          <div><label for="stok" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Stok</label>
          <input id="stok" type="number" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Stok" required/></div>
        </div>
    
      <div class="flex justify-end">
      <button class="btn bg-green-400 border">Update</button>
      </div>
    </form>
  </div>
  <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>

<dialog id="modal hapus" class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg py-4 text-center">Apakah anda yakin ingin menghapus data dengan ID</h3>
    <div class="flex justify-center">
      <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn bg-gray-500 border mr-4 text-white">Batal</button>
      </form>
      <button class="btn bg-red-500 border text-white">Hapus</button>
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
@endsection

