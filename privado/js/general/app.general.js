var mainScroll = false;
var scrollFooter = false;

$(window).on({
	load: function(){

		var an = $(window).width();
		if(an>992){
			
			// Scroll to head
			$(window).scroll(function(){
				var headscroll = $(window).scrollTop();
				if (headscroll > 150) { 
				   $('#cabecera').addClass('fixed');
				} else {
					$('#cabecera').removeClass('fixed');
				}
			});
		}else{
			$('#cabecera').removeClass('fixed');
			$('#cabecera').addClass('relative');
		}

		// [x] Scrolling html
		mainScroll = $("html").niceScroll({
			cursorcolor:"#83aa1b",
			cursorwidth: "15px",
			cursorborder: "1px solid #83aa1b",
			cursorborderradius: "7px",
			scrollspeed: "40",
			background:"#dfdfdf"
		});	
		setTimeout(function(){			
			scrollFooter = $(".scroll").niceScroll({
				cursorcolor:"#749618",
				cursorwidth: "13px",
				cursorborder: "1px solid #749618",
				cursorborderradius: "7px",
				scrollspeed: "30",
				background:"#83aa1b",
				autohidemode:'false'
			});
		}, 3000);	

	},
	resize: function(){
		
		var an = $(window).width();
		if(an>992){
			$('#cabecera').removeClass('relative');
			$('#cabecera').addClass('fixed');
			// Scroll to head
			$(window).scroll(function(){
				var headscroll = $(window).scrollTop();
				if (headscroll > 150) { 
				   $('#cabecera').addClass('fixed');
				} else {
					$('#cabecera').removeClass('fixed');
				}
			});
		}else{
			$('#cabecera').removeClass('fixed');
			$('#cabecera').addClass('relative');
		}

		

		$(".scroll").getNiceScroll().remove();

		setTimeout(function(){			
			scrollFooter = $(".scroll").niceScroll({
				cursorcolor:"#749618",
				cursorwidth: "13px",
				cursorborder: "1px solid #749618",
				cursorborderradius: "7px",
				scrollspeed: "30",
				background:"#83aa1b",
				autohidemode:'false'
			});
		}, 1000);
		
	},
	scroll: function(){
		$(".scroll").getNiceScroll().resize();	
	}
})

$(document).bind('click', function(e){
	
})

