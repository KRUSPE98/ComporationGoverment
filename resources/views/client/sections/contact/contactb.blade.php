@extends('client.layout.layout')
@section('title')
Nosotros
@endsection

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<section id="contact" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-header text-center mb-4" data-aos="fade-down" data-aos-duration="800">
            <h2 class="text-muted">Contáctanos</h2>
        </div>
        <div class="row align-items-center contact-information">
            <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Dirección</h3>
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
                        <h3>Teléfonos</h3>
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
                        <h3>Correo Electrónico</h3>
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
                        <h3>Redes Sociales</h3>
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

        <div class="section-header text-center mb-4" data-aos="fade-up" data-aos-duration="3000">
            <h2 class="text-muted">Solicita tu diagnóstico</h2>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
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
