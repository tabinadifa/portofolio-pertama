<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all();

        return view('admin.home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'title'   => 'required',
            'content' => 'required',
        ]);

        // Simpan data skill ke database
        Home::create($request->all());

        session()->flash('success', 'Data berhasil ditambahkan!');

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('admin.home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('admin.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
         // Validasi inputan
         $request->validate([
            'title'   => 'required',
            'content' => 'required',
        ]);

        // Simpan data skill ke database
        $home->update($request->all());

        session()->flash('success', 'Data berhasil diubah');

        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        $home->delete();

        session()->flash('success', 'Data berhasil dihapus!');

        return redirect()->route('home.index');
    }
}
