@extends('layout/app')

@section('title')
 Status
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body >
<div class="flex justify-center grid gap-4 cols-2 ml-6 mb-6 mt-10 sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 ">
<div class="card w-80 bg-base-100 shadow-xl bg-white">
        <figure class="px-10 pt-10 bg-orange-400" >
            <img src="images/ADV.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-54">
    <h4 class="font-bold text-orange-400 mb-6">Sedang Menunggu Konfirmasi</h4>
    <div class="card-actions flex justify-center mt-3">
        <button class="btn bg-orange-400 text-black font-extrabold px-8 rounded-lg">Detail Pesanan</button>
    </div>
  </div>
</div>


</div>
</body>
@endsection

@section('footer')
 @include('components/footer')
@endsection
