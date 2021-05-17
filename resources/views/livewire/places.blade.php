<x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Desa') }}
            </h2>
</x-slot>

<div class="py-12">
    <div class=" max-w-7xl mx-auto ...">
        <div class='bg-white overflow-hidden shadow-xl sm::rounded-lg px-4 py-4'>
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message')}} </p>
                    </div>
                </div>
            </div>
            @endif

            <button wire:click="create" class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-2 rounded my-2"> Tambah Data</button>
            @if ($isModal)
                @include("livewire.create")
            @endif
            
            <table class='table-fixed w-full' style="border: 2px solid;">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Desa</th>
                        <th class="px-4 py-2">Kabupaten</th>
                        <th class="px-4 py-2">Provinsi</th>
                        <th class="px-4 py-2">Sehat</th>
                        <th class="px-4 py-2">Sakit</th>
                        <th class="px-4 py-2">Dirawat</th>
                        <th class="px-4 py-2">Sembuh</th>
                        <th class="px-4 py-2">Zona</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($places as $row)
                    <tr>
                        <td class="boder px-4 py-2">{{ $row -> Desa }}</td>
                        <td class="boder px-4 py-2">{{ $row -> Kabupaten }}</td>
                        <td class="boder px-4 py-2">{{ $row -> Provinsi }}</td>
                        <td class="boder px-4 py-2">{{ $row -> Sehat }}</td>
                        <td class="boder px-4 py-2">{{ $row -> Sakit }}</td>
                        <td class="boder px-4 py-2">{{ $row -> Dirawat }}</td>
                        <td class="boder px-4 py-2">{{ $row -> Sembuh }}</td>
                        <td class="boder px-4 py-2">{{ $row -> Zona }}</td>
                        <td class="boder px-4 py-2">
                            <button wire:click="edit({{ $row->id}})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded">Edit</button>
                            <button wire:click="delete({{ $row->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 rounded">Hapus</button>
                        </td>
                        
                    </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5"> Tidak ada Data </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


