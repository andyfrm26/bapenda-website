@extends('layouts.main')

@section('content')
    <div class="py-3 text-center">
        <div class="container mt-3 text-start">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.artikel.index') }}">Artikel</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ strlen($artikel->title) < 20 ? $artikel->title : substr($artikel->title, 0, 20) . '...' }}</li>
                </ol>
            </nav>
        </div>

        <h3 class="fw-bold fs-1">Artikel Bapenda</h3>
        <div class="container mt-3 mb-5">
            <div class="row justify-content-center text-start">
                <div class="col-md-8">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="w-100 rounded">
                            <hr>
                            <h4>{{ $artikel->title }}</h4>
                            <p class="tmt-3">
                                {!! $artikel->content !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
