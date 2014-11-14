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
	<style>
		.mybut{
			-webkit-transition: all .3s ease-in-out;
			-o-transition: all .3s ease-in-out;
			-ms-transition: all .3s ease-in-out;
			-moz-transition: all .3s ease-in-out;
			transition: all .3s ease-in-out;
		}		
		.facebook .mybut i{
			position: absolute;
			bottom:0;
			left:0;
			background: url(imagenes/privado/complementos/sprite.png) -151px -26px;
			width: 40px;
			height: 43px;
		}		
		.facebook .mybut:hover{background: #10658f !important;}		
		.facebook .mybut{			
			position: relative;
			background: #1d75a7;
			color: #fff;
			text-align: center;
			padding: 15px 30px;
			font-size: 20px;
			border-radius: 4px;
			border-bottom: 3px solid #10658f;
		}
		.twitter .mybut:hover{background: #18ABCA !important;}		
		.twitter .mybut{
			position: relative;
			background: #4FCFEB;
			color: #fff;
			text-align: center;
			padding: 15px 30px;
			font-size: 20px;
			border-radius: 4px;
			border-bottom: 3px solid #10658f;
		}
		.twitter .mybut i{
			position: absolute;
			bottom:0;
			left:0;
			background: url(imagenes/privado/complementos/sprite.png) -233px -27px;
			width: 53px;
			height: 42px;
		}		
		.compartir{margin-top: 20px;}
		.ahorasomos{padding: 15px 0}
		.botones .but{display: inline-block;width: 50%}
		.botones{margin:10px auto;width: 100%;max-width: 550px;}
		h5{font:20px helveticaLt;color: #666666}
		h1{font:40px helveticaBd;color: #148dbf;padding: 3px 0 5px;}
		h2{font:40px helveticaBd;color: #ed9845}
		h4{font:30px helveticaBd;color: #ed9845}
		h2>em{font:40px helveticaBd;color: #ed9845}
		h3{font:20px helveticaLt;color: #148dbf}
		.leido{margin-bottom: 20px;}
		.limpiar{font:14px helveticaLt !important; color: #666666 !important;border-top: 1px solid #bee6ec;padding-top: 10px;}
		.savesignature{opacity: 0;visibility: hidden;}
		#signature-pad{cursor: crosshair;max-width: 300px;margin: 0 auto;text-align: center;}
		.yasomos{padding-top: 30px;}
		.comentando{padding-top: 10px;}
		#carta{}
		.registro{padding: 20px 0; margin: 0 auto;max-width: 800px}
		#seccionpublica .public-titulo {
		background: #fff;
		padding: 40px 0;
		text-align: center;
		}
		.tolectura{font:20px helveticaBd;color: #666666;text-align: center;display: inline-block;padding-top: 8px;}
		.tolectura:hover{text-decoration: underline;color: #666666;}
		.txtleido.error,
		h2>em.error{color:#E5493F !important}
		.enlacecarta{font-family: helveticaBd !important}
		.control-clone.error span.incorrecto{display: block !important;color: #000 !important}
		.textoayuda{padding: 10px 0;}
		.textoayuda .incorrecto{font: 16px helveticaLt;color: #E5493F;}
		.logito img{max-width: 100px;margin: 0 auto}
		#compartiendo{width: 100%;text-align: center;}
		.gotoregister{padding-top:90px;}
		.gotoregister p{
			font:18px helveticaLt;color: #666666;padding-bottom: 10px;
		}
		@media only screen and (max-width: 500px){
			
			
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
<body class="nohome" >
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
			<div class="container-fluid cleaner">
				<div id="compartiendo" class="cleaner">
					<div class="cleaner logito">
						<img src="imagenes/branding/logo.png" alt="">
					</div>
					<div class="cleaner">
						<h1></h1>
						<h3>Ya formas parte de nuestra comunidad,</h3>
					</div>
					<div class="cleaner ahorasomos">
						<h2>Ahora somos <em id="seguidores">0</em></h2>
						<h4>niñas, niños y jóvenes que estamos de acuerdo.</h4>
					</div>
					<div class="compartir cleaner">
						<div class="cleaner">
							<h5>Comparte ahora nuestro compromiso</h5>
						</div>
						<div class="cleaner botones row toshare">
							<div class="facebook col-md-6">
								<a href="javascript:void(0)" class="cleaner mybut social popup" data-social='{"type":"facebook", "url":"http://www.somosninja.com/"}'><i></i>Facebook</a>
							</div>
							<div class="twitter col-md-6">
								<a href="javascript:void(0)" class="cleaner mybut social popup" data-social='{"type":"twitter", "url":"http://www.somosninja.com/", "text": "Somos Ninja"}'><i></i>Twitter</a>
							</div>							
						</div>
					</div>					
					<div class="cleaner gotoregister">
						<div class="cleaner">
							<p>¿Actualmente apoyas o formas parte de alguna agrupación ?</p>
						</div>
						<div class="cleaner">
							<a href="javascript:void(0)" class="mybut but-style2 spacing"><i class="icon-registrate"></i> Regístrate con los Ninjas</a>
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
	<!-- Social media    -->
	<script src="privado/js/compartir/jqsocialsharer.min.js"></script>

	<!-- ==================================
	{{Plugins que van solo en esta página}}
	=================================== -->		
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
			// Localstorage
			if (localStorage) {				
				if (localStorage.nombres) {
		        	$("h1").html(localStorage.nombres);
		        }	       
			}

			// Compartir
			$(".toshare a.popup").jqSocialSharer();
			

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
