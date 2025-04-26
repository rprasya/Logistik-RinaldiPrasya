<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\StokBarang;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomingProducts = BarangMasuk::orderBy('id', 'desc')->paginate(10);
        return view('pages.barangmasuk.index', compact('incomingProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.barangmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // Validasi data input
            $request->validate([
                'no_barang' => 'required|string|max:50',
                'kode_barang' => 'required|string|max:50',
                'quantity' => 'required|integer|min:1',
                'origin' => 'required|string|max:255',
                'tanggal_masuk' => 'required|date',
            ]);
        
            // Simpan ke tabel barang_masuk
            $incomingProducts = BarangMasuk::create([
                'no_barang' => $request->no_barang,
                'kode_barang' => $request->kode_barang,
                'quantity' => $request->quantity,
                'origin' => $request->origin,
                'tanggal_masuk' => $request->tanggal_masuk,
            ]);
        
            // Cek stok barang
            $stock = StokBarang::where('kode_barang', $request->kode_barang)->first();
        
            if ($stock) {
                // Jika stok barang sudah ada, tambahkan quantity
                $stock->update([
                    'stok' => $stock->stok + $request->quantity,
                ]);
            } else {
                // Jika belum ada, buat stok baru
                StokBarang::create([
                    'kode_barang' => $request->kode_barang,
                    'stok' => $request->quantity,
                ]);
            }
        
            return redirect('barang-masuk')->with('success', 'Barang Masuk berhasil ditambahkan.');
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
        $incomingProducts = BarangMasuk::findOrFail($id);
        return view('pages.barangmasuk.edit', compact('incomingProducts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data input
    $request->validate([
        'no_barang' => 'required|string|max:50',
        'kode_barang' => 'required|string|max:50',
        'quantity' => 'required|integer|min:1',
        'origin' => 'required|string|max:255',
        'tanggal_masuk' => 'required|date',
    ]);

    // Ambil data barang masuk yang mau diupdate
    $incomingProducts = BarangMasuk::findOrFail($id);

    // Ambil stok barang berdasarkan kode_barang
    $stokBarang = StokBarang::where('kode_barang', $incomingProducts->kode_barang)->first();

    if (!$stokBarang) {
        return redirect()->back()->with('error', 'Stok barang tidak ditemukan.');
    }

    // Hitung selisih quantity
    $selisih = $request->quantity - $incomingProducts->quantity;

    // Update stok barang sesuai selisih
    $stokBaru = $stokBarang->stok + $selisih;
    if ($stokBaru < 0) {
        $stokBaru = 0; // Supaya stok tidak minus
    }

    $stokBarang->update([
        'stok' => $stokBaru,
    ]);

    // Update data barang masuk
    $incomingProducts->update([
        'no_barang' => $request->no_barang,
        'kode_barang' => $request->kode_barang,
        'quantity' => $request->quantity,
        'origin' => $request->origin,
        'tanggal_masuk' => $request->tanggal_masuk,
    ]);

    return redirect('barang-masuk')->with('success', 'Barang Masuk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $incomingProducts = BarangMasuk::findOrFail($id);

        $stock = StokBarang::where('kode_barang', $incomingProducts->kode_barang)->first();
        if ($stock) {
            $stock->stok -= $incomingProducts->quantity;
            $stock->save();
        }

        $incomingProducts->delete();
        return redirect('/barang-masuk')->with('success', 'Barang Masuk berhasil dihapus');
    }
}
