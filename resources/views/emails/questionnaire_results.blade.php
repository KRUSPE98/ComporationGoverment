<div style="font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
    <h2 style="color: #6a1b4d; border-bottom: 2px solid #6a1b4d; padding-bottom: 8px;">
        Resumen de Autodiagnóstico de Empresa Familiar
    </h2>

    <p>Se han recibido las respuestas del autodiagnóstico para la empresa: <strong>{{ $data['company_name'] ?? 'N/A' }}</strong>.</p>

    <!-- INFORMACIÓN DE CONTACTO -->
    <div style="background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
        <h3 style="color: #6a1b4d; margin-top: 0;">👤 Información de Contacto</h3>
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 6px; font-weight: bold; width: 35%;">Nombre:</td>
                <td style="padding: 6px;">{{ $data['full_name'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Correo Electrónico:</td>
                <td style="padding: 6px;">{{ $data['email'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Teléfono de Contacto:</td>
                <td style="padding: 6px;">{{ $data['phone'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Cargo en la Empresa:</td>
                <td style="padding: 6px;">{{ $data['position'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Relación con la Empresa:</td>
                <td style="padding: 6px;">
                    {{ $data['company_relationship'] ?? 'N/A' }}
                    @if(!empty($data['company_relationship_other']))
                        ({{ $data['company_relationship_other'] }})
                    @endif
                </td>
            </tr>
        </table>
    </div>

    <!-- INFORMACIÓN DE LA EMPRESA -->
    <div style="background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
        <h3 style="color: #6a1b4d; margin-top: 0;">🏢 Información de la Empresa</h3>
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 6px; font-weight: bold; width: 35%;">Nombre de la Empresa:</td>
                <td style="padding: 6px;">{{ $data['company_name'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Ubicación:</td>
                <td style="padding: 6px;">{{ $data['location'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Años en el Mercado:</td>
                <td style="padding: 6px;">{{ $data['years_in_market'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Número de Colaboradores:</td>
                <td style="padding: 6px;">{{ $data['employees_count'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Familiares con Cargo:</td>
                <td style="padding: 6px;">{{ $data['family_members_count'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Productos / Servicios:</td>
                <td style="padding: 6px;">{{ $data['products_services'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px; font-weight: bold;">Generaciones Interactuando:</td>
                <td style="padding: 6px;">
                    {{ $data['generations_interacting'] ?? 'N/A' }}
                    @if(!empty($data['generations_other']))
                        ({{ $data['generations_other'] }})
                    @endif
                </td>
            </tr>
        </table>
    </div>

    <!-- EVALUACIÓN PARTE 1 -->
    @if(isset($structure['sections']['part1']['questions']))
    <div style="margin-bottom: 25px;">
        <h3 style="color: #6a1b4d; border-bottom: 1px solid #ddd; padding-bottom: 5px;">
            AUTODIAGNÓSTICO PARTE 1: La Dinámica Familiar
        </h3>
        <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
            <thead>
                <tr style="background-color: #6a1b4d; color: #fff;">
                    <th style="padding: 8px; text-align: left; width: 85%;">Afirmación</th>
                    <th style="padding: 8px; text-align: center; width: 15%;">Calificación (1-10)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($structure['sections']['part1']['questions'] as $qNum => $qText)
                <tr style="border-bottom: 1px solid #eee; background-color: {{ $loop->even ? '#fdfdfd' : '#fff' }};">
                    <td style="padding: 8px; font-size: 13px;">{{ $qNum }}. {{ $qText }}</td>
                    <td style="padding: 8px; text-align: center; font-weight: bold; color: #111;">
                        {{ $data['part1_q' . $qNum] ?? '0' }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

    <!-- EVALUACIÓN PARTE 2 -->
    @if(isset($structure['sections']['part2']['questions']))
    <div style="margin-bottom: 25px;">
        <h3 style="color: #6a1b4d; border-bottom: 1px solid #ddd; padding-bottom: 5px;">
            AUTODIAGNÓSTICO PARTE 2: La Dinámica Empresarial
        </h3>
        <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
            <thead>
                <tr style="background-color: #6a1b4d; color: #fff;">
                    <th style="padding: 8px; text-align: left; width: 85%;">Afirmación</th>
                    <th style="padding: 8px; text-align: center; width: 15%;">Calificación (1-10)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($structure['sections']['part2']['questions'] as $qNum => $qText)
                <tr style="border-bottom: 1px solid #eee; background-color: {{ $loop->even ? '#fdfdfd' : '#fff' }};">
                    <td style="padding: 8px; font-size: 13px;">{{ $qNum }}. {{ $qText }}</td>
                    <td style="padding: 8px; text-align: center; font-weight: bold; color: #111;">
                        {{ $data['part2_q' . $qNum] ?? '0' }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

    <!-- EVALUACIÓN PARTE 3 -->
    @if(isset($structure['sections']['part3']['questions']))
    <div style="margin-bottom: 25px;">
        <h3 style="color: #6a1b4d; border-bottom: 1px solid #ddd; padding-bottom: 5px;">
            AUTODIAGNÓSTICO PARTE 3: El Desarrollo Organizacional
        </h3>
        <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
            <thead>
                <tr style="background-color: #6a1b4d; color: #fff;">
                    <th style="padding: 8px; text-align: left; width: 85%;">Afirmación</th>
                    <th style="padding: 8px; text-align: center; width: 15%;">Calificación (1-10)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($structure['sections']['part3']['questions'] as $qNum => $qText)
                <tr style="border-bottom: 1px solid #eee; background-color: {{ $loop->even ? '#fdfdfd' : '#fff' }};">
                    <td style="padding: 8px; font-size: 13px;">{{ $qNum }}. {{ $qText }}</td>
                    <td style="padding: 8px; text-align: center; font-weight: bold; color: #111;">
                        {{ $data['part3_q' . $qNum] ?? '0' }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

    <div style="margin-top: 30px; font-size: 12px; color: #777; border-top: 1px solid #eee; padding-top: 10px; text-align: center;">
        Este reporte fue generado automáticamente por el sistema de Autodiagnóstico CGF.
    </div>
</div>
