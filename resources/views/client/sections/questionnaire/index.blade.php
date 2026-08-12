@extends('client.layout.layout')

@section('title', 'Diagnóstico de Profesionalización y Gobernanza')

@section('content')
<link rel="stylesheet" href="{{ asset('css/questionnaire.css?v='.time()) }}">

<div class="container py-5">
    <div class="text-center mb-4">
        <h2 style="color: #800020; font-weight: 700;">
            Diagnóstico de profesionalización y gobernanza en empresas familiares
        </h2>
        <p class="text-muted">Cuestionario de Autodiagnóstico CGF</p>
    </div>

    <div class="wizard-container">
        <form id="questionnaireModalForm" method="POST" action="{{ route('questionnaire.submit') }}">
            @csrf

            <!-- WIZARD STEPS NAV -->
            <div class="wizard-steps-nav">
                <div class="wizard-step-item active" data-step="1">
                    <span class="step-number">1</span>
                    <span class="step-title">Bienvenida</span>
                </div>
                <div class="wizard-step-item" data-step="2">
                    <span class="step-number">2</span>
                    <span class="step-title">Contacto</span>
                </div>
                <div class="wizard-step-item" data-step="3">
                    <span class="step-number">3</span>
                    <span class="step-title">Empresa</span>
                </div>
                <div class="wizard-step-item" data-step="4">
                    <span class="step-number">4</span>
                    <span class="step-title">Instrucciones</span>
                </div>
                <div class="wizard-step-item" data-step="5">
                    <span class="step-number">5</span>
                    <span class="step-title">Dinámica Familiar</span>
                </div>
                <div class="wizard-step-item" data-step="6">
                    <span class="step-number">6</span>
                    <span class="step-title">Dinámica Empresarial</span>
                </div>
                <div class="wizard-step-item" data-step="7">
                    <span class="step-number">7</span>
                    <span class="step-title">Desarrollo Org.</span>
                </div>
            </div>

            <!-- STEP 1: PRESENTACIÓN Y AVISO DE PRIVACIDAD -->
            <div class="wizard-step-content active" data-step="1">
                <div class="text-center mb-4">
                    <h4 style="color: #800020; font-weight: 700;">🌱 PRESENTACIÓN</h4>
                    <p class="text-dark small fw-bold mt-2" style="color: #212529 !important;">{{ $questionnaire['intro']['welcome'] }}</p>
                </div>

                <div class="card p-3 mb-4 shadow-sm border-0 bg-light">
                    <p class="mb-2">{{ $questionnaire['intro']['description'] }}</p>
                    <ul class="mb-3">
                        @foreach($questionnaire['intro']['benefits'] as $benefit)
                            <li>{{ $benefit }}</li>
                        @endforeach
                    </ul>

                    <h6 class="fw-bold mt-2" style="color: #800020;">{{ $questionnaire['intro']['importance_title'] }}</h6>
                    <p class="small text-muted mb-3">{{ $questionnaire['intro']['importance_text'] }}</p>

                    <h6 class="fw-bold mt-2" style="color: #800020;">{{ $questionnaire['intro']['workflow_title'] }}</h6>
                    <p class="small mb-2">{{ $questionnaire['intro']['workflow_intro'] }}</p>
                    <ul class="small mb-0">
                        @foreach($questionnaire['intro']['workflow_steps'] as $stepName => $stepDesc)
                            <li><strong>{{ $stepName }}:</strong> {{ $stepDesc }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="card p-3 border-warning bg-light mb-3">
                    <h6 class="text-dark font-weight-bold mb-2"><i class="bi bi-shield-lock-fill text-warning me-2"></i> {{ $questionnaire['privacy_notice']['title'] }}</h6>
                    @foreach($questionnaire['privacy_notice']['paragraphs'] as $pText)
                        <p class="small text-dark mb-2" style="color: #212529 !important;">{{ $pText }}</p>
                    @endforeach
                    <p class="small text-muted italic my-2">{{ $questionnaire['privacy_notice']['disclaimer'] }}</p>
                    <div class="mt-3 p-2 bg-white rounded border d-flex align-items-center">
                        <input class="form-check-input my-0" type="checkbox" name="privacy_accepted" value="1" id="privacy_accepted" required style="width: 20px !important; height: 20px !important; min-width: 20px !important; margin-right: 12px !important; margin-left: 0 !important; float: none !important; opacity: 1 !important; visibility: visible !important; cursor: pointer;">
                        <label class="form-check-label font-weight-bold text-dark my-0" for="privacy_accepted" style="color: #212529 !important; font-size: 0.95rem; cursor: pointer;">
                            {{ $questionnaire['privacy_notice']['checkbox_label'] }} <span class="text-danger">*</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- STEP 2: INFORMACIÓN DE CONTACTO -->
            <div class="wizard-step-content" data-step="2">
                <h5 class="mb-3" style="color: #800020; font-weight: 700;">{{ $questionnaire['sections']['contact']['title'] }}</h5>
                <p class="text-muted small mb-4">{{ $questionnaire['sections']['contact']['description'] }}</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label font-weight-bold">Nombre completo <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="full_name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label font-weight-bold">Número de contacto <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label font-weight-bold">Cargo que ocupa en la empresa <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="position" required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label font-weight-bold">¿Cuál es su relación con la empresa? <span class="text-danger">*</span></label>
                        <select class="form-select select-relationship" name="company_relationship" required data-target="#relationship_other_wrapper">
                            <option value="">-- Seleccione una opción --</option>
                            @foreach($questionnaire['sections']['contact']['fields']['company_relationship']['options'] as $opt)
                                <option value="{{ $opt }}">{{ $opt }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 d-none" id="relationship_other_wrapper">
                        <label class="form-label font-weight-bold">Especifique su relación:</label>
                        <input type="text" class="form-control" name="company_relationship_other">
                    </div>
                </div>
            </div>

            <!-- STEP 3: INFORMACIÓN DE LA EMPRESA -->
            <div class="wizard-step-content" data-step="3">
                <h5 class="mb-3" style="color: #800020; font-weight: 700;">{{ $questionnaire['sections']['company']['title'] }}</h5>
                <p class="text-muted small mb-4">{{ $questionnaire['sections']['company']['description'] }}</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label font-weight-bold">Nombre de la empresa <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="company_name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label font-weight-bold">Municipio y estado <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="location" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label font-weight-bold">Años en el mercado <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="years_in_market" required min="0">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label font-weight-bold">Número de colaboradores <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="employees_count" required min="1">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label font-weight-bold">Familiares con cargo <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="family_members_count" required min="0">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label font-weight-bold">Describa brevemente qué servicios o productos ofrece <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="products_services" rows="2" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label font-weight-bold">¿Cuántas generaciones interactúan? <span class="text-danger">*</span></label>
                        <select class="form-select select-generations" name="generations_interacting" required data-target="#generations_other_wrapper">
                            <option value="">-- Seleccione una opción --</option>
                            @foreach($questionnaire['sections']['company']['fields']['generations_interacting']['options'] as $opt)
                                <option value="{{ $opt }}">{{ $opt }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 d-none" id="generations_other_wrapper">
                        <label class="form-label font-weight-bold">Especifique las generaciones:</label>
                        <input type="text" class="form-control" name="generations_other">
                    </div>
                </div>
            </div>

            <!-- STEP 4: INSTRUCCIONES -->
            <div class="wizard-step-content" data-step="4">
                <div class="text-center mb-4">
                    <h4 style="color: #800020; font-weight: 700;">{{ $questionnaire['instructions']['title'] }}</h4>
                </div>
                <div class="instruction-alert">
                    <p class="mb-2">{!! $questionnaire['instructions']['text'] !!}</p>
                    <p class="mb-2">{{ $questionnaire['instructions']['note'] }}</p>
                    <hr>
                    <p class="mb-1 font-weight-bold"><i class="bi bi-phone me-1"></i> {{ $questionnaire['instructions']['mobile_title'] }}</p>
                    <p class="mb-0 small">{{ $questionnaire['instructions']['mobile_text'] }}</p>
                    <p class="mb-0 text-danger font-weight-bold mt-2">⚠️ IMPORTANTE: Por favor seleccione CERO (0) si no conoce la información solicitada.</p>
                </div>
                <p class="text-muted text-center">Cuando te sientas listo(a), presiona <strong>"Siguiente"</strong> para comenzar con las evaluaciones.</p>
            </div>

            <!-- STEP 5: DINÁMICA FAMILIAR -->
            <div class="wizard-step-content" data-step="5">
                <h5 class="mb-2" style="color: #800020; font-weight: 700;">{{ $questionnaire['sections']['part1']['title'] }}</h5>
                <p class="text-muted small mb-4">{{ $questionnaire['sections']['part1']['description'] }}</p>

                @foreach($questionnaire['sections']['part1']['questions'] as $qNum => $qText)
                    <div class="question-card">
                        <p class="question-text">{{ $qNum }}. {{ $qText }}</p>
                        <div class="scale-container">
                            @for($i = 0; $i <= 10; $i++)
                                <div class="scale-option">
                                    <input type="radio" id="p_part1_q{{ $qNum }}_{{ $i }}" name="part1_q{{ $qNum }}" value="{{ $i }}" {{ $i == 0 ? 'checked' : '' }}>
                                    <label for="p_part1_q{{ $qNum }}_{{ $i }}">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- STEP 6: DINÁMICA EMPRESARIAL -->
            <div class="wizard-step-content" data-step="6">
                <h5 class="mb-2" style="color: #800020; font-weight: 700;">{{ $questionnaire['sections']['part2']['title'] }}</h5>
                <p class="text-muted small mb-4">{{ $questionnaire['sections']['part2']['description'] }}</p>

                @foreach($questionnaire['sections']['part2']['questions'] as $qNum => $qText)
                    <div class="question-card">
                        <p class="question-text">{{ $qNum }}. {{ $qText }}</p>
                        <div class="scale-container">
                            @for($i = 0; $i <= 10; $i++)
                                <div class="scale-option">
                                    <input type="radio" id="p_part2_q{{ $qNum }}_{{ $i }}" name="part2_q{{ $qNum }}" value="{{ $i }}" {{ $i == 0 ? 'checked' : '' }}>
                                    <label for="p_part2_q{{ $qNum }}_{{ $i }}">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- STEP 7: DESARROLLO ORGANIZACIONAL -->
            <div class="wizard-step-content" data-step="7">
                <h5 class="mb-2" style="color: #800020; font-weight: 700;">{{ $questionnaire['sections']['part3']['title'] }}</h5>
                <p class="text-muted small mb-4">{{ $questionnaire['sections']['part3']['description'] }}</p>

                @foreach($questionnaire['sections']['part3']['questions'] as $qNum => $qText)
                    <div class="question-card">
                        <p class="question-text">{{ $qNum }}. {{ $qText }}</p>
                        <div class="scale-container">
                            @for($i = 0; $i <= 10; $i++)
                                <div class="scale-option">
                                    <input type="radio" id="p_part3_q{{ $qNum }}_{{ $i }}" name="part3_q{{ $qNum }}" value="{{ $i }}" {{ $i == 0 ? 'checked' : '' }}>
                                    <label for="p_part3_q{{ $qNum }}_{{ $i }}">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- BUTTONS -->
            <div class="wizard-buttons">
                <button type="button" class="btn btn-wizard-prev d-none" id="btnModalPrev">
                    <i class="bi bi-arrow-left me-1"></i> Anterior
                </button>
                <div></div>
                <button type="button" class="btn btn-wizard-next" id="btnModalNext">
                    Siguiente <i class="bi bi-arrow-right ms-1"></i>
                </button>
                <button type="submit" class="btn btn-wizard-submit d-none" id="btnModalSubmit">
                    <i class="bi bi-send-fill me-1"></i> Finalizar y Enviar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('custom-scripts')
<script src="{{ asset('js/questionnaire.js?v='.time()) }}"></script>
@endsection
