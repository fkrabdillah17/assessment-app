<x-layouts>

    <div class="md:flex">
        <ul class="flex-column space-y mb-4 space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:mb-0 md:me-4" id="default-tab"
            data-tabs-toggle="#default-tab-content" data-tabs-active-classes="bg-blue-500 dark:bg-blue-600"
            data-tabs-inactive-classes="border-2 border-blue-500 text-gray-600" role="tablist">
            <li role="presentation">

                <button class="inline-flex w-full items-center rounded-lg px-4 py-3 text-white" id="profile-tab" data-tabs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">
                    PROFIL PUSKESMAS
                </button>
            </li>
            <li role="presentation">
                <button class="inline-flex w-full items-center rounded-lg px-4 py-3 text-white" id="general-tab" data-tabs-target="#general" type="button"
                    role="tab" aria-controls="general" aria-selected="false">
                    INFORMASI UMUM
                </button>
            </li>
            <li role="presentation">
                <button class="inline-flex w-full items-center rounded-lg px-4 py-3 text-white" id="assessment-tab" data-tabs-target="#assessment"
                    type="button" role="tab" aria-controls="assessment" aria-selected="false">
                    ASSESSMENT
                </button>
            </li>
        </ul>
        {{-- Section 1 --}}
        <div class="hidden w-full rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h3 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">Profil Puskesmas</h3>
            <div class="mb-6">
                <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Puskesmas</label>
                <input type="text" id="name" name="name"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="Nama Puskesmas" required />
            </div>
            <div class="mb-6">
                <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat Puskesmas</label>
                <input type="text" id="address" name="address"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="Alamat Puskesmas" required />
            </div>
            <div class="mb-6">
                <label for="contact" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No Telepon/FAX</label>
                <input type="text" id="contact" name="contact"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="No Telepon/FAX" required />
            </div>
            <div class="mb-6">
                <label for="person1" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pimpinan/Kepala Puskesmas</label>
                <input type="text" id="person1" name="person1"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="Pimpinan/Kepala Puskesmas" required />
            </div>
            <div class="mb-6">
                <label for="person2" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Penanggungjawab Bagian Farmasi</label>
                <input type="text" id="person2" name="person2"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="Penanggungjawab Bagian Farmasi" required />
            </div>
            <div class="mb-6 grid gap-6 md:grid-cols-2">
                <div>
                    <label for="licence" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">SIPA / SIPTTK</label>
                    <input type="text" id="licence" name="licence"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="SIPA / SIPTTK" required />
                </div>
                <div>
                    <label for="licence" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Berlaku hingga</label>
                    <input datepicker type="text" id="licence" name="licence"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="01/01/2024" required />
                </div>
            </div>
        </div>
        {{-- Section 2 --}}
        <div class="hidden w-full rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="general" role="tabpanel" aria-labelledby="general-tab">
            <h3 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">Informasi Umum</h3>
            {{-- Section 2.1 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">1. Jenis Sarana Puskesmas</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="vue-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="vue-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">BLUD</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Non-BLUD</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="angular-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="angular-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Rawat Inap</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Non-Rawat
                            Inap</label>
                    </div>
                </li>
            </ul>
            {{-- Section 2.2 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">2. Status Akreditasi Puskesmas</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="vue-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="vue-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Dasar</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Madya</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="angular-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="angular-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Utama</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Paripurna</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Belum
                            Terakreditasi</label>
                    </div>
                </li>
            </ul>
            {{-- Section 2.3 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">3. Penanggung Jawab Bagian Faramsi</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="vue-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="vue-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Apoteker</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Dokter Gigi</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="angular-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="angular-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">TTK</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Perawat</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Asisten
                            Apoteker</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Bidan</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Dokter</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Lainnya</label>
                    </div>
                </li>
            </ul>
            {{-- Section 2.4 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">4. Tenaga/Personel Yang Melakukan Praktik Kefarmasian (Jawaban dapat lebih dari satu)
            </h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="vue-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="vue-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Apoteker</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Dokter Gigi</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="angular-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="angular-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">TTK</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Perawat</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Asisten
                            Apoteker</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Bidan</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Dokter</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="laravel-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="laravel-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Lainnya</label>
                    </div>
                </li>
            </ul>
            {{-- Section 2.5 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">5. Apakah Puskesmas memiliki sistem pengadaan obat secara mandiri selain dari
                Instalasi Farmasi Daerah?</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="vue-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="vue-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
                    </div>
                </li>
            </ul>
            {{-- Section 2.6 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">6. Jumlah Resep Rata-Rata per Hari</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <input type="text" id="person2" name="person2"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="0000" required />
                <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">resep/hari</label>
            </ul>
            {{-- Section 2.7 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">7. Pemanfaatan IT/Aplikasi/Sistem Elektronik</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="vue-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="vue-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Resep Elektronik</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">K. Stok
                            Elektronik</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">SP Elektronik</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Manual/Belum ada
                            pemanfaatan IT</label>
                    </div>
                </li>
            </ul>
            {{-- Section 2.8 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">8. Jenis Obat/Bahan Obat Yang Dikelola</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="vue-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="vue-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Narkotika</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Prekursor</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Vaksin</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Antibiotik</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">OOT</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">CPP Lain</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Psikotropika</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Bahan Obat</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Obat Lain</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id="react-checkbox-list" type="checkbox" value=""
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Obat Special Access
                            Scheme (SAS)</label>
                    </div>
                </li>
            </ul>
        </div>
        {{-- Section 3 --}}
        <div class="hidden w-full rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="assessment" role="tabpanel" aria-labelledby="assessment-tab">
            <h3 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">Assessment</h3>

        </div>

    </div>

</x-layouts>
