function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}

bandera = 0;

$("[data-scrollable]").click(function(e){
        var $anchor = $(this);
        $("html, body").stop().animate({
            scrollTop: ($($anchor.attr("href")).offset().top) - 150
        }, 1000);
        event.preventDefault();
}); 

$("[data-scrollable-movil]").click(function(e){
        var $anchor = $(this);
        $("html, body").stop().animate({
            scrollTop: ($($anchor.attr("href")).offset().top) - 80
        }, 1000);
        event.preventDefault();
}); 






$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); 


$(document).ready(function() {  
    $(".carousel-inner").swiperight(function() {  
        $(this).parent().carousel('prev');  
    });  
    $(".carousel-inner").swipeleft(function() {  
        $(this).parent().carousel('next');  
    });  
});  




$(".item-galeria-oculto").toggle();
$("#ocultar-galeria-btn").toggle();
$("#ver-galeria-completa-btn").click(function(){
    $(".item-galeria-oculto").toggle(1000);
    $("#ocultar-galeria-btn").toggle();
    $("#ver-galeria-completa-btn").toggle();

});
    
$("#ocultar-galeria-btn").click(function(){
    $(".item-galeria-oculto").toggle(1000);
    $("#ocultar-galeria-btn").toggle();
    $("#ver-galeria-completa-btn").toggle(500);
});





$(".item-galeria-oculto-resp").toggle();
$("#ocultar-galeria-btn-resp").toggle();
$("#ver-galeria-completa-btn-resp").click(function(){
    $(".item-galeria-oculto-resp").toggle(1000);
    $("#ocultar-galeria-btn-resp").toggle();
    $("#ver-galeria-completa-btn-resp").toggle();

});
    
$("#ocultar-galeria-btn-resp").click(function(){
    $(".item-galeria-oculto-resp").toggle(1000);
    $("#ocultar-galeria-btn-resp").toggle();
    $("#ver-galeria-completa-btn-resp").toggle(500);
});

$('.btn-menu').click(function(){
    if(bandera == 0)
    {
        $('.navbar-menu-container').css('top','100px');
        $('.navbar-menu-container-xs').css('top','81px');
        bandera = 1;
    }
    else
    {
        $('.navbar-menu-container').css('top','60px');
        $('.navbar-menu-container-xs').css('top','-162px');
        bandera = 0;    
    }
        
});
    
$('.item-menu-xs').click(function(){
    $('.navbar-menu-container').css('top','60px');
    $('.navbar-menu-container-xs').css('top','-162px');
    bandera = 0;
});