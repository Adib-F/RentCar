@extends('layout/app')

@section('title')
 Status
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body class="bg-gray-100 min-h-screen text-black">
<br>
<div class="w-full flex justify-center gap-6 mb-6 mt-10">
    <div class="card w-80 bg-base-100 shadow-xl shadow-slate-300">
        <figure class="px-10 pt-10 bg-orange-400" >
            <img src="images/cooper.png" alt="" class="rounded-xl w-[30rem] ml-5 " />
        </figure>
    <div class="card-body items-center text-center h-60 bg-white">
        <h2 class="card-title font-extrabold">Copper Hardtop 4 Door</h2>
        <br>
        <h4 class="font-bold text-orange-400 mb-6">Sedang Menunggu Konfirmasi</h4>
        <br>
    <div class="card-actions">
        <button class="btn bg-orange-400 text-black font-extrabold px-8">Detail Pesanan</button>
    </div>
  </div>
</div>
</div>
@endsection

@section('footer')
 @include('components/footer')
@endsection
