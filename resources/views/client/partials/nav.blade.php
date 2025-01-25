<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">IT Soluciones</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" style="margin-left: 2vw;" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item page_home">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item page_nosotros">
                        <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item page_contacto">
                        <a class="nav-link" href="{{ url('/contacto') }}">Contactanos</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>
</header>
