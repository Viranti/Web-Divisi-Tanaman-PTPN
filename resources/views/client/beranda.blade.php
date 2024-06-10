<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">
    <title>Beranda</title>
</head>

<body class="py-2">
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
    <!-- Main Content -->
    <div class="mt-10">
        <p class="px-10 font-semibold text-lg">Selamat Datang Di Divisi Tanaman</p>
        <div class="w-full h-[550px] overflow-hidden mt-5">
            <img src="/images/DJI_0120.png" alt="image1" class="w-full h-full object-cover">
        </div>
        <div class="grid grid-cols-2 gap-12 mt-10 px-20 mb-20">
            <div class="w-full h-[700px] overflow-hidden">
                <img src="/images/sawit 1 (1).png" alt="sawitImg" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="bg-[#0bb54b] rounded-xl px-10 py-8 shadow-4xl">
                <p class="font-bold text-center text-2xl text-white">DIVISI TANAMAN PT. PERKEBUNAN NUSANTARA <br>REGIONAL III</p>
                <p class="mt-20 text-xl font-semibold indent-10 text-justify text-white"> Bagian tanaman termasuk SEVP Operasional yang dilakukan oleh PTPN IV dikarnakan bagian ini membawahi dan mengontrol langsung operasional yang dilakukan oleh kebun. Bagian tamanan melakukan pekerjaan yang dibagi berdasarkan seperti mengatur produksi tanaman, pemupukan dan proteksi tanaman, investasi dan pemetaan tanaman, dan Quality control hingga administrasi tanaman.
                </p>
                <p class="mt-10 text-xl font-semibold indent-10 text-justify text-white">Adapun kebun yang di bawahi oleh DIvisi Tanaman sebanyak 20 kebun yang berlokasi di berbagai daerah yang ada di Provinsi Riau.</p>
                <div class="bg-white rounded-xl grid grid-cols-2 gap-4 mx-auto justify-center items-center px-4 py-2 w-[70%] mt-10">
                    <div class="flex flex-col gap-1">
                        <p class="font-semibold">Nama Kebun</p>
                        <select id="namaKebun" name="namaKebun" class="border py-2 px-4 w-full" onchange="updateLuasKebun()">
                            <option value="" disabled selected>- Pilih Nama Kebun -</option>
                            @foreach ($kebuns as $kebun)
                            <option value="{{ $kebun->id }}" data-luas="{{ $kebun->luas }}" class="text-sm">{{ $kebun->namaKebun }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-semibold">Luas Kebun</p>
                        <!-- Data Luas -->
                        <p id="luasKebun" class="border py-2 px-4">Luas Kebun</p>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($berita as $beritas)
        <div class="grid grid-cols-3 h-72 gap-12 px-20 mt-10">
            <div class="w-full h-full overflow-hidden">
                <img src="{{ Storage::url($beritas->foto) }}" alt="" class="w-full h-full rounded-xl object-cover">
            </div>
            <div class="col-span-2">
                <p class="font-bold text-2xl">{{ $beritas->judulBerita }}</p>
                <p class="font-semibold text-justify indent-10 mt-10 text-xl">{{implode(' ', array_slice(explode(' ', $beritas->deskripsi), 0, 30))}}</p>
                <div class="mt-10 bg-[#0bb54b] rounded-md px-4 py-2 w-fit">
                    <a href="{{ route('berita.show', $beritas->id) }}" class=" font-semibold text-white">Lanjut Baca >></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Js Data Kebun -->
    <script>
        function updateLuasKebun() {
            const select = document.getElementById('namaKebun');
            const luasKebun = document.getElementById('luasKebun');
            const selectedOption = select.options[select.selectedIndex];
            const luas = selectedOption.getAttribute('data-luas');
            luasKebun.textContent = luas ? luas : 'Luas Kebun';
        }
    </script>
</body>

</html>