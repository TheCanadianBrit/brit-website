$(document).ready(function()    {
    $('.menuTitle').hide();
    $('.hamburger').css('left','0px');
    
    var hampos = 0;
    
    $('.hamburger').on('click', function(){
        $('.menuTitle').toggle();
        if(hampos === 0){
            $('.hamburger').css('left','200px');
            hampos = 1;
        }else {
            $('.hamburger').css('left','0px');
            hampos = 0;
        }
    });
});