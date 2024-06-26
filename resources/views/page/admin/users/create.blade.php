<!-- resources/views/admin/users/create.blade.php -->
<!-- managaement modal tambah user -->
<div id="hs-focus-management-modaladmin"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div
            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700"
                style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);">
                <h3 class="font-bold text-gray-800 dark:text-white">
                    TAMBAH USER
                </h3>
                <!-- button close (x)  -->
                <button type="button"
                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                    data-hs-overlay="#hs-focus-management-modaladmin">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- form data user  -->
            <div class="px-4 overflow-y-auto">
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium mb-2 dark:text-white">Nama</label>
                        <input type="text" name="name" id="name"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400"
                            placeholder="Nama" autofocus="">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400"
                            placeholder="Masukan Email" autofocus="">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium mb-2 dark:text-white">Password</label>
                        <input type="password" name="password" id="password"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400"
                            placeholder="Password" autofocus="">
                    </div>
                    <!-- opsi role user -->
                    <div class="mb-4">
                        <label for="role" class="block text-sm font-medium mb-2 dark:text-white">Role</label>
                        <select name="role" id="role"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400">
                            <option value="admin">Admin</option>
                            <option value="organik">Organik</option>
                            <option value="anorganik">Anorganik</option>
                        </select>
                    </div>
                    <!-- button batal dan simpan user  -->
                    <div
                        class="flex justify-end items-center gap-x-2 py-3 border-t w-full px-4 dark:border-neutral-700">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white shadow-sm hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-focus-management-modaladmin">
                            Batal
                        </button>
                        <button type="submit"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
