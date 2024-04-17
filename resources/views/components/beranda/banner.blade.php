{{-- Banner --}}
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        @php $i = 0; @endphp
        @foreach ($banners as $banner)
            @if (!$banner->status)
                @continue
            @endif
            <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="{{ $i }}"
                class="active" aria-current="true" aria-label="{{ 'Slide' . ++$i }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner bg-blue">
        @php $i = 0; @endphp
        @foreach ($banners as $banner)
            @if (!$banner->status)
                @continue
            @endif
            <div class="carousel-item carousel-image bg-img-1 {{ $i === 0 ? 'active' : '' }}">
                <img src="{{ asset('/storage/banner/' . $banner->image) }}" class="d-block w-100" alt="...">
            </div>
            @php $i++; @endphp
        @endforeach

        {{-- <div class="carousel-item carousel-image bg-img-2">
            <img src="{{ asset('img/hero-2.jpeg') }}" class="d-block w-100" alt="...">
        </div> --}}
        {{-- <div class="carousel-item carousel-image bg-img-3">
            <img src="{{ asset('img/hero-3.jpeg') }}" class="d-block w-100" alt="...">
        </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- end of Banner --}}
