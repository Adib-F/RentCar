@extends('layout/app')

@section('title')
 Register
@endsection

@section('content')
<body class="h-screen bg-gray-100 font-poppins">
    <div class="container flex h-screen">
        <div class="absolute top-0 left-0 mt-4 ml-4">
            <img src="/images/logo-rentcang.png" class="h-10 w-30 "> 
        </div>
        <div class="flex items-center justify-center w-1/2 p-10/12 ">
            <div class="w-2/3 p-8 bg-gray-100 rounded-lg">
                <form action="{{ route('register_proses') }}" method="POST">
                    @csrf
                    <div class="mb-4 text-5xl font-extrabold text-black">DAFTAR</div>
                    <div class="mt-4 text-xl font-bold text-black">
                        Sudah memiliki akun? 
                        <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Disini</a>
                    </div>
                    <br>
                    <div class="mb-4">
                        <label for="nama_lengkap" class="mb-2 font-semibold text-black">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700" required value="{{ old('nama_lengkap') }}">
                    </div>
                    <div class="mb-4">
                        <label for="username" class="mb-2 font-semibold text-black">Username</label>
                        <input type="text" id="username" name="username" class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700" required value="{{ old('username') }}">
                    </div>
                    <div class="mb-4">
                        <label for="no_handphone" class="mb-2 font-semibold text-black">No. Handphone</label>
                        <input type="text" id="no_handphone" name="no_handphone" class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700" required value="{{ old('no_handphone') }}">
                    </div>
                    <div class="mb-4">
                        <label for="nik" class="mb-2 font-semibold text-black">NIK</label>
                        <input type="text" id="nik" name="nik" class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700" required value="{{ old('nik') }}">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="mb-2 font-semibold text-black">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700" required value="{{ old('email') }}">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="mb-2 font-semibold text-black">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-2 text-black bg-gray-300 border-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:border-gray-700" required>
                    </div>
                    <button type="submit" class="px-4 py-1 font-semibold text-black bg-yellow-600 rounded-md hover:bg-yellow-500 font-poppins">Submit</button>
                </form>
            </div>
        </div>
        <div class="relative w-1/2 bg-right bg-no-repeat" style="background-image: url('../images/rubicon.jpg')">
        </div>
    </div>
</body>
@endsection
