<div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
            {!! $item['icon'] !!}
            <p class="mt-3 mb-0 fw-bold">{{ $item['front'] }}</p>
            <span class="click-container">
                <i class="bi bi-hand-index-thumb fs-1 text-warning click-icon"></i>
                <span class="click-text">Clic</span>
            </span>
        </div>
        <div class="flip-card-back d-flex align-items-center justify-content-center {{ $background }}">
            <p class="mb-0 px-3">{{ $item['back'] }}</p>
        </div>
    </div>
</div>
