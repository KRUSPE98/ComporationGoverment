@extends('client.layout.layout')
@section('title')
Nosotros
@endsection

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- page-header -->
        <!-- <section id="page-header" class="parallax">
            <div class="overlay"></div>
             <div class="container">
                 <h1>Conctacto</h1> -->
                 <!--Start Breadcrumb-->
                 <!-- <div class="breadcrumb">
                     <ul>
                         <li>
                             <a href="index.html">Home</a>
                         </li>
                         <li>
                             <a href="us.html">Blog</a>
                         </li>
                         <li class="current">
                             <a href="us.html">Blog Post</a>
                         </li>
                     </ul>
                 </div> -->
                 <!--End Breadcrumb-->
             <!-- </div>
         </section> -->

    <!-- contact form -->
	<!-- <div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Have you any question?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <input type="text" placeholder="Name" name="name" id="name">
                                    </p>
                                    <p>
                                        <input type="email" placeholder="Email" name="email" id="email">
                                    </p>
                                    <p>
                                        <input type="tel" placeholder="Phone" name="phone" id="phone">
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							        <input type="hidden" name="token" value="FsWga4&@f6aw" />
                                </div>
                            </div>
							
                            
							
							<p><input type="submit" value="Enviar mensaje"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4 aling-items">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Shop Address</h4>
							<p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

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
                            <p class="text-muted">Texto para ilustrar la dirección de la organización</p>
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
                            <p class="text-muted">+52 222 222222</p>
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
                            <p class="text-muted">contacto@example.com</p>
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

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-md-offset-2 contact-form">        

                        <div id="form_status"></div>
                        <form id="contact-form" método="POST">
                        @csrf    
                        <div class="row">

<div class="col-md-4" data-aos="fade-right" data-aos-duration="3000">
    <input class="form-control" id="Name" placeholder="Nombre Completo" type="text">
</div>
<div class="col-md-4" data-aos="zoom-in" data-aos-duration="3000">
    <input class="form-control" id="Email" placeholder="Correo Electrónico" type="email">
</div>
<div class="col-md-4" data-aos="zoom-in" data-aos-duration="3000">
    <input class="form-control" id="Phone" placeholder="Número de Telefono" type="number">
</div>
<div class="col-md-12" data-aos="zoom-in" data-aos-duration="3000">
    <textarea class="form-control" id="Message" rows="7" placeholder="Mensaje"></textarea>
</div>
<div class="col-md-12 text-center" data-aos="flip-left" data-aos-duration="1200">
    <button id="sendInformation" class="btn btn-green">Enviar Mensaje</button>
</div>

    
</div>
                        </form>

                        <!-- <div class="row">

                            <div class="col-md-4" data-aos="fade-right" data-aos-duration="3000">
                                <input class="form-control" id="Name" placeholder="Nombre Completo" type="text">
                            </div>
                            <div class="col-md-4" data-aos="zoom-in" data-aos-duration="3000">
                                <input class="form-control" id="Email" placeholder="Correo Electrónico" type="email">
                            </div>
                            <div class="col-md-4" data-aos="zoom-in" data-aos-duration="3000">
                                <input class="form-control" id="Phone" placeholder="Número de Telefono" type="number">
                            </div>
                            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="3000">
                                <textarea class="form-control" id="Message" rows="7" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="col-md-12 text-center" data-aos="flip-left" data-aos-duration="1200">
                                <button id="sendInformation" class="btn btn-green">Enviar Mensaje</button>
                            </div>

                                
                        </div> -->

                        

                </div>
            </div>


        </div>
    </section>
    

	<!-- end contact form -->





@endsection