;(function($,undefined){	
	var app = {
		validar: function(){
			
			// {New Method}
			$.validator.addMethod(
				"caracteres",
				function(value, element, regexp) {
					var re = new RegExp(regexp);
					return this.optional(element) || re.test(value);
				}
			);

			// No Permitir Cortar,Copiar, Pegar en determinados inputs
			$('#password').on('cut copy paste', function(e){
				e.preventDefault();
			});

			// Agregar/Deshabilitar clases en plugin [select2]
		    $(".validar_tags").change(function() {
		        if($(this).closest('.control-clone').find('.select2-search-choice').length != 0){
		            $(this).closest('.control-clone').removeClass('error').addClass('success');
		        }else{
		            $(this).closest('.control-clone').removeClass('success').addClass('error');
		        }
		    });
		    $(".validar_select").change(function() {
		        if($(this).closest('.control-clone').find('.select2-allowclear').length != 0){
		            $(this).closest('.control-clone').removeClass('error').addClass('success');
		        }else{
		            $(this).closest('.control-clone').removeClass('success').addClass('error');
		        }
		    });
		}
	}
	$(document).on('ready', app.validar);
})(jQuery);