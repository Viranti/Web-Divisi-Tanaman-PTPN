<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">
    <title>Berita</title>
</head>

<body class="flex flex-col justify-between min-h-screen">
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
            <a href="{{route('beranda')}}" class="font-bold text-xl text-[#19E064]">Beranda</a>
            <a href="{{route('profil')}}" class="font-bold text-xl">Profil</a>
            <a href="{{route('kontak')}}" class="font-bold text-xl">Kontak</a>
            <a href="{{ route('login')}}" class="font-bold text-xl">Login</a>
        </div>
    </div>
    <div class="mt-16">
        <a href="{{route('beranda')}}" class="mt-5 justify-end mx-24 font-semibold text-xl">
            < Kembali</a>
    </div>
    <p class="mt-5 mx-24 text-center font-bold text-3xl">{{ $berita->judulBerita }}</p>
    <div class="mt-20 mx-24">
        <div class="float-left w-[30%] h-60 overflow-hidden mr-10">
            <img src="{{ Storage::url($berita->foto) }}" alt="" class="w-full h-full object-cover rounded-xl">
        </div>
        <p class="font-sans text-xl text-justify indent-10">{{ $berita->deskripsi }}</p>
    </div>
    <!-- Footer -->
    <div class="bg-slate-300 flex flex-col gap-10 justify-center items-center py-10 mt-10">
        <div class="w-20 h-20 overflow-hidden">
            <img src="/images/logo.png" alt="logo" class="w-full h-full object-cover">
        </div>
        <div class="flex">
            <a href="{{route('beranda')}}" class="text-slate-700 font-semibold px-5 border-r border-slate-700">Beranda</a>
            <a href="{{route('profil')}}" class="text-slate-700 font-semibold px-5 border-r border-slate-700">Profil</a>
            <a href="{{route('kontak')}}" class="text-slate-700 font-semibold px-5 border-r border-slate-700">Kontak</a>
            <a href="{{ route('login')}}" class="text-slate-700 font-semibold px-5">Login</a>
        </div>
        <div class="flex gap-3">
            <a href="https://www.instagram.com/ptpn4_palmco?igsh=MXdpdGxucHBxdWM1NQ==" class="w-10 h-10 overflow-hidden bg-slate-200 rounded-full p-2">
                <img src="/images/instagram.png" alt="email" class="w-full h-full object-cover">
            </a>
            <a href="https://www.youtube.com/@ptpn4_regional3" class="w-10 h-10 overflow-hidden bg-slate-200 rounded-full p-2">
                <img src="/images/youtube.png" alt="email" class="w-full h-full object-cover">
            </a>
        </div>
    </div>
</body>

</html>