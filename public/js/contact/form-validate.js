$("#sendInformation").on('click', function(e) {
    e.preventDefault(); // Evitar que el formulario se envíe de manera predeterminada

    // Llamar a la función de validación pasando el formulario
    let valid = valid_datas('#fruitkha-contact');

    if( valid ) {
        sendContactInformation();
    }
});

function valid_datas(formSelector) {
    var f = $(formSelector)[0];  // Usamos el selector para obtener el formulario
    var valid = true;

    // Validar los campos
    if( f.name.value == '' ){
        $('#form_status').html('<span class="wrong">Tu nombre no puede quedar vacío.</span>');
        notice(f.name);
        valid = false;
    } else if( f.email.value == '' || !validateEmail(f.email.value) ){
        $('#form_status').html('<span class="wrong">Tu email no puede quedar vacío, y debe ser un formato correcto.</span>');
        notice(f.email);
        valid = false;
    } else if( f.phone.value == '' || f.phone.value.length != 10 ){
        $('#form_status').html('<span class="wrong">Tu número de teléfono no puede quedar vacío, y debe contener 10 dígitos.</span>');
        notice(f.phone);
        valid = false;
    } else if( f.message.value == '' ){
        $('#form_status').html('<span class="wrong">Tu mensaje no puede quedar vacío.</span>');
        notice(f.message);
        valid = false;
    }
    return valid;
}

// Validación de formato de email
function validateEmail(email) {
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return regex.test(email);
}

function notice( f ){
	f.focus();
}

// Enviar información al controlador
function sendContactInformation() {
    $.ajax({
        type: "POST",
        url: "/contactForm",
        data: $("#fruitkha-contact").serialize(),
        success: function (response) {
            if(response){
                $("#fruitkha-contact")[0].reset();
                console.log(response);
                //alert("Add successfull!!");
                toastr.success("Gracias por su mensaje!!", "Nuevo Registro", {timeOut:3000});
            }
        },
        error: function (response) {
            console.log(response);
        }
    });
}

// function createContactInformation() {

// 	var name = $("#name").val();
// 	var email = $("#email").val();
// 	var phone = $("#phone").val();
// 	var message = $("#message").val();
// 	var _token = $("input[name=__token]").val();

// 	$.ajax({
// 		type: "post",
// 		url: "/contacts/store",
// 		data: {
// 			name: name,
// 			email: email,
// 			phone: phone,
// 			message: message,
// 			//_token: _token
// 			"_token": $("meta[name='csrf-token']").attr("content")

// 		},
// 		success: function (response) {

// 			if(response){
// 				$("#name").val("");
// 				$("#email").val("");
// 				$("#phone").val("");
// 				$("#message").val("");
// 				console.log(response);
// 				//alert("Add successfull!!");
// 				toastr.success("Gracias por su mensaje!!", "Nuevo Registro", {timeOut:3000});
// 			}


// 		},
// 		error: function (response) {

// 			console.log(response);
// 		}

// 	});

// }
