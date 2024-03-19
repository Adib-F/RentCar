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
    <style>
        .carousel {
            position: relative;
            z-index: -1; 
        }
    </style>
</head>
<body>
    <div class="navbar bg-pink-100">
     <div class="navbar-start">
        <div class="dropdown">
         <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
         </div>
         <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a>Home</a></li>
            <li><a>Notifikasi</a></li>
            <li><a>Status</a></li>
            <li>
             <a>Kendaraan</a>
             <ul>
                <li><a>Motor  </a></li>
                <li><a>Mobil  </a></li>
             </ul>
            </li>
         </ul>
        </div>
        <a class="btn btn-ghost text-xl">Rentcang</a>
     </div>
     <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
         <li><a>Home</a></li>
         <li><a>Notifikasi</a></li>
         <li><a>Status</a></li>
         <li>
            <details>
             <summary>Kendaraan</summary>
             <ul>
                <li><a>Motor  </a></li>
                <li><a>Mobil  </a></li>
             </ul>
            </details>
         </li>
         </ul>
     </div>
     <div class="navbar-end">
        <a class="btn btn-accent btn-outline">Login</a>
     </div>
    </div>
<section class="py-8">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Motor</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Motor Card -->
                <div class="card w-84 glass">
                    <figure><img src="{{asset('images/lexi.png') }}" class="mb-4"/></figure>
                    <div class="card-body">
                    <h2 class="card-title">Lexi</h2>
                    <p></p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_1.showModal()">Details</button>
                                <dialog id="my_modal_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Detail kendaraan</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_1_1.showModal()">Rent</button>
                                <dialog id="my_modal_1_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass">
                    <figure><img src="{{asset('images/mio.png') }}" class="mb-4"/></figure>
                    <div class="card-body">
                    <h2 class="card-title">Mio</h2>
                    <p></p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_2.showModal()">Details</button>
                                <dialog id="my_modal_2" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Detail kendaraan</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_2_1.showModal()">Rent</button>
                                <dialog id="my_modal_2_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass">
                    <figure><img src="{{asset('images/Beat.png') }}" class="mb-4"/></figure>
                    <div class="card-body">
                    <h2 class="card-title ">Beat</h2>
                    <p></p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_3.showModal()">Details</button>
                                <dialog id="my_modal_3" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Detail kendaraan</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_3_1.showModal()">Rent</button>
                                <dialog id="my_modal_3_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass">
                    <figure><img src="{{asset('images/Aerox.png') }}" class="mb-4"/></figure>
                    <div class="card-body">
                    <h2 class="card-title">Aerox</h2>
                    <p></p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_4.showModal()">Details</button>
                                <dialog id="my_modal_4" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Detail kendaraan</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_4_1.showModal()">Rent</button>
                                <dialog id="my_modal_4_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
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
<section class="py-8 bg-green-200">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Mobil</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Mobil Card -->
                <div class="card w-84 glass">
                    <figure><img src="{{asset('images/Almaz.png') }}" class="mb-4"/></figure>
                    <div class="card-body">
                    <h2 class="card-title">Almaz</h2>
                    <p></p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_5.showModal()">Details</button>
                                <dialog id="my_modal_5" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Detail kendaraan</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_5_1.showModal()">Rent</button>
                                <dialog id="my_modal_5_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass">
                    <figure><img src="{{asset('images/fortuner.png') }}" class="mb-4"/></figure>
                    <div class="card-body">
                    <h2 class="card-title">Fortuner</h2>
                    <p></p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_6.showModal()">Details</button>
                                <dialog id="my_modal_6" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Detail kendaraan</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_6_1.showModal()">Rent</button>
                                <dialog id="my_modal_6_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass">
                    <figure><img src="{{asset('images/Avanza Veloz.png') }}" class="mb-4"/></figure>
                    <div class="card-body">
                    <h2 class="card-title">Avanza Veloz</h2>
                    <p></p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_7.showModal()">Details</button>
                                <dialog id="my_modal_7" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Detail kendaraan</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_7_1.showModal()">Rent</button>
                                <dialog id="my_modal_7_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass">
                    <figure><img src="{{asset('images/Jazz.png') }}" class="mb-4"/></figure>
                    <div class="card-body">
                    <h2 class="card-title">Jazz</h2>
                    <p></p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_8.showModal()">Details</button>
                                <dialog id="my_modal_8" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Detail kendaraan</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-primary" onclick="my_modal_8_1.showModal()">Rent</button>
                                <dialog id="my_modal_8_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-primary">Close</button>
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
<footer class="footer p-10 bg-base-300 text-base-content">
  <nav>
    <img src="{{asset('images/lexi.png') }}">
  </nav>  
  <nav>
    <h6 class="footer-title">Company</h6> 
    <a class="link link-hover">About us</a>
    <a class="link link-hover">Rules and Infromation</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Social</h6> 
    <div class="grid grid-flow-col gap-4">
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
    </div>
  </nav>
</footer>
</body>
</html>
