<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Beranda</title>
</head>

<body class="py-2">
    <!-- Header -->
    <div class="flex justify-between px-10 py-4 justify-center items-center">
        <div class="flex gap-2 justify-center items-center">
            <div class="w-16 h-1w-16 overflow-hidden">
                <img src="/images/logo.png" alt="logo" class="w-full h-full object-cover">
            </div>
            <div>
                <p class="uppercase text-lg text-[#d27524] font-bold">PT. Perkebunan Nusantara IV</p>
                <p class="uppercase text-[#06a33d] font-bold">Regional III</p>
            </div>
        </div>
        <div class="flex gap-4">
            <a href="" class="font-semibold text-lg text-[#19E064]">Beranda</a>
            <a href="" class="font-semibold text-lg">Profil</a>
            <a href="" class="font-semibold text-lg">Peta</a>
            <a href="" class="font-semibold text-lg">Kontak</a>
            <a href="" class="font-semibold text-lg">Login</a>
        </div>
    </div>
    <!-- Main Content -->
    <div class="mt-10">
        <p class="px-10 font-semibold text-lg">Selamat Datang Di Divisi Tanaman</p>
        <div class="w-full h-[550px] overflow-hidden mt-5">
            <img src="/images/berandaImage.png" alt="image1" class="w-full h-full object-cover">
        </div>
        <div class="grid grid-cols-2 gap-12 mt-10 px-20">
            <div class="w-full h-[700px] overflow-hidden">
                <img src="/images/sawitDrone.png" alt="sawitImg" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="bg-[#0bb54b] rounded-xl px-10 py-8 shadow-4xl">
                <p class="font-bold text-center text-2xl">DIVISI TANAMAN PT. PERKEBUNAN NUSANTARA <br>REGIONAL III</p>
                <p class="mt-20 text-xl font-semibold indent-10 text-justify"> Bagian tanaman termasuk SEVP Operasional yang dilakukan oleh PTPN IV dikarnakan bagian ini membawahi dan mengontrol langsung operasional yang dilakukan oleh kebun. Bagian tamanan melakukan pekerjaan yang dibagi berdasarkan seperti mengatur produksi tanaman, pemupukan dan proteksi tanaman, investasi dan pemetaan tanaman, dan Quality control hingga administrasi tanaman.
                </p>
                <p class="mt-10 text-xl font-semibold indent-10 text-justify">Adapun kebun yang di bawahi oleh DIvisi Tanaman sebanyak 20 kebun yang berlokasi di berbagai daerah yang ada di Provinsi Riau.</p>
                <div class="bg-white rounded-xl grid grid-cols-2 gap-4 mx-auto justify-center items-center px-4 py-2 w-[70%] mt-10">
                    <div class="flex flex-col gap-1">
                        <p class="font-semibold text-center">Nama Kebun</p>
                        <select id="namaKebun" name="namaKebun" class="border py-2 px-4 w-full">
                            <option value="" disabled selected>- Pilih Nama Kebun -</option>
                            <option value="" class="text-sm">Sei Rokan</option>
                            <option value="" class="text-sm">Kebun B</option>
                            <option value="" class="text-sm">Kebun C</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-semibold">Luas Kebun</p>
                        <p class="border py-2 px-4">Luas Kebun</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>