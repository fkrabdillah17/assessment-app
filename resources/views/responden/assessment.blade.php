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
            <x-input-field type="text" id="P1" name="P1" placeholder="Nama Puskesmas">Nama Puskesmas</x-input-field>
            <x-input-field type="text" id="P2" name="P2" placeholder="Alamat Puskesmas">Alamat Puskesmas</x-input-field>
            <x-input-field type="text" id="P3" name="P3" placeholder="No Telepon/FAX">No Telepon/FAX</x-input-field>
            <x-input-field type="text" id="P4" name="P4" placeholder="Pimpinan/Kepala Puskesmas">Pimpinan/Kepala Puskesmas</x-input-field>
            <x-input-field type="text" id="P5" name="P5" placeholder="Penanggungjawab Bagian Farmasi">Penanggungjawab Bagian
                Farmasi</x-input-field>
            <div class="mb-6 grid gap-6 md:grid-cols-2">
                <x-input-field type="text" id="P6" name="P6" placeholder="SIPA / SIPTTK">SIPA / SIPTTK</x-input-field>
                <x-input-field datepicker type="text" id="P7" name="P7" placeholder="Berlaku hingga">Berlaku hingga</x-input-field>
            </div>
        </div>
        {{-- Section 2 --}}
        <div class="hidden w-full rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="general" role="tabpanel" aria-labelledby="general-tab">
            <h3 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">Informasi Umum</h3>
            {{-- Section 2.1 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">1. Jenis Sarana Puskesmas</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G1A" name="G1A" value="G1A">BLUD</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G1B" name="G1B" value="G1B">Non-BLUD</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G1C" name="G1C" value="G1C">Rawat Inap</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G1D" name="G1D" value="G1D">Non-Rawat Inap</x-input-checkbox>
            </ul>
            {{-- Section 2.2 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">2. Status Akreditasi Puskesmas</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G2A" name="G2A" value="G2A">Dasar</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G2B" name="G2B" value="G2B">Madya</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G2C" name="G2C" value="G2C">Utama</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G2D" name="G2D" value="G2D">Paripurna</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G2E" name="G2E" value="G2E">Belum Terakreditasi</x-input-checkbox>
            </ul>
            {{-- Section 2.3 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">3. Penanggung Jawab Bagian Faramsi</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G3A" name="G3A" value="G3A">Apoteker</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3B" name="G3B" value="G3B">Dokter Gigi</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3C" name="G3C" value="G3C">TTK</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3D" name="G3D" value="G3D">Perawat</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3E" name="G3E" value="G3E">Asisten Apoteker</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3F" name="GFE" value="F3E">Bidan</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3G" name="G3G" value="G3G">Dokter</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3H" name="G3H" value="G3H">Lainnya</x-input-checkbox>
            </ul>
            {{-- Section 2.4 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">4. Tenaga/Personel Yang Melakukan Praktik Kefarmasian (Jawaban dapat lebih dari satu)
            </h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G4A" name="G4A" value="G4A">Apoteker</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4B" name="G4B" value="G4B">Dokter Gigi</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4C" name="G4C" value="G4C">TTK</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4D" name="G4D" value="G4D">Perawat</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4E" name="G4E" value="G4E">Asisten Apoteker</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4F" name="G4F" value="G4F">Bidan</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4G" name="G4G" value="G4G">Dokter</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4H" name="G4H" value="G4H">Lainnya</x-input-checkbox>
            </ul>
            {{-- Section 2.5 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">5. Apakah Puskesmas memiliki sistem pengadaan obat secara mandiri selain dari
                Instalasi Farmasi Daerah?</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G5A" name="G5A" value="G5A">Ya</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G5B" name="G5B" value="G5B">Tidak</x-input-checkbox>
            </ul>
            {{-- Section 2.6 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">6. Jumlah Resep Rata-Rata per Hari</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <input type="text" id="G6A" name="G6A"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="0000" required />
                <label for="react-checkbox-list" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">resep/hari</label>
            </ul>
            {{-- Section 2.7 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">7. Pemanfaatan IT/Aplikasi/Sistem Elektronik</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G7A" name="G7A" value="G7A">Resep Elektronik</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7B" name="G7B" value="G7B">K. Stok Elektronik</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7C" name="G7C" value="G7C">SP Elektronik</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7D" name="G7D" value="G7D">Manual/Belum ada pemanfaatan IT</x-input-checkbox>
            </ul>
            {{-- Section 2.8 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">8. Jenis Obat/Bahan Obat Yang Dikelola</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G7A" name="G7A" value="G7A">Narkotika</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7B" name="G7B" value="G7B">Prekursor</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7C" name="G7C" value="G7C">Vaksin</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7D" name="G7D" value="G7D">Antibiotik</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7E" name="G7E" value="G7E">OOT</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7F" name="G7F" value="G7F">CPP Lain</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7G" name="G7G" value="G7G">Psikotropika</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7H" name="G7H" value="G7H">Bahan Obat</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7I" name="G7I" value="G7I">Obat Lain</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7J" name="G7J" value="G7J">Obat Special Access Scheme (SAS)</x-input-checkbox>
            </ul>
        </div>
        {{-- Section 3 --}}
        <div class="hidden w-full rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="assessment" role="tabpanel" aria-labelledby="assessment-tab">
            <h3 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">Assessment</h3>

            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">1. Apakah pengadaan obat dilakukan melalui sumber resmi yaitu Instalasi Farmasi Daerah
                dan/atau PBF dan/atau Apotek (dalam hal terjadi kekosongan stok atau kelangkaan obat) dan/atau Puskesmas lain dalam satu Kabupaten/Kota (dalam
                hal terjadi kekosongan stok di Instalasi Farmasi Daerah) (pilih salah satu)</h3>
            <ul
                class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="list-radio-license" type="radio" value="" name="list-radio"
                            class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="list-radio-license" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Ya(100) </label>
                    </div>
                </li>
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="list-radio-id" type="radio" value="" name="list-radio"
                            class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="list-radio-id" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sebagian Besar(50)</label>
                    </div>
                </li>
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="list-radio-military" type="radio" value="" name="list-radio"
                            class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="list-radio-military" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sebagian
                            Kecil(25)</label>
                    </div>
                </li>
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="list-radio-passport" type="radio" value="" name="list-radio"
                            class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="list-radio-passport" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak(0)</label>
                    </div>
                </li>
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="list-radio-passport2" type="radio" value="" name="list-radio"
                            class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="list-radio-passport2" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sebagian atau
                            seluruhnya berasal dari Freelance/sarana illegal (Skor 0)</label>
                    </div>
                </li>
            </ul>
            <div id="alternate">
                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Jika memilih “Sebagian Besar” atau “Sebagian Kecil” atau “Tidak” sebutkan sumber
                    pengadaan obat: (Jawaban dapat lebih dari satu)</h3>
                <ul
                    class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                    <x-input-checkbox type="checkbox" id="Q1A" name="Q1A" value="Q1A">Apotek</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="Q1B" name="Q1B" value="Q1B">Rumah Sakit</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="Q1C" name="Q1C" value="Q1C">Toko Obat</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="Q1D" name="Q1D" value="Q1D">Klinik</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="Q1E" name="Q1E" value="Q1E">Puskesmas</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="Q1F" name="Q1F" value="Q1F">Industri Farmasi</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="Q1G" name="Q1G" value="Q1G">Praktek Mandiri</x-input-checkbox>
                </ul>
            </div>

            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah file</label>
            <input
                class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                id="file_input" type="file">
        </div>

    </div>

</x-layouts>
