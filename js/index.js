$(document).ready(function() {
    $('#ulnav').on('mouseenter','#deco', function() {
        $(this).toggleClass("deco");
        $(this).toggleClass("decosombre");
    })  
    $('#ulnav').on('mouseleave','#deco', function() {
        $(this).toggleClass("deco");
        $(this).toggleClass("decosombre");
    })  

})