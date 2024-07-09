<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Perhitungan TOPSIS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Hasil Perhitungan TOPSIS</h1>

                <h2 class="text-xl font-semibold mb-2">Matriks Keputusan</h2>
                <table class="table-auto w-full mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Alternatif</th>
                            @foreach ($hasil_topsis['kriterias'] as $kriteria)
                                <th class="border px-4 py-2">{{ $kriteria->nama }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil_topsis['alternatifs'] as $index => $alternatif)
                            <tr>
                                <td class="border px-4 py-2">{{ $alternatif->nama }}</td>
                                @foreach ($hasil_topsis['decision_matrix'][$index] as $nilai)
                                    <td class="border px-4 py-2">{{ $nilai }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <h2 class="text-xl font-semibold mb-2">Pembagi (Divisor)</h2>
                <table class="table-auto w-full mb-4">
                    <tr>
                        @foreach ($hasil_topsis['divisors'] as $divisor)
                            <td class="border px-4 py-2">{{ $divisor }}</td>
                        @endforeach
                    </tr>
                </table>

                <h2 class="text-xl font-semibold mb-2">Matriks Ternormalisasi</h2>
                <table class="table-auto w-full mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Alternatif</th>
                            @foreach ($hasil_topsis['kriterias'] as $kriteria)
                                <th class="border px-4 py-2">{{ $kriteria->nama }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil_topsis['alternatifs'] as $index => $alternatif)
                            <tr>
                                <td class="border px-4 py-2">{{ $alternatif->nama }}</td>
                                @foreach ($hasil_topsis['norm_matrix'][$index] as $nilai)
                                    <td class="border px-4 py-2">{{ $nilai }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <h2 class="text-xl font-semibold mb-2">Matriks Ternormalisasi Terbobot</h2>
                <table class="table-auto w-full mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Alternatif</th>
                            @foreach ($hasil_topsis['kriterias'] as $kriteria)
                                <th class="border px-4 py-2">{{ $kriteria->nama }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil_topsis['alternatifs'] as $index => $alternatif)
                            <tr>
                                <td class="border px-4 py-2">{{ $alternatif->nama }}</td>
                                @foreach ($hasil_topsis['weighted_matrix'][$index] as $nilai)
                                    <td class="border px-4 py-2">{{ $nilai }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <h2 class="text-xl font-semibold mb-2">Solusi Ideal Positif (A+)</h2>
                <table class="table-auto w-full mb-4">
                    <tr>
                        @foreach ($hasil_topsis['ideal_positive'] as $ideal)
                            <td class="border px-4 py-2">{{ $ideal }}</td>
                        @endforeach
                    </tr>
                </table>

                <h2 class="text-xl font-semibold mb-2">Solusi Ideal Negatif (A-)</h2>
                <table class="table-auto w-full mb-4">
                    <tr>
                        @foreach ($hasil_topsis['ideal_negative'] as $ideal)
                            <td class="border px-4 py-2">{{ $ideal }}</td>
                        @endforeach
                    </tr>
                </table>

                <h2 class="text-xl font-semibold mb-2">Jarak ke Solusi Ideal Positif (D+)</h2>
                <table class="table-auto w-full mb-4">
                    <tr>
                        @foreach ($hasil_topsis['dist_positive'] as $dist)
                            <td class="border px-4 py-2">{{ $dist }}</td>
                        @endforeach
                    </tr>
                </table>

                <h2 class="text-xl font-semibold mb-2">Jarak ke Solusi Ideal Negatif (D-)</h2>
                <table class="table-auto w-full mb-4">
                    <tr>
                        @foreach ($hasil_topsis['dist_negative'] as $dist)
                            <td class="border px-4 py-2">{{ $dist }}</td>
                        @endforeach
                    </tr>
                </table>

                <h2 class="text-xl font-semibold mb-2">Skor Preferensi (V)</h2>
                <table class="table-auto w-full mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Kode</th>
                            <th class="border px-4 py-2">Nama</th>
                            <th class="border px-4 py-2">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil_topsis['alternatifs'] as $index => $alternatif)
                            <tr>
                                <td class="border px-4 py-2">{{ $alternatif->kode }}</td>
                                <td class="border px-4 py-2">{{ $alternatif->nama }}</td>
                                <td class="border px-4 py-2">{{ $hasil_topsis['scores'][$index] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="flex justify-end">
                    <a href="{{ route('topsis.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
