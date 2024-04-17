{{-- Berita Terkini --}}
<div class="beranda__berita-terkini">

    <div class="container text-center p-5">
        <h2 class="fw-bold">Berita Terkini</h2>

        @if (sizeof($beritas) < 3)
            <div class="container text-center py-3 text-secondary">
                Belum ada berita.
            </div>
        @else
            {{-- card berita --}}
            <div class="container text-start py-3">
                <div class="row row-gap-3">
                    {{-- kiri - col-8 --}}
                    <div class="col-md-12 col-lg-8">
                        <div class="card beranda__card-berita--big overflow-hidden" style="max-height: 100%;">
                            <div class="">
                                <img src="{{ asset('/storage/berita/' . $beritas[0]['image']) }}"
                                    style="height: 80vh; width:100%; object-fit:cover; object-position: top;"
                                    alt="">
                            </div>
                            <div class="card-body p-4">
                                <a href="{{ route('user.berita.show', $beritas[0]['id']) }}">
                                    <h5 class="card-title fs-6 fw-semibold">{{ $beritas[0]['title'] }}</h5>
                                </a>
                                <span
                                    class="tanggal d-inline-block mb-2 card-text text-body-tertiary">{{ date('d F Y', strtotime($beritas[0]['created_at'])) }}</span>
                                <br>
                                @foreach (explode(',', $beritas[0]['tags']) as $tag)
                                    <span class="badge bg-blue">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- kanan - col-4 --}}
                    <div class="col-md-12 col-lg-4">
                        <div class="card beranda__card-berita overflow-hidden">
                            <div class="">
                                <img src="{{ asset('/storage/berita/' . $beritas[1]['image']) }}"
                                    style="height: 30vh; width:100%; object-fit:cover; object-position: top;"
                                    alt="">
                            </div>
                            <div class="card-body">
                                <a href="{{ route('user.berita.show', $beritas[1]['id']) }}">
                                    <h5 class="card-title fs-6 fw-semibold">{{ $beritas[1]['title'] }}</h5>
                                </a>
                                <span
                                    class="d-inline-block mb-2 card-text text-body-tertiary tanggal">{{ date('d F Y', strtotime($beritas[1]['created_at'])) }}</span>
                                <br>
                                @foreach (explode(',', $beritas[1]['tags']) as $tag)
                                    <span class="badge bg-blue">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="card mt-3 overflow-hidden">
                            <div class="">
                                <img src="{{ asset('/storage/berita/' . $beritas[2]['image']) }}"
                                    style="height: 30vh; width:100%; object-fit:cover; object-position: top;"
                                    alt="">
                            </div>
                            <div class="card-body">
                                <a href="{{ route('user.berita.show', $beritas[2]['id']) }}">
                                    <h5 class="card-title fs-6 fw-semibold">{{ $beritas[2]['title'] }}</h5>
                                </a>
                                <span
                                    class="d-inline-block mb-2 card-text text-body-tertiary tanggal">{{ date('d F Y', strtotime($beritas[2]['created_at'])) }}</span>
                                <br>
                                @foreach (explode(',', $beritas[2]['tags']) as $tag)
                                    <span class="badge bg-blue">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/berita">
                <button class="btn btn-outline-primary">Berita lainnya</button>
            </a>
        @endif
    </div>
</div>
{{-- end of Berita Terkini --}}
