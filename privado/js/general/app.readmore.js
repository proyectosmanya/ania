function myReadmore(textoMax, claseContenedor, leerTodo, leerMenos){    
    var contenedor = $('.'+claseContenedor+'.text-limited p');   

    setTimeout(function(){$(contenedor).animate({opacity: '1'},1000);},200)

    $(contenedor).each(function(){
        if($(this).text().length > textoMax){         
            var texto=$(this).text().substring(0,textoMax);
            var indiceUltimoEspacio= texto.lastIndexOf('');
            texto=texto.substring(0,indiceUltimoEspacio)+'<span class="points">...</span>';         
            var primeraParte = '<span class="text-visible">' + texto + '</span>';
            var segundaParte = '<span class="text-hidden">' + $(this).text().substring(indiceUltimoEspacio,$(this).text().length) + '</span>';
            $(this).html(primeraParte + segundaParte);
            $(this).after('<em class="cleaner btn-text-limited"><a href="javascript:void(0)">'+leerTodo+'</a></em>');  
        };
    });

    $('.'+claseContenedor+ ' .btn-text-limited').on('click',function(e){
        e.preventDefault();
        if($(this).prev().find('.text-hidden').css('display') == 'none'){
            $(this).prev().find('.text-hidden').fadeIn('slow');
            $(this).prev().find('.points').css('display','none');
            $(this).text(leerMenos);
        }else{
            $(this).prev().find('.text-hidden').fadeOut('slow');
            $(this).prev().find('.points').fadeIn('slow');
            $(this).html(leerTodo);
        };
    });
}