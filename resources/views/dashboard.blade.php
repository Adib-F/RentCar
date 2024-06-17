@extends('layout/app')

@section('title')
    Beranda
@endsection

@section('navbar')
    @include('components/navbardashboard')
@endsection

@section('content')

    <body class="font-poppins">
<div class="navbar bg-transparent fixed top-0 z-50 " id="navbar">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Beranda</a></li>
        <li>
        <a>Kendaraan</a>
        <ul class="p-2">
            <li><a>Mobil</a></li>
            <li><a>Motor</a></li>
        </ul>
        </li>
        <li><a>Status</a></li>
        <li><a>Riwayat</a></li>
      </ul>
      </div>
      <a class="btn btn-ghost h-10 w-40 ">
        <img src="images/logo-rentcang.png" alt="" class="">
      </a>
    </div>
    <div class="navbar-center hidden lg:flex  font-semibold">
      <ul class="menu menu-horizontal px-1 text-lg text-black">
      <li><a><img src="images/Beranda.svg"alt="">Beranda</a></li>
      <li>
        <details>
          <summary><img src="images/Kendaraan.png"class="w-7 h-7" alt="">Kendaraan</summary>
          <ul class="p-2 shadow-md">
            <li><a><img src="images/Car.png"class="w-6 h-5"  alt="">Mobil</a></li>
            <li><a><img src="images/Motorcycle.png"class="w-6 h-5"  alt="">Motor</a></li>
          </ul>
        </details>  
      </li>
      <li><a><img src="images/Status.svg" alt="">Status</a></li>
      <li><a><img src="images/Riwayat.svg" alt="">Riwayat</a></li>
       </ul>
    </div>
    <div class="navbar-end">
      <a href="#" class="btn bg-black btn-sm rounded-full mr-3 px-5 text-white border-none " id="daftar">DAFTAR</a>
      <button class="btn btn-bg-orange-300 btn-sm rounded-full px-5 " id="masuk">MASUK</button>
    </div>
  </div>
  <div class="landing bg-cover bg-no-repeat w-full h-[120vh]  pt-40 px-80 -z-60 "id="landing" style="background-image: url(../images/landingpage.png)">
  <p class="text-6xl font-bold leading-normal ">
        <a class="text-white px-8">SELAMAT DATANG DI</a><br> 
        <a class="text-orange-400 text-center px-44">RENTCANG</a>
            </p>
   <p class="text-white px-44">
      <a class="font-bold text-center">Jelajahi Perjalanan Anda dengan Nyaman</a>
            </p>
            <br>
    <p class="text-white w-full ">
      <a class="font-light text-center">Kami menyediakan berbagai pilihan kendaraan berkualitas, mulai dari mobil keluarga </a>
      <a class="font-light text-center px-12">hingga kendaraan premium. Nikmati layanan terpercaya dan kemudahan</a>
     <a class="font-light text-center">pemesanan melalui website kami.RENTCANG, kenyamanan dalam setiap perjalanan!</a>
            </p>
        </div>
        <br><br>
    <div class="w-full h-12">
      <p class="text-orange-400 text-4xl font-extrabold w-full text-center">
        <a href="">PALING POPULER</a>
            </p>
        </div>
        <br>
    <div class="flex justify-center w-full gap-2 w-full ">
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/MiniCooper.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/Mercedesbenz.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/BMW.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/Mclaren.svg" alt=""></button>
        </div>
        <br><br>
<div class="w-full flex justify-center gap-6 ">
    <div class="card w-80 bg-base-100 shadow-xl shadow-slate-300">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
                    </figure>
    <div class="card-body items-center text-center">
        <h2 class="card-title font-extrabold">Copper Hardtop 4 Door</h2>
        <h4 class="font-extrabold">Rp.1.000.000 / Hari</h4>
                        <div class="card-actions">
        <button class="btn bg-orange-400 text-black font-extrabold px-8">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>

<div class="card w-80 bg-base-100 shadow-xl shadow-slate-300 ">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/aventgarde1.png" alt="" class="rounded-xl py-2" />
        </figure>
    <div class="card-body items-center text-center">
        <h2 class="card-title font-extrabold">V 250 Avantgarde Line</h2>
        <h4 class="font-extrabold">Rp.1.000.000 / Hari</h4>
    <div class="card-actions">
        <button class="btn bg-orange-400 text-black font-extrabold px-8">Pesan Sekarang</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl shadow-slate-300 ">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/mclaren1.png" alt="" class="rounded-xl py-2" />
        </figure>
    <div class="card-body items-center text-center">
        <h2 class="card-title font-extrabold">2024 McLaren Artura</h2>
        <h4 class="font-extrabold">Rp.1.000.000 / Hari</h4>
    <div class="card-actions">
        <button class="btn bg-orange-400 text-black font-extrabold px-8">Pesan Sekarang</button>
    </div>
  </div>
</div>
        </div>
        <br><br><br>
  <div class="w-full h-12">
      <p class="text-sky-950 text-4xl font-extrabold w-full text-center ">
        <a href="">PROMO</a>
            </p>
        </div>
        <br><br>
    <div class="flex justify-center w-full gap-24 w-full ">
      <a href=""><img src="images/promo.png"class="w-72 h-60" alt=""></a>
      <a href=""><img src="images/promo.png"class="w-72 h-60" alt=""></a>
      <a href=""><img src="images/promo.png"class="w-72 h-60" alt=""></a>
                </div>


    <br>
<footer class="footer p-7 bg-gray-400">
  <aside class="py-12">
  <a href="#"><img src="images/logo-footer.png"class="w-22 h-12" alt=""></a>
  </aside> 
  <nav class="md:justify-self-end px-2">
    <h6 class="font-bold text-black text-lg px-4 py-2">TEMUKAN KAMI DI</h6> 
    <div class="grid grid-flow-col gap-6 px-6">
    <a href="https://www.facebook.com/"><img src="images/facebook.svg" alt=""></a>
        <a href="https://www.instagram.com/"><img src="images/instagram.svg" alt=""></a>
        <a href="https://discord.gg/b5YDtCn6"><img src="images/discord.svg" alt=""></a>
        </div>
    <a href="aboutus" class="px-12"><h1 class="text-black">Tentang Kami</h1></a>
    <a href="rulesandinfo"><h1 class="text-black px-2">Peraturan dan Informasi</h1></a>
  </nav>
</footer>
</body>
</html>