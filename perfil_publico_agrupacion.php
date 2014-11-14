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
		h4{font:17px helveticaLt;color:#666666;}
		#data{padding: 10px}
		#data .section{padding: 10px 5px}
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
									<div id="foto" class="cleaner">
										<div class="cleaner">
											<img src="imagenes/usuarios/foto.jpeg" alt="" title="">
										</div>										
									</div>
									<div id="data" class="cleaner">
										<div class="cleaner row">
											<div class="col-md-12 cleaner control-clone">
												<div class="cleaner section">
													<h4>Nombre del responsable</h4>
												</div>																
											</div>
											<div class="col-md-12 cleaner control-clone">
												<div class="cleaner section">
													<h4>Teléfono</h4>
												</div>																
											</div>
											<div class="col-md-12  cleaner control-clone">
												<div class="cleaner section">
													<h4>Correo electrónico</h4>															
												</div>																
											</div>
											<div class="col-md-12  cleaner control-clone">
												<div class="cleaner section">
													<h4>Lima, Lima, Lima ( Altura de la Municipalidad de Lima )</h4>															
												</div>																
											</div>	
											<div class="col-md-12  cleaner control-clone">
												<div class="cleaner section">
													<h4>Página web</h4>															
												</div>																
											</div>	
											<div class="col-md-12  cleaner control-clone">
												<div class="cleaner section">
													<h4>Link de facebook</h4>															
												</div>																
											</div>
										</div>	
									</div>							
								</div>
							</div>						
							<div class="col-md-9 cleaner">
								<div id="content-eventos" class="cleaner">									
									<div class="top cleaner">
										<div class="cleaner row">
											<div class="col-md-8 cleaner marino spacetop">
												<h1>Nombre de la agrupación</h1>
											</div>											
										</div>
									</div>
									<div class="bottom cleaner">										
										<div class="container-fluid general-control-clone cleaner">
											<div class="cleaner row">																										
												<div class="cleaner seccion">
													<div class="control-clone cleaner">
														<h2>Acerca de la agrupación:</h2>
													</div>
													<div class="row cleaner">
														<div class="col-md-12 cleaner control-clone area-contador">
															<h4>Este es un resumen de la página de la web. Este es un resumen de la página de la web. Este es un resumen de la página de la web. Este es un resumen de la página de la web. Este es un resumen de la página de la web. Este es un resumen de la página de la web. Este es un resumen de la página de la web. </h4>
														</div>															
													</div>
												</div>

												<div class="cleaner cleaner seccion">
													<div class="control-clone cleaner">
														<h2>Últimos eventos</em>:</h2>
													</div>
													<div class="row cleaner">
														<div id="listar-eventos" class="cleaner col-md-12">											
															<div class="evento cleaner">
																<div class="cleaner titulo">
																	<div class="cleaner">
																		<h2><a href="javascript:void(0)">El nombre de mi evento creado para el bien de la comunidad. De</a></h2>
																	</div>
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
																		<h2><a href="javascript:void(0)">El nombre de mi evento creado para el bien de la comunidad.</a></h2>
																	</div>																		
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
																		<h2><a href="javascript:void(0)">El nombre de mi evento creado para el bien de la comunidad.</a></h2>
																	</div>																		
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
																		<h2><a href="javascript:void(0)">El nombre de mi evento creado para el bien de la comunidad.</a></h2>
																	</div>																		
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
																		<h2><a href="javascript:void(0)">El nombre de mi evento creado para el bien de la comunidad.</a></h2>
																	</div>																		
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
													</div>
												</div>		
												
											</div>
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
	<script src="privado/js/general/app.readmore.min.js"></script>
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
			// Reducir texto
			myReadmore(400, 'descripcion', 'leer más', 'leer menos');

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
