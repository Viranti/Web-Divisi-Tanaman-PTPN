<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">
    <title>Profil</title>
</head>

<body class="">
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
            <a href="{{route('profil')}}" class="font-bold text-xl text-[#19E064]">Profil</a>
            <a href="{{route('kontak')}}" class="font-bold text-xl">Kontak</a>
            <a href="{{ route('login')}}" class="font-bold text-xl">Login</a>
        </div>
    </div>
    <!-- Main Content -->
    <div class="mt-5 pb-10">
        <div class="w-[100%] h-[550px] overflow-hidden">
            <img src="/images/DJI_0089.png" alt="Sawit" class="w-full h-full object-cover">
        </div>
        <p class="font-bold text-3xl mt-10 text-center"> VISI DAN MISI DIVISI TANAMAN <br>
            PT. PERKEBUNAN NUSANTARA IV REGIONAL 3
        </p>
        <div class="w-[100%] h-fit bg-[#0bb54b] rounded-2xl p-10 mt-10">
            <div class="w-full h-fit bg-white rounded-2xl px-10 py-8">
                <p class="text-2xl font-bold text-center uppercase">Moto Perusahaan</p>
                <p class="text-xl font-semibold text-center uppercase mt-1">“Kita Pekebenun Hebat”</p>
                <p class="text-2xl font-bold text-center uppercase mt-10">Visi Perusahaan</p>
                <p class="text-xl font-semibold text-center capitalize mt-3">“Menjadi Perusahaan Agribisnis Terintegrasi <br> yang Berkelanjutan dan Berwawasan Lingkungan”</p>
                <p class="text-2xl font-bold text-center uppercase mt-10">Visi Perusahaan</p>
                <div class="w-[65%] mx-auto">
                    <p class="text-xl font-semibold text-center capitalize mt-3 text-justify">1. Pengelolaan Agro industri Kelapa Sawit dan Karet secara efisien Bersama mitra untuk kepentingan stakeholder.</p>
                    <p class="text-xl font-semibold text-center capitalize mt-3 text-justify">2. Penerapan prinsip-prinsip Good Corporate Governance, kriteria minyak sawit berkelanjutan, penerapan standar industri dan pelestarian lingkungan guna menghasilkan produk yang dapat diterima oleh pelanggan.</p>
                    <p class="text-xl font-semibold text-center capitalize mt-3 text-justify">3. Penciptaan keunggulan kompetitif di bidang SDM dan Teknologi 4.0 melalui pengelolaan SDM berdasarkan praktek-praktek terbaik, sistem manajemen SDM serta Teknologi Informasi terkini guna meningkatkan kompetensi inti perusahaan”</p>
                </div>
            </div>
        </div>
        <p class="text-3xl font-bold text-center mt-10">Struktur Organisasi <br> Divisi Tanaman PT. Perkebunan Nusantara IV Regional III</p>
        <div class="flex flex-col items-center mt-10">
            <div class="w-32 h-44 overflow-hidden">
                <img src="/images/Pak daniel.png" alt="kadiv" class="w-full rounded-full h-full">
            </div>
            <p class="px-4 py-2 border-2 border-black text-center font-bold mt-5 rounded-xl">Daniel Triandio <br>
                Kepala Bagian Tanaman
            </p>
            <div class="flex gap-10 mt-10 items-center justify-center">
                <div class="flex flex-col justify-center items-center">
                    <div class="w-32 h-44 overflow-hidden">
                        <img src="/images/pak yasirrr.png" alt="kadiv" class="w-full rounded-full h-full">
                    </div>
                    <p class="px-4 py-2 border-2 border-black text-center font-bold mt-5 rounded-xl">Zafri Yaseer<br>
                        Ka. Sub. Bagian Produksi
                    </p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class="w-32 h-44 overflow-hidden">
                        <img src="/images/Pak niki.png" alt="kadiv" class="w-full rounded-full h-full">
                    </div>
                    <p class="px-4 py-2 border-2 border-black text-center font-bold mt-5 rounded-xl">Nicky SH Silitonga<br>
                        Ka. Sub. Bagian Investasi dan Pemetaan
                    </p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class="w-32 h-44 overflow-hidden">
                        <img src="/images/p alfan.png" alt="kadiv" class="w-full rounded-full h-full">
                    </div>
                    <p class="px-4 py-2 border-2 border-black text-center font-bold mt-5 rounded-xl">Alfan Solih Azhar Simangunsong<br>
                        Ka. Sub. Bagian Pemupukan dan Proteksi
                    </p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class="w-32 h-44 overflow-hidden">
                        <img src="/images/buk nela.png" alt="kadiv" class="w-full rounded-full h-full">
                    </div>
                    <p class="px-4 py-2 border-2 border-black text-center font-bold mt-5 rounded-xl">Nela Anggita<br>
                        Ka. Sub. Bagian QC & Administrasi
                    </p>
                </div>
            </div>
        </div>
        <div class="grid place-items-center">
            <table class="mx-10 mt-10">
                <thead>
                    <tr class="text-center bg-[#0bb54b] ">
                        <th class="border-2 border-black px-4 py-2 w-60">Produksi Tanaman</th>
                        <th class="border-2 border-black px-4 py-2 w-60">Pemupukan, Pemeliharaan, Poteksi Tanaman</th>
                        <th class="border-2 border-black px-4 py-2 w-60">Investasi & Pemetaan Tanaman</th>
                        <th class="border-2 border-black px-4 py-2 w-60">QC & Administrasi Tanaman</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="border-2 border-black px-4 py-2">Andra Novriza (Asisten)
                        </td>
                        <td class="border-2 border-black px-4 py-2">Nava Karina (Asisten)</td>
                        <td class="border-2 border-black px-4 py-2">Farid Ramansyah (Asisten)</td>
                        <td class="border-2 border-black px-4 py-2">Muhktaril Urfa Akroma (Asisten)</td>
                    </tr>
                    <tr class="text-center">
                        <td class="border-2 border-black px-4 py-2">Ahmad Afandy Harahap (Asisten)</td>
                        <td class="border-2 border-black px-4 py-2">Aldira Noval Nasution (Asisten)</td>
                        <td class="border-2 border-black px-4 py-2">Nur Rahmad Yunis (Asisten)</td>
                        <td class="border-2 border-black px-4 py-2">Tata Sukmana (Asisten)</td>
                    </tr>
                    <tr class="text-center">
                        <td class="border-2 border-black px-4 py-2">Antonius Silvister Tarigan (Asisten)</td>
                        <td class="border-2 border-black px-4 py-2">Dwi Yolanda Yulvi (Krani)</td>
                        <td class="border-2 border-black px-4 py-2">Prima Irawan (Asisten)</td>
                        <td class="border-2 border-black px-4 py-2">Edi Suprianto(Krani)</td>
                    </tr>
                    <tr class="text-center">
                        <td class="border-2 border-black px-4 py-2">Hasan Basri(Krani)</td>
                        <td class="border-2 border-black px-4 py-2">Mairis(Krani)</td>
                        <td class="border-2 border-black px-4 py-2">Ekla Ripala Gani(Krani)</td>
                        <td class="border-2 border-black px-4 py-2">Maidi Syahputra(Krani)</td>
                    </tr>
                    <tr class="text-center">
                        <td class="border-2 border-black px-4 py-2">Edi Sofyan(Krani)</td>
                        <td class="border-2 border-black px-4 py-2">-</td>
                        <td class="border-2 border-black px-4 py-2">Ricky Walhendri Harahap(Krani)</td>
                        <td class="border-2 border-black px-4 py-2">Fhinky Olivia Tiara Sakti(Krani)</td>
                    </tr>
                    <tr class="text-center">
                        <td class="border-2 border-black px-4 py-2">-</td>
                        <td class="border-2 border-black px-4 py-2">-</td>
                        <td class="border-2 border-black px-4 py-2">Hafizh Dhillah(Krani)</td>
                        <td class="border-2 border-black px-4 py-2">Arif Prihatna(Krani)</td>
                    </tr>
                    <tr class="text-center">
                        <td class="border-2 border-black px-4 py-2">-</td>
                        <td class="border-2 border-black px-4 py-2">-</td>
                        <td class="border-2 border-black px-4 py-2">M.Auli(Krani)</td>
                        <td class="border-2 border-black px-4 py-2">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
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