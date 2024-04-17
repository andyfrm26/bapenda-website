@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></li>
                        <li class="breadcrumb-item active">
                            {{ strlen($berita->title) < 15 ? $berita->title : substr($berita->title, 0, 15) . '...' }}</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/berita/' . $berita->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $berita->title }}</h4>
                        <p class="mt-3">
                            {!! $berita->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
