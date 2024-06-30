<nav id="navbar" class="fixed top-0 z-50 w-full text-black transition-all duration-300 bg-white shadow-md">
    <div class="container flex items-center justify-between py-4 mx-auto">
        <!-- Navbar Start -->
        <div class="flex items-center navbar-start">
            <!-- Mobile Dropdown -->
            <div class="dropdown lg:hidden">
                <button tabindex="0" role="button" class="btn btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </button>
                <ul tabindex="0" class="p-2 mt-3 bg-white shadow dropdown-content rounded-box w-54">
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
            <!-- Logo -->
            <a class="text-xl btn btn-ghost" href="/"><img src="/images/logo-rentcang.png" class="h-10 w-34"
                    alt="Logo"></a>
        </div>
        <!-- Navbar Center -->
        <div class="hidden font-semibold lg:flex navbar-center">
            <ul class="px-1 text-lg menu menu-horizontal">
                <li><a href="/"><img src="/images/Beranda.svg" class="inline-block mr-1 w-7 h-7" alt="Beranda">
                        Beranda</a></li>
                <li>
                    <details>
                        <summary class="flex items-center cursor-pointer"><img src="/images/Kendaraan.png"
                                class="mr-1 w-7 h-7" alt=""> Kendaraan</summary>
                        <ul class="p-2 bg-white shadow-md rounded-box">
                            <li><a href="{{ route('cars') }}"><img src="/images/Car.png" class="w-6 h-5 mr-1"
                                        alt="Mobil"> Mobil</a></li>
                            <li><a href="{{ route('motorcycle') }}"><img src="/images/Motorcycle.png"
                                        class="w-6 h-5 mr-1" alt="Motor"> Motor</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="{{ route('status') }}"><img src="/images/Status.svg" class="inline-block mr-1 w-7 h-7"
                            alt="Status"> Status</a></li>
                <li><a href="{{ route('riwayat') }}"><img src="/images/Riwayat.svg" class="inline-block mr-1 w-7 h-7"
                            alt="Riwayat"> Riwayat</a></li>
            </ul>
        </div>
        <!-- Navbar End -->
        <div class="flex items-center mr-4 navbar-end">
            <details class="relative">
                <summary class="flex items-center ml-2 cursor-pointer lg:ml-20">
                    <img src="/images/user.svg" class="w-7 h-7" alt="User">
                    @auth
                        <span class="ml-2">{{ auth()->user()->Username }}</span>
                    @else
                        <span class="ml-2">Guest</span>
                    @endauth
                    <span class="ml-1 arrow"></span>
                </summary>
                <ul class="absolute right-0 p-6 mt-2 bg-white shadow-lg rounded-box">
                    @auth
                        <li><a href="{{ route('setting') }}"><img src="/images/settings.svg"
                                    class="inline-block w-5 h-5 mr-1" alt="Profile"> Profile</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class="mt-5"><button type="submit" class="flex items-center"><img
                                        src="/images/logout.svg" class="inline-block w-5 h-5 mr-1" alt="Logout">
                                    Logout</button></li>
                        </form>
                    @else
                        <li><a href="{{ route('login') }}"><img src="/images/logout.svg" class="inline-block w-5 h-5 mr-1"
                                    alt="Login"> Login</a></li>
                    @endauth
                </ul>
            </details>
        </div>
    </div>
</nav>

<style>
    .arrow {
        display: inline-block;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid black;
    }

    details[open] .arrow {
        border-top: none;
        border-bottom: 5px solid black;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        // Toggle the dropdown menu
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });
    });
</script>
