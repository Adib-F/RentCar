<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Kendaraan</title>
    <link href="https://cdn.tailwindcss.com/3.4.1/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-xl font-bold">Rental Kendaraan</div>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-300">Motor</a></li>
                <li><a href="#" class="hover:text-gray-300">Mobil</a></li>
            </ul>
        </div>
    </nav>

    <!-- Motor Section -->
    <section class="py-8">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Motor</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Motor Card -->
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{asset('images/image.png') }}" class="mb-4">
                    <h2 class="text-lg font-bold">Motor 1</h2>
                    <p class="text-gray-600">Deskripsi singkat mengenai motor 1.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Sewa</button>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{asset('images/image.png') }}" class="mb-4">
                    <h2 class="text-lg font-bold">Motor 1</h2>
                    <p class="text-gray-600">Deskripsi singkat mengenai motor 1.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Sewa</button>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{asset('images/image.png') }}" class="mb-4">
                    <h2 class="text-lg font-bold">Motor 1</h2>
                    <p class="text-gray-600">Deskripsi singkat mengenai motor 1.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Sewa</button>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{asset('images/image.png') }}" class="mb-4">
                    <h2 class="text-lg font-bold">Motor 1</h2>
                    <p class="text-gray-600">Deskripsi singkat mengenai motor 1.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Sewa</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobil Section -->
    <section class="py-8 bg-pink-200">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Mobil</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Mobil Card -->
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{asset('images/image.png') }}" class="mb-4">
                    <h2 class="text-lg font-bold">Mobil 1</h2>
                    <p class="text-gray-600">Deskripsi singkat mengenai mobil 1.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Sewa</button>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{asset('images/image.png') }}" class="mb-4">
                    <h2 class="text-lg font-bold">Mobil 1</h2>
                    <p class="text-gray-600">Deskripsi singkat mengenai mobil 1.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Sewa</button>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{asset('images/image.png') }}" class="mb-4">
                    <h2 class="text-lg font-bold">Mobil 1</h2>
                    <p class="text-gray-600">Deskripsi singkat mengenai mobil 1.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Sewa</button>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{asset('images/image.png') }}" class="mb-4">
                    <h2 class="text-lg font-bold">Mobil 1</h2>
                    <p class="text-gray-600">Deskripsi singkat mengenai mobil 1.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Sewa</button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
