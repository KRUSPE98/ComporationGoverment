<section class="container my-5" id="tools">
    <div class="spacer">
        <h1 class="section-title text-center">Colaborando <span>con nosotros</span></h1>
        <h2 class="section-title text-center">Obtendrás las <span>herramientas para:</span></h2>
    </div>
    <div class="row g-4">
        @foreach(config('app.herramientas') as $index => $item)
            <div class="col-md-6 col-lg-4">
                <x-flipcard
                    :item=$item
                    :background="$index % 2 == 0 ? 'bg-blue' : 'bg-burgundy'"
                />
            </div>
        @endforeach
    </div>
</section>

