@extends('client.layout.layout')
@section('title')
Servicios
@endsection

@section('content')
@component('client.sections.abouts.presentation')
@endcomponent
<link rel="stylesheet" href="{{asset('css/principal/video.css?v='.time())}}">
<section id="history" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-muted">¿Qué nos caracteriza?</h2>
            <h3 class="section-subheading text-muted"></h3>

            <img src="assets/img/corporativas/fondo-bolas.png" alt="">
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image" data-aos="flip-right">
                    <i class="fa-solid fa-scale-balanced balance-1"></i>
                </div>
                <div class="timeline-panel" data-aos="fade-right" data-aos-duration="2000">
                    <div class="timeline-heading">
                        <h4 class="subheading">Desarrollo organizacional</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Implementamos estructuras organizacionales y organizativas acordes a tus necesidades; capacitamos y desarrollamos a tus colaboradores; te ayudamos a delimitar funciones, roles y responsabilidades; y contribuimos a la estandarización de tus procesos para la eficiencia organizacional y el bienestar de la agroempresa familiar.</p></div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-image" data-aos="flip-right">
                    <i class="fa-solid fa-handshake"></i>

                </div>
                <div class="timeline-panel" data-aos="fade-right" data-aos-duration="2000">
                    <div class="timeline-heading">
                        <h4 class="subheading">Gobernanza familiar</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Implementamos prácticas y órganos de gobierno acorde a tus necesidades que te permiten establecer hábitos y canales de comunicación e información transparentes entre los miembros de la familia, te ayudamos a establecer un protocolo familiar y contribuimos a la resolución efectiva de conflictos evitando que estos traspasen las barreras hacia la agroempresa, planificando una sucesión generacional sana y adecuada.</p></div>
                </div>
            </li>

            <li>
                <div class="timeline-image" data-aos="flip-right">
                    <i class="fa-solid fa-scale-balanced balance-1"></i>
                </div>
                <div class="timeline-panel" data-aos="fade-right" data-aos-duration="2000">
                    <div class="timeline-heading">
                        <h4 class="subheading">Gobierno corporativo</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Implementamos prácticas y órganos de gobierno acorde a tus necesidades que permitan regular la estructura y el funcionamiento de la agroempresa, definiendo reglas para la toma de decisiones estratégicas y operativas, de dirección, control y de gestión a través de la transparencia, la responsabilidad y la rendición de cuentas.</p></div>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection
