<section class="slider-container">
    <div class="owl-carousel owl-theme">
        <div class="slide slide-1" style="background-image: url('{{ asset('images/slider/level-br.jpeg') }}');">
            <div class="overlay"></div>
            <div class="slider-text-wrapper animate__animated animate__fadeInDown">
                <h2 class="big">

                    <a href="{{ route('services') }}#diagnostico-section" class="text-white">
                        Click aquí y evalúa el nivel de profesionalización que tiene tu empresa familiar.
                    </a>

                </h2>
                {{-- <p class="small animate__animated animate__fadeInUp">Y evalúa tu nivel de </p> --}}
                {{-- <a href="{{ route('services') }}#diagnostico-section" class="btn animate__animated animate__zoomIn">Gobernanza familiar</a>
                <a href="{{ route('services') }}#diagnostico-section" class="btn animate__animated animate__zoomIn">Gobierno corporativo</a>
                <a href="{{ route('services') }}#diagnostico-section" class="btn animate__animated animate__zoomIn">Desarrollo organizacional</a>
                <p class="small animate__animated animate__fadeInUp">que tiene tu empresa familiar agroalimentaria.</p> --}}
            </div>
        </div>
        <div class="slide slide-2" style="background-image: url('{{ asset('images/slider/services-br.jpeg') }}');">
            <div class="overlay"></div>
            <div class="slider-text-wrapper animate__animated animate__fadeInDown">
                <h2 class="big">Conoce Nuestros Servicios</h2>
                <p class="small animate__animated animate__fadeInUp">Consulta nuestro catálogo, podemos ofrecerte un plan integral de profesionalización o los servicios específicos que necesites.</p>
                <a href="{{ route('services') }}#history" class="btn animate__animated animate__zoomIn">Leer más...</a>
            </div>
        </div>
        <div class="slide slide-3" style="background-image: url('{{ asset('images/slider/benefits-br.jpeg') }}');">
            <div class="overlay"></div>
            <div class="slider-text-wrapper animate__animated animate__fadeInDown">
                <h2 class="big">Descubre los beneficios de colaborar con nosotros</h2>
                <ul class="small">
                    <li>Armonía familiar y empresarial</li>
                    <li>Sucesión generacional sana y efectiva</li>
                    <li>Transparencia en la gestión familiar y empresarial...</li>
                </ul>
                <a href="{{ route('services') }}#tools" class="btn animate__animated animate__zoomIn">Leer más...</a>
            </div>
        </div>
    </div>
    <button class="custom-prev">&#10094;</button>
    <button class="custom-next">&#10095;</button>
</section>



