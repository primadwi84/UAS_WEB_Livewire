<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">

    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">

            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="">
                            <div class="mb-4">
                                <label for="forDesa" class="block text-gray-700 text-sm font-bold mb-2">Desa</label>
                                <input type="text" wire:model="Desa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forDesa" placeholder="Masukkan Nama Desa" wire:model="Desa">
                                @error('Desa') 
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="forKabupaten" class="block text-gray-700 text-sm font-bold mb-2">Kabupaten</label>
                                <input type="text" wire:model="Kabupaten" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forKabupaten" placeholder="Masukkan Nama Kabupaten" wire:model="Kabupaten">
                                @error('Kabupaten') 
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="forProvinsi" class="block text-gray-700 text-sm font-bold mb-2">Provinsi</label>
                                <input type="text" wire:model="Provinsi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forProvinsi" placeholder="Masukkan Nama Provinsi" wire:model="Provinsi">
                                @error('Provinsi') 
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="forSehat" class="block text-gray-700 text-sm font-bold mb-2">Sehat</label>
                                <input type="text" wire:model="Sehat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forSehat" placeholder="Masukkan Jumlah Penduduk Sehat" wire:model="Sehat">
                                @error('Sehat') 
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="forSakit" class="block text-gray-700 text-sm font-bold mb-2">Sakit</label>
                                <input type="text" wire:model="Sakit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forSakit" placeholder="Masukkan Jumlah Penduduk Sakit" wire:model="Sakit">
                                @error('Sakit') 
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="forDirawat" class="block text-gray-700 text-sm font-bold mb-2">Dirawat</label>
                                <input type="text" wire:model="Dirawat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forDirawat" placeholder="Masukkan Jumlah Penduduk Dirawat" wire:model="Dirawat">
                                @error('Dirawat') 
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="forSembuh" class="block text-gray-700 text-sm font-bold mb-2">Sembuh</label>
                                <input type="text" wire:model="Sembuh" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forSembuh" placeholder="Masukkan Jumlah Penduduk Sembuh" wire:model="Sembuh">
                                @error('Sembuh') 
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="forZona" class="block text-gray-700 text-sm font-bold mb-2">Zona</label>
                                <input type="text" wire:model="Zona" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forZona" placeholder="Masukkan Keterangan Zona" wire:model="Zona">
                                @error('Zona') 
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Simpan
                            </button>
                        </span>

                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                            <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Batal
                            </button>
                        </span>
                    </div>
                </div>
            </div>
    </div>
</div>


