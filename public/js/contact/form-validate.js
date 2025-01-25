// function valid_datas( f ){
	
// 	if( f.name.value == '' ){
// 		jQuery('#form_status').html('<span class="wrong">Your name must not be empty!</span>');
// 		notice( f.name );
// 	}else if( f.email.value == '' ){
// 		jQuery('#form_status').html('<span class="wrong">Your email must not be empty and correct format!</span>');
// 		notice( f.email );
// 	}else if( f.phone.value == '' ){
// 		jQuery('#form_status').html('<span class="wrong">Your phone must not be empty and correct format!</span>');
// 		notice( f.phone );
// 	// }else if( f.subject.value == '' ){
// 	// 	jQuery('#form_status').html('<span class="wrong">Your subject must not be empty!</span>');
// 	// 	notice( f.subject );
// 	}else if( f.message.value == '' ){
// 		jQuery('#form_status').html('<span class="wrong">Your message must not be empty!</span>');
// 		notice( f.message );
// 	}else{
// 		 jQuery.ajax({
// 			url: 'mail.php',
// 			type: 'post',
// 			data: jQuery('form#fruitkha-contact').serialize(),
// 			complete: function(data) {
// 				jQuery('#form_status').html(data.responseText);
// 				jQuery('#fruitkha-contact').find('input,textarea').attr({value:''});
// 				jQuery('#fruitkha-contact').css({opacity:1});
// 				jQuery('#fruitkha-contact').remove();
// 			}
// 		});
// 		jQuery('#form_status').html('<span class="loading">Sending your message...</span>');
// 		jQuery('#fruitkha-contact').animate({opacity:0.3});
// 		jQuery('#fruitkha-contact').find('input,textarea,button').css('border','none').attr({'disabled':''});
// 	}
	
// 	return false;
// }

// function notice( f ){
// 	jQuery('#fruitkha-contact').find('input,textarea').css('border','none');
// 	f.style.border = '1px solid red';
// 	f.focus();
// }

// $(document).ready(function () {
       

// });

// $.ajaxSetup({
// 	headers: {
// 		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// 	}
// });
// $('#sendInformation').click(function(){
//    alert("Click");
// //    return;
//    var name = $("#Name").val();
//    var email = $("#Email").val();
//    var phone = $("#Phone").val();
//    var message = $("#Message").val();
//    var _token = $("input[name=__token]").val();

//    $.ajax({
// 	  url:"{{ Route('contact.store') }}",
// 	  data:{
// 		Name: name,
// 		Email: email,
// 		Phone: phone,
// 		Message: message,
// 		_token: _token
// 	  },
// 	  type:'post',
// 	  success:  function (response) {
// 		if(response){
// 			$("#Name").val("");
// 			$("#Email").val("");
// 			$("#Phone").val("");
// 			$("#Message").val("");
// 			alert("Add successfull!!");
// 			//toSafeInteger.success("Gracias por su mensaje!!", "Nuevo Registro", {timeOut:3000});
// 		}
// 	  },
// 	  statusCode: {
// 		 404: function() {
// 			alert('web not found');
// 		 }
// 	  },
// 	  error:function(x,xs,xt){
// 		 window.open(JSON.stringify(x));
// 		 //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
// 	  }
//    });
// });





$("#contact-form").submit(function(e){
	alert("Hola");
	e.preventDefault();
	
	CreateContactInformation();
});


function CreateContactInformation() {
	
	var name = $("#Name").val();
	var email = $("#Email").val();
	var phone = $("#Phone").val();
	var message = $("#Message").val();
	var _token = $("input[name=__token]").val();

	$.ajax({
		type: "post",
		url: "/contacts/store",
		data: {
			Name: name,
			Email: email,
			Phone: phone,
			Message: message,
			//_token: _token
			"_token": $("meta[name='csrf-token']").attr("content")

		},
		success: function (response) {

			if(response){
				$("#Name").val("");
				$("#Email").val("");
				$("#Phone").val("");
				$("#Message").val("");
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