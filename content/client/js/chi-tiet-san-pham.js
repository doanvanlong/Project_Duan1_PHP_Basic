$(document).ready(function () {
  // check dung lượng  active class name
  $(".box-check-dung-luong").click(function () {
    if (!$(this).hasClass("active")) {
      $(".box-check-dung-luong").removeClass("active");
      $(this).addClass("active");
    }
  });
  //check màu sắc active class
  $(".box-items-mau").click(function () {
    if (!$(this).hasClass("active")) {
      $(".box-items-mau").removeClass("active");
      $(this).addClass("active");
    }
  });
  // carousel imgs detail
  $(".owl-imgs-detail").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoPlay: true,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 3,
      },
    },
  });

  // carousel sản phẩm tương tự
  $(".owl-san-pham-tuong-tu").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoPlay: true,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 5,
      },
      1000: {
        items: 5,
      },
    },
  });

  $(".an-bot").hide();
  //   đọc thêm mô tả khi click vào
  $(".doc-them").click(function () {
    $(".mota-product-detail").css("height", "auto");
    $(".an-bot").show();
    $(this).hide();
  });
  $(".an-bot").click(function () {
    $(".mota-product-detail").css("height", "700px");
    $(".an-bot").hide();
    $('.doc-them').show();
  });
});
