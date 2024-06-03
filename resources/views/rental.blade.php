@extends('layout/app')

@section('title')
 Rental
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body class="min-h-screen text-black bg-gray-100">
  <div class="card card-side bg-white shadow-xl w-[40rem] mx-auto mb-10 mt-10">
    <div class="bg-orange-500 w-[15rem] h-[41.rem] flex items-center justify-center rounded-md">
      <img src="images/cooper.png" alt="" class="w-[13rem] ml-5">
    </div>
    <div class="card-body d-flex">
      <h2 class="mb-3 text-2xl font-bold">Cooper Hardtop 4 Door</h2>
      <form action="">
        <div class="mb-2">
          <label for="alamat1">Alamat</label>
          <textarea class=" form-control form-control-sm border h-[4rem] border-black bg-white rounded-md" id="alamat1" required></textarea>
        </div>
        <div class="mb-2">
          <label for="telepon1">No Telepon</label>
          <input type="text"  class="form-control form-control-sm border border-black input input-xs input-bordered  w-[18.3rem] form-control rounded-md bg-white"  id="telepon1" required>
        </div>
        <div class="mb-2">
          <label for="sim1">SIM</label>
          <input type="file"  class="form-control form-control-sm border border-black file-input file-input-bordered file-input-xs h-8 flex w-[18.3rem] bg-white" />
        </div>
        <div class="mb-2">
        <label for="mulaiTanggal" class="block mb-1">Berapa Hari</label>
        <div class="flex items-center">
          <input type="date" class="form-control form-control-sm border border-black bg-white w-[8.6rem] rounded-md" id="mulaiTanggal">
          <span class="mx-2"></span>
          <input type="date" class="form-control form-control-sm border border-black bg-white w-[8.6rem] rounded-md" id="akhirTanggal">
        </div>
      </div>
        <div class="mb-2">
          <label for="Promo">Promo</label>
          <select class="form-control form-control-sm  border border-black select-text w-[18.3rem] bg-white rounded-md" id="country" placeholder="Pilih Promo">
            <option value="" disable selected hidden> Pilih Promo</option>
            <option value="LB"> Promo Libur</option>
            <option value="LR"> Promo Lebaran</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="telepon1">Total Harga</label>
          <input type="text"  class="form-control form-control-sm border border-black input input-xs input-bordered  w-[18.3rem] form-control rounded-md bg-white"  id="telepon1" required>
        </div>
        <div class="mb-2">
          <label for="telepon1">Bayar Disini</label>
          <button type="button" class="flex w-24 text-white bg-black btn btn-sm btn-black" id="telepon1" required>QRIS</button>
        </div>
        <div class="mb-5">
          <label for="sim1">Bukti Pembayaran</label>
          <input type="file"  class="form-control form-control-sm border border-black file-input file-input-bordered file-input-xs h-8 flex w-[18.3rem] bg-white" />
        </div>
        <div class="flex items-center justify-end">
        <button type="submit" class="h-8 bg-orange-400 rounded-md btn"><a href="{{route('status')}}">Rental Kendaraan</a></button>
      </div>
      </form>
    </div>
  </div>
</body>

@endsection

@section('footer')
 @include('components/footer')
@endsection
