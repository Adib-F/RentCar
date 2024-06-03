@extends('layout/app')

@section('title')
 Register
@endsection

@section('content')
<div class="flex">
    <div class="w-1/2 bg-white">
        <div class="justify-start">
            <img src="images/logo-rentcang.png" class="w-40 ml-8" alt="">
        </div>
        <div class="grid justify-center mt-8 ">
            <form action="{{ route('register_proses') }}" method="POST">
                @csrf
                <h1 class="text-3xl font-extrabold">DAFTAR</h1>
                <p class="mb-8 text-base font-semibold">Sudah memiliki akun?<a href="{{ route('login') }}"
                        class="text-lg text-orange-400"> Masuk</a></p>
                <p class="text-sm font-bold font-poppins">Nama Lengkap </p>
                <input type="text" name="nama_lengkap" class="mb-2 text-sm bg-gray-300 rounded-sm h-7 w-80">
                <p class="text-sm font-bold font-poppins">Username </p>
                <input type="text" name="username" class="mb-2 text-sm bg-gray-300 rounded-sm h-7 w-80">
                <p class="text-sm font-bold font-poppins">No.Handphone </p>
                <input type="text" name="no_handphone" class="mb-2 bg-gray-300 rounded-sm h-7 w-80">
                <p class="text-sm font-bold font-poppins">NIK </p>
                <input type="text" name="nik" class="mb-2 bg-gray-300 rounded-sm h-7 w-80">
                <p class="text-sm font-bold font-poppins">Email </p>
                <input type="email" name="email" class="mb-2 bg-gray-300 rounded-sm h-7 w-80">
                <p class="text-sm font-bold font-poppins">Password </p>
                <div class="relative mb-4 w-80">
                    <input id="password" type="password" name="password" class="w-full pr-10 bg-gray-300 rounded-sm h-7">
                    <img id="toggleIcon" src="images/eyeclose.svg"
                        class="absolute w-6 transform -translate-y-1/2 cursor-pointer top-1/2 right-2"
                        onclick="togglePasswordVisibility()">
                </div>
                <div class="grid justify-start">
                    <button class="w-20 h-10 text-xs font-extrabold bg-orange-400 rounded-md">Daftar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="w-1/2">
        <img src="images/rubicon.jpg" class="w-full min-h-screen" alt="">
    </div>
</div>
<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.src = 'images/eyeopen.svg';
        } else {
            passwordInput.type = 'password';
            toggleIcon.src = 'images/eyeclose.svg';
        }
    }
</script>
</body>
@endsection


