$(document).ready(function () {
  $(".add-giam-gia-sp").click(function () {
    if (!$(this).hasClass("active")) {
      $(".add-giam-gia-sp").removeClass("active");
      $(this).addClass("active");
    }
  });
  $(".add-sp-mua-kem").click(function () {
    if (!$(this).hasClass("active")) {
      $(".add-sp-mua-kem").removeClass("active");
      $(this).addClass("active");
    }
  });

  $("#example_length").remove();
  // $("#example_filter").remove();
  //hàm load table list sp session
  function load_list_add_sp_chinh() {
    $.post(
      "../admin/xu-ly/khuyen-mai/deal-soc/load-session-sp.php",
      function (data) {
        $(".add-sp-deal-soc").html(data);
      }
    );
  }
  load_list_add_sp_chinh();
  //    // xữ lý thêm sp giảm giá vào session
  $(".submit-add-sp-chinh-session").click(function () {
    var check_id_sp_chinh = $('[name*="check_id_sp_chinh"]:checked').val();
    //gửi mảng id_sp vào session
    $.post(
      "../admin/xu-ly/khuyen-mai/deal-soc/add-sp-chinh.php",
      { id_sp_chinh: check_id_sp_chinh },
      function (data) {
        if (data == 1) {
          load_list_add_sp_chinh();
          $(".modal_add-sp-chinh").hide();
          $("body").removeClass("modal-open");
          $("body").attr("style", "");
          $(".fade").removeClass("modal-backdrop");
        }
      }
    );
  });
  //unremove lại modal backdrop
  $(".unremove-lai-modal").click(function () {
    $(".modal_add-giam-gia").show();
    // $("body").removeClass("modal-open");
    // $("body").attr("style", "");
    // $(".fade").removeClass("modal-backdrop");
  });

  //    // xữ lý thêm sp giảm giá vào session
  $(".submit-add-sp-mua-kem-session").click(function () {
    var check_id_sp_mua_kem = $('[name*="check_id_sp_mua_kem"]');
    var result = [];
    for (var i = 0; i < check_id_sp_mua_kem.length; i++) {
      if (check_id_sp_mua_kem[i].checked === true) {
        result.push(check_id_sp_mua_kem[i].value);
      }
    }
    //gửi mảng id_sp vào session
    $.post(
      "../admin/xu-ly/khuyen-mai/deal-soc/add-sp-mua-kem.php",
      { mang_id_sp_mua_kem: result },
      function (data) {
        if (data == 1) {
          load_list_add_sp_chinh();
          $(".modal_add-sp-mua-kem").hide();
          $("body").removeClass("modal-open");
          $("body").attr("style", "");
          $(".fade").removeClass("modal-backdrop");
        }
      }
    );
  });
  //unremove lại modal backdrop
  $(".unremove-lai-modal").click(function () {
    $(".modal_add-giam-gia").show();
    // $("body").removeClass("modal-open");
    // $("body").attr("style", "");
    // $(".fade").removeClass("modal-backdrop");
  });

  //key up mức giảm hiện giá sau giảm giá
  //thành công thì ,lấy giá sau giảm từ JS

  // xũ lý khi click vào hoàn tất để gửi dữ liệu vào DB
  //kiểm lỗi trc


  $('[name*="gioi_han_dat_hang"]').keyup(function () {
    if ($('[name*="gioi_han_dat_hang"]').val() <= 0) {
      $(".error-gioi_han_dat_hang").text(
        "Giới hạn đặt hàng không phải là số âm "
      );
    } else {
      $(".error-gioi_han_dat_hang").text("");
    }
  });

  $('[name*="ten_ct_deal_soc"]').focus(function () {
    $(".error-ten_ct_deal_soc").text("");
  });
  $('[name*="date_start"]').focus(function () {
    $(".error-date_start").text("");
  });
  $('[name*="date_end"]').focus(function () {
    $(".error-date_end").text("");
  });
  $('[name*="muc_giam_mua_kem"]').focus(function () {
    $(".error-muc_giam_mua_kem").text("");
  });
  $('[name*="gioi_han_dat_hang"]').focus(function () {
    $(".error-gioi_han_dat_hang").text("");
  });
  var check = true;
  // kiểm tra chọn ngày start lớn hơn ngày kết thúc
  $('[name*="date_end"]').change(function () {
    var date_start = $('[name*="date_start"]').val();
    var date_end = $('[name*="date_end"]').val();
    date_start = new Date(date_start);
    date_end = new Date(date_end);
    date_start = date_start.getTime();
    date_end = date_end.getTime();
    if (date_start >= date_end) {
      // báo lỗi
      $(".error-date").text("Ngày bắt đầu phải nhỏ hơn ngày kết thúc");
      check = false;
    } else {
      $(".error-date").text("");
      check = true;
    }
  });
  //kiểm tra mới insert vào DB
  $("#form_add_deal_soc").submit(function (e) {
    e.preventDefault();
    if (
      $('[name*="ten_ct_deal_soc"]').val() == "" ||
      $('[name*="date_start"]').val() == "" ||
      $('[name*="date_end"]').val() == "" ||
      $('[name*="muc_giam_mua_kem"]').val() == "" ||
      $('[name*="gioi_han_dat_hang"]').val() == ""
    ) {
      if ($('[name*="ten_ct_deal_soc"]').val() == "") {
        $(".error-ten_ct_deal_soc").text("Tên chương trình không được trống");
      } else {
        $(".error-ten_ct_deal_soc").text("");
      }
      if ($('[name*="date_start"]').val() == "") {
        $(".error-date_start").text("Ngày bắt đầu không được trống");
      } else {
        $(".error-date_start").text("");
      }
      if ($('[name*="date_end"]').val() == "") {
        $(".error-date_end").text("Ngày kết thúc không được trống");
      } else {
        $(".error-date_end").text("");
      }
      for (var i = 0; i < $('[name*="muc_giam_mua_kem"]').length; i++) {
        if ($('[name*="muc_giam_mua_kem"]')[i].value == "") {
          $(".error-muc_giam_mua_kem")[i].innerText =
            "Mức giảm không được bỏ trống";
        } else {
          $(".error-muc_giam_mua_kem")[i].innerText = "";
        }
      }
      if ($('[name*="gioi_han_dat_hang"]').val() == "") {
        $(".error-gioi_han_dat_hang").text(
          "Giới hạn đặt hàng không được trống"
        );
      } else {
        $(".error-gioi_han_dat_hang").text("");
      }
      toast({
        title: "Thất bại",
        msg: "Tạo chương trình deal sốc thất bại!",
        type: "error",
        duration: 5000,
        link: "#",
      });
    } else {
      // kiểm trố số âm
      if (
        $('[name*="muc_giam_mua_kem"]').val() <= 0 ||
        $('[name*="gioi_han_dat_hang"]').val() <= 0
      ) {
        if ($('[name*="muc_giam_mua_kem"]').val() <= 0) {
          $(".error-muc_giam_mua_kem").text("Mức giảm không là số âm");
        } else {
          $(".error-muc_giam_mua_kem").text("");
        }
        if ($('[name*="gioi_han_dat_hang"]').val() <= 0) {
          $(".error-gioi_han_dat_hang").text(
            "Giới hạn đặt hàng không là số âm"
          );
        } else {
          $(".error-gioi_han_dat_hang").text("");
        }
      } else {
        // gửi ajax
        if (check == true) {
          $.ajax({
            url: "../admin/xu-ly/khuyen-mai/deal-soc/add-sp-chinh.php",
            type: "POST",
            data: $(this).serializeArray(),
            success: function (data) {
              if (data == 1) {
                toast({
                  title: "Thành công",
                  msg: "Thêm deal sốc thành công !",
                  type: "success",
                  duration: 5000,
                  link: "add-deal-soc",
                });
                setTimeout(function () {
                  window.location.href = "deal-soc";
                }, 1200);
                //khi add thành công,và xoá session done thì reload về
                // trang list giảm giá
              }
            },
          });
        } else {
          $(".error-date").text("Ngày bắt đầu phải nhỏ hơn ngày kết thúc");
          toast({
            title: "Thất bại",
            msg: "Tạo chương trình deal sốc thất bại!",
            type: "error",
            duration: 5000,
            link: "#",
          });
        }
      }
    }
  });
  //ẩn thèn prev đi trước tiêên
  $(".prev").hide();
  var tong_so_trang = $('[name*="tong_so_trang"]').val();
  // nếu click vào nó ,lấy trang hiện tại trừ 1 , và ngược lại cho next

  //click vào trang để lấy được số trang$
  $(".add-giam-gia-sp.page-link").click(function () {
    var trang = $(this).text();
    // lấy số trang truyền qua file php data-phân trang
    $.get(
      "../admin/xu-ly/khuyen-mai/deal-soc/da-ta-phan-trang.php",
      { trang: trang },
      function (data) {
        // truyền vào lại html ,mặc định load trước top 5 sp php ,khi click mới gọi ajax
        $(".load_danh_sach_sp-chinh").html(data);
      }
    );
  });

  //phân trang sản phẩm mua kèm
  //ẩn thèn prev đi trước tiêên
  $(".prev").hide();
  var tong_so_trang = $('[name*="tong_so_trang"]').val();
  // nếu click vào nó ,lấy trang hiện tại trừ 1 , và ngược lại cho next

  //click vào trang để lấy được số trang$
  $(".add-sp-mua-kem.page-link").click(function () {
    var trang = $(this).text();
    // lấy số trang truyền qua file php data-phân trang
    $.get(
      "../admin/xu-ly/khuyen-mai/deal-soc/da-ta-phan-trang-sp-mua-kem.php",
      { trang: trang },
      function (data) {
        // truyền vào lại html ,mặc định load trước top 5 sp php ,khi click mới gọi ajax
        $(".load_danh_sach_sp-mua-kem").html(data);
      }
    );
  });


  // keyup tên chương Trình đã tồn tại
  $('[name*="ten_ct_deal_soc"]').keyup(function(){
    var ten_ct_deal_soc=($(this).val());
    $.post(
      '../admin/xu-ly/khuyen-mai/deal-soc/add-sp-chinh.php',
      {keyup_ten_ct_deal_soc: ten_ct_deal_soc},
      function(data){
        if(data == 0){
          // chưa tồn tại tên ct
          $('.error-ten_ct_deal_soc').text('');

        }else{
          // tồn tại
          $('.error-ten_ct_deal_soc').text('Tên chương trình đã tồn tại');
        }
      }
    )
  })
  // keyup tên chương Trình đã tồn tại
  $('[name*="ten_ct_giam_gia"]').keyup(function(){
    var ten_ct_deal_soc=($(this).val());
    $.post(
      '../admin/xu-ly/khuyen-mai/deal-soc/add-sp-chinh.php',
      {keyup_ten_ct_deal_soc: ten_ct_deal_soc},
      function(data){
        if(data == 0){
          // chưa tồn tại tên ct
          $('.error-ten_ct_giam_gia').text('');

        }else{
          // tồn tại
          $('.error-ten_ct_giam_gia').text('Tên chương trình đã tồn tại');
        }
      }
    )
  })
  // Click vào kết thúc để đóng chương trình giảm giá
  $(".ket_thuc_km").click(function () {
    var id_km = $(this).data("id_km");
    $(".accpet-ket_thuc_km").click(function () {
      //  gửi ajax
      $.post(
        "../admin/xu-ly/khuyen-mai/giam-gia/ket-thuc-km.php",
        { id_ket_thuc_km: id_km },
        function (data) {
          if (data == 1) {
            // ẩn modal \reload lại trang
            location.reload();
          }
        }
      );
    });
  });

  //click xoá km khỏi danh sách

  $(".xoa_km").click(function () {
    var id_km = $(this).data("id_km");
    $(".accpet-xoa_km").click(function () {
      //  gửi ajax
      $.post(
        "../admin/xu-ly/khuyen-mai/giam-gia/ket-thuc-km.php",
        { id_xoa_km: id_km },
        function (data) {
          if (data == 1) {
            // ẩn modal \reload lại trang
            location.reload();
          }
        }
      );
    });
  });
});
