@extends('layout/app')

@section('title')
 Mobil
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body>
    <div class="flex justify-start gap-4 mt-6 ml-8">
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/MiniCooper.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/Mercedesbenz.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/BMW.svg" alt=""></button>
      <button class="btn text-black bg-slate-300 btn-md rounded-lg px-8 shadow-lg"><img src="images/Mclaren.svg" alt=""></button>
    </div>

<div class=" flex items-center justify-center min-h-screen grid gap-4 grid-cols-4 ml-6 mt-6 mb-6  sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 " >

<div class="card w-80 bg-base-100 shadow-xl bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">Copper Hardtop 4 Door</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg" onclick="modaldetail.showModal()">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">Copper Hardtop 4 Door</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">Copper Hardtop 4 Door</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">Copper Hardtop 4 Door</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">Copper Hardtop 4 Door</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">Copper Hardtop 4 Door</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">Copper Hardtop 4 Door</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg">Rental</button>
    </div>
  </div>
</div>

<div class="card w-80 bg-base-100 shadow-xl  bg-white">
        <figure class="px-10 pt-10 bg-slate-300" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-40">
        <h2 class="card-title text-base font-bold">Copper Hardtop 4 Door</h2>
        <h4 class="font-extrabold text-base ">Rp.1.000.000 / Hari</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn btn-sm bg-gray-300 text-black font-extrabold px-8 mr-3 rounded-lg">Detail </button>
        <button class="btn btn-sm bg-orange-400 text-black font-extrabold px-8 rounded-lg">Rental</button>
    </div>
  </div>
</div>

</div> 

<dialog id="modaldetail" class="modal">
  <div class="modal-box 6/12">
    <form action=""></form>
    <div class="bg-slate-300 flex justify-center h-48">
        <img src="images/copper1.png"  alt="">
    </div>
    <p class="text-xl text-center font-extrabold mt-3">Copper Hardtop 4 Door</p>
    <p class="text-base text-center font-extrabold mb-2">Toyota</p>
    <p class="text-sm text-center mb-10 ">
        MINI 4 Door Hatch ini masih menggunakan gaya klasik. Yaitu ada lekuk heksagonal dan bingkai 
        berwarna krom. Lampu depannya berbentuk bundar dan besar. Ada jarak sedikit lebar yang memberi 
        kesan klasik yang mencolok. Meskipun bodinya masih bergaya klasik, tetapi sudah ada peningkatan 
        dari segi mesin dan juga suspensinya.Suspensinya juga sudah ditingkatkan sehingga lebih nyaman 
        saat berkendara.
    </p>
    <div class="flex justify-center">
        <p class="text-lg font-extrabold mr-32">1.000.000/day</p>
        <p class="text-lg font-extrabold ml-32">Stok:3</p>
    </div>

  </div>
  </form>
  <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>

</body>
@endsection

@section('footer')
 @include('components/footer')
@endsection