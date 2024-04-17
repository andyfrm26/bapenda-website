@extends('layouts.main')

@section('content')
    {{-- Content --}}
    <div class="py-3 min-vh-100 text-center">
        <div class="container text-start mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                </ol>
            </nav>
        </div>
        <h3 class="fw-bold fs-1 mt-3">Artikel Bapenda</h3>
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-md-3 g-4 text-start">
                @forelse ($artikels as $artikel)
                    <div class="col col-md-6 col-lg-4">
                        <div class="card border-0 h-100 shadow">
                            <img src="{{ asset('/storage/artikel/' . $artikel->image) }}" class="card-img-top"
                                style="object-fit: contain;">
                            <div class="card-body">
                                <a class="artikel__title" href="{{ route('user.artikel.show', $artikel->id) }}">
                                    <h5 class="card-title fs-6 fw-semibold">{{ $artikel->title }}
                                    </h5>
                                </a>
                            </div>
                            <div class="card-footer justify-content-between">
                                <small class="text-body-secondary">Diunggah pada:
                                    <strong>{{ date('d F Y', strtotime($artikel->created_at)) }}</strong></small>
                                <br>
                                @foreach (explode(',', $artikel->tags) as $tag)
                                    <span class="badge bg-blue">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="container text-center py-3 text-secondary">
                        Belum ada artikel.
                    </div>
                @endforelse
            </div>
        </div>
        <div class="d-flex justify-content-center py-4">
            {{ $artikels->links() }}
        </div>
    </div>
    {{-- end of Content --}}
@endsection
