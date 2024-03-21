<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Kendaraan</title>
    <link href="https://cdn.tailwindcss.com/3.4.1/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>
    <div class="navbar bg-base-100 shadow-md">
     <div class="navbar-start">
        <div class="dropdown">
         <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
         </div>
         <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a>HOME</a></li>
            <li><a>NOTIFIKASI</a></li>
            <li><a>STATUS</a></li>
            <li>
            <a><img src="{{asset('images/kendaraan.png') }}" class="w-6 h-6">KENDARAAN</a>
             <ul>
                <li><a>SEMUA  </a></li>
                <li><a>MOTOR  </a></li>
                <li><a>MOBIL</a></li>
             </ul>
            </li>
            <li>
             <a><img src="{{asset('images/settings.png') }}" class="w-6 h-6"></a>
             <ul>
                    <li><a>USERNAME<a><li>
                    <li><a>SETTINGS<a><li>
                    <li><a>LOG OUT<a><li>
             </ul>
            </li>
         </ul>
        </div>
        <a><img src="{{asset('images/logo.png') }} "class="w-28 h-8"></a>
     </div>
     <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
        <li class="- font-bold "><a><img src="{{asset('images/home.svg') }} "class="w-6 h-6">HOME</a></li>
        <li class="- font-bold "><a><img src="{{asset('images/notif.svg') }}" class="w-6 h-6">NOTIFIKASI</a></li>
        <li class="- font-bold "><a><img src="{{asset('images/key.svg') }}" class="w-6 h-6">STATUS</a></li>
         <li>
            <details>
            <summary class="font-bold "><img src="{{asset('images/kendaraan.png') }}" class="w-6 h-6">KENDARAAN</summary>
             <ul class="z-40">
                <li class="font-bold"><a href="kendaraan#slide1"><img src="{{asset('images/kendaraan.png') }}" class="w-6 h-6">SEMUA  </a></li>
                <li class="font-bold"><a href="Motor"><img src="{{asset('images/Motorcycle.svg') }}" class="w-6 h-6 text-black-500">MOTOR  </a></li>
                <li class="font-bold"><a href="Mobil"><img src="{{asset('images/mobil.png') }}" class="w-6 h-5 text-black-500">MOBIL  </a></li>
             </ul>
            </details>
         </li>
         
         </ul>
     </div>
     <div class="navbar-end">
        <ul class="menu menu-horizontal px-1">
         <li>
            <details>
             <summary><img src="{{asset('images/settings.png') }}" class="w-6 h-6"></summary>
             <ul>
                <li class="font-bold "><a>USERNAME</a></li>
                <li class="font-bold "><a>SETTINGS</a></li>
                <li class="font-bold "><a>LOG OUT</a></li>
             </ul>
            </details>
         </li>
        </ul>
     </div>
    </div>
<section class="py-8 bg-gray-300 shadow-inner">
        <div class="container mx-auto">
            <h1 class="text-2xl text-center font-bold mb-10">MOBIL</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Motor Card -->
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/Almaz.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">ALMAZ</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">    
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_1.showModal()">RENTAL NOW</button>
                                <dialog id="my_modal_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/Avanza Veloz.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">AVANZA VELOZ</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_2.showModal()">RENTAL NOW</button>
                                <dialog id="my_modal_2" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/Confero.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">CONFERO</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_3.showModal()">RENTAL NOW</button>
                                <dialog id="my_modal_3" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/ertiga.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">ERTIGA</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_4.showModal()">RENTAL NOW</button>
                                <dialog id="my_modal_4" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/fortuner.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">FORTUNER</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_5.showModal()">RENTAL NOW</button>
                                <dialog id="my_modal_5" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/Jazz.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">JAZZ</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_6.showModal()">RENTAL NOW</button>
                                <dialog id="my_modal_6" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/march at.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">MARCH AT</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_7.showModal()">RENTAL NOW</button>
                                <dialog id="my_modal_7" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/Kijang Innova.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">KIJANG INNOVA</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_8.showModal()">RENTAL NOW</button>
                                <dialog id="my_modal_8" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<footer class="footer p-7 bg-base-300 text-base-content">
  <nav>
    <img src="{{asset('images/logo.png') }}" class="w-28 h-8">
  </nav>  
  <nav>
    <h6 class="footer-title">Company</h6> 
    <a class="link link-hover">About us</a>
    <a class="link link-hover">Rules and Information</a>
  </nav> 
  <nav>
    <h6 class="footer-title">find Us On :</h6> 
    <div class="grid grid-flow-col gap-4">
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
    </div>
  </nav>
</footer>
</body>
</html>
