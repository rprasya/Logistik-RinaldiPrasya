@php
    $menus = [
        (object) [
            'title' => 'Beranda',
            'path' => '/',
            'icon' => 'fa fa-home',
        ],
        (object) [
            'title' => 'Barang Masuk',
            'path' => 'barang-masuk',
            'icon' => 'fa fa-arrow-down',
        ],
        (object) [
            'title' => 'Barang Keluar',
            'path' => 'barang-keluar',
            'icon' => 'fa fa-arrow-up',
        ],
        (object) [
            'title' => 'Stok Barang',
            'path' => 'stok-barang',
            'icon' => 'fa fa-archive',
        ],
    ];
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
        <img src="https://img.icons8.com/?size=100&id=4NUeu__UwtXf&format=png&color=ffffff" alt="Logistik Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Aplikasi Logistik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('templates/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a href="{{ $menu->path[0] !== '/' ? '/' . $menu->path : $menu->path }}" class="nav-link {{ request()->path() === $menu->path ? 'active' : '' }}">
                            <i class="nav-icon {{ $menu->icon }}"></i>
                            <p>
                                {{ $menu->title }}
                            </p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
