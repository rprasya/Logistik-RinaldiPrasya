@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Barang Keluar</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Tambah Barang Keluar</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <form action="/barang-keluar/store" method="POST">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="no_barang" class="form-label">Nomor Barang Keluar</label>
                            <input type="number" inputmode="numeric" name="no_barang" id="no_barang" class="form-control @error ('no_barang') is-invalid @enderror" value="{{ old('no_barang') }}">
                            @error ('no_barang')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <select name="kode_barang" id="kode_barang" class="form-control @error('kode_barang') is-invalid @enderror">
                                <option value="">-- Pilih Kode Barang --</option>
                                @foreach ($availableItems as $item)
                                    <option value="{{ $item->kode_barang }}" {{ old('kode_barang') == $item->kode_barang ? 'selected' : '' }}>
                                        {{ $item->kode_barang }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kode_barang')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" inputmode="numeric" name="quantity" id="quantity" class="form-control @error ('quantity') is-invalid @enderror" value="{{ old('quantity') }}">
                            @error ('quantity')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="destination" class="form-label">Destination (Tujuan)</label>
                            <input type="text" name="destination" id="destination" class="form-control @error ('destination') is-invalid @enderror" value="{{ old('destination') }}">
                            @error ('destination')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                            <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="form-control  @error ('tanggal_keluar') is-invalid @enderror" value="{{ old('tanggal_keluar') }}">
                            @error ('tanggal_keluar')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="/barang-keluar" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
