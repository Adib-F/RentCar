@extends('layout/app')

@section('title')
 Register
@endsection

@section('content')
<body class="bg-gray-100 h-screen font-poppins">
    <div class="container flex h-screen">
    <div class="absolute top-0 left-0 mt-4 ml-4">
        <img src="/images/logo-rentcang.png" class="w-30 h-10 "> 
    </div>
        <div class="w-1/2 flex justify-center items-center p-10/12  ">
            <div class="bg-gray-100 p-8 rounded-lg w-2/3">
                <form action="#" method="POST">
                    <div class="text-5xl font-extrabold mb-4 text-black">DAFTAR</div>
                    <div class="text-xl mt-4 text-black font-bold ">Sudah memiliki akun? <a href="#" class="text-blue-500 hover:text-blue-700">Disini</a>
                    </div>
                    <br>
                    <div class="mb-4">
                        <label for="username" class="text-black font-semibold mb-2">Username</label>
                        <input type="username" id="username" name="username" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-2 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="text-black font-semibold mb-2">Nama Lengkap</label>
                        <input type="nama" id="nama" name="nama" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-2 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <div class="mb-4">
                        <label for="number" class="text-black font-semibold mb-2">No. Handphone</label>
                        <input type="number" id="number" name="number" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-2 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <div class="mb-4">
                        <label for="number" class="text-black font-semibold mb-2">NIK</label>
                        <input type="number" id="number" name="number" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-2 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="text-black font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-2 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="text-black font-semibold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-2 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <button type="submit" class="bg-yellow-600 text-black font-semibold py-1 px-4 rounded-md hover:bg-yellow-500 font-poppins">Submit</button>
                </form>
            </div>
        </div>
        <div class="w-1/2 bg-no-repeat bg-right relative" style="background-image: url('../images/rubicon.jpg')">
        </div>
    </div>
</body>
@endsection