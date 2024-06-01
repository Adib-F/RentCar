@extends('layout/app')

@section('title')
 Riwayat
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body class="bg-gray-100 min-h-screen text-black">
  <div class="container mx-auto px-4 py-8 ">
    <div class="row">
      <div class="w-[70rem] mx-auto flex items-center mb-4 mt-10 justify-between bg-gray-300 rounded-lg shadow-sm ">
        <div class="flex items-center ">
          <img src="images/cooper.png" alt="" class="w-32 h-20 ml-3">
          <div class="ml-3">
            <p class="font-bold text-lg">Cooper Hardtop 4 door</p>
            <p class="text-gray-600 text-sm">No Pesanan: 123456789</p>
            <p class="text-gray-600 text-sm">Total Harga: 123.000</p>
          </div>
        </div>
        <div class="flex items-center">
        <a href="#" class="btn btn-sm border-none rounded-full px-2 py-1 mx-2 h-1 text-black bg-orange-400 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Detail Pesanan</a>
        <a href="#" class="btn btn-sm border-none rounded-full px-2 py-1 mx-2 h-3 text-black bg-orange-400 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Cetak Resi</a>
        </div>
      </div>

      <div class="w-[70rem] mx-auto flex items-center mb-4 justify-between bg-gray-300 rounded-md shadow-sm ">
        <div class="flex items-center">
          <img src="images/genio.png" alt="" class="w-28 h-20 ml-2">
          <div class="ml-8">
            <p class="font-bold text-lg">Honda Genio</p>
            <p class="text-gray-600 text-sm">No Pesanan: 123456789</p>
            <p class="text-gray-600 text-sm">Total Harga: 123.000</p>
          </div>
        </div>
        <div class="flex items-center">
        <a href="#" class="btn btn-sm border-none rounded-full px-2 py-1 mx-2 h-1 text-black bg-orange-400 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Detail Pesanan</a>
        <a href="#" class="btn btn-sm border-none rounded-full px-2 py-1 mx-2 h-3 text-black bg-orange-400 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Cetak Resi</a>
        </div>
      </div>

      <div class="w-[70rem] mx-auto flex items-center mb-4 justify-between bg-gray-300 rounded-md shadow-sm ">
        <div class="flex items-center">
          <img src="images/agya.png" alt="" class="w-32 h-20 m">
          <div class="ml-6">
            <p class="font-bold text-lg">Agya Gr Sport</p>
            <p class="text-gray-600 text-sm">No Pesanan: 123456789</p>
            <p class="text-gray-600 text-sm">Total Harga: 123.000</p>
          </div>
        </div>
        <div class="flex items-center">
        <a href="#" class="btn btn-sm border-none rounded-full px-2 py-1 mx-2 h-1 text-black bg-orange-400 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Detail Pesanan</a>
        <a href="#" class="btn btn-sm border-none rounded-full px-2 py-1 mx-2 h-3 text-black bg-orange-400 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Cetak Resi</a>
        </div>
      </div>

      <div class="w-[70rem] mx-auto flex items-center mb-10 justify-between bg-gray-300 rounded-lg shadow-sm ">
        <div class="flex items-center">
          <img src="images/beatstreet.png" alt="" class="w-30 h-20 ml-3 ">
          <div class="ml-14">
            <p class="font-bold text-lg">Honda Beat Street</p>
            <p class="text-gray-600 text-sm">No Pesanan: 123456789</p>
            <p class="text-gray-600 text-sm">Total Harga: 123.000</p>
          </div>
        </div>
        <div class="flex items-center">
        <a href="#" class="btn btn-sm border-none rounded-full px-2 py-1 mx-2 h-1 text-black bg-orange-400 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Detail Pesanan</a>
        <a href="#" class="btn btn-sm border-none rounded-full px-2 py-1 mx-2 h-3 text-black bg-orange-400 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">Cetak Resi</a>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection

@section('footer')
 @include('components/footer')
@endsection
