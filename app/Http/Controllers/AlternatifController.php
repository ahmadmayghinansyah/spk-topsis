<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use Yajra\DataTables\Facades\DataTables;


class AlternatifController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Alternatif::query();
            return DataTables::eloquent($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($row) {
                    $btn = '<a href="'.route('alternatif.edit', $row->id).'" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">Edit</a>';
                    $btn .= '<form action="'.route('alternatif.destroy', $row->id).'" method="POST" class="inline-block ml-2">
                                '.csrf_field().'
                                '.method_field('DELETE').'
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150" onclick="return confirm(\'Anda yakin ingin menghapus alternatif ini?\')">Hapus</button>
                             </form>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        return view('alternatif.index');
    }

    public function create()
    {
        return view('alternatif.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'kode' => 'required|unique:alternatifs,kode',
        'nama' => 'required',
    ]);

    Alternatif::create([
        'kode' => $request->kode,
        'nama' => $request->nama,
    ]);

    return redirect()->route('alternatif.index')->with('success', 'Alternatif berhasil ditambahkan.');
    }

    public function edit(Alternatif $alternatif)
{
    return view('alternatif.edit', compact('alternatif'));
}

public function update(Request $request, Alternatif $alternatif)
{
    $request->validate([
        'kode' => 'required|unique:alternatifs,kode,' . $alternatif->id,
        'nama' => 'required',
    ]);

    $alternatif->update($request->all());
    return redirect()->route('alternatif.index')->with('success', 'Alternatif berhasil diperbarui.');
}


    public function destroy(Alternatif $alternatif)
    {
        $alternatif->delete();
        return redirect()->route('alternatif.index')->with('success', 'Alternatif berhasil dihapus.');
    }
}
