<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Protas</title>
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
                <div class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/DashboardOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400 ">Dashboard</p>
                </div>
                <!-- Raystat -->
                <div class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/RaystatOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400">Raystat</p>
                </div>
                <!-- Prostat -->
                <div class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/ProtasOn.png" alt="" class="object-cover">
                    </div>
                    <p class="font-bold text-[#00A639]">Protas</p>
                </div>
            </div>
        </div>
        <!-- Kanan -->
        <div class="flex-auto px-5 py-8">
            <div class="flex w-full gap-5 justify-between">
                <div>
                    <p class="font-bold text-lg">PETA PROTAS</p>
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
            <button  id="tambahDataButton" class="bg-[#00a639] px-4 py-2 text-white rounded-md shadow-md shadow-green-200 mt-20 font-bold">Tambah Data</button>
            <table class="w-full mt-10">
                <thead>
                    <tr class="border-b text-center">
                        <th class="w-16 font-semibold text-sm py-2 text-gray-400">Nama Peta</th>
                        <th class="w-16 font-semibold text-sm py-2 text-gray-400">Tanggal Modifikasi</th>
                        <th class="w-20 font-semibold text-sm py-2 text-gray-400">Aksi</th>
                    </tr>
                </thead>
                <tbody class="py-3" id="acaraContainer" class="h-40 overflow-y-auto">
                    <tr class="border-b text-center">
                        <td class="text-sm py-2">a</td>
                        <td class="text-sm py-2">a</td>
                        <td class="text-sm py-2">a</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden grid place-items-center" id="myModal">
        <div class="bg-white p-8 rounded-lg shadow-lg w-1/2">
            <h2 class="text-2xl font-bold mb-4">Tambah Data</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="namaPeta">Nama Peta</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="namaPeta" type="text" placeholder="Nama Peta">
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" id="closeModal">Batal</button>
                    <button type="submit" class="bg-[#00a639] text-white px-4 py-2 rounded">Simpan</button>
                </div>
            </form>
        </div>
</body>
<!-- js Modal -->
<script>
    document.getElementById('tambahDataButton').addEventListener('click', function() {
        document.getElementById('myModal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('myModal').classList.add('hidden');
    });

    window.addEventListener('click', function(event) {
        if (event.target === document.getElementById('myModal')) {
            document.getElementById('myModal').classList.add('hidden');
        }
    });
</script>

</html>