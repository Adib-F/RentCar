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
      <li class="text-xl font-bold mb-4">Pengguna</li>
      <li><button class="text-sm btn btn-sm rounded-full bg-orange-400" onclick="modaltambah.showModal()">+ Tambahkan Data </button></li>
    </ul>
</div>
<table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
  <thead class="">
    <tr>
      <th class="border border-slate-200 p-2 text-xs">ID</th>
      <th class="border border-slate-200 p-2 text-xs">Nama Lengkap</th>
      <th class="border border-slate-200 p-2 text-xs">Username</th>
      <th class="border border-slate-200 p-2 text-xs">No Handphone</th>
      <th class="border border-slate-200 p-2 text-xs">NIK</th>
      <th class="border border-slate-200 p-2 text-xs">Roles</th>
      <th class="border border-slate-200 p-2 text-xs">Email</th>
      <th class="border border-slate-200 p-2 text-xs">Password</th>
      <th class="border border-slate-200 p-2 text-xs">Aksi</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td class="border border-slate-200 p-2 text-xs">1</td>
      <td class="border border-slate-200 p-2 text-xs">Mirza Ardanas</td>
      <td class="border border-slate-200 p-2 text-xs">Mirza</td>
      <td class="border border-slate-200 p-2 text-xs">08123456789</td>
      <td class="border border-slate-200 p-2 text-xs">3312301114</td>
      <td class="border border-slate-200 p-2 text-xs">Admin</td>
      <td class="border border-slate-200 p-2 text-xs">mirzaaardanas@gmail.com</td>
      <td class="border border-slate-200 p-2 text-xs">*******</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1" onclick="modaledit.showModal()">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg" onclick="modalhapus.showModal()">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">2</td>
      <td class="border border-slate-200 p-2 text-xs">Irfan Nurfauzi</td>
      <td class="border border-slate-200 p-2 text-xs">Irfan</td>
      <td class="border border-slate-200 p-2 text-xs">08123456789</td>
      <td class="border border-slate-200 p-2 text-xs">3312301113</td>
      <td class="border border-slate-200 p-2 text-xs">Admin</td>
      <td class="border border-slate-200 p-2 text-xs">irfannurfauzi@gmail.com</td>
      <td class="border border-slate-200 p-2 text-xs">*******</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">3</td>
      <td class="border border-slate-200 p-2 text-xs">M Adib Fakhri Siregar</td>
      <td class="border border-slate-200 p-2 text-xs">Adib</td>
      <td class="border border-slate-200 p-2 text-xs">08123456789</td>
      <td class="border border-slate-200 p-2 text-xs">3312301097</td>
      <td class="border border-slate-200 p-2 text-xs">Admin</td>
      <td class="border border-slate-200 p-2 text-xs">adibfakhrisiregar@gmail.com</td>
      <td class="border border-slate-200 p-2 text-xs">*******</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">4</td>
      <td class="border border-slate-200 p-2 text-xs">Hafivah Tahta Rasyida</td>
      <td class="border border-slate-200 p-2 text-xs">Hafivah</td>
      <td class="border border-slate-200 p-2 text-xs">08123456789</td>
      <td class="border border-slate-200 p-2 text-xs">3312301100</td>
      <td class="border border-slate-200 p-2 text-xs">Admin</td>
      <td class="border border-slate-200 p-2 text-xs">hafivahtahta@gmail.com</td>
      <td class="border border-slate-200 p-2 text-xs">*******</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr> 
      <td class="border border-slate-200 p-2 text-xs">5</td>
      <td class="border border-slate-200 p-2 text-xs">Arfa Aniq Sabila</td>
      <td class="border border-slate-200 p-2 text-xs">Arfa</td>
      <td class="border border-slate-200 p-2 text-xs">08123456789</td>
      <td class="border border-slate-200 p-2 text-xs">3312301095</td>
      <td class="border border-slate-200 p-2 text-xs">Admin</td>
      <td class="border border-slate-200 p-2 text-xs">ArfaAniq@gmail.com</td>
      <td class="border border-slate-200 p-2 text-xs">*******</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">6</td>
      <td class="border border-slate-200 p-2 text-xs">Julianto Ramadhan</td>
      <td class="border border-slate-200 p-2 text-xs">Julianto</td>
      <td class="border border-slate-200 p-2 text-xs">08123456789</td>
      <td class="border border-slate-200 p-2 text-xs">3312301114</td>
      <td class="border border-slate-200 p-2 text-xs">Penyewa</td>
      <td class="border border-slate-200 p-2 text-xs">juliantoramadhan@gmail.com</td>
      <td class="border border-slate-200 p-2 text-xs">*******</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">7</td>
      <td class="border border-slate-200 p-2 text-xs">Rahmat Pratama</td>
      <td class="border border-slate-200 p-2 text-xs">Rahmat</td>
      <td class="border border-slate-200 p-2 text-xs">08123456789</td>
      <td class="border border-slate-200 p-2 text-xs">3312301113</td>
      <td class="border border-slate-200 p-2 text-xs">Penyewa</td>
      <td class="border border-slate-200 p-2 text-xs">rahmatpratama@gmail.com</td>
      <td class="border border-slate-200 p-2 text-xs">*******</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
   
  </tbody>
