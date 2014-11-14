<!doctype html>
<html lang="en">
<head>
	<base href="[[++site_url]]" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="[[++site_name]]">
	<meta name="robots" content="all, index, follow">
	<meta name="googlebot" content="all, index, follow">
	<meta name="google" content="notranslate" />
	<meta name="google-site-verification" content="[[+c.g_verification]]" />
	<meta name=apple-mobile-web-app-capable content=yes>

	<!-- OG -->
	<meta property="og:site_name" content="[[++site_name]]" />
	<meta property="og:type" content="website" />
	<meta name="twitter:site" content="@[[++site_name]]"/>
	<meta name="twitter:creator" content="@[[++site_name]]">
	<meta name="twitter:card" content="summary_large_image"/>

	<!-- Favicons -->
	<!-- <link href="[[+c.icono_logo]]" rel="shortcut icon" type="image/x-icon"> -->
	<link rel="shortcut icon" href="imagenes/privado/favicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="imagenes/privado/favicons/favicon.ico" type="image/x-icon">

	<link rel="apple-touch-icon" sizes="57x57" href="[[+c.touch_icon_iphone]]" />
	<link rel="apple-touch-icon" sizes="72x72" href="[[+c.touch_icon_ipad]]" />
	<link rel="apple-touch-icon" sizes="114x114" href="[[+c.touch_icon_iphone_retina]]" />
	<link rel="apple-touch-icon" sizes="144x144" href="[[+c.touch_icon_ipad_retina]]" />
	<link rel="apple-touch-icon" sizes="320x460" href="[[+c.apple_touchstartup_image]]" />
	
	<title>[[*page_title]]</title>
    <meta name="description" content="[[*page_description]]">
    <meta property="og:title" content="[[*page_title]]" /> 
    <meta property="og:url" content="[[++site_url]][[~id]]" />
    <meta property="og:image" content="[[*page_imagen]]" />
    <meta property="og:description" content="[[*page_description]]" /> 
    <meta name="twitter:image:src" content="[[*page_imagen]]"/>
  
	<!-- {Estilos para IE, va en todas las páginas}	 -->
	<!--[if IE]>
		<link href="css/general/ie.css" rel="stylesheet" type="text/css" />
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->	
	<link rel="stylesheet" href="privado/css/general/normalize.min.css">
	<link rel="stylesheet" href="privado/css/general/fuentes.min.css">
	<link rel="stylesheet" href="privado/css/general/myicons.min.css">
	<link rel="stylesheet" href="privado/css/general/animate.min.css">
	<link rel="stylesheet" href="privado/css/general/each.validate.min.css">
	<style type="text/css">
		.pulse{
			animation-name: pulse;
			-webkit-animation-name: pulse;	

			animation-duration: 1.5s;	
			-webkit-animation-duration: 1.5s;

			animation-iteration-count: infinite;
			-webkit-animation-iteration-count: infinite;
		}

		@keyframes pulse {
			0% {
				transform: scale(0.9);
				opacity: 0.7;		
			}
			50% {
				transform: scale(1);
				opacity: 1;	
			}	
			100% {
				transform: scale(0.9);
				opacity: 0.7;	
			}			
		}

		@-webkit-keyframes pulse {
			0% {
				-webkit-transform: scale(0.95);
				opacity: 0.7;		
			}
			50% {
				-webkit-transform: scale(1);
				opacity: 1;	
			}	
			100% {
				-webkit-transform: scale(0.95);
				opacity: 0.7;	
			}			
		}
			
		html, body {
			width:100%;
			height:100%;
		}
		body > div {
			position:fixed;
			top:0;
			left:0;
			width:100%;
			height:100%;
			background:transparent center no-repeat;
			background-size:cover;
			overflow:hidden;
		}
		.gotoregister>i{margin-left: 5px;-webkit-transform: rotate(180deg);
		-ms-transform: rotate(180deg);
		-o-transform: rotate(180deg);
		transform: rotate(180deg);
		vertical-align: -7px;
		}
		.gotoregister{
			position: absolute;
			top: 30px;
			right: 30px;
			width: 140px;
			height: 30px;
			font: 20px helveticaLt;
			color: #148dbf;
		}
		.gotoregister:hover{color: #066F9B}

		#seccion3 .fondo,
		#seccion1 .fondo{
			overflow: hidden;
			-webkit-transition: all .2s ease-in-out;
			-o-transition: all .2s ease-in-out;
			transition: all .2s ease-in-out;
			background: #e7f9fc;
			height: 100%;
			background-image: url('imagenes/privado/fondos/nubes.png');
			background-repeat: no-repeat;
			background-position: center bottom;
			background-size: cover;
			width: 100%;
			position: absolute;
			top: 0;
		}		
		
		.logo{
			position: relative;
			z-index: 1;
			width: 100px;
			margin: 0 auto;
		}

		.main-bg {	
			height:100%;
			background-color: #d2f1f6;
			background-size: cover;
			background-position: 0 0;
			position: relative;
		}

		.elcambio{ position: absolute; width: 700px; height: 500px; margin:auto;left:0;right: 0;bottom: 0;top:0;text-align: center;}
		
		.tablita{display: table;width:100%;height: 100%}
		.tablita>div{display: table-cell;vertical-align: middle;}

		/*Contenido*/
		.maincontent{max-width: 800px; position: absolute;left:0;right: 0;bottom: 0;top:0;text-align: center;height:500px;z-index: 1;margin: auto;}
		h1{font:70px helveticaBd;color:#148dbf;}
		/*El cambio de pende de ti*/
		h2{font:60px helveticaBd;color:#148dbf;}
		h3{font:30px helveticaLt;color:#148dbf;}
		

		.maincontent2{max-width: 900px !important}
		.botones{width: 100%;margin: 20px auto}
		.botones>div{width: 45%;display: inline-block;}
		.text-bottom{vertical-align: -5px;}

		.scroll>img{width:100%;}
		.scroll{
			width: 50px;
			height: 50px;	
			position: absolute;
			bottom: 10px;
			left: 0;
			right: 0;
			margin: auto;
			z-index: 1;
		}

		#contenedor{
			position: relative;
			width: 100%;
			height: 100%;
		}

		#mapa{
			width: 420px;
			margin: auto;
			height: 600px;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			position: absolute;
		}
		#costa{
			left: -560px;
			top: 0;
			position: absolute;
			width: 700px;
		}
		#sierra{
			left: -658px;
			top: -40px;
			position: absolute;
			width: 900px;
		}
		#selva{
			left: -690px;
			top: -110px;
			position: absolute;
			width: 1000px;
		}

		#animacion{position: absolute;top:0;left:0;margin:auto;width: 100%;height: 100%}
		#selva img,
		#sierra img,
		#costa img{width: 100%}

		#costa .texto{
			max-width: 300px;
			text-align: center;
			margin-left: 128px;
		}
		#sierra .texto{
			max-width: 300px;
			text-align: center;
			margin-left: 100px;
		}
		#selva .texto{
			max-width: 300px;
			text-align: center;
			margin-left: 88px;
		}

		@media only screen and (max-width: 1300px){
			#costa .texto{margin-left: 85px;}
			#sierra .texto{margin-left: 85px;}
			#selva .texto{margin-left: 85px;}
			.elcambio{width: 600px}

			#selva {
				left: -460px;
				top: 21px;
				position: absolute;
				width: 701px;
			}
			#costa {
				left: -460px;
				top: 10px;
				position: absolute;
				width: 600px;
			}
			#sierra {
			left: -510px;
			top: -40px;
			position: absolute;
			width: 700px;
			}
		}
		@media only screen and (max-width: 1030px){			

			.elcambio{width: 380px}
		}


	</style>
