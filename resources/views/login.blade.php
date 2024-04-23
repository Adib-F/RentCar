@extends('layout/app')

@section('title')
  Login
@endsection

@section('content')
<body class="bg-gray-100 h-screen">
    <div class="container flex h-screen">
        <div class="image-section w-1/2 bg-cover bg-right relative" style="background-image: url('/images/rubicon.jpg')"></div>
        <div class="absolute top-0 right-0 mt-8 mr-8">
            <img src="/images/logo-rentcang.png" class="w-30 h-10 "> 
        </div>
        <div class="w-1/2 flex justify-center items-center p-8">
            <div class="bg-gray-100 p-8 rounded-lg w-5/6">
                <form action="#" method="POST">
                <div class="text-5xl font-extrabold mb-4 text-black">LOGIN</div>
                    <div class="text-xl mt-4 text-black font-bold ">Belum memiliki akun? <a href="register.blade.php" class="text-blue-500 hover:text-blue-700">Disini</a>
                    </div>
                    <br>
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
    </div>
</body>
@endsection