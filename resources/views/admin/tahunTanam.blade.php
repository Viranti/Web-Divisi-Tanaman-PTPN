<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Tahun Tanam</title>
</head>

<body class="bg-white">
    <div class="flex">
        <!-- Kiri -->
        <div class="flex-none w-[20%] bg-[#f5f5f5] h-screen px-10 py-8">
            <div class="flex items-center gap-5">
                <div class="w-16 h-16 overflow-hidden">
                    <img src="/images/logo.png" alt="logo" class="object-cover">
                </div>
                <p class="font-bold text-[#00A639] text-lg">PTPN IV REG III</p>
            </div>
            <div class="mt-20 flex flex-col gap-8">
                <!-- dashboard -->
                <a href="{{ route('dashboard') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/DashboardOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400 ">Dashboard</p>
                </a>
                <!-- Raystat -->
                <a href="{{ route('raystat') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/RaystatOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-bold text-gray-400">Raystat</p>
                </a>
                <!-- Protas -->
                <a href="{{ route('protas') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/ProtasOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400">Protas</p>
                </a>
                <!-- Tahun Tanam -->
                <a href="{{ route('tahunTanam') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/ProtasOn.png" alt="" class="object-cover">
                    </div>
                    <p class="font-bold text-[#00A639]">Tahun Tanam</p>
                </a>
                <!-- Berita -->
                <a href="{{ route('berita') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/newsOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400">Berita</p>
                </a>
                <!-- Kebun -->
                <a href="{{ route('kebun') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/kebunOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400">Kebun</p>
                </a>
                <!-- masukan -->
                <a href="{{ route('masukan') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/masukanOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400">Masukan</p>
                </a>
            </div>
        </div>
        <!-- Kanan -->
        <div class="flex-auto px-5 py-8">
            <div class="flex w-full gap-5 justify-between">
                <div>
                    <p class="font-bold text-lg">PETA TAHUN TANAM</p>
                    <p class="text-sm text-gray-400">PTPN IV REGIONAL III</p>
                </div>
                <div class="flex gap-5 items-center">
                    <div class="justify-end flex flex-col items-end">
                        <p class="font-semibold capitalize">{{ Auth::user()->name }}</p>
                        <p class="text-[10px] text-gray-400">Admin</p>
                    </div>
                    <div class="w-11 h-11 rounded-full overflow-hidden cursor-pointer" id="akun">
                        <img src="/images/vector.png" alt="profil">
                    </div>
                </div>
            </div>
            <!-- Modal Logout -->
            <div class="flex justify-end">
                <div class="w-32 flex flex-col items-end mt-2 gap-1 hidden bg-white rounded-xl shadow-xl" id="modalLogout">
                    <a href="{{ route('dataAkun') }}" class="px-4 py-2 flex justify-start items-center gap-2 w-32 h-fit">
                        <div class="w-6 h-6 overflow-hidden">
                            <img src="/images/user.png" alt="logoutIcon" class="w-full h-full object-cover">
                        </div>
                        <p class="font-semibold text-[#30b09d]">Akun</p>
                    </a>
                    <a href="{{ route('logout') }}" class="px-4 py-2 flex justify-start items-center gap-2 w-32 h-fit">
                        <div class="w-6 h-6 overflow-hidden">
                            <img src="/images/logout.png" alt="logoutIcon" class="w-full h-full object-cover">
                        </div>
                        <p class="font-semibold text-[#30b09d]">Logout</p>
                    </a>
                </div>
            </div>
            <!-- Main -->
            <div class="grid grid-cols-4 gap-5 mt-20">
                @foreach ( $kebuns as $kebun )
                <a href="{{ route('tahunTanam.show', ['id' => $kebun->id]) }}" class="bg-[#00a639] px-4 py-2 text-white rounded-md shadow-md shadow-green-200 mt-5 font-bold">
                    <p>{{$kebun->namaKebun}}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Js Logout -->
    <script>
        document.getElementById('akun').addEventListener('click', function(event) {
            document.getElementById('modalLogout').classList.remove('hidden');
            event.stopPropagation(); // Prevent click event from bubbling up
        });

        window.addEventListener('click', function(event) {
            if (!document.getElementById('modalLogout').contains(event.target) && event.target !== document.getElementById('akun')) {
                document.getElementById('modalLogout').classList.add('hidden');
            }
        });

        document.getElementById('modalLogout').addEventListener('click', function(event) {
            event.stopPropagation(); // Prevent click event from bubbling up
        });
    </script>
</body>

</html>