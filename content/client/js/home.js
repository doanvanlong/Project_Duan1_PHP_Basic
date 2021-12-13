$(document).ready(function () {
  // hàm load thông báo 
  function load_thong_bao_user() {
    $.ajax({
      url: "xu-ly/home/load-thong-bao.php",
      dataType: "json",
      success: function (data) {
        $(".thong_bao_user-content").html(data.noi_dung);
        $(".count_thong_bao_new").html(data.count_new);
        if (data.count_new > 0) {
          $(".count_thong_bao_new").html(data.count_new);
        } else {
          // console.log("xoá đi")
          $(".count_thong_bao_new").html("");
          $(".count_thong_bao_new").css("background", "none");
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

  setInterval(function () {
    if ($(".count_thong_bao_new").text() == 0) {
      $(".count_thong_bao_new").text("");
      $(".count_thong_bao_new").css("background", "none");
    } else {
      $(".count_thong_bao_new").css("background", "white");
    }
    load_thong_bao_user();
  }, 3000);

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
  // xủ lý sản phẩm vừa xem
  var url = location.href;
  // url=url.split('/');
  url = url.includes("san-pham?id"); //xác định đã vô trang chi tiết sp
  if (url) {
    var ten_sp = $('[name*="ten_sp_chinh"]').val();
    var gia_sp = $('[name*="gia_sp_chinh"]').val();
    var hinh_anh = $('[name*="hinh_anh_sp_chinh"]').val();
    var id_sp = $('[name*="id_sp_chinh"]').val();

    // kiểm tra push vào localStorage
    var new_Item = {
      id_sp: id_sp,
      ten_sp: ten_sp,
      gia_sp: gia_sp,
      hinh_anh: hinh_anh,
    };
    if (localStorage.getItem("sp_love") == null) {
      localStorage.setItem("sp_love", "[]");
    }
    var old_data = JSON.parse(localStorage.getItem("sp_love"));

    //kiểm tra nếu trùng
    var matches = $.grep(old_data, function (obj) {
      return obj.id_sp == id_sp;
    });
    if (matches.length) {
    } else {
      old_data.push(new_Item);
    }
    if (old_data.length > 7) {
      // xoá thèn đàu tiên của Mảng
      old_data.shift();
      localStorage.setItem("sp_love", JSON.stringify(old_data));
    } else {
      localStorage.setItem("sp_love", JSON.stringify(old_data));
      // vẫn push bt
    }

  }

  //view ra html

  if (localStorage.getItem("sp_love") != null) {
    var data = JSON.parse(localStorage.getItem("sp_love"));
    data.reverse();

    // đảo ngược Mảng
      $('.load_sp_vua_xem').html(`
      <h3 class="phone-features-heading">Sản phẩm bạn vừa xem</h3>
      <div class="viewed__product">
          <div class="row owl-product_viewed">

          </div>
          </div>

      `);
      var str="";
      $.each(data,function(i,index){
        var gia_sp=index.gia_sp;
        gia_sp = new Number(gia_sp);
        gia_sp=gia_sp.toLocaleString('vi',{style:'currency',currency:'VND'});
        str+=`
        <div class="col-1-7">
        <a href="san-pham?id=${index.id_sp}&name=${index.ten_sp}" class="tab__menu-product-content-newproduct">
            <div class="tab__menu-product-content-newproduct-img" style="background-image: url('${index.hinh_anh}')">
            </div>
            <div class="px-4 pt-1 pb-2">

                <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                   ${index.ten_sp}
                </p>
                <div class="tab__menu-product-newproduct-price d-flex">
                    <b class="tab__menu-product-newproduct-newprice pt-2">
                       ${gia_sp}
                    </b>

                </div>
            </div>
        </a>
    </div>
        `;
      })
      $('.owl-product_viewed').html(str);
  }

 
});

