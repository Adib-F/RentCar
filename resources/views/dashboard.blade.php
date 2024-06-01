@extends('layout/app')

@section('title')
 Beranda
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<!--  -->
<body class="font-poppins">
<div class="landing bg-cover text-center bg-no-repeat w-screen h-[120vh] py-20 -z-60 "id="landing" style="background-image: url(../images/landingpage.png)">
  <p class="text-6xl font-bold leading-normal ">
        <a class="text-white ">SELAMAT DATANG DI</a><br> 
        <a class="text-orange-400 text-center ">RENTCANG</a>
   </p>
   <p class="text-white">
      <a class="font-bold text-center">Jelajahi Perjalanan Anda dengan Nyaman</a>
    </p>
    <br>
    <p class="text-white ">
      <a class="font-light text-center">Kami menyediakan berbagai pilihan kendaraan berkualitas, mulai dari mobil keluarga </a>
    </p>
    <p class="text-white">
      <a class="font-light text-center ">hingga kendaraan premium. Nikmati layanan terpercaya dan kemudahan</a>
    </p>
    <p class="text-white">
      <a class="font-light text-center">pemesanan melalui website kami.RENTCANG, kenyamanan dalam setiap perjalanan!</a>
    </p>
    </div>
    <br><br>
    <div class="w-screen h-12">
      <p class="text-orange-400 text-4xl font-extrabold text-center">
        <a href="">PALING POPULER</a>
      </p>
    </div>
    <br>
    <div class="flex justify-center gap-2 w-screen ">
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/MiniCooper.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/Mercedesbenz.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/BMW.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/Mclaren.svg" alt=""></button>
    </div>
    <br><br>
<div class="w-screen flex justify-center gap-6  ">
    <div class="card w-80 bg-base-100 shadow-xl shadow-slate-300 bg-white">
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

<div class="card w-80 bg-base-100 shadow-xl shadow-slate-300 bg-white ">
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

<div class="card w-80 bg-base-100 shadow-xl shadow-slate-300 bg-white ">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/mclaren1.png" alt="" class="rounded-xl py-2 mb-1.5" />
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
  <div class="w-screen h-12">
      <p class="text-sky-950 text-4xl font-extrabold w-full text-center ">
        <a href="">PROMO</a>
      </p>
    </div>
    <br><br>
    <div class="flex justify-center gap-6 w-screen ">
      <a href=""><img src="images/promo.png"class="" alt=""></a>
      <a href=""><img src="images/promo.png"class="" alt=""></a>
      <a href=""><img src="images/promo.png"class="" alt=""></a>
    </div>

</body>
@endsection

@section('footer')
 @include('components/footer')
@endsection