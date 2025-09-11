<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ujikom - Junior Web Programmer</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

</head>

<body class="bg-gray-100 dark:bg-gray-600">

    <div class="relative min-h-screen">
        <div
            class="rounded-md mt-3 shadow-md shadow-gray-500 p-5 absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2  bg-white dark:bg-gray-800">
            @if (session('success'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-600 dark:text-green-400"
                    role="alert">
                    <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif
            <h1 class="font-bold text-gray-800 dark:text-gray-200 text-center mt-3 mb-10 text-xl">Website Hitung Luas
                <br> Bangun Datar
            </h1>
            <form action="{{ route('ujikom.store') }}" method="POST" class="min-w-lg grid grid-cols-2 gap-5">
                @csrf
                <div>
                    <div class="mb-6">
                        <label for="nama_siswa"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Siswa</label>
                        <input type="text" id="nama_siswa" name="nama_siswa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="nama_sekolah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sekolah</label>
                        <input type="text" id="nama_sekolah" name="nama_sekolah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="usia"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia</label>
                        <input type="number" id="usia" name="usia"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                <div>
                    <div class="mb-6">
                        <label for="alamat_rumah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Rumah</label>
                        <input type="text" id="alamat_rumah" name="alamat_rumah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="nomor_telepon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                        <input type="text" id="nomor_telepon" name="nomor_telepon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                <!-- Bangun Datar -->
                <div>
                    <div class="mb-3">
                        <label for="bangun_datar"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bangun Datar</label>
                        <select id="bangun_datar" name="bangun_datar" onchange="tampilkanBangunDatar()"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="-" selected>--- Pilih bangun datar ---</option>
                            <option value="persegi">Persegi</option>
                            <option value="segitiga">Segitiga</option>
                            <option value="lingkaran">Lingkaran</option>
                        </select>

                        <!-- persegi -->
                        <div id="input_persegi" class="hidden my-3">
                            <label for="sisi"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sisi</label>
                            <input type="number" id="sisi" name="sisi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan nilai sisi...">
                        </div>

                        <!-- segitiga -->
                        <div id="input_segitiga" class="hidden my-3">
                            <label for="alas"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alas</label>
                            <input type="number" id="alas" name="alas"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan nilai alas...">

                            <label for="tinggi"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-3">Tinggi</label>
                            <input type="number" id="tinggi" name="tinggi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan nilai tinggi...">
                        </div>

                        <!-- lingkaran -->
                        <div id="input_lingkaran" class="hidden my-3">
                            <label for="jari_jari"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jari-Jari</label>
                            <input type="number" id="jari_jari" name="jari_jari"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan nilai jari-jari...">
                        </div>
                    </div>
                </div>

                <!-- Bangun Ruang -->
                <div>
                    <div class="mb-3">
                        <label for="bangun_ruang"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bangun Ruang</label>
                        <select id="bangun_ruang" name="bangun_ruang" onchange="tampilkanBangunRuang()"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="-" selected>--- Pilih bangun ruang ---</option>
                            <option value="kubus">Kubus</option>
                            <option value="limas">Limas Segitiga</option>
                            <option value="tabung">Tabung</option>
                        </select>

                        <!-- kubus -->
                        <div id="input_kubus" class="hidden my-3">
                            <label for="sisi_kubus"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sisi Kubus</label>
                            <input type="number" id="sisi_kubus" name="sisi_kubus"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan nilai sisi...">
                        </div>

                        <!-- limas segitiga -->
                        <div id="input_limas" class="hidden my-3">
                            <label for="alas_limas"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alas
                                Segitiga</label>
                            <input type="number" id="alas_limas" name="alas_limas"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan nilai alas...">

                            <label for="tinggi_segitiga"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-3">Tinggi
                                Segitiga</label>
                            <input type="number" id="tinggi_segitiga" name="tinggi_segitiga"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan tinggi segitiga...">

                            <label for="tinggi_limas"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-3">Tinggi
                                Limas</label>
                            <input type="number" id="tinggi_limas" name="tinggi_limas"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan tinggi limas...">
                        </div>

                        <!-- tabung -->
                        <div id="input_tabung" class="hidden my-3">
                            <label for="jari_tabung"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jari-jari
                                Tabung</label>
                            <input type="number" id="jari_tabung" name="jari_tabung"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan jari-jari tabung...">

                            <label for="tinggi_tabung"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-3">Tinggi
                                Tabung</label>
                            <input type="number" id="tinggi_tabung" name="tinggi_tabung"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan tinggi tabung...">
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Simpan
                    </button>
                </div>
            </form>
        </div>

    </div>
    {{-- tabel --}}

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-[20%] mb-5 mt-10">
        <table class="text-center w-full text-sm text-lef rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            <a
                                href="{{ route('ujikom.index', ['sort' => 'nama_siswa', 'order' => $sort === 'nama_siswa' && $order === 'asc' ? 'desc' : 'asc']) }}">
                                Nama Siswa
                            </a>
                            @if ($sort === 'nama_siswa')
                                @if ($order === 'asc')
                                    🔼
                                @else
                                    🔽
                                @endif
                            @endif
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">Nama Sekolah</th>
                    <th scope="col" class="px-6 py-3">Usia</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                    <th scope="col" class="px-6 py-3">Nomor Telepon</th>
                    <th scope="col" class="px-6 py-3">Bangun Datar</th>
                    <th scope="col" class="px-6 py-3">Luas</th>
                    <th scope="col" class="px-6 py-3">Bangun Ruang</th>
                    <th scope="col" class="px-6 py-3">Volume</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->nama_siswa }}
                        </td>
                        <td class="px-6 py-4">{{ $item->nama_sekolah }}</td>
                        <td class="px-6 py-4">{{ $item->usia }}</td>
                        <td class="px-6 py-4">{{ $item->alamat_rumah }}</td>
                        <td class="px-6 py-4">{{ $item->nomor_telepon }}</td>
                        <td class="px-6 py-4">{{ $item->bangun_datar }}</td>
                        <td class="px-6 py-4">{{ $item->luas ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $item->bangun_ruang }}</td>
                        <td class="px-6 py-4">{{ $item->volume ?? '-' }}</td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center px-6 py-4 text-gray-500">
                            Belum ada data.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="my-4 p-4 bg-gray-100 rounded-lg shadow text-center mx-[20%]">
        <p class="text-sm text-gray-700">
            Jumlah perhitungan luas: <span class="font-bold">{{ $totalLuas }}</span>
        </p>
        <p class="text-sm text-gray-700">
            Jumlah perhitungan volume: <span class="font-bold">{{ $totalVolume }}</span>
        </p>
    </div>
    <div class="my-5 mx-[20%] text-center p-4 bg-gray-100 rounded-lg shadow">
        <p class="text-sm text-gray-700">
            Jumlah perhitungan luas: <span class="font-bold">{{ $totalLuas }}</span>
            ({{ $persenLuas }}%)
        </p>
        <p class="text-sm text-gray-700">
            Jumlah perhitungan volume: <span class="font-bold">{{ $totalVolume }}</span>
            ({{ $persenVolume }}%)
        </p>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        function tampilkanBangunDatar() {
            let pilih = document.getElementById("bangun_datar").value;

            // Sembunyikan semua dulu
            document.getElementById("input_persegi").classList.add("hidden");
            document.getElementById("input_segitiga").classList.add("hidden");
            document.getElementById("input_lingkaran").classList.add("hidden");

            // Tampilkan sesuai pilihan
            if (pilih === "persegi") {
                document.getElementById("input_persegi").classList.remove("hidden");
            } else if (pilih === "segitiga") {
                document.getElementById("input_segitiga").classList.remove("hidden");
            } else if (pilih === "lingkaran") {
                document.getElementById("input_lingkaran").classList.remove("hidden");
            }
        }

        function tampilkanBangunRuang() {
            let pilih = document.getElementById("bangun_ruang").value;

            // Sembunyikan semua dulu
            document.getElementById("input_kubus").classList.add("hidden");
            document.getElementById("input_limas").classList.add("hidden");
            document.getElementById("input_tabung").classList.add("hidden");

            // Tampilkan sesuai pilihan
            if (pilih === "kubus") {
                document.getElementById("input_kubus").classList.remove("hidden");
            } else if (pilih === "limas_segitiga") {
                document.getElementById("input_limas").classList.remove("hidden");
            } else if (pilih === "tabung") {
                document.getElementById("input_tabung").classList.remove("hidden");
            }
        }
    </script>

</body>

</html>
