@extends('layout/app')

@section('title')
 Status
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body class="min-h-screen text-black bg-gray-100">
<br>
<div class="flex justify-center w-full gap-6 mt-10 mb-6">
    <div class="shadow-xl card w-80 bg-base-100 shadow-slate-300">
        <figure class="px-10 pt-10 bg-orange-400" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="items-center text-center bg-white card-body h-60">
        <h2 class="font-extrabold card-title">{{}}</h2>
        <br>
        <h4 class="mb-6 font-bold text-orange-400">Sedang Menunggu Konfirmasi</h4>
        <br>
    <div class="card-actions">
        <button class="px-8 font-extrabold text-black bg-orange-400 btn">Detail Pesanan</button>
    </div>
  </div>
</div>


</div>
</body>
@endsection

@section('footer')
 @include('components/footer')
@endsection
