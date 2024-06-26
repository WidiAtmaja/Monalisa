<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknis</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="./node_modules/apexcharts/dist/apexcharts.css">
    <link rel="shortcut icon" href="http://192.168.2.115:8080/storage/img/icontab.png" type="image/x-icon">
</head>

<body class="bg-slate-50">
    <!-- mengambil halaman blade pada header -->
    @include('layouts.partials.header')
    <!-- mengambil halaman blade pada tab -->
    @include('page.teknis.partials.tab-header3')

    <div
        class="max-w-[90rem] px-2 pt-4 py-4 sm:px-6 lg:px-8 lg:py-4 mx-auto sm:max-w-[36rem] md:max-w-[48rem] lg:max-w-[72rem] xl:max-w-[90rem] ">
        <!-- ========== Pemutakhiran ========== -->
        <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">

            <div class="grid lg:grid-cols-1 gap-1 bg-gray-100 shadow-lg p-4 rounded-lg overflow-x-auto mb-10">

                <div class="pt-2 flex flex-col">
                    <!-- SearchBox -->
                    <form action="/teknis/kegiatan/petani/pemutakhiran" class="flex w-full sm:w-64 mb-4 sm:mb-0">
                        <div class="relative flex-grow">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-white/60"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                            </div>
                            <!-- input hidden Id -->
                            <input type="hidden" name="kegiatan" value="{{ $kegiatan->id }}">
                            <input
                                class="py-2 ps-10 pe-4 block w-full shadow-sm border-gray-200 rounded-l-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none bg-gray-50 dark:text-neutral-400 dark:placeholder-neutral-500"
                                type="text" placeholder="Search" value="{{ $search }}" name="search"
                                data-hs-combo-box-input="">
                        </div>
                        <!-- tombol search -->
                        <button type="submit" class="py-1 px-2 bg-blue-500 text-white rounded-r-lg">Search</button>
                    </form>
                    <div class="flex items-center justify-between">
                        <h1 class="font-semibold text-black sm:text-xl md:text-2xl lg:text-xl mt-4">
                            {{ $kegiatan->nama }} </h1>
                        <div class="text-center">
                            <!-- Tombol download format excel -->
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-xl border border-green-500 bg-white text-green-500 hover:bg-green-50 disabled:opacity-50 disabled:pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" style="fill: rgb(22, 212, 152);transform: ;msFilter:;">
                                    <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                    <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                                </svg>
                                Excel
                            </button>
                            <!-- End Tombol download format excel -->

                            <!-- Dropdown downdload format -->
                            <div id="dropdown"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-64 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="/download-excel-template?template=Template_Petani_pemutakhiran"
                                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(12, 226, 105, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M18 22a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12zM13 4l5 5h-5V4zM7 8h3v2H7V8zm0 4h10v2H7v-2zm0 4h10v2H7v-2z">
                                                </path>
                                            </svg>
                                            <span class="ml-4">Format Pemutakhiran</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/download-excel-template?template=Template_Petani_pencacahan"
                                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(12, 226, 105, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M18 22a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12zM13 4l5 5h-5V4zM7 8h3v2H7V8zm0 4h10v2H7v-2zm0 4h10v2H7v-2z">
                                                </path>
                                            </svg>
                                            <span class="ml-4">Format Pencacahan</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tombol tambah data -->
                            <button type="button" data-id="{{ $kegiatan->id }}" onclick="openCreatePetani(this)"
                                class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-overlay="#hs-sign-out-alert1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                    <path
                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                    </path>
                                </svg>
                                Data
                            </button>
                            <!-- End Tombol Data -->
                            <!-- Tombol tambah data excel -->
                            <button type="button" data-id="{{ $kegiatan->id }}" onclick="openCreatePetaniExcel(this)"
                                class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-xl border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-overlay="#hs-sign-out-alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                    <path
                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                    </path>
                                </svg>
                                Data Excel
                            </button>
                            <!-- End Tombol tambah data excel -->
                        </div>
                    </div>
                    <!-- Menampilkan tanggal kegiatan -->
                    <div class="pb-2">
                        <p class="text-black text-xs font-medium mb-2">
                            {{ \Carbon\Carbon::parse($tgl_awal)->format('d/m/Y') }}
                            - {{ \Carbon\Carbon::parse($tgl_akhir)->format('d/m/Y') }}
                        </p>
                    </div>

                    <div class="flex flex-col pt-1">
                        <div class="-m-1.5 overflow-x-auto">
                            <div
                                class="p-1.5 min-w-full inline-block align-middle rounded-lg overflow-hidden bg-white ">
                                <div class="overflow-hidden">
                                    <!-- Table -->
                                    <table class="min-w-full divide-y divide-gray-200 rounded-lg dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-gray-800">
                                            <!-- Kolom table -->
                                            <tr class="border-b-2 border-gray-300">
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    No</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    ID</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    NBS & SLS</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    Penyelesaian Ruta</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    ID PML</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    PML</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    ID PPL</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    PPL</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    Kecamatan</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    Desa/Kelurahan</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    NKS</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    Beban Kerja</th>

                                                @foreach ($semua_tanggal as $tanggal)
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                        {{ $tanggal }}</th>
                                                @endforeach

                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    KK Awal</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase">
                                                    KK Akhir</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-bold text-gray-500 uppercase">
                                                    Action
                                                </th>
                                            </tr>
                                            <!-- End kolom Table -->
                                        </thead>
                                        <tbody>
                                            @foreach ($pemutakhirans as $pemutakhiran)
                                                <!-- Perulangan data pada table -->
                                                <tr
                                                    class=" hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                        {{ $loop->iteration }}</td>

                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->id }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->nbs }} & {{ $pemutakhiran->nama_sls }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 font-semibold dark:text-gray-200">
                                                        {{ $pemutakhiran->penyelesaian_ruta }}%</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->id_pml }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->pml }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->id_ppl }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->ppl }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->kecamatan }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->desa }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->nks }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->beban_kerja }}</td>

                                                    @foreach ($pemutakhiran->rutaPetani as $ruta)
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                            {{ $ruta->progres }}</td>
                                                    @endforeach
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->keluarga_awal }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pemutakhiran->keluarga_akhir }}</td>
                                                    <td class="px-6 py-3 flex justify-center items-center space-x-2">
                                                        <!-- Tombole edit data -->
                                                        <a href="#" class="text-blue-600 hover:underline">
                                                            <button type="button"
                                                                data-hs-overlay="#hs-sign-out-alert4"
                                                                data-id="{{ $pemutakhiran->id }}"
                                                                onclick="openEditModal(this)"
                                                                class="bg-blue-600 hover:bg-blue-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24"
                                                                    style="fill: rgba(255, 255, 255, 1);">
                                                                    <path
                                                                        d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                                                    </path>
                                                                    <path
                                                                        d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </a>

                                                        <!-- Mengambil halaman blade modal edit-->
                                                        @include('page.teknis.petani.pemutakhiran.edit')

                                                        <!-- Tombol delete data -->
                                                        <form id="delete-pemutakhiran-petani{{ $pemutakhiran->id }}"
                                                            action="/teknis/kegiatan/petani/pemutakhiran/{{ $pemutakhiran->id }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="hidden" name="id"
                                                                value="{{ $pemutakhiran->id }}">
                                                            <button type="button"
                                                                onclick="confirmDelete({{ $pemutakhiran->id }})"
                                                                class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24"
                                                                    style="fill: rgba(255, 252, 252, 1);">
                                                                    <path
                                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                                    </path>
                                                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                                </svg>
                                                            </button>
                                                        </form>

                                                    </td>
                                                </tr>
                                                <!-- End Perulangan data pada table -->
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- End Table -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mengambil halaman blade pada create excel -->
                @include('page.teknis.petani.pemutakhiran.create-excel')

                <!-- Mengambil halaman blade pada create data -->
                @include('page.teknis.petani.pemutakhiran.create')

            </div>
        </div>
    </div>
</body>

</html>

<!-- handling error -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!-- Script Jquery Ajax untuk pengiriman dan permintaan data secara asinkronus -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Script swwet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmDelete(id) { //alert Id untuk konfirmasi hapus
        Swal.fire({
            title: 'Apakah Anda yakin menghapus?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus saja!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-pemutakhiran-petani' + id).submit();
            }
        });
    }

    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        });
    @endif
</script>
