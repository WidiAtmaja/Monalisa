<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <!-- ========== HEADER ========== -->
    @include('page.administrasi.partials.search')
    <!-- ========== END HEADER ========== -->

    <!-- ========== Side Bar ========== -->
    @include('page.administrasi.partials.sidebar')
    <!-- ========== End Side Bar ========== -->


    @if (request('search'))
    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div
                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Card Folder -->
                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div
                                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">

                                            <!-- Table seacrh -->
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">


                                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                                        <td class="px-6 py-3">
                                                            <div class="text-sm font-extrabold text-black dark:text-gray-500">
                                                                NAMA
                                                            </div>
                                                        </td>
                                                        <!-- Path Column -->
                                                        <td class="px-6 py-3">
                                                            <div class="text-sm font-extrabold text-black dark:text-hray-500">
                                                                ALAMAT
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @foreach ($searchLinks as $index => $searchLink)
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                                        <td class="px-6 py-3">
                                                            <div class="text-sm text-gray-500 dark:text-neutral-500">
                                                                <a href="{{ $searchLink }}">{{ $searchNames[$index] }}</a>
                                                            </div>
                                                        </td>
                                                        <!-- Path Column -->
                                                        <td class="px-6 py-3">
                                                            <div class="text-sm text-gray-500 dark:text-neutral-500">
                                                                {{ $searchUrls[$index] }}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
    <!-- End Content -->
    @else
    <div class="w-full lg:ps-64 flex justify-center items-center h-screen">
        <div class="text-center">
            <img src="{{ asset('storage/img/welcome-administrasi.png') }}" alt="Monalisa" class="mx-auto mb-4 sm:max-w-sm md:max-w-lg lg:max-w-lg xl:max-w-xl">
            <h1 class="text-xl sm:text-xl md:text-xl lg:text-xl xl:text-xl font-medium text-gray-700">Selamat Datang Di Halaman Administrasi</h1>
            <h1 class="text-2xl sm:text-1xl md:text-1xl lg:text-1xl xl:text-1xl font-bold text-gray-700">Monalisa</h1>
        </div>
    </div>
    @endif


    <!-- ========== END MAIN CONTENT ========== -->
</body>

</html>
