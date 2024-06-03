<nav>
    <div class="text-black shadow-md navbar ">
        <div class="navbar-start ">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-54 bg-white">
                    <li><a class="text-black" href="/">Beranda</a></li>
                    <li>
                        <a>Kendaraan</a>
                        <ul class="p-2">
                            <li><a href="{{ route('cars') }}">Mobil</a></li>
                            <li><a href="{{ route('motorcycle') }}">Motor</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('status') }}">Status</a></li>
                    <li><a href="{{ route('riwayat') }}">Riwayat</a></li>
                </ul>
            </div>
            <a class="text-xl btn btn-ghost"><img src="images/logo-rentcang.png" class="h-10 w-34" alt=""></a>
        </div>
        <div class="hidden font-semibold navbar-center lg:flex ">
            <ul class="px-1 text-lg menu menu-horizontal">
                <li><a href="/"><img src="images/Beranda.svg" href="dashboard.blade.php">Beranda</a></li>
                <li>
                    <details>
                        <summary><img src="images/Kendaraan.png"class="w-7 h-7" alt="">Kendaraan</summary>
                        <ul class="p-2 bg-white shadow-md">
                            <li><a href="{{ route('cars') }}"><img src="images/Car.png"class="w-6 h-5">Mobil</a></li>
                            <li><a href="{{ route('motorcycle') }}"><img
                                        src="images/Motorcycle.png"class="w-6 h-5">Motor</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="{{ route('status') }}"><img src="images/Status.svg" alt="">Status</a></li>
                <li><a href="{{ route('riwayat') }}"><img src="images/Riwayat.svg" alt="">Riwayat</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <ul class="px-2 text-lg menu menu-horizontal">
                <li>
                    <details>
                        <summary class="ml-20"><img src="images/settings.svg" alt=""></summary>
                        <ul class="p-2 bg-white shadow-lg">
                            @auth
                                <li><a><img src="images/user.svg" alt="">{{ auth()->user()->Username }}</a></li>
                                <li><a href="{{ route('setting') }}"><img src="images/settings.svg"
                                            alt="">Profile</a></li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li><button type="submit"><img src="images/logout.svg" alt="">Logout</button>
                                    </li>
                                </form>
                            @else
                                <li><a><img src="images/user.svg" alt="">Guest</a></li>
                                <li><a href="{{ route('login') }}"><img src="images/logout.svg" alt="">Login</a>
                                </li>
                            @endauth
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
</nav>

