@extends('layout.app')

@section('title')
  Login
@endsection

@section('content')
<body class="h-screen bg-gray-100">
    <div class="container flex h-screen">
        <div class="relative w-1/2 bg-right bg-cover image-section" style="background-image: url('/images/rubicon.jpg')"></div>
        <div class="absolute top-0 right-0 mt-8 mr-8">
            <img src="/images/logo-rentcang.png" class="h-10 w-30 ">
        </div>
        <div class="flex items-center justify-center w-1/2 p-8">
            <div class="w-5/6 p-8 bg-gray-100 rounded-lg">
                <form action="{{route('login_proses')}}" method="POST">
                @csrf
                <div class="mb-4 text-5xl font-extrabold text-black">LOGIN</div>
                    <div class="mt-4 text-xl font-bold text-black ">Belum memiliki akun? <a href="{{route('register')}}" class="text-blue-500 hover:text-blue-700">Disini</a>
                    </div>
                    <br>
                    <div class="mb-4">
                        <label for="email" class="mb-2 font-semibold text-black">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700" autofocus required value="{{old('email')}}">
                    </div>
                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror
                    <div class="relative mb-4">
                        <label for="password" class="mb-2 font-semibold text-black">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700" required>
                        <img id="toggleIcon" src="images/eyeclose.svg" class="absolute w-6 cursor-pointer top-9 right-2" onclick="togglePasswordVisibility()">
                    </div>
                    @error('password')
                        <small>{{ $message }}</small>
                    @enderror
                   <button type="submit" class="px-4 py-1 font-semibold text-black bg-yellow-600 rounded-md hover:bg-yellow-500 font-poppins">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js "></script>

    @error('email')
    <script>
            Swal.fire('{{ $message }}');
        </script>
    @enderror

    @if ($message = session()->get('success'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif

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
