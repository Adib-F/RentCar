@extends('layout/app')

@section('title')
 Setting
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body class="bg-gray-100 min-h-screen text-black">
<div class="container flex flex-col md:flex-row justify-between items-center">
    <div class="px-4 py-14 absolute top-20 left-6 ">
        <a class="font-bold text-black flex items-center">
        <img src="images/settings.svg" alt=""></img> Setting
        </a>
    </div>
    <div class="container m-10 lg:w-7/8">
    <div class="bg-white p-10 md:p-35 h-auto rounded-lg ms-64 py-9 shadow-md">
    
        <div class="flex items-center mb-6">
            <img src="images/user.svg" alt="" class="w-10 h-10 mr-3">
            <p class="text-black font-bold text-lg">Hafivah Tahta</p>
        </div>

        <div class="grid grid-cols-2 gap-4">

            <label for="email" class="text-black">Email</label>
            <input type="email" id="email" placeholder="" class="block w-full px-4 py-1 border rounded-md bg-gray-300" readonly>

            <label for="password" class="text-black">Password</label>
            <input type="password" id="password" placeholder="" class="block w-full px-4 py-1 border rounded-md bg-gray-300"readonly>

            <label for="phone" class="text-black">Phone Number</label>
            <input type="tel" id="phone" placeholder="" class="block border border-black w-full px-4 py-1 rounded-md bg-white">

            <label for="nik" class="text-black">NIK</label>
            <input type="text" id="nik" placeholder="" class="block w-full px-4 py-1 border rounded-md bg-gray-300">
        </div>
    <div class="grid justify-items-end">
        <button type="submit" class="bg-orange-400 text-black font-semibold py-1 px-6 mt-6 rounded-md hover:bg-yellow-500 font-poppins">Submit</button>
    </div>
    </div>
</div>
</div>
</div>
</body>
@endsection

@section('footer')
 @include('components/footer')
@endsection