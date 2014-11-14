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
	<link rel="stylesheet" href="privado/css/general/jpreloader.min.css">
	<link rel="stylesheet" href="privado/css/select/select2.min.css">
	<link rel="stylesheet" href="privado/css/sliders/owl.carousel.min.css">
	<style>
		.text-bottom{vertical-align: middle;}
		.footer{text-align: center; padding: 20px 0}
		.footer h3{font:14px Verdana; color: #fff;}
		#logo img{max-width: 190px}
		#logo{margin: 20px auto}
		.border-b{border-bottom: 1px solid #6b8d11;padding: 10px 0; -webkit-box-shadow: 0 1px 0 #a5d32a;box-shadow: 0 1px 0 #a5d32a;}
		#logo img{opacity: 0}
		.maintitle{max-width: 1000px;text-align: center;margin: 0 auto;padding: 40px 0}
		h1{font:35px helveticaBd ;color: #148dbf}
		h2{font:35px helveticaBd ;color: #148dbf}
		
		#presentacion{background: #e7f9fc;min-height: 670px;-webkit-background-size: cover;
		background-size: cover; background-position: center center;}
		#complement{padding: 50px 0 0}
		#complement .boxes .box:nth-child(1){border-right: 1px solid #6b8d11}
		#complement .boxes .box:nth-child(2){border-left: 1px solid #a5d32a}
		.content-slider{text-align: center;margin: 0 auto;padding: 10px 0}
		.content-slider .subtitle{padding: 0 130px}
		.categoria{padding: 30px 50px 50px 50px}
		.toplay i{vertical-align: middle;}
		.toplay{padding:10px 0;text-align: center;}
		.toplay i:before{color: #fff;font-size: 20px;}
		.toplay:hover span{text-decoration: underline}
		.toplay span{padding-left: 10px; font:18px helveticaBd;color: #334405;vertical-align:middle}
		.categoria h3{font:28px helveticaBd ;color: #fff}
		.categoria .description{padding-top: 30px}
		.categoria p{font:18px helveticaLt ;color: #405506}
		.mtop{margin-top: 30px;}
		.but-toplay{margin: 40px auto}
		#misagrupaciones{background: #fff;padding-top:30px}
		#misagrupaciones .logito{text-align: center;padding: 10px 0}
		#misagrupaciones .logito img{width: 100%;max-width: 120px;}
		h4{font: 38px helveticaLt;color: #148dbf}
		h4>i{font: 38px helveticaBd;color: #148dbf}
		.otras-agrupaciones{background: #e7f9fc;padding: 20px 0}
		.otras-agrupaciones .col-md-4:nth-child(1){padding-top: 20px;}
		.otras-agrupaciones .col-md-4:nth-child(2){padding-top: 15px;}
		.tablita{display:table;}
		.tablita>div{display:table-cell;vertical-align: middle;}
		.maxwidth{max-width: 70%;margin:0 auto;}

		/*GMaps*/
		#gm-mensaje{
			background: #fff;
			width: 130px;
			height: 50px;
			overflow: hidden;
		}
		#gm-mensaje .top{display: table;}
		#gm-mensaje .top>div{display: table-cell;vertical-align: middle;}
		#content-map{position: relative;}
		#content-map .conteninfo{position: absolute;width: 100%;top: 0;left: 13%;margin: auto;max-width: 360px;max-height: 360px;}
		#content-map .caja-info{width:330px;background: #fff;margin-top: 20px;}
		#content-map .caja-info .padding{padding: 20px}
		#content-map .caja-info .toinput{padding-bottom: 20px}
		#content-map .caja-info .title{background: #8eb81d;text-align: center;border-top-left-radius: 3px;border-top-right-radius: 3px;}
		#content-map .caja-info .title p{color: #fff;font:23px helveticaLt;}
		#frm-buscar button{width: 100%;display: block;padding-top: 15px;padding-bottom: 15px;font-size: 23px;}

		/*Logos*/
		.aliados{padding: 40px 0}
		.maxlogos{max-width: 800px;margin: auto;text-align: center;}
		.aliados h6{font:18px helveticabD;color: #344506;padding-top: 30px;}
		.flechas{position: relative;}
		.flechas .toleft {position: absolute;left:-70px;top:0;bottom:0;margin:auto;width:40px;height:40px;}
		.flechas .toright {position: absolute;right:-70px;top:0;bottom:0;margin:auto;width:40px;height:40px;}
		.flechas [class^="icon-"]{color: #698a0f;cursor: pointer;}
		.flechas [class^="icon-"]:before{font-size: 40px}
		.flechas [class^="icon-"]:hover{color: #547008}

		h5{color: #148dbf;font:20px helveticaLt;}
		h5>i{color: #148dbf;font:20px helveticaBd;}
		
		#genteinvolucrada{background: #fff;}
		#genteinvolucrada h3{color:#65d2e8;font:38px helveticaLt;}
		#genteinvolucrada h3>i{color:#65d2e8;font:38px helveticaBd;}
		
		@media only screen and (max-width: 992px){
			.otras-agrupaciones .col-md-4:nth-child(2){padding-top: 30px;padding-bottom: 30px;}	
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
<body>
	<section id="jSplash">
		<img src="imagenes/branding/logo2.png" alt="Ania">
	</section>

	<!-- ===================================
	{{Contenido principal}}
	==================================== -->
	<section id="seccion-principal" class="cleaner">
		<article id="presentacion" class="cleaner" style="background-image: url('imagenes/landing/banner.jpg');">
			<div class="cleaner maintitle">
				<h1>Muy pronto el movimiento NiNJA, ¡No esperas más!</h1>
				<h2>y ve sumándote entrando a nuestra página de Facebook.</h2>
				<figure class="cleaner" id="logo">
					<img src="imagenes/branding/logo.png" alt="" title="" >
				</figure>
			</div>
			<div class="cleaner ta-center ">
				<a href="https://www.facebook.com/SomosNinja" class="mybut but-style1 spacing" target="_blank"><img src="imagenes/privado/complementos/like.png" alt="" class="text-bottom">&nbsp;#SOMOSNINJA</a>
			</div>
		</article>
		<article class="cleaner footer container-fluid">
			<h3>Copyright. 2014 Somos Ninja. Todo los derechos reservados.</h3>
		</article>		
	</section>

	<!-- ==========================================
	{{fin del contenido principal}}
	=========================================== -->

	<!-- ===================================
	{{Chunk site_footer}}
	==================================== -->
	<!-- ===================================
	{{Chunk site_footer}}
	==================================== -->

	<!-- ===================================
	{{Chunk site_js_general}}
	==================================== -->
	<!-- {Modernizr} -->
	<script src="privado/js/general/modernizr.min.js"></script>
	<!-- {jQuery} -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="privado/js/general/jquery.1.11.0.min.js"><\/script>')</script>
	<!-- ==========================================
	{{fin de Chunk site_js_general}}
	=========================================== -->

	<!-- ==================================
	{{Plugins que van solo en esta página}}
	=================================== -->	
	<!-- {Loading Page} -->
	<script src="privado/js/general/jpreloader.min.js"></script>
	<!-- {Font responsive} -->
	<script src="privado/js/general/fiftext.min.js"></script>	

	<!-- =========================================
	{{fin de Plugins que van solo en esta página}}
	========================================== -->	 
	<script>
		$(window).on({
			load: function(){ 	
				var altura = $(window).height();
				$('#presentacion').height(altura-60);
			},
			resize: function(){
				
			}
		});

		$(document).ready(function($) {

			

			// Formulario de búsqueda
			$('#frm-buscar').submit(function(){
				if($('#departamento').val() == "" && $('#agrupaciones').val() == ""){
					$('.toinput').addClass('error');
					return false;
				}else{
					$('.toinput').removeClass('error');
					return false;
				}
			})			

			// [x] Cargador de página de inicio
			var timer;
			$('body').jpreLoader({
				splashID: "#jSplash",
				showPercentage: false,
				autoClose: true
			}, function() {				
				clearInterval(timer);
				$('#logo img').animate({"opacity":'1'}, 200, function() {

					$('body').addClass('iniciado');
					$("h1").fitText(1.6, { minFontSize: '20px', maxFontSize: '35px' });
					$("h2").fitText(1.6, { minFontSize: '20px', maxFontSize: '35px' });
								
				});
			});		
		});
	</script>
	
	<script>
      
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
	                    break;

	            }
               
            }            
        }
		window.onload = comprobarnavegador();
	</script>
	
	</body>
</html>
