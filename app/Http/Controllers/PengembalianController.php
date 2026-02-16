<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
use Carbon\Carbon;

class PengembalianController extends Controller
{
    /**
     * Tampilkan semua data peminjaman
     */
    public function index()
    {
        $data = Pengembalian::orderBy('id', 'desc')->get();
        return view('pengembalian.index', compact('data'));
    }

    /**
     * Aksi kembalikan barang
     */
    public function kembalikan($id)
    {
        // Ambil data peminjaman berdasarkan id
        $item = Pengembalian::findOrFail($id);

        // Jika status sudah 'sudah', jangan lakukan apa-apa
        if ($item->status === 'sudah') {
            return redirect()->back()->with('info', 'Barang sudah dikembalikan sebelumnya.');
        }

        // Update tanggal kembali dan status
        $item->tanggal_kembali = Carbon::now();
        $item->status = 'sudah';
        $item->save();

        return redirect()->back()->with('success', 'Barang sudah dikembalikan!');
    }
}
