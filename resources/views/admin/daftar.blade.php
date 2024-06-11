<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">
    <title>Daftar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f5f5f5] flex justify-center items-center min-h-screen">
    <div class="bg-white rounded-md grid grid-cols-2 md:grid-cols-2 shadow-xl">
        <!-- kiri -->
        <div class="w-full h-full overflow-hidden rounded-l-md">
            <img src="/images/image.png" alt="image" class="object-cover h-full w-full">
        </div>
        <!-- Kanan -->
        <div class="p-8 flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-4">DAFTAR</h2>
            <p class="text-gray-600 mb-6">PTPN IV REG III</p>
            <form action="{{ route('daftar.store') }}" method="post"">
            @csrf
                <div class="mb-4">
                    <label class="block text-gray-700">E-Mail</label>
                    <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Masukkan Email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nama</label>
                    <input type="name" name="name" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Masukkan Email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Masukkan Password">
                </div>
                <div class="flex items-center justify-end mb-6">
                    <div>
                        <span class="text-gray-600">Lupa Password?</span>
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>