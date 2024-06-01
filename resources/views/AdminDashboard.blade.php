@extends('layout/app')

@section('title')
 Dashboard
@endsection

@section('navbar')
  @include('components/navbaradmin')
@endsection

@section('content')
<body class="font-poppins">
<div class="text-left pl-96 mt-8 mb-16">
    <ul>
      <li class="text-xl font-semibold">Hi Mirza!</li>
      <li class="text-3xl font-bold ">Dashboard</li>
    </ul>
</div>

<div class="grid gap-x-56 gap-y-8 grid-cols-3 mx-96 max-w-4xl ">
    <div class="bg-orange-200 h-28 w-56 mr-4">
      <ul>
          <li class="text-white font-bold text-xl mt-2 ml-4">Pengguna</li>
          <li class="text-right text-white font-bold text-3xl mr-8  mb-4">5</li> 
          <li class="bg-orange-400 text-center text-white"><a href="">more ></a></li>
       </ul>
    </div>
    <div class="bg-red-300 h-28 w-56">
      <ul>
          <li class="text-white font-bold text-xl mt-2 ml-4">Kendaraan</li>
          <li class="text-right text-white font-bold text-3xl mr-8  mb-4">10</li> 
          <li class="bg-red-400 text-center text-white"><a href="">more ></a></li>
       </ul>
    </div>
    <div class="bg-cyan-500 h-28 w-56">
      <ul>
          <li class="text-white font-bold text-xl mt-2 ml-4">Rental</li>
          <li class="text-right text-white font-bold text-3xl mr-8  mb-4">10</li> 
          <li class="bg-cyan-700 text-center text-white"><a href="">more ></a></li>
       </ul>
    </div>
    <div class="bg-green-400 h-28 w-56">
        <ul>
          <li class="text-white font-bold text-xl mt-2 ml-4">Promo</li>
          <li class="text-right text-white font-bold text-3xl mr-8  mb-4">10</li> 
          <li class="bg-green-500 text-center text-white"><a href="">more ></a></li>
       </ul>
    </div>
    <div class="bg-fuchsia-500 h-28 w-56">
    <ul>
          <li class="text-white font-bold text-xl mt-2 ml-4">Riwayat</li>
          <li class="text-right text-white font-bold text-3xl mr-8  mb-4">10</li> 
          <li class="bg-fuchsia-600 text-center text-white"><a href="">more ></a></li>
       </ul>
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
</body>
@endsection
