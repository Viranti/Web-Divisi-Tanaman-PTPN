<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">
    <title>Berita</title>
</head>

<body>
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
                        <img src="/images/dashboardOf.png" alt="" class="object-cover">
                    </div>
                    <p class="font-semibold text-gray-400">Dashboard</p>
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
                <!-- Berita -->
                <a href="{{ route('berita') }}" class="flex gap-3 items-center">
                    <div class="sm:w-6 sm:h-6 md:w-8 md:h-8 overflow-hidden">
                        <img src="/images/newsOn.png" alt="" class="object-cover">
                    </div>
                    <p class="font-bold text-[#00A639]">Berita</p>
                </a>
            </div>
        </div>
        <!-- Kanan -->
        <div class="flex-auto px-5 py-8">
            <div class="flex w-full gap-5 justify-between">
                <div>
                    <p class="font-bold text-lg">DAFTAR BERITA</p>
                    <p class="text-sm text-gray-400">PTPN IV REGIONAL III</p>
                </div>
                <div class="flex gap-5 items-center">
                    <div class="justify-end flex flex-col items-end">
                        <p class="font-semibold uppercase">{{ Auth::user()->name }}</p>
                        <p class="text-[10px] text-gray-400">Admin</p>
                    </div>
                    <div class="w-11 h-1w-11 rounded-full overflow-hidden cursor-pointer" id="akun">
                        <img src="/images/vector.png" alt="profil">
                    </div>
                </div>
            </div>
            <!-- Modal Logout -->
            <div class="w-full flex justify-end mt-2 hidden" id="modalLogout">
                <a href="{{ route('logout')}}" class="bg-white rounded-md px-4 py-2 flex justify-center items-center gap-2 shadow-md w-32 h-fit">
                    <div class="w-6 h-6 overflow-hidden">
                        <img src="/images/logout.png" alt="logoutIcon" class="w-full h-full object-cover">
                    </div>
                    <p class="font-semibold text-[#30b09d]">Logout</p>
                </a>
            </div>
            <!-- Main -->
            <button id="tambahDataButton" class="bg-[#00a639] px-4 py-2 text-white rounded-md shadow-md shadow-green-200 mt-20 font-bold">Tambah Data</button>
            <table class="w-full mt-10">
                <thead>
                    <tr class="border-b text-center">
                        <th class="w-48 font-semibold text-sm py-2 text-gray-400">Judul Berita</th>
                        <th class="w-32 font-semibold text-sm py-2 text-gray-400">Deskripsi</th>
                        <th class="w-32 font-semibold text-sm py-2 text-gray-400">Tanggal Publikasi</th>
                        <th class="w-32 font-semibold text-sm py-2 text-gray-400">Foto</th>
                        <th class="w-36 font-semibold text-sm py-2 text-gray-400">Aksi</th>
                    </tr>
                </thead>
                <tbody class="py-3" id="acaraContainer" class="h-40 overflow-y-auto">
                    @foreach ($berita as $beritas)
                    <tr class="border-b text-center">
                        <td class="text-sm py-2">{{ $beritas->judulBerita }}</td>
                        <td class="text-sm py-2">{{ implode(' ', array_slice(explode(' ', $beritas->deskripsi), 0, 10)) }}</td>
                        <td class="text-sm py-2">{{ $beritas->created_at->format('d-m-Y') }}</td>
                        <td class="text-sm py-2 ">
                            <img src="{{ Storage::url($beritas->foto) }}" alt="Foto Berita" class="inline-block w-32 h-20 object-cover">
                        </td>
                        <td class="text-sm py-2 flex gap-2 items-center justify-center">
                            <button class="bg-blue-500 edit-button px-3 py-2 flex gap-2 justify-center items-center rounded-md" data-id="{{ $beritas->id }}" data-judul="{{ $beritas->judulBerita }}" data-deskripsi="{{ $beritas->deskripsi }}" data-foto="{{ Storage::url($beritas->foto) }}">
                                <div class="w-4 h-4 overflow-hidden">
                                    <img src="/images/penIcon.png" alt="editIcon" class="w-full h-full object-cover">
                                </div>
                                <p class="text-white">Edit</p>
                            </button>
                            <form action="{{ route('berita.destroy', $beritas->id) }}" method="POST" onsubmit="return confirmDelete()" class="bg-red-500 flex gap-2 justify-center items-center px-3 py-2 rounded-md">
                                @csrf
                                @method('DELETE')
                                <div class="w-4 h-4 overflow-hidden">
                                    <img src="/images/trashIcon.png" alt="deleteIcon" class="w-full h-full object-cover">
                                </div>
                                <button type="submit" class="text-white">Hapus</button>
                            </form>
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
            <p class="w-full text-center bg-[#0fa958] py-2 font-bold text-white rounded-t-lg">TAMBAH BERITA</p>
            <div class="p-8">
                <h2 class="text-2xl font-bold mb-4 text-[#00a639]">Tambah Data</h2>
                <form class="mt-10" action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="judulBerita">Judul Berita</label>
                        <input class="border-b focus:outline-none focus:shadow-outline w-full" id="judulBerita" name="judulBerita" type="text" placeholder="Judul Berita">
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="deskripsi">Deskripsi Berita</label>
                        <textarea class="border-b focus:outline-none focus:shadow-outline w-full h-40" id="deskripsi" name="deskripsi" type="text" placeholder="Deskripsi Berita"></textarea>
                    </div>
                    <div class="w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="foto">Upload Foto</label>
                        <input class="border-b focus:outline-none focus:shadow-outline w-full" id="foto" name="foto" type="file" placeholder="Upload Foto" accept="image/*">
                    </div>
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
            <p class="w-full text-center bg-[#0fa958] py-2 font-bold text-white rounded-t-lg">EDIT BERITA</p>
            <div class="p-8">
                <h2 class="text-2xl font-bold mb-4 text-[#00a639]">Edit Data</h2>
                <form class="mt-10" id="editForm" action="{{ route('berita.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editBeritaId" name="id">
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="editJudulBerita">Judul Berita</label>
                        <input class="border-b focus:outline-none focus:shadow-outline w-full" id="editJudulBerita" name="judulBerita" type="text" placeholder="Judul Berita">
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="editDeskripsi">Deskripsi Berita</label>
                        <textarea class="border-b focus:outline-none focus:shadow-outline w-full h-40" id="editDeskripsi" name="deskripsi" placeholder="Deskripsi Berita"></textarea>
                    </div>
                    <div class="w-full">
                        <label class="block text-gray-700 text-sm font-bold mb-4" for="editFoto">Upload Foto</label>
                        <input class="border-b focus:outline-none focus:shadow-outline w-full" id="editFoto" name="foto" type="file" placeholder="Upload Foto" accept="image/*">
                        <img id="currentFoto" class="mt-2" width="100" height="100">
                    </div>
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
                const judul = this.dataset.judul;
                const deskripsi = this.dataset.deskripsi;
                const foto = this.dataset.foto;

                document.getElementById('editBeritaId').value = id;
                document.getElementById('editJudulBerita').value = judul;
                document.getElementById('editDeskripsi').value = deskripsi;
                document.getElementById('currentFoto').src = foto;

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