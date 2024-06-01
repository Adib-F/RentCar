<nav>
<div class="navbar shadow-md text-black">
  <div class="navbar-start">

  <label class="btn absolute cursor-pointer" id="open-sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px">
        <path d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z" />
      </svg>
    </label>

    <div class="fixed inset-y-0 left-0 w-80 bg-base-200 p-4 transform -translate-x-full transition-transform duration-300 ease-in-out" id="sidebar">
      <input id="my-sidebar" type="checkbox" class="sidebar-toggle hidden" />
      <!-- Button inside the sidebar for closing it -->
      <label for="my-sidebar" class="btn absolute top-4 right-4 z-10 cursor-pointer" id="sidebar-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px" id="toggle-icon">
          <path d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z" />
        </svg>
      </label>

    
    <ul class="menu mt-16 text-base-content text-black font-semibold">
        <li class="mb-1 text-base">
            <a href="{{route('AdminDashboard')}}" class="flex items-center">
                <img src="images/home.svg" alt="Dashboard" class="mr-4">Dashboard
            </a>
        </li>
        <li class="mb-1 text-base">
            <a href="{{route('AdminPengguna')}}" class="flex items-center">
                <img src="images/user.png" alt="Pengguna" class="mr-4">Pengguna
            </a>
        </li>
        <li class="mb-1 text-base">
            <a href="{{route('AdminKendaraan')}}" class="flex items-center">
                <img src="images/steer.png" alt="Kendaraan" class="mr-4">Kendaraan
            </a>
        </li>
        <li class="mb-1 text-base">
            <a href="{{route('AdminRental')}}" class="flex items-center">
                <img src="images/rental.svg" alt="Rental" class="mr-4">Rental
            </a>
        </li>
        <li class="mb-1 text-base">
            <a href="{{route('AdminKonfirmasi')}}" class="flex items-center">
                <img src="images/confirm.svg" alt="Konfirmasi" class="mr-4">Konfirmasi
            </a>
        </li>
        <li class="mb-1 text-base">
            <a href="{{route('AdminPromo')}}" class="flex items-center">
                <img src="images/promo1.png" alt="Promo" class="mr-4">Promo
            </a>
        </li>
        <li class="mb-1 text-base">
            <a href="{{route('AdminRiwayat')}}" class="flex items-center">
                <img src="images/Riwayat.svg" alt="Riwayat" class="mr-4">Riwayat
            </a>
        </li>
    </ul>
</div>

  </div>
  <div class="navbar-center">
  </div>
  <div class="navbar-end">
  <ul class="menu menu-horizontal px-2 text-lg">
      <li>
        <details>
          <summary class="ml-20"><img src="images/settings.svg" alt=""></summary>
          <ul class="p-2 shadow-lg bg-white">
            <li><a><img src="images/user.svg" alt="">Mirza</a></li>
            <li><a  href="{{route('setting')}}"><img src="images/settings.svg" alt="" >Profile</a></li>
            <li><a  href="{{route('login')}}"><img src="images/logout.svg" alt="">Logout</a></li>
          </ul>
        </details>  
      </li>
    </ul>
  </div>
</div>
</nav>
