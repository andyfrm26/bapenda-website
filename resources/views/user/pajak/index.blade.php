@extends('layouts.main')

@section('content')
    {{-- @component('components.coming-soon')
    @endcomponent --}}
    <div class="pajak py-3 min-vh-100 text-center">
        <div class="container text-start mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pajak</li>
                </ol>
            </nav>
        </div>
        <h3 class="fw-bold fs-1 mt-3">Jenis-jenis Pajak</h3>

        <div class="container-md mt-4">
            <div class="accordion shadow mx-auto my-4 pajak__accordion" id="accordionPanelsStayOpenExample">
                {{-- PBB --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Pajak Bumi dan Bangunan - Perdesaan dan Perkotaan (PBB - P2)
                    @endslot

                    @slot('target')
                        pbb
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
                {{-- BPHTB --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Bea Perolehan Hak atas Tanah dan Bangunan (BPHTB)
                    @endslot

                    @slot('target')
                        bphtb
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
                {{-- Pajak Pajak Hotel --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Pajak Hotel
                    @endslot

                    @slot('target')
                        hotel
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
                {{-- Pajak Restoran --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Pajak Restoran
                    @endslot

                    @slot('target')
                        restoran
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
                {{-- Pajak Hiburan --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Pajak Hiburan
                    @endslot

                    @slot('target')
                        hiburan
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
                {{-- Pajak Reklame --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Pajak Reklame
                    @endslot

                    @slot('target')
                        reklame
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
                {{-- Pajak Penerangan Jalan --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Pajak Penerangan Jalan
                    @endslot

                    @slot('target')
                        penerangan
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
                {{-- Pajak Parkir --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Pajak Parkir
                    @endslot

                    @slot('target')
                        parkir
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
                {{-- Pajak Air Bawah Tanah --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Pajak Air Bawah Tanah
                    @endslot

                    @slot('target')
                        air
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
                {{-- Pajak Mineral --}}
                @component('components.pajak.accordion-item-2')
                    @slot('title')
                        Pajak Mineral
                    @endslot

                    @slot('target')
                        mineral
                    @endslot

                    @slot('description')
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto et fuga nesciunt est harum mollitia
                        excepturi architecto inventore dicta vero?
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
