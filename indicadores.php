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
                #content-indicadores .btn-text-limited{display:none !important}
		.contenedor-filtro{position: relative;margin:40px auto 20px auto;width: 100%;max-width: 450px}
		.filtrado{
			padding: 18px 30px 18px 10px;
			border-radius: 5px;
			background: #fff;
			border: 1px solid #1d7fa7;
			width: 100%;
			-webkit-box-shadow: inset 0px 2px 0 #E0E0E0;
			-moz-box-shadow: inset 0px 2px 0 #E0E0E0;
			-o-box-shadow: inset 0px 2px 0 #E0E0E0;
			-ms-box-shadow: inset 0px 2px 0 #E0E0E0;
			box-shadow: inset 0px 2px 0 #E0E0E0;
			cursor: pointer;
			font:18px helveticaLt;
			color: #148dbf;
			z-index: 1;
		}
		#filters{
			position: absolute;
			top: 60px;
			left: 0;
			height: 150px;
			overflow-x: scroll;
			z-index: 2;
			border: 1px solid #1d7fa7;
			width: 100%;
			background: #fff;
			border-radius: 5px;
			display: none;
		}
		#filters li:hover,
		#filters li.active{
			background: #148dbf;
			color: #fff;
		}
		#filters li{
			cursor: pointer;
			-webkit-transition: all .2s ease-in-out;
			-o-transition: all .2s ease-in-out;
			-moz-transition: all .2s ease-in-out;
			-ms-transition: all .2s ease-in-out;
			transition: all .2s ease-in-out;
			background-color: #fff;
			color: #148dbf;
			padding: 10px;
			font: 15px helveticaLt;
			border-bottom: 1px solid #ddd;
		}
		.seleccionar-tema{position: relative;cursor: pointer;}
		.seleccionar-tema .icon-error:hover{
			color: #148dbf;
		}
		.activado #cancel{display: block;}
		#cancel i{vertical-align: -2px;}
		#cancel span{
			font: 14px helveticaLt;					
		}
		#cancel:hover{text-decoration: underline;color: #148dbf;}
		#cancel{
			color: #1EB7F6;
			display: none;					
			top: -20px;
			right: 2px;
			position: absolute;
			z-index: 22;
		}
		.seleccionar-tema .icon-error{
			font-size: 14px;					
		}
		.seleccionar-tema .myicon-flecha-select{
			position: absolute;
			top: 22px;
			right: 20px;
		}
		.listadeeventos .marino{height: 110px;overflow: hidden;}
		#cancel a>span{font:12px helveticaLt; color: #ddd}
		#cancel a:hover>span{font:12px helveticaLt; color: #000}
                
		
		h3{font:22px helveticaBd;color: #148dbf;padding: 0 0 5px}
		h4{font:18px helveticaLt;color: #fff;padding: 20px 10px;text-align: center;}
		.caja-1 img{
			max-width: 100px;
			margin: 30px auto;
		}
		.lista-aliados{margin: 20px auto}
		.categoria{margin:10px auto;}
		#content-indicadores{
			background: #d2f1f6;
			max-width: 1300px;
			margin: 0px auto;
		}
                .introduccion{
                    color: #666666;
                    font: 18px helveticaLt;
                    padding-top: 30px;
                }
                .evento .tablita2 > div:nth-child(2){
                    border-right: none !important;
                }
                .evento{margin-top: 0px}
                .to-but{text-align: center}
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
								<h1>Indicadores de nuestros eventos</h1>
							</div>
							<div class="cleaner">
								<h2>Esta es la lista de indicadores de nuestros eventos realizados</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
                    
                        <div class="cleaner">
				<div class="container-fluid cleaner">
					<div class="row cleaner">
                                                <div class="col-md-12 cleaner">
                                                    <div class="cleaner text-limited introduccion">
                                                        <p>
                                                            TExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada TExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detalladaTExto lorem ipsul DEscripcion detallada
                                                        </p>
                                                    </div>
                                                </div>
						<div class="col-md-12 cleaner">
							<div class="contenedor-filtro cleaner">
								<a id="cancel" href="javascript:void(0)"><i  class="icon-error"></i> <span>Limpiar</span></a>
								<div class="seleccionar-tema">
									<input type="text" class="filtrado" placeholder="Puede filtrar su tema de interés" readonly>
									<i class="myicon-flecha-select "></i>									
								</div>
								<ul id="filters" class="cleaner">
									<li class="cleaner" data-filter="tema 1">Tema 1</li>
									<li class="cleaner" data-filter="tema 2">Tema 2</li>
									<li class="cleaner" data-filter="tema 3">Tema 3</li>
									<li class="cleaner" data-filter="tema 4">Tema 4</li>
									<li class="cleaner" data-filter="tema 5">Tema 5</li>
									<li class="cleaner" data-filter="tema 6">Tema 6</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div  class="lista-aliados cleaner container-fluid">																	
				<div class="bottom cleaner">																					
					<!-- Load all activities -->
					<ul id="content-indicadores" class="cleaner mygrid mygrid1">

						<li class="cleaner" data-filter-class='["tema 1"]'>
                                                    <div class="evento cleaner">
							<div class="cleaner titulo">
								<div class="cleaner">
									<h3>El nombre de mi evento creado para el bien de la comunidad.</h3>
								</div>								
							</div>
							<div class="cleaner">
								<div class="cleaner datos">
									<div class="tablita2 cleaner">
										<div class="cleaner">
											<div class="cleaner">
												<p><i class="iconito icon-calendar"></i>25/10/2014</p>
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
                                                        <div class="cleaner to-but">
                                                            <a href="javascript:void(0)" class="mybut but-style1 load-animated"><i class="icon-external-link animated"></i>&nbsp;Ver los detalles</a>
                                                        </div>
                                                    </div>
						</li>

						<li class="cleaner" data-filter-class='["tema 2"]'>
                                                    <div class="evento cleaner">
							<div class="cleaner titulo">
								<div class="cleaner">
									<h3>El nombre de mi evento creado para el bien de la comunidad.</h3>
								</div>								
							</div>
							<div class="cleaner">
								<div class="cleaner datos">
									<div class="tablita2 cleaner">
										<div class="cleaner">
											<div class="cleaner">
												<p><i class="iconito icon-calendar"></i>25/10/2014</p>
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
                                                                <div class="cleaner to-but">
                                                                    <a href="javascript:void(0)" class="mybut but-style1 load-animated"><i class="icon-external-link animated"></i>&nbsp;Ver los detalles</a>
                                                                </div>                                                            
							</div>
                                                    </div>   
						</li>

						<li class=" cleaner" data-filter-class='["tema 3"]'>
                                                    <div class="evento cleaner">
							<div class="cleaner titulo">
								<div class="cleaner">
									<h3>El nombre de mi evento creado para el bien de la comunidad.</h3>
								</div>								
							</div>
							<div class="cleaner">
								<div class="cleaner datos">
									<div class="tablita2 cleaner">
										<div class="cleaner">
											<div class="cleaner">
												<p><i class="iconito icon-calendar"></i>25/10/2014</p>
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
                                                                <div class="cleaner to-but">
                                                                    <a href="javascript:void(0)" class="mybut but-style1 load-animated"><i class="icon-external-link animated"></i>&nbsp;Ver los detalles</a>
                                                                </div>
							</div>
                                                    </div>
						</li>
						

						
					</ul>									
					<div class="cleaner loadmore">
						<a class="mybut but-style1 load-animated" href="javascript:void(0)"><i class="icon-loadmore animated"></i>&nbsp;Cargar más</a>
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
        <!-- Grids Photos (App specific) -->
	<script src="privado/js/grids/imagesloaded.min.js"></script>
	<script src="privado/js/grids/wookmark.min.js"></script>
	<!-- Limitar texto a una cantidad de caracteres -->
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

		$(document).ready(function($) {
			// Reducir texto
			myReadmore(300, 'descripcion', 'leer más', 'leer menos');
                        myReadmore(800, 'introduccion', 'leer más', 'leer menos');
                        
                        
                        // Activar el menu del select
			$('.seleccionar-tema').on('click', function(){				
                            $('#filters').slideToggle(300, function(){
                                    $(this).on({	        
                                    'mouseover': function() { 
                                            $(this).show();
                                    },
                                    'mouseout': function() { 
                                            $(this).hide();

                                            $("#filters").each(function() {
                                                if($(this).children('li').hasClass('active')){				    	

                                                }else{
                                                    $('.filtrado').val('');
                                                    $('.contenedor-filtro ').removeClass('activado');
                                                }
                                            });			        	
                                    }			       
                                });
                            });			
			});

			// Interacción para este select
			$('#filters li').on('click', function(event) {
				event.preventDefault();
				var valor = $(this).text();
				$('.filtrado').val(valor);
				$('.contenedor-filtro ').addClass('activado');
			});

			// Eliminar activo filtrado
			$('#cancel').on('click', function(event) {
				event.preventDefault();
				$('#filters li.active').trigger('click');
				$('#filters').hide();
				$('.filtrado').val('');
				$('.contenedor-filtro ').removeClass('activado');

			});
                        
                        // Grids para eventos
			$('.mygrid').imagesLoaded(function() {				
				var options = {
					itemWidth: 400, // Optional min width of a grid item
					autoResize: true, // This will auto-update the layout when the browser window is resized.
					container: $('.mygrid1'), // Optional, used for some extra CSS styling
					offset: 20, // Optional, the distance between grid items
					outerOffset: 10, // Optional the distance from grid to parent
					flexibleWidth: 300 // Optional, the maximum width of a grid item
				};
				// Get a reference to your grid items.
				var handler = $('.mygrid1 li'), filters = $('#filters li');
				// Call the layout function.
				handler.wookmark(options);


				// Filtrar	        
				var onClickFilter = function(event) {
					var item = $(event.currentTarget),
					activeFilters = [];

					if (!item.hasClass('active')) {
						filters.removeClass('active');
					}
					item.toggleClass('active');

					// Filter by the currently selected filter
					if (item.hasClass('active')) {
						activeFilters.push(item.data('filter'));
					}

					handler.wookmarkInstance.filter(activeFilters);
				}

				// Capture filter click events.
				filters.click(onClickFilter);
			});
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
