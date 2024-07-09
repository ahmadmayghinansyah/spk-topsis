<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\Subalternatif;

class TopsisController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::all();
        return view('topsis.index', compact('kriterias', 'alternatifs'));
    }

    public function hasil(Request $request)
    {
        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::all();
        $subalternatifs = [];

        foreach ($alternatifs as $alternatif) {
            $nilai = [];
            foreach ($kriterias as $kriteria) {
                $nilai[$kriteria->id] = $request->input("C{$kriteria->id}_A{$alternatif->id}");
            }
            $subalternatifs[$alternatif->id] = $nilai;
        }

        $hasil_topsis = $this->topsis($kriterias, $alternatifs, $subalternatifs);

        return view('topsis.hasil', compact('hasil_topsis'));
    }

    private function topsis($kriterias, $alternatifs, $subalternatifs)
    {
        // Matriks keputusan
        $decision_matrix = [];
        foreach ($alternatifs as $alternatif) {
            $row = [];
            foreach ($kriterias as $kriteria) {
                $row[] = $subalternatifs[$alternatif->id][$kriteria->id];
            }
            $decision_matrix[] = $row;
        }

        // Menghitung Pembagi (Divisor)
        $divisors = [];
        foreach ($kriterias as $index => $kriteria) {
            $sum = array_reduce(array_column($decision_matrix, $index), function ($carry, $item) {
                return $carry + pow($item, 2);
            });
            $divisors[] = sqrt($sum);
        }

        // Normalisasi Matriks
        $norm_matrix = [];
        foreach ($decision_matrix as $row) {
            $norm_matrix[] = array_map(function ($item, $divisor) {
                return $item / $divisor;
            }, $row, $divisors);
        }

        // Pembobotan Matriks
        $bobot = [];
        foreach ($kriterias as $kriteria) {
            $bobot[] = $kriteria->bobot;
        }
        $weighted_matrix = [];
        foreach ($norm_matrix as $row) {
            $weighted_matrix[] = array_map(function ($item, $bobot) {
                return $item * $bobot;
            }, $row, $bobot);
        }

        // Menentukan Solusi Ideal Positif (A+) dan Negatif (A-)
        $ideal_positive = [];
        $ideal_negative = [];
        foreach ($kriterias as $index => $kriteria) {
            $column = array_column($weighted_matrix, $index);
            if ($kriteria->jenis == 'benefit') {
                $ideal_positive[] = max($column);
                $ideal_negative[] = min($column);
            } else {
                $ideal_positive[] = min($column);
                $ideal_negative[] = max($column);
            }
        }

        // Menghitung Jarak ke Solusi Ideal Positif (D+) dan Negatif (D-)
        $dist_positive = [];
        $dist_negative = [];
        foreach ($weighted_matrix as $row) {
            $dist_positive[] = sqrt(array_reduce(array_map(function ($item, $ideal) {
                return pow($item - $ideal, 2);
            }, $row, $ideal_positive), function ($carry, $item) {
                return $carry + $item;
            }));

            $dist_negative[] = sqrt(array_reduce(array_map(function ($item, $ideal) {
                return pow($item - $ideal, 2);
            }, $row, $ideal_negative), function ($carry, $item) {
                return $carry + $item;
            }));
        }

        // Menghitung Skor Preferensi (V)
        $scores = [];
        foreach ($dist_positive as $index => $value) {
            $scores[] = $dist_negative[$index] / ($value + $dist_negative[$index]);
        }

        // Mengumpulkan hasil untuk ditampilkan
        $results = [
            'kriterias' => $kriterias,
            'alternatifs' => $alternatifs,
            'decision_matrix' => $decision_matrix,
            'divisors' => $divisors,
            'norm_matrix' => $norm_matrix,
            'weighted_matrix' => $weighted_matrix,
            'ideal_positive' => $ideal_positive,
            'ideal_negative' => $ideal_negative,
            'dist_positive' => $dist_positive,
            'dist_negative' => $dist_negative,
            'scores' => $scores,
        ];

        return $results;
    }
}
