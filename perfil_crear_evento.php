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
	<link rel="stylesheet" href="privado/css/date_time/datetimepicker.min.css">	
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
												<h1>Crear nueva evento</h1>
											</div>
											<div class="col-md-4 cleaner">
												<div class="cleaner return"><a href="javascript:history.go(-1)" class="cleaner toanimated4"><i class="icon-atraz animated"></i>&nbsp;Cancelar</a></div>
											</div>
										</div>
									</div>
									<div class="bottom cleaner">								

										<form action="" id="frm-crear-evento" class="cleaner">
											<div class="container-fluid general-control-clone cleaner ">
												<div class="cleaner row">
													<div class="cleaner cleaner seccion">
														<div class="control-clone cleaner">
															<h2>Información básica del evento:</h2>
														</div>															
														<div class="row cleaner">
															<div class="col-md-6 cleaner control-clone">
																<div class="cleaner">
																	<input id="titulo" name="titulo" type="text" class="myinput style1 cleaner" placeholder="Título ">
																</div>																
															</div>
															<div id="pickerDate" class="col-md-6 cleaner control-clone">
																<input type="text" id="fecha" name="fecha" data-format="MM/DD/YYYY" placeholder="Fecha" class="myinput style1" readonly />
													          	<button class="btn butico" type="button"><i class="icon-calendar"></i></button>
															</div>
														</div>
														<div class="row cleaner">
															<div class="col-md-6 cleaner control-clone">
																<input id="lugar" name="lugar" type="text" class="myinput style1 cleaner" placeholder="Lugar ">
															</div>
															<div id="pickerTime" class="col-md-6 cleaner control-clone">
													            <input type="text" id="hora" name="hora"  placeholder="Hora" class="myinput style1" />
													            <button class="btn butico" type="button"><i class="icon-time"></i></button>
															</div>
														</div>
													</div>
													<div class="cleaner cleaner seccion">
														<div class="control-clone cleaner">
															<h2>Resumen:</h2>
														</div>															
														<div class="row cleaner">
															<div class="col-md-12 cleaner control-clone area-contador">
																<textarea name="resumen" id="resumen" class="mytextarea style1 " placeholder="Debe ingresar detalles del evento a realizar"></textarea>
																<div id="numero_contador" class="contador cleaner"></div>
															</div>												
														</div>
													</div>
													<div class="cleaner cleaner seccion">
														<div class="control-clone cleaner">
															<h2>Temas que tienen relación a este evento&nbsp;&nbsp;<em>(Mínimo 1 / Máximo 5)</em>:</h2>
														</div>													
														<div class="row cleaner">
															<div class="col-md-12 cleaner control-clone validar_tags">
																<input type="hidden" id="tags"  name="tags" value=""  class="myinput style1" placeholder="Ingresa aquí los temas">
															</div>															
														</div>
													</div>

													<div class="cleaner cleaner seccion">
														<div class="control-clone cleaner">
															<h2>Instagram&nbsp;&nbsp;<em>(Ingresar el link de Instagram para mostrar las fotos cuando se realizó el evento)</em>:</h2>
														</div>
														<div class="row cleaner">
															<div class="col-md-12 cleaner control-clone">
																<input type="text" class="myinput style1 cleaner" placeholder="Pegar el link de Instagram">
															</div>
														</div>
													</div>
													<div class="cleaner tobut">
														<button class="mybut but-style1 toanimated1" type="submit"><i class="icon-send animated"></i>&nbsp;Publicar evento</button>
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
	<!-- {Select 2} -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.0/select2.min.js"></script>
	<script>window.jQuery || document.write('<script src="privado/js/select/select2.min.js"><\/script>')</script>
	<script src="privado/js/select/select2.es.min.js"></script>
	<!-- {Jquery Validations} -->	
	<script src="privado/js/validation/validate.min.js"></script>
	<script src="privado/js/validation/app.validations.min.js"></script>
	<!-- Datetimepicker js -->
    <script type="text/javascript" src="privado/js/date_time/moment.min.js"></script>
    <script type="text/javascript" src="privado/js/date_time/datetimepicker.min.js"></script>
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

		$(document).ready(function($){
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
		
			$('#frm-crear-evento').validate({
				ignore: "",
				rules: {		
					titulo: {
						required: true
					},
					fecha:{
						required: true
					},
					lugar:{
						required: true
					},				
					hora:{
						required: true
					},
					resumen:{
						required: true						
					},
					tags:{
						required: true						
					}				
				},
				messages: {					
					titulo: {
						required: '&nbsp;'						
					},
					fecha:{
						required: '&nbsp;'
					},
					lugar:{
						required: '&nbsp;'											
					},					
					hora:{
						required: '&nbsp;'
					},
					resumen:{
						required: '&nbsp;'
					},
					tags:{
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
				},
				success: function(element){
					element.closest('.control-clone').removeClass('error').addClass('success');
				},
				submitHandler: function(){										
		    		window.location.href = "perfil_eventos.php"		    		
				}
			});	
			
			// Datetime Picker
			$('#pickerDate').datetimepicker({
                pickTime: false
            });

            $('#pickerTime').datetimepicker({
                pickDate: false,
                minuteStepping: 5
            })

			// Tags de las mejoras ambientales		
			$("#tags").select2({
			 	tags: true,
			  	tokenSeparators: [",", " "],			  
			 	multiple: true,
				ajax: {
				    url: 'json/mejorasambientales.json',
				    dataType: "json",
				    data: function(term, page) {
						return {
							q: term
						};
				    },
				    results: function(data, page) {
						return {
							results: data
						};
				    }
				}
			});

			$("#filtrar").select2({
            	placeholder: "Filtrar por tema",
				allowClear: true
            });
			// Triger Al cambiar foto
			$('#clickedit').click(function(e) {
				e.preventDefault();
				/* Act on the event */
				$('#fotoperfil').trigger('click');
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
