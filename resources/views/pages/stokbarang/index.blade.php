@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Stok Barang</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Stok Barang</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    @foreach ($itemstock as $item)
                    <tbody>
                        <tr>
                            <td>{{ ($itemstock->currentPage() - 1) * $itemstock->perPage() + $loop->index + 1 }}</td>
                            <td>{{ $item->kode_barang }}</td>
                            <td>{{ $item->stok }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="card-footer">
                {{ $itemstock->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection