@extends('client.layout.layout')
@section('title')
Nosotros
@endsection


@section('content')

    <!--Start Contact-->
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
                            <p class="text-muted">Calle 5 de mayo Barrio Xaxalpa No. 4 Tochimilco Puebla</p>
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
                            <p class="text-muted">+52 244 1109059</p>
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
                            <p class="text-muted">contacto@itsolutions.com</p>
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
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-header text-center mb-4" data-aos="fade-up" data-aos-duration="3000">
                <h2 class="text-muted">Escríbenos un mensaje</h2>
            </div>
            

            <!--Start contact form-->
            <div class="row" style="width: 100%; padding-left: 20px;">
            <!-- style="width: 100%; padding-left: 20px;" -->
                <div class="col-md-2"></div>
                <div class="col-md-8 col-md-offset-2 contact-form">        

                        <div id="form_status"></div>
                        <form method="post" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                            <div class="row">
                                <div class="col-md-4" data-aos="fade-right" data-aos-duration="3000">
                                    <input class="form-control" id="name" placeholder="Nombre Completo" type="text">
                                </div>
                                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="3000">
                                    <input class="form-control" id="email" placeholder="Correo Electrónico" type="email">
                                </div>
                                <div class="col-md-4" data-aos="fade-left" data-aos-duration="3000">
                                    <input class="form-control" id="phone" placeholder="Número de Telefono" type="number">
                                </div>
                                <div class="col-md-12" data-aos="fade-up" data-aos-duration="3000">
                                    <textarea class="form-control" id="message" rows="7" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="col-md-12 text-center" data-aos="flip-left" data-aos-duration="1200">
                                    <button type="submit" class="btn btn-green">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                </div>
                <!--End contact form-->
                <!-- <div class="col-md-2"></div> -->
            </div>
                
                
        </div> <!-- /.container-->
    </section>
    <!--End Contact-->

@endsection