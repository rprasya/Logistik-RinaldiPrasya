@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Barang Masuk</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Tambah Barang Masuk</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <form action="/barang-masuk/store" method="POST">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="no_barang" class="form-label">Nomor Barang Masuk</label>
                            <input type="number" inputmode="numeric" name="no_barang" id="no_barang" class="form-control @error ('no_barang') is-invalid @enderror" value="{{ old('no_barang') }}">
                            @error ('no_barang')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input type="text" name="kode_barang" id="kode_barang" class="form-control @error ('kode_barang') is-invalid @enderror" value="{{ old('kode_barang') }}">
                            @error ('kode_barang')
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
                            <label for="origin" class="form-label">Origin (Asal Barang)</label>
                            <input type="text" name="origin" id="origin" class="form-control @error ('origin') is-invalid @enderror" value="{{ old('origin') }}">
                            @error ('origin')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control  @error ('tanggal_masuk') is-invalid @enderror" value="{{ old('tanggal_masuk') }}">
                            @error ('tanggal_masuk')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="/barang-masuk" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
