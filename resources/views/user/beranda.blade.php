@extends('layouts.main')

@section('content')
    @component('components.beranda.banner', ['banners' => $banners])
    @endcomponent

    @component('components.beranda.about')
    @endcomponent

    @component('components.beranda.pajak')
    @endcomponent

    @component('components.beranda.berita', ['beritas' => $beritas])
    @endcomponent
@endsection
