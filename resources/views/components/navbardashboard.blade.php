<nav>
    <div id="navbar"class="fixed bg-transparent text-black navbar z-50 transition-all duration-300">
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
                    <li><a href="{{ route('Notifikasi') }}">Notifikasi</a></li>
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
        <ul class="hidden lg:flex items-center space-x-4 relative">
        <li class="relative">
                <button id="notification-button" class="block focus:outline-none">
                    <img class="w-6" src="images/ringing.png" alt="Notifikasi">
                    <span class="absolute top-0 right-0 left-4 bottom-4 inline-block w-4 h-4 bg-red-500 rounded-full text-white text-xs">5</span>
                </button>
            <div id="notification-menu" class="absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg hidden z-10">
                <div class="py-2">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center">1</div>
                            <div class="ml-3">
                                <p class="font-semibold text-sm">Pesanan Anda Disetujui </p>
                                <p class="text-xs text-gray-600">Silahkan cek status</p>
                                <div class="flex">
                                    <p class="text-xs mr-2 text-gray-400">18.40 </p>
                                    <p class="text-xs  text-gray-400">|</p>                         
                                    <p class="text-xs ml-2 text-gray-400"> 22-5-2024</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center">1</div>
                            <div class="ml-3">
                                <p class="font-semibold text-sm">Pesanan Anda Disetujui </p>
                                <p class="text-xs text-gray-600">Silahkan cek status</p>
                                <div class="flex">
                                    <p class="text-xs mr-2 text-gray-400">18.40 </p>
                                    <p class="text-xs  text-gray-400">|</p>                         
                                    <p class="text-xs ml-2 text-gray-400"> 22-5-2024</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center">1</div>
                            <div class="ml-3">
                                <p class="font-semibold text-sm">Pesanan Anda Disetujui </p>
                                <p class="text-xs text-gray-600">Silahkan cek status</p>
                                <div class="flex">
                                    <p class="text-xs mr-2 text-gray-400">18.40 </p>
                                    <p class="text-xs  text-gray-400">|</p>                         
                                    <p class="text-xs ml-2 text-gray-400"> 22-5-2024</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="border-t border-gray-300">
                    <a href="{{ route('Notifikasi') }}" class=" underline text-sm block px-4 py-2 text-center text-gray-800 hover:bg-gray-100">
                        Lihat semua notifikasi
                    </a>
                </div>
            </div>
        </li>
    </ul>
            <ul class="px-2 text-lg menu menu-horizontal ">
                <li>
                    <details>
                        <summary class="ml-6"><img src="images/user.svg" alt=""></summary>
                        <ul class="menu p-2 bg-white shadow-lg absolute right-0 mt-2 rounded-box w-44 text-xl">
                        @auth
                            <li class=" hover:bg-gray-100"> <a class="flex items-center break-words"><img src="images/user.svg" alt="User" class="mr-2"><span class="truncate w-full">{{ auth()->user()->Username }}</span></a></li>
                            <li class=" hover:bg-gray-100"><a href="{{ route('setting') }}" class="flex items-center"><img src="images/settings.svg" alt="Profile" class="mr-2">Profile</a></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li class=" hover:bg-gray-100"><button type="submit" class="flex items-center w-full text-left"><img src="images/logout.svg" alt="Logout" class="mr-2">Logout</button></li>
                            </form>
                        @else
                            <li class=" hover:bg-gray-100"><a class="flex items-center"><img src="images/user.svg" alt="Guest" class="mr-2">Guest</a></li>
                            <li class=" hover:bg-gray-100"><a href="{{ route('login') }}" class="flex items-center"><img src="images/logout.svg" alt="Login" class="mr-2">Login</a></li>
                        @endauth
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
            const dropdown = document.querySelector('li.relative');
            const menu = dropdown.querySelector('div');

            dropdown.addEventListener('mouseenter', () => {
                menu.classList.remove('hidden');
            });

            dropdown.addEventListener('mouseleave', () => {
                menu.classList.add('hidden');
            });
        });
    </script>
</nav>