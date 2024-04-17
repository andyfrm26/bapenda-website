@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('artikel.index') }}">Artikel</a></li>
                        <li class="breadcrumb-item active">
                            {{ strlen($artikel->title) < 15 ? $artikel->title : substr($artikel->title, 0, 15) . '...' }}
                        </li>
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
                        <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $artikel->title }}</h4>
                        <p class="mt-3">
                            {!! $artikel->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
