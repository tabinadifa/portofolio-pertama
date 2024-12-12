<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class TblDinamisController extends Controller
{
    public function index()
    {
        $konten = TblDinamis::all();
        return view('dinamis.index', compact('konten'));
    }

    public function create()
    {
        return view('dinamis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'konten' => 'required|string',
        ]);

        TblDinamis::create([
            'konten' => $request->konten,
        ]);

        return redirect()->route('dinamis.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(TblDinamis $dinami)
    {
        return view('dinamis.edit', compact('dinami'));
    }

    public function update(Request $request, TblDinamis $dinami)
    {
        $request->validate([
            'konten' => 'required|string',
        ]);

        $dinami->update([
            'konten' => $request->konten,
        ]);

        return redirect()->route('dinamis.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(TblDinamis $dinami)
    {
        $dinami->delete();

        return redirect()->route('dinamis.index')->with('success', 'Data berhasil dihapus.');
    }
}
