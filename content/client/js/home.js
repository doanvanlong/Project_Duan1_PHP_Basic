$(document).ready(function () {
  // hàm load thông báo
  function load_thong_bao_user() {
    $.ajax({
      url: "xu-ly/home/load-thong-bao.php",
      dataType: "json",
      success: function (data) {
       
        $(".thong_bao_user-content").html(data.noi_dung);
          $(".count_thong_bao_new").html(data.count_new);
        if(data.count_new >0){
          $(".count_thong_bao_new").html(data.count_new);
        }else{
          // console.log("xoá đi")
          $(".count_thong_bao_new").html('');
          $(".count_thong_bao_new").css('background','none');
        }
        $(".thong_bao_user-content-box").click(function () {
          var id_thong_bao_detail = $(this)
            .children('input[name*="id_thong_bao_detail"]')
            .val();
          if (
            $(this).children(".thong_bao_user-content-text").hasClass("active")
          ) {
            // console.log('ok')
            // gửi ajax update trạng thái thành 1 ,là đã xem
            $.post(
              "xu-ly/home/update-thong-bao.php",
              { id_thong_bao_detail: id_thong_bao_detail },
              function (data) {
                if (data == 1) {
                  //thành công
                  // thì gở bỏ class active
                  // chỉ cần gọi lại nó
                
                  load_thong_bao_user();
                  
                }
              }
            );
          } else {
          }
        });
      },
    });
  }
  load_thong_bao_user();
  $('.thong_bao_user-content-box').click(function (e){
   e.preventDefault();
   console.log('o')
  })
    setInterval(function() {
      if($(".count_thong_bao_new").text() == 0) {
        $(".count_thong_bao_new").text('') ;
        $(".count_thong_bao_new").css('background','none');
      }else{
        $(".count_thong_bao_new").css('background','white');
      }
      load_thong_bao_user();
    },3000)
  
    $("#tab__menu-bestseller").click(function () {
    var sp_bestseller = "tab_menu_sp_bestseller=";
    $.post(
      "xu-ly/home/home.php",
      { tab_menu_sp_bestseller: sp_bestseller },
      function (data) {
        $(".owl-tab_menu_product").html(data);
      }
    );
  });
  $("#tab__menu-newadd").click(function () {
    var sp_new_add = "tab_menu_sp_new_add";
    $.post(
      "xu-ly/home/home.php",
      { tab_menu_sp_new_add: sp_new_add },
      function (data) {
        $(".owl-tab_menu_product").html(data);
      }
    );
  });
});
