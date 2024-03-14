<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>   
<body class="bg-red-800 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-6">Register</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="confirm-password" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <button type="submit" class="w-full bg-red-800 text-white font-semibold py-2 px-4 rounded hover:bg-red-800 focus:outline-none focus:bg-blue-600">Register</button>
            </div>
        </form>
    </div>
</body>

</body>
</html>