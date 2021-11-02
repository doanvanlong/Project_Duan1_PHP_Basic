$(document).ready(function(){
    //owlcarousel tab menu product
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        // autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
      });
      //class active thanh menu
    $('.menu__items').click(function(){
        if($('.menu__items').hasClass('active')){
            $('.menu__items').removeClass('active');
            $(this).addClass('active');
        }
    })
    //class active tab menu product
    $('.tab__menu-product-items').click(function() {
        if($('.tab__menu-product-items').hasClass('active')){
            $('.tab__menu-product-items').removeClass('active');
            $(this).addClass('active');
        }
    })
    
})