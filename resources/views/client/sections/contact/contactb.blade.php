@extends('client.layout.layout')
@section('title','Contacto')
@section('meta_description', 'Contáctanos para obtener más información sobre cómo podemos ayudarte con nuestros servicios de consultoría y capacitación.')
@section('custom-links')

<link rel="canonical" href="https://profesionalizacionagroempresarial.com/contacto" />


<meta property="og:title" content="Contacto | Consultoría en Gobernanza Familiar Corporativa" />
<meta property="og:description" content="¿Querés transformar la gestión de tu agroempresa? Contactanos y descubrí cómo podemos ayudarte." />
<meta property="og:image" content="https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png" />
<meta property="og:url" content="https://profesionalizacionagroempresarial.com/contacto" />
<meta property="og:type" content="website" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Contacto | Consultoría en Gobernanza Familiar Corporativa" />
<meta name="twitter:description" content="Escribinos para conocer cómo trabajar juntos en la profesionalización de tu empresa familiar." />
<meta name="twitter:image" content="https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png" />


<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "url": "https://profesionalizacionagroempresarial.com/contacto",
        "name": "Contacto - Consultoría y Capacitación en Gobernanza Familiar Corporativa",
        "description": "En esta página, podrás encontrar toda la información para contactar con nosotros, ya sea por teléfono, correo electrónico o redes sociales.",
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "+52-221-345-8714",
                "contactType": "customer support",
                "areaServed": "MX",
                "availableLanguage": "es"
            },
            {
                "@type": "ContactPoint",
                "telephone": "+52-551-836-5601",
                "contactType": "customer support",
                "areaServed": "MX",
                "availableLanguage": "es"
            },
            {
                "@type": "ContactPoint",
                "email": "profesionalizacion.cgf@gmail.com",
                "contactType": "customer support",
                "areaServed": "MX",
                "availableLanguage": "es"
            }
        ],
        "sameAs": [
            "https://www.facebook.com/Gobernanza.familiar",
            "https://www.instagram.com/gobernanza.familiar/",
            "https://www.tiktok.com/@gobernanza.familiar",
            "https://www.youtube.com/@gobernanza.familiar"
        ],
        "logo": "https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png"
    }
</script>


@endsection


@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<section id="contact" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="section-title spacer text-center" data-aos="fade-down" data-aos-duration="800">Contáctanos</h1>
        <div class="row align-items-center contact-information" id="sectionIcons">
            <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h2>Dirección</h2>
                        <p class="text-muted">{{config('app.contacts.address')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h2>Teléfonos</h2>
                        <p class="text-muted">{!! nl2br(str_replace(' / ', "\n", config('app.contacts.phone'))) !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1200">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h2>Correo Electrónico</h2>
                        <p class="text-muted">{{config('app.contacts.email')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1400">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="contact-text">
                        <h2>Redes Sociales</h2>
                        <div class="contact-social">
                            <a class="HOVER custom-btn btn btn-floating" href="{{config('app.urls.socialMedia.fb')}}" target="_blank" rel="noopener noreferrer" role="button">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="HOVER custom-btn btn btn-floating" href="{{config('app.urls.socialMedia.yt')}}" target="_blank" rel="noopener noreferrer" role="button">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a class="HOVER custom-btn btn btn-floating" href="{{config('app.urls.socialMedia.ig')}}" target="_blank" rel="noopener noreferrer" role="button">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="HOVER custom-btn btn btn-floating" href="{{config('app.urls.socialMedia.tt')}}" target="_blank" rel="noopener noreferrer" role="button">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="section-title spacer text-center" data-aos="fade-up" data-aos-duration="3000" id="contact-form">Solicita tu&nbsp;<span>diagnóstico</span>,&nbsp;un <span>servicio específico</span>&nbsp;o déjanos un &nbsp;<span>comentario</span>.</h1>

        <div class="row justify-content-center spacer">
            <div class="col-md-8 col-md-offset-2 contact-form">
                <div id="form_status"></div>
                <form id="fruitkha-contact">
                    @csrf
                    <div class="row">
                        <div class="col-md-4" data-aos="fade-right" data-aos-duration="3000">
                            <input class="form-control" id="name" name="name" placeholder="Nombre Completo" type="text">
                        </div>
                        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="3000">
                            <input class="form-control" id="email" name="email" placeholder="Correo Electrónico" type="email">
                        </div>
                        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="3000">
                            <input class="form-control" id="phone" name="phone" placeholder="Número de Teléfono" type="text">
                        </div>
                        <div class="col-md-12" data-aos="zoom-in" data-aos-duration="3000">
                            <textarea class="form-control" id="message" name="message" rows="7" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col-md-12 text-center" data-aos="flip-left" data-aos-duration="1200">
                            <button id="sendInformation" class="btn btn-green" type="button">Enviar Mensaje</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
</section>

@endsection
