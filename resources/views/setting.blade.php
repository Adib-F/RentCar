@extends('layout/app')

@section('title')
 Setting
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body class="min-h-screen text-black bg-gray-100">
<div class="container flex flex-col items-center justify-between md:flex-row">
    <div class="absolute px-4 py-14 top-20 left-6 ">
        <a class="flex items-center font-bold text-black">
        <img src="images/settings.svg" alt=""> Setting
        </a>
    </div>
    <div class="container m-10 lg:w-7/8">
    <div class="h-auto p-10 bg-white rounded-lg shadow-md md:p-35 ms-64 py-9">

        <form method="POST" action="{{ route('update_profile', auth()->user()->Id_Pengguna) }}">
            @csrf
            @method('PUT')
            <div class="flex items-center mb-6">
                <img src="images/user.svg" alt="" class="w-10 h-10 mr-3">
                <p class="text-lg font-bold text-black">{{ auth()->user()->Nama_Lengkap }}</p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <label for="username" class="text-black">Username</label>
                <input type="text" id="username" name="username" value="{{ auth()->user()->Username }}" class="block w-full px-4 py-1 mt-4 bg-white border border-black rounded-md">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <label for="email" class="text-black">Email</label>
                <input type="email" id="email" value="{{ auth()->user()->Email }}" class="block w-full px-4 py-1 mt-4 bg-gray-300 border rounded-md" readonly>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <label for="password" class="text-black">Password</label>
                <input type="password" id="password" value="{{ auth()->user()->Password }}" class="block w-full px-4 py-1 mt-4 bg-gray-300 border rounded-md" readonly>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <label for="phone" class="text-black">Phone Number</label>
                <input type="tel" id="phone" name="no_handphone" value="{{ auth()->user()->No_Handphone }}" class="block w-full px-4 py-1 mt-4 bg-white border border-black rounded-md">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <label for="nik" class="text-black">NIK</label>
                <input type="text" id="nik" value="{{ auth()->user()->NIK }}" class="block w-full px-4 py-1 mt-4 bg-gray-300 border rounded-md">
            </div>

            <div class="grid justify-items-end">
                <button type="submit" class="px-6 py-1 mt-4 font-semibold text-black bg-orange-400 rounded-md font-poppins">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
</body>
@endsection

@section('footer')
 @include('components/footer')
@endsection
