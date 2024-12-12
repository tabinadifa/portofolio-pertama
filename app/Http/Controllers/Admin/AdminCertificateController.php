<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class AdminCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificate = Certificate::all();
        return view('admin.certificate.index', compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi inputan
    $request->validate([
        'name'   => 'required',
        'issued_by' => 'required',
        'issued_at' => 'required',
        'description' => 'required',
        'file' => 'required|mimes:pdf,jpg,jpeg,png|max:5000'
    ]);

    // Proses file
    $filePath = null;
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName(); // Membuat nama unik
        $destinationPath = public_path('dashboard-template/img'); // Path folder tujuan
        $file->move($destinationPath, $fileName); // Memindahkan file
        $filePath = 'dashboard-template/img/' . $fileName; // Menyimpan path relatif
    }

    // Simpan data ke database
    Certificate::create([
        'name' => $request->name,
        'issued_by' => $request->issued_by,
        'issued_at' => $request->issued_at,
        'description' => $request->description,
        'file' => $filePath,
    ]);

    session()->flash('success', 'Data berhasil ditambahkan!');

    return redirect()->route('certificate.index');
}


    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        return view('admin.certificate.show', compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.certificate.edit', compact('certificate'));
    }

    /**
 * Update the specified resource in storage.
 */
public function update(Request $request, Certificate $certificate)
{
    // Validasi inputan
    $request->validate([
        'name'   => 'required',
        'issued_by' => 'required',
        'issued_at' => 'required',
        'description' => 'required',
        'file' => 'nullable|mimes:pdf,jpg,jpeg,png|max:5000'
    ]);

    // Proses file jika ada
    $filePath = $certificate->file; // Simpan file lama jika tidak ada perubahan
    if ($request->hasFile('file')) {
        // Hapus file lama jika ada
        if ($filePath && file_exists(public_path($filePath))) {
            unlink(public_path($filePath));
        }

        // Upload file baru
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('dashboard-template/img');
        $file->move($destinationPath, $fileName);
        $filePath = 'dashboard-template/img/' . $fileName;
    }

    // Update data di database
    $certificate->update([
        'name' => $request->name,
        'issued_by' => $request->issued_by,
        'issued_at' => $request->issued_at,
        'description' => $request->description,
        'file' => $filePath,
    ]);

    session()->flash('success', 'Data berhasil diperbarui!');

    return redirect()->route('certificate.index');
}


    /**
 * Remove the specified resource from storage.
 */
public function destroy(Certificate $certificate)
{
    // Hapus file jika ada
    if ($certificate->file && file_exists(public_path($certificate->file))) {
        unlink(public_path($certificate->file));
    }

    // Hapus data dari database
    $certificate->delete();

    session()->flash('success', 'Data berhasil dihapus!');

    return redirect()->route('certificate.index');
}

}
