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
		/*Subiendo archivo*/
		.capaloading .icono:after { content: 'Subiendo...';  position: absolute; bottom: -20px; left: -7px; font: 12px helveticaLt; color: #817878;}
		.capaloading{position: fixed; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.77); z-index: 9999; display: none; left:0;  top:0;}
		.capaloading .icono{position:absolute;width:30PX;height:30PX;margin:auto;top:0;bottom:0;right:0;left:0;background-image: url('imagenes/privado/complementos/loading.gif');}
	</style>
	
</head>
<body id="perfil" class="nohome">
	<!-- ===================================
	{{Chunk site_header}}
	==================================== -->
	<?php include 'includes/header.php' ?>
	<!-- ===================================
	{{fin Chunk site_header}}
	==================================== -->

	<!-- ===================================
	{{Contenido principal}}
	==================================== -->

	<div id="contenedor-alerta" class="cleaner">
		<div class="texto cleaner">
			<i class="icon-error icono"></i>
			<span><!-- Aquí va el texto de alerta --></span>
		</div>
	</div>

	<!-- Subiendo archivo -->	
	<div class="capaloading cleaner">
	    <div class="icono cleaner"></div>
	</div>

	<section id="seccion-principal" class="cleaner">
		<article id="contenido" class="cleaner">
			<div id="" class="container-fluid cleaner">
				<div class="row cleaner">
					<div id="" class="cleaner col-md-12">
						<div id="dashboard" class="cleaner">
							<div class="col-md-3 cleaner">
								<div id="panel" class="cleaner">
									<?php include 'includes/menu_perfil_usuario.php' ?>
								</div>
							</div>						
							<div class="col-md-9 cleaner">
								<div id="content-eventos" class="cleaner">									
									<div class="top cleaner">
										<div class="cleaner row">
											<div class="col-md-8 cleaner marino spacetop">
												<h1>Cambiar foto del perfil</h1>
											</div>											
										</div>
									</div>
									<div class="bottom cleaner">										
										<form action="" id="frm-recuperar-clave" class="cleaner">
											<div class="container-fluid general-control-clone cleaner">
												<div class="cleaner row">
													<div class="cleaner cleaner seccion">
														<div class="control-clone cleaner">
															<h2>Es recomendable subir una imágen de 900 x 800 píxeles</h2>
														</div>															
														<div class="row cleaner">
															<div class="col-md-8 cleaner control-clone condition-to-send">
																<div class="cleaner">
																	<input id="getfotoperfil" name="getfotoperfil" type="text" class="myinput style1 cleaner" placeholder="Ubicación de la foto" readonly="readonly">
																</div>																
															</div>
															<div class="col-md-4 cleaner control-clone">
																<div class="cleaner">
																	<a id="but-fotoperfil" href="javascript:void(0)" class="cleaner mybut but-style1"><i class="icon-upload"></i>&nbsp;Subir foto</a>
																	<input id="fotoperfil" type="file" name="foto1" class="cleaner">
																</div>														
															</div>
														</div>														
													</div>
													<div class="cleaner tobut">
														<button class="mybut but-style1 toanimated1" type="submit"><i class="icon-save animated"></i>&nbsp;Guardar ahora</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
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

	<!-- ==================================
	{{Plugins que van solo en esta página}}
	=================================== -->
	
	<!-- {Jquery Validations} -->	
	<script src="privado/js/validation/validate.min.js"></script>
	<script src="privado/js/validation/app.validations.min.js"></script>
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
			

			// Subiendo archivo
			$('#but-fotoperfil').click(function(event) {
				$('#fotoperfil').trigger('click')
			});
			$("form").submit(function(){
	            if($('.condition-to-send').hasClass('error')){	               
	            }else{
	            	setTimeout(function(){
	                    $('.listoparaenviar .capaloading').fadeIn();
	                },1000)
	            }
	        });

			// URL destino de la foto
			$('#fotoperfil').change(function(){
	            $('#getfotoperfil').val($(this).val());
	            if($('#fotoperfil').val() != ''){
	                $(this).closest('.control-clone').removeClass('error');
	                $(this).closest('.control-clone').addClass('success');
	            }
	        });

	        // Actualizar foto
	        $("#fotoperfil").change(function(){
	            readFoto(this);
	            if($('#fotoperfil').val() != ""){
	                $(this).closest('.todomifoto').find('.delete').fadeIn();
	            }
	        });
	        function readFoto(input) {
	            if (input.files && input.files[0]) {
	                var reader = new FileReader();            
	                reader.onload = function (e) {
	                    $('#fotousuario').attr('src', e.target.result);
	                }                
	                reader.readAsDataURL(input.files[0]);
	            }
	        }

		
			$('#frm-recuperar-clave').validate({
				ignore: "",
				rules: {		
					getfotoperfil: {
						required: true
					}		
				},
				messages: {					
					getfotoperfil: {
						required: '&nbsp;'

					}
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
					$('body').removeClass('listoparaenviar');
				},
				success: function(element){
					element.closest('.control-clone').removeClass('error').addClass('success');
					$('body').addClass('listoparaenviar');
				},
				submitHandler: function(){
					window.location.href = "perfil_cambiar_foto.php"
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
