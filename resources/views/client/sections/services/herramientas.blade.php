<section class="container my-5">
    <div class="spacer">
        <h1 class="section-title text-center">Colaborando <span>con nosotros</span></h1>
        <h2 class="section-title text-center">Obtendrás las <span>herramientas para:</span></h2>
    </div>
    <div class="row g-4">
        @foreach(config('app.herramientas') as $index => $item)
            <div class="col-md-6 col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                            <span class="fs-1">{{ $item['icon'] }}</span>
                            <p class="mt-3 mb-0 fw-bold">{{ $item['front'] }}</p>
                        </div>
                        <div class="flip-card-back d-flex align-items-center justify-content-center {{ $index % 2 == 0 ? 'bg-blue' : 'bg-burgundy' }}">
                            <p class="mb-0 px-3">{{ $item['back'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<style>
    /* Diseño general de la tarjeta */
    .flip-card {
        perspective: 1000px;
        width: 100%;
        height: 200px;
    }

    .flip-card-inner {
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 0.6s;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: background 0.3s ease-in-out;
    }

    /* Fondo de la parte frontal */
    .flip-card-front {
        background: #FFF;
        color: #333;
        text-align: center;
        padding: 20px;
        border: 1px solid #ddd;
    }

    /* Fondos alternos en la parte trasera */
    .flip-card-back {
        text-align: center;
        padding: 20px;
        transform: rotateY(180deg);
        border: 1px solid #ddd;
    }
    .flip-card-back p{
        color: #fff; /* Texto en blanco */
    }

    .bg-blue {
        background: #15396D; /* Azul oscuro */
    }

    .bg-burgundy {
        background: #6C1947; /* Vino oscuro */
    }

    /* Efecto de sombra al hacer hover */
    .flip-card:hover .flip-card-front {
        background: #e3f2fd; /* Azul pastel */
    }
</style>
