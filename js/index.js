$(document).ready(function() {
    var $deco = $('#deco'); 
    $deco.on('mouseenter', function() {
        $deco.css('background-color', '#a80000');
    })
    $deco.on('mouseleave', function() {
        $deco.css('background-color', 'crimson');
    })
    //Test
})