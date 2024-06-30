@extends('layout/app')

@section('title')
    Rental
@endsection

@section('navbar')
    @include('components/navbar')
@endsection

@section('content')

    <body class="min-h-screen text-black  mt-36">
        <div class="card card-side bg-white shadow-xl w-[40rem] mx-auto mb-10 mt-10">
            <div class="bg-orange-500 w-[15rem] h-[41.rem] flex items-center justify-center rounded-md">
                <figure class="pt-10 px-7"><img src="{{ asset('storage/' . $kendaraan->Gambar) }}" class="mb-4 w-[12rem]" />
                </figure>
            </div>
            <div class="card-body d-flex">
                <h2 class="mb-3 text-2xl font-bold">{{ $kendaraan->Nama_Kendaraan }}</h2>
                <form action="{{ route('addRental', $kendaraan->Id_Kendaraan) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="alamat1">Alamat</label>
                        @error('alamat')
                            <div class="mt-1 text-red-500">{{ $message }}</div>
                        @enderror
                        <textarea name="alamat" class="form-control form-control-sm border h-[4rem] border-black bg-white rounded-md"
                            id="alamat1" required></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="telepon1">No Telepon</label>
                        @error('no_telepon')
                            <div class="mt-1 text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="text" name="no_telepon" value="{{ auth()->user()->No_Handphone }}"
                            class="form-control form-control-sm border border-black input input-xs input-bordered w-[18.3rem] form-control rounded-md bg-white"
                            id="telepon1" required>
                    </div>
                    <div class="mb-2">
                        <label for="sim1">SIM</label>
                        @error('sim')
                            <div class="mt-1 text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="file" name="sim"
                            class="form-control form-control-sm border border-black file-input file-input-bordered file-input-xs h-8 flex w-[18.3rem] bg-white"
                            required />
                    </div>
                    <div class="mb-2">
                        <label for="mulaiTanggal" class="block mb-1">Tanggal Sewa</label>
                        @error('tanggal_sewa')
                            <div class="mt-1 text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="date" name="tanggal_sewa"
                            class="form-control form-control-sm border border-black bg-white w-[18.3rem] rounded-md"
                            id="mulaiTanggal" required>
                    </div>
                    <div class="mb-2">
                        <label for="akhirTanggal" class="block mb-1">Tanggal Selesai</label>
                        @error('tanggal_selesai')
                            <div class="mt-1 text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="date" name="tanggal_selesai"
                            class="form-control form-control-sm border border-black bg-white w-[18.3rem] rounded-md"
                            id="akhirTanggal" required>
                    </div>
                    <div class="mb-2">
                        <label for="promo">Promo</label>
                        @error('promo')
                            <div class="mt-1 text-red-500">{{ $message }}</div>
                        @enderror
                        <select name="promo"
                            class="form-control form-control-sm border border-black select-text w-[18.3rem] bg-white rounded-md"
                            id="promo">
                            <option value="" disable selected hidden>Pilih Promo</option>
                            @foreach ($promos as $promo)
                                <option value="{{ $promo->Id_Promo }}">{{ $promo->Promo->Nama_Promo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="totalHarga">Total Harga</label>
                        @error('total_harga')
                            <div class="mt-1 text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="text" name="total_harga"
                            class="form-control form-control-sm border border-black input input-xs input-bordered w-[18.3rem] form-control rounded-md bg-white"
                            id="total_harga" required readonly>
                    </div>

                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-orange-400 rounded-md h-7 btn">Bayar Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
        <dialog id="modalqris" class="p-4 bg-white rounded-md">
            <div class="flex flex-col items-center">
                <img src="/images/qris.png" alt="QRIS Barcode" class="mb-4 h-[30rem] w-[25rem] ">
                <button class="text-white bg-orange-500 btn btn-sm"
                    onclick="document.getElementById('modalqris').close()">Tutup</button>
            </div>
        </dialog>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mulaiTanggal = document.getElementById('mulaiTanggal');
                const akhirTanggal = document.getElementById('akhirTanggal');
                const totalHargaInput = document.getElementById('total_harga');
                const hargaMobil = {{ $kendaraan->Harga }};
                const promos = {!! json_encode(
                    $promos->map(function ($promo) {
                        return ['Id_Promo' => $promo->Id_Promo, 'Diskon' => $promo->Promo->Diskon];
                    }),
                ) !!};

                function hitungTotalHarga() {
                    const mulai = new Date(mulaiTanggal.value);
                    const akhir = new Date(akhirTanggal.value);

                    if (mulai && akhir && !isNaN(mulai.getTime()) && !isNaN(akhir.getTime()) && akhir >= mulai) {
                        const timeDiff = akhir.getTime() - mulai.getTime();
                        const diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
                        let totalHarga = diffDays * hargaMobil;

                        const selectedPromoId = document.getElementById('promo').value;
                        const selectedPromo = promos.find(promo => promo.Id_Promo == selectedPromoId);

                        if (selectedPromo && !isNaN(selectedPromo.Diskon) && selectedPromo.Diskon >= 0 && selectedPromo
                            .Diskon <= 100) {
                            totalHarga *= (100 - selectedPromo.Diskon) / 100;
                        }

                        totalHargaInput.value = totalHarga.toFixed(0);
                    } else {
                        totalHargaInput.value = '';
                    }
                }

                mulaiTanggal.addEventListener('change', hitungTotalHarga);
                akhirTanggal.addEventListener('change', hitungTotalHarga);
                document.getElementById('promo').addEventListener('change', hitungTotalHarga);
            });
        </script>
    </body>
@endsection

@section('footer')
    @include('components/footer')
@endsection
