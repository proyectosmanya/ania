<!doctype html>
<html lang="en">
    <head>
        <!-- ===================================
        {{Chunk site_seo}}
        ==================================== -->
        <?php include 'includes/seo.php'; ?>
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
        <link rel="stylesheet" href="privado/css/sliders/owl.carousel.min.css">
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
            .public-titulo{position: relative;}
            .etiqueta h5{color: #bcce30;font:80px helveticaBd;line-height: 80px;}
            .etiqueta h6{color: #CFF7FF;font:30px helveticaLt;line-height: 30px;}
            .etiqueta{
                position: relative;
                width: 110px;
                padding: 10px 5px 25px 5px;
                border-left: 1px solid #bcce30;
                border-right: 1px solid #bcce30;
                text-align: center;
            }
            .etiqueta:before, .etiqueta:after {
                position: absolute;
                width: 52.5%;
                height: 1px;
                content: ' ';
                left: -2px;
                bottom: 7px;
                background: #bcce30;
                -webkit-transform: rotate(-15deg);
                -moz-transform: skew(-5deg) rotate(-5deg);
                -ms-transform: skew(-5deg) rotate(-5deg);
                -o-transform: skew(-5deg) rotate(-5deg);
                z-index: 1;
            }
            .etiqueta:after {
                left: auto;
                right: -2px;
                -webkit-transform: rotate(5deg);
                -moz-transform: rotate(5deg);
                -ms-transform: rotate(5deg);
                -o-transform: rotate(5deg);
                transform: rotate(15deg);
            }
            .show-date{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: auto;
                max-width: 1260px;
                margin: auto;
                right: 0;
                text-align: left;
            }
            .info{text-align: center;}
            .dates{margin: 10px auto;text-align: center;}
            .dates>div{display: inline-block;}	
            .dates>div i{margin-right: 5px;}	
            .dates>div:first-child{padding-right: 20px;}
            .dates>div:last-child{padding-left: 20px;}
            .dates em{font:19px helveticaLt;color: #CFF7FF}

            .resumen h2{font:20px helveticaBd !important;color: #148dbf !important;margin-bottom: 10px;}
            .resumen p{font:18px helveticaLt;color: #666666}
            .lafoto img{width: 100%}
            .lafoto{margin: 30px auto;text-align: center;max-width: 1000px}
            .maxspace{width: 100%;max-width: 1100px;margin:0 auto;}
            .item{cursor: pointer;}
            .listadefotos{margin:20px auto;position: relative;}
            /*.listadefotos .owl-prev{position: absolute;top: 40%;left: -70px;text-indent: -9000px;background: #000;width: 30px;height: 30px}
            .listadefotos .owl-next{position: absolute;top: 40%;right: -70px;text-indent: -9000px;background: #000;width: 30px;height: 30px}*/
            .maxspace{max-width: 700px}
            .etiqueta-resp{color: #759C09;display: none !important;}

            @media only screen and (max-width: 900px){
                .etiqueta{display: none}
                .etiqueta-resp{display: inline-block !important}
            }
            @media only screen and (max-width: 550px){
                .dates>div{display: block;text-align: left !important;padding:5px 0;}
                .dates{text-align: left;}
                .dates>div:last-child{padding-left: 0 !important;}
            }

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

        <!-- ===================================
        {{Contenido principal}}
        ==================================== -->

        <section id="seccion-principal" class="cleaner">
            <article id="contenido" class="cleaner">
                <div class="public-titulo cleaner">

                    <div class="container-fluid cleaner">
                        <div class="cleaner">
                            <div class="show-date cleaner">
                                <div class=" etiqueta">
                                    <div class="cleaner"><h5>15</h5></div>
                                    <div class="cleaner"><h6>Julio</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid cleaner">
                        <div class="row cleaner">
                            <div class="cleaner col-md-12">
                                <div class="cleaner maxspace">
                                    <h1>Marcha contra el maltrato</h1>
                                </div>
                                <div class="info cleaner">
                                    <div class="cleaner dates">
                                        <div class="cleaner"><i class="myicon-place"></i><em>Plaza de armas</em></div>
                                        <div class="cleaner"><i class="myicon-time"></i><em>11:00 am</em></div>
                                        <div class="cleaner etiqueta-resp"><i class="icon-calendar"></i><em>15 Julio</em></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>			
                <div class="detalle-noticia cleaner">		
                    <div class="container-fluid cleaner">				

                        <div class="lafoto cleaner">
                            <div id="photo" class="cleaner">
                                <img src="" alt="" class="animated">
                            </div>						

                            <div class="flechas cleaner maxwidth2">
                                <a class="toleft cleaner" href="javascript:void(0)"><i class="icon-arrow-left"></i></a>
                                <a class="toright cleaner" href="javascript:void(0)"><i class="icon-arrow-right"></i></a>

                                <div class="listadefotos owl-carousel">
                                    <div class="item cleaner">
                                        <img src="imagenes/posts/1.jpg" alt="">
                                    </div>
                                    <div class="item cleaner">
                                        <img src="imagenes/posts/4.png" alt="">
                                    </div>
                                    <div class="item cleaner">
                                        <img src="imagenes/posts/3.png" alt="">
                                    </div>
                                    <div class="item cleaner">
                                        <img src="imagenes/posts/1.jpg" alt="">
                                    </div>
                                    <div class="item cleaner">
                                        <img src="imagenes/posts/4.png" alt="">
                                    </div>
                                    <div class="item cleaner">
                                        <img src="imagenes/posts/3.png" alt="">
                                    </div>
                                    <div class="item cleaner">
                                        <img src="imagenes/posts/1.jpg" alt="">
                                    </div>
                                    <div class="item cleaner">
                                        <img src="imagenes/posts/4.png" alt="">
                                    </div>
                                    <div class="item cleaner">
                                        <img src="imagenes/posts/3.png" alt="">
                                    </div> 						    
                                </div>

                            </div>
                        </div>
                        
                        <div class="resumen cleaner maxspace">
                            <div class="cleaner">
                                <h2>Sobre la marcha</h2>
                            </div>
                            <div class="cleaner ">
                                <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500 lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
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

        <script>
            $(window).on({
                load: function () {
                    var w = $(window).width();
                    var h = $('#cabecera').height();

                    if (w > 992) {
                        $('#contenido').css('padding-top', h + 30);
                    } else {
                        $('#contenido').css('padding-top', '10px');
                    }

                },
                resize: function () {
                    var w = $(window).width();
                    var h = $('#cabecera').height();

                    if (w > 992) {
                        $('#contenido').css('padding-top', h + 30);
                    } else {
                        $('#contenido').css('padding-top', '10px');
                    }
                }

            });

            $(document).ready(function ($) {
                var img = $('.listadefotos .item:first-child').find('img').attr('src');
                $('#photo').find('img').attr('src', img);




                $('.listadefotos').owlCarousel({
                    items: 5,
                    lazyLoad: true,
                    autoHeight: true,
                    loop: true,
                    margin: 10,
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    },
                    onInitialized: loadClick
                });

                function loadClick(event) {
                    $('.item').click(function (event) {
                        event.preventDefault();
                        var newimg = $(this).find('img').attr('src');
                        $('#photo').find('img').attr('src', newimg);

                        var mytop = $('.public-titulo').offset().top + 100;
                        $('html, body').stop().animate({
                            scrollTop: mytop
                        }, 500, 'swing');
                    });
                }



            });



            function comprobarnavegador() {
                var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome/') > -1;
                var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox/') > -1;
                var is_safari = navigator.userAgent.toLowerCase().indexOf('safari/') > -1;
                var is_opera = navigator.userAgent.toLowerCase().indexOf('opera/') > -1;
                var is_ie = navigator.userAgent.toLowerCase().indexOf('msie') > -1;

                var isMobile = {
                    Android: function () {
                        return navigator.userAgent.match(/Android/i);
                    },
                    BlackBerry: function () {
                        return navigator.userAgent.match(/BlackBerry/i);
                    },
                    iOS: function () {
                        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                    },
                    Opera: function () {
                        return navigator.userAgent.match(/Opera Mini/i);
                    },
                    Windows: function () {
                        return navigator.userAgent.match(/IEMobile/i);
                    },
                    any: function () {
                        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                    }
                };

                if (isMobile.any()) {


                } else {

                    switch (true) {
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
