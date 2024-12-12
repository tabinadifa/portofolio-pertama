<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class AdminSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data skill
        $skill = Skill::all();
        
        // Mengirim data skill ke view
        return view('admin.skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        // Simpan data skill ke database
        Skill::create($request->all());

        session()->flash('success', 'Data berhasil ditambahkan!');

        return redirect()->route('skill.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return view('admin.skill.show', compact('skill'));
    }
    
    /**
     * Show form editing the specified resource.
     */
    public function edit(Skill $skill)
    {
       return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
         // Validasi inputan
         $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        // Mengubah data skill ke database
        $skill->update($request->all());

        session()->flash('success', 'Data berhasil diubah!');

        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
       $skill->delete();

       session()->flash('success', 'Data berhasil dihapus!');

       return redirect()->route('skill.index');
    }
}
