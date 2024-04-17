{{-- Accordion item --}}
<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
            data-bs-target="{{ '#' . $target }}" aria-expanded="true" aria-controls="{{ $target }}">
            {{ $title }}
        </button>
    </h2>
    <div id="{{ $target }}" class="accordion-collapse collapse">
        <div class="accordion-body">
            <p>{{ $description }}</p>
        </div>
    </div>
</div>
