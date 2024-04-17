@extends('layouts.main')

@section('content')
    {{-- Content --}}
    <div class="py-3 min-vh-100 text-center">
        <div class="container mt-3 text-start">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.pajak') }}">Pajak</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Air Bawah Tanah</li>
                </ol>
            </nav>
        </div>
        <h3 class="fw-bold fs-1 mt-3">Pajak Air Bawah Tanah</h3>
        <div class="container my-4">
            <div class="card shadow py-4 px-3">
                <h4 class="fw-bold">Peraturan xxx</h4>
                <p>PBB adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat quam ullam, nobis qui esse
                    deserunt rerum facere non velit alias.</p>
                <div class="accordion my-3" id="accordionPanelsStayOpenExample">
                    @component('components.pajak.accordion-item')
                        @slot('title')
                            Objek Pajak
                        @endslot

                        @slot('target')
                            pbb-objek
                        @endslot

                        @slot('description')
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                            excepturi architecto inventore dicta vero?
                        @endslot
                    @endcomponent

                    @component('components.pajak.accordion-item')
                        @slot('title')
                            Subjek Pajak
                        @endslot

                        @slot('target')
                            pbb-subjek
                        @endslot

                        @slot('description')
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                            excepturi architecto inventore dicta vero?
                        @endslot
                    @endcomponent

                    @component('components.pajak.accordion-item')
                        @slot('title')
                            Wajib Pajak
                        @endslot

                        @slot('target')
                            pbb-wajib
                        @endslot

                        @slot('description')
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                            excepturi architecto inventore dicta vero?
                        @endslot
                    @endcomponent

                    @component('components.pajak.accordion-item')
                        @slot('title')
                            Dasar Pengenaan Pajak
                        @endslot

                        @slot('target')
                            pbb-dasar
                        @endslot

                        @slot('description')
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                            excepturi architecto inventore dicta vero?
                        @endslot
                    @endcomponent

                    @component('components.pajak.accordion-item')
                        @slot('title')
                            Tarif Pajak
                        @endslot

                        @slot('target')
                            pbb-tarif
                        @endslot

                        @slot('description')
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                            excepturi architecto inventore dicta vero?
                        @endslot
                    @endcomponent

                    @component('components.pajak.accordion-item')
                        @slot('title')
                            Cara Perhitungan Pajak
                        @endslot

                        @slot('target')
                            pbb-cara-perhitungan
                        @endslot

                        @slot('description')
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                            excepturi architecto inventore dicta vero?
                        @endslot
                    @endcomponent

                    @component('components.pajak.accordion-item')
                        @slot('title')
                            Masa Pajak
                        @endslot

                        @slot('target')
                            pbb-masa
                        @endslot

                        @slot('description')
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                            excepturi architecto inventore dicta vero?
                        @endslot
                    @endcomponent

                    @component('components.pajak.accordion-item')
                        @slot('title')
                            Saat Terutang Pajak
                        @endslot

                        @slot('target')
                            pbb-saat-terutang
                        @endslot

                        @slot('description')
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                            excepturi architecto inventore dicta vero?
                        @endslot
                    @endcomponent

                </div>
            </div>
        </div>
    </div>
    {{-- end of Content --}}
@endsection
