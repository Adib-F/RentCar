@extends('layout.app')

@section('title')
    Beranda
@endsection

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    @if (session('success'))
        <div id="alert-success"
            class="fixed z-50 px-4 py-2 text-white transform -translate-x-1/2 bg-green-500 rounded shadow-lg top-4 left-1/2">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="alert-error"
            class="fixed z-50 px-4 py-2 text-white transform -translate-x-1/2 bg-red-500 rounded shadow-lg top-4 left-1/2">
            {{ session('error') }}
        </div>
    @endif

    <body class="font-poppins">
        <div class="landing bg-cover text-center bg-no-repeat w-screen h-[120vh] py-28" id="landing"
            style="background-image: url('{{ asset('images/landingpage.png') }}')">
            <p class="mt-12 text-6xl font-bold leading-normal">
                <span class="text-white">SELAMAT DATANG DI</span><br>
                <span class="text-orange-400">RENTCANG</span>
            </p>
            <p class="font-bold text-center text-white">
                Jelajahi Perjalanan Anda dengan Nyaman
            </p>
            <br>
            <p class="m-8 font-light text-center text-white">
                Kami menyediakan berbagai pilihan kendaraan berkualitas, mulai dari mobil keluarga hingga kendaraan premium.
                Nikmati layanan terpercaya dan kemudahan pemesanan melalui website kami. RENTCANG, kenyamanan dalam setiap
                perjalanan!
            </p>
        </div>
        <br><br>
        <div class="w-screen h-12">
            <p class="text-4xl font-extrabold text-center text-orange-400">
                KENDARAAN
            </p>
        </div>
        <div class="w-screen h-12 mt-10">
            <p class="w-full text-2xl font-extrabold text-center text-sky-950">
                MOBIL
            </p>
        </div>

        <div class="flex flex-wrap justify-center w-screen gap-10">
            @foreach ($cars as $car)
                <div class="bg-white shadow-xl card w-60 bg-base-100 shadow-slate-300">
                    <figure class="px-5 pt-5 bg-slate-300">
                        <img src="{{ asset('storage/' . $car->Gambar) }}" alt="{{ $car->Nama_Kendaraan }}"
                            class="mb-4 w-[12rem] h-[8rem]" />
                    </figure>
                    <div class="items-center text-center card-body">
                        <span class="font-bold text-xs rounded-xl inline-block {{ $car->Stok > 0 ? 'bg-green-400 w-[5rem]' : 'bg-red-400 w-[7rem]' }}">
                            {{ $car->Stok > 0 ? 'Tersedia' : 'Tidak Tersedia' }}
                        </span>
                        <h2 class="text-lg font-extrabold card-title">{{ $car->Nama_Kendaraan }}</h2>
                        <h4 class="text-lg font-extrabold">Rp {{ number_format($car->Harga, 0, ',', '.') }}</h4>
                        <div class="card-actions">
                            @if ($car->Stok > 0)
                                <a href="{{ route('showRentalForm', $car->Id_Kendaraan) }}">
                                    <button class="px-4 py-2 font-extrabold text-black bg-orange-400 rounded btn">
                                        Pesan Sekarang
                                    </button>
                                </a>
                            @else
                                <button class="px-4 py-2 font-extrabold text-black bg-orange-400 rounded btn"
                                    style="pointer-events: none;" disabled>
                                    Pesan Sekarang
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-screen h-12 mt-10">
            <p class="w-full text-2xl font-extrabold text-center text-sky-950">
                MOTOR
            </p>
        </div>

        <div class="flex flex-wrap justify-center w-screen gap-10">
            @foreach ($motors as $motor)
                <div class="bg-white shadow-xl card w-60 bg-base-100 shadow-slate-300">
                    <figure class="px-5 pt-5 bg-slate-300">
                        <img src="{{ asset('storage/' . $motor->Gambar) }}" alt="{{ $motor->Nama_Kendaraan }}"
                            class="mb-4 w-[12rem] h-[8rem]" />
                    </figure>
                    <div class="items-center text-center card-body">
                        <span class="font-bold text-xs rounded-xl inline-block {{ $motor->Stok > 0 ? 'bg-green-400 w-[5rem]' : 'bg-red-400 w-[7rem]' }}">
                            {{ $motor->Stok > 0 ? 'Tersedia' : 'Tidak Tersedia' }}
                        </span>
                        <h2 class="text-lg font-extrabold card-title">{{ $motor->Nama_Kendaraan }}</h2>
                        <h4 class="text-lg font-extrabold">Rp {{ number_format($motor->Harga, 0, ',', '.') }}</h4>
                        <div class="card-actions">
                            @if ($motor->Stok > 0)
                                <a href="{{ route('showRentalForm', $motor->Id_Kendaraan) }}">
                                    <button class="px-4 py-2 font-extrabold text-black bg-orange-400 rounded btn">
                                        Pesan Sekarang
                                    </button>
                                </a>
                            @else
                                <button class="px-4 py-2 font-extrabold text-black bg-orange-400 rounded btn"
                                    style="pointer-events: none;" disabled>
                                    Pesan Sekarang
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-screen h-12 mt-10">
            <p class="w-full text-4xl font-extrabold text-center text-orange-400">
                PROMO
            </p>
        </div>
        <div class="flex flex-wrap justify-center w-screen gap-6">
            @foreach ($promos as $promo)
                @if (Auth::check())
                    @php
                        $claimed = $promo
                            ->klaimPromo()
                            ->where('Id_Pengguna', Auth::user()->Id_Pengguna)
                            ->exists();
                    @endphp
                    @if (!$claimed)
                        <div>
                            <a href="#modalKlaim{{ $promo->Id_Promo }}" class="promo-button">
                                <img src="{{ asset('storage/' . $promo->Gambar) }}" alt="Promo" class="mb-5 h-52">
                            </a>
                            <dialog id="modalKlaim{{ $promo->Id_Promo }}" class="modal">
                                <div class="modal-box">
                                    <h3 class="py-4 text-lg font-bold text-center">Apakah Anda yakin ingin mengklaim promo
                                        ini?
                                    </h3>
                                    <div class="flex justify-center">
                                        <div class="modal-action">
                                            <form method="POST" action="{{ route('klaimPromo', $promo->Id_Promo) }}">
                                                @csrf
                                                <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                                    onclick="document.getElementById('modalKlaim{{ $promo->Id_Promo }}').close();">Batal</button>
                                                <button type="submit"
                                                    class="text-white bg-green-500 border btn">Klaim</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </dialog>
                        </div>
                    @endif
                @else
                    <div>
                        <a href="#loginPrompt" class="promo-button">
                            <img src="{{ asset('storage/' . $promo->Gambar) }}" alt="Promo" class="mb-5 h-52">
                        </a>
                        <dialog id="loginPrompt" class="modal">
                            <div class="modal-box">
                                <h3 class="py-4 text-lg font-bold text-center">Anda harus login untuk mengklaim promo ini.
                                </h3>
                                <div class="flex justify-center">
                                    <button type="button" class="mr-4 text-white bg-gray-500 border btn"
                                        onclick="document.getElementById('loginPrompt').close();">Tutup</button>
                                    <a href="{{ route('login') }}" class="text-white bg-orange-500 border btn">Login</a>
                                </div>
                            </div>
                        </dialog>
                    </div>
                @endif
            @endforeach
        </div>

        <div id="customAlert">
            @if (session('berhasil'))
                <div class="fixed z-50 px-4 py-2 text-white transform -translate-x-1/2 bg-red-500 rounded shadow-lg top-4 left-1/2">
                    {{ session('berhasil') }}
                </div>
            @endif
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const alertBox = document.querySelector('#customAlert > div');
                if (alertBox) {
                    setTimeout(() => {
                        alertBox.style.display = 'none';
                    }, 2000);
                }

                const alertSuccess = document.getElementById('alert-success');
                if (alertSuccess) {
                    setTimeout(() => {
                        alertSuccess.style.display = 'none';
                    }, 2000);
                }

                const navbar = document.getElementById('navbar');
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 0) {
                        navbar.classList.remove('bg-transparent', 'shadow-none');
                        navbar.classList.add('bg-white', 'shadow-md');
                    } else {
                        navbar.classList.remove('bg-white', 'shadow-md');
                        navbar.classList.add('bg-transparent', 'shadow-none');
                    }
                });
            });



        </script>
    @endsection

    @section('footer')
        @include('components.footer')
    @endsection
