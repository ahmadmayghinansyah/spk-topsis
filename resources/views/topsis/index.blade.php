<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perhitungan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('topsis.hasil') }}" method="post">
                    @csrf
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alternatif</th>
                                @foreach ($kriterias as $kriteria)
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ $kriteria->nama }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($alternatifs as $alternatif)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $alternatif->nama }}</td>
                                    @foreach ($kriterias as $kriteria)
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="C{{ $kriteria->id }}_A{{ $alternatif->id }}" required class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Hitung
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
