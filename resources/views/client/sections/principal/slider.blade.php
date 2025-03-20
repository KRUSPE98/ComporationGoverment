<section class="slider-container">
    <div class="owl-carousel owl-theme">
        <div class="slide slide-1" style="background-image: url('{{ asset('images/slider/level-br.jpeg') }}');">
            <div class="overlay"></div>
            <div class="slider-text-wrapper animate__animated animate__fadeInDown">
                <h2 class="big">Click aquí...</h2>
                <p class="small animate__animated animate__fadeInUp">Y evalúa tu nivel de </p>
                <a href="#agri-food" class="btn animate__animated animate__zoomIn">Gobernanza familiar</a>
                <a href="#agri-food" class="btn animate__animated animate__zoomIn">Gobierno corporativo</a>
                <a href="#agri-food" class="btn animate__animated animate__zoomIn">Desarrollo organizacional</a>
                <p class="small animate__animated animate__fadeInUp">que tiene tu empresa familiar agroalimentaria.</p>
            </div>
        </div>
        <div class="slide slide-2" style="background-image: url('{{ asset('images/slider/services-br.jpeg') }}');">
            <div class="overlay"></div>
            <div class="slider-text-wrapper animate__animated animate__fadeInDown">
                <h2 class="big">Conoce Nuestros Servicios</h2>
                <p class="small animate__animated animate__fadeInUp">Realizamos un diagnostico para detectar áreas de oportunidad de tu empresa y te proponemos un plan acorde a tus necesidades, expectativas y recursos...</p>
                <a href="{{ route('services') }}#history" class="btn animate__animated animate__zoomIn">Leer más...</a>
            </div>
        </div>
        <div class="slide slide-3" style="background-image: url('{{ asset('images/slider/benefits-br.jpeg') }}');">
            <div class="overlay"></div>
            <div class="slider-text-wrapper animate__animated animate__fadeInDown">
                <h2 class="big">Descubre los beneficios de colaborar con nosotros</h2>
                <ul class="small">
                    <li>Armonía familiar y empresarial</li>
                    <li>Suseción generacional sana y efectiva</li>
                    <li>Transparencia en la gestión familiar y empresarial...</li>
                </ul>
                <a href="{{ route('services') }}" class="btn animate__animated animate__zoomIn">Leer más...</a>
            </div>
        </div>
    </div>
    <button class="custom-prev">&#10094;</button>
    <button class="custom-next">&#10095;</button>
</section>



