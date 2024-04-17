{{-- Navbar --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container px-5">
        <a class="navbar-brand" href="/">
            <img src="/img/logo-bapenda.png" width="150px" alt="Logo Bapenda" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse gap-3" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="text-uppercase nav-link {{ $title === 'Beranda' ? 'active' : '' }}"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="text-uppercase nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ $title === 'Selayang Pandang' ? 'active' : '' }}"
                                href="/selayang-pandang">Selayang Pandang</a></li>
                        <li><a class="dropdown-item {{ $title === 'Sejarah' ? 'active' : '' }}"
                                href="/sejarah">Sejarah</a></li>
                        <li><a class="dropdown-item {{ $title === 'Visi dan Misi' ? 'active' : '' }}"
                                href="/visi-dan-misi">Visi dan Misi</a></li>
                        <li><a class="dropdown-item {{ $title === 'Struktur Organisasi' ? 'active' : '' }}"
                                href="/struktur-organisasi">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item {{ $title === 'Tugas Pokok dan Fungsi' ? 'active' : '' }}"
                                href="/tupoksi">Tugas Pokok dan Fungsi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="text-uppercase nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Jenis Pajak
                    </a>
                    <ul class="dropdown-menu dropdown-menu__pajak">
                        <li><a class="dropdown-item {{ $title === 'PBB-P2' ? 'active' : '' }} PBB-P2"
                                href="{{ route('user.pajak.pbb') }}">Pajak Bumi dan Bangunan
                                Perdesaan dan Perkotaan
                                (PBB-P2)</a></li>
                        <li><a class="dropdown-item {{ $title === 'BPHTB' ? 'active' : '' }}"
                                href="{{ route('user.pajak.bphtb') }}">Bea Perolehan Hak atas Tanah
                                dan Bangunan
                                (BPHTB)</a></li>
                        <li><a class="dropdown-item {{ $title === 'Pajak Hotel' ? 'active' : '' }}"
                                href="{{ route('user.pajak.hotel') }}">Pajak Hotel</a></li>
                        <li><a class="dropdown-item {{ $title === 'Pajak Restoran' ? 'active' : '' }}"
                                href="{{ route('user.pajak.restoran') }}">Pajak Restoran</a></li>
                        <li><a class="dropdown-item {{ $title === 'Pajak Hiburan' ? 'active' : '' }}"
                                href="{{ route('user.pajak.hiburan') }}">Pajak Hiburan</a></li>
                        <li><a class="dropdown-item {{ $title === 'Pajak Reklame' ? 'active' : '' }}"
                                href="{{ route('user.pajak.reklame') }}">Pajak Reklame</a></li>
                        <li><a class="dropdown-item {{ $title === 'Pajak Penerangan Jalan' ? 'active' : '' }}"
                                href="{{ route('user.pajak.penerangan') }}">Pajak Penerangan
                                Jalan</a></li>
                        <li><a class="dropdown-item {{ $title === 'Pajak Parkir' ? 'active' : '' }}"
                                href="{{ route('user.pajak.parkir') }}">Pajak Parkir</a></li>
                        <li><a class="dropdown-item {{ $title === 'Pajak Air Bawah Tanah' ? 'active' : '' }}"
                                href="{{ route('user.pajak.air') }}">Pajak Air Bawah Tanah</a></li>
                        <li><a class="dropdown-item {{ $title === 'Pajak Mineral' ? 'active' : '' }}"
                                href="{{ route('user.pajak.mineral') }}">Pajak Mineral</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="text-uppercase nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Retribusi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ $title === 'Retribusi Jasa Umum' ? 'active' : '' }}"
                                href="{{ route('user.retribusi.umum') }}">Retribusi Jasa Umum</a>
                        </li>
                        <li><a class="dropdown-item {{ $title === 'Retribusi Jasa Usaha' ? 'active' : '' }}"
                                href="{{ route('user.retribusi.usaha') }}">Retribusi Jasa
                                Usaha</a></li>
                        <li><a class="dropdown-item {{ $title === 'Retribusi Perizinan Tertentu' ? 'active' : '' }}"
                                href="{{ route('user.retribusi.perizinan') }}">Retribusi
                                Perizinan Tertentu</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="text-uppercase nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Publikasi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ $title === 'Artikel' ? 'active' : '' }}"
                                href="/artikel">Artikel</a></li>
                        <li><a class="dropdown-item {{ $title === 'Berita' ? 'active' : '' }}"
                                href="/berita">Berita</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="text-uppercase nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ $title === 'Alur Pembayaran' ? 'active' : '' }}"
                                href="/alur-pembayaran">Alur Pembayaran</a></li>
                        <li><a class="dropdown-item {{ $title === 'E-BPHTB' ? 'active' : '' }}"
                                href="/e-bphtb">E-BPHTB</a></li>
                        <li><a class="dropdown-item {{ $title === 'J-MBAKO' ? 'active' : '' }}"
                                href="/j-mbako">Aplikasi J-MBAKO</a></li>
                    </ul>
                </li>
            </ul>
            <a href="#">
                <button class="btn btn-primary" type="submit">Cek Tagihan PBB</button>
            </a>
        </div>
    </div>
</nav>
{{-- end of Navbar --}}
