<!DOCTYPE html>
<html>
<head>
    <title>HALAMAN LOGIN</title>
    <link rel="stylesheet" href="{{ asset('styles/irfan.css') }}">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.4.1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="w-96 bg-red-50 shadow-md rounded-lg p-8">
            <img src="{{asset('images/image.png') }}">
            <h1 class="text-3xl font-bold text-center mb-8">HALAMAN LOGIN</h1>
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username :</label>
                <input type="text" id="username" name="username" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password :</label>
                <input type="password" id="password" name="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="text-center">
                <button type="button" class="py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
            </div>
        </div>
    </div>
</body>
</html>


