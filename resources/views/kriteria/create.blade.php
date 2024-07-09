<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kriteria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('kriteria.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="kode" class="block text-gray-700 text-sm font-bold mb-2">Kode Kriteria</label>
                        <input id="kode" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="kode" value="{{ old('kode') }}" required autofocus>
                    </div>

                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama Kriteria</label>
                        <input id="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nama" value="{{ old('nama') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="bobot" class="block text-gray-700 text-sm font-bold mb-2">Bobot</label>
                        <input id="bobot" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" step="0.01" name="bobot" value="{{ old('bobot') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="jenis" class="block text-gray-700 text-sm font-bold mb-2">Jenis</label>
                        <select id="jenis" name="jenis" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="benefit" {{ old('jenis') == 'benefit' ? 'selected' : '' }}>Benefit</option>
                            <option value="cost" {{ old('jenis') == 'cost' ? 'selected' : '' }}>Cost</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Tambah
                        </button>
                        <a href="{{ route('kriteria.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
