<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\StokBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function index()
    {
        if(!Auth::check()) {
            return redirect('/login')->with('error-unauthorized', 'Silahkan login terlebih dahulu.');
        }

       // Menghitung total quantity dari semua barang masuk
       $incomingCount = BarangMasuk::sum('quantity');

       // Menghitung total quantity dari semua barang keluar
       $outgoingCount = BarangKeluar::sum('quantity');

       // Menghitung total stok barang yang tersedia
       $itemCount = StokBarang::sum('stok');

       // Passing data ke view beranda
       return view('pages.beranda.welcome', compact('incomingCount', 'outgoingCount', 'itemCount'));
    }
}
