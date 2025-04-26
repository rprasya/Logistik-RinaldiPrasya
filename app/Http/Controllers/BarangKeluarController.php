<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\StokBarang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outgoingProducts = BarangKeluar::orderBy('id', 'desc')->paginate(10);
        return view('pages.barangkeluar.index', compact('outgoingProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $availableItems = StokBarang::where('stok', '>', 0)->get();
        return view('pages.barangkeluar.create', compact('availableItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_barang' => 'required|string|max:50',
            'kode_barang' => 'required|string|max:50',
            'quantity' => 'required|integer|min:1',
            'destination' => 'required|string|max:255',
            'tanggal_keluar' => 'required|date',
        ]);

        $stokBarang = StokBarang::where('kode_barang', $request->kode_barang)->first();

        // Pastikan stok tersedia
        if (!$stokBarang || $stokBarang->stok < $request->quantity) {
            return redirect()->back()->with('error', 'Stok tidak cukup atau kode barang tidak ditemukan.');
        }

        // Kurangi stok
        $stokBarang->decrement('stok', $request->quantity);

        // Simpan data barang keluar
        BarangKeluar::create([
            'no_barang' => $request->no_barang,
            'kode_barang' => $request->kode_barang,
            'quantity' => $request->quantity,
            'destination' => $request->destination,
            'tanggal_keluar' => $request->tanggal_keluar,
        ]);

        return redirect('barang-keluar')->with('success', 'Barang keluar berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $outgoingProducts = BarangKeluar::findOrFail($id);
        return view('pages.barangkeluar.edit', compact('outgoingProducts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'no_barang' => 'required|string|max:50',
            'kode_barang' => 'required|string|max:50',
            'quantity' => 'required|integer|min:1',
            'destination' => 'required|string|max:255',
            'tanggal_keluar' => 'required|date',
        ]);

        $outgoingProducts = BarangKeluar::findOrFail($id);
        $stokBarang = StokBarang::where('kode_barang', $outgoingProducts->kode_barang)->first();

        if (!$stokBarang) {
            return redirect()->back()->with('error', 'Stok barang tidak ditemukan.');
        }

        // Hitung selisih quantity
        $selisih = $request->quantity - $outgoingProducts->quantity;

        // Jika selisih > 0, berarti mau mengurangi stok lebih banyak, cek stok cukup atau tidak
        if ($selisih > 0 && $stokBarang->stok < $selisih) {
            return redirect()->back()->with('error', 'Stok tidak cukup untuk perubahan.');
        }

        // Update stok
        $stokBarang->update([
            'stok' => $stokBarang->stok - $selisih,
        ]);

        // Update data barang keluar
        $outgoingProducts->update([
            'no_barang' => $request->no_barang,
            'kode_barang' => $request->kode_barang,
            'quantity' => $request->quantity,
            'destination' => $request->destination,
            'tanggal_keluar' => $request->tanggal_keluar,
        ]);

        return redirect('barang-keluar')->with('success', 'Barang keluar berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $outgoingProducts = BarangKeluar::findOrFail($id);
        $stokBarang = StokBarang::where('kode_barang', $outgoingProducts->kode_barang)->first();

        if ($stokBarang) {
            // Kembalikan stok
            $stokBarang->increment('stok', $outgoingProducts->quantity);
        }

        $outgoingProducts->delete();

        return redirect('barang-keluar')->with('success', 'Barang keluar berhasil dihapus.');
    }
}
