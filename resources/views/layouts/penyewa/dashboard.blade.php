<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penyewa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96 text-center">
            <h1 class="text-2xl font-bold mb-4 text-blue-600">Selamat Datang!</h1>
            <p class="text-gray-600 mb-6">Halo, <strong>{{ session('nama') }}</strong></p>
            <p class="text-sm text-gray-500 mb-6">Kamu berhasil login ke Dashboard Penyewa Naila.</p>
            
            <form action="{{ route('logout.penyewa') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition">
                    Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>