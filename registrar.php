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
		.registro{max-width: 1030px;margin:50px auto 0 auto;}
		.categoria{padding: 30px 40px 40px 40px;text-align: center;}
		.categoria h3{font:28px helveticaBd ;color: #148dbf;min-height: 95px}
		.categoria .description{padding: 20px 0}
		.categoria p{font:18px helveticaLt ;color: #405506}
		.boxes .box:first-child{border-right: 1px solid #DADADA;}
		.boxes .box:last-child{border-left: 1px solid #fff;}
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
								<h1>Registrar</h1>
							</div>
							<div class="cleaner">
								<h2>Elige la opción que se acomode más a tu perfil</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="registro cleaner">		
				<div class="cleaner row boxes">
					<div class="col-md-6 cleaner box">
						<div class="categoria cleaner">
							<h3>¿Eres un individuo o agrupación?</h3>
							<div class="description cleaner">
								<p>niñas, niños y jóvenes (hasta 30 años), que estas aportando el ambiente ingresa a Soy NINJA”</p>
							</div>							
							<div class="cleaner ta-center ">
								<a href="javascript:void(0)" class="mybut but-style1 spacing"><i class="icon-user"></i>&nbsp;Soy Ninja</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 cleaner box">
						<div class="categoria cleaner">
							<h3>¿Eres una organización privada o pública?</h3>
							<div class="description cleaner">
								<p>y quieres apoyar a los NINJA y promover los derechos de los niños ingresa a "Apoyo a los NINJA"</p>
							</div>							
							<div class="cleaner ta-center ">
								<a href="javascript:void(0)" class="mybut but-style2 spacing"><i class="icon-briefcase"></i>&nbsp;Apoyo a los Ninja</a>
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
