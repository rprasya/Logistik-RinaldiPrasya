@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Barang Keluar</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Barang Keluar</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
@if (session('success'))
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        icon: 'success',
        // confirmButtonText: 'letsgo!'
    })
</script>
@endif
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="/barang-keluar/create" class="btn btn-sm btn-primary">
                        Tambah Barang Keluar
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Barang Keluar</th>
                                <th>Kode Barang</th>
                                <th>Quantity</th>
                                <th>Destination (Tujuan)</th>
                                <th>Tanggal Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($outgoingProducts as $product)
                                <tr>
                                    <td>{{ ($outgoingProducts->currentPage() - 1) * $outgoingProducts->perPage() + $loop->index + 1 }}</td>
                                    <td>{{ $product->no_barang }}</td>
                                    <td>{{ $product->kode_barang }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->destination }}</td>
                                    <td>{{ $product->tanggal_keluar }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/barang-keluar/edit/{{ $product->id }}"
                                                class="btn btn-sm btn-warning mr-2">Ubah</a>
                                            {{-- <form action="/barang-keluar/{{ $product->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form> --}}
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $product->id }}">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                @include('pages.barangkeluar.delete-confirmation')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $outgoingProducts->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
