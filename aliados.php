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
		
		h3{font:22px helveticaBd;color: #148dbf;padding: 20px 10px;}
		h4{font:18px helveticaLt;color: #fff;padding: 20px 10px;text-align: center;}
		.caja-1 img{
			max-width: 100px;
			margin: 30px auto;
		}
		.lista-aliados{margin: 20px auto}
		.categoria{margin:10px auto;}	
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

	

	<!-- {jQuery} -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="privado/js/general/jquery.1.11.0.min.js"><\/script>')</script>
	<!-- ==================================
	{{Plugins que van solo en esta página}}
	=================================== -->	
	<!-- Grids Photos (App specific) -->
	<script src="privado/js/grids/imagesloaded.min.js"></script>
	<script src="privado/js/grids/wookmark.min.js"></script>

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
								<h1>Nuestros aliados en el gran cambio</h1>
							</div>
							<div class="cleaner">
								<h2>Y conóce nuestra red de apoyo</h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="lista-aliados cleaner container-fluid">
				<div class="categoria cleaner">
					<h3>Empresas de Organización Civil</h3>
					<ul class="cleaner mygrid categoria-1">
						<li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/1.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/2.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>	
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/3.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/1.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/2.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>	
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/3.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					</ul>
					<script type="text/javascript">
						// Cargar plugin para categoria-1
						$('.categoria-1').imagesLoaded(function() {				
							var options = {
								itemWidth: 280,
								autoResize: true,
								container: $('.categoria-1'),
								offset: 20,
								outerOffset: 10,
								flexibleWidth: 300
							};
							var handler = $('.categoria-1 li');
							handler.wookmark(options);
						});
					</script>
				</div>
				<div class="categoria cleaner">
					<h3>Empresas de Organización Civil</h3>
					<ul class="cleaner mygrid categoria-2">
						<li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/1.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/2.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>	
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/3.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/1.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/2.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>	
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/3.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					</ul>
					<script type="text/javascript">
						// Cargar plugin para categoria-2
						$('.categoria-2').imagesLoaded(function() {				
							var options = {
								itemWidth: 280,
								autoResize: true,
								container: $('.categoria-2'),
								offset: 20,
								outerOffset: 10,
								flexibleWidth: 300
							};
							var handler = $('.categoria-2 li');
							handler.wookmark(options);
						});
					</script>
				</div>
				<div class="categoria cleaner">
					<h3>Empresas de Organización Civil</h3>
					<ul class="cleaner mygrid categoria-3">
						<li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/1.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/2.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>	
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/3.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/1.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/2.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>	
					    <li class="mievento">
					    	<div class="caja cleaner">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<img src="imagenes/aliados/3.jpg" alt="Nombre de la or">
					    		</div>
								<div class="caja-2 cleaner bg-verde">
									<h4>Nombre de la Organización</h4>
								</div>
					    	</div>
					    </li>
					</ul>
					<script type="text/javascript">
						// Cargar plugin para categoria-3
						$('.categoria-3').imagesLoaded(function() {				
							var options = {
								itemWidth: 280,
								autoResize: true,
								container: $('.categoria-3'),
								offset: 20,
								outerOffset: 10,
								flexibleWidth: 300
							};
							var handler = $('.categoria-3 li');
							handler.wookmark(options);
						});
					</script>
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
	<!-- {Modernizr} -->
	<script src="privado/js/general/modernizr.min.js"></script>	
	<!-- {Scrolling} -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.5.1/jquery.nicescroll.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/nicescroll.min.js"><\/script>')</script>	
	<script src="privado/js/general/fiftext.min.js"></script>	
	<!-- JS Codrops -->
	<script type="text/javascript" src="privado/js/codrops/classie.min.js"></script>
	<!-- {SVG Menu Ico Responsive} -->
	<script type="text/javascript" src="privado/js/codrops/menu/svgicons.snap.min.js"></script>
	<script type="text/javascript" src="privado/js/codrops/menu/svgicons.min.js"></script>
	<!-- SVG Effects Menu -->
	<script type="text/javascript" src="privado/js/codrops/menu/overlay.min.js"></script>
	<!-- {SVG Interaction} -->
	<script type="text/javascript" src="privado/js/svg_extras/app.svg.min.js"></script>
	<!-- Carrusel -->
	<script src="privado/js/slider/owl.carousel.min.js"></script>
	<!-- {My App General} -->
	<script src="privado/js/general/app.general.min.js"></script>
	<!-- ==========================================
	{{fin de Chunk site_js_general}}
	=========================================== -->
	
	
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
