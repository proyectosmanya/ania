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
		.seccion{padding: 20px;background: #d2f1f6;}
		.control-clone{margin:10px auto;}
		.maxspace{width: 100%;max-width: 500px;margin:50px auto;}
		.olvidar{font:18px helveticaLt;color: #1d7fa7}
		.olvidar i{margin-right: 5px;}
		.olvidar:hover{text-decoration: underline;}
		@media only screen and (max-width: 900px){
			.etiqueta{display: none}
			.etiqueta-resp{display: inline-block !important}
		}
		@media only screen and (max-width: 550px){
			.dates>div{display: block;text-align: left !important;padding:5px 0;}
			.dates{text-align: left;}
			.dates>div:last-child{padding-left: 0 !important;}
		}
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
								<h1>Iniciar Sesión</h1>
							</div>
							<div class="info cleaner">
								<div class="cleaner dates">
									<h2>Ingresa correstamente tu información</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="detalle-noticia cleaner">		
				<div class="container-fluid cleaner">					
					<div class="resumen cleaner maxspace">
						<form action="perfil_info_organizacion.php" id="frm-login" class="cleaner">
							<div class="cleaner cleaner seccion">							
								<div class="row cleaner">
									<div class="col-md-12 cleaner control-clone">
										<div class="cleaner">
											<input id="correo" name="correo" type="text" class="myinput style1 cleaner" placeholder="Ingresa tu correo">																	
										</div>																
									</div>
									<div class="col-md-12 cleaner control-clone">
										<div class="cleaner">
											<input id="clave" name="clave" type="password" class="myinput style1 cleaner" placeholder="Ingresa tu contraseña">																	
										</div>																
									</div>
									<div class="col-md-12 cleaner control-clone">
										<div class="cleaner olvidar">
											<a href="recuperar_clave_1.php" class="cleaner"><i class="icon-info cleaner"></i>Olvidé mi contraseña</a>
										</div>																
									</div>
									<div class="col-md-12 cleaner control-clone">
										<div class="cleaner tobut">
											<button class="mybut but-style1 toanimated1" type="submit"><i class="icon-entrar animated"></i>&nbsp;Ingresar a mi cuenta</button>
										</div>														
									</div>
								</div>		
							</div>
						</form>
						
					</div>
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
			
			$('#frm-login').validate({
				ignore: "",
				rules: {								
					correo:{
						required: true,
						email: true
					},					
					clave:{
						required: true,
						minlength: 6
					}		
				},
				messages: {		
					correo:{
						required: '&nbsp;',
						email: '&nbsp;'
					},					
					clave:{
						required: '&nbsp;',
						minlength: '&nbsp;'
					}
				},
				errorClass: "incorrecto",
				errorElement: "span",
				showErrors: function(errorMap, errorList){
				    var numErrores = this.numberOfInvalids();
					if(numErrores == 1){
						$("#contenedor-alerta .texto span").html("Se presentó "+ this.numberOfInvalids() + " error.");
					    $("#contenedor-alerta").addClass('block');	   
					    this.defaultShowErrors();
					}else{
						$("#contenedor-alerta .texto span").html("Se presentaron "+ this.numberOfInvalids() + " errores.");
					    $("#contenedor-alerta").addClass('block');	   
					    this.defaultShowErrors();	
					}
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
