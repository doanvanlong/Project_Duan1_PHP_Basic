$(document).ready(function() {
   $('.toggle').click(function() {
       $('.toggle').toggleClass('active');
       $('.navigation').toggleClass('active');
       $('.main').toggleClass('active');
   })

  $('.toggle').click(function(){
     if($('.toggle').hasClass('active')){
         $('.toggle').html('<i class="fas fa-angle-double-right"></i>');
     }else{
        $('.toggle').html('<i class="fas fa-angle-double-left"></i>');
     }
  })
})