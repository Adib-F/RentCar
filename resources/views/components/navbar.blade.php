<nav>
  <div class="navbar shadow-md text-black ">
    <div class="navbar-start ">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden  " >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-54 bg-white">
          <li><a class="text-black" href="dashboard">Beranda</a></li>
          <li>
            <a>Kendaraan</a>
            <ul class="p-2">
              <li><a href="{{route('cars')}}">Mobil</a></li>
              <li><a href="motorcycle">Motor</a></li>
            </ul>
          </li>
          <li><a href="statusAwal.blade.php">Status</a></li>
          <li><a href="riwayat">Riwayat</a></li>
        </ul>
      </div>
      <a class="btn btn-ghost text-xl"><img src="images/logo-rentcang.png" class="h-10 w-34" alt=""></a>
    </div>
    <div class="navbar-center hidden lg:flex font-semibold ">
    <ul class="menu menu-horizontal px-1 text-lg">
      <li><a><img src="images/Beranda.svg" href="dashboard.blade.php">Beranda</a></li>
      <li>
        <details>
          <summary><img src="images/Kendaraan.png"class="w-7 h-7" alt="">Kendaraan</summary>
          <ul class="p-2 shadow-md bg-white">
            <li><a><img src="images/Car.png"class="w-6 h-5"  href="cars">Mobil</a></li>
            <li><a><img src="images/Motorcycle.png"class="w-6 h-5" href="motorcycle">Motor</a></li>
          </ul>
        </details>  
      </li>
      <li><a><img src="images/Status.svg" alt="" href="statusAwal.blade.php">Status</a></li>
      <li><a><img src="images/Riwayat.svg" alt="" href="riwayat">Riwayat</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <ul class="menu menu-horizontal px-2 text-lg">
      <li>
        <details>
          <summary class="ml-20"><img src="images/settings.svg" alt=""></summary>
          <ul class="p-2 shadow-lg bg-white">
            <li><a><img src="images/user.svg" alt="">Julianto</a></li>
            <li><a><img src="images/settings.svg" alt="" href="setting.blade.php">Profile</a></li>
            <li><a><img src="images/logout.svg" alt="">Logout</a></li>
          </ul>
        </details>  
      </li>
    </ul>
  </div>
</div>
</nav>
