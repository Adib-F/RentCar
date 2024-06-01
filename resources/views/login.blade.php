@extends('layout/app')

@section('title')
  Login
@endsection

@section('content')
<body>
    
<div class="flex">
<div class="w-1/2">
    <img src="images/rubicon.jpg" class="w-full min-h-screen" alt="">
</div>

<div class="w-1/2">
    <div class="mr-8 flex justify-end">
    <img src="images/logo-rentcang.png" class="ml-8 w-40" alt="">
    </div>
    <div class=" grid justify-center mt-28">
        <form action="">
        <h1 class="text-3xl font-extrabold">MASUK</h1>
        <p class="text-base font-semibold mb-8">Belum memiliki akun?<a href="login" class="text-lg text-orange-400">Daftar</a></p>
            <p class="font-poppins text-sm font-bold">Email </p>
            <input type="email"  class="bg-gray-300 rounded-sm mb-4 h-7 w-80">
            <p class="font-poppins text-sm font-bold">Password </p>
            <div class="relative w-80 mb-4">
                <input id="password" type="password" class="bg-gray-300 rounded-sm h-7 w-full pr-10">
                <img id="toggleIcon" src="images/eyeclose.svg" class="w-6 absolute top-1/2 right-2 transform -translate-y-1/2 cursor-pointer" onclick="togglePasswordVisibility()">
            </div>
            <div class="grid justify-start">
            <button class="bg-orange-400 rounded-md text-xs w-20 h-10 font-extrabold">Masuk</button>
            </div>
        </form>
    </div>
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