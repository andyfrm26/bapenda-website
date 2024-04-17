<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('img/logo-bapenda-circle.png') }}" alt="AdminLTE Logo" class="brand-image">
        <span class="ml-2 brand-text font-weight-semibold">
            <img src="{{ asset('img/logo-bapenda.png') }}" alt="" height="30px">
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ $title === 'Home' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('berita.index') }}" class="nav-link {{ $title === 'Berita' ? 'active' : '' }}">
                        <i class="nav-icon fa-regular fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('artikel.index') }}" class="nav-link {{ $title === 'Artikel' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-note-sticky"></i>
                        <p>
                            Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('banner.index') }}" class="nav-link {{ $title === 'Banner' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-map"></i>
                        <p>
                            Banner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('beranda') }}" target="_blank" class="nav-link">
                        <i class="nav-icon fa-solid fa-diamond-turn-right"></i>
                        <p>
                            Ke Website Bapenda
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
