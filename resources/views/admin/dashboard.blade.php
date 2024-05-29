<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
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
                        <img src="/images/dashboardOn.png" alt="" class="object-cover">
                    </div>
                    <p class="font-bold text-[#00A639] ">Dashboard</p>
                </a>
                <!-- Raystat -->
                <a href="{{ route('raystat') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/RaystatOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400">Raystat</p>
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
                        <img src="/images/ProtasOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400">Tahun Tanam</p>
                </a>
                <a href="{{ route('logout')}}">Logout</a>
            </div>
        </div>
        <!-- Kanan -->
        <div class="flex-auto px-5 py-8">
            <div class="flex w-full gap-5 justify-between">
                <div>
                    <p class="font-bold text-lg">DASHBOARD</p>
                    <p class="text-sm text-gray-400">PTPN IV REGIONAL III</p>
                </div>
                <div class="flex gap-5 items-center">
                    <div class="justify-end flex flex-col items-end">
                        <p class="font-semibold">VIRA</p>
                        <p class="text-[10px] text-gray-400">Admin</p>
                    </div>
                    <div class="w-11 h-1w-11 rounded-full overflow-hidden">
                        <img src="/images/vector.png" alt="profil">
                    </div>
                </div>
            </div>
            <!-- Main -->
            <div class="grid grid-cols-4 gap-8 mt-24">
                <!-- raystat -->
                <div class="bg-gray-200 md:h-40 h-60 flex gap-8 rounded-md justify-center items-center">
                    <div class="w-20 h-20 overflow-hidden">
                        <img src="/images/QgisLogo.png" alt="Qgis" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Total Data</p>
                        <p class="font-semibold">Raystat</p>
                        <p class="font-semibold">{{ $totalData['totalRaystats'] }}</p>
                    </div>
                </div>
                <!-- protas -->
                <div class="bg-gray-200 md:h-40 h-60 flex gap-8 rounded-md justify-center items-center">
                    <div class="w-20 h-20 overflow-hidden">
                        <img src="/images/QgisLogo.png" alt="Qgis" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Total Data</p>
                        <p class="font-semibold">Protas</p>
                        <p class="font-semibold">{{ $totalData['totalProtas'] }}</p>
                    </div>
                </div>
                <!-- tahun Tanam -->
                <div class="bg-gray-200 md:h-40 h-60 flex gap-8 rounded-md justify-center items-center">
                    <div class="w-20 h-20 overflow-hidden">
                        <img src="/images/QgisLogo.png" alt="Qgis" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Total Data</p>
                        <p class="font-semibold">Tahun Tanam</p>
                        <p class="font-semibold">{{ $totalData['totalTahunTanam'] }}</p>
                    </div>
                </div>
                <div class="bg-gray-200 md:h-40 h-60 flex gap-8 rounded-md justify-center items-center">
                    <div class="w-20 h-20 overflow-hidden">
                        <img src="/images/QgisLogo.png" alt="Qgis" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Total Seluruh Data</p>
                        <p class="font-semibold">{{ $totalData['totalAllData'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>