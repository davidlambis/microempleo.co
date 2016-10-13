$(document).ready(function(){
	console.log("Sitio");
	$("#form-registro").validate({
		rules : {
			categoria : {
				required : true
			},
			subcategoria : {
				required : true
			},
			nombres : {
				required : true,
				nombres : true,
				minlength : 5, 
				maxlength : 50
			},
			cedula : {
				required : true,
				cedula : true,
				minlength : 5,
				maxlength: 20
			},
			celular : {	
				required : true,
				celular : true, 
				minlength : 9,
				maxlength : 13
			},
			correo : {
				required : true, 
				email : true,
				remote: {
					url: "http://microempleo.co/launch/verificar_correo",
					type: "post",
					data: {
						correo: function(){ 
							return $("#correo").val(); 
						}
					}
				}			
			},
			ciudad : {
				required : true,	
				nombres : true
			}
	},
	messages: {
		correo: {
			remote: 'Éste correo ya está registrado'
		}
	},		
	submitHandler : function(form){
		form.submit();	
	}	
	});

	jQuery.validator.addMethod("nombres", function(value, element) {
  	return this.optional( element ) || /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ\s]+$/.test( value );
	}, 'Información no válida. Ingrésala de nuevo');

	jQuery.validator.addMethod("cedula", function(value, element) {
  	return this.optional( element ) || /^[0-9\s]+$/.test( value );
	}, 'Información no válida. Ingrésala de nuevo');

	jQuery.validator.addMethod("celular", function(value, element) {
  	return this.optional( element ) || /^[0-9\s]+$/.test( value );
	}, 'Información no válida. Ingrésala de nuevo');
});