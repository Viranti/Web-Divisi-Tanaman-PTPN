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
                    <p class="font-semibold text-gray-400">Raystat</p>
                </a>
                <!-- Protas -->
                <a href="{{ route('protas') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/ProtasOn.png" alt="" class="object-cover">
                    </div>
                    <p class="font-bold text-[#00A639]">Protas</p>
                </a>
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
                    <div class="w-11 h-11 rounded-full overflow-hidden">
                        <img src="/images/vector.png" alt="profil">
                    </div>
                </div>
            </div>
            <!-- Main -->
            <button id="tambahDataButton" class="bg-[#00a639] px-4 py-2 text-white rounded-md shadow-md shadow-green-200 mt-20 font-bold">Tambah Data</button>
            <table class="w-full mt-10">
                <thead>
                    <tr class="border-b text-center">
                        <th class="w-48 font-semibold text-sm py-2 text-gray-400">Nama Dokumen</th>
                        <th class="w-32 font-semibold text-sm py-2 text-gray-400">Tanggal Modifikasi</th>
                        <th class="w-36 font-semibold text-sm py-2 text-gray-400">Aksi</th>
                    </tr>
                </thead>
                <tbody class="py-3" id="acaraContainer" class="h-40 overflow-y-auto">
                    @foreach ($protas as $prota)
                    <tr class="border-b text-center">
                        <td class="text-sm py-2">{{ $prota->namaDokument }}</td>
                        <td class="text-sm py-2">{{ $prota->updated_at->format('d-m-Y') }}</td>
                        <td class="text-sm py-2 flex gap-2 items-center justify-center">
                            <a href="#" class="bg-blue-500 edit-button px-3 py-2 flex gap-2 justify-center items-center rounded-md" data-id="{{ $prota->id }}" data-nama="{{ $prota->namaDokument }}">
                                <div class="w-4 h-4 overflow-hidden">
                                    <img src="/images/penIcon.png" alt="editIcon" class="w-full h-full object-cover">
                                </div>
                                <p class="text-white">Edit</p>
                            </a>
                            <form action="{{ route('protas.destroy', $prota->id) }}" method="POST" onsubmit="return confirmDelete()" class="bg-red-500 flex gap-2 justify-center items-center px-3 py-2 rounded-md">
                                @csrf
                                @method('DELETE')
                                <div class="w-4 h-4 overflow-hidden">
                                    <img src="/images/trashIcon.png" alt="deleteIcon" class="w-full h-full object-cover">
                                </div>
                                <button type="submit" class="text-white">Hapus</button>
                            </form>
                            <a href="{{ route('protas.download', $prota->id) }}" class="bg-gray-400 flex gap-2 rounded-md justify-center items-center px-3 py-2">
                                <div class="w-4 h-4 overflow-hidden">
                                    <img src="/images/fileIcon.png" alt="downloadnIcon" class="w-full h-full object-cover">
                                </div>
                                <p class="text-white">Download</p>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal Tambah Data -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden grid place-items-center" id="myModalTambah">
        <div class="bg-white rounded-lg shadow-lg w-1/2">
            <p class="w-full text-center bg-[#0fa958] py-2 font-bold text-white rounded-t-lg">PETA PROTAS</p>
            <div class="p-8">
                <h2 class="text-2xl font-bold mb-4 text-[#00a639]">Tambah Data</h2>
                <form class="mt-10" action="{{ route('protas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="namaDokument">Nama Dokumen</label>
                        <input class="border-b focus:outline-none focus:shadow-outline w-full" id="namaDokument" name="namaDokument" type="text" placeholder="Nama Dokumen">
                    </div>
                    <div class="w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="document">Upload Dokumen</label>
                        <input class="border-b focus:outline-none focus:shadow-outline w-full" id="document" name="document" type="file" placeholder="Upload Dokumen" accept="application/pdf">
                    </div>
                    <p class="text-sm text-gray-400 text-end">File *PDF</p>
                    <div class="flex justify-center mt-20">
                        <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" id="closeTambahModal">Batal</button>
                        <button type="submit" class="bg-[#00a639] text-white px-4 py-2 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit Data -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden grid place-items-center" id="myModalEdit">
        <div class="bg-white rounded-lg shadow-lg w-1/2">
            <p class="w-full text-center bg-[#0fa958] py-2 font-bold text-white rounded-t-lg">PETA PROTAS</p>
            <div class="p-8">
                <h2 class="text-2xl font-bold mb-4 text-[#00a639]">Edit Data</h2>
                <form class="mt-10" action="{{ route('protas.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editProtaId" name="id">
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="editNamaDokumen">Nama Dokumen</label>
                        <input class="border-b focus:outline-none focus:shadow-outline w-full" id="editNamaDokument" name="namaDokument" type="text" placeholder="Nama Dokumen">
                    </div>
                    <div class="w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="editDocument">Upload Dokumen</label>
                        <input class="border-b focus:outline-none focus:shadow-outline w-full" id="editDocument" name="document" type="file" placeholder="Upload Dokumen" accept="application/pdf">
                    </div>
                    <p class="text-sm text-gray-400 text-end">File *PDF</p>
                    <div class="flex justify-center mt-20">
                        <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" id="closeEditModal">Batal</button>
                        <button type="submit" class="bg-[#00a639] text-white px-4 py-2 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- js Modal -->
    <script>
        document.getElementById('tambahDataButton').addEventListener('click', function() {
            document.getElementById('myModalTambah').classList.remove('hidden');
        });

        document.getElementById('closeTambahModal').addEventListener('click', function() {
            document.getElementById('myModalTambah').classList.add('hidden');
        });

        window.addEventListener('click', function(event) {
            if (event.target === document.getElementById('myModalTambah')) {
                document.getElementById('myModalTambah').classList.add('hidden');
            }
        });

        document.querySelectorAll('.edit-button').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;
                const nama = this.dataset.nama;
                document.getElementById('editProtaId').value = id;
                document.getElementById('editNamaDokument').value = nama;
                document.getElementById('myModalEdit').classList.remove('hidden');
            });
        });

        document.getElementById('closeEditModal').addEventListener('click', function() {
            document.getElementById('myModalEdit').classList.add('hidden');
        });

        window.addEventListener('click', function(event) {
            if (event.target === document.getElementById('myModalEdit')) {
                document.getElementById('myModalEdit').classList.add('hidden');
            }
        });
    </script>
    <!-- Js confirmDelete -->
    <script>
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus dokumen ini?');
        }
    </script>
</body>

</html>