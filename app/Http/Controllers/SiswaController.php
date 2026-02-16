<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // model Student yang mengarah ke tabel "siswas"

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil data siswa terbaru, paginate 10 per halaman
        $siswa = Student::latest()->paginate(10);

        // kirim ke view resources/views/siswa/index.blade.php
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // tampilkan form create
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'nisn'          => 'required|string|max:20|unique:siswas,nisn',
            'nama_lengkap'  => 'required|string|max:255',
            'tempat_lahir'  => 'nullable|string|max:100',
            'tanggal_lahir' => 'nullable|date',
            'kelas'         => 'required|string|max:50',
            'jurusan'       => 'required|string|max:100',
            'angkatan'      => 'required|string|max:10',
            'no_hp'         => 'nullable|string|max:20|unique:siswas,no_hp',
            'added_by'      => 'nullable|string|max:100',
            'is_active'     => 'boolean',
        ],  [
            'nisn.unique'  => 'NISN sudah terdaftar.',
            'no_hp.unique' => 'Nomor HP sudah terdaftar.',
        ]);

        // simpan ke database
        Student::create($request->all());

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Student::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Student::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Student::findOrFail($id);

        $request->validate([
            'nisn'          => 'required|string|max:20|unique:siswas,nisn,' . $id,
            'nama_lengkap'  => 'required|string|max:255',
            'tempat_lahir'  => 'nullable|string|max:100',
            'tanggal_lahir' => 'nullable|date',
            'kelas'         => 'required|string|max:50',
            'jurusan'       => 'required|string|max:100',
            'angkatan'      => 'required|string|max:10',
            'no_hp'         => 'nullable|string|max:20|unique:siswas,no_hp,' . $id,
            'added_by'      => 'nullable|string|max:100',
            'is_active'     => 'boolean',
        ], [
            'nisn.unique'  => 'NISN sudah terdaftar.',
            'no_hp.unique' => 'Nomor HP sudah terdaftar.',
        ]);

        // update data
        $siswa->update($request->all());

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Student::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil dihapus.');
    }
}