</table>
<div class=" join flex justify-end mt-3 mr-20 ">
  <button class="join-item btn btn-xs mr-1"><</button>
  <div class="outline outline-1 rounded-none flex">
    <button class="join-item btn btn-xs btn-active bg-orange-400">1</button>
    <button class="join-item btn btn-xs ">2</button>
    <button class="join-item btn btn-xs">3</button>
    <button class="join-item btn btn-xs">4</button>
  </div>
  <button class="join-item btn btn-xs  ml-1">></button>
</div>

<dialog id="modaltambah" class="modal">
  <div class="modal-box w-6/12 bg-white">
    <form action="" class=" bg-white">
      <h3 class="font-bold text-lg">Tambah Data Pengguna</h3>
      <hr class="border-t border-gray-500 my-4 ">

        <div class="grid gap-4 grid-cols-2">
          <div><label for="nama" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nama Lengkap</label>
          <input id="nama" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Nama Lengkap" required/></div>

          <div><label for="username" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Username</label>
          <input id="username" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Username" required /></div>

          <div><label for="hp" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">No Handphone</label>
          <input id="hp" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="No Handphone" required/></div>

          <div><label for="nik" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">NIK</label>
          <input id="nik" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="NIK"required /></div>

          <div><label for="roles" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Roles</label>
            <select class="select select-sm mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Roles" required>
              <option disabled selected class="text-gray-600" value="">Roles</option>
              <option class="text-gray-600"  value="">Penyewa</option>
              <option class="text-gray-600">Admin</option>
            </select>
          </div>

          <div><label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Email</label>
          <input id="email" type="email" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Email" required/></div>

          <div><label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Password</label>
          <input id="email" type="password" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Password" required /></div>
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
      <h3 class="font-bold text-lg">Edit Data Pengguna</h3>
      <hr class="border-t border-gray-500 my-4 ">

        <div class="grid gap-4 grid-cols-2">
          <div><label for="nama" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nama Lengkap</label>
          <input id="nama" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Nama Lengkap" required/></div>

          <div><label for="username" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Username</label>
          <input id="username" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Username" required /></div>

          <div><label for="hp" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">No Handphone</label>
          <input id="hp" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="No Handphone" required/></div>

          <div><label for="nik" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">NIK</label>
          <input id="nik" type="text" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="NIK"required /></div>

          <div><label for="roles" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Roles</label>
            <select class="select select-sm mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Roles" required>
              <option disabled selected class="text-gray-600" value="">Roles</option>
              <option class="text-gray-600"  value="">Penyewa</option>
              <option class="text-gray-600">Admin</option>
            </select>
          </div>

          <div><label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Email</label>
          <input id="email" type="email" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Email" required/></div>

          <div><label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Password</label>
          <input id="email" type="password" class="mb-2 mt-1 text-gray-600 focus:outline-none focus:border focus:border-black font-normal w-full h-8 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Password" required /></div>
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

<dialog id="modalhapus" class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg py-4 text-center">Apakah anda yakin ingin menghapus data ini?</h3>
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
</dialog>
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
</body>   
@endsection
