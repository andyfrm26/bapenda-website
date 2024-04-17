{{-- Jenis Pajak --}}
<div class="beranda__jenis-pajak p-5">
    <div class="container text-center">
        <h2 class="text-light fw-bold">Jenis Pajak</h2>
        <div class="container my-5">
            <div class="row gap-0 row-gap-3">
                <div class="col-sm d-flex justify-content-center">
                    <div class="card" style="width: 24rem;">
                        <div
                            class="w-100 d-flex justify-content-center beranda__image-card-pajak align-items-center overflow-hidden">
                            <img src="{{ asset('img/pbb.png') }}" alt="Pajak Bumi dan Bangunan"
                                style="height: 300px; object-fit:cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Pajak Bumi dan Bangunan <strong>(PBB)</strong></h5>
                            <p class="card-text">Merupakan pajak atas keberadaan tanah dan
                                bangunan yang memberikan keuntungan dan kedudukan sosial ekonomi bagi seseorang
                                ataupun
                                badan</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm d-flex justify-content-center">
                    <div class="card h-100" style="width: 24rem;">
                        <div
                            class="w-100 d-flex justify-content-center beranda__image-card-pajak align-items-center overflow-hidden">
                            <img src="{{ asset('img/bphtb.png') }}" alt="Bea Penerimaan Hak atas Tanah dan Bangunan"
                                style="height: 300px; object-fit:cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Bea Perolehan Hak atas Tanah dan Bangunan
                                <strong>(BPHTB)</strong>
                            </h5>
                            <p class="card-text">Adalah pungutan atas perolehan hak atas tanah dan atau bangunan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm d-flex justify-content-center">
                    <div class="card" style="width: 24rem;">
                        <div
                            class="w-100 d-flex justify-content-center beranda__image-card-pajak align-items-center overflow-hidden">
                            <img src="{{ asset('img/lain.png') }}" alt="Pajak Lainnya"
                                style="height: 300px; object-fit:cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Pajak lainnya</h5>
                            <p class="card-text">Adalah pajak lain yang berada di luar kedua kategori PBB dan BPHTB
                                (misal: Pajak Hotel, Pajak Restoran, dan sebagainya)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('user.pajak') }}" class="btn btn-outline-light">Selengkapnya</a>
    </div>
</div>
{{-- end of Jenis Pajak --}}
