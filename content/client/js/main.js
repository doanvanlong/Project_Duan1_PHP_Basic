$(document).ready(function(){
  
    //owlcarousel tab menu product
      $('.owl-tab_menu_product').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        autoplay:true,
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
      //owl product flash sale
      $('.owl-product__flash-sale').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:4
            },
            1000:{
                items:4
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

    // .count down flash sale 
   setInterval(function() {
        var ful = new Date('11/20/2021 00:00:00').getTime();
        var now = new Date().getTime();
        var d = ful - now;
        var hours = Math.floor(d / (1000 * 60 * 60));
        var mins = Math.floor(d / (1000 * 60));
        var secs = Math.floor(d / (1000));
        hours %= 24;
        mins %= 60;
        secs %= 60; 
        $('.product__flash-sale-countdown-count-items-hours').text(hours);
        $('.product__flash-sale-countdown-count-items-mins').text(mins);
        $('.product__flash-sale-countdown-count-items-secs').text(secs);
    
   },1000);
})