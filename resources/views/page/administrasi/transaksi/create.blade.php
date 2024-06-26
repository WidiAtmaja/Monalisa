<!-- handling error -->
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div id="hs-slide-down-animation-modal-folder"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <!-- Form Create -->
        <form action="/administrasi/transaksi" method="POST"
            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
            @csrf
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                <h3 class="font-bold text-gray-800 dark:text-white">Masukkan Nama Transaksi</h3>
                <!-- Tombol x (close) -->
                <button type="button"
                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                    data-hs-overlay="#hs-slide-down-animation-modal-folder">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col space-y-4 p-4 overflow-y-auto">
                <!-- Input hidden Id sebelumnya -->
                <input type="hidden" name="akun_id" value={{ $akun->id }}>
                <input type="hidden" name="kegiatan" value={{ $kegiatan->id }}>
                <input type="hidden" name="fungsi" value={{ $fungsi }}>
                <!-- Nama Label Transaksi -->
                <!-- Input untuk nama transaksi -->
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Transaksi</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        required>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Input untuk no kuitansi -->
                <div>
                    <label for="no_kwt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No
                        Kuitansi</label>
                    <input type="text" id="no_kwt" name="no_kwt" value="{{ old('no_kwt') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        required>
                    @error('no_kwt')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Input untuk Nilai Transaksi -->
                <div>
                    <label for="nilai_trans"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai Transaksi</label>
                    <input type="text" id="nilai_trans" name="nilai_trans" value="{{ old('nilai_trans') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        required>
                    @error('nilai_trans')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Tanggal Selesai -->
                <div>
                    <label for="tgl_akhir"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal Selesai</label>
                    <input type="date" id="tgl_akhir" name="tgl_akhir" value="{{ old('tgl_akhir') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        required>
                    @error('tgl_akhir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Input untuk bulan pengarsipan -->
                <div>
                    <label for="bln_arsip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bulan
                        Pengarsipan</label>
                    <input type="text" id="bln_arsip" name="bln_arsip" value="{{ old('bln_arsip') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        required>
                    @error('bln_arsip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-center h-full p-4 overflow-y-auto">
                <p class="text-gray-800 dark:text-gray-400 text-center">Apakah Anda sudah yakin dengan transaksi yang
                    akan dibuat?</p>
            </div>

            <!-- Tombol batan dan simpan -->
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 bg-red-600 text-white shadow-sm hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
                    data-hs-overlay="#hs-slide-down-animation-modal-folder">Batal</button>
                <button type="submit"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Selesai</button>
            </div>
        </form>
        <!-- End Form Create -->
    </div>
</div>


<!-- script untuk konversi mata uang pada bagian input nilai transaksi -->
<script>
    // Ambil elemen input
    var nilaiTransInput = document.getElementById('nilai_trans');

    // Tambahkan event listener untuk setiap kali ada input
    nilaiTransInput.addEventListener('input', function(event) {
        // Ambil nilai input
        var inputNilai = event.target.value;

        // Hapus semua karakter kecuali angka
        var cleanedInput = inputNilai.replace(/\D/g, '');

        // Format nilai dengan titik setiap tiga digit dari kanan
        var formattedNilai = cleanedInput.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Masukkan nilai yang diformat kembali ke input
        event.target.value = formattedNilai;
    });
</script>
