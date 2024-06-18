@extends('layout.app')

@section('title')
    Login
@endsection

@section('content')

<body class="h-screen bg-gray-100">
    <div class="container flex h-screen">
        <div class="relative w-1/2 bg-right bg-cover image-section" style="background-image: url('/images/rubicon.jpg')">
        </div>
        <div class="absolute top-0 right-0 mt-8 mr-8">
            <a href="{{ route('dashboard') }}">
                <img src="/images/logo-rentcang.png" class="h-10 w-30">
            </a>
        </div>

        <div class="flex items-center justify-center w-1/2 p-8">
            <div class="w-5/6 p-8 bg-gray-100 rounded-lg">
                <form action="{{ route('login_proses') }}" method="POST" id="loginForm">
                    @csrf
                    <div class="mb-4 text-5xl font-extrabold text-black">LOGIN</div>
                    <div class="mt-4 text-xl font-bold text-black">Belum memiliki akun? <a
                            href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">Disini</a></div>
                    <br>
                    <div class="mb-4">
                        <label for="email" class="mb-2 font-semibold text-black">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700"
                            autofocus required value="{{ old('email') }}">
                    </div>
                    <div class="relative mb-4">
                        <label for="password" class="mb-2 font-semibold text-black">Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700"
                            required>
                        <img id="toggleIcon" src="images/eyeclose.svg" class="absolute w-6 cursor-pointer top-9 right-2"
                            onclick="togglePasswordVisibility()">
                    </div>
                    <button type="submit"
                        class="px-4 py-1 font-semibold text-black bg-yellow-600 rounded-md hover:bg-yellow-500 font-poppins">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div id="customAlert">
        @if (session('berhasil'))
            <div class="fixed px-4 py-2 text-white transform -translate-x-1/2 bg-green-500 rounded shadow-lg top-4 left-1/2">{{ session('berhasil') }}</div>
        @elseif(session('gagal'))
            <div class="fixed px-4 py-2 text-white transform -translate-x-1/2 bg-red-500 rounded shadow-lg top-4 left-1/2">{{ session('gagal') }}</div>
        @endif
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

        document.addEventListener('DOMContentLoaded', function () {
            const alertBox = document.querySelector('#customAlert > div');
            if (alertBox) {
                setTimeout(() => {
                    alertBox.style.display = 'none';
                }, 2000);
            }
        });
    </script>
</body>
@endsection
