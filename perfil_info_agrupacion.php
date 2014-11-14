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

	
</head>
<body id="perfil" class="nohome">
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

	<div id="contenedor-alerta" class="cleaner">
		<div class="texto cleaner">
			<i class="icon-error icono"></i>
			<span><!-- Aquí va el texto de alerta --></span>
		</div>
	</div>

	<section id="seccion-principal" class="cleaner">
		<article id="contenido" class="cleaner">
			<div id="" class="container-fluid cleaner">
				<div class="row cleaner">
					<div id="" class="cleaner col-md-12">
						<div id="dashboard" class="cleaner">
							<div class="col-md-3 cleaner">
								<div id="panel" class="cleaner">
									<?php include 'includes/menu_perfil_usuario.php' ?>
								</div>
							</div>						
							<div class="col-md-9 cleaner">
								<div id="content-eventos" class="cleaner">									
									<div class="top cleaner">
										<div class="cleaner row">
											<div class="col-md-8 cleaner marino spacetop">
												<h1>Perfil interno</h1>
											</div>											
										</div>
									</div>
									<div class="bottom cleaner">										
										<form action="" id="frm-perfil" class="cleaner">
											<div class="container-fluid general-control-clone cleaner">
												<div class="cleaner row">
													<div class="cleaner cleaner seccion">
														<div class="control-clone cleaner">
															<h2>Información básica:</h2>
														</div>															
														<div class="row cleaner">
															<div class="col-md-6 cleaner control-clone">
																<div class="cleaner">
																	<input id="agrupacion" name="agrupacion" type="text" class="myinput style1 cleaner" placeholder="Nombre de la agrupación">
																</div>																
															</div>
															<div class="col-md-6 cleaner control-clone">
																<div class="cleaner">
																	<input id="responsable" name="responsable" type="text" class="myinput style1 cleaner" placeholder="Nombre del responsable">
																</div>																
															</div>
														</div>
														<div class="row cleaner">
															<div class="col-md-6 cleaner control-clone">
																<div class="cleaner">
																	<input id="telefono" name="telefono" type="text" class="myinput style1 cleaner" placeholder="Teléfono fijo ó celular">																	
																</div>																
															</div>
															<div class="col-md-6 cleaner control-clone">
																<div class="cleaner">
																	<input id="correo" name="correo" type="text" class="myinput style1 cleaner" placeholder="Correo electrónico">																	
																</div>																
															</div>
														</div>
													</div>
													<div class="cleaner seccion">
														<div class="control-clone cleaner">
															<h2>Ubicación:</h2>
														</div>															
														<div class="row cleaner">
															<div class="col-md-6 cleaner control-clone validar_select">
																<select name="departamento" id="departamento" class="myinput style1 select-idioma">
												                 	<option></option>
												                 	<option value="1">$1,000 a $2,000</option>
												                 	<option value="2">$2,000 a $3,000</option>
												                 	<option value="3">$3,000 a $4,000</option>
												                 	<option value="4">$5,000 a $6,000</option>
												                 	<option value="5">$6,000 a más</option>
												                 	<option value="6">No deseo responder</option>
												             	</select>
															</div>
															<div class="col-md-6 cleaner control-clone validar_select">
																<select name="provincia" id="provincia" class="myinput style1">
												                 	<option></option>
												                 	<option value="1">$1,000 a $2,000</option>
												                 	<option value="2">$2,000 a $3,000</option>
												                 	<option value="3">$3,000 a $4,000</option>
												                 	<option value="4">$5,000 a $6,000</option>
												                 	<option value="5">$6,000 a más</option>
												                 	<option value="6">No deseo responder</option>
												             	</select>
															</div>													
														</div>
														<div class="row cleaner">
															<div class="col-md-6 cleaner control-clone validar_select">
																<div class="cleaner">
																	<select name="distrito" id="distrito" class="myinput style1">
													                 	<option></option>
													                 	<option value="1">$1,000 a $2,000</option>
													                 	<option value="2">$2,000 a $3,000</option>
													                 	<option value="3">$3,000 a $4,000</option>
													                 	<option value="4">$5,000 a $6,000</option>
													                 	<option value="5">$6,000 a más</option>
													                 	<option value="6">No deseo responder</option>
													             	</select>
																</div>																
															</div>
															<div class="col-md-6 cleaner control-clone">
																<div class="cleaner">
																	<input id="dirección" name="dirección" type="text" class="myinput style1 cleaner" placeholder="Dirección">
																</div>																
															</div>
														</div>
														<div class="row cleaner">
															<div class="col-md-12 cleaner control-clone">
																<div class="cleaner">
																	<div id="load-gmap" class="cleaner" style="width:100%;height:350px"></div>
																</div>																
															</div>
														</div>
														<!-- Me muestra las coordenadas -->														
														<input type="hidden" name="latitud" id="latitud" value="">
														<input type="hidden" name="longitud" id="longitud" value="">
														<!-- end Coordenadas -->

														<div class="row cleaner">
															<div class="col-md-6 cleaner control-clone ">
																<div class="content-check cleaner">
																	<div class="cleaner">
																		<input type="checkbox" name="activar" id="activar" value="1" class="check">
																		<label for="activar"></label>
																	</div>
																	<div class="cleaner">
																		<label for="activar">Quiero aparecer en el mapa de la comunidad</label>
																	</div>
																</div>
															</div>										
														</div>													
													</div>
													
													<div class="cleaner seccion">
														<div class="control-clone cleaner">
															<h2>Acerca de la agrupación:</h2>
														</div>
														<div class="row cleaner">
															<div class="col-md-12 cleaner control-clone area-contador">
																<textarea name="resumen" id="resumen" class="mytextarea style1 " placeholder="Cuéntanos un poco sobre la agrupación"></textarea>
																<div id="numero_contador" class="contador cleaner"></div>
															</div>															
														</div>												
														<div class="row cleaner">
															<div class="col-md-6 cleaner control-clone ">
																<div class="content-check cleaner">
																	<div class="cleaner">
																		<input type="checkbox" name="pertenece" id="pertenece" value="1" class="check">
																		<label for="pertenece"></label>
																	</div>
																	<div class="cleaner">
																		<label for="pertenece">Pertenezco a una institución educativa</label>
																	</div>
																</div>
															</div>
															<div class="col-md-6 cleaner control-clone">
																<div class="cleaner">
																	<input type="text" id="institucion" name="institucion" class="myinput style1 cleaner " placeholder="Nombre de la institución" disabled readonly>
																</div>
															</div>														
														</div>
													</div>

													<div class="cleaner cleaner seccion">
														<div class="control-clone cleaner">
															<h2>Redes Sociales&nbsp;&nbsp;<em>(Información opcional)</em>:</h2>
														</div>
														<div class="row cleaner">
															<div class="col-md-6 cleaner control-clone">
																<input type="text" id="paginaweb" name="paginaweb" class="myinput style1 cleaner" placeholder="Página web">
															</div>
															<div class="col-md-6 cleaner control-clone">
																<input type="text" id="redsocial" name="redsocial" class="myinput style1 cleaner" placeholder="Facebook, Instagram, Twitter, etc.">
															</div>
														</div>
													</div>			
													<div class="cleaner tobut">
														<button class="mybut but-style1 toanimated1" type="submit"><i class="icon-save animated"></i>&nbsp;Guardar información</button>
													</div>
												</div>
											</div>
										</form>
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
	<!-- {Select 2} -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.0/select2.min.js"></script>
	<script>window.jQuery || document.write('<script src="privado/js/select/select2.min.js"><\/script>')</script>
	<script src="privado/js/select/select2.es.min.js"></script>	
	<!-- {Jquery Validations} -->	
	<script src="privado/js/validation/validate.min.js"></script>
	<script src="privado/js/validation/app.validations.min.js"></script>
	<script>
		$(window).on({
			load: function(){

				// cargar map
				loadGmaps();

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
			// Activar institución
			$('#pertenece').change(function(){
                if($('#pertenece').is(':checked')){
               		$('#institucion').removeAttr('disabled readonly');
                }else{
                    $('#institucion').attr({ "disabled": "disabled", "readonly": "readonly" });
                    $('#institucion').val('');
                    $('#institucion').closest('.control-clone').removeClass('error');
                }
            })

			// Máxima cantida de caracteres
	        var max_caracteres = 400;
	        var area_contador = $('#resumen');
	        var numero_contador = $('#numero_contador');
	        $(numero_contador).text('Máximo '+max_caracteres+' caracteres');
	        $(area_contador).keyup(function(){
	            var counter = $(this);
	            if(counter.val().length > max_caracteres){
	                counter.val( counter.val().substr(0, max_caracteres) );
	            }else {
	                $(numero_contador).text(max_caracteres-counter.val().length);
	            }
	        });
		
			$('#frm-perfil').validate({
				ignore: "",
				rules: {		
					agrupacion: {
						required: true
					},
					responsable:{
						required: true
					},
					telefono:{
						required: true
					},				
					correo:{
						required: true,
						email: true
					},
					resumen:{
						required: true						
					},
					departamento:{
						required: true						
					},
					provincia:{
						required: true						
					},
					distrito:{
						required: true						
					},
					institucion:{
						required: true						
					}				
				},
				messages: {					
					agrupacion: {
						required: '&nbsp;'
					},
					responsable:{
						required: '&nbsp;'
					},
					telefono:{
						required: '&nbsp;'
					},					
					correo:{
						required: '&nbsp;',
						email: '&nbsp;'
					},
					resumen:{
						required: '&nbsp;'
					},
					departamento:{
						required: '&nbsp;'
					},
					provincia:{
						required: '&nbsp;'
					},
					distrito:{
						required: '&nbsp;'
					},
					institucion:{
						required: '&nbsp;'
					}
				},
				errorClass: "incorrecto",
				errorElement: "span",
				showErrors: function(errorMap, errorList){
				    $("#contenedor-alerta .texto span").html("Se presentaron "+ this.numberOfInvalids() + " errores.");
				    $("#contenedor-alerta").addClass('block');	   
				    this.defaultShowErrors();
				},
				unhighlight: function(element, errorClass) {
				    var numberOfInvalids = this.numberOfInvalids();
				    
				    if (numberOfInvalids === 0) {
				        $("#contenedor-alerta").removeClass('block');
				    }else{
				    	$("#contenedor-alerta").addClass('block');
				    }   
				},
				highlight: function(element){
					$(element).closest('.control-clone').removeClass('success').addClass('error');
				},
				success: function(element){
					element.closest('.control-clone').removeClass('error').addClass('success');
				}
			});

			// departamento/provincia/distrito
			$("#departamento").select2({
            	placeholder: "Departamento",
				allowClear: true
            });
            $("#provincia").select2({
            	placeholder: "Provincia",
				allowClear: true
            });
            $("#distrito").select2({
            	placeholder: "Distrito",
				allowClear: true
            });	
		});


		// Functions	
        function loadGmaps() {
    		var script = document.createElement('script');
    		script.type = 'text/javascript';
    		script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&callback=iniciarGMap';
    		document.body.appendChild(script);
    	}
		function iniciarGMap() {

			// Posición/Ubicación actual
    		var miUbicacion = new google.maps.LatLng(-12.060024,-77.000601);
    	  	
    	  	// Opciones del mapa
    	  	var mapOptions = {
    			zoom: 16,
    			center: miUbicacion,
    			scrollwheel: false,
    			mapTypeControlOptions:{
    				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    			}
    	  	};
    	  	// Crear una nueva vista (estilos)
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
    	  	// // Crear una nueva vista (nombre)
    	  	var styledMap = new google.maps.StyledMapType(styles, {name: "Ania"});

    	  	// Cargar el mapa
    	  	var map = new google.maps.Map(document.getElementById('load-gmap'), mapOptions);
    	  	map.mapTypes.set('map_style', styledMap);
    		map.setMapTypeId('map_style');

    		// Marcador
    		var marker = new google.maps.Marker({
    			position: miUbicacion,
    			map: map,
    			title:"Ania",
    			icon: 'imagenes/privado/complementos/place.png',
    			animation: google.maps.Animation.DROP,
    			draggable: true
    		});

    		// Capturar la Longitud y Latitud   
    		google.maps.event.addListener(marker, 'dragend', function (event) {
			    document.getElementById("latitud").value = this.getPosition().lat();
			    document.getElementById("longitud").value = this.getPosition().lng();
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
