<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/partials/nav/CGF-logo-26.png')}}" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" style="margin-left: 2vw;" id="navbarNav">

                <ul class="navbar-nav align-items-center">
                    <li class="nav-item page_home">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item page_nosotros">
                        <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item page_services">
                        <a class="nav-link" href="{{ url('/services') }}">Servicios</a>
                    </li>
                    <li class="nav-item page_contacto">
                        <a class="nav-link" href="{{ url('/contacto') }}">Contáctanos</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <button type="button" class="btn btn-sm btn-outline-light px-3 py-2 fw-bold rounded-pill" data-bs-toggle="modal" data-bs-target="#questionnaireModal" style="border-color: #e2a053; color: #e2a053;">
                            <i class="bi bi-journal-check me-1"></i> Autodiagnóstico
                        </button>
                    </li>
                </ul>

            </div>

        </div>

    </nav>
</header>
