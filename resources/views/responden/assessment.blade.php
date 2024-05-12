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
                <x-input-checkbox type="checkbox" id="G1A" name="G1A" value="G1A" label="G1A">BLUD</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G1B" name="G1B" value="G1B" label="G1B">Non-BLUD</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G1C" name="G1C" value="G1C" label="G1C">Rawat Inap</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G1D" name="G1D" value="G1D" label="G1D">Non-Rawat Inap</x-input-checkbox>
            </ul>
            {{-- Section 2.2 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">2. Status Akreditasi Puskesmas</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G2A" name="G2A" value="G2A" label="G2A">Dasar</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G2B" name="G2B" value="G2B" label="G2B">Madya</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G2C" name="G2C" value="G2C" label="G2C">Utama</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G2D" name="G2D" value="G2D" label="G2D">Paripurna</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G2E" name="G2E" value="G2E" label="G2E">Belum Terakreditasi</x-input-checkbox>
            </ul>
            {{-- Section 2.3 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">3. Penanggung Jawab Bagian Faramsi</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G3A" name="G3A" value="G3A" label="G3A">Apoteker</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3B" name="G3B" value="G3B" label="G3B">Dokter Gigi</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3C" name="G3C" value="G3C" label="G3C">TTK</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3D" name="G3D" value="G3D" label="G3D">Perawat</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3E" name="G3E" value="G3E" label="G3E">Asisten Apoteker</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3F" name="G3F" value="G3F" label="G3F">Bidan</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3G" name="G3G" value="G3G" label="G3G">Dokter</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G3H" name="G3H" value="G3H" label="G3H">Lainnya</x-input-checkbox>
            </ul>
            {{-- Section 2.4 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">4. Tenaga/Personel Yang Melakukan Praktik Kefarmasian (Jawaban dapat lebih dari satu)
            </h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G4A" name="G4A" value="G4A" label="G4A">Apoteker</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4B" name="G4B" value="G4B" label="G4B">Dokter Gigi</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4C" name="G4C" value="G4C" label="G4C">TTK</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4D" name="G4D" value="G4D" label="G4D">Perawat</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4E" name="G4E" value="G4E" label="G4E">Asisten Apoteker</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4F" name="G4F" value="G4F" label="G4F">Bidan</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4G" name="G4G" value="G4G" label="G4G">Dokter</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G4H" name="G4H" value="G4H" label="G4H">Lainnya</x-input-checkbox>
            </ul>
            {{-- Section 2.5 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">5. Apakah Puskesmas memiliki sistem pengadaan obat secara mandiri selain dari
                Instalasi Farmasi Daerah?</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G5A" name="G5A" value="G5A" label="G5A">Ya</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G5B" name="G5B" value="G5B" label="G5B">Tidak</x-input-checkbox>
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
                <x-input-checkbox type="checkbox" id="G7A" name="G7A" value="G7A" label="G7A">Resep Elektronik</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7B" name="G7B" value="G7B" label="G7B">K. Stok Elektronik</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7C" name="G7C" value="G7C" label="G7C">SP Elektronik</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G7D" name="G7D" value="G7D" label="G7D">Manual/Belum ada pemanfaatan
                    IT</x-input-checkbox>
            </ul>
            {{-- Section 2.8 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">8. Jenis Obat/Bahan Obat Yang Dikelola</h3>
            <ul
                class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                <x-input-checkbox type="checkbox" id="G8A" name="G8A" value="G8A" label="G8A">Narkotika</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G8B" name="G8B" value="G8B" label="G8B">Prekursor</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G8C" name="G8C" value="G8C" label="G8C">Vaksin</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G8D" name="G8D" value="G8D" label="G8D">Antibiotik</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G8E" name="G8E" value="G8E" label="G8E">OOT</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G8F" name="G8F" value="G8F" label="G8F">CPP Lain</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G8G" name="G8G" value="G8G" label="G8G">Psikotropika</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G8H" name="G8H" value="G8H" label="G8H">Bahan Obat</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G8I" name="G8I" value="G8I" label="G8I">Obat Lain</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="G8J" name="G8J" value="G8J" label="G8J">Obat Special Access Scheme
                    (SAS)</x-input-checkbox>
            </ul>
        </div>
        {{-- Section 3 --}}
        <div class="hidden w-full rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="assessment" role="tabpanel" aria-labelledby="assessment-tab">
            <h3 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">Assessment</h3>
            {{-- Section 3.1 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">1. Apakah pengadaan obat dilakukan melalui sumber resmi yaitu Instalasi Farmasi Daerah
                dan/atau PBF dan/atau Apotek (dalam hal terjadi kekosongan stok atau kelangkaan obat) dan/atau Puskesmas lain dalam satu Kabupaten/Kota (dalam
                hal terjadi kekosongan stok di Instalasi Farmasi Daerah) (pilih salah satu) N:<span id="Q1_score"></span></h3>
            <ul
                class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                <x-input-radio id="Q1A" name="Q1" value="100" label="Q1A" onclick="toggleAlternate('Q1')">Ya(100)</x-input-radio>
                <x-input-radio id="Q1B" name="Q1" value="50" label="Q1B" onclick="toggleAlternate('Q1')">Sebagian
                    Besar(50)</x-input-radio>
                <x-input-radio id="Q1C" name="Q1" value="25" label="Q1C" onclick="toggleAlternate('Q1')">Sebagian
                    Kecil(25)</x-input-radio>
                <x-input-radio id="Q1D" name="Q1" value="0" label="Q1D" onclick="toggleAlternate('Q1')">Tidak(0)</x-input-radio>
                <x-input-radio id="Q1E" name="Q1" value="0" label="Q1E" onclick="toggleAlternate('Q1')">Sebagian atau seluruhnya berasal
                    dari Freelance/sarana illegal
                    (Skor 0)</x-input-radio>
            </ul>
            <div id="Q1_alternate" class="hidden">
                <h3 class="mb-4 font-semibold text-gray-700 dark:text-white">Jika memilih “Sebagian Besar” atau “Sebagian Kecil” atau “Tidak” sebutkan <span
                        class="font-bold">sumber pengadaan obat</span>: (Jawaban dapat lebih dari satu)</h3>
                <ul
                    class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                    <x-input-checkbox type="checkbox" id="AQ1A" name="AQ1A" value="AQ1A" label="AQ1A">Apotek</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ1B" name="AQ1B" value="AQ1B" label="AQ1B">Rumah Sakit</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ1C" name="AQ1C" value="AQ1C" label="AQ1C">Toko Obat</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ1D" name="AQ1D" value="AQ1D" label="AQ1D">Klinik</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ1E" name="AQ1E" value="AQ1E" label="AQ1E">Puskesmas</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ1F" name="AQ1F" value="AQ1F" label="AQ1F">Industri Farmasi</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ1G" name="AQ1G" value="AQ1G" label="AQ1G">Praktek Mandiri</x-input-checkbox>
                </ul>
            </div>

            <div class="p-2">
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah file</label>
                <input
                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                    id="Q1_file_input" type="file" name="Q1_file">
            </div>
            {{-- Section 3.2 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">2. Apakah pengadaan Narkotika dan/atau Psikotropika dilakukan melalui sumber resmi
                yaitu Instalasi Farmasi Daerah dan/atau Puskesmas lain dalam satu Kabupaten/Kota (dalam hal terjadi kekosongan stok di Instalasi Farmasi Daerah)
                dan/atau Apotek (dalam hal untuk memenuhi kebutuhan resep) (pilih salah satu) N:<span id="Q2_score"></span></h3>
            <ul
                class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                <x-input-radio id="Q2A" name="Q2" value="100" label="Q2A" onclick="toggleAlternate('Q2')">Ya(100)</x-input-radio>
                <x-input-radio id="Q2B" name="Q2" value="50" label="Q2B" onclick="toggleAlternate('Q2')">Sebagian
                    Besar(50)</x-input-radio>
                <x-input-radio id="Q2C" name="Q2" value="25" label="Q2C" onclick="toggleAlternate('Q2')">Sebagian
                    Kecil(25)</x-input-radio>
                <x-input-radio id="Q2D" name="Q2" value="0" label="Q2D" onclick="toggleAlternate('Q2')">Tidak(0)</x-input-radio>
                <x-input-radio id="Q2E" name="Q2" value="0" label="Q2E" onclick="toggleAlternate('Q2')">Sebagian atau seluruhnya berasal
                    dari Freelance/sarana illegal
                    (Skor 0)</x-input-radio>
            </ul>
            <div id="Q2_alternate" class="hidden">
                <h3 class="mb-4 font-semibold text-gray-700 dark:text-white">Jika memilih “Sebagian Besar” atau “Sebagian Kecil” atau “Tidak” sebutkan sumber
                    <span class="font-bold">pengadaan Narkotika dan/atau Psikotropika</span>: (Jawaban dapat lebih dari satu)
                </h3>
                <ul
                    class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:flex">
                    <x-input-checkbox type="checkbox" id="AQ2A" name="AQ2A" value="AQ2A" label="AQ2A">Apotek</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ2B" name="AQ2B" value="AQ2B" label="AQ2B">Rumah Sakit</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ2C" name="AQ2C" value="AQ2C" label="AQ2C">Toko Obat</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ2D" name="AQ2D" value="AQ2D" label="AQ2D">Klinik</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ2E" name="AQ2E" value="AQ2E" label="AQ2E">Puskesmas</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ2F" name="AQ2F" value="AQ2F" label="AQ2F">Industri Farmasi</x-input-checkbox>
                    <x-input-checkbox type="checkbox" id="AQ2G" name="AQ2G" value="AQ2G" label="AQ2G">Praktek Mandiri</x-input-checkbox>
                </ul>
            </div>

            <div class="p-2">
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah file</label>
                <input
                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                    id="Q2_file_input" type="file" name="Q2_file">
            </div>
            {{-- Section 3.3 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">3. Apakah pengadaan seluruh obat dilakukan oleh Penanggung Jawab Farmasi ? (pilih
                salah satu) N:<span id="Q3_score"></span></h3>
            <ul
                class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                <x-input-radio id="Q3A" name="Q3" value="100" label="Q3A" onclick="toggleScore('Q3')">Ya(100)</x-input-radio>
                <x-input-radio id="Q3B" name="Q3" value="0" label="Q3B" onclick="toggleScore('Q3')">Tidak(0)</x-input-radio>
            </ul>
            <div class="p-2">
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah file</label>
                <input
                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                    id="Q3_file_input" type="file" name="Q3_file">
            </div>
            {{-- Section 3.4 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">4. Apakah pengarsipan dokumen pengadaan sudah sesuai dengan ketentuan? (Jawaban dapat
                lebih dari satu) N:<span id="Q4_score"></span></h3>
            <ul
                class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                <x-input-checkbox type="checkbox" id="Q4A" name="Q4A" value="Q4A" label="Q4A" onclick="toggleScore('Q4')">Diarsipkan
                    sekurang-kurangnya
                    5 (lima) tahun</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q4B" name="Q4B" value="Q4B" label="Q4B" onclick="toggleScore('Q4')">Surat
                    Pesanan diarsipkan
                    bersatu dengan faktur pembelian
                    Note : jika pada bagian pertanyaan Bab I Informasi Umum angka 5 jawabannya “Tidak” maka jawaban ini tidak muncul dan tidak masuk dalam
                    perhitungan skor.
                </x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q4C" name="Q4C" value="Q4C" label="Q4C" onclick="toggleScore('Q4')">Diarsipkan
                    berdasarkan
                    tanggal/nomor urut</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q40" name="Q40" value="Q40" label="Q40" onclick="toggleScore('Q4')">Tidak
                    memenuhi satupun
                    ketentuan di atas atau tidak dapat menunjukkan seluruh dokumen pengadaan (Skor 0)</x-input-checkbox>
            </ul>
            <div class="p-2">
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah file</label>
                <input
                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                    id="Q4_file_input" type="file" name="Q4_file">
            </div>
            {{-- Section 3.5 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">5. Apakah penerimaan obat di Puskesmas dilakukan oleh Apoteker/tenaga
                kefarmasian/tenaga medis/tenaga kesehatan lain yang ditunjuk oleh Kepala Puskesmas? N:<span id="Q5_score"></span></h3>
            <ul
                class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                <x-input-radio id="Q5A" name="Q5" value="100" label="Q5A" onclick="toggleScore('Q5')">Ya(100)</x-input-radio>
                <x-input-radio id="Q5B" name="Q5" value="0" label="Q5B" onclick="toggleScore('Q5')">Tidak(0)</x-input-radio>
            </ul>
            <div class="p-2">
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah file</label>
                <input
                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                    id="Q5_file_input" type="file" name="Q5_file">
            </div>
            {{-- Section 3.6 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">6. Hal apa saja yang menjadi parameter dalam pengecekan terhadap sediaan farmasi yang
                diterima dari pengadaan: (Jawaban dapat lebih dari satu) N:<span id="Q6_score"></span></h3>
            <ul
                class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                <x-input-checkbox type="checkbox" id="Q6A" name="Q6A" value="Q6A" label="Q6A" onclick="toggleScore('Q6')">Kondisi kemasan
                    dan segel/label</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q6B" name="Q6B" value="Q6B" label="Q6B" onclick="toggleScore('Q6')">Nomor Izin Edar
                    (NIE) / Kode SAS
                </x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q6C" name="Q6C" value="Q6C" label="Q6C" onclick="toggleScore('Q6')">Nama
                    Produsen</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q6D" name="Q6D" value="Q6D" label="Q6D" onclick="toggleScore('Q6')">Nama
                    Pemasok</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q6E" name="Q6E" value="Q6E" label="Q6E" onclick="toggleScore('Q6')">Nama
                    Obat</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q6F" name="Q6F" value="Q6F" label="Q6F" onclick="toggleScore('Q6')">Jumlah
                    Obat</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q6G" name="Q6G" value="Q6G" label="Q6G" onclick="toggleScore('Q6')">Bentuk dan
                    Kekuatan Obat</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q6H" name="Q6H" value="Q6H" label="Q6H" onclick="toggleScore('Q6')">Nomor
                    bets</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q6I" name="Q6I" value="Q6I" label="Q6I" onclick="toggleScore('Q6')">Tanggal
                    kedaluwarsa</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q60" name="Q60" value="Q60" label="Q60" onclick="toggleScore('Q6')">Tidak memenuhi
                    satupun ketentuan di atas (Skor 0)</x-input-checkbox>

            </ul>
            <div class="p-2">
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah file</label>
                <input
                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                    id="Q6_file_input" type="file" name="Q6_file">
            </div>
            {{-- Section 3.7 --}}
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">7. Penyimpanan obat apakah sudah memperhatikan hal-hal berikut: (Jawaban dapat lebih
                dari satu) N:<span id="Q7_score"></span></h3>
            <ul
                class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                <x-input-checkbox type="checkbox" id="Q7A" name="Q7A" value="Q7A" label="Q7A" onclick="toggleScore('Q7')">☐ Disimpan dalam
                    wadah asli atau wadah lain yang dapat menjaga dari kontaminasi dan diberi label (nama obat, nomor bets, dan kedaluwarsa)</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q7B" name="Q7B" value="Q7B" label="Q7B" onclick="toggleScore('Q7')">Bentuk dan jenis
                    sediaan
                </x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q7C" name="Q7C" value="Q7C" label="Q7C" onclick="toggleScore('Q7')">Kelas terapi
                    obat dan/atau Alfabetis</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q7D" name="Q7D" value="Q7D" label="Q7D" onclick="toggleScore('Q7')">Kondisi yang
                    dipersyaratkan (suhu dan kelembaban)</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q7E" name="Q7E" value="Q7E" label="Q7E" onclick="toggleScore('Q7')">Terhindar dari
                    kontaminasi produk atau barang lain</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q7F" name="Q7F" value="Q7F" label="Q7F" onclick="toggleScore('Q7')">Penjaminan
                    keamanan produk (khususnya Produk Prekursor dan OOT) terhadap risiko kehilangan, pencurian</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q7G" name="Q7G" value="Q7G" label="Q7G" onclick="toggleScore('Q7')">Sistem First
                    Expired First Out (FEFO) dan/atau sistem First In First Out (FIFO)</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q7H" name="Q7H" value="Q7H" label="Q7H" onclick="toggleScore('Q7')">Kemiripan
                    penampilan dan penamaan Obat (Look Alike Sound Alike/LASA)</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q7I" name="Q7I" value="Q7I" label="Q7I" onclick="toggleScore('Q7')">Tidak menyentuh
                    lantai dan/atau dinding secara langsung</x-input-checkbox>
                <x-input-checkbox type="checkbox" id="Q70" name="Q70" value="Q70" label="Q70" onclick="toggleScore('Q7')">Tidak memenuhi
                    satupun ketentuan di atas (Skor 0)</x-input-checkbox>

            </ul>
            <div class="p-2">
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah file</label>
                <input
                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                    id="Q7_file_input" type="file" name="Q7_file">
            </div>
            {{-- End Section 3 --}}
        </div>

    </div>

</x-layouts>
