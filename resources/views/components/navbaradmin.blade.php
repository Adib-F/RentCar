<nav>
<div class="navbar shadow-md text-black">
  <div class="navbar-start">
  <div class="drawer">
  <input id="my-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content">
    <!-- Page content here -->
    <label for="my-drawer" class="btn"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z"/></svg></label>
  </div> 
  <div class="drawer-side">
    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
 
    <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content text-black font-poppins ">
    <ul class="ml-auto mb-12">
        <li><label for="my-drawer" class="btn"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z"/></svg></label></li>
    </ul>
    <ul class="text-black font-semibold font-poppins ">
      <li class="mb-1 text-base"><a href="{{route('AdminDashboard')}}"><img src="images/home.svg" alt="" class="mr-4">Dashboard</a></li>
      <li class="mb-1 text-base"><a href="{{route('AdminPengguna')}}"><img src="images/user.png" alt="" class="mr-4">Pengguna</a></li>
      <li class="mb-1 text-base"><a href="{{route('AdminKendaraan')}}"><img src="images/steer.png" alt="" class="mr-4">Kendaraan</a></li>
      <li class="mb-1 text-base"><a href="{{route('AdminRental')}}"><img src="images/rental.svg" alt=""class="mr-4">Rental</a></li>
      <li class="mb-1 text-base"><a href="{{route('AdminKonfirmasi')}}"><img src="images/confirm.svg" alt=""class="mr-4">Konfirmasi</a></li>
      <li class="mb-1 text-base"><a href="{{route('AdminPromo')}}"><img src="images/promo1.png" alt=""class="mr-4">Promo</a></li>
      <li class="mb-1 text-base"><a href="{{route('AdminRiwayat')}}"><img src="images/Riwayat.svg" alt=""class="mr-4">Riwayat</a></li>
      </ul>
    </ul>
  </div>
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
