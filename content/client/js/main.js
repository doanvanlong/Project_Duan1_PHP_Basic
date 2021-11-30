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
      $('.sp_goi_y_data').html(data);
    });
  });
  $('[name*="search"]').focus(function () {
    $('.goi-y-search').css('opacity', 1);
  })
  $('[name*="search"]').focusout(function () {
    $('.goi-y-search').css('opacity', 0);
  })
  
 

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
});

//trang điện thoại

$(".tab-filter-btn").click(function () {
  if (!$(this).hasClass("active")) {
    $(".tab-filter-btn").removeClass("active");
    $(this).addClass("active");
  }
});
// lọc điện thoại bán chạy
$(".filter-tab-ban-chay").click(function () {
  var filter_tab_ban_chay = "filter-tab-ban-chay";
  $.post(
    "xu-ly/dien-thoai/dien-thoai.php",
    { filter_tab_ban_chay: filter_tab_ban_chay },
    function (data) {
      $(".box-dien-thoai-content-product").html(data);
    }
  );
});
// lọc điện thoại giá thấp
$(".filter-tab-gia-thap").click(function () {
  $.post(
    "xu-ly/dien-thoai/dien-thoai.php",
    { filter_tab_gia_thap: "filter_tab_gia_thap" },
    function (data) {
      $(".box-dien-thoai-content-product").html(data);
    }
  );
});
// lọc điẹn thọi giá cao
$(".filter-tab-gia-cao").click(function () {
  $.post(
    "xu-ly/dien-thoai/dien-thoai.php",
    { filter_tab_gia_cao: "filter_tab_gia_cao" },
    function (data) {
      $(".box-dien-thoai-content-product").html(data);
    }
  );
  
});
