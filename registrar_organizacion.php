<!doctype html>
<html lang="en">
<head>
	<!-- ===================================
	{{Chunk site_seo}}
	==================================== -->
	<?php include 'includes/seo.php' ;?>
	<!-- ===================================
	{{fin Chunk site_seo}}
	==================================== -->	
	<title>[[*page_title]]</title>
    <meta name="description" content="[[*page_description]]">
    <meta property="og:title" content="[[*page_title]]" /> 
    <meta property="og:url" content="[[++site_url]][[~id]]" />
    <meta property="og:image" content="[[*page_imagen]]" />
    <meta property="og:description" content="[[*page_description]]" /> 
    <meta name="twitter:image:src" content="[[*page_imagen]]"/>
    <!-- ======================
	{{Estilos para esta página}}
	======================== -->	
	<link rel="stylesheet" href="privado/css/select/select2.min.css">
	<!-- ======================
	{{fin Estilos para esta página}}
	======================== -->

	<!-- {Estilos para IE, va en todas las páginas}	 -->
	<!--[if IE]>
		<link href="css/general/ie.css" rel="stylesheet" type="text/css" />
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->	
	<style>
		.registro{max-width: 900px;margin:0 auto;}
		.content-radio{position: relative;}
		.content-radio i{position: absolute;top:-15px;right:-25px;}
		.content-radio:hover i{color:#2EC4E4;}
		.registro h2{
			color: #148dbf !important;
			font: 18px helveticaLt !important;
		}

		.tooltip {
			display: inline;
			position: relative;
			z-index: 1;
		}

		/* Gap filler */
		.tooltip::after {
			content: '';
			position: absolute;
			width: 100%;
			height: 20px;
			bottom: 100%;
			left: 50%;
			pointer-events: none;
			-webkit-transform: translateX(-50%);
			transform: translateX(-50%);
		}

		.tooltip:hover::after {
			pointer-events: auto;
		}

		/* Tooltip */
		.tooltip-content {
			position: absolute;
			z-index: 9999;
			width: 220px;
			left: 50%;
			bottom: 100%;
			font-size: 18px;
			text-align: left;
			color: #fffaf0;
			background: transparent;
			opacity: 0;
			margin: 0 0 30px -185px;
			cursor: default;
			pointer-events: none;
			font-family: 'helveticaLt';
			-webkit-font-smoothing: antialiased;
			-webkit-transition: opacity 0.3s 0.3s;
			transition: opacity 0.3s 0.3s;
			padding: 0;
		}

		.tooltip:hover .tooltip-content {
			opacity: 1;
			pointer-events: auto;
			-webkit-transition-delay: 0s;
			transition-delay: 0s;
		}
		.tooltip-content span {
			display: block;
		}
		.tooltip-text {
			border-bottom: 10px solid rgba(0, 192, 233, 0.67);
			overflow: hidden;
			-webkit-transform: scale3d(0,1,1);
			transform: scale3d(0,1,1);
			-webkit-transition: -webkit-transform 0.3s 0.3s;
			transition: transform 0.3s 0.3s;
		}
		.tooltip:hover .tooltip-text {
			-webkit-transition-delay: 0s;
			transition-delay: 0s;
			-webkit-transform: scale3d(1,1,1);
			transform: scale3d(1,1,1);
		}

		.tooltip-inner {
			background: rgba(0, 192, 233, 0.67);
			padding: 40px;
			-webkit-transform: translate3d(0,100%,0);
			transform: translate3d(0,100%,0);
			webkit-transition: -webkit-transform 0.3s;
			transition: transform 0.3s;
		}

		.tooltip:hover .tooltip-inner {
			-webkit-transition-delay: 0.3s;
			transition-delay: 0.3s;
			-webkit-transform: translate3d(0,0,0);
			transform: translate3d(0,0,0);
		}

		/* Arrow */

		.tooltip-content::after {
			content: '';
			bottom: -20px;
			left: 50%;
			border: solid transparent;
			height: 0;
			width: 0;
			position: absolute;
			pointer-events: none;
			border-color: transparent;
			border-top-color: rgba(0, 192, 233, 0.67);
			border-width: 10px;
			margin-left: -10px;
		}
		.tobut{margin-top: 20px;}
		h2>em.error{color:#E5493F }
</style>


	
</head>
<body id="seccionpublica" class="nohome">
	<!-- ===================================
	{{Chunk site_header}}
	==================================== -->
	<?php include 'includes/header.php' ?>
	<!-- ===================================
	{{fin Chunk site_header}}
	==================================== -->

	<!-- Contenedor de la alerta -->
	<div id="contenedor-alerta" class="cleaner">
		<div class="texto cleaner">
			<i class="icon-error icono"></i>
			<span><!-- Aquí va el texto de alerta --></span>
		</div>
	</div>
	<!-- ===================================
	{{Contenido principal}}
	==================================== -->
	<section id="seccion-principal" class="cleaner">
		<article id="contenido" class="cleaner">
			<div class="public-titulo cleaner">
				<div class="container-fluid cleaner">
					<div class="row cleaner">
						<div class="cleaner col-md-12">
							<div class="cleaner">
								<h1>Registrar Organización</h1>
							</div>
							<div class="cleaner">
								<h2>Cuando se haya validado el registro, no se olvide de completar todo los campos dentro de su perfil</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="registro cleaner">		
				<form action="gracias.php" id="frm-registrar" class="cleaner">
					<div class="container-fluid general-control-clone cleaner">
						<div class="cleaner row">
							<div class="cleaner cleaner seccion col-md-12">
								<div class="control-clone cleaner">
									<h2>Información básica:</h2>
								</div>															
								<div class="row cleaner">
									<div class="col-md-6 cleaner control-clone">
										<div class="cleaner">
											<input id="agrupacion" name="agrupacion" type="text" class="myinput style1 cleaner" placeholder="Nombre de la agrupación">
										</div>																
									</div>
									<div class="col-md-6 cleaner control-clone validar_select">
										<select name="categoria" id="categoria" class="myinput style1 select-idioma">
						                 	<option></option>
						                 	<option value="1">$1,000 a $2,000</option>
						                 	<option value="2">$2,000 a $3,000</option>
						                 	<option value="3">$3,000 a $4,000</option>
						                 	<option value="4">$5,000 a $6,000</option>
						                 	<option value="5">$6,000 a más</option>
						                 	<option value="6">No deseo responder</option>
						             	</select>
									</div>
								</div>
								<div class="row cleaner">
									<div class="col-md-6 cleaner control-clone">
										<div class="cleaner">
											<input id="telefono" name="telefono" type="text" class="myinput style1 cleaner" placeholder="Teléfono fijo ó celular">																	
										</div>																
									</div>
									<div class="col-md-6 cleaner control-clone">
										<div class="cleaner">
											<input id="correo" name="correo" type="text" class="myinput style1 cleaner" placeholder="Correo electrónico">																	
										</div>																
									</div>
								</div>
							</div>
							<div class="cleaner seccion col-md-12">
								<div class="control-clone cleaner">
									<h2>¿Cuál es la intensión de tu registro? <em>(Obligatorio)</em></h2>
								</div>
								<div class="col-md-6 cleaner control-clone ">
									<div class="content-radio cleaner">
										<div class="cleaner">
											<input type="radio" name="filtrar" id="trabajar" value="trabajar" class="radio">
											<label for="trabajar"></label>
										</div>
										<div class="cleaner info">
											<label for="trabajar">
												Trabajar junto a los Ninjas												
												<a class="tooltip" href="#">
													<i class="icon-info"></i>
													<span class="tooltip-content">
														<span class="tooltip-text">
															<span class="tooltip-inner">
																Descripción de este tipo de registro Descripción de este tipo de registro.
															</span>
														</span>
													</span>
												</a>
												
											</label>
										</div>									
									</div>
								</div>
								
								<div class="col-md-6 cleaner control-clone ">
									<div class="content-radio cleaner">
										<div class="cleaner">
											<input type="radio" name="filtrar" id="apoyar" value="apoyar" class="radio">
											<label for="apoyar"></label>
										</div>
										<div class="cleaner">
											<label for="apoyar">
												Apoyar a los Ninjas												
												<a class="tooltip" href="#">
													<i class="icon-info"></i>
													<span class="tooltip-content">
														<span class="tooltip-text">
															<span class="tooltip-inner">
																Descripción de este tipo de registro Descripción de este tipo de registro.
															</span>
														</span>
													</span>
												</a>
											</label>
										</div>
									</div>
								</div>
							</div>

							<div id="to-apoyar" class="cleaner col-md-12" style="display:none">
								<div class="cleaner seccion col-md-12">
									<div class="control-clone cleaner">
										<h2>Ubicación</h2>
									</div>															
									<div class="row cleaner">
										<div class="col-md-6 cleaner control-clone validar_select">
											<select name="departamento" id="departamento" class="myinput style1 select-idioma">
							                 	<option></option>
							                 	<option value="1">$1,000 a $2,000</option>
							                 	<option value="2">$2,000 a $3,000</option>
							                 	<option value="3">$3,000 a $4,000</option>
							                 	<option value="4">$5,000 a $6,000</option>
							                 	<option value="5">$6,000 a más</option>
							                 	<option value="6">No deseo responder</option>
							             	</select>
										</div>
										<div class="col-md-6 cleaner control-clone validar_select">
											<select name="provincia" id="provincia" class="myinput style1">
							                 	<option></option>
							                 	<option value="1">$1,000 a $2,000</option>
							                 	<option value="2">$2,000 a $3,000</option>
							                 	<option value="3">$3,000 a $4,000</option>
							                 	<option value="4">$5,000 a $6,000</option>
							                 	<option value="5">$6,000 a más</option>
							                 	<option value="6">No deseo responder</option>
							             	</select>
										</div>													
									</div>
									<div class="row cleaner">
										<div class="col-md-6 cleaner control-clone validar_select">
											<div class="cleaner">
												<select name="distrito" id="distrito" class="myinput style1">
								                 	<option></option>
								                 	<option value="1">$1,000 a $2,000</option>
								                 	<option value="2">$2,000 a $3,000</option>
								                 	<option value="3">$3,000 a $4,000</option>
								                 	<option value="4">$5,000 a $6,000</option>
								                 	<option value="5">$6,000 a más</option>
								                 	<option value="6">No deseo responder</option>
								             	</select>
											</div>																
										</div>
										<div class="col-md-6 cleaner control-clone">
											<div class="cleaner">
												<input id="referencia" name="referencia" type="text" class="myinput style1 cleaner" placeholder="Referencia (Opcional)">
											</div>																
										</div>
									</div>
								</div>																				
								
								<div class="cleaner cleaner seccion">
									<div class="control-clone cleaner">
										<h2>Datos de usuario</em>:</h2>
									</div>
									<div class="row cleaner">
										<div class="col-md-6 cleaner control-clone">
											<div class="cleaner">
												<input id="nuevaclave" name="nuevaclave" type="password" class="myinput style1 cleaner" placeholder="Contraseña (Min. 6 caracteres)">																	
											</div>																
										</div>
										<div class="col-md-6 cleaner control-clone">
											<div class="cleaner">
												<input id="nuevaclave2" name="nuevaclave2" type="password" class="myinput style1 cleaner" placeholder="Confirmar contraseña">																	
											</div>																
										</div>
									</div>		
								</div>
							</div>

							<div id="to-trabajar" class="cleaner col-md-12" style="display:none">
								<div class="cleaner cleaner seccion">
									<div class="control-clone cleaner">
										<h2>Cuéntanos tus intenciones de apoyar a los NInjas:</h2>
									</div>
									<div class="row cleaner">
										<div class="col-md-12 cleaner control-clone">
											<textarea name="comentario" id="comentario" class="mytextarea style1"></textarea>															
										</div>										
									</div>		
								</div>
							</div>									
							

							<div class="cleaner col-md-12">
								<div class="cleaner tobut">
									<button class="mybut but-style1 toanimated1" type="submit"><i class="icon-save animated"></i>&nbsp;Guardar información</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</article>		
	</section>
	
	<!-- ==========================================
	{{fin del contenido principal}}
	=========================================== -->

	<!-- ===================================
	{{Chunk site_footer}}
	==================================== -->
	<?php include 'includes/footer.php' ?>	
	<!-- ===================================
	{{Chunk site_footer}}
	==================================== -->

	<!-- ===================================
	{{Chunk site_js_general}}
	==================================== -->
	<?php include 'includes/querys_general.php' ?>	
	<!-- ==========================================
	{{fin de Chunk site_js_general}}
	=========================================== -->
	<!-- {Select 2} -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.0/select2.min.js"></script>
	<script>window.jQuery || document.write('<script src="privado/js/select/select2.min.js"><\/script>')</script>
	<script src="privado/js/select/select2.es.min.js"></script>	
	<!-- {Jquery Validations} -->	
	<script src="privado/js/validation/validate.min.js"></script>
	<script src="privado/js/validation/app.validations.min.js"></script>
	<!-- ==================================
	{{Plugins que van solo en esta página}}
	=================================== -->
	

	<script>
		$(window).on({
			load: function(){
				var w = $(window).width();
				var h = $('#cabecera').height();

				if(w>992){
					$('#contenido').css('padding-top', h+30);	
				}else{
					$('#contenido').css('padding-top', '10px');
				}
			},
			resize: function(){
				var w = $(window).width();
				var h = $('#cabecera').height();

				if(w>992){
					$('#contenido').css('padding-top', h+30);	
				}else{
					$('#contenido').css('padding-top', '10px');
				}				
			}
		});	

		$(document).ready(function($) {
			// Máxima cantida de caracteres
	        var max_caracteres = 400;
	        var area_contador = $('#resumen');
	        var numero_contador = $('#numero_contador');
	        $(numero_contador).text('Máximo '+max_caracteres+' caracteres');
	        $(area_contador).keyup(function(){
	            var counter = $(this);
	            if(counter.val().length > max_caracteres){
	                counter.val( counter.val().substr(0, max_caracteres) );
	            }else {
	                $(numero_contador).text(max_caracteres-counter.val().length);
	            }
	        });

	        // departamento/provincia/distrito
			$("#departamento").select2({
            	placeholder: "Departamento",
				allowClear: true
            });
            $("#provincia").select2({
            	placeholder: "Provincia",
				allowClear: true
            });
            $("#distrito").select2({
            	placeholder: "Distrito",
				allowClear: true
            });
            $("#categoria").select2({
            	placeholder: "Tipo de Organización",
				allowClear: true
            });

            $("input[name='filtrar']").change(function(){

				if($('input:radio:checked').val() == 'trabajar' ){
					$('h2>em').removeClass('error').html('')	
					$('#to-trabajar').fadeOut('slow', function() {
						$('#to-apoyar').fadeIn();
						$('.control-clone').removeClass('error');
						$('#contenedor-alerta').removeClass('block');
					});
				}else{
					$('h2>em').removeClass('error').html('')	
					$('#to-apoyar').fadeOut('slow', function() {
						$('#to-trabajar').fadeIn();
						$('.control-clone').removeClass('error');
						$('#contenedor-alerta').removeClass('block');
					});
				}
			})
			

			$('form').submit(function(e) {
    	        if($('input:radio[name=filtrar]').is(':checked')){
    	        	 $('h2>em').removeClass('error').html('')		    	           
    	            return true; 
    	        }else{		    	            
    	            $('h2>em').addClass('error').html('Es necesario elegir una opción')
    	            return false;
    	        }
    	    });

			$('#frm-registrar').validate({					
				rules: {		
					agrupacion: {
						required: true
					},
					categoria:{
						required: true
					},
					responsable:{
						required: true
					},
					telefono:{
						required: true,
						caracteres : "^[0-9 ()\-\/\*]{6,15}$"
					},				
					correo:{
						required: true,
						email: true
					},
					resumen:{
						required: true						
					},
					departamento:{
						required: true						
					},
					provincia:{
						required: true						
					},
					distrito:{
						required: true						
					},
					nuevaclave:{
						required: true,
						minlength: 6
					},
					nuevaclave2:{
						required: true,
						equalTo:'#nuevaclave' 
					},
					comentario: {
						required: true
					},
				},
				messages: {					
					agrupacion: {
						required: '&nbsp;'
					},
					categoria:{
						required: '&nbsp;'
					},
					responsable:{
						required: '&nbsp;'
					},
					telefono:{
						required: '&nbsp;',
						caracteres : '&nbsp;'
					},					
					correo:{
						required: '&nbsp;',
						email: '&nbsp;'
					},
					resumen:{
						required: '&nbsp;'
					},
					departamento:{
						required: '&nbsp;'
					},
					provincia:{
						required: '&nbsp;'
					},
					distrito:{
						required: '&nbsp;'
					},
					nuevaclave:{
						required: '&nbsp;',
						minlength: '&nbsp;'
					},
					nuevaclave2:{
						required: '&nbsp;',
						equalTo: '&nbsp;'
					},
					comentario: {
						required: '&nbsp;'
					},
				},
				errorClass: "incorrecto",
				errorElement: "span",
				showErrors: function(errorMap, errorList){
				    $("#contenedor-alerta .texto span").html("Se presentaron "+ this.numberOfInvalids() + " errores.");
				    $("#contenedor-alerta").addClass('block');	   
				    this.defaultShowErrors();
				},
				unhighlight: function(element, errorClass) {
				    var numberOfInvalids = this.numberOfInvalids();
				    
				    if (numberOfInvalids === 0) {
				        $("#contenedor-alerta").removeClass('block');
				    }else{
				    	$("#contenedor-alerta").addClass('block');
				    }   
				},
				highlight: function(element){
					$(element).closest('.control-clone').removeClass('success').addClass('error');
				},
				success: function(element){
					element.closest('.control-clone').removeClass('error').addClass('success');
				}
			});


		});

    	function comprobarnavegador() {
            var is_chrome= navigator.userAgent.toLowerCase().indexOf('chrome/') > -1;
            var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox/') > -1;          
            var is_safari = navigator.userAgent.toLowerCase().indexOf('safari/') > -1;
            var is_opera = navigator.userAgent.toLowerCase().indexOf('opera/') > -1;
            var is_ie = navigator.userAgent.toLowerCase().indexOf('msie') > -1;

            var isMobile = {
                Android: function() {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function() {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function() {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function() {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function() {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function() {
                    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                }
            };

            if( isMobile.any() ){
            	

            }else{            	

            	switch(true){
	                case (is_chrome):
	                    console.log('chrome');
	                    $("head").append("<link>");
	                        var css = $("head").children(":last");
	                        css.attr({
	                        rel: "stylesheet",
	                        type: "text/css",
	                        href: "privado/css/general/animation.min.css"
	                    });              

	                    break;

	                case (is_firefox):
	                    break;

	                case (is_safari):

	                    break;

	                case (is_opera):

	                    break;	                    

	                default:
	                	var body = document.getElementsByTagName('body')[0];
	                    var placeholder = document.createElement('script');
						placeholder.type = 'text/javascript';
						placeholder.async = true;
						placeholder.id = 'placeholder';
						placeholder.src = 'privado/js/general/placeholder.min.js';
						body.appendChild(placeholder);

	                    break;
	            }
               
            }            
        }
		window.onload = comprobarnavegador();
	</script>
	<!-- =========================================
	{{fin de Plugins que van solo en esta página}}
	========================================== -->

	</body>
</html>
