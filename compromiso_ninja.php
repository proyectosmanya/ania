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
	<link rel="stylesheet" href="privado/css/sliders/owl.carousel.min.css">
	<style>
		.registro h2{
			color: #148dbf !important;
			font: 18px helveticaLt !important;
		}
		.tobut img{vertical-align: -7px;}
		.leido{margin-bottom: 20px;}
		.limpiar{font:14px helveticaLt !important; color: #666666 !important;padding-top: 10px;}
		.savesignature{opacity: 0;visibility: hidden;}
		#signature-pad{cursor: crosshair;max-width: 300px;margin: 0 auto;text-align: center;}
		.yasomos{padding-top: 30px;}
		.comentando{padding-top: 10px;}
		#carta{}
		.registro{padding: 20px 0; margin: 0 auto;max-width: 800px}
		
		.tolectura{font:20px helveticaBd;color: #EEEEEE;text-align: center;display: inline-block;padding-top: 8px;}
		.tolectura:hover{text-decoration: underline;color: #DFDFDF;}
		.txtleido.error,
		h2>em.error{color:#E5493F !important}
		.enlacecarta{font-family: helveticaBd !important}
		.control-clone.error span.incorrecto{display: block !important;color: #000 !important}
		.textoayuda{padding: 10px 0;}
		.textoayuda .incorrecto{font: 16px helveticaLt;color: #E5493F;}
                #signature-pad canvas{border: 1px solid #bee6ec}
		@media only screen and (max-width: 500px){
			
			
		}
	</style>
	<!-- ======================
	{{fin Estilos para esta página}}
	======================== -->

	<!-- {Estilos para IE, va en todas las páginas}	 -->
	<!--[if IE]>
		<link href="css/general/ie.css" rel="stylesheet" type="text/css" />
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	
</head>
<body class="nohome" id="seccionpublica">
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
								<h1>Compromiso Ninja</h1>
							</div>
							<div class="cleaner">
								<h2>Solo debes completar los siguientes campos, habiendo leido nuestra carta virtual</h2>
							</div>
							<div class="cleaner">
								<a href="javascript:void" class="tolectura">"Quiero leer la carta virtual"</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="carta" class="cleaner">				
				<div class="registro cleaner">		
					<form action="compartir_compromiso.php" id="frm-compromiso" class="cleaner">						
						<div class="container-fluid general-control-clone cleaner">
							<div class="cleaner row">
								<div class="cleaner cleaner seccion col-md-12">
									<div class="control-clone cleaner">
										<h2>Información básica:</h2>
									</div>															
									<div class="row cleaner">
										<div class="col-md-6 cleaner control-clone">
											<div class="cleaner">
												<input id="nombres" name="nombres" type="text" class="myinput style1 cleaner" placeholder="Nombres">
											</div>
											<div class="cleaner textoayuda">
												<span class="correcto">&nbsp;</span>
											</div>
										</div>
										<div class="col-md-6 cleaner control-clone">
											<div class="cleaner">
												<input id="correo" name="correo" type="text" class="myinput style1 cleaner" placeholder="Correo electrónico">
											</div>	
											<div class="cleaner textoayuda">
												<span class="correcto">&nbsp;</span>
											</div>															
										</div>
									</div>									
								</div>															
								
								<div class="cleaner cleaner seccion col-md-12">
									<div class="control-clone cleaner temasinteres">
										<h2>Indícanos tus temas de interés <em>(Max. 3):</em></h2>
									</div>
									<div class="listatemasdeinteres cleaner general-check ">
										<div class="cleaner ">
											<div class="row cleaner">
												<div class="col-md-6 cleaner control-clone ">
													<div class="content-check cleaner">
														<div class="cleaner">
															<input type="checkbox" name="tema[]" id="tema1" value="1" class="check">
															<label for="tema1"></label>
														</div>
														<div class="cleaner">
															<label for="tema1">Tema 1</label>
														</div>
													</div>
												</div>
												<div class="col-md-6 cleaner control-clone ">
													<div class="content-check cleaner">
														<div class="cleaner">
															<input type="checkbox" name="tema[]" id="tema2" value="1" class="check">
															<label for="tema2"></label>
														</div>
														<div class="cleaner">
															<label for="tema2">Tema 2</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row cleaner">
												<div class="col-md-6 cleaner control-clone ">
													<div class="content-check cleaner">
														<div class="cleaner">
															<input type="checkbox" name="tema[]" id="tema3" value="1" class="check">
															<label for="tema3"></label>
														</div>
														<div class="cleaner">
															<label for="tema3">Tema 1</label>
														</div>
													</div>
												</div>

												<div class="col-md-6 cleaner control-clone ">
													<div class="content-check cleaner">
														<div class="cleaner">
															<input type="checkbox" name="tema[]" id="tema4" value="1" class="check">
															<label for="tema4"></label>
														</div>
														<div class="cleaner">
															<label for="tema4">Tema 2</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="cleaner textoayuda">
											<span class="correcto">&nbsp;</span>
										</div>
									</div>
									
									
								</div>
								<div class="cleaner cleaner seccion col-md-12">
									<div class="control-clone cleaner">
										<h2>Firma Digital <em>(Opcional)</em>:</h2>
									</div>
									<div class="row cleaner">
										<div class="col-md-12 cleaner">
											<div id="signature-pad" >
											    <canvas></canvas>
											    <a class="cleaner limpiar" href="javascript:void(0)" data-action="clear">Borrar firma <i class="icon-erase"></i></a>
											    <button class="savesignature" data-action="save">Save</button>
										  	</div>
										</div>
									</div>		
								</div>	
								<div class="cleaner cleaner seccion col-md-12 leido">									
									<div class="row cleaner general-check">
										<div class="col-md-12 cleaner">
											<div class="content-check cleaner ">
												<div class="cleaner">
													<input type="checkbox" name="aceptado" id="aceptado" value="1" class="check" checked="false">
													<label for="aceptado"></label>
												</div>
												<div class="cleaner txtleido">
													<label for="aceptado">He leído correctamente</label><a href="javascript:void(0)" class="enlacecarta">&nbsp;la carta virtual</a>
												</div>
											</div>
											<div class="cleaner textoayuda">
												<span class="correcto">&nbsp;</span>
											</div>
										</div>
									</div>		
								</div>
								<div class="cleaner tobut">
									<button class="mybut but-style1 toanimated1" type="submit"><img src="imagenes/privado/complementos/like.png" alt="" class="text-bottom">&nbsp;Enviar mi compromiso</button>
								</div>
							</div>
						</div>
					</form>
				</div>
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

	<!-- ==================================
	{{Plugins que van solo en esta página}}
	=================================== -->		
	<!-- {Jquery Validations} -->	
	<script src="privado/js/validation/validate.min.js"></script>
	<script src="privado/js/validation/app.validations.min.js"></script>
	<!-- {Firma} -->
	<script src="privado/js/firma/signature_pad.js"></script>
	<script src="privado/js/firma/app.signature.js"></script>	
	
	<script>
		var txtScroll = false;
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

		$(document).ready(function($){
			// Localstorage
			if (localStorage) {
				$("#nombres, #correo").change(function(){					
					localStorage[$(this).attr("name")] = $(this).val();
				});
				$("#nombres, #correo").keyup(function () {
					localStorage[$(this).attr('name')] = $(this).val();					
				});				

				if (localStorage.nombres) {
		        	$("#nombres").val(localStorage.nombres);
		        }
		        if (localStorage.correo) {
		        	$("#correo").val(localStorage.correo);
		        }
			}
		
			$('.lineas').delay(200).animate({
				height: '52px'
			},1000, function(){
				$('.circle').delay(200).addClass('myanimation')
			});

			//Contador los seguidores
			var inicio = 100;
            var final = 15500;
            var rango = Math.ceil(final/inicio);        
            var t;
           
            iniciarContador();

            function iniciarContador(){
            	inicio = inicio + rango;
	            if(inicio < final){
	                $('#seguidores').text(inicio);
	                t = setTimeout(function(){iniciarContador()}, 10);
	            }else{		            	
	                clearTimeout(t);
	                $('#seguidores').text(final);
	            }
            }


			$('#frm-compromiso').validate({
				ignore: "",
				rules: {		
					nombres: {
						required: true
					},
					correo:{
						required: true,
						email:true
					},
					aceptado:{
						required: true
					},
					'tema[]':{
						required: true,
						maxlength: 3
					}
				},
				messages: {					
					nombres: {
						required: '&nbsp;'
					},
					correo:{
						required: '&nbsp;',
						email: '&nbsp;'
					},
					aceptado:{
						required: 'Es necesario haber leído la carta virtual'
					},
					'tema[]':{
						required: 'Es necesario elegir almenos 1 tema',
						maxlength: 'Puedes elegir como máximo 3 temas'
					}
				},
				errorClass: "incorrecto",
				errorElement: "span",
				errorPlacement: function(error, element){
					if(element.is(':checkbox'))
						error.appendTo(element.closest('.general-check').find('.textoayuda'));
					// else if( element.is(':radio'))
					// 	error.appendTo(element.closest('.control-clone').find('.textoayuda'));
					else
						error.appendTo(element.closest('.control-clone').find('.textoayuda'));
				},
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
					localStorage["correo"] = '';
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
