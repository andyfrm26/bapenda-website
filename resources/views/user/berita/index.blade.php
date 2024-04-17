@extends('layouts.main')

@section('content')
    {{-- Content --}}
    <div class="berita py-3 min-vh-100 text-center">
        <div class="container text-start mt-3">
            {{-- <a href="/" class="berita__nav text-white d-inline-block mx-2">Beranda</a>
            >
            <a href="/berita" class="berita__nav text-white d-inline-block mx-2">Berita</a> --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
                </ol>
            </nav>
        </div>
        <h3 class="fw-bold fs-1 mt-3">Berita Bapenda</h3>
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-md-3 g-4 text-start">
                @forelse ($beritas as $berita)
                    <div class="col col-md-6 col-lg-4">
                        <div class="card border-0 h-100 shadow">
                            <img src="{{ asset('/storage/berita/' . $berita->image) }}" class="card-img-top"
                                style="object-fit: contain;">
                            <div class="card-body">
                                <a class="berita__title" href="{{ route('user.berita.show', $berita->id) }}">
                                    <h5 class="card-title fs-6 fw-semibold">{{ $berita->title }}
                                    </h5>
                                </a>
                                <p class="text-secondary">{!! substr($berita->content, 0, 90) . '...' !!}</p>
                            </div>
                            <div class="card-footer justify-content-between">
                                <small class="text-body-secondary">Diunggah pada:
                                    <strong>{{ date('d F Y', strtotime($berita->created_at)) }}</strong></small>
                                <br>
                                @foreach (explode(',', $berita->tags) as $tag)
                                    <span class="badge bg-blue">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="container text-center py-3 text-secondary">
                        Belum ada berita.
                    </div>
                @endforelse
            </div>
        </div>
        <div class="d-flex justify-content-center py-4">
            {{ $beritas->links() }}
        </div>
    </div>
    {{-- end of Content --}}
@endsection
