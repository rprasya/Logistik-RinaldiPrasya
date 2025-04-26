@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Beranda</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row" bis_skin_checked="1">
        <div class="col-lg-3 col-6" bis_skin_checked="1">
            <!-- small box -->
            <div class="small-box bg-success" bis_skin_checked="1">
                <div class="inner" bis_skin_checked="1">
                    <h3>{{ $incomingCount }}</h3>
                    <p>Barang Masuk</p>
                </div>
                <div class="icon" bis_skin_checked="1">
                    <i class="ion ion-archive"></i>
                </div>
                <a href="/barang-masuk" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-6" bis_skin_checked="1">
            <!-- small box -->
            <div class="small-box bg-danger" bis_skin_checked="1">
                <div class="inner" bis_skin_checked="1">
                    <h3>{{ $outgoingCount }}</h3>
                    <p>Barang Keluar</p>
                </div>
                <div class="icon" bis_skin_checked="1">
                    <i class="ion ion-shuffle"></i>
                </div>
                <a href="/barang-keluar" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6" bis_skin_checked="1">
            <!-- small box -->
            <div class="small-box bg-info" bis_skin_checked="1">
                <div class="inner" bis_skin_checked="1">
                    <h3>{{ $itemCount }}</h3>
                    <p>Total Stok Barang</p>
                </div>
                <div class="icon" bis_skin_checked="1">
                    <i class="ion ion-cube"></i>
                </div>
                <a href="/stok-barang" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
@endsection
