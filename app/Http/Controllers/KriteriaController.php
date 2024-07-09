<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
use Yajra\DataTables\Facades\DataTables;


class KriteriaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Kriteria::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($row) {
                    $btn = '<a href="'.route('kriteria.edit', $row->id).'" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">Edit</a>';
                    $btn .= '<form action="'.route('kriteria.destroy', $row->id).'" method="POST" class="inline-block ml-2">
                                '.csrf_field().'
                                '.method_field('DELETE').'
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150" onclick="return confirm(\'Anda yakin ingin menghapus kriteria ini?\')">Hapus</button>
                             </form>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        return view('kriteria.index');
    }

    public function create()
    {
        return view('kriteria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'bobot' => 'required|numeric',
            'jenis' => 'required|in:benefit,cost',
        ]);

        Kriteria::create($request->all());
        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil ditambahkan.');
    }

    public function edit(Kriteria $kriterium)
    {
        return view('kriteria.edit', compact('kriterium'));
    }

    public function update(Request $request, Kriteria $kriterium)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'bobot' => 'required|numeric',
            'jenis' => 'required|in:benefit,cost',
        ]);

        $kriterium->update($request->all());
        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil diperbarui.');
    }

    public function destroy(Kriteria $kriterium)
    {
        $kriterium->delete();
        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil dihapus.');
    }
}
