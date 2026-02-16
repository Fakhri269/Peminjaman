<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Tampilkan semua data barang
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventories.index', compact('inventories'));
    }

    /**
     * Form tambah barang baru
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Simpan barang baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'kategori' => 'nullable|string|max:100',
            'harga' => 'required|numeric|min:0',
        ]);

        Inventory::create([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
        ]);

        return redirect()->route('inventories.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail satu barang
     */
    public function show(Inventory $inventory)
    {
        return view('inventories.show', compact('inventory'));
    }

    /**
     * Form edit barang
     */
    public function edit(Inventory $inventory)
    {
        return view('inventories.edit', compact('inventory'));
    }

    /**
     * Update data barang
     */
    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kode_barang' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'kategori' => 'nullable|string|max:100',
            'harga' => 'required|numeric|min:0',
        ]);

        $inventory->update([
            'nama_barang' => $request->nama_barang,
             'kode_barang' => $request->kode_barang,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
        ]);

        return redirect()->route('inventories.index')->with('success', 'Barang berhasil diperbarui!');
    }

    /**
     * Hapus data barang
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect()->route('inventories.index')->with('success', 'Barang berhasil dihapus!');
    }
}
