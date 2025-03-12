<section id="about" class="section py-5">
    <div class="container" data-aos="fade-up" data-aos-duration="3000">

        <!-- 1️⃣ Introducción -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card p-5 shadow-sm bg-light border-0">
                    <h2 class="fw-bold text-dark mb-4">Consultoría y Capacitación en Gobernanza Familiar Corporativa</h2>
                    <p class="text-dark lh-lg text-start">
                        «Consultoría y capacitación en gobernanza familiar corporativa» inició sus actividades en el año 2014 atendiendo a micros,
                        pequeñas y medianas empresas familiares de diferentes sectores económicos en temas de desarrollo organizacional,
                        implementando estrategias y técnicas para mejorar sus procesos, sus estructuras organizacionales, el reclutamiento de personal,
                        la comunicación, el liderazgo y el desarrollo profesional de las familias fundadoras y de sus colaboradores.
                    </p>
                    <p class="text-dark lh-lg text-start">
                        En el año 2023, se suman a sus actividades principales la implementación de prácticas de gobernanza familiar y de gobierno corporativo,
                        como una forma integral de atender la profesionalización total de las empresas, la toma de decisiones estratégicas y el control, la evaluación
                        y la regulación de la participación de la familia en la organización.
                    </p>
                    <p class="text-dark lh-lg text-start">
                        Así mismo, especializa su atención a micros, pequeñas y medianas empresas familiares del sector agroalimentario en México.
                    </p>
                </div>
            </div>
        </div>

        <!-- 2️⃣ Misión y Visión (Hover con Transformación) -->
        <div class="row justify-content-center my-5">
            <div class="col-md-5 mb-4 mb-md-0" data-aos="fade-up" data-aos-duration="4000">
                <div class="mission-card card shadow border-0">
                    <div class="content">
                        <div class="icon-container">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Misión</h4>
                    </div>
                    <p class="mission-text">
                        Somos una empresa de consultoría mexicana especializada en la profesionalización de empresas familiares del sector agroalimentario del país,
                        a través de la implementación de gobernanza familiar, gobierno corporativo y desarrollo organizacional...
                    </p>
                </div>
            </div>
            <div class="col-md-5" data-aos="fade-up" data-aos-duration="4000">
                <div class="vision-card card shadow border-0">
                    <div class="content">
                        <div class="icon-container">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Visión</h4>
                    </div>
                    <p class="vision-text">
                        Ser la empresa consultora líder en México especializada en el desarrollo y profesionalización de empresas familiares del sector agroalimentario,
                        otorgando servicios de alta calidad, aprovechando las innovaciones disponibles y respaldado por los resultados de nuestros clientes.
                    </p>
                </div>
            </div>
        </div>

        <!-- 3️⃣ Información del Fundador -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="founder-info p-5 bg-light border rounded shadow-sm">
                    <h4 class="fw-bold mb-2 text-start">Gustavo Solís</h4>
                    <p class="small text-muted mb-3 text-start">Socio Fundador</p>
                    <p class="text-dark lh-lg small text-start">
                        Ingeniero agroindustrial egresado de la Universidad Autónoma Chapingo (UACh) y licenciado en Psicología con profundización en el ámbito organizacional por la Universidad Nacional Autónoma de México (UNAM),
                        actualmente maestrante de la Maestría en Estrategia Agroempresarial de la UACh.
                    </p>
                    <p class="text-dark lh-lg small text-start">
                        Cuenta con estudios complementarios en terapia cognitivo-conductual, habilidades gerenciales, coaching empresarial y desarrollo organizacional.
                    </p>
                    <p class="text-dark lh-lg small text-start">
                        En el sector público, se desempeñó por 7 años como Jefe de Evaluación de Proyectos y por 3 años como Jefe del Laboratorio Central de Referencia en la Secretaría de Agricultura y Desarrollo Rural.
                    </p>
                    <p class="text-dark lh-lg small text-start">
                        En el sector social ha participado como asesor y capacitador con diferentes grupos de productores del sector agroalimentario y desde hace 10 años se ha desempeñado como consultor empresarial independiente.
                    </p>
                </div>
            </div>
        </div>

    </div> <!-- End container -->
</section>

<style>
    /* Diseño de las Tarjetas de Misión y Visión */
    .mission-card, .vision-card {
        color: #fff;
        text-align: center;
        border-radius: 10px;
        transition: all 0.5s ease-in-out;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    /* Fondos de las tarjetas */
    .mission-card {
        background-color: #6C1947;
    }

    .vision-card {
        background-color: #15396D;
    }

    /* Icono y título grandes por defecto */
    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: transform 0.4s ease-in-out, font-size 0.4s ease-in-out;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
    }

    .icon-container {
        font-size: 60px;
        margin-bottom: 15px;
    }

    h4 {
        font-size: 32px;
        margin: 0;
    }

    /* Ocultar el texto por defecto */
    .mission-text, .vision-text {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
        visibility: hidden;
        font-size: 16px;
        padding: 15px;
    }

    /* Efecto Hover - Transformación */
    .mission-card:hover, .vision-card:hover {
        background-color: white;
        color: black;
    }

    .mission-card:hover .content,
    .vision-card:hover .content {
        transform: translateY(-90%);
        font-size: 20px;
    }

    .mission-card:hover .icon-container,
    .vision-card:hover .icon-container {
        font-size: 30px;
    }

    .mission-card:hover .mission-text,
    .vision-card:hover .vision-text {
        opacity: 1;
        transform: translateY(0);
        visibility: visible;
    }
</style>
