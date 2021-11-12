$(document).ready(function() {
    //toglle class thanh nav
   $('.toggle').click(function() {
       $('.toggle').toggleClass('active');
       $('.navigation').toggleClass('active');
       $('.main').toggleClass('active');
   })
//thay đổi icon toggle 
  $('.toggle').click(function(){
     if($('.toggle').hasClass('active')){
         $('.toggle').html('<i class="fas fa-angle-double-right"></i>');
     }else{
        $('.toggle').html('<i class="fas fa-angle-double-left"></i>');
     }
  })
//   sub menu dropdown navigation
 $('.navigation__link').click(function(){
    $(this).next('.sub-menu').slideToggle();
  })

// //   class active thay đổi icon dropdown sub menu navigation
//   $('.navigation__link').click(function(){
//       $(this).toggleClass('active');
//   })
//   //thay đổi icon toggle sub menu navigation
//   $('.navigation__link').click(function(){
//       if($(this).hasClass('active')){
//           $('.box__icon-dropdown').html('<i class="fas fa-chevron-up"></i>');
//       }else{
//         $('.box__icon-dropdown').html('<i class="fas fa-angle-down"></i>');
//       }
//   })
})