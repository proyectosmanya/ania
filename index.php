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
		/*Muestra la data de cada selects - Google Map*/
		.select2-hidden-accessible{display: none}
	
		.gm-style-iw{background: #000 !important;}
		.buscar{margin-top: 17px;}
		/*paisajeanimado*/
		.pos-paisaje,
		#paisajeanimado .icon-cerros{
			position: absolute;
			bottom: -2px;
			left: 0;
			right: 0;
			margin: auto;
			width:700px;
		}

		.animar-edificios{
			transform: scale(1, 1);
			-webkit-transform: scale(1, 1);
			-o-transform: scale(1, 1);
			-moz-transform: scale(1, 1);
			-ms-transform: scale(1, 1);
			transform-origin: center bottom;
		}
		/*end paisajeanimado*/
		#manito{padding-right: 40px;}
		.border-b{border-bottom: 1px solid #6b8d11;padding: 10px 0; -webkit-box-shadow: 0 1px 0 #a5d32a;box-shadow: 0 1px 0 #a5d32a;}
		#logo{position: relative;z-index: 2;opacity: 0; margin: 20px auto;
			-ms-transition: opacity .4s ease-in-out;
			-moz-transition: opacity .4s ease-in-out;
			-webkit-transition: opacity .4s ease-in-out;
			-o-transition: opacity .4s ease-in-out;
			transition: opacity .4s ease-in-out;
		}
		.maintitle{
			height: auto;
		    margin: auto;
		    padding: 10px 0;
		    position: absolute;
		    text-align: center;
		    top: 45%;
		    transform: translateY(-50%);
		    -moz-transform: translateY(-50%);
		    -webkit-transform: translateY(-50%);
		    -ms-transform: translateY(-50%);
		    -o-transform: translateY(-50%);
		    max-width: 600px;
		    left: 0;
		    right: 0;
		    z-index: 777;
		}
		h1{font:35px helveticaBd ;color: #148dbf}
		h2{font:35px helveticaLt;color: #053b6d}
		h2>i{font:35px helveticaBd;color: #053b6d}
		.iniciado h1{
			-webkit-animation: animLoadedContent 1s cubic-bezier(0.7,0,0.3,1) both;
			animation: animLoadedContent 1s cubic-bezier(0.7,0,0.3,1) both;
		}
		#presentacion{overflow:hidden;-webkit-transition: all .2s ease-in-out;-o-transition: all .2s ease-in-out;transition: all .2s ease-in-out;background: #e7f9fc;min-height: 600px;position: relative;background-image: url('imagenes/privado/fondos/nubes.png');background-repeat: no-repeat;background-position: center bottom;background-size: contain;background-attachment: fixed}
		/*#presentacion.sigreyscale{-webkit-filter: grayscale(100%);-moz-filter: grayscale(100%);-ms-filter: grayscale(100%);-o-filter: grayscale(100%);filter: grayscale(100%);filter: url(imagenes/privado/svg/greyscale.svg#greyscale);filter: gray}*/
		#presentacion.nogreyscale{-webkit-filter: grayscale(0%);-moz-filter: grayscale(0%);-ms-filter: grayscale(0%);-o-filter: grayscale(0%);	filter: grayscale(0%);}
		
		/*#cabecera.sigreyscale{-webkit-filter: grayscale(100%);-moz-filter: grayscale(100%);-ms-filter: grayscale(100%);-o-filter: grayscale(100%);filter: grayscale(100%);filter: url(imagenes/privado/svg/greyscale.svg#greyscale);filter: gray}*/
		#cabecera.nogreyscale{-webkit-filter: grayscale(0%);-moz-filter: grayscale(0%);-ms-filter: grayscale(0%);-o-filter: grayscale(0%);	filter: grayscale(0%);}

		#complement{padding: 50px 0 0;	background: rgb(142, 184, 29);	}
		#complement .boxes .box:nth-child(1){border-right: 1px solid #6b8d11}
		#complement .boxes .box:nth-child(2){border-left: 1px solid #a5d32a}
		.content-slider{text-align: center;margin: 0 auto;padding: 10px 0}
		.content-slider .subtitle{padding: 0 130px}
		.categoria{padding: 30px 40px 40px 40px;min-height: 450px}
		.toplay i{vertical-align: middle;}
		.toplay{padding:10px 0;text-align: center;}
		.toplay i:before{color: #fff;font-size: 20px;}
		.toplay:hover span{text-decoration: underline}
		.toplay span{padding-left: 10px; font:18px helveticaBd;color: #334405;vertical-align:middle}
		.categoria h3{font:28px helveticaBd ;color: #fff;min-height: 95px}
		.categoria .description{padding-top: 30px}
		.categoria p{font:18px helveticaLt ;color: #405506}
		.mtop{margin-top: 30px;}
		.but-toplay{margin: 40px auto}
		#misagrupaciones{background: #fff;}
		#misagrupaciones .logito{text-align: center;padding: 10px 0 0}
		#misagrupaciones .logito img{width: 100%;max-width: 120px;}
		h4{font: 38px helveticaLt;color: #148dbf}
		h4>i{font: 38px helveticaBd;color: #148dbf}
		.otras-agrupaciones{background: #e7f9fc;padding: 30px 0}
		.otras-agrupaciones .col-md-4:nth-child(1){padding-top: 20px;}
		.otras-agrupaciones .col-md-4:nth-child(2){padding-top: 15px;}
		.tablita{display:table;}
		.tablita>div{display:table-cell;vertical-align: middle;}
		
		.myspace{padding: 40px 0}

		/*GMaps*/
		#gm-mensaje h6{font: 13px helveticaLt;color: #148dbf;padding-left: 7px}
		#gm-mensaje{background: #fff;width: 130px;	height: 50px;	overflow: hidden;position: relative;}
		.capa:hover{opacity: 1;}
		.capa span{position: absolute;	top: 0;	left: 0; bottom: 0; right: 0; width:20px; height:20px; color:#fff;font:14px helveticaLt;margin:auto;}
		.capa{
			-webkit-transition: opacity .3s ease-in-out;
			-o-transition: opacity .3s ease-in-out;
			transition: opacity .3s ease-in-out;
			opacity: 0;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(10, 90, 132, 0.81);
			cursor: pointer;
			border-radius: 3px;
		}
		#gm-mensaje #pict{width:40px;height:40px;}
		#gm-mensaje .bottom{margin-top: 5px;}
		#gm-mensaje .top{display: table;}
		#gm-mensaje .top>div{display: table-cell;vertical-align: middle;}
		#content-map{position: relative;}
		#content-map .conteninfo{position: absolute;width: 100%;top: 0;left: 13%;margin: auto;max-width: 360px;max-height: 360px;}
		#content-map .caja-info{width:330px;background: #fff;margin-top: 70px;}
		#content-map .caja-info .padding{padding: 20px}
		#content-map .caja-info .toinput{padding-bottom: 20px}
		#content-map .caja-info .title{background: #8eb81d;text-align: center;border-top-left-radius: 3px;border-top-right-radius: 3px;}
		#content-map .caja-info .title p{color: #fff;font:23px helveticaLt;}
		#frm-buscar button{width: 100%;display: block;padding-top: 15px;padding-bottom: 15px;font-size: 23px;}		

		h5{color: #148dbf;font:20px helveticaLt;}
		h5>i{color: #148dbf;font:20px helveticaBd;}
		
		#genteinvolucrada{background: #fff;}
		#genteinvolucrada h3{color:#148dbf;font:38px helveticaLt;}
		#genteinvolucrada h3>i{color:#148dbf;font:38px helveticaBd;}

		#infografia{padding: 40px 0 80px 0;background: #e7f9fc;text-align: center;}
		#infografia h6{font:25px helveticaBd;color: #666666;text-align: center;}
		#infografia h5{font:45px helveticaBd;color: #ed9845;text-align: center;}
		#infografia h4{font:25px helveticaBd;color: #ed9845;text-align: center;}
		#infografia p{font:25px helveticaLt;color: #666666;text-align: center;margin-bottom: 20px;}

		#acciones{background: #fff;text-align: center;}
		#acciones h3{font: 38px helveticaLt;color: #148dbf}			
		#acciones h3>span{margin-right: 10px;}
		#acciones h3>i{font: 38px helveticaBd;color: #148dbf}
		#acciones h4{font: 25px helveticaLt;color: #666666}
		#acciones p{font: 25px helveticaLt;color: #666666}
		#acciones a{font: 25px helveticaBd;color: #666666}
		#acciones a:hover{text-decoration: underline;}

		#calendarios .micalendario {margin: 20px auto}
		#calendarios .tobut{margin: 20px auto;text-align: center;}
		#calendarios{padding: 30px 0;background-color: #e7f9fc}		
		
		.myscroll{max-height: 230px;}

		/*Transition*/
		.myanimation{
			opacity: 1 !important;
			-webkit-transition: transform .9s cubic-bezier(0.1, 1.5, 0.5, 1.0) .2s;
			-moz-transition: transform .9s cubic-bezier(0.1, 1.5, 0.5, 1.0) .2s;
			-ms-transition: transform .9s cubic-bezier(0.1, 1.5, 0.5, 1.0) .2s;
			-o-transition: transform .9s cubic-bezier(0.1, 1.5, 0.5, 1.0) .2s;
			transform: rotate3d(0,0,1,360deg);
		}
		.grayscale{
			background-color: #e7f9fc;
			-webkit-transition: background-color .5s ease-in-out .5s;
			-o-transition: background-color .5s ease-in-out .5s;
			-moz-transition: background-color .5s ease-in-out .5s;
			-ms-transition: background-color .5s ease-in-out .5s;
			transition: background-color .5s ease-in-out .5s;
		}
				

		body.overflow{overflow: hidden;}
		#infografia .lineas{background: url(imagenes/privado/complementos/baras.png) center bottom no-repeat;height: 0px;width: 100%;}
		.compromiso .opcion .caja{padding: 0px 18px 0 18px}
		.compromiso .opcion{width: 250px;height: 250px;display: inline-block;}
		.compromiso .opcion:nth-child(1),
		.compromiso .opcion:nth-child(2){margin-right: 70px;}
		.compromiso{max-width: 890px;margin:0 auto;}
		.compromiso .opcion .circle{background: #fff;border-radius:50%;width:250px;height:250px;
			-moz-box-shadow: -2px 1px 0 #d0e0e3;
			-webkit-box-shadow: -2px 1px 0 #d0e0e3;
			-o-box-shadow: -2px 1px 0 #d0e0e3;
			-ms-box-shadow: -2px 1px 0 #d0e0e3;
			box-shadow: -2px 1px 0 #d0e0e3;		
			opacity: 0;					
		}
		.compromiso .opcion{max-width: 250px;float:left;}
		.compromiso .opcion .table{display: table;width:100%;height:100%;}
		.compromiso .opcion .table>div{display: table-cell;vertical-align: middle;}
		.compromiso .opcion h3{font:25px helveticaLt;color: #3496ab;line-height: 25px;padding-top: 10px;}
		.compromiso .opcion h3>i{font:25px helveticaBd;color: #3496ab;}

		.box-video{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background-color:#000;overflow:hidden;z-index:9999}.box-video iframe{float:left;width:100%;height:100%;position:relative;z-index:99}.box-video .close-video{position:absolute;top:15px;right:15px;z-index:999;cursor:pointer}.box-video .icon-cancel-circled-outline{-webkit-transition:color .25s ease;-moz-transition:color .25s ease;-ms-transition:color .25s ease;transition:color .25s ease}
		.close-video i:before{color: #fff;font-size: 50px;-webkit-transition: color .3s ease-in-out;-o-transition: color .3s ease-in-out;transition: color .3s ease-in-out;}
		.close-video:hover i:before{color: #b1df34;}

		.borderbottom{
			height: 50px;
			background: rgb(142, 184, 29);
			vertical-align: text-bottom;
			position: absolute;
			bottom: 0px;
			left: 0;
			right: 0;
			margin: auto;
			width: 100%;
		}

		/*Edificios*/
		.edificio1{
			background-attachment: fixed;
			position: absolute;
			left: 0px;
			bottom: 0px;
			background-image: url(imagenes/privado/svg/edificio-izq.svg);
			background-repeat: no-repeat;
			background-position: left bottom;
			width: 100%;
			height: 100%;
		}
		.edificio2{
			background-attachment: fixed;
			position: absolute;
			right: 0px;
			bottom: 0px;
			background-image: url(imagenes/privado/svg/edificio-der.svg);
			background-repeat: no-repeat;
			background-position: right bottom;
			width: 100%;
			height: 100%;
		}
		/*Nubes*/
		#content-clouds{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 0;
		}
		#clouds{
			padding: 100px 0;
			position: relative;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;			
		}

		/*Time to finalise the cloud shape*/
		.cloud {
			position: absolute;			
			background-image: url(imagenes/privado/svg/nube.svg);
			background-repeat: no-repeat;
			background-size: contain;
		}

		/*Time to animate*/
		.x1 {
			width: 200px; height: 60px;
			right: 200px; 
			top: 180px;	
			opacity: 0.8;
			-webkit-animation: moveclouds 180s linear infinite;
			-moz-animation: moveclouds 180s linear infinite;
			-o-animation: moveclouds 180s linear infinite;
			-ms-animation: moveclouds 180s linear infinite;
			animation: moveclouds 180s linear infinite;
		}

		/*variable speed, opacity, and position of clouds for realistic effect*/
		.x2 {
			width: 300px; height: 90px;
			right: -100px;
			top: 87px;
			-webkit-transform: scale(0.6);
			-moz-transform: scale(0.6);
			transform: scale(0.6);
			opacity: 0.5;
			/*Speed will also be proportional to the size and opacity*/
			/*More the speed. Less the time in 's' = seconds*/
			-webkit-animation: moveclouds 55s linear infinite;
			-moz-animation: moveclouds 25s linear infinite;
			-o-animation: moveclouds 25s linear infinite;
			-ms-animation: moveclouds 25s linear infinite;
			animation: moveclouds 25s linear infinite;
		}
		.x3 {
			width: 100px; height: 40px;
			right: 270px; 
			top: 60px;	
			-webkit-transform: scale(0.8);
			-moz-transform: scale(0.8);
			transform: scale(0.8);
			opacity: 0.5;	
			-webkit-animation: moveclouds 70s linear infinite;
			-moz-animation: moveclouds 70s linear infinite;
			-o-animation: moveclouds 70s linear infinite;
			-ms-animation: moveclouds 70s linear infinite;
			animation: moveclouds 70s linear infinite;
		}
		.x4 {
			width: 800px; height: 100px;
			right: -80px;
			top: 240px;
			-webkit-transform: scale(0.6);
			-moz-transform: scale(0.6);
			transform: scale(0.6);
			opacity: 0.6; /*opacity proportional to the size*/	
			-webkit-animation: moveclouds 70s linear infinite;
			-moz-animation: moveclouds 70s linear infinite;
			-o-animation: moveclouds 70s  linear infinite;
			-ms-animation: moveclouds 70s  linear infinite;
			animation: moveclouds 70s  linear infinite;
		}

		.x5 {
			width: 500px; height: 90px;
			right: 300px; 
			top: 360px;	
			-webkit-transform: scale(0.8);
			-moz-transform: scale(0.8);
			transform: scale(0.8);
			opacity: 0.9; /*opacity proportional to the size*/	
			-webkit-animation: moveclouds 90s linear infinite;
			-moz-animation: moveclouds 20s linear infinite;
			-o-animation: moveclouds 20s linear infinite;
			-ms-animation: moveclouds 20s linear infinite;
			animation: moveclouds 20s linear infinite;
		}

		#mariposas1{
			z-index: 3;
			position: absolute;
			height: 300px;
			top: 0;
			right: 0;
			width: 80%;
			bottom: 0;
			margin: auto;
		}
		#mariposas2{
			z-index: 3;
			position: absolute;
			height: 300px;
			top: 0;
			width: 30%;
			right: 0;
			bottom: 0;
			margin: auto;
		}
		.mariposa1{
			background-image: url(imagenes/privado/mariposas/mariposa-1.gif);
			background-repeat: no-repeat;
			background-size: contain;
			width: 30px;
			height: 30px;
			position: absolute;
			top: 65px;
			left: -65;
		}
		.mariposa2{
			background-image: url(imagenes/privado/mariposas/mariposa-2.gif);
			background-repeat: no-repeat;
			background-size: contain;
			width: 30px;
			height: 30px;
			position: absolute;
			top: -50px;
			left: 50px;
		}
		.mariposa3{
			background-image: url(imagenes/privado/mariposas/mariposa-3.gif);
			background-repeat: no-repeat;
			background-size: contain;
			width: 30px;
			height: 30px;
			position: absolute;
			top: 180px;
			left: 180px;
		}

		@-webkit-keyframes moveclouds {
			0% {margin-right: 1000px;}
			100% {margin-right: -1000px;}
		}
		@-moz-keyframes moveclouds {
			0% {margin-right: 1000px;}
			100% {margin-right: -1000px;}
		}
		@-o-keyframes moveclouds {
			0% {margin-right: 1000px;}
			100% {margin-right: -1000px;}
		}


		@media only screen and (max-width: 1450px){
			.edificio1{background-position: -5% bottom;}
			.edificio2{background-position: 105% bottom;}
		}
		@media only screen and (max-width: 1300px){
			.edificio1{background-position: -10% bottom;}
			.edificio2{background-position: 110% bottom;}
		}
		@media only screen and (max-width: 1200px){
			.edificio1{background-position: -20% bottom;}
			.edificio2{background-position: 120% bottom;}
		}
		@media only screen and (max-width: 1090px){
			.edificio1{background-position: -30% bottom;}
			.edificio2{background-position: 130% bottom;}
		}
		@media only screen and (max-width: 992px){
			.categoria,
			.categoria h3{min-height: initial}
			#content-map .caja-info{width: 100%}
			#content-map .conteninfo{position: relative;top: inherit;left: inherit;max-width: 100%;max-height: 100%;}
			.mybut .tablita{display: inline-block;}
			.edificio1{display: none;}
			.edificio2{display: none;}			
			.otras-agrupaciones .col-md-4:nth-child(2){padding-top: 30px;padding-bottom: 30px;}	
			.content-slider .subtitle{padding: 0}
			.categoria{padding: 30px 10px}
			#infografia{padding: 20px 10px}

			.compromiso .opcion:nth-child(1), .compromiso .opcion:nth-child(2){margin-right: 0;}
			.compromiso .opcion{width: 100%;float: none;max-width: 100%;margin: 10px auto}
			.compromiso .opcion .circle{margin: 0px auto;}
			#infografia .lineas{display: none}
		}
		@media only screen and (max-width: 700px){
			#presentacion{min-height: 400px;background-image: url(imagenes/privado/complementos/paisaje.png); background-repeat: no-repeat;background-position: center bottom;background-attachment: inherit;}
			.pos-paisaje,
			#content-clouds{display: none}
			#logo{width: 150px;margin: 0 auto;}
			#logo img{width: 100%}
			#mariposas1{visibility: hidden;}
			#mariposas2{visibility: hidden;}
			#load-gmap{height: 270px !important}
		}	
		@media only screen and (max-width: 500px){
			
			#genteinvolucrada .tablita{display: block;}
			#genteinvolucrada .tablita>div{display: block;}
			#manito{padding: 0;text-align: center;}			
			#redapoyo{padding: 10px 0}

			.compromiso .opcion .circle{width: 200px;height: 200px}
			.compromiso .opcion h3>i,
			.compromiso .opcion h3{font-size: 18px !important;}
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

	<div class="box-video">
        <div class="close-video ico-hover">
            <i class="icon-error"></i>
        </div>
    </div>

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
		<article id="presentacion" class="cleaner sigreyscale">
			<div id="mariposas1" class="cleaner">
				<div class="mariposa1 mariposa cleaner"></div>
				<div class="mariposa2 mariposa cleaner"></div>
				<div class="mariposa3 mariposa cleaner"></div>
			</div>
			<div id="mariposas2" class="cleaner">
				<div class="mariposa1 mariposa cleaner"></div>
				<div class="mariposa2 mariposa cleaner"></div>
				<div class="mariposa3 mariposa cleaner"></div>
			</div>
			<div class="cleaner maintitle">
				<h1>"Niños, niñas y jóvenes nacidos para mejorar nuestro ambiente"</h1>
				<figure class="cleaner" id="logo">
					<img src="imagenes/branding/logo.png" alt="" title="" class="animated">
				</figure>
			</div>
			<div class="cleaner pos-paisaje">				
				<!-- load paisaje SVG -->
				<div id="loadpaisaje" class="cleaner"></div>
				
			</div>
			
			<div class="edificio1 cleaner"></div>
			<div class="edificio2 cleaner"></div>

			<div id="content-clouds" class="cleaner">
				<div id="clouds">
					<div class="cloud x1"></div>
					<div class="cloud x2"></div>
					<div class="cloud x3"></div>
					<div class="cloud x4"></div>
					<div class="cloud x5"></div>
				</div>
			</div>			
		</article>
		<article id="complement" class="cleaner">
			<div class="container-fluid cleaner">
				<div class="content-slider border-b cleaner">
					<div class="subtitle cleaner">
						<h2>Buscamos a quienes están comprometidos de por vida a mejorar <i>el entorno natural, social y emocional del Perú</i></h2>	
					</div>
					<div class="cleaner aliados maxwidth2">
						<div class="flechas cleaner">
							<a class="toleft cleaner"href="javascript:void(0)"><i class="icon-arrow-left"></i></a>
							<a class="toright cleaner"href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
							<div class="ca-aliados-1">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
							    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
							</div>
						</div>
						<h6>Aliados principales que impulsan la empresa</h6>



					</div>		
				</div>
				<div class="cleaner row boxes">
					<div class="col-md-6 cleaner box">
						<div class="categoria cleaner">
							<h3>¿Eres un individuo o agrupación?</h3>
							<div class="description cleaner">
								<p>niñas, niños y jóvenes (hasta 30 años), que estas aportando el ambiente ingresa a Soy NINJA”</p>
							</div>
							<div class="cleaner ta-center but-toplay">
								<a href="javascript:void(0)" class="toplay" id="video1"><i class="icon-play"></i><span class="transition">Qué significa ser un Ninja</span></a>
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
							<div class="cleaner ta-center but-toplay">
								<a href="javascript:void(0)" class="toplay" id="video2"><i class="icon-play"></i><span class="transition">Qué significa apoyar a los Ninja</span></a>
							</div>
							<div class="cleaner ta-center ">
								<a href="javascript:void(0)" class="mybut but-style2 spacing"><i class="icon-briefcase"></i>&nbsp;Apoyo a los Ninja</a>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</article>
		<article id="misagrupaciones" class="cleaner">
			<div class="cleaner myspace">
				<div class="ta-center cleaner">
					<h4>Conoce a las agrupaciones <i>NINJA en el Perú</i></h4>
				</div>
				<div class="cleaner logito" data-start="-webkit-transform: scale(0.2);-mz-transform: scale(0.2);-moz-transform: scale(0.2);-o-transform: scale(0.2);" data-delay="100" data-transit="scale:1" ><img src="imagenes/branding/logo.jpg" alt="Ania"></div>
			</div>			
			<div id="content-map" class="cleaner">
				<div id="load-gmap" class="cleaner" style="width:100%;height:590px"></div>
				<div class="container-fluid cleaner conteninfo">
					<div class="caja-info cleaner">
						<div class="cleaner container-">
							<div class="cleaner padding title">
								<p>Encuentra las agrupaciones <strong>NINJA</strong></p>
							</div>
							<div class="cleaner padding">
								<form id="frm-buscar" action="">
									<div class="cleaner toinput">									
										<select name="departamento" id="departamento" class="myinput style2">				                 				                 
						             	</select>
									</div>
									<div class="cleaner toinput">
										<select name="agrupaciones" id="agrupaciones" class="myinput style2">				                 				                 
						             	</select>
									</div>
									<div class="cleaner">
										<input id="nombre" name="nombre" type="text" class="myinput style1 cleaner" placeholder="Nombre de la agrupación">																	
									</div>	
									<div class="cleaner buscar">
										<button type="submit" class="mybut but-style1"><i class="icon-search"></i> Quiero buscar</button>
									</div>
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="otras-agrupaciones cleaner">
				<div class="container-fluid cleaner">
					<div class="row cleaner">
						<div class="col-md-4 cleaner">
							<h5>Tienes una agrupación cuya misión es aportar al ambiente y quieres ser parte de los <i>NINJA</i></h5>
						</div>
						<div class="col-md-4 cleaner">
							<div class="flechas cleaner maxwidth2">
								<a class="toleft cleaner"href="javascript:void(0)"><i class="icon-arrow-left"></i></a>
								<a class="toright cleaner"href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
								<div class="ca-aliados-2">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=1" data-src-retina="http://placehold.it/350x250&text=1-retina" alt="">
								    <img class="owl-lazy" data-src="http://placehold.it/350x250&text=2" data-src-retina="http://placehold.it/350x250&text=2-retina" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-4 cleaner">
							<a href="javascript:void(0)" class="mybut but-style2 spacing">
								<div class="tablita">
									<div class="cleaner"><i class="icon-briefcase"></i></div>
									<div class="cleaner">&nbsp;Quiero registrar mi agrupación como Ninja</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>			
		</article>
	
		<article id="genteinvolucrada" class="cleaner myspace">
			<div class="container-fluid cleaner">
				<div class="tablita cleaner">
					<div class="cleaner" id="manito">
						<img src="imagenes/privado/svg/manito.svg" alt="manito" data-start="-webkit-transform: scale(0.2);-mz-transform: scale(0.2);-moz-transform: scale(0.2);-o-transform: scale(0.2);" data-delay="100" data-transit="scale:1">
					</div>
					<div class="cleaner"><h3>¿Estas de acuerdo que las personas de todas las edades podemos mejorar <i>nuestro país y el mundo</i>?</h3></div>
				</div>
			</div>
		</article>
		<article id="infografia" class="cleaner">
			<!-- <div class="cleaner">
				<h6>Nosotros, las niñas, niños y jóvenes del Perú estamos comprometidos a lograrlo día a día</h6>
			</div> -->
			<div class="cleaner">
				<h5>Ya somos <span id="seguidores">0</span></h5>
				<h4>niñas, niños y jóvenes que estamos comprometidos.</h4>				
			</div>
			<div class="cleaner">
				<div class="container-fluid cleaner">				
					<div class="cleaner lineas "></div>
					<div class="cleaner compromiso">
						<div class="opcion cleaner">
							<div class="circle cleaner">
								<div class="table cleaner">
									<div class="cleaner">
										<div class="cleaner"><img src="imagenes/opciones/1.png" alt="Opción 1"></div>
										<div class="cleaner caja">
											<h3>Con afecto, <i>valores y nuestro</i> ejemplo</h3>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="opcion cleaner">
							<div class="circle cleaner">
								<div class="table cleaner">
									<div class="cleaner">
										<div class="cleaner"><img src="imagenes/opciones/2.png" alt="Opción 1"></div>
										<div class="cleaner caja">
											<h3><i>Aportando</i> a otras personas</h3>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="opcion cleaner">
							<div class="circle cleaner">
								<div class="table cleaner">
									<div class="cleaner">
										<div class="cleaner"><img src="imagenes/opciones/3.png" alt="Opción 1"></div>
										<div class="cleaner caja">
											<h3><i>Aportando</i> a la naturaleza</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cleaner mtop">
				<p>¿Deseas unirte a este compromiso?</p>
			</div>
			
			<div class="cleaner">
				<a class="mybut but-style1 spacing " href="javascript:void(0)"><i class="icon-firma"></i>&nbsp;Firmar ahora</a>
			</div>
		</article>
		
		<article id="acciones" class="cleaner myspace">
			<div class="container-fluid cleaner">
				<h3><span class="myicon-book"></span>Acciones de los <i>Ninja</i></h3>
				<h4>En hogares, instituciones educativas, barrios y comunidades del Perú</h4>
				<a href="javascript:void(0)" class="">Mira el Calendario Anual NINJA y súmate</a>
			</div>
		</article>
	
		<article id="calendarios" class="cleaner" >
			<div class="container-fluid cleaner">
				<div class="flechas cleaner maxwidth2">
					<a class="toleft cleaner"href="javascript:void(0)"><i class="icon-arrow-left"></i></a>
					<a class="toright cleaner"href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
					<div class="micalendario">
					    <div class="item mievento cleaner">
					    	<a class="caja cleaner" href="evento_detalle.php">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<div class="cleaner celeste"><span>Martes</span></div>
						    		<div class="cleaner verde-claro"><strong>15</strong></div>
						    		<div class="cleaner celeste"><span>Julio</span></div>
						    		<div class="cleaner marino"><p>Marcha contra el maltrato a los animales y</p></div>
					    		</div>
								<div class="caja-2 cleaner bg-verde-claro">
									<div class="cleaner">
										<i class="myicon-place"></i><span>Plaza de Armas Cuzco</span>
									</div>
									<div class="cleaner">
										<i class="myicon-time"></i><span>11:00 am</span>
									</div>
								</div>
					    	</a>
					    </div>
					    <div class="item mievento cleaner">
					    	<a class="caja cleaner" href="evento_detalle.php">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<div class="cleaner celeste"><span>Martes</span></div>
						    		<div class="cleaner verde-claro"><strong>15</strong></div>
						    		<div class="cleaner celeste"><span>Julio</span></div>
						    		<div class="cleaner marino"><p>Marcha contra el maltrato a los animales</p></div>
					    		</div>
								<div class="caja-2 cleaner bg-verde-claro">
									<div class="cleaner">
										<i class="myicon-place"></i><span>Plaza de Armas Cuzco</span>
									</div>
									<div class="cleaner">
										<i class="myicon-time"></i><span>11:00 am</span>
									</div>
								</div>
					    	</a>
					    </div>
					    <div class="item mievento cleaner">
					    	<a class="caja cleaner" href="evento_detalle.php">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<div class="cleaner celeste"><span>Martes</span></div>
						    		<div class="cleaner verde-claro"><strong>15</strong></div>
						    		<div class="cleaner celeste"><span>Julio</span></div>
						    		<div class="cleaner marino"><p>Marcha contra el maltrato a los animales</p></div>
					    		</div>
								<div class="caja-2 cleaner bg-verde-claro">
									<div class="cleaner">
										<i class="myicon-place"></i><span>Plaza de Armas Cuzco</span>
									</div>
									<div class="cleaner">
										<i class="myicon-time"></i><span>11:00 am</span>
									</div>
								</div>
					    	</a>
					    </div>


					    <div class="item mievento cleaner">
					    	<a class="caja cleaner" href="evento_detalle.php">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<div class="cleaner celeste"><span>Martes</span></div>
						    		<div class="cleaner verde-claro"><strong>15</strong></div>
						    		<div class="cleaner celeste"><span>Julio</span></div>
						    		<div class="cleaner marino"><p>Marcha contra el maltrato a los animales</p></div>
					    		</div>
								<div class="caja-2 cleaner bg-verde-claro">
									<div class="cleaner">
										<i class="myicon-place"></i><span>Plaza de Armas Cuzco</span>
									</div>
									<div class="cleaner">
										<i class="myicon-time"></i><span>11:00 am</span>
									</div>
								</div>
					    	</a>
					    </div>
					    <div class="item mievento cleaner">
					    	<a class="caja cleaner" href="evento_detalle.php">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<div class="cleaner celeste"><span>Martes</span></div>
						    		<div class="cleaner verde-claro"><strong>15</strong></div>
						    		<div class="cleaner celeste"><span>Julio</span></div>
						    		<div class="cleaner marino"><p>Marcha contra el maltrato a los animales</p></div>
					    		</div>
								<div class="caja-2 cleaner bg-verde-claro">
									<div class="cleaner">
										<i class="myicon-place"></i><span>Plaza de Armas Cuzco</span>
									</div>
									<div class="cleaner">
										<i class="myicon-time"></i><span>11:00 am</span>
									</div>
								</div>
					    	</a>
					    </div>
					    <div class="item mievento cleaner">
					    	<a class="caja cleaner" href="evento_detalle.php">
					    		<div class="caja-1 cleaner bg-blanco">
					    			<div class="cleaner celeste"><span>Martes</span></div>
						    		<div class="cleaner verde-claro"><strong>15</strong></div>
						    		<div class="cleaner celeste"><span>Julio</span></div>
						    		<div class="cleaner marino"><p>Marcha contra el maltrato a los animales</p></div>
					    		</div>
								<div class="caja-2 cleaner bg-verde-claro">
									<div class="cleaner">
										<i class="myicon-place"></i><span>Plaza de Armas Cuzco</span>
									</div>
									<div class="cleaner">
										<i class="myicon-time"></i><span>11:00 am</span>
									</div>
								</div>
					    	</a>
					    </div>
					</div>
				</div>
				<div class="cleaner tobut">
					<a class="mybut but-style1 spacing " href="javascript:void(0)"><i class="myicon-book2"></i>&nbsp;Ver todas los eventos</a>
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
	<!-- {Loading Page} -->
	<script src="privado/js/general/jpreloader.min.js"></script>
	<!-- {Select 2} -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.0/select2.min.js"></script>
	<script>window.jQuery || document.write('<script src="privado/js/select/select2.min.js"><\/script>')</script>
	<script src="privado/js/select/select2.es.min.js"></script>
	<!-- {Mustache} -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.0/mustache.min.js"></script>
	<script>window.jQuery || document.write('<script src="privado/js/mustache/mustache.min.js"><\/script>')</script>
	<!-- Vuelo mariposas -->
	<script src="privado/js/volar/jqfloat.min.js"></script>
	<!-- Item transition -->
	<script src="privado/js/inview_transition/inview.min.js"></script>
	<script src="privado/js/inview_transition/transit.min.js"></script>
	<script src="privado/js/inview_transition/app.inview.min.js"></script>

	<!-- {{Mustache}} -->
	<!-- ======================= -->
	<!-- Mustache Template -Agrupaciones-->
	<script id="tmp-departamento" type="text/template">
		<option></option>
		{{#listadepartamentos}}				
			{{#nombre}}
				<option id="departamento-{{nombre}}" value="{{nombre}}">{{nombre}}</option>				
			{{/nombre}}
		{{/listadepartamentos}}
	</script>

	<!-- Mustache Template - Departamentos del Perú -->
	<script id="tmp-agrupaciones" type="text/template">
		<option></option>
		{{#listaagrupaciones}}				
			{{#nombre}}
				<option id="agrupaciones-{{nombre}}" value="{{nombre}}">{{nombre}}</option>				
			{{/nombre}}
		{{/listaagrupaciones}}
	</script>

	<script>
		var txtScroll = false;
		$(window).on({
			load: function(){
				// Effect inview
				loadInview();
	
				$("#loadpaisaje").load('imagenes/privado/svg/paisaje.svg',function(response){

					setTimeout(function(){
						$('#loadpaisaje').addClass("complete");
					},1000)
					
					if(!response){ // Error loading SVG
						$(this).html('<a href="javascript:void(0)"></a>');
					}
				});
				
				// Cargar agrupaciones
				$.getJSON('json/agrupaciones.json', function(data) {
				    var template = $('#tmp-agrupaciones').html();
				    var info = Mustache.to_html(template, data);
				    $('#agrupaciones').html(info);
				}).done(function(){
					$("#agrupaciones").select2({
		            	placeholder: "¿Organización o Agrupación?",
						allowClear: true
		            });
				});

				// Cargar departamentos
				$.getJSON('json/departamentos.json', function(data) {
				    var template = $('#tmp-departamento').html();
				    var info = Mustache.to_html(template, data);
				    $('#departamento').html(info);
				}).done(function(){
					$("#departamento").select2({
		            	placeholder: "Seleccionar departamento",
						allowClear: true
		            });
				});

				// Main banner
				var w = $(window).width();
				if(w>700){
					// Main banner
					var h = $(window).height();					
					$('#presentacion').height(h);
				}else{
					$('#presentacion').removeAttr('style');
				}
				
			},
			resize: function(){
				var w = $(window).width();
				if(w>700){
					// Main banner
					var h = $(window).height();					
					$('#presentacion').height(h);
				}else{
					$('#presentacion').removeAttr('style');
				}
			}
		});

		$(document).ready(function($){

			$('#ver-menu').click(function(e) {
				e.preventDefault();
				/* Act on the event */
				if($('.overlay-scale').hasClass('open')){
					$('#cabecera').addClass('zindex');
				}else{
					$('#cabecera').removeClass('zindex')
				}
			});

			// Mostrar y ocultar "gototop"
			$(window).scroll(function(){
				var window_y = $(window).scrollTop(); 
				var window_x = $('#presentacion').position().top;

				if (window_y > window_x) { 
				   $('#gototop').fadeIn();
				} else {
					$('#gototop').fadeOut();
				}
			});

			// [x] Cargador de página de inicio
			var timer;
			$('body').jpreLoader({
				splashID: "#jSplash",
				showPercentage: false,
				autoClose: true
			}, function() {				
				clearInterval(timer);
				$('#logo').animate({"opacity":'1'}, 50, function() {
					$('#logo img').addClass('pulse');
					$('body').addClass('iniciado');
					$("h1").fitText(1.1, { minFontSize: '25px', maxFontSize: '35px' });
					$("h2").fitText(1.6, { minFontSize: '25px', maxFontSize: '35px' });
					$("h2>i").fitText(1.6, { minFontSize: '25px', maxFontSize: '35px' });
					$("h4").fitText(1.6, { minFontSize: '25px', maxFontSize: '38px' });
					$("h4>i").fitText(1.6, { minFontSize: '25px', maxFontSize: '38px' });
					$("h3").fitText(1.6, { minFontSize: '25px', maxFontSize: '35px' });
					$("h3>i").fitText(1.2, { minFontSize: '25px', maxFontSize: '38px' });
					$("h6").fitText(1.6, { minFontSize: '25px', maxFontSize: '25px' });

					$('#presentacion').removeClass('sigreyscale').end().addClass('nogreyscale');
					$('#cabecera').removeClass('sigreyscale').end().addClass('nogreyscale');

				});
			});

			// Video "Si soy NiNJA"
			$('#video1').on('click', function(e) {
		        var videoContainer = $('.box-video');
		        videoContainer.prepend('<iframe id="myvideo" title="Ania" type="text/html" src="http://www.youtube.com/embed/qhn3MAvFZYo?&rel=0&controls=0&showinfo=0&modestbranding=1&enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer&autoplay=1&loop=1&wmode=transparent" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>');
		        videoContainer.fadeIn(300);
		       	$('body').addClass('overflow');
		        e.preventDefault();
		    });		    
		    // Video "Si soy Agrupación"
		    $('#video2').on('click', function(e) {
		        var videoContainer = $('.box-video');
		        videoContainer.prepend('<iframe id="myvideo" title="Ania" type="text/html" src="http://www.youtube.com/embed/qhn3MAvFZYo?&rel=0&controls=0&showinfo=0&modestbranding=1&enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer&autoplay=1&loop=1&wmode=transparent" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>');
		        videoContainer.fadeIn(300);
		       	$('body').addClass('overflow');
		        e.preventDefault();
		    });
		    // Cerrar Video
		    $('.close-video').on('click', function(e) {
		        $('body').removeClass('overflow');
		        $('.box-video').fadeOut(400, function() {
		            $("iframe", this).remove().fadeOut(300);
		        });
		        e.preventDefault();
		    });

			// Formulario de búsqueda
			$('#frm-buscar').submit(function(e){
				e.preventDefault();
				if($('#departamento').val() == ""){
					$('.toinput').addClass('error');
					return false;
				}else{
					// Mandar la data
					$('.toinput').removeClass('error');
					var mytop = $('#load-gmap').offset().top;
					$('html, body').stop().animate({
						scrollTop: mytop
					},1400, 'swing');
					return true;
				}
			})
			

			// owlCarousel
			$('.ca-aliados-1').owlCarousel({
			    items:4,
			    lazyLoad:true,
			    loop:true,
			    margin:10,
			    responsive:{
			        0:{
			            items:2
			        },
			        600:{
			            items:3
			        },
			        1000:{
			            items:6
			        }
			    }
			});
			$('.ca-aliados-2').owlCarousel({
			    items:4,
			    lazyLoad:true,
			    loop:true,
			    margin:10,
			    responsive:{
			        0:{
			            items:2
			        },
			        400:{
			            items:3
			        },
			        700:{
			            items:4
			        },
			        1000:{
			            items:3
			        }
			    }
			});
			$('.micalendario').owlCarousel({
			    items:4,
			    loop:true,
			    margin:20,
			    responsive:{
			        0:{
			            items:1
			        },
			        500:{
			            items:2
			        },
			        800:{
			            items:3
			        },
			        1000:{
			            items:4
			        }
			    }
			});
			
		});

		// inview
		function loadInview(){
			$('#infografia').one("inview",function(){
				
				setTimeout(function(){
					$('.lineas').delay(200).animate({
						height: '52px'
					},1000, function(){
						$('.circle').delay(200).addClass('myanimation')
					});
					iniciarContador();
				},500)

				//Contador los seguidores
				var inicio = 100;
	            var final = 15500;
	            var rango = Math.ceil(final/inicio);        
	            var t;

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

			
			$('#content-map').one("inview",function(){
				loadGmaps();
				$(this).off("inview");
			});
		}

		// Functions	
        function loadGmaps() {
    		var script = document.createElement('script');
    		script.type = 'text/javascript';
    		script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
    		  'callback=iniciarGMap';
    		document.body.appendChild(script);
    	}

		function iniciarGMap() {
    		var styles = [
    		    {
	      			stylers: [
						{hue:"#148dbf"},
						{ "saturation": -10 },
						{ "lightness": 10 }
    		      	]
    		    },
    		    {
					featureType: "road",
					elementType: "geometry",
					stylers: [
						{ lightness: 10 },
						{ visibility: "simplified" }
					]
    		    },
    		    {
					featureType: "road",
					elementType: "labels",
					stylers: [
						{ visibility: "on" }
					]
    		    }
    	  	];

    	  	var styledMap = new google.maps.StyledMapType(styles, {name: "Ania"});
    
    		// Edit Ubication
    		var miUbicacion = new google.maps.LatLng(-12.060024,-77.000601);
    		// End Edit

    	  	var mapOptions = {
    			zoom: 16,
    			center: miUbicacion,
    			scrollwheel: false,
    			mapTypeControlOptions: {
    				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    			}
    	  	};
    	  	var map = new google.maps.Map(document.getElementById('load-gmap'), mapOptions);
    
    		var contentString = 
    			'<div id="gm-mensaje" class="cleaner">'+
    				'<a class="capa" href="#" target="_blank"><span>Ver</span></a>'+
    				'<div class="top cleaner"><div class="cleaner"><img id="pict" src="imagenes/usuarios/foto.jpeg" alt=""></div><div class="cleaner"><h6>Agrupacion de los Andes</h6></div></div></div>'+
    				'</div>'+    				
    			'</div>';
    
    		var infowindow = new google.maps.InfoWindow({
    		    content: contentString,
    		    Width: 300
    		});    
    		var marker = new google.maps.Marker({
    			position: miUbicacion,
    			map: map,
    			title:"Ania",
    			icon: 'imagenes/privado/complementos/place.png',				
    			animation: google.maps.Animation.DROP
    		});    
    		google.maps.event.addListener(marker, 'click', function() {
    	    	infowindow.open(map,marker);
    	  	});    
    		map.mapTypes.set('map_style', styledMap);
    		map.setMapTypeId('map_style');
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

            	// Efeto mariposas
				$('.mariposa1').jqFloat({
					width: 200,
			        height: 200,
			        speed: 7000
				});
				
				$('.mariposa2').jqFloat({
					width: 400,
			        height: 400,
			        speed: 8000
				});

				$('.mariposa3').jqFloat({
					width: 500,
			        height: 500,
			        speed: 9000
				});

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

	<script>
		// Load Hojas
		var wi = window.innerWidth;
		if(wi>700){
			var fallObjects=new Array();
			var numObjs=10, waft=50, fallSpeed=4, wind=-1;

			function newObject(url,height,width){
				fallObjects[fallObjects.length]=new Array(url,height,width);
			}
			newObject("imagenes/privado/svg/hoja1.svg",29,15);
			newObject("imagenes/privado/svg/hoja2.svg",27,23);

			function winSize(){
				winWidth=(moz)?window.innerWidth:document.body.clientWidth;
				winHeight=(moz)?window.innerHeight:document.body.clientHeight;
			}
			function fallObject(num,vari,nu){
				objects[num]=new Array(parseInt(Math.random()*(winWidth-waft)),-30,(parseInt(Math.random()*waft))*((Math.random()>0.5)?1:-1),0.02+Math.random()/20,0,1+parseInt(Math.random()*fallSpeed),vari,fallObjects[vari][1],fallObjects[vari][2]);
				if(nu==1){
					document.write('<img id="fO'+i+'" style="position:absolute;z-index:9;background:none;border:0;padding:0;box-shadow:none;" src="'+fallObjects[vari][0]+'">'); 
				}
			}
			function fall(){
				for(i=0;i<numObjs;i++){
					var fallingObject=document.getElementById('fO'+i);
					if((objects[i][1]>(winHeight-(objects[i][5]+objects[i][7])))||(objects[i][0]>(winWidth-(objects[i][2]+objects[i][8])))){fallObject(i,objects[i][6],0);}
					objects[i][0]+=wind;objects[i][1]+=objects[i][5];objects[i][4]+=objects[i][3];
					with(fallingObject.style){ top=objects[i][1]+winOffset+"px";left=objects[i][0]+(objects[i][2]*Math.cos(objects[i][4]))+"px";}
				}
				setTimeout("fall()",50);
			}
			var objects=new Array(),winOffset=0,winHeight,winWidth,togvis,moz=(document.getElementById&&!document.all)?1:0;winSize();
			for (i=0;i<numObjs;i++){
				fallObject(i,parseInt(Math.random()*fallObjects.length),1);
			}
			window.onresize=winSize;fall();
		}
	</script>
	<!-- =========================================
	{{fin de Plugins que van solo en esta página}}
	========================================== -->	 

	</body>
</html>
