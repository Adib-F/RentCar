@extends('layout/app')

@section('title')
 Rental
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body class="bg-gray-100 min-h-screen text-black">
  <div class="card card-side bg-white shadow-xl w-[40rem] mx-auto mb-10 mt-10">
    <div class="bg-orange-500 w-[15rem] h-[41.rem] flex items-center justify-center rounded-md">
      <img src="images/cooper.png" alt="" class="w-[13rem] ml-5">
    </div>
    <div class="card-body d-flex">
      <h2 class="font-bold text-2xl mb-3">Cooper Hardtop 4 Door</h2>
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
        <label for="mulaiTanggal" class="mb-1 block">Berapa Hari</label>
        <div class="flex items-center">
          <input type="date" class="form-control form-control-sm border border-black bg-white w-[8.6rem] rounded-md" id="mulaiTanggal">
          <span class="mx-2"></span>
          <input type="date" class="form-control form-control-sm border border-black bg-white w-[8.6rem] rounded-md" id="akhirTanggal">
        </div>
      </div>
        <div class="mb-2">
          <label for="Promo">Promo</label>
          <select class="form-control form-control-sm  border border-black select-text w-[18.3rem] bg-white rounded-md" id="country" placeholder="Pilih Promo">
            <option disable selected> Pilih Promo</option>
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
          <button type="button" class="btn btn-sm btn-black flex text-white w-24 bg-black" id="telepon1" required>QRIS</button>
        </div>
        <div class="mb-5">
          <label for="sim1">Bukti Pembayaran</label>
          <input type="file"  class="form-control form-control-sm border border-black file-input file-input-bordered file-input-xs h-8 flex w-[18.3rem] bg-white" />
        </div>
        <div class="flex items-center justify-end">
        <button type="submit" class="btn bg-orange-400 h-8 rounded-md"><a href="{{route('status')}}">Rental Kendaraan</a></button>
      </div>
      </form>
    </div>
  </div>
</body>

@endsection

@section('footer')
 @include('components/footer')
@endsection