</head>
<body class="nohome">
	

	<div id="seccion1" data-0="transform:translate(0%,0%);" data-100="transform:translate(0%,-100%);">
		<a class="logo cleaner" href="./"><img src="imagenes/branding/logo.png" alt="Ninja"></a>
		<div class="maincontent cleaner">
			<div class="tablita cleanerr">
				<div class="cleaner">
					<h1>Encuentra a todos los grupos Ninja en el pais</h1>
				</div>
			</div>
		</div>
		<div class="scroll cleaner animated pulse"><img src="imagenes/privado/complementos/scroll.png" alt="scroll" rel="nofollow"></div>
		<div class="fondo cleaner"></div>
		<a href="registrar_organizacion.php" class="cleaner toanimated4 gotoregister">Saltar intro<i class="icon-atraz animated"></i></a>
	</div>

	<div id="seccion2" data-0="transform:translate(0%,100%);" data-100="transform:translate(0%,0%)" data-24500="transform:translate(0,0%);" data-25000="transform:translate(0,-100%);">
		<div class="main-bg">		

			<div id="animacion" class="cleaner">

				<div id="contenedor" class="cleaner">
					
					<div id="mapa" class="cleaner" 
							data-0="opacity:0;diplay:none" 
						data-1000="opacity:0;display:block" 
						data-2000="opacity:1;left:0%" 					
						data-3000="opacity:1;left:30%" 					
						data-10000="display:block;"
						data-23000="display:block;"
						data-24000="opacity:1;left:0%"
						data-24500="opacity:0;"
					>
						<!-- Mapa del Perú -->
						<img src="imagenes/privado/intro/peru.jpg" alt="peru">

						<div id="costa" class="cleaner">
							<img src="imagenes/privado/intro/costa.png" alt="costa"
									data-0="opacity:0;diplay:none; transform:scale(0)" 
								data-3000="opacity:0;display:block; transform:scale(0)"
								data-5000="opacity:1; transform:scale(1)" 					
								data-7000="transform:scale(1)"
								data-9000="transform:scale(0)"
							>
							<div class="texto cleaner"
									data-0="opacity:0;diplay:none; transform:scale(0)" 
								data-3000="opacity:0;display:block; transform:scale(0)"
								data-5000="opacity:1; transform:scale(1)" 					
								data-7000="transform:scale(1)"
								data-9000="transform:scale(0)"
							>
								<h3>Más de 100 grupos Ninja en la Costa</h3>
							</div>
						</div>
						<div id="sierra" class="cleaner">
							<img src="imagenes/privado/intro/sierra.png" alt="sierra"
									data-0="opacity:0;diplay:none; transform:scale(0)" 
								data-8000="opacity:0;display:block; transform:scale(0)"
								data-10000="opacity:1; transform:scale(1)" 					
								data-12000="transform:scale(1)"
								data-14000="transform:scale(0)"
							>
							<div class="texto cleaner"
									data-0="opacity:0;diplay:none; transform:scale(0)" 
								data-8000="opacity:0;display:block; transform:scale(0)"
								data-10000="opacity:1; transform:scale(1)" 					
								data-12000="transform:scale(1)"
								data-14000="transform:scale(0)"
							>
								<h3>Más de 100 grupos Ninja en la Costa</h3>
							</div>

						</div>
						<div id="selva" class="cleaner">
							<img src="imagenes/privado/intro/selva.png" alt="selva"
									data-0="opacity:0;diplay:none; transform:scale(0)" 
								data-15000="opacity:0;display:block; transform:scale(0)"
								data-17000="opacity:1; transform:scale(1)" 					
								data-19000="transform:scale(1)"
								data-21000="transform:scale(0)"
							>
							<div class="texto cleaner"
									ddata-0="opacity:0;diplay:none; transform:scale(0)" 
								data-15000="opacity:0;display:block; transform:scale(0)"
								data-17000="opacity:1; transform:scale(1)" 					
								data-19000="transform:scale(1)"
								data-21000="transform:scale(0)"
							>
								<h3>Más de 100 grupos Ninja en la Costa</h3>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			


		</div>
	</div>

	<div id="seccion3" data-0="transform:translate(0%,100%)" data-24500="transform:translate(0%,100%)" data-25000="transform:translate(0%,0%)">
		<div class="maincontent maincontent2 cleaner">
			<div class="tablita cleanerr">
				<div class="cleaner">
					<div class="cleaner">
						<h2>Listo para apoyar a los NiNjas</h2>
					</div>
					<div class="cleaner botones">
						<div class="cleaner">
							<a href="javascript:void(0)" class="mybut but-style1 spacing" target="_blank"><img src="imagenes/privado/complementos/like.png" alt="" class="text-bottom">&nbsp;#SOMOSNINJA</a>
						</div>
						<div class="cleaner">
							<a href="javascript:void(0)" class="mybut but-style1 spacing"><i class="icon-home"></i>&nbsp;Volver al home</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>		
		
		
		<div class="fondo cleaner"></div>
	</div>
	
	

	<!-- ==================================
	{{Plugins que van solo en esta página}}
	=================================== -->	
	<script type="text/javascript" src="privado/js/general/jquery.1.11.0.min.js"></script>
	<script type="text/javascript" src="privado/js/paralaxscroll/skrollr.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$(window).scroll(function(){
				var scroll  = $(window).scrollTop();
				console.log(scroll);

				
			})
		})

		skrollr.init({
			constants: {
				//fill the box for a "duration" of 150% of the viewport (pause for 150%)
				//adjust for shorter/longer pause
				box: '5000p'
			}
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
            	window.location.href = './'

            }else{            	

            	switch(true){
	                case (is_chrome):
	                    
	                    break;

	                case (is_firefox):	                	

	                    break;

	                case (is_safari):	                	

	                    break;

	                case (is_opera):

	                    break;	                    

	                default:
	                	
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
