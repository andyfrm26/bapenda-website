@extends('layouts.admin')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <div class="container p-3">
        <h1 class="text-dark">Edit Artikel</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <small class="text-secondary mx-1"><em>(ukuran file maks. 2 MB)</em></small>
                            <input type="file" class="form-control file-input--modifier" name="image">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control @if ($errors->has('title')) is-invalid @endif"
                                name="title" value="{{ old('title', $artikel->title) }}"
                                placeholder="Masukkan Judul Post">

                            <!-- error message untuk title -->
                            @if ($errors->has('title'))
                                <div class="alert alert-danger mt-2">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">KONTEN</label>
                            <textarea class="form-control @if ($errors->has('content')) is-invalid @endif" name="content" rows="5"
                                id="editor" placeholder="Masukkan Konten Post">{{ old('content', $artikel->content) }}</textarea>
                            {{-- <div id="editor"></div> --}}

                            <!-- error message untuk content -->
                            @if ($errors->has('content'))
                                <div class="alert alert-danger mt-2">
                                    {{ $errors->first('content') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="tags">TAGS</label>
                            <input name="tags" id="tags" value="{{ old('tags', $artikel->tags) }}"
                                class="form-control">

                            <!-- error message untuk tags -->
                            @if ($errors->has('tags'))
                                <div class="alert alert-danger mt-2">
                                    {{ $errors->first('tags') }}
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

    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>

    <script nonce="{{ csrf_token() }}">
        ClassicEditor
            .create(document.querySelector('#editor'), {})
            .then((editor) => {
                console.log(editor)
            })
            .catch(error => {
                console.error(error);
            });

        var input = document.querySelector('input[name=tags]');

        new Tagify(input)
    </script>
@endsection
