$(document).ready(function(){
    //owlcarousel
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:1
            }
        }
      });
    $('.menu__items').click(function(){
        if($('.menu__items').hasClass('active')){
            $('.menu__items').removeClass('active');
            $(this).addClass('active');
        }
    })

    
})