<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">
    <title>Detil Berita</title>
</head>

<body>
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
            <a href="" class="font-bold text-xl">Peta</a>
            <a href="" class="font-bold text-xl">Kontak</a>
            <a href="{{ route('login')}}" class="font-bold text-xl">Login</a>
        </div>
    </div>
    <p class="mt-10 text-center font-bold text-3xl">{{ $berita->judulBerita }}</p>
    <div class="mt-20 mx-24">
        <div class="float-left w-[30%] h-60 overflow-hidden mr-10">
            <img src="{{ Storage::url($berita->foto) }}" alt="" class="w-full h-full object-cover rounded-xl">
        </div>
        <p class="font-semibold text-xl text-justify indent-10">{{ $berita->deskripsi }}</p>
    </div>
</body>

</html>