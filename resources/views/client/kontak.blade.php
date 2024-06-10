<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">
    <title>Kontak</title>
</head>

<body class="py-2 h-fit">
    <!-- Header -->
    <div class="flex justify-between px-10 py-4 justify-center items-center">
        <a href="{{route('beranda')}}" class="flex gap-2 justify-center items-center">
            <div class="w-16 h-1w-16 overflow-hidden">
                <img src="/images/logo.png" alt="logo" class="w-full h-full object-cover">
            </div>
            <div>
                <p class="uppercase text-lg text-[#d27524] font-bold">PT. Perkebunan Nusantara IV</p>
                <p class="uppercase text-[#06a33d] font-bold">Regional III</p>
            </div>
        </a>
        <div class="flex gap-4">
            <a href="{{route('beranda')}}" class="font-bold text-xl">Beranda</a>
            <a href="{{route('profil')}}" class="font-bold text-xl">Profil</a>
            <a href="{{route('kontak')}}" class="font-bold text-xl text-[#19E064]">Kontak</a>
            <a href="{{ route('login')}}" class="font-bold text-xl">Login</a>
        </div>
    </div>
    <!-- Main Content -->
    <div class="bg-[#f5f7fa] p-20 h-fit">
        <div class="grid grid-cols-2 gap-5">
            <div class="bg-white rounded-xl h-fit p-20">
                <p class="font-bold text-2xl">Hubungi Kami</p>
                <p class="text-sm text-gray-500 text-left text-justify mt-5
                ">Punya pertanyaan atau masukan?, kami siap membantu, kirimkan pesan kepada kami</p>
                <hr class="flex-grow border-gray-300 mt-5">
                <div class="grid grid-cols-2 mt-7 gap-5">
                    <div>
                        <p class="text-lg font-semibold">Nama Depan</p>
                        <input type="text" class="px-4 py-2 bg-gray-100 rounded-md mt-3 w-full" placeholder="Nama Depan">
                    </div>
                    <div>
                        <p class="text-lg font-semibold">Nama Belakang</p>
                        <input type="text" class="px-4 py-2 bg-gray-100 rounded-md mt-3 w-full" placeholder="Nama Belakang">
                    </div>
                </div>
                <p class="text-lg font-semibold mt-5">Email</p>
                <input type="text" class="px-4 py-2 bg-gray-100 rounded-md mt-3 w-full" placeholder="Email">
                <p class="text-lg font-semibold mt-5">Pesan</p>
                <textarea class="bg-gray-100 rounded-md mt-3 w-full px-4 py-2 h-40" id="pesan" name="pesan" type="text" placeholder="Pesan"></textarea>
                <button class="px-4 py-2 bg-[#00a639] w-full mt-5 rounded-md text-white font-semibold">Kirim Masukan</button>
            </div>
            <div>

            </div>
        </div>

    </div>
    <!-- Js Data Kebun -->

</body>

</html>