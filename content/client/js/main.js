$(document).ready(function () {
  //owlcarousel tab menu product
  $(".owl-tab_menu_product").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 5,
      },
    },
  });
  //owl product flash sale
  $(".owl-product__flash-sale").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 4,
      },
    },
  });
  //owl product flash sale
  $(".owl-product_viewed").owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: true,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 5,
      },
      1000: {
        items: 7,
      },
    },
  });

  // Xử lý tìm kiếm
  $('[name*="search"]').keyup(function () {
    var search = $(this).val();
    $.post("xu-ly/search.php", { search: search }, function (data) {
      $(".sp_goi_y_data").html(data);
    });
  });
  $('[name*="search"]').focus(function () {
    $(".goi-y-search").css("opacity", 1);
  });
  $('[name*="search"]').focusout(function () {
    $(".goi-y-search").css("opacity", 0);
  });

  // $('.header__right-user-login').mouseout(function () {
  //   $('.header__right-user-dropdown ').hide();
  // })

  //class active thanh menu
  window.onload = function () {
    var url = location.href;

    // tách chuổi thành mảng
    var url_arr = url.split("/");
    //lấy phần tử cuối (5)
    var url_last = url_arr[url_arr.length - 1];
    switch (url_last) {
      case "dien-thoai":
        $(".menu-dien-thoai").css("border", "1px solid var(--primary-color)");
        filter_dien_thoai();
        break;
      case "dien-thoai=iphone":
        $(".menu-iphone").css("border", "1px solid var(--primary-color)");
        break;
      case "dien-thoai=samsung":
        $(".menu-samsung").css("border", "1px solid var(--primary-color)");
        break;
      case "dien-thoai":
        $(".menu-dien-thoai").css("border", "1px solid var(--primary-color)");
        break;
      case "dien-thoai=iphone":
        $(".menu-iphone").css("border", "1px solid var(--primary-color)");
        break;
      case "dien-thoai=samsung":
        $(".menu-samsung").css("border", "1px solid var(--primary-color)");
        break;
      case "phu-kien":
        $(".menu-phu-kien").css("border", "1px solid var(--primary-color)");
        filter_phu_kien();
        break;
      case "mua-tra-gop":
        $(".menu-mua-tra-gop").css("border", "1px solid var(--primary-color)");
        break;
      case "khuyen-mai":
        $(".menu-khuyen-mai").css("border", "1px solid var(--primary-color)");
        break;
      case "re-vo-dich":
        $(".menu-re-vo-dich").css("border", "1px solid var(--primary-color)");
        break;
      case "ban-may-cu-doi-may-moi":
        $(".menu-cu-moi").css("border", "1px solid var(--primary-color)");
        break;
      case "tin-tuc":
        $(".menu-tin-moi").css("border", "1px solid var(--primary-color)");
        break;
    }
  };

  //class active tab menu product
  $(".tab__menu-product-items").click(function () {
    if ($(".tab__menu-product-items").hasClass("active")) {
      $(".tab__menu-product-items").removeClass("active");
      $(this).addClass("active");
    }
  });

  // .count down flash sale
  setInterval(function () {
    var ful = new Date("01/01/2022 00:00:00").getTime();
    var now = new Date().getTime();
    var d = ful - now;
    var hours = Math.floor(d / (1000 * 60 * 60));
    var mins = Math.floor(d / (1000 * 60));
    var secs = Math.floor(d / 1000);
    hours %= 24;
    mins %= 60;
    secs %= 60;
    $(".product__flash-sale-countdown-count-items-hours").text(hours);
    $(".product__flash-sale-countdown-count-items-mins").text(mins);
    $(".product__flash-sale-countdown-count-items-secs").text(secs);
  }, 1000);

  //trang điện thoại

  $(".tab-filter-btn").click(function () {
    if (!$(this).hasClass("active")) {
      $(".tab-filter-btn").removeClass("active");
      $(this).addClass("active");
    }
  });


  function filter_dien_thoai(page) {
    $(".load_filter").html("<div id='loading' style=''></div>");
    var hang_sx = get_Class_Lay_Val("hang-san-xuat");
    var muc_gia = get_Class_Lay_Val("muc_gia");
    var dung_luong_pin = get_Class_Lay_Val("dung_luong_pin");
    var rating = get_Class_Lay_Val("rating");
    var thap_cao = get_Class_Lay_Val("thap_cao");

    $.ajax({
      url: "xu-ly/dien-thoai/filter.php",
      type: "POST",
      data: {
        page: page,
        hang_sx: hang_sx,
        muc_gia: muc_gia,
        dung_luong_pin: dung_luong_pin,
        rating: rating,
        thap_cao: thap_cao,
      },
      success: function (data) {
        if (data != "") {
          setTimeout(function () {
            $(".load_filter").html(data);
          }, 400);
        } else {
          setTimeout(function () {
            $(".load_filter").html(`
          <div style="margin:0 auto"> 
          <img style='width:300px' src='../content/client/img/noti-search.png'>
          <div class='text-center' style="margin:0 auto ">Không có dữ liệu</div>
          </div>
        `);
          }, 800);
        }
      },
    });
  }

  // lấy class
  function get_Class_Lay_Val(className) {
    var filter = [];
    $("." + className + ":checked").each(function () {
      filter.push($(this).val());
    });
    return filter;
  }
  // selector . filter
  $(".filter").click(function () {
    // click chọn checked radio thfi gọi hàm gửi dữ liệu search đi
    filter_dien_thoai();
  });
  
  function filter_phu_kien(page) {
    $(".load_filter_phu_kien").html("<div id='loading' style=''></div>");
    var dm_phu_kien = get_Class_Phu_Kien_Lay_Val("filter_phu_kien");

    $.ajax({
      url: "xu-ly/phu-kien/filter.php",
      type: "POST",
      data: {
        page: page,
        dm_phu_kien: dm_phu_kien,
      },
      success: function (data) {
        if (data != "") {
          setTimeout(function () {
            $(".load_filter_phu_kien").html(data);
          }, 300);
        } else {
          setTimeout(function () {
            $(".load_filter_phu_kien").html(`
          <div style="margin:0 auto"> 
          <img style='width:300px' src='../content/client/img/noti-search.png'>
          <div class='text-center' style="margin:0 auto ">Không có dữ liệu</div>
          </div>
        `);
          }, 800);
        }
      },
    });
  }

  // lấy class
  function get_Class_Phu_Kien_Lay_Val(className) {
    var filter = $("." + className + ":checked").val();
    return filter;
  }

  // selector . filter
  $(".filter_phu_kien").click(function () {
    if (!$(this).hasClass("active")) {
      $(".active_phu_kien").removeClass("active");
      $(this).parent().addClass("active");
    }
    // click chọn checked radio thfi gọi hàm gửi dữ liệu search đi
    filter_phu_kien();
  });
  

});
