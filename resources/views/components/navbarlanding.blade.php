<nav>
<div class="navbar shadow-md text-black">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-54 bg-white">
          <li><a class="text-black" href="{{route('LandingDashboard')}}">Beranda</a></li>
          <li>
            <a>Kendaraan</a>
            <ul class="p-2">
              <li ><a href="{{route('landingcars')}}">Mobil</a></li>
              <li><a href="{{route('landingmotorcycle')}}">Motor</a></li>
            </ul>
          </li>
          <li onclick="modallanding.showModal()">Status</li>
          <li onclick="modallanding.showModal()">Riwayat</li>
        </ul>
      </div>
      <a class="btn btn-ghost text-xl"><img src="images/logo-rentcang.png" class="h-10 w-34" alt="Logo"></a>
    </div>
    <div class="navbar-center hidden lg:flex font-semibold">
      <ul class="menu menu-horizontal px-1 text-lg">
        <li><a href="{{route('LandingDashboard')}}"><img src="images/Beranda.svg" class="inline-block w-6 h-6" alt="Beranda">Beranda</a></li>
        <li>
          <details>
            <summary><img src="images/Kendaraan.png" class="inline-block w-7 h-7" alt="Kendaraan">Kendaraan</summary>
            <ul class="p-2 shadow-md bg-white">
              <li><a href="{{route('landingcars')}}"><img src="images/Car.png" class="inline-block w-6 h-5" alt="Mobil">Mobil</a></li>
              <li><a href="{{route('landingmotorcycle')}}"><img src="images/Motorcycle.png" class="inline-block w-6 h-5" alt="Motor">Motor</a></li>
            </ul>
          </details>
        </li>
        <li onclick="modallanding.showModal()"><a><img src="images/Status.svg" class="inline-block w-6 h-6" alt="Status">Status</a></li>
        <li onclick="modallanding.showModal()"><a><img src="images/Riwayat.svg" class="inline-block w-6 h-6" alt="Riwayat">Riwayat</a></li>
      </ul>
    </div>
    <div class="navbar-end">
       <button class="btn bg-orange-400 font-extrabold btn-sm rounded-full mr-4 px-6" ><a href="{{route('login')}}">Masuk </a></button>
        <button class="btn bg-gray-300 font-extrabold btn-sm rounded-full px-6 text-black hover:bg-orange-100"><a href="{{route('register')}}">Daftar</a></button>
    </div>
  </div>
</nav>