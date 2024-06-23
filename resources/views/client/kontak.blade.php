<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">
    <title>Kontak</title>
</head>

<body class="h-fit">
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
                <p class="text-sm text-gray-500 text-left text-justify mt-5">Punya pertanyaan atau masukan?, kami siap
                    membantu, kirimkan pesan kepada kami</p>
                <hr class="flex-grow border-gray-300 mt-5">
                @if(session('success'))
                    <div class="text-green-500 p-4 rounded-md mb-5 text-center">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <p class="text-lg font-semibold">Nama</p>
                        <input type="text" name="nama" id="nama" class="px-4 py-2 bg-gray-100 rounded-md mt-3 w-full"
                            placeholder="Nama Anda">
                    </div>
                    <p class="text-lg font-semibold mt-5">Email</p>
                    <input type="text" name="email" id="email" class="px-4 py-2 bg-gray-100 rounded-md mt-3 w-full"
                        placeholder="Email">
                    <p class="text-lg font-semibold mt-5">Pesan</p>
                    <textarea name="pesan" id="pesan" class="bg-gray-100 rounded-md mt-3 w-full px-4 py-2 h-40"
                        placeholder="Pesan"></textarea>
                    <button type="submit"
                        class="px-4 py-2 bg-[#00a639] w-full mt-5 rounded-md text-white font-semibold">Kirim
                        Masukan</button>
                </form>
            </div>
            <div class="flex flex-col gap-5">
                <div class="h-[50%] w-full overflow-hidden bg-white rounded-xl p-4">
                    <img src="/images/logo.png" alt="logo" class="w-full h-full object-contain">
                </div>
                <div class="h-[31%] w-full overflow-hidden bg-white rounded-xl px-6 py-4 flex flex-col gap-5">
                    <div class="flex gap-5 items-center">
                        <div class="w-12 h-12 overflow-hidden bg-gray-200 rounded-full p-3">
                            <img src="/images/gmail.png" alt="email" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="font-semibold text-xl">Email</p>
                            <p class="text-gray-400">ptpn5@ptpn5.co.id</p>
                        </div>
                    </div>
                    <div class="flex gap-5 items-center">
                        <div class="w-12 h-12 overflow-hidden bg-gray-200 rounded-full p-3">
                            <img src="/images/phone.png" alt="email" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="font-semibold text-xl">Telepon</p>
                            <p class="text-gray-400">(62-761) 66565</p>
                        </div>
                    </div>
                    <div class="flex gap-5 items-center">
                        <div class="w-12 h-12 overflow-hidden bg-gray-200 rounded-full p-3">
                            <img src="/images/location.png" alt="email" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="font-semibold text-xl">Alamat</p>
                            <p class="text-gray-400">Jl. Rambutan No. 43 Pekanbaru - Riau 28294</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="bg-slate-300 flex flex-col gap-10 justify-center items-center py-10 mt-10">
        <div class="w-20 h-20 overflow-hidden">
            <img src="/images/logo.png" alt="logo" class="w-full h-full object-cover">
        </div>
        <div class="flex">
            <a href="{{route('beranda')}}"
                class="text-slate-700 font-semibold px-5 border-r border-slate-700">Beranda</a>
            <a href="{{route('profil')}}" class="text-slate-700 font-semibold px-5 border-r border-slate-700">Profil</a>
            <a href="{{route('kontak')}}" class="text-slate-700 font-semibold px-5 border-r border-slate-700">Kontak</a>
            <a href="{{ route('login')}}" class="text-slate-700 font-semibold px-5">Login</a>
        </div>
        <div class="flex gap-3">
            <a href="https://www.instagram.com/ptpn4_palmco?igsh=MXdpdGxucHBxdWM1NQ=="
                class="w-10 h-10 overflow-hidden bg-slate-200 rounded-full p-2">
                <img src="/images/instagram.png" alt="email" class="w-full h-full object-cover">
            </a>
            <a href="https://www.youtube.com/@ptpn4_regional3"
                class="w-10 h-10 overflow-hidden bg-slate-200 rounded-full p-2">
                <img src="/images/youtube.png" alt="email" class="w-full h-full object-cover">
            </a>
        </div>
    </div>

</body>

</html>