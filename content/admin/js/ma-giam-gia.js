$(document).ready(function () {
  // keyup tên mã giãm giá
  $('[name*="ten_ma_giam_gia"]').keyup(function (e) {
    var ten_ma_giam_gia = $(this).val();
    $.post(
      "../admin/xu-ly/khuyen-mai/ma-giam-gia/add-ma-giam-gia.php",
      { keyup_ten_ma_giam_gia: ten_ma_giam_gia },
      function (data) {
        if (data == 0) {
          $(".error-ten_ma_giam_gia").text("Mã giảm giá đã tồn tại");
          // có rồi
        } else {
          $(".error-ten_ma_giam_gia").text("");
        }
      }
    );
  });
  // keyup tên chương trình
  $('[name*="ten_ct_ma_giam_gia"]').keyup(function (e) {
    var ten_ct_ma_giam_gia = $(this).val();
    $.post(
      "../admin/xu-ly/khuyen-mai/ma-giam-gia/add-ma-giam-gia.php",
      { keyup_ten_ct_ma_giam_gia: ten_ct_ma_giam_gia },
      function (data) {
        if (data == 0) {
          $(".error-ten_ct_ma_giam_gia").text("Tên chương trình  đã tồn tại");
          // có rồi
        } else {
          $(".error-ten_ct_ma_giam_gia").text("");
        }
      }
    );
  });
  $('[name*="ten_ct_ma_giam_gia"]').focus(function () {
    $(".error-ten_ct_ma_giam_gia").text("");
  });
  $('[name*="ten_ma_giam_gia"]').focus(function () {
    $(".error-ten_ma_giam_gia").text("");
  });
  $('[name*="don_hang_toi_thieu"]').focus(function () {
    $(".error-don_hang_toi_thieu").text("");
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
  // hàm load thông báo
  function load_thong_bao_user() {
    $.ajax({
      url: "../client/xu-ly/home/load-thong-bao.php",
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
              "../client/xu-ly/home/update-thong-bao.php",
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
  //xữ lý submit add mã giảm giá
  $("#form_add_ma_giam_gia").submit(function (e) {
    e.preventDefault();
    if (
      $('[name*="ten_ct_ma_giam_gia"]').val() == "" ||
      $('[name*="date_start"]').val() == "" ||
      $('[name*="date_end"]').val() == "" ||
      $('[name*="muc_giam"]').val() == "" ||
      $('[name*="gioi_han_dat_hang"]').val() == "" ||
      $('[name*="don_hang_toi_thieu"]').val() == "" ||
      $('[name*="ten_ma_giam_gia"]').val() == ""
    ) {
      if ($('[name*="ten_ct_ma_giam_gia"]').val() == "") {
        $(".error-ten_ct_ma_giam_gia").text(
          "Tên chương trình không được trống"
        );
      } else {
        $(".error-ten_ct_ma_giam_gia").text("");
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
      if ($('[name*="muc_giam"]').val() == "") {
        $(".error-muc_giam").text("Mức giảm không được trống");
      } else {
        $(".error-muc_giam").text("");
      }
      if ($('[name*="gioi_han_dat_hang"]').val() == "") {
        $(".error-gioi_han_dat_hang").text(
          "Giới hạn đặt hàng không được trống"
        );
      } else {
        $(".error-gioi_han_dat_hang").text("");
      }
      if ($('[name*="ten_ma_giam_gia"]').val() == "") {
        $(".error-ten_ma_giam_gia").text("Tên mã giảm giá không được trống");
      } else {
        $(".error-ten_ma_giam_gia").text("");
      }
      if ($('[name*="don_hang_toi_thieu"]').val() == "") {
        $(".error-don_hang_toi_thieu").text(
          "Đơn hàng tối thiểu không được trống"
        );
      } else {
        $(".error-don_hang_toi_thieu").text("");
      }
      toast({
        title: "Thất bại",
        msg: "Tạo chương trình mã giảm giá thất bại!",
        type: "error",
        duration: 5000,
        link: "#",
      });
    } else {
      if (check == true) {
        //   gửi ajax
        $.ajax({
          url: "../admin/xu-ly/khuyen-mai/ma-giam-gia/add-ma-giam-gia.php",
          type: "POST",
          data: $(this).serializeArray(),
          success: function (data) {
            if (data == 1) {
              toast({
                title: "Thành công",
                msg: "Tạo mã giảm giá thành công !",
                type: "success",
                duration: 5000,
                link: "add-ma-giam-gia",
              });

              load_thong_bao_user();
              setTimeout(function () {
                window.location.href = "ma-giam-gia";
              }, 1200);
            }
          },
        });
      } else {
        $(".error-date").text("Ngày bắt đầu phải nhỏ hơn ngày kết thúc");
        toast({
          title: "Thất bại",
          msg: "Tạo chương trình mã giảm giá thất bại!",
          type: "error",
          duration: 5000,
          link: "#",
        });
      }
    }
  });

  //Update mã giảm giá
  $("#form_update_ma_giam_gia").submit(function (e) {
    e.preventDefault();
    if ($('[name*="date_end"]').val() == "") {
      $(".error-date_end").text("Ngày kết thúc không được rỗng");
    } else {
      $('[name*="error-date_end"]').text("");
      $.ajax({
        url: "../admin/xu-ly/khuyen-mai/ma-giam-gia/update-ma-giam-gia.php",
        type: "POST",
        data: $(this).serializeArray(),
        success: function (data) {
          if (data == 1) {
            toast({
              title: "Thành công",
              msg: "Cập nhật mã giảm giá thành công !",
              type: "success",
              duration: 5000,
              link: "ma-giam-gia",
            });
            setTimeout(function () {
              window.location.href = "ma-giam-gia";
            }, 1200);
          }
        },
      });
    }
  });
});
