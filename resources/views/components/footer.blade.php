{{-- Footer --}}
<div class="beranda__footer shadow-lg">
    <div class="container text-center p-5 position-relative">
        <div class="row">
            {{-- kiri --}}
            <div class="col-12 col-lg-6 col-xl-5 text-start">
                <div class="position-relative mb-5">
                    <img src="{{ asset('img/logo-bapenda.png') }}" alt="">
                    <span class="garis"></span>
                </div>
                <div class="">
                    <div class="beranda__footer-alamat container">
                        <h3 class="fs-5">Hubungi kami</h3>
                        <div class="row">
                            <div class="col-4 text-secondary text-opacity-75">Alamat:</div>
                            <div class="col-8 text-body-secondary">Jl. Jawa No. 72, Kec. Sumbersari, Kabupaten
                                Jember,
                                Jawa Timur</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4 text-secondary text-opacity-75">Hotline (WA):</div>
                            <div class="col-8 text-body-secondary">0813 5865 8026 <br> 0813 5865 8027</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4 text-secondary text-opacity-75">Email:</div>
                            <div class="col-8 text-body-secondary">bapenda@jemberkab.go.id</div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            {{-- kanan --}}
            <div class="col-12 col-lg-6 col-xl-7 container text-start">
                <div class="row px-3 pt-3 pb-0 h-100">
                    <div class="col-6 col-md-4 col-lg-6 col-xl-4">
                        <h3 class="fs-5 fw-bold">Menu Lainnya</h3>
                        <div class="d-flex flex-column gap-0 row-gap-3 mt-3 links">
                            <a href="/selayang-pandang">Selayang Pandang</a>
                            <a href="/struktur-organisasi">Struktur Organisasi</a>
                            <a href="/tupoksi">Tugas Pokok dan Fungsi</a>
                            <a href="/berita">Berita</a>
                            <a href="/e-bphtb">E-BPHTB</a>
                            <a href="/j-mbako">Aplikasi J-MBAKO</a>
                            <a href="#">Cek Tunggakan PBB P2</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-6 col-xl-4">
                        <h3 class="fs-5 fw-bold">Tautan Terkait</h3>
                        <div class="d-flex flex-column gap-0 row-gap-3 mt-3 links">
                            <a href="https://www.jemberkab.go.id/" target="_blank">Pemerintah Kab. Jember</a>
                            <a href="https://ppid.jemberkab.go.id/" target="_blank">PPID Kab. Jember</a>
                            <a href="https://dashboardpajakdaerah.jemberkab.go.id/" target="_blank">Dashboard
                                Pajak
                                Daerah</a>

                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-6 col-xl-4 mt-5 my-md-0 beranda__footer__ikuti-kami">
                        <h3 class="fs-5 fw-bold">Ikuti Kami</h3>
                        <div class="beranda__footer-socmed d-flex justify-content-between mt-3">
                            <a href="https://www.facebook.com/people/Badan-Pendapatan-Daerah-Kabupaten-Jember/100064501937986/"
                                class="facebook text-secondary text-opacity-75" target="_blank">
                                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/bapendajember/"
                                class="instagram text-secondary text-opacity-75" target="_blank">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.tiktok.com/@bapendajember"
                                class="tiktok text-secondary text-opacity-75" target="_blank">
                                <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.youtube.com/@bapendakabjember534/"
                                class="youtube text-secondary text-opacity-75" target="_blank">
                                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="beranda__footer-copyright text-center text-white p-3">
        &copy; {{ date('Y') }}. Badan Pendapatan Daerah Kabupaten Jember
    </div>
</div>
{{-- end of Footer --}}
