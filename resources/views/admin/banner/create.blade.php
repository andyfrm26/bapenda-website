@extends('layouts.admin')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <div class="container p-3">
        <h1 class="text-dark">Tambah Banner</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <small class="text-secondary mx-1"><em>(ukuran file maks. 2 MB)</em></small>
                            <input type="file"
                                class="form-control @if ($errors->has('image')) is-invalid @endif file-input--modifier"
                                name="image">

                            <!-- error message untuk title -->
                            @if ($errors->has('image'))
                                <div class="alert alert-danger mt-2">
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