;(function($,undefined){
	"use strict";	

	$(document).one('ready', iniciar);

	// [1] {Función} Iniciar todo el contenido
	function iniciar(){
		// Cabecera animada (exepto home)
		$('.nohome #cabecera').delay(0).animate({'top':'0px'}, 1000);
		
		// Carrusel del footer
		$('.redapoyo').owlCarousel({
		    items:4,
		    lazyLoad:true,
		    loop:true,
		    margin:10,
		    responsive:{
		        0:{
		            items:2
		        },
		        600:{
		            items:4
		        },
		        600:{
		            items:6
		        },
		        1000:{
		            items:8
		        }
		    }
		});

		// Trigger to click
		$('.toleft').on('click',function(){
		    $(this).closest('.flechas').find('.owl-prev').trigger('click');
		})
		$('.toright').on('click',function(){
			$(this).closest('.flechas').find('.owl-next').trigger('click');	
		})

		// Acordeón Footer
		$('dl#sitemap-responsive dd').hide();
		$('dl#sitemap-responsive dt').click(function(e){			
			e.preventDefault();	
			var mytop = $('#sitemap-responsive').offset().top;
			$('html, body').stop().animate({
				scrollTop: mytop
			},1400, 'swing');
			

			if ($(this).hasClass('activo')) {
			   $(this).removeClass('activo');
			   $(this).next().animate({
			   		opacity : '0'
			   },'slow');
			   $(this).next().slideUp('fast');
			} else {
			   $('dl#sitemap-responsive dt').removeClass('activo');
			   $(this).addClass('activo');
			   $('dl#sitemap-responsive dd').slideUp();
			   $(this).next().slideDown('fast');
			   $(this).next().animate({
			   		opacity : '1'
			   },'slow');
			}
		});

		// [x] Animación de iconos
		$('.toanimated1').hover(
            function(){ $(this).find('i').addClass('bounceIn') },
            function(){ $(this).find('i').removeClass('bounceIn') }
        );       
        $('.toanimated2').hover(
            function(){ $(this).find('i').addClass('pulse') },
            function(){ $(this).find('i').removeClass('pulse') }
        );
        $('.toanimated3').hover(
            function(){ $(this).find('i').addClass('fadeInDown') },
            function(){ $(this).find('i').removeClass('fadeInDown') }
        );
        $('.toanimated4').hover(
            function(){ $(this).find('i').addClass('tada') },
            function(){ $(this).find('i').removeClass('tada') }
        );
        $('#manyape').hover(
            function(){ $(this).find('img').addClass('pulse') },
            function(){ $(this).find('img').removeClass('pulse') }
        );       		
     
        // [x] Load Menu Responsive
        menuSVG();

        // Activar gotoTop
        gotoTop();

        // Menu
        vermenuIco();
	}

	function menuSVG(){
		var svgIconConfig = {
			icoMenu : {
				url : 'imagenes/privado/complementos/menu.svg',
				animation : [
					{ 
						el : 'path:nth-child(1)', 
						animProperties : { 
							from : { val : '{"path" : "m 5.0916789,20.818994 53.8166421,0"}' }, 
							to : { val : '{"path" : "M 12.972944,50.936147 51.027056,12.882035"}' }
						} 
					},
					{ 
						el : 'path:nth-child(2)', 
						animProperties : { 
							from : { val : '{"transform" : "s1 1", "opacity" : 1}', before : '{"transform" : "s0 0"}' }, 
							to : { val : '{"opacity" : 0}' }
						} 
					},
					{ 
						el : 'path:nth-child(3)', 
						animProperties : { 
							from : { val : '{"path" : "m 5.0916788,42.95698 53.8166422,0"}' }, 
							to : { val : '{"path" : "M 12.972944,12.882035 51.027056,50.936147"}' }
						}
					}
				]
			}
		};
		(function(){
			new svgIcon( document.querySelector('.ico-menu'), svgIconConfig, { easing : mina.elastic, speed: 600 } );
		})();
	}

	function capturarNombre(){
		// [Cloned]			
		$("#nombre").keyup(function(){
			if($(this).val()==""){
				$(this).closest('.control-clone').find('span.correcto').css('display','none');				
			}else{
				$(this).closest('.control-clone').find('span.correcto').css('display','block');
				var txtclonado = $(this).val();            		
        		$(this).closest('.control-clone').find('.name-cloned').html(txtclonado);
			}
		});

		if (localStorage) {
		 	if (localStorage.nombre) {
	        	$("#nombre").val(localStorage.nombre);
	        	$(".name-cloned").text(localStorage.nombre);
	        	// class to input
	        	$("#nombre").addClass('showName');
	        }else{
	        	$("#nombre").removeClass('showName');
	        }

	        $("#nombre").change(function(){
	        	localStorage[$(this).attr("name")] = $(this).val();
	        });
	        $("#nombre").keyup(function () {
				localStorage[$(this).attr('name')] = $(this).val();					
			});
		}
	}

	function gotoTop(){
		$("#gototop").on('click',function(e){
			e.preventDefault();
			$("body,html").animate({
				scrollTop:0},1000);
		});		
	}

	function vermenuIco(){
		$(window).scroll(function(){
			var window_y = $(window).scrollTop(); 
			var window_x = $('#cabecera').position().top;		

			if($('.overlay-scale').hasClass('open')){
				if (window_y > window_x) { 
				   $('#ver-menu').addClass('fixed');
				} else {
					$('#ver-menu').removeClass('fixed');
				}
			}else{
				$('#ver-menu').removeClass('fixed');
			}
		});
	}
})(jQuery);