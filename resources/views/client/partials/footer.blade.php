<footer class="bg-dark text-white">
    <div class="container p-4">

    <section class="">

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <section class="mb-4 text-about">
                    <span>
                        {{ config('app.name') }}, con domicilio en Puebla, México, es responsable del tratamiento de sus datos personales de acuerdo con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. Recabamos datos como nombre, correo electrónico, teléfono y cualquier otra información proporcionada de manera voluntaria en la sección de «contáctanos».
                    </span>
                </section>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center">
                <h5 class="text-uppercase">Contenido</h5>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <div class="media-body">
                            <i class="fas fa-square"></i>
                            <a href="{{ url('/') }}">Inicio</a>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <i class="fas fa-square"></i>
                            <a href="{{ url('/nosotros') }}">Nosotros</a>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <i class="fas fa-square"></i>
                            <a href="{{ url('/services') }}">Servicios</a>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <i class="fas fa-square"></i>
                            <a href="{{ url('/contacto') }}">Contáctanos</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center m-auto mt-0">
                {{-- <section class="mb-4"> --}}
                    <div class="row">
                        <h5 class="text-uppercase">Redes Sociales</h5>
                        <span class="p-small">Siguenos en nuestras redes sociales</span>
                    </div>

                    <a class="HOVER custom-btn btn btn-floating m-3" href="{{config('app.urls.socialMedia.fb')}}" target="_blank" role="button"
                    ><span></span><i class="fab fa-facebook-f"></i
                    ></a>

                    <a class="HOVER custom-btn btn btn-floating m-3" href="{{config('app.urls.socialMedia.yt')}}" target="_blank" role="button"
                    ><span></span>
                    {{-- <i class="fab fa-twitter"></i> --}}
                    <i class="fab fa-youtube"></i>
                    </a>

                    <a class="HOVER custom-btn btn btn-floating m-3" href="{{config('app.urls.socialMedia.tt')}}" target="_blank" role="button"
                    ><span></span>
                    {{-- <i class="fab fa-whatsapp"></i> --}}
                    <i class="fab fa-tiktok"></i>
                    </a>

                    <a class="HOVER custom-btn btn btn-floating m-3" href="{{config('app.urls.socialMedia.ig')}}" target="_blank" role="button"
                    ><span></span><i class="fab fa-instagram"></i
                    ></a>

                {{-- </section> --}}
            </div>

        </div>

    </section>

    </div>

    <div class="d-flex justify-content-around align-items-center p-2 custom-final-footer" style="background-color: rgba(0, 0, 0, 0.2);">
      <span>© {{ now()->year }} Copyright: {{env('APP_NAME')}}</span>
      <span id="seta-content">Contenido Desarrollado por:
        <a class="custom-btn no-background" href="http://82.25.85.85:8081/">
            <span></span>
            <text>© Dev Innovate Lab</text>
        </a>
      </span>
    </div>

</footer>

@section('custom-scripts')
    <script src="{{ asset('js/footer.js?v='.time())}}"></script>
@endsection


