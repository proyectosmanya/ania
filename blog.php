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
	<link rel="stylesheet" type="text/css" href="privado/css/codrops/load_scrolling/component.min.css" />
	
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
		.tocapa{position: relative;overflow: hidden;}
		.tocapa .capita{position: absolute;top: 0;left: 0;background: rgba(46, 196, 228, 0.78);width: 100%;height: 100%}
		.tocapa .informacion-evento{
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			z-index: 2;
		}
		.tocapa:hover .info-evento{
			top: 50%;
			opacity: 1;			
			-webkit-transform: translateY(-50%);
			-moz-transform: translateY(-50%);
			-o-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);					
		}

		.info-evento i{font-size:25px;}
		.info-evento em{font:18px helveticaLt;}
		.info-evento{
			color: #fff;
			text-align: center;
			position: relative;
			opacity: 0;
			top: 20%;				
			-webkit-transform: translateY(20%);
			-moz-transform: translateY(20%);
			-o-transform: translateY(20%);
			-ms-transform: translateY(20%);
			transform: translateY(20%);
			
			-webkit-transition: all .3s ease-in-out .3s !important;
			-moz-transition: all .3s ease-in-out .3s !important;
			-o-transition: all .3s ease-in-out .3s !important;
			-ms-transition: all .3s ease-in-out .3s !important;
			transition: all .3s ease-in-out .3s !important;
		}
		.evento .tablita2{display: block;margin-bottom: 7px;}
		.evento .tablita2>div{display: block;padding: 0 0 5px 0}
		.evento .tablita2>div:last-child{padding-left: 0;}
		.evento .tablita2>div{border-right: 0 !important}
		#grid li{
			-webkit-transition: left .3s ease-in-out;
			-o-transition: left .3s ease-in-out;
			transition: left .3s ease-in-out;
		}
		.evento .titulo .editar{display: none}
		#seccionpublica .evento {padding: 10px;margin: 0}
		#seccionpublica .evento .nombre{padding: 0}
		.evento h3{font:20px helveticaBd;color: #148dbf;padding: 10px 0}
		.evento .descripcion{border-top: 1px solid rgba(109, 129, 101, 0.2);}
		.btn-text-limited{display: none !important}

		.tocapa:hover .mihover{opacity: 1;}
		.tocapa .mihover{
			opacity: 0;
			-webkit-transition: opacity .4s ease-in-out;
			-o-transition: opacity .4s ease-in-out;
			transition: opacity .4s ease-in-out;
		}

		.tocapa img{
			width: 100%;
			height: auto;
			opacity: 1;	
			-moz-transition: -moz-transform 0.4s ease-in, opacity 0.1s ease-in-out 0s;
			-webkit-transition: -webkit-transform 0.4s ease-in, opacity 0.1s ease-in-out 0s;
			-o-transition: -o-transform 0.4s ease-in, opacity 0.1s ease-in-out 0s;
			-ms-transition: -ms-transform 0.4s ease-in, opacity 0.1s ease-in-out 0s;
			transition: transform 0.4s ease-in, opacity 0.1s ease-in-out 0s;			
		}
		.tocapa:hover img{
			-moz-transform:scale(2,2);
			-webkit-transform:scale(2,2);
			-o-transform:scale(2,2);
			-ms-transform:scale(2,2);
			transform:scale(2,2);
			opacity: 0.9;
			-webkit-transition-delay: 0s;
			-moz-transition-delay: 0s;
			-o-transition-delay: 0s;
			-ms-transition-delay: 0s;
			transition-delay: 0s;
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
								<h1>Nuestro BLOG</h1>
							</div>
							<div class="cleaner">
								<h2>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="listadeeventos cleaner">		
				<ul class="grid effect-6 load-posts" id="grid">
					<!-- Cargar las noticias -->					
				</ul>
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
	<!-- Load more - progresive -->
	<!-- {Nedd clasic from Codrops} -->
	<script src="privado/js/codrops/load_scrolling/modernizr.custom.2.js"></script>
	<script src="privado/js/codrops/load_scrolling/masonry.pkgd.min.js"></script>
	<script src="privado/js/codrops/load_scrolling/imagesloaded.js"></script>
	<script src="privado/js/codrops/load_scrolling/AnimOnScroll.js"></script>

	<!-- {Mustache} -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.0/mustache.min.js"></script>
	<script>window.jQuery || document.write('<script src="privado/js/mustache/mustache.min.js"><\/script>')</script>
	<!-- Mustache Template -Blog-->
	<script id="tmp-blog" type="text/template">
		{{#posts}}		
			<li class="mievento {{titulo}}">					
				<div class="evento cleaner">
					<div class="cleaner nombre">
						<div class="cleaner">
							<a href="javascript:void(0)" class="tocapa">
								<img src="{{foto}}">
								<div class="mihover cleaner">
									<div class="capita cleaner"></div>
									<div class="informacion-evento cleaner">
										<div class="info-evento cleaner">
											<div class="cleaner"><i class="icon-external-link"></i></div>
											<div class="cleaner"><em>Ver detalles</em></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="cleaner">
							<h3>{{titulo}}</h3>
						</div>
						<div class="cleaner datos">
							<div class="tablita2 cleaner">
								<div class="cleaner">
									<div class="cleaner">
										<p><i class="iconito icon-calendar"></i>{{fecha}}</p>
									</div>
								</div>
								<div class="cleaner">
									<div class="cleaner">
										<p><i class="iconito icon-time"></i>{{hora}}</p>
									</div>
								</div>										
							</div>
						</div>
					</div>
					<div class="cleaner">
						<div class="cleaner descripcion text-limited">
							<p>{{descripcion}}</p>
						</div>											
					</div>							
				</div>
			</li>
		{{/posts}}
	</script>

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

				// Cargar data del blog
				$.getJSON('json/posts.json', function(data) {
				    var template = $('#tmp-blog').html();
				    var info = Mustache.to_html(template, data);
				    $('#grid').html(info);
				}).done(function(){
					// Call to animate scrolling
					new AnimOnScroll( document.getElementById( 'grid' ), {
						minDuration : 0.4,
						maxDuration : 0.7,
						viewportFactor : 0.2
					});

					// Reducir texto
					myReadmore(200, 'descripcion', '&nbsp;', '&nbsp;');
				});
				
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
