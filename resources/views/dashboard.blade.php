<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Kriteria Card -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            {{ __('Kriteria') }}
                        </h3>
                        <p class="mt-2 text-gray-600">
                            <!-- Isi Kriteria -->
                            Mengelola data kriteria diantaranya kode kriteria, nama kriteria, bobot, dan jenisnya.
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('kriteria.index') }}" class="text-indigo-600 hover:text-indigo-900">
                                {{ __('Lihat Kriteria') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Alternatif Card -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            {{ __('Alternatif') }}
                        </h3>
                        <p class="mt-2 text-gray-600">
                            <!-- Isi Alternatif -->
                            Mengelola data alternatif diantaranya kode alternatif, dan nama alternatif.
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('alternatif.index') }}" class="text-indigo-600 hover:text-indigo-900">
                                {{ __('Lihat Alternatif') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Perhitungan Card -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            {{ __('Perhitungan') }}
                        </h3>
                        <p class="mt-2 text-gray-600">
                            <!-- Isi Perhitungan -->
                            Untuk menginputkan nilai kriteria dari masing-masing alternatif dan untuk melanjutkan perhitungan topsis.
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('topsis.index') }}" class="text-indigo-600 hover:text-indigo-900">
                                {{ __('Lihat Perhitungan') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
