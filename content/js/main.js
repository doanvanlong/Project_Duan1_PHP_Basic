$(document).ready(function(){
    $('.menu__items').click(function(){
        if($('.menu__items').hasClass('active')){
            $('.menu__items').removeClass('active');
            $(this).addClass('active');
        }
    })
})