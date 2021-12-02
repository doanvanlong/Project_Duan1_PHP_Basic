$(document).ready(function () {
  $(".add-giam-gia-sp").click(function () {
    if (!$(this).hasClass("active")) {
      $(".add-giam-gia-sp").removeClass("active");
      $(this).addClass("active");
    }
  });

  //hàm hiển thị  mức giảm thì giá sản phẩm khi giảm sẻ hiện ,chưa keyup

  //hàm keyup khi cả 2 đều thay đổi mới đc mức giảm thì giá sản phẩm khi giảm sẻ hiện
  $('[name*="loai_giam_gia_tien"]').change(function () {
    $('[name*="muc_giam"]').keyup(function () {
      var loai_giam_gia = $('[name*="loai_giam_gia_tien"]').val();
      //  gửi mức giảm và loại giảm
      var muc_giam = $('[name*="muc_giam"]').val();
      if (muc_giam > 0) {
        $.post(
          "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php",
          { keyup_so_tien_giam: loai_giam_gia, muc_giam: muc_giam },
          function (data) {
            //lấy data text vào mức giá sau giảm giá
            var list = JSON.parse(data);
            var class_gia_sau_giam = document.querySelectorAll(".gia_sau_giam"); //lấy  all thẻ để text vào
            var i = 0;
            // lặp obj và text nó vào thứ i , mỗi lần chạy i++;
            for (var item of list) {
              var gia_sau_giam = item.gia_sau_giam.toLocaleString("vi", {
                style: "currency",
                currency: "VND",
              });
              class_gia_sau_giam[i].innerText = gia_sau_giam;
              i++;
            }
          }
        );
      }
    });
  });
  //hàm keyup khi chỉ1 thèn mức giá thay đổi  thì giá sản phẩm  giảm khi giảm sẻ hiện
  $('[name*="muc_giam"]').keyup(function () {
    var loai_giam_gia = $('[name*="loai_giam_gia_tien"]').val();
    //  gửi mức giảm và loại giảm
    var muc_giam = $('[name*="muc_giam"]').val();
    if (muc_giam > 0) {
      $.post(
        "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php",
        { keyup_so_tien_giam: loai_giam_gia, muc_giam: muc_giam },
        function (data) {
          //lấy data text vào mức giá sau giảm giá
          var list = JSON.parse(data);
          var class_gia_sau_giam = document.querySelectorAll(".gia_sau_giam"); //lấy  all thẻ để text vào
          var i = 0;
          // lặp obj và text nó vào thứ i , mỗi lần chạy i++;
          for (var item of list) {
            var gia_sau_giam = item.gia_sau_giam.toLocaleString("vi", {
              style: "currency",
              currency: "VND",
            });
            class_gia_sau_giam[i].innerText = gia_sau_giam;
            i++;
          }
        }
      );
    }
  });

  $("#example_length").remove();
  // $("#example_filter").remove();
  //hàm load table list sp session
  function load_list_sp_add_giam_gia() {
    $.post(
      "../admin/xu-ly/khuyen-mai/giam-gia/load-session-sp.php",
      function (data) {
        $(".hello").html(data);
      }
    );
  }
  load_list_sp_add_giam_gia();
  //    // xữ lý thêm sp giảm giá vào session
  $(".submit-add-giam-gia-session").click(function () {
    var check_id_sp = $('[name*="check_id_sp"]');
    var result = [];
    for (var i = 0; i < check_id_sp.length; i++) {
      if (check_id_sp[i].checked === true) {
        result.push(check_id_sp[i].value);
      }
    }
    //gửi mảng id_sp vào session
    $.post(
      "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php",
      { mang_giam_gia_id_sp: result },
      function (data) {
        if (data == 1) {
          load_list_sp_add_giam_gia();
          $(".modal_add-giam-gia").hide();
          $("body").removeClass("modal-open");
          $("body").attr("style", "");
          $(".fade").removeClass("modal-backdrop");

          //thành công thì ,lấy giá sau giảm từ JS
          var loai_giam_gia = $('[name*="loai_giam_gia_tien"]').val();
          var muc_giam = $('[name*="muc_giam"]').val();
          if (muc_giam > 0) {
            $.post(
              "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php",
              { change_so_tien_giam: loai_giam_gia, muc_giam: muc_giam },
              function (data) {
                //lấy data text vào mức giá sau giảm giá
                var list = JSON.parse(data);
                var class_gia_sau_giam =
                  document.querySelectorAll(".gia_sau_giam"); //lấy  all thẻ để text vào
                var i = 0;
                // lặp obj và text nó vào thứ i , mỗi lần chạy i++;
                for (var item of list) {
                  var gia_sau_giam = item.gia_sau_giam.toLocaleString("vi", {
                    style: "currency",
                    currency: "VND",
                  });
                  class_gia_sau_giam[i].innerText = gia_sau_giam;
                  i++;
                }
              }
            );
          }
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
  //khi click check all thì đồng thời tất cả sp sẻ checked
  $(".ap-dung-giam-gia-all").click(function () {
    var check_id_sp = $('[name*="check_id_sp"]');
    for (var i = 0; i < check_id_sp.length; i++) {
      check_id_sp[i].setAttribute("checked", "true");
    }
  });
  //xữ lý thêm tất cả sp  là giảm giá
  $(".ap-dung-giam-gia-all").click(function () {
    $(".submit-add-giam-gia-session").click(function () {
      $.post(
        "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php",
        { chon_all_sp: "chon_all_sp" },
        function (data) {
          if (data == 1) {
            load_list_sp_add_giam_gia();
          }
        }
      );
    });
  });
  //xoá session sản phẩm theo id data
  $(".delete_sp_giam_gia").click(function () {
    var id_sp_xoa_session = $(this).data("id_sp");
    $.post(
      "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php",
      { id_delete_sp: id_sp_xoa_session },
      function (data) {
        if (data == 1) {
          // thành công
          // location.reload();
          load_list_sp_add_giam_gia();
        }
      }
    );
  });

  // xũ lý khi click vào hoàn tất để gửi dữ liệu vào DB
  //kiểm lỗi trc
  //keyup số âm
  $('[name*="muc_giam"]').keyup(function () {
    if ($('[name*="muc_giam"]').val() <= 0) {
      $(".error-muc_giam").text("Mức giảm không phải là số âm ");
    } else {
      $(".error-muc_giam").text("");
    }
  });
  $('[name*="gioi_han_dat_hang"]').keyup(function () {
    if ($('[name*="gioi_han_dat_hang"]').val() <= 0) {
      $(".error-gioi_han_dat_hang").text(
        "Giới hạn đặt hàng không phải là số âm "
      );
    } else {
      $(".error-gioi_han_dat_hang").text("");
    }
  });

  $('[name*="ten_ct_giam_gia"]').focus(function () {
    $(".error-ten_ct_giam_gia").text("");
  });
  $('[name*="date_start"]').focus(function () {
    $(".error-date_start").text("");
  });
  $('[name*="date_end"]').focus(function () {
    $(".error-date_end").text("");
  });
  $('[name*="muc_giam"]').focus(function () {
    $(".error-muc_giam").text("");
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
  $("#form_add_giam_gia").submit(function (e) {
    e.preventDefault();
    if (
      $('[name*="ten_ct_giam_gia"]').val() == "" ||
      $('[name*="date_start"]').val() == "" ||
      $('[name*="date_end"]').val() == "" ||
      $('[name*="muc_giam"]').val() == "" ||
      $('[name*="gioi_han_dat_hang"]').val() == ""
    ) {
      if ($('[name*="ten_ct_giam_gia"]').val() == "") {
        $(".error-ten_ct_giam_gia").text("Tên chương trình không được trống");
      } else {
        $(".error-ten_ct_giam_gia").text("");
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
      toast({
        title: "Thất bại",
        msg: "Tạo chương trình giảm giá thất bại!",
        type: "error",
        duration: 5000,
        link: "#",
      });
    } else {
      // kiểm trố số âm
      if (
        $('[name*="muc_giam"]').val() <= 0 ||
        $('[name*="gioi_han_dat_hang"]').val() <= 0
      ) {
        if ($('[name*="muc_giam"]').val() <= 0) {
          $(".error-muc_giam").text("Mức giảm không là số âm");
        } else {
          $(".error-muc_giam").text("");
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
            url: "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php",
            type: "POST",
            data: $("#form_add_giam_gia").serializeArray(),
            success: function (data) {
              if (data == 1) {
                toast({
                  title: "Thành công",
                  msg: "Thêm giảm giá thành công !",
                  type: "success",
                  duration: 5000,
                  link: "add-giam-gia",
                });
                setTimeout(function () {
                  window.location.href = "giam-gia";
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
            msg: "Tạo chương trình giảm giá thất bại!",
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
      "../admin/xu-ly/khuyen-mai/giam-gia/data-phan-trang.php",
      { trang: trang },
      function (data) {
        // truyền vào lại html ,mặc định load trước top 5 sp php ,khi click mới gọi ajax
        $(".load_danh_sach_sp-add-giam-gia").html(data);
      }
    );
  });

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
