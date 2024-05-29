<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <h2 class="text-2xl font-bold mb-4">MASUK</h2>
            <p class="text-gray-600 mb-6">PTPN IV REG III</p>
            @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
            @endif
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700">E-Mail</label>
                    <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Masukkan Email">
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
                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">MASUK</button>
                </div>
                <div class="flex items-center my-4">
                    <hr class="flex-grow border-gray-300">
                    <span class="mx-2 text-gray-500">Atau</span>
                    <hr class="flex-grow border-gray-300">
                </div>
                <div class="text-center mt-4 border border-black py-2 rounded-md">
                    <a href="#" class="text-black hover:underline">DAFTAR SEKARANG</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>