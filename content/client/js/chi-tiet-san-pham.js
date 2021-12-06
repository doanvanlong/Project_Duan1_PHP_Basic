$(document).ready(function () {
  $('[data-toggle="popover"]').popover();

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
    dots: false,

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
    $(".doc-them").show();
  });
  //click vào ảnh mô tả nhiều thì hiển thị lên ảnh chính
  $(".imgs-items").click(function () {
    var link = $(this).attr("style");
    $(".product-deltai-img").attr("style", link);
  });

  //xữ lý hiển thị dung lượng khi click hiển thị trên tiêu đề sp
  var ten_hien_thi_sp = $(".product-detail-title").text();
  var title_hien_thi_sp = $(document).attr("title"); //title trang
  // Kiểm tra nếu trong chuỗi có tên ?GB thì khi click vào thì đổi GB
  $(".box-check-dung-luong").click(function () {
    // lấy được số GB khi click
    var GB_click = $(this)
      .children(".check")
      .children(".text-dung-luong")
      .text();
    var GB_click_trim = GB_click.trim(); //cắt trống
    // thay đổi giá khi click
    // Gửi data là id_dung Lượng
    var id_dung_luong = $(this).data("id_dung_luong");

    $.post(
      "../client/xu-ly/chi-tiet-san-pham/click-dung-luong.php",
      { id_dung_luong: id_dung_luong },
      function (data) {
        var obj = JSON.parse(data);
        if (obj.gia_new != "") {
          //là có giảm giá
          var gia_new = obj.gia_new;
          var gia_old = obj.gia_old;
          gia_old = new Number(gia_old);
          gia_new = gia_new.toLocaleString("vi", {
            style: "currency",
            currency: "VND",
          });
          gia_old = gia_old.toLocaleString("vi", {
            style: "currency",
            currency: "VND",
          });
          $(".product-detail-price-new").text(gia_new);
          $(".gia_old ").text(gia_old);
          $(".product-detail-price-new-road_cart").val(obj.gia_new);
        } else {
          //  ko giảm giá =
          var gia_new = obj.gia_new;
          var gia_old = obj.gia_old;
          gia_old = new Number(gia_old);
          gia_new = gia_new.toLocaleString("vi", {
            style: "currency",
            currency: "VND",
          });
          gia_old = gia_old.toLocaleString("vi", {
            style: "currency",
            currency: "VND",
          });
          $(".product-detail-price-new").text(gia_old);
          $(".gia_old ").text("");
          $(".product-detail-price-new-road_cart").val(obj.gia_old);
        }
      }
    );
    //lấy được mảng tên sp hiển thị đầu tiên
    var mang_ten_hien_thi = ten_hien_thi_sp.split(" "); //tách
    var reg = /^\d+GB$/; //đại diện số GB hiển thị bất kì trên sp
    for (var mang of mang_ten_hien_thi) {
      if (reg.test(mang)) {
        // lấy được giá trị của nó  256GB
        // hàm indexoff tìm kiếm trả về ví trí đó
        var indexofGB = mang_ten_hien_thi.indexOf(mang);
        //thay lại HTML theo số GB click
        mang_ten_hien_thi[indexofGB] = `${GB_click_trim}`; //lấy GB click thay vồ lại tên sp và in ra html
      }
    }

    //lấy được mảng title hiển thị đầu tiên
    var mang_title_hien_thi = title_hien_thi_sp.split(" "); //tách
    var reg = /^\d+GB$/; //đại diện số GB hiển thị bất kì trên sp
    for (var mang of mang_title_hien_thi) {
      if (reg.test(mang)) {
        // lấy được giá trị của nó  256GB
        // hàm indexoff tìm kiếm trả về ví trí đó
        var indexofGB = mang_title_hien_thi.indexOf(mang);
        //thay lại HTML theo số GB click
        mang_title_hien_thi[indexofGB] = `${GB_click_trim}`; //lấy GB click thay vồ lại tên sp và in ra html
      }
    }
    //thay đổi bảng  cấu hình ROM GB dưới hình ảnh
    $(".dung_luong_san_pham").text(GB_click_trim);
    // chuyển mảng thành chuỗi
    var chuoi_hien_thi_ten_sp_HTML = mang_ten_hien_thi.join(" ");
    // chuyển mảng thành chuỗi
    var chuoi_hien_thi_title_sp = mang_title_hien_thi.join(" ");
    //xuất ra HTML
    $(".product-detail-title").text(chuoi_hien_thi_ten_sp_HTML);
    $(document).attr("title", chuoi_hien_thi_title_sp);
  });

  //xũ lý thay đổi hình ảnh khi select màu sắc
  $(".select_mau_sac_img").click(function () {
    var link_img_mau_sac = $(this).attr("src");
    var thay_link = `background-image:url('${link_img_mau_sac}')`;
    var bg_img_chinh = $(".product-deltai-img").attr("style", thay_link);
  });

  //Gửi đánh giá bình luận

  // ẩn đánh giá sao khi chưa click btn
  $(".product-detail-rating-write").hide();
  $(".btn-viet-danh-gia ").click(function () {
    $(".product-detail-rating-write").show();
    // kkhi thành công thì ẩn lại
  });

  //  Load dữ liệu , load tất cả đánh giá
  function load_danh_gia() {
    var id_sp = $('[name*="id_sp"]').val();

    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
      data: { id_sp_rating: id_sp },
      type: "POST",
      success: function (data) {
        $(".list-product-detail-rating").html(data);
      },
    });
  }
  setTimeout(function () {
    load_danh_gia();
  }, 1000);

  //load đánh giá trung binhf
  function load_rating_AVG() {
    var id_sp_rating_avg = $('[name*="id_sp"]').val();
    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
      type: "POST",
      data: { id_rating_avg: id_sp_rating_avg },
      success: function (data) {
        $(".load_avg-rating").text(data);
      },
    });
  }
  load_rating_AVG();

  // load số sao đánh giá avg
  function load_star_rating_AVG() {
    var id_sp_star_rating_avg = $('[name*="id_sp"]').val();
    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
      type: "POST",
      data: { id_star_rating_avg: id_sp_star_rating_avg },
      success: function (data) {
        $(".product-detail-rating-avg-star").html(data);
      },
    });
  }
  load_star_rating_AVG();

  // load tổng số đánh giá sp
  function load_so_rating() {
    var id_sp_so_rating = $('[name*="id_sp"]').val();
    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
      type: "POST",
      data: { id_so_rating: id_sp_so_rating },
      success: function (data) {
        $(".count_rating").text(data);
      },
    });
  }
  load_so_rating();

  // load proges rating
  function load_proges_rating() {
    var id_sp_proges_rating = $('[name*="id_sp"]').val();
    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
      type: "POST",
      data: { id_proges_rating: id_sp_proges_rating },
      success: function (data) {
        $(".load_proges_rating").html(data);
      },
    });
  }
  load_proges_rating();

  // Gửi đánh giá sao khi click btn

  $("#send-danh-gia").submit(function (e) {
    e.preventDefault();
    // check lỗi sao rỗng

    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
      type: "POST",
      data: $(this).serializeArray(),
      success: function (data) {
        if (data == "saorong") {
          $(".text-select-star").css("color", "red");
          $(".text-select-star").text("Vui lòng chọn sao");
        } else if (data == "loi") {
        } else if (data == "thanhcong") {
          // Thành công
          setTimeout(function () {
            $(".product-detail-rating-write").hide();
          }, 300);
          $("#send-danh-gia")[0].reset();
          setTimeout(function () {
            load_danh_gia();
          }, 800);
          // load số avg rating
          setTimeout(function () {
            load_rating_AVG();
          }, 800);
          setTimeout(function () {
            load_star_rating_AVG();
          }, 800);
          setTimeout(function () {
            load_so_rating();
          }, 800);
          setTimeout(function () {
            load_proges_rating();
          }, 800);
          setTimeout(function () {
            load_rating_avg_title();
          }, 800);

          setTimeout(function () {
            load_rating_title();
          }, 800);

          // load danh sách đánh giá
        } else {
          window.location = "./tai-khoan/login"; //chuyển đến login khi chưa dnhap
        }
      },
    });
  });

  // Load rating avg tiêu đề sản phẩm
  function load_rating_avg_title() {
    var id_sp_rating_avg_title = $('[name*="id_sp"]').val();
    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
      type: "POST",
      data: { id_rating_avg_title: id_sp_rating_avg_title },
      success: function (data) {
        $(".load_rating_avg_title").html(data);
      },
    });
  }
  load_rating_avg_title();

  // Load số rating tiêu đề sản phẩm
  function load_rating_title() {
    var id_sp_rating_title = $('[name*="id_sp"]').val();
    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
      type: "POST",
      data: { id_rating_title: id_sp_rating_title },
      success: function (data) {
        $(".load_rating_cout_title").text(data);
      },
    });
  }
  load_rating_title();

  // Load số comment tiêu đề sản phẩm
  function load_comment_title() {
    var id_sp_comment_title = $('[name*="id_sp"]').val();
    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
      type: "POST",
      data: { id_comment_title: id_sp_comment_title },
      success: function (data) {
        $(".load_comment_cout_title").text(data);
      },
    });
  }
  load_comment_title();

  //  Xử lý sao khi hover
  $(".rating-sao").mouseover(function () {
    var text_star = $(this).data("text");
    $(".text-select-star").text(text_star);
  });

  // COMMENT

  //load comment
  function load_comment() {
    var id_sp = $('[name*="id_sp"]').val();
    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/binh-luan_pro.php",
      type: "POST",
      data: { id_sp_comment: id_sp },
      success: function (data) {
        $(".list-comment-render").html(data);
      },
    });
  }
  setTimeout(function () {
    load_comment();
  }, 400);

  // Thêm comment sản phẩm

  $("#send_comment").submit(function (e) {
    e.preventDefault();
    $.ajax({
      url: "../client/xu-ly/chi-tiet-san-pham/binh-luan_pro.php",
      type: "POST",
      data: $(this).serializeArray(),
      success: function (data) {
        if (data == 1) {
          // thành công
          $("#send_comment")[0].reset();
          setTimeout(function () {
            load_comment();
          }, 500);
          setTimeout(function () {
            load_comment_title();
          }, 500);
        } else if (data == 0) {
        } else {
          window.location.href = "./tai-khoan/login";
        }
      },
    });
  });
});
