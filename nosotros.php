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
	<link rel="stylesheet" type="text/css" href="privado/css/grids/grid.min.css">
	<style>	
		.banner{width: 100%;border:3px solid #fff;}
		p{font:18px helveticaLt;color: #666666;padding: 5px 0}
		h3{font:22px helveticaBd;color: #148dbf;padding-bottom: 10px;}
		h4{font:18px helveticaLt;color: #666666;text-align: justify;}
		.caja-1 img{
			max-width: 100px;
			margin: 30px auto;
		}
		.lista-aliados{margin: 20px auto}
		.categoria{margin:10px auto;}
		.third,
		.second,
		.first{padding: 30px 0}
		.thebox{padding: 50px;background: #fff;}
		h4{color: #666666;font:22px helveticaLt;text-align: center;}
		h5{color: #f19c49;font:45px helveticaBd;text-align: center;}
		

		@media only screen and (max-width: 992px){.toiframe{margin-bottom: 10px;}}
		@media only screen and (max-width: 600px){
			
			.third, .second, .first{padding: 10px 0}
			.thebox{padding: 10px}
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
<body id="seccionpublica" class="nohome">
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

	<section id="seccion-principal" class="cleaner">
		<article id="contenido" class="cleaner">
			<div class="public-titulo cleaner">
				<div class="container-fluid cleaner">
					<div class="row cleaner">
						<div class="cleaner col-md-12">
							<div class="cleaner">
								<h1>Conoces un poco más de Ania</h1>
							</div>
							<div class="cleaner">
								<h2>Un slogan que pueda caracterizas al Gurpo de Ninja</h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div  class="lista-aliados cleaner container-fluid">																	
				<div class="bottom cleaner">																					
					<!-- Load all activities -->
					<div id="content-indicadores" class="cleaner">

						<div class="first cleaner">
							<div class="row cleaner">
								<div class="col-md-12 cleaner">
									<div class="row cleaner">
										<div class="col-md-7 cleaner">
											<div class="toiframe cleaner">
												<iframe id="myvideo" title="Ania" type="text/html" src="http://www.youtube.com/embed/_vzodIAXSQQ?&rel=0&controls=1&showinfo=0&modestbranding=1&enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer&autoplay=0&loop=1&wmode=transparent" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>	
											</div>
										</div>
										<div class="col-md-5 cleaner">
											<div class="texto cleaner">
												<p>Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.  No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset".</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="second cleaner">
							<div class="row cleaner">
								<div class="col-md-12 cleaner">
									<img src="imagenes/nosotros/banner.jpg" alt="Somos Ninja" class="banner">
								</div>
							</div>
						</div>

						<div class="third cleaner">
							<div class="row cleaner">
								<div class="col-md-12 cleaner">
									<div class="row cleaner">
										<div class="col-md-6 cleaner">
											<div class=" animated thebox cleaner">
												<div class="cleaner">
													<h3>Desde el año pasado </h3>
												</div>
												<div class="cleaner">
													<p>Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
													<p>No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset".</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 cleaner">
											<div class=" animated thebox cleaner suscritos">
												<div class="cleaner">
													<h4>Actualmente somos</h4>
												</div>
												<div class="cleaner">
													<h5><span id="seguidores">0</span> subcriptores</h5>
												</div>
												<div class="cleaner">
													<p>No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. </p>
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
	<!-- Limitar texto a una cantidad de caracteres -->
	<script src="privado/js/general/app.readmore.min.js"></script>
	<!-- Item transition -->
	<script src="privado/js/inview_transition/inview.min.js"></script>
	<script src="privado/js/inview_transition/transit.min.js"></script>
	<script src="privado/js/inview_transition/app.inview.min.js"></script>

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

				loadInviews();
				
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
			// Reducir texto
			myReadmore(400, 'descripcion', 'leer más', 'leer menos');

			
				
		});

		function loadInviews(){
			$('.third').one("inview",function(){
				$('.thebox').addClass('fadeIn')



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
			});

			$('#complement').one("inview",function(){
				$(this).css('background-color','#8eb81d');
			});
			$('#content-map').one("inview",function(){
				loadGmaps();
				$(this).off("inview");
			});
		}
    	
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
