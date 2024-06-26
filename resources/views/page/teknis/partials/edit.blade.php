<!-- Modal Edit kegiatan -->
<div id="hs-focus-management-modal2"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[9999] overflow-x-hidden overflow-y-auto pointer-events-none mt-20">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div
            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">Edit Card</h3>
                <!-- Tombol x(close) -->
                <button type="button"
                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                    data-hs-overlay="#hs-focus-management-modal2" onclick="closeModal()">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <!-- Form Edit Kegiatan -->
                <form id="edit-form" action="/teknis/kegiatan" method="POST">
                    @method('PUT')
                    @csrf
                    <!-- Inputan hidden Id Sebelumnya -->
                    <input type="hidden" value="{{ $fungsi }}" name="fungsi">
                    <input type="hidden" value="{{ session('selected_year') }}" name="tahun">
                    <input type="hidden" id="edit-id" name="id">

                    <label for="dropdown-edit" class="block text-sm font-medium mt-4 mb-2 dark:text-white">Pilih
                        Kategori Kegiatan</label>
                    <div class="relative inline-block w-full text-gray-700">
                        <select id="dropdown-edit" name="kategori"
                            class="block w-full py-3 px-4 pr-8 leading-tight border border-gray-200 rounded-lg appearance-none focus:outline-none focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400"
                            required>
                        </select>
                    </div>

                    <!-- Edit Judul -->
                    <div class="mt-4">
                        <label for="judul"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Judul</label>
                        <input type="text" id="judul-edit" name="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            required placeholder="Masukan judul...">
                    </div>
                    <!-- Edit Tanggal mulai-->
                    <div class="mt-4">
                        <label for="tgl_awal"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                            Mulai</label>
                        <input type="date" id="tgl_awal-edit" name="tgl_awal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <!-- Edit Tanggal selesai -->
                    <div class="mt-4">
                        <label for="tgl_akhir"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                            Selesai</label>
                        <input type="date" id="tgl_akhir-edit" name="tgl_akhir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <!-- Edit Masukan Link -->
                    <div class="mt-4">
                        <label for="link"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masukan Link</label>
                        <input type="url" id="link-edit" name="link"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Masukan link...">
                    </div>
                </form>
                <!-- End Form Edit Kegiatan -->
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                <!-- Tombol Batal dan Simpan -->
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-red-600 text-white shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                    data-hs-overlay="#hs-focus-management-modal2" onclick="closeModal()">
                    Batal
                </button>
                <button type="submit" form="edit-form"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Simpan
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Script mengambil data Id untuk menampilaksan saat edit -->
<script>
    function openEditModal(button) {
        const id = button.getAttribute('data-id');

        //mengambil data untuk di edit beradasarkan Id
        const dropdown = document.getElementById('dropdown-edit');
        const editId = document.getElementById('edit-id');
        const namaJudul = document.getElementById('judul-edit');
        const tglAwal = document.getElementById('tgl_awal-edit');
        const tglAkhir = document.getElementById('tgl_akhir-edit');
        const namaLink = document.getElementById('link-edit');

        fetch(`/teknis/kegiatan-edit/${id}`) //Url untuk mengambil data
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                //data Id jika ada
                if (data !== null) {
                    populateDropdown(dropdown, data.kategori);
                    editId.value = data.id;
                    namaJudul.value = data.nama;
                    tglAwal.value = data.tgl_awal;
                    tglAkhir.value = data.tgl_akhir;
                    namaLink.value = data.link;
                }


                const modal = document.getElementById('hs-focus-management-modal2');
                modal.classList.remove('hidden');
                modal.classList.add('hs-overlay-open');
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }
    //function close modal
    function closeModal() {
        const modal = document.getElementById('hs-focus-management-modal2');
        modal.classList.add('hidden');
        modal.classList.remove('hs-overlay-open');
    }

    //function agar opsi kategori kegiatan hanya bersifat read only
    function populateDropdown(dropdown, selectedValue) {


        dropdown.innerHTML = '';

        if (selectedValue == 'petani') { //read only pada petani
            const option = document.createElement('option');
            option.value = selectedValue;
            option.text = 'Petani';
            option.setAttribute('readonly', true);
            option.selected = true;

            dropdown.appendChild(option);


        }

        if (selectedValue == 'rumah_tangga') { //read only pada rumah tangga
            const option = document.createElement('option');
            option.value = selectedValue;
            option.text = 'Rumah Tangga';
            option.setAttribute('readonly', true);
            option.selected = true;

            dropdown.appendChild(option);


        }

        if (selectedValue == 'direct_link') { //read only pada direct link
            const option = document.createElement('option');
            option.value = selectedValue;
            option.text = 'Direct Link';
            option.setAttribute('readonly', true);
            option.selected = true;

            dropdown.appendChild(option);


        }

        if (selectedValue == 'perusahaan') { //read only pada perusahaan
            const option = document.createElement('option');
            option.value = selectedValue;
            option.text = 'Perusahaan';
            option.setAttribute('readonly', true);
            option.selected = true;

            dropdown.appendChild(option);

        }


    }
</script>
