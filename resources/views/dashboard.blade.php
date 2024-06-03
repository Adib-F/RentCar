@extends('layout/app')

@section('title')
    Beranda
@endsection

@section('navbar')
    @include('components/navbar')
@endsection

@section('content')

    <body class="font-poppins">
        <div class="landing bg-cover text-center bg-no-repeat w-screen h-[120vh] py-20" id="landing"
            style="background-image: url('../images/landingpage.png')">
            <p class="text-6xl font-bold leading-normal">
                <span class="text-white">SELAMAT DATANG DI</span><br>
                <span class="text-orange-400">RENTCANG</span>
            </p>
            <p class="font-bold text-center text-white">
                Jelajahi Perjalanan Anda dengan Nyaman
            </p>
            <br>
            <p class="font-light text-center text-white">
                Kami menyediakan berbagai pilihan kendaraan berkualitas, mulai dari mobil keluarga hingga kendaraan premium.
                Nikmati layanan terpercaya dan kemudahan pemesanan melalui website kami. RENTCANG, kenyamanan dalam setiap
                perjalanan!
            </p>
        </div>
        <br><br>
        <div class="w-screen h-12">
            <p class="text-4xl font-extrabold text-center text-orange-400">
                PALING POPULER
            </p>
        </div>
        <br>
        <div class="flex justify-center w-screen gap-2">
            <button class="px-4 text-black rounded-lg shadow-lg bg-slate-300"><img src="images/MiniCooper.svg"
                    alt="Mini Cooper" class="h-16"></button>
            <button class="px-4 text-black rounded-lg shadow-lg bg-slate-300"><img src="images/Mercedesbenz.svg"
                    alt="Mercedes Benz" class="h-16"></button>
            <button class="px-4 text-black rounded-lg shadow-lg bg-slate-300"><img src="images/BMW.svg" alt="BMW"
                    class="h-16"></button>
            <button class="px-4 text-black rounded-lg shadow-lg bg-slate-300"><img src="images/Mclaren.svg" alt="Mclaren"
                    class="h-16"></button>
        </div>
        <br><br>
        <div class="flex flex-wrap justify-center w-screen gap-6">
            @foreach ($kendaraans as $kendaraan)
                <div class="bg-white shadow-xl card w-60 bg-base-100 shadow-slate-300">
                    <figure class="px-5 pt-5 bg-slate-300">
                        <img src="{{ asset('storage/' . $kendaraan->Gambar) }}" alt="{{ $kendaraan->Nama_Kendaraan }}"
                            class="object-cover h-40 rounded-xl" />
                    </figure>
                    <div class="items-center text-center card-body">
                        <h2 class="text-sm font-extrabold card-title">{{ $kendaraan->Nama_Kendaraan }}</h2>
                        <h4 class="text-sm font-extrabold">{{ $kendaraan->Harga }}</h4>
                        <div class="card-actions">
                            <button class="px-4 py-2 font-extrabold text-black bg-orange-400 rounded btn">Pesan
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br><br><br>
        <div class="w-screen h-12">
            <p class="w-full text-4xl font-extrabold text-center text-sky-950">
                PROMO
            </p>
        </div>
        <br><br>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ($promos as $promo)
                <div>
                    <a href="#modalKlaim{{ $promo->Id_Promo }}" class="promo-button">
                        <img src="{{ asset('storage/' . $promo->Gambar) }}" alt="Promo" class="mb-5 h-52">
                    </a>
                    <dialog id="modalKlaim{{ $promo->Id_Promo }}" class="modal">
                        <div class="modal-box">
                            <h3 class="py-4 text-lg font-bold text-center">Apakah Anda yakin ingin mengklaim promo ini?</h3>
                            <div class="flex justify-center">
                                <div class="modal-action">
                                    <form method="POST" action="{{ route('klaimPromo', $promo->Id_Promo) }}">
                                        @csrf
                                        <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                            onclick="document.getElementById('modalKlaim{{ $promo->Id_Promo }}').close();">Batal</button>
                                        <button type="submit" class="text-white bg-green-500 border btn">Klaim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </dialog>
                </div>
            @endforeach
        </div>
    @endsection

    @section('footer')
        @include('components/footer')
    @endsection
