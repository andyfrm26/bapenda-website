@extends('layouts.admin')

@section('content')
    <div class="container p-3">
        <h1 class="text-dark">Selamat datang, {{ Auth::user()->name }}!</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
@endsection
