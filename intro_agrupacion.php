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
			background-image:url(imagenes/privado/intro/main-bg.jpg) ;
			background-size: cover;
			background-position: 0 0;
			position: relative;
		}
		
		.nina{position: absolute; bottom:50px; width:160px; height:231px;}
		.nino{position: absolute; bottom:50px; width:160px; height:231px;}
		.carro{position: absolute; bottom:0px; right: 0; width:700px; height:auto;}
		.sol{position: absolute; top:0px; right: 20px; width:180px; height:auto;}
		.ninatriste{
			position: absolute;
			left: 10%;
			width: 500px;
			bottom: -50px;
		}
		.ninafeliz{
			position: absolute;
			left: 10%;
			width: 500px;
			bottom: -50px;
		}
		.ninotriste{
			position: absolute;
			left: 45%;
			width: 500px;
			bottom: -50px;
		}
		.ninofeliz{
			position: absolute;
			left: 45%;
			width: 500px;
			bottom: -50px;
		}
		.superman{
			position: absolute;
			left: -3%;
			width: 500px;
			bottom: -50px;
		}
		.superninja{
			position: absolute;
			right: -3%;
			width: 500px;
			bottom: -50px;
		}

		/*Hojas*/
		.hoja{height:auto;position: absolute; bottom:0px; right: 0;}
		.hoja1{width:40px;}
		.hoja2{width:80px;}
		.hoja3{width:35px;}
		.hoja4{width:30px;}

		/*Nubes*/
		.nube{height:auto;position: absolute; right: 0;}
		.nube1{width:140px;top:90px;}
		.nube2{width:180px;top:150px;}
		.nube3{width:220px;top:70px;}
		.nube4{width:290px;top:20px;}

		.elcambio{ position: absolute; width: 700px; height: 500px; margin:auto;left:0;right: 0;bottom: 0;top:0;text-align: center;}
		
		.tablita{display: table;width:100%;height: 100%}
		.tablita>div{display: table-cell;vertical-align: middle;}



		/*Contenido*/
		.maincontent{max-width: 800px; position: absolute;left:0;right: 0;bottom: 0;top:0;text-align: center;height:500px;z-index: 1;margin: auto;}
		h1{font:50px helveticaBd;color:#148dbf;}
		/*El cambio de pende de ti*/
		h2{font:60px helveticaBd;color:#148dbf;}
		h3{font:50px helveticaBd;color:#148dbf;}
		

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

		@media only screen and (max-width: 1300px){
			.superman{left: -10%}
			.superninja{right: -10%}
			.elcambio{width: 600px}
		}
		@media only screen and (max-width: 1030px){
			.ninotriste,
			.ninofeliz{left: 50%;}

			.ninafeliz,
			.ninatriste{left: 0%;}

			.superman{left: -12%}
			.superninja{right: -12%}

			.elcambio{width: 380px}
		}


	</style>
</head>
<body class="nohome">
	

	<div id="seccion1" data-0="transform:translate(0,0%);" data-100p="transform:translate(0,-100%);">
		<a class="logo cleaner" href="./"><img src="imagenes/branding/logo.png" alt="Ninja"></a>
		<div class="maincontent cleaner">
			<div class="tablita cleanerr">
				<div class="cleaner">
					<h1>Para cumplir nuestros sueños necesitamos un ambiente sano?</h1>
				</div>
			</div>
		</div>
		<div class="scroll cleaner animated pulse"><img src="imagenes/privado/complementos/scroll.png" alt="scroll" rel="nofollow"></div>
		<div class="fondo cleaner"></div>
		<a href="compromiso_ninja.php" class="cleaner toanimated4 gotoregister">Saltar intro<i class="icon-atraz animated"></i></a>
	</div>

	<div id="seccion2" data-0="transform:translate(0,100%);" data-100p="transform:translate(0,0%)" data-_box-100p="" data-_box-200p="transform:translate(0,-100%)">
		<div class="main-bg" data-100p="background-position: 0% 0%" data-_box-100p="background-position: 100% 0%">
			<div class="enanos cleaner">				
				<!-- Niña -->
				<img id="nina" src="imagenes/privado/intro/nina-a-1.png" alt="enana" rel="nofollow" class="nina" data-0="left:5%" data-15000="left:5%" data-16000="left:-50%">
				<!-- Niño -->
				<img id="nino" src="imagenes/privado/intro/nino-a-2.png" alt="enana" rel="nofollow" class="nino" data-0="left:14%" data-15000="left:14%" data-16000="left:-50%">
				
				<!-- Sol -->		
				<img src="imagenes/privado/intro/sol.png" alt="sol" rel="nofollow" class="sol"
					data-0="right: -100%; display:none;" 
					data-1200="right[linear]: 0%; display:block;" 
					data-4200="right[linear]: 50%;"
					data-8200="right[linear]: 100%;"
				>
				<!-- Carro		 -->
				<img src="imagenes/privado/intro/carro.png" alt="carro" rel="nofollow" class="carro"
					data-0="right[linear]: -100%; display:none;" 
					data-6000 ="right[linear]: -50%; display:block;" 
					data-8000="right[linear]: 0%; display:block;" 
					data-10000="right[linear]: 100%; display:block;" 
					data-12000="right[linear]: 150%; display:none;"
				>

				<!-- Hoja 1 -->
				<img src="imagenes/privado/intro/hoja-1.png" alt="hoja1" rel="nofollow" class="hoja hoja1"
						data-0="right[bounce]: 0%; top: 0%; opacity:0;diplay:none" 
					data-11000="right[bounce]: 50%; top: 18%; opacity:0;display:block" 
					data-12000="right[bounce]: 50%; top:25%; display:block;"
					data-13000="right[bounce]: 50%; top: 18%; opacity:1" 
					data-14000="right[bounce]: 25%; top: 50%; display:block;"
					data-15000="right[bounce]: 50%; top: 75%; display:block;"
					data-16000="right[bounce]: 25%; top: 100%; display:block;"
				>

				<!-- Hoja 2 -->		
				<img src="imagenes/privado/intro/hoja-2.png" alt="hoja1" rel="nofollow" class="hoja hoja2"
						data-0="right[bounce]: 0%; top: 0%; opacity:0;diplay:none" 
					data-11000="right[bounce]: 30%; top: 20%;opacity:0;display:block" 
					data-12000="right[bounce]: 55%; top: 20%; opacity:1" 
					data-13000="right[bounce]: 65%; top:25%; display:block;"
					data-14000="right[bounce]: 75%; top: 65%; display:block;"
					data-15000="right[bounce]: 85%; top: 75%; display:block;"
					data-16000="right[bounce]: 45%; top: 100%; display:block;"
				>
				<!-- Hoja 3 -->		
				<img src="imagenes/privado/intro/hoja-3.png" alt="hoja1" rel="nofollow" class="hoja hoja2"
						data-0="right[bounce]: 0%; top: 0%; opacity:0;diplay:none" 
					data-11000="right[bounce]: 15%; top: 25%; opacity:0;display:block" 
					data-12000="right[bounce]: 15%; top: 25%; opacity:1" 
					data-13000="right[bounce]: 65%; top:25%; display:block;"
					data-14000="right[bounce]: 25%; top: 35%; display:block;"
					data-15000="right[bounce]: 65%; top: 35%; display:block;"
					data-16000="right[bounce]: 35%; top: 100%; display:block;"
				>
				<!-- Hoja 4 -->		
				<img src="imagenes/privado/intro/hoja-3.png" alt="hoja1" rel="nofollow" class="hoja hoja2"
						data-0="right[bounce]: 0%; top: 0%; opacity:0;diplay:none" 
					data-11000="right[bounce]: 10%; top: 10%; opacity:0;display:block" 
					data-12000="right[bounce]: 10%; top: 10%; opacity:1" 
					data-13000="right[bounce]: 65%; top:25%; display:block;"
					data-14000="right[bounce]: 35%; top: 65%; display:block;"
					data-15000="right[bounce]: 65%; top: 75%; display:block;"
					data-16000="right[bounce]: 15%; top: 100%; display:block;"
				>
				<!-- Hoja 5 -->		
				<img src="imagenes/privado/intro/hoja-3.png" alt="hoja1" rel="nofollow" class="hoja hoja3"					
						data-0="right[bounce]: 0%; top: 0%; opacity:0;diplay:none" 
					data-11000="right[linear]: 0%;top:0%; opacity:0;display:block" 
					data-12000="right[linear]: 5%;top:35%; opacity:1;"
					data-13000="right[linear]: 5%;top:35%; opacity:1;"
					data-14000="right[linear]: 10%;top: 55%; opacity:1;"
					data-15000="right[linear]: 10%;top: 75%; opacity:1;"
					data-16000="right[linear]: 10%;top: 100%; opacity:1;"
				>
				<!-- Hoja 6 -->	
				<img src="imagenes/privado/intro/hoja-2.png" alt="hoja1" rel="nofollow" class="hoja hoja4"
						data-0="right[bounce]: 0%; top: 0%; opacity:0;diplay:none" 
					data-11000="right[linear]: 0%;top:0%; opacity:0;display:block" 
					data-12000="right[linear]: 20%;top:5%; opacity:1;"				
					data-13000="right[linear]: 20%;top:5%; opacity:1;"
					data-14000="right[linear]: 60%;top: 55%; opacity:1;"
					data-15000="right[linear]: 65%;top: 25%; opacity:1;"
					data-16000="right[linear]: 60%;top: 100%; opacity:1;"
				>

				

				<!-- {Niños tristes} -->
				<!-- Niña triste -->
				<!-- <img src="imagenes/privado/intro/nina-d-1.png" alt="ninos" rel="nofollow" class="ninatriste"
					data-0="opacity: 0; display:none;" 
					data-15500="display:block;" 
					data-16000="opacity: 1; display:block;" 
					data-17000="display:none;"
					
				>
				<img src="imagenes/privado/intro/nina-d-2.png" alt="ninos" rel="nofollow" class="ninatriste"
					data-0="display:none;" 
					data-16000="display:none;"
					data-17000="display:block;"
					data-18000="display:none;"					
				>
				<img src="imagenes/privado/intro/nina-d-3.png" alt="ninos" rel="nofollow" class="ninatriste"
					data-0="display:none;" 
					data-17000="display:none;"
					data-18000="display:block;"
					data-19000="display:none;"
				>
				<img src="imagenes/privado/intro/nina-d-4.png" alt="ninos" rel="nofollow" class="ninatriste"
					data-0="display:none;" 
					data-18000="display:none;"
					data-19000="display:block;"
					data-20000="display:none;"
				>
				<img src="imagenes/privado/intro/nina-d-5.png" alt="ninos" rel="nofollow" class="ninatriste"
					data-0="display:none;" 
					data-19000="display:none;"
					data-20000="display:block;"
					data-22000="opacity: 1;"
					data-25000="opacity: 0;"
				> -->
				<!-- end Nina triste -->

				<!-- Niño triste -->
				<!-- <img src="imagenes/privado/intro/nino-d-1.png" alt="ninos" rel="nofollow" class="ninotriste"
					data-0="opacity: 0; display:none;" 
					data-15500="display:block;" 
					data-16000="opacity: 1; display:block;" 
					data-17000="display:none;"					
				>
				<img src="imagenes/privado/intro/nino-d-2.png" alt="ninos" rel="nofollow" class="ninotriste"
					data-0="display:none;" 
					data-16000="display:none;"
					data-17000="display:block;"
					data-18000="display:none;"					
				>
				<img src="imagenes/privado/intro/nino-d-3.png" alt="ninos" rel="nofollow" class="ninotriste"
					data-0="display:none;" 
					data-17000="display:none;"
					data-18000="display:block;"
					data-19000="display:none;"
				>
				<img src="imagenes/privado/intro/nino-d-4.png" alt="ninos" rel="nofollow" class="ninotriste"
					data-0="display:none;" 
					data-18000="display:none;"
					data-19000="display:block;"
					data-20000="display:none;"
				>
				<img src="imagenes/privado/intro/nino-d-5.png" alt="ninos" rel="nofollow" class="ninotriste"
					data-0="display:none;" 
					data-19000="display:none;"
					data-20000="display:block;"
					data-22000="opacity: 1;"
					data-25000="opacity: 0;"
				> -->
				<!-- end Nino triste -->


				<!-- {Niños Felices} -->
				<!-- Niña feliz -->
				<!-- <img src="imagenes/privado/intro/nina-d-1.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="opacity: 0; display:none;" 
					data-25000="display:block;" 
					data-25500="opacity: 1; display:block;" 
					data-26000="display:none;"
					
				>
				<img src="imagenes/privado/intro/nina-d-2.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="display:none;" 
					data-25500="display:none;"
					data-26000="display:block;"
					data-26500="display:none;"					
				>
				<img src="imagenes/privado/intro/nina-d-3.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="display:none;" 
					data-26000="display:none;"
					data-26500="display:block;"
					data-27000="display:none;"
				>
				<img src="imagenes/privado/intro/nina-d-4.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="display:none;" 
					data-26500="display:none;"
					data-27000="display:block;"
					data-27500="display:none;"
				>
				<img src="imagenes/privado/intro/nina-d-5.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="display:none;" 
					data-27000="display:none;"
					data-27500="display:block;"
					data-28000="opacity: 1;bottom:-10%"
					data-32000="opacity: 0;bottom:-100%"
				> -->

				<!-- Niña feliz -->
				<img src="imagenes/privado/intro/nina-d-1.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="opacity: 0; display:none;" 
					data-15000="display:block;" 
					data-15500="opacity: 1; display:block;" 
					data-16000="display:none;"					
				>
				<img src="imagenes/privado/intro/nina-d-2.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="display:none;" 
					data-15500="display:none;"
					data-16000="display:block;"
					data-16500="display:none;"					
				>
				<img src="imagenes/privado/intro/nina-d-3.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="display:none;" 
					data-16000="display:none;"
					data-16500="display:block;"
					data-17000="display:none;"
				>
				<img src="imagenes/privado/intro/nina-d-4.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="display:none;" 
					data-16500="display:none;"
					data-17000="display:block;"
					data-17500="display:none;"
				>
				<img src="imagenes/privado/intro/nina-d-5.png" alt="ninos" rel="nofollow" class="ninafeliz"
					data-0="display:none;" 
					data-17000="display:none;"
					data-17500="display:block;"
					data-19000="opacity: 1;bottom:-10%"
					data-22000="opacity: 0;bottom:-100%"
				>

				<!-- Niño feliz -->
				<img src="imagenes/privado/intro/nino-d-1.png" alt="ninos" rel="nofollow" class="ninofeliz"
					data-0="opacity: 0; display:none;" 
					data-15000="display:block;" 
					data-15500="opacity: 1; display:block;" 
					data-16000="display:none;"					
				>
				<img src="imagenes/privado/intro/nino-d-2.png" alt="ninos" rel="nofollow" class="ninofeliz"
					data-0="display:none;" 
					data-15500="display:none;"
					data-16000="display:block;"
					data-16500="display:none;"					
				>
				<img src="imagenes/privado/intro/nino-d-3.png" alt="ninos" rel="nofollow" class="ninofeliz"
					data-0="display:none;" 
					data-16000="display:none;"
					data-16500="display:block;"
					data-17000="display:none;"
				>
				<img src="imagenes/privado/intro/nino-d-4.png" alt="ninos" rel="nofollow" class="ninofeliz"
					data-0="display:none;" 
					data-16500="display:none;"
					data-17000="display:block;"
					data-17500="display:none;"
				>
				<img src="imagenes/privado/intro/nino-d-5.png" alt="ninos" rel="nofollow" class="ninofeliz"
					data-0="display:none;" 
					data-17000="display:none;"
					data-17500="display:block;"
					data-19000="opacity: 1;bottom:-10%"
					data-22000="opacity: 0;bottom:-100%"
				>




				<!-- Superman -->
				<img src="imagenes/privado/intro/superman-1.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none;bottom:-100%" 
					data-30000="display:block;bottom:-100%" 
					data-32000="display:block;bottom:-50%" 
					data-34000="display:block;bottom:-10%" 
					data-36000="display:none;bottom:1%"					
				>
				<img src="imagenes/privado/intro/superman-2.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-36000="display:block;bottom:1%"
					data-36500="display:none;"			
				>
				<img src="imagenes/privado/intro/superman-3.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-36500="display:block;bottom:1%"
					data-37000="display:none;"				
				>
				<img src="imagenes/privado/intro/superman-4.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-37000="display:block;bottom:1%"
					data-37500="display:none;"				
				>
				<img src="imagenes/privado/intro/superman-5.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-37500="display:block;bottom:1%"
					data-38000="display:none;"				
				>
				<img src="imagenes/privado/intro/superman-6.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-38000="display:block;bottom:1%"
					data-38500="display:none;"				
				>
				<!-- 2nda vuelta -->
				<img src="imagenes/privado/intro/superman-1.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-38500="display:block;bottom:1%"
					data-39000="display:none;"			
				>
				<img src="imagenes/privado/intro/superman-2.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-39000="display:block;bottom:1%"
					data-39500="display:none;"				
				>
				<img src="imagenes/privado/intro/superman-3.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-39500="display:block;bottom:1%"
					data-40000="display:none;"				
				>
				<img src="imagenes/privado/intro/superman-4.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-40000="display:block;bottom:1%"
					data-40500="display:none;"				
				>
				<img src="imagenes/privado/intro/superman-5.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-40500="display:block;bottom:1%"
					data-41000="display:none;"				
				>
				<img src="imagenes/privado/intro/superman-6.png" alt="superman" rel="nofollow" class="superman"
					data-0="display:none"
					data-41000="display:block;bottom:1%"
					data-41500="display:none;"				
				>

				<!-- Superninja -->
				<img src="imagenes/privado/intro/superninja-1.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none;bottom:-100%" 
					data-30000="display:block;bottom:-100%" 
					data-32000="display:block;bottom:-50%" 
					data-34000="display:block;bottom:-10%" 
					data-36000="display:none;bottom:1%"					
				>
				<img src="imagenes/privado/intro/superninja-2.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-36000="display:block;bottom:1%"
					data-36500="display:none;"			
				>
				<img src="imagenes/privado/intro/superninja-3.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-36500="display:block;bottom:1%"
					data-37000="display:none;"				
				>
				<img src="imagenes/privado/intro/superninja-4.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-37000="display:block;bottom:1%"
					data-37500="display:none;"				
				>
				<img src="imagenes/privado/intro/superninja-5.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-37500="display:block;bottom:1%"
					data-38000="display:none;"				
				>
				<img src="imagenes/privado/intro/superninja-6.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-38000="display:block;bottom:1%"
					data-38500="display:none;"				
				>
				<!-- 2nda vuelta -->
				<img src="imagenes/privado/intro/superninja-1.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-38500="display:block;bottom:1%"
					data-39000="display:none;"			
				>
				<img src="imagenes/privado/intro/superninja-2.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-39000="display:block;bottom:1%"
					data-39500="display:none;"				
				>
				<img src="imagenes/privado/intro/superninja-3.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-39500="display:block;bottom:1%"
					data-40000="display:none;"				
				>
				<img src="imagenes/privado/intro/superninja-4.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-40000="display:block;bottom:1%"
					data-40500="display:none;"				
				>
				<img src="imagenes/privado/intro/superninja-5.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-40500="display:block;bottom:1%"
					data-41000="display:none;"				
				>
				<img src="imagenes/privado/intro/superninja-6.png" alt="superninja" rel="nofollow" class="superninja"
					data-0="display:none"
					data-41000="display:block;bottom:1%"
					data-41500="display:none;"				
				>
				

				<!-- Texto editable -->
				<div class="cleaner elcambio"
						data-0="display:none;opacity:0"
					data-31000="display:block;"
					data-34000="display:block;opacity:1"
					data-36000="display:block;opacity:1"
					data-43000="display:none;opacity:0"
					data-43500="display:none;"
				>
					<div class="tablita cleaner">
						<div class="cleaner">
							<h2>El cambio depende de ti</h2>
						</div>
					</div>
				</div>

			</div>					
		</div>
	</div>

	<div id="seccion3" data-_box-100p="transform:translate(0,100%);" data-_box-200p="transform:translate(0,0%);">
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
							<a href="javascript:void(0)" class="mybut but-style2 spacing"><i class="icon-home"></i>&nbsp;Volver al home</a>
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
			var nina = $("#nina"),
				nino = $("#nino"),
				ini = 500,
				fin = 6000 ,
				ini2 = ini+1, 				
				fin2 = 67901 ,
				items = 3,
				duracion = 500;

			$(window).scroll(function(){
				var scroll  = $(window).scrollTop();
				console.log(scroll);

				if(scroll >= ini && scroll <= fin){

					for(var i = ini; i<fin; i=i+(items*duracion)){
						if( scroll >= (i+(duracion*0)) && scroll <= (i+(duracion*0)+duracion-1)){
							nina.attr({src: 'imagenes/privado/intro/nina-a-1.png'});
							nino.attr({src: 'imagenes/privado/intro/nino-a-2.png'});
						}
						if( scroll >= (i+(duracion*1)) && scroll <= (i+(duracion*1)+duracion-1)){
							nina.attr({src: 'imagenes/privado/intro/nina-a-2.png'});
							nino.attr({src: 'imagenes/privado/intro/nino-a-3.png'});
						}
						if( scroll >= (i+(duracion*2)) && scroll <= (i+(duracion*2)+duracion-1)){
							nina.attr({src: 'imagenes/privado/intro/nina-a-3.png'});
							nino.attr({src: 'imagenes/privado/intro/nino-a-1.png'});
						}
					}		
				}
				else if(scroll >= ini2 && scroll <= fin2){
					for(var j = ini2; j<fin2; j=j+(items*duracion)){
						if( scroll >= (j+(duracion*0)) && scroll <= (j+(duracion*0)+duracion-1)){
							nina.attr({src: 'imagenes/privado/intro/nina-a-1.png'});
							nino.attr({src: 'imagenes/privado/intro/nino-a-1.png'});
						}
						if( scroll >= (j+(duracion*1)) && scroll <= (j+(duracion*1)+duracion-1)){
							nina.attr({src: 'imagenes/privado/intro/nina-a-2.png'});
							nino.attr({src: 'imagenes/privado/intro/nino-a-2.png'});
						}
						if( scroll >= (j+(duracion*2)) && scroll <= (j+(duracion*2)+duracion-1)){
							nina.attr({src: 'imagenes/privado/intro/nina-a-3.png'});
							nino.attr({src: 'imagenes/privado/intro/nino-a-3.png'});
						}
					}	
				}
				
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
