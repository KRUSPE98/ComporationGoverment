$(document).ready(function () {
    let currentStep = 1;
    const totalSteps = 7;

    function updateStepView() {
        // Actualizar tabs de progreso
        $('.wizard-step-item').removeClass('active completed');
        $('.wizard-step-item').each(function () {
            let stepNum = $(this).data('step');
            if (stepNum === currentStep) {
                $(this).addClass('active');
            } else if (stepNum < currentStep) {
                $(this).addClass('completed');
            }
        });

        // Actualizar visibilidad de los contenidos
        $('.wizard-step-content').removeClass('active');
        $(`.wizard-step-content[data-step="${currentStep}"]`).addClass('active');

        // Botones de navegación
        if (currentStep === 1) {
            $('#btnModalPrev').addClass('d-none');
        } else {
            $('#btnModalPrev').removeClass('d-none');
        }

        if (currentStep === totalSteps) {
            $('#btnModalNext').addClass('d-none');
            $('#btnModalSubmit').removeClass('d-none');
        } else {
            $('#btnModalNext').removeClass('d-none');
            $('#btnModalSubmit').addClass('d-none');
        }

        // Auto-scroll al inicio del modal en cambio de paso
        $('.modal-body').animate({ scrollTop: 0 }, 'fast');
    }

    function validateCurrentStep() {
        let isValid = true;
        let errorMessage = '';
        let $activeStepContent = $(`.wizard-step-content[data-step="${currentStep}"]`);

        $activeStepContent.find('input[required], select[required], textarea[required]').each(function () {
            if ($(this).attr('type') === 'checkbox') {
                if (!$(this).is(':checked')) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                    $('#privacy_modal_error').removeClass('d-none');
                    if (!errorMessage) {
                        errorMessage = 'Debe aceptar el aviso de privacidad para continuar.';
                    }
                } else {
                    $(this).removeClass('is-invalid');
                    $('#privacy_modal_error').addClass('d-none');
                }
            } else if (!$(this).val() || $(this).val().trim() === '') {
                isValid = false;
                $(this).addClass('is-invalid');
                if (!errorMessage) {
                    errorMessage = 'Por favor complete todos los campos obligatorios antes de continuar.';
                }
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        if (!isValid) {
            // Mostrar mensaje con SweetAlert2 si existe, con Toastr o mediante un alert visible en la página
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Campo requerido',
                    text: errorMessage,
                    confirmButtonColor: '#800020'
                });
            } else if (typeof toastr !== 'undefined') {
                toastr.error(errorMessage);
            } else {
                alert(errorMessage);
            }
        }

        return isValid;
    }

    // Evento dinámico para limpiar la clase 'is-invalid' en tiempo real
    $('#questionnaireModalForm').on('input change', 'input, select, textarea', function () {
        if ($(this).attr('type') === 'checkbox') {
            if ($(this).is(':checked')) {
                $(this).removeClass('is-invalid');
                $('#privacy_modal_error').addClass('d-none');
            }
        } else {
            if ($(this).val() && $(this).val().trim() !== '') {
                $(this).removeClass('is-invalid');
            }
        }
    });

    // Botón Siguiente
    $('#btnModalNext').on('click', function () {
        if (validateCurrentStep()) {
            if (currentStep < totalSteps) {
                currentStep++;
                updateStepView();
            }
        }
    });

    // Botón Anterior
    $('#btnModalPrev').on('click', function () {
        if (currentStep > 1) {
            currentStep--;
            updateStepView();
        }
    });

    // Mostrar/ocultar campo "Otros" en select de relación y generaciones
    $('.select-relationship, .select-generations').on('change', function () {
        let targetSelector = $(this).data('target');
        if ($(this).val().toLowerCase().indexOf('otros') !== -1) {
            $(targetSelector).removeClass('d-none');
        } else {
            $(targetSelector).addClass('d-none');
        }
    });

    // Envío del formulario del Cuestionario por AJAX
    $('#questionnaireModalForm').on('submit', function (e) {
        e.preventDefault();

        if (!validateCurrentStep()) {
            return false;
        }

        let $form = $(this);
        let $submitBtn = $('#btnModalSubmit');
        let originalBtnHtml = $submitBtn.html();

        $submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Enviando...');

        $.ajax({
            url: $form.attr('action'),
            method: 'POST',
            data: $form.serialize(),
            dataType: 'json',
            success: function (response) {
                $submitBtn.prop('disabled', false).html(originalBtnHtml);
                if (response.success) {
                    if (typeof toastr !== 'undefined') {
                        toastr.success(response.message);
                    } else {
                        alert(response.message);
                    }
                    $('#questionnaireModal').modal('hide');
                    $form[0].reset();
                    currentStep = 1;
                    updateStepView();
                } else {
                    if (typeof toastr !== 'undefined') {
                        toastr.error(response.message || 'Error al procesar el formulario.');
                    } else {
                        alert(response.message || 'Error al procesar el formulario.');
                    }
                }
            },
            error: function (xhr) {
                $submitBtn.prop('disabled', false).html(originalBtnHtml);
                let errorMessage = 'Ocurrió un error al enviar el formulario.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                if (typeof toastr !== 'undefined') {
                    toastr.error(errorMessage);
                } else {
                    alert(errorMessage);
                }
            }
        });
    });
});
