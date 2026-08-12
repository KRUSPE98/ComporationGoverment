<?php

return [
    'title' => 'Diagnóstico de profesionalización y gobernanza en empresas familiares',

    'intro' => [
        'welcome' => 'Desde Consultoría y Capacitación en Gobernanza Familiar Corporativa (CGF), te damos la bienvenida a este espacio creado especialmente para personas como tú —propietarios(as), fundadores(as), colaboradores(as) y partes interesadas que forman parte de una empresa familiar en el sector agroalimentario o de su cadena de valor —',
        'description' => 'Este es un ejercicio de autodiagnóstico que te ayudará a reflexionar sobre tu empresa familiar y detectar oportunidades para avanzar en su desarrollo. A través de tus respuestas podremos:',
        'benefits' => [
            'Identificar las fortalezas y áreas de mejora en la gestión empresarial y familiar.',
            'Explorar qué factores ayudan o dificultan el crecimiento sostenible de la empresa.',
            'Encontrar caminos para profesionalizar la gestión empresarial y fortalecer la gobernanza familiar.',
            'Observar los puntos de fricción (conflictos) entre la empresa y la familia; y cómo abordarlos de manera eficiente.'
        ],
        'importance_title' => '🌟 ¿Por qué es importante profesionalizar a la empresa y fortalecer la gobernanza familiar?',
        'importance_text' => 'Porque hacerlo permite construir una organización más sólida, eficiente y en armonía con su esencia familiar, lo cual se logra a través de la implementación de prácticas gerenciales que fundamenten la transparencia, la eficiencia y una estrategia alineada, así como el desarrollo de modelos de gobernanza familiar que establezcan acuerdos claros, reglas compartidas y espacios para el diálogo; fortaleciendo la cohesión y la armonía familiar-empresarial y asegurando la continuidad de la empresa familiar en el largo plazo.',
        'workflow_title' => '🛠️ ¿Cómo funciona este acompañamiento?',
        'workflow_intro' => 'Este proceso consta de tres etapas:',
        'workflow_steps' => [
            'Autodiagnóstico' => 'Todas las personas involucradas en la empresa familiar deben responder este cuestionario - ya sean integrantes de la familia que participan activamente, quienes reciben beneficios sin involucrarse directamente, y líderes (altos mandos) no familiares en caso de existir-',
            'Entrevistas personalizadas' => 'Se agendarán entrevistas, presenciales o virtuales, con cada persona involucrada en la toma de decisiones, dirección y gestión de la empresa -que previamente haya contestado el autodiagnóstico- con el objetivo de conocer la trayectoria familiar y empresarial, contrastar resultados del cuestionario y profundizar en temas claves identificados',
            'Informe y propuesta de intervención' => 'Se agendará una reunión, presencial o virtual, en donde se presentarán los hallazgos y recomendaciones, con acciones concretas, tiempos y costos definidos (propuesta de intervención), ajustado a las necesidades reales de tu empresa.'
        ]
    ],

    'privacy_notice' => [
        'title' => 'Aviso de Privacidad',
        'paragraphs' => [
            'CGF es responsable del tratamiento de sus datos personales. La información que usted comparta en este cuestionario —incluyendo datos personales y sobre su empresa— será utilizada solamente por nuestro equipo de consultores, con el fin de entender cómo funciona su empresa familiar, para fines de diagnóstico, contacto y seguimiento relacionados con nuestros servicios de profesionalización, gobernanza y mediación en empresas familiares.',
            'Sus datos serán tratados conforme a la legislación vigente y no serán compartidos con terceros sin su consentimiento (salvo en los casos legalmente previstos), y su uso es exclusivo para fines relacionados con este diagnóstico y su seguimiento.',
            'Usted tiene derecho a Acceder, Rectificar, Cancelar u Oponerse al tratamiento de sus datos personales (derechos ARCO), enviando una solicitud al correo gobernanza.familiar@gmail.com'
        ],
        'checkbox_label' => 'He leído y acepto el aviso de privacidad',
        'disclaimer' => 'Si está de acuerdo con este aviso de privacidad, le pedimos marcar la casilla “He leído y acepto el aviso de privacidad” para continuar. En caso contrario, solo cierre esta pestaña sin enviar sus respuestas.'
    ],

    'instructions' => [
        'title' => '📝 Instrucciones',
        'text' => 'En este cuestionario encontrarás varias afirmaciones relacionadas con tu empresa familiar. La idea es que las evalúes según cómo las sientas o vivas en tu día a día, usando una escala del <strong>1 (totalmente en desacuerdo)</strong> al <strong>10 (totalmente de acuerdo)</strong>.',
        'note' => '👉 No hay respuestas buenas ni malas. Lo importante es que contestes con honestidad para que el equipo de consultores pueda entender mejor la realidad de tu empresa y poderles diseñar una propuesta que realmente les funcione.',
        'mobile_title' => '📱 ¿Estás en tu celular?',
        'mobile_text' => 'Te sugerimos activar la rotación automática y colocar el teléfono en modo horizontal. Así podrás ver completa la escala del 1 al 10 sin dificultad.'
    ],

    'thanks' => [
        'title' => '🙌 Gracias por tu confianza',
        'text' => 'En Consultoría y Capacitación en Gobernanza Familiar Corporativa (CGF) valoramos profundamente tu participación. Analizaremos tus respuestas y en breve nos pondremos en contacto contigo para agendar la segunda etapa, en la que contrastaremos los resultados del cuestionario y profundizaremos en temas claves que hayamos identificado.',
        'phones' => '55 1836 5601 / 221 345 8714'
    ],

    'sections' => [
        'contact' => [
            'title' => '👤 Información de Contacto',
            'description' => 'Antes de entrar en materia, queremos saber quién está detrás de las respuestas. Esta información nos ayudará a entender mejor tu contexto y a personalizar el acompañamiento que te ofrecemos.',
            'fields' => [
                'full_name' => ['label' => 'Nombre completo', 'type' => 'text', 'required' => true],
                'email' => ['label' => 'Correo electrónico', 'type' => 'email', 'required' => true],
                'phone' => ['label' => 'Número de contacto', 'type' => 'tel', 'required' => true],
                'position' => ['label' => 'Cargo que ocupa en la empresa', 'type' => 'text', 'required' => true],
                'company_relationship' => [
                    'label' => '¿Cuál es su relación con la empresa?',
                    'type' => 'select',
                    'required' => true,
                    'options' => [
                        'Soy fundador (a)',
                        'Soy hijo (a) de la familia fundadora',
                        'Soy familiar de la familia fundadora',
                        'Trabajo en un puesto directivo de la empresa familiar pero no soy parte de la familia.',
                        'Soy parte interesada de una empresa familiar (como cliente, proveedor, inversionista, ente de crédito)',
                        'Otros'
                    ]
                ],
                'company_relationship_other' => [
                    'label' => 'Si seleccionó otros, especifique:',
                    'type' => 'text',
                    'required' => false
                ]
            ]
        ],
        'company' => [
            'title' => '🏢 Información de la Empresa',
            'description' => 'Ahora queremos saber un poco más sobre la empresa familiar a la que perteneces o de la que eres parte interesada.',
            'fields' => [
                'company_name' => ['label' => 'Nombre de la empresa', 'type' => 'text', 'required' => true],
                'location' => ['label' => 'Municipio y estado en el que se encuentra la empresa', 'type' => 'text', 'required' => true],
                'years_in_market' => ['label' => '¿Cuántos años ha estado la empresa en el mercado?', 'type' => 'number', 'required' => true],
                'employees_count' => ['label' => 'Número de colaboradores (empleados), incluyendo a familiares.', 'type' => 'number', 'required' => true],
                'family_members_count' => ['label' => 'Número de miembros familiares que ocupan un cargo en la empresa', 'type' => 'number', 'required' => true],
                'products_services' => ['label' => 'Describa brevemente qué servicios o productos ofrece la empresa familiar', 'type' => 'textarea', 'required' => true],
                'generations_interacting' => [
                    'label' => '¿Cuántas generaciones se encuentran interactuando en la empresa?',
                    'type' => 'select',
                    'required' => true,
                    'options' => [
                        'Solo la generación fundadora',
                        'La generación fundadora y la segunda generación',
                        'La generación fundadora, la segunda y tercera generación.',
                        'Otros'
                    ]
                ],
                'generations_other' => [
                    'label' => 'Si su respuesta fue "otros", por favor coloque las generaciones que interactúan:',
                    'type' => 'text',
                    'required' => false
                ]
            ]
        ],
        'part1' => [
            'title' => 'AUTODIAGNÓSTICO PARTE 1. LA DINÁMICA FAMILIAR',
            'description' => 'En esta primera parte vamos a explorar cómo se viven las relaciones familiares dentro y alrededor de la empresa. Evalúa cada afirmación de 1 a 10 (Marca 0 si no conoces la información).',
            'questions' => [
                1 => 'Los valores de todos los integrantes de la familia se encuentran alineados a la imagen y espíritu de la empresa; y el legado familiar se vive como una fuente de unión y motivación.',
                2 => 'Hay una separación clara entre los problemas de la empresa y los de la familia, es decir, las emociones personales no interfieren negativamente en los asuntos de la empresa.',
                3 => 'Hay mecanismos o espacios definidos para resolver conflictos familiares de forma constructiva.',
                4 => 'Cuando surgen conflictos en la familia, los resolvemos antes de que afecten la gestión de la empresa.',
                5 => 'Los miembros de la familia pueden expresar sus emociones, puntos de vista y necesidades de manera abierta y honesta.',
                6 => 'En la familia se discuten temas difíciles e incómodos, las decisiones importantes se dialogan y se busca consenso antes de tomar decisiones.',
                7 => 'Preservar la armonia y la unión familiar es lo más importante para la familia, aún cuando con ello se puedan perder negocios.',
                8 => 'Existe un protocolo familiar que establece las normas, políticas y procedimientos de la participación de la familia respecto a la empresa.',
                9 => 'Se da a conocer de manera periódica a todos los miembros de la familia, información relevante del desempeño y evolución empresarial.',
                10 => 'Existe una asamblea familiar que celebra reuniones con regularidad y que toma decisiones en conjunto.',
                11 => 'Existe un consejo familiar que celebra reuniones con regularidad y que toma decisiones en conjunto.',
                12 => 'Las decisiones se toman de manera compartida con la participación de diferentes miembros familiares y de diferentes generaciones (en caso de existir).',
                13 => 'La empresa está creciendo lo suficiente para soportar el ingreso de los miembros familiares a trabajar en ella.',
                14 => 'Existe un plan de sucesión generacional que se encuentra por escrito y consensado con todos los(as) interesados(as).',
                15 => 'Los miembros de la familia respetan las opiniones de los demás, incluso cuando hay desacuerdo.',
                16 => 'Se cuenta con un plan de entrenamiento para que las nuevas generaciones asuman el rol de propietarios responsables.'
            ]
        ],
        'part2' => [
            'title' => 'AUTODIAGNÓSTICO PARTE 2. LA DINÁMICA EMPRESARIAL',
            'description' => 'En esta parte del cuestionario queremos conocer cómo se gestiona y vive el día a día dentro de la empresa familiar. Evalúa cada afirmación de 1 a 10 (Marca 0 si no conoces la información).',
            'questions' => [
                1 => 'La empresa opera bajo un plan de negocio bien definido que es comunicado a todos los miembros familiares y no familiares que trabajan en ella.',
                2 => 'Existe un sistema de gestión de riesgos que nos permite hacerle frente a las emergencias/contingencias.',
                3 => 'Todos los miembros familiares entendemos el rol que cumplimos en la empresa como familia, como colaborador o como accionista.',
                4 => 'Los puestos de altos mandos de la empresa como la Dirección General, las gerencias o las direcciones son ocupados tanto por miembros familiares como por no familiares.',
                5 => 'Hay controles que permiten mantener una salud financiera adecuada.',
                6 => 'Existen indicadores claves de desempeño (KPI´s) que permiten monitorear el desempeño de las diversas áreas de la empresa.',
                7 => 'La evaluación de la información financiera se realiza de manera periódica y se toma en cuenta para la toma de decisiones.',
                8 => 'En la empresa se toman decisiones con base en criterios objetivos y técnicos, y no en vínculos familiares.',
                9 => 'Las decisiones estratégicas se analizan considerando tanto la visión empresarial como los valores familiares.',
                10 => 'Existe una junta de accionistas que celebran reuniones de manera periódica y que toman decisiones en conjunto.',
                11 => 'Existe un consejo de administración que celebran reuniones de manera periódica y que toman decisiones en conjunto.',
                12 => 'El consejo de administración cuenta con consejeros independientes.',
                13 => 'De manera anual establecemos objetivos claros para la empresa y la comunicamos a todos lo niveles.',
                14 => 'Cuando hay que tomar decisiones estratégicas sobre un tema del que no conocemos, recurrimos a personas calificadas para asesoramiento.',
                15 => 'Las finanzas de la empresa están separadas de las de la familia, es decir, la empresa no absorbe gastos que le corresponde a la familia.',
                16 => 'Hay una visión compartida entre los líderes sobre el futuro de la empresa.'
            ]
        ],
        'part3' => [
            'title' => 'AUTODIANGÓSTICO PARTE 3. EL DESARROLLO ORGANIZACIONAL',
            'description' => 'En esta sección buscamos entender cómo está estructurada tu empresa familiar, cómo se organiza el trabajo y qué tan claras son las funciones, los procesos y los canales de comunicación. Evalúa cada afirmación de 1 a 10 (Marca 0 si no conoces la información).',
            'questions' => [
                1 => 'Existe una estructura organizacional (jerarquía u organigrama) que facilita la toma de decisiones y la operación diaria.',
                2 => 'La empresa cuenta con perfiles de puestos en donde se definen los roles y responsabilidades de cada colaborador.',
                3 => 'Existen mecanismos (procedimientos, lineamientos o reglas) que determinan la forma en que los familiares ingresan a trabajar en la empresa.',
                4 => 'Los miembros familiares que trabajan en la empresa cuentan con un salario de acuerdo al nivel jerárquico ocupado y las responsabilidades del puesto, homologado a cualquier otro puesto similar ocupado por alguien no familiar.',
                5 => 'Se han establecido horarios, actividades y responsabilidades claras para todos los que trabajan en la empresa sin importar si son o no familiares.',
                6 => 'Los empleados (sean familiares o no) demuestran que tienen las capacidades, habilidades y conocimientos necesarios para el puesto que desempeñan.',
                7 => 'Existe un proceso de selección de personal transparente y las contrataciones se realizan con base en capacidades y experiencias, sin importar el parentesco familiar.',
                8 => 'Todos los colaboradores de la organización, familiares y no familiares, son evaluados y retroalimentados en su desempeño.',
                9 => 'Hay canales de comunicación internos que permiten compartir información de manera clara y oportuna.',
                10 => 'El re-trabajo es muy común, a veces tenemos que hacer la misma cosa dos o más veces hasta que sale bien.',
                11 => 'Todos los que colaboran en la empresa se sienten satisfechos y el ambiente laboral es muy agradable.',
                12 => 'Existe documentación accesible que respalda la forma en que se trabaja (manuales de procedimientos, protocolos, etc.).',
                13 => 'Existe un plan de carrera definido tanto para los familiares como para los no familiares.',
                14 => 'Cuando existe un puesto vacante y es hora de promover a alguien, lo hacemos basado en méritos y capacidades, no en lazos familiares.',
                15 => 'Se cuenta con procedimientos establecidos para las actividades clave del negocio.',
                16 => 'Constantemente estamos detectando necesidades de capacitación para estar a la vanguardia y asegurar que todos hagamos mejor nuestro trabajo.'
            ]
        ]
    ]
];
