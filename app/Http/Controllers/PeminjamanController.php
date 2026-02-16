<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\student;
use App\Models\Guru;
use App\Models\Inventory;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('peminjaman.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'peminjam_id' => 'required',
            'barang_id' => 'required',
            'tanggal_pinjam' => 'required'
        ]);

        Peminjaman::create([
            'peminjam_id' => $request->peminjam_id,
            'role' => $request->role,
            'barang_id' => $request->barang_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'keterangan' => $request->keterangan,
            'added_by' => auth()->id()
        ]);

        return back()->with('success', 'Peminjaman berhasil disimpan!');
    }

    public function cekPeminjam(Request $request)
    {
        $role = $request->role;
        $id = $request->peminjam_id;

        if ($role === "Siswa") {
            $data = student::where('nisn', $id)->select('nama_lengkap')->first();
            $namaField = 'nama_lengkap';
        } elseif ($role === "Guru") {
            $data = Guru::where('nip', $id)->select('nama')->first();
            $namaField = 'nama';
        } else {
            return response()->json(['status' => false]);
        }

        if ($data) {
            return response()->json([
                'status' => true,
                'nama' => $data->$namaField
            ]);
        }

        return response()->json(['status' => false]);
    }

public function cekBarang(Request $request)
{
    $id = $request->barang_id; // dari fetch()

    // cari berdasarkan kolom kode_barang
    $barang = Inventory::where('kode_barang', $id)->first();

    if ($barang) {
        return response()->json([
            'status' => true,
            'nama' => $barang->nama_barang,
            'stok' => $barang->stok,
            'kategori' => $barang->kategori
        ]);
    }

    return response()->json(['status' => false]);
}
}