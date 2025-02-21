<!-- Small Services -->
<section class="custom-section" id="agri-food">
    <div class="container">

        @component('client.sections.principal.video')
        @endcomponent

        <h2 class="section-title">Sector <span>Agroalimentario</span></h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="custom-card">
                    <img src="{{asset('images/sections/agrifood/agri-percentage.jpg')}}" class="card-img-top" alt="Imagen 1">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Análisis Generacional</h5>
                        <p class="custom-card-text">Más del 90 % de las empresas agroalimentarias son familiares, pero
                            solo el 30 % logra pasar a la siguiente generación.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="custom-card">
                    <img src="{{asset('images/sections/agrifood/agri-lands.jpg')}}" class="card-img-top" alt="Imagen 2">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Gobernanza Empresarial</h5>
                        <p class="custom-card-text">La tenencia de tierras y la interacción entre los subsistemas
                            familia, empresa y propiedad son esenciales en este sector.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="custom-card">
                    <img src="{{asset('images/sections/agrifood/agri-management.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Resolución de Conflictos</h5>
                        <p class="custom-card-text">Los conflictos no gestionados entre familia y empresa representan el
                            mayor reto para la continuidad de estas empresas.</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="custom-card">
                    <img src="{{asset('images/sections/agrifood/agri-practices.jpg')}}" class="card-img-top" alt="Imagen 4">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Profesionalización</h5>
                        <p class="custom-card-text">La adopción de prácticas profesionales y de gobernanza es clave para
                            garantizar la sostenibilidad empresarial.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Texto adicional -->
        <div class="additional-text-container">
            <div class="additional-text">
                En <span class="additional-highlight">{{env('APP_NAME')}}</span>, gestionamos el fuego de la empresa familiar
                agroalimentaria para que no incendie la relación entre la empresa y la familia, contribuyendo con su
                continuidad generacional y su permanencia en el mercado.
            </div>
        </div>
    </div>
</section>
<!-- end of small Services -->
