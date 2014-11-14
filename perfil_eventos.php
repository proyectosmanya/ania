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
	<style>
		.evento .titulo .eliminar  a:hover{color: #1d7fa7}
		.evento .titulo .eliminar  a{font: 14px helveticaLt;color: #666;-webkit-transition: color .3s ease-in-out;-o-transition: color .3s ease-in-out;	-moz-transition: color .3s ease-in-out;transition: color .3s ease-in-out;}
		.evento .titulo .eliminar{position: absolute;	top: 2px;right: 82px;}
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
	
	<!-- Mensjae cunado se ha creado un evento satisfactoriamente	 -->
	<!-- Se debe agregar la clase "show" para que se pueda visualizar -->
	<div id="contenedor-alerta" class="cleaner eventocreado show">
		<div class="texto cleaner"><i class="icon-acierto icono"></i>&nbsp;Evento creado</div>
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
												<h1>Mis eventos creados</h1><em>12 unidades</em>
											</div>
											<div class="col-md-4 cleaner">
												<select name="departamento" id="filtrar" class="myinput style2">
													<option value=""></option>
													<option value="">Tema 1</option>
													<option value="">Tema 1</option>
													<option value="">Tema 1</option>
							             		</select>
											</div>
										</div>
									</div>														
									<div class="bottom cleaner">
										<div class="cleaner">
											<a class="mybut but-style1 load-animated crearevento" href="perfil_crear_evento.php"><i class="icon-add animated"></i>&nbsp;Crear nuevo evento</a>
										</div>																		
										<!-- Load all activities -->
										<div id="listar-eventos" class="cleaner">											
											<div class="evento cleaner">
												<div class="cleaner titulo">
													<div class="cleaner">
														<h2>El nombre de mi evento creado para el bien de la comunidad. De</h2>
													</div>
													<div class="editar cleaner"><a href="javascript:void(0)" class="toanimated1">editar&nbsp;<i class="icon-editar animated"></i></a></div>
													<div class="eliminar cleaner"><a href="javascript:void(0)" class="toanimated1">eliminar&nbsp;<i class="icon-error animated"></i></a></div>
												</div>
												<div class="cleaner">
													<div class="cleaner datos">
														<div class="tablita2 cleaner">
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-calendar"></i>Lunes <em>25</em> de Febrero, <em>2014</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-time"></i>12:00 <em>pm</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-place"></i>Plaza de Armas Curazo</p>
																</div>
															</div>
														</div>
													</div>
													<div class="cleaner descripcion text-limited">
														<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
													</div>											
												</div>
											</div>

											<div class="evento cleaner">
												<div class="cleaner titulo">
													<div class="cleaner">
														<h2>El nombre de mi evento creado para el bien de la comunidad.</h2>
													</div>
													<div class="editar cleaner"><a href="javascript:void(0)" class="toanimated1">editar&nbsp;<i class="icon-editar animated"></i></a></div>
												</div>
												<div class="cleaner">
													<div class="cleaner datos">
														<div class="tablita2 cleaner">
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-calendar"></i>Lunes <em>25</em> de Febrero, <em>2014</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-time"></i>12:00 <em>pm</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-place"></i>Plaza de Armas Curazo</p>
																</div>
															</div>
														</div>
													</div>
													<div class="cleaner descripcion text-limited">
														<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
													</div>											
												</div>
											</div>

											<div class="evento cleaner">
												<div class="cleaner titulo">
													<div class="cleaner">
														<h2>El nombre de mi evento creado para el bien de la comunidad.</h2>
													</div>
													<div class="editar cleaner"><a href="javascript:void(0)" class="toanimated1">editar&nbsp;<i class="icon-editar animated"></i></a></div>
												</div>
												<div class="cleaner">
													<div class="cleaner datos">
														<div class="tablita2 cleaner">
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-calendar"></i>Lunes <em>25</em> de Febrero, <em>2014</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-time"></i>12:00 <em>pm</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-place"></i>Plaza de Armas Curazo</p>
																</div>
															</div>
														</div>
													</div>
													<div class="cleaner descripcion text-limited">
														<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
													</div>											
												</div>
											</div>

											<div class="evento cleaner">
												<div class="cleaner titulo">
													<div class="cleaner">
														<h2>El nombre de mi evento creado para el bien de la comunidad.</h2>
													</div>
													<div class="editar cleaner"><a href="javascript:void(0)" class="toanimated1">editar&nbsp;<i class="icon-editar animated"></i></a></div>
												</div>
												<div class="cleaner">
													<div class="cleaner datos">
														<div class="tablita2 cleaner">
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-calendar"></i>Lunes <em>25</em> de Febrero, <em>2014</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-time"></i>12:00 <em>pm</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-place"></i>Plaza de Armas Curazo</p>
																</div>
															</div>
														</div>
													</div>
													<div class="cleaner descripcion text-limited">
														<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
													</div>											
												</div>
											</div>

											<div class="evento cleaner">
												<div class="cleaner titulo">
													<div class="cleaner">
														<h2>El nombre de mi evento creado para el bien de la comunidad.</h2>
													</div>
													<div class="editar cleaner"><a href="javascript:void(0)" class="toanimated1">editar&nbsp;<i class="icon-editar animated"></i></a></div>
												</div>
												<div class="cleaner">
													<div class="cleaner datos">
														<div class="tablita2 cleaner">
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-calendar"></i>Lunes <em>25</em> de Febrero, <em>2014</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-time"></i>12:00 <em>pm</em></p>
																</div>
															</div>
															<div class="cleaner">
																<div class="cleaner">
																	<p><i class="iconito icon-place"></i>Plaza de Armas Curazo</p>
																</div>
															</div>
														</div>
													</div>
													<div class="cleaner descripcion text-limited">
														<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
													</div>											
												</div>
											</div>
										</div>									
										<div class="cleaner loadmore">
											<a class="mybut but-style1 load-animated" href="javascript:void(0)"><i class="icon-loadmore animated"></i>&nbsp;Cargar más</a>
										</div>
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
	<!-- Limitar texto a una cantidad de caracteres -->
	<script src="privado/js/general/app.readmore.min.js"></script>
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
			// Eliminar evento
			$('.eliminar').on('click',function() {
				/* Act on the event */
				if(confirm('Deseas eliminar este evento')){
					$(this).closest('.evento').fadeOut('slow',function(){
						$(this).remove();
					});
				}
			});

			// Contenedor alerta
			$('#contenedor-alerta.show').animate({
				bottom: '-100px'
			},0, function(){
				$('#contenedor-alerta.show').animate({
					bottom: '0px'
				},1500, function(){
					setTimeout(function(){
						$('#contenedor-alerta.show').animate({
							bottom: '-100px'
						},500)
					},2000)
				});
			})

			// Reducir texto
			myReadmore(400, 'descripcion', 'leer más', 'leer menos');

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
