// Ckeditor 4
CKEDITOR.replace("content", {
  height: 300,
  filebrowserUploadUrl: "../admin/xu-ly/san-pham/insert-san-pham.php", //gửi đến file thao tác php
  //xử lý hình ảnh vs ckeditor
});

//toast thông báo
function toast({
  title = "",
  msg = "",
  link = "",
  type = "success",
  duration = 3000,
}) {
  const main = document.getElementById("toast");
  if (main) {
    const toast = document.createElement("div");
    //auto remove
    const autoRemoveId = setTimeout(function () {
      //trả lại id settimeout
      main.removeChild(toast);
    }, duration + 1000); //2 animation = 4s , settime khi end 1 animation thi clear
    //remove khi click
    toast.onclick = function (e) {
      if (e.target.closest(".toast__close")) {
        main.removeChild(toast);
        clearTimeout(autoRemoveId);
      }
    };
    const icons = {
      success: "fas fa-check-circle",
      error: "fas fa-exclamation-circle",
    };
    const icon = icons[type];
    const delay = (duration / 1000).toFixed(2);
    toast.classList.add("toast", `toast--${type}`);
    toast.style.animation = `slideInLeft ease 0.3s,fadeOut linear 1s ${delay}s forwards`;

    toast.innerHTML = `
     
      <div class="toast__icon">
      <i class="${icon}"></i>
  </div>
  <div class="toast__body">
  <a href="${link}">
      <h4 class="toast__title">${title}</h4>
      <p class="toast__msg">${msg}</p>
  </a>
  </div>
  <div class="toast__close">
      <i class="fas fa-times"></i>
  </div>
      `;

    main.appendChild(toast);
  }
}
//VALIDATE FORM SẢN PHẨM

//Check tên sản phẩm đã tồn tại chưa
var check = false;
$('[name*="ten-san-pham"]').keyup(function () {
  if ($(this).val() == "") {
    $("#error-danh-muc-chinh-san-pham").text("");
    //Nếu value = trống thì xoá border lỗi red input
    $(this).css("border", "0");
    check = true;
  } else {
    //Xoá border red input khi khác rỗng
    $(this).css("border", "0");
    check = true;
    //Form có data, gửi ajax qua file php
    $.ajax({
      type: "POST",
      url: "../admin/xu-ly/san-pham/insert-san-pham.php",
      data: { keyup_ten_san_pham: $(this).val() },
      dataType: "text",
      success: function (data) {
        // Lấy data trả về từ file php và ktra keyup DB
        if (data != 0) {
          //có dữ liệu
          $("#error-ten-san-pham").text("Sản phẩm này đã tồn tại");
          //Sản phẩm đã tồn tại sẽ có border red input
          $('[name*="ten-san-pham"]').css("border", "1px solid #f38291");
          check = false;
        } else {
          //Không có data trả về
          $("#error-ten-san-pham").text("");
          // Nếu không trùng sản phẩm thì xoá border lỗi red input
          $(this).css("border", "0");
          check = true;
        }
      },
    });
  }
});
//kiểm tra giá sản phẩm khi nhập
$('[name*="gia-san-pham"]').keyup(function () {
  if ($(this).val() < 0) {
    $("#error-gia-san-pham").text("Giá sản phẩm không thể là số âm!");
    $('[name*="gia-san-pham"]').css("border", "1px solid #f38291");
    check = false;
  } else {
    $("#error-gia-san-pham").text("");
    $('[name*="gia-san-pham"]').css("border", "0");
    check = true;
  }
});
//kiểm tra số lượng sản phẩm khi nhập
$('[name*="so-luong-san-pham"]').keyup(function () {
  if ($(this).val() < 0) {
    $("#error-so-luong-san-pham").text("Số lượng sản phẩm không thể là số âm!");
    $('[name*="so-luong-san-pham"]').css("border", "1px solid #f38291");
    check = false;
  } else {
    $("#error-so-luong-san-pham").text("");
    $('[name*="so-luong-san-pham"]').css("border", "0");
    check = true;
  }
});

// Load danh mục con theo danh mục mẹ value
// Gửi data để biết danh mục mẹ
var id_dm_chinh = $(".danh-muc-chinh-san-pham").val(); //lấy option value trực tiếp từ thẻ select .value
$.post(
  "../admin/xu-ly/san-pham/insert-san-pham.php",
  { id_dm_chinh: id_dm_chinh },
  function (data) {
    $('[name*="danh-muc-chi-tiet-san-pham"]').html(data);
  }
);
//Kiểm tra danh mục chính có phải là điện thoại ko
$(".danh-muc-chinh-san-pham").change(function () {
  if ($(this).children("option:selected").text() == "Điện thoại") {
    // Nếu là điện thoại thì hiện những thứ cần nhập và ngược lại
    $(".hide-mau-sac").show();
    $(".hide-dung-luong").show();
    $(".hide-them-mau-sac-dung-luong").show();
    $(".hide-cau-hinh").show();
  } else {
    // Nếu ko phải là điện thoại thì ẩn Màu sắc ,Dung lượng,THêm màu sắc, thêm dung lượng ,cấu hình
    $(".hide-mau-sac").hide();
    $(".hide-dung-luong").hide();
    $(".hide-them-mau-sac-dung-luong").hide();
    $(".hide-cau-hinh").hide();
  }
  // Gửi data để biết danh mục mẹ
  var id_dm_chinh = $(".danh-muc-chinh-san-pham").val(); //lấy option value trực tiếp từ thẻ select .value
  $.post(
    "../admin/xu-ly/san-pham/insert-san-pham.php",
    { id_dm_chinh: id_dm_chinh },
    function (data) {
      $('[name*="danh-muc-chi-tiet-san-pham"]').html(data);
    }
  );
});

//check màu sắc more : thêm nhiều màu sắc
$(".mau-sac-more").hide();
$(".click-mau-sac-more").click(function () {
  // khi click vào button thì sẻ hiện box để thêm màu và hình ảnh
  $(".mau-sac-more").slideToggle("fast");
});

//Create 1 element khi muốn thêm màu sắc tiếp
$(".click-nhap-them-mau-sac").click(function () {
  $(".mau-sac-more").append(`
    <div class="row ">
    <div class="col-5">
        <div class="mau-sac-more-add">
            <div class="mb-3">
                <input type="text" class="form-control" name="mau-sac-more-add[]" placeholder="Xanh ,Đỏ...">
                <small id="error-mau-sac-more-add" class="form-text text-danger "></small>
            </div>
        </div>
    </div>
    <div class="col-7">
        <div class="hinh-anh-more-add">
            <div class="mb-3">
                <input class="form-control" type="file" id="formFileMultiple" multiple name="anh-mau-sac-more-add[]">
                <small id="error-anh-mau-sac-more-add" class="form-text text-danger "></small>
            </div>
        </div>
    </div>
</div>
    `);
});

//check dung lượng more : thêm nhiều dung lượng
$(".dung-luong-more").hide();
$(".click-dung-luong-more").click(function () {
  // khi click vào button thì sẻ hiện box để thêm màu và hình ảnh
  $(".dung-luong-more").slideToggle("fast");
});
//Create 1 element khi muốn thêm dung lượng  tiếp
$(".click-nhap-them-dung-luong").click(function () {
  $(".dung-luong-more").append(`
  <div class="row ">
  <div class="col-6 ">
      <div class="dung-luong-more-add">
          <label class="my-3">Dung lượng:</label>
          <input type="text" class="form-control" name="dung-luong-more-add[]" placeholder="64,128... ">
          <small id="error-dung-luong-more-add" class="form-text text-danger "></small>
      </div>
  </div>
  <div class="col-6">
      <div class="don-gia-more-add">
          <label class="my-3">Đơn giá:</label>
          <input type="number" class="form-control" placeholder="VND" name="gia-san-pham-more-add[]">
          <small id="error-gia-san-pham" class="form-text text-danger "></small>
      </div>
  </div>
</div>
  `);
});

//click add cấu hình
$(".add-cau-hinh").hide();
$(".click-add-cau-hinh").click(function () {
  // khi click vào button thì sẻ hiện box để thêm cấu hình
  $(".add-cau-hinh").slideToggle("fast");
});

//focus bỏ border red lỗi,bỏ thông báo lỗi DOM
//tên sản phẩm
$('[name*="ten-san-pham"]').focus(function () {
  $(this).css("border", "0");
  $("#error-ten-san-pham").text("");
});
//giá sp
$('[name*="gia-san-pham"]').focus(function () {
  $(this).css("border", "0");
  $("#error-gia-san-pham").text("");
});
//số lượng sp
$('[name*="so-luong-san-pham"]').focus(function () {
  $(this).css("border", "0");
  $("#error-so-luong-san-pham").text("");
});
// Màu sắc
$('[name*="mau-sac"]').focus(function () {
  $(this).css("border", "0");
  $("#error-mau-sac").text("");
});
// Ảnh đại diện
$('[name*="anh-dai-dien"]').focus(function () {
  $(this).css("border", "0");
  $("#error-anh-dai-dien").text("");
});
// Click submit thêm sản phẩm mới => kiểm lỗi, gửi data đi
$("#them-san-pham").submit(function (e) {
  e.preventDefault();
  if (
    $(".danh-muc-chinh-san-pham").children("option:selected").text() ==
    "Điện thoại"
  ) {
    if (
      $('[name*="ten-san-pham"]') &&
      $('[name*="gia-san-pham"]') &&
      $('[name*="so-luong-san-pham"]') &&
      $('[name*="gia-san-pham"]') &&
      $('[name*="mau-sac"]') &&
      $('[name*="anh-dai-dien"]').val() == ""
    ) {
      if ($('[name*="ten-san-pham"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="ten-san-pham"]').css("border", "1px solid #f38291");
        $("#error-ten-san-pham").text("Tên sản phẩm không được để trống.");
      }
      if ($('[name*="gia-san-pham"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="gia-san-pham"]').css("border", "1px solid #f38291");
        $("#error-gia-san-pham").text("Giá sản phẩm không được để trống.");
      }
      if ($('[name*="so-luong-san-pham"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="so-luong-san-pham"]').css("border", "1px solid #f38291");
        $("#error-so-luong-san-pham").text(
          "Số lượng sản phẩm không được để trống."
        );
      }
      if ($('[name*="mau-sac"]').val() == "") {
        // border input và hiển thị lỗi
        $("#error-mau-sac").text("Vui lòng nhập màu sắc sản phẩm.");
        $('[name*="mau-sac"]').css("border", "1px solid #f38291");
      }
      if ($('[name*="anh-dai-dien"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="anh-dai-dien"]').css("border", "1px solid #f38291");
        $("#error-anh-dai-dien").text(
          "Vui lòng tải lên ảnh đại diện sản phẩm."
        );
      }
      // Thông báo thêm sản phẩm thất bại
      toast({
        title: "Thất bại",
        msg: "Thêm sản phẩm thất bại!",
        type: "error",
        duration: 5000,
        link: "#",
      });
      //màu sắc more add
      $('[name*="mau-sac-more-add"]').css("border", "0 ");
      //giá sản phẩm  more add
      $('[name*="gia-san-pham-more-add"]').css("border", "0 ");
    } else {
      // remove error lỗi
      // border input và hiển thị lỗi
      $('[name*="ten-san-pham"]').css("border", "0");
      $("#error-ten-san-pham").text("");
      // border input và hiển thị lỗi
      $('[name*="gia-san-pham"]').css("border", "0");
      $("#error-gia-san-pham").text("");
      // border input và hiển thị lỗi
      $('[name*="so-luong-san-pham"]').css("border", "0");
      $("#error-so-luong-san-pham").text("");
      // border input và hiển thị lỗi
      $('[name*="mau-sac"]').css("border", "0");
      $("#error-mau-sac").text("");
      // border input và hiển thị lỗi
      $('[name*="anh-dai-dien"]').css("border", "0");
      $("#error-anh-dai-dien").text("");

      // khác rỗng
      //
      // Gửi ajax cho phần dnah mục điện thoại
      //Tiến hành gửi data qua file xử lí, insert vào DB
      $.ajax({
        type: "POST",
        url: "../admin/xu-ly/san-pham/insert-san-pham.php", //send data đến folder xử lý
        data: new FormData(this), //send all data theo id name
        contentType: false,
        processData: false,
        success: function (data) {
          // data được gửi về từ file xử lý
          if (data == 1) {
            //Hiển thị thông báo thêm thành công sản phẩm
            toast({
              title: "Thành công",
              msg: "Thêm sản phẩm mới thành công !",
              type: "success",
              duration: 5000,
              link: "list-san-pham",
            });
            //Insert sản phẩm thành công thì reset form
            $("#them-san-pham")[0].reset();
            // reload lại trang sau khi xoá xong
            setTimeout(location.reload.bind(location), 1300);
          } else {
            // Thông báo thêm sản phẩm thất bại
            toast({
              title: "Thất bại",
              msg: "Thêm sản phẩm thất bại!",
              type: "error",
              duration: 5000,
              link: "#",
            });
          }
        },
      });
    }
  } else {
    //là khác điện thoại
    if (
      $('[name*="ten-san-pham"]') &&
      $('[name*="gia-san-pham"]') &&
      $('[name*="so-luong-san-pham"]') &&
      $('[name*="anh-dai-dien"]').val() == ""
    ) {
      if ($('[name*="ten-san-pham"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="ten-san-pham"]').css("border", "1px solid #f38291");
        $("#error-ten-san-pham").text("Tên sản phẩm không được để trống.");
      }
      if ($('[name*="gia-san-pham"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="gia-san-pham"]').css("border", "1px solid #f38291");
        $("#error-gia-san-pham").text("Giá sản phẩm không được để trống.");
      }
      if ($('[name*="so-luong-san-pham"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="so-luong-san-pham"]').css("border", "1px solid #f38291");
        $("#error-so-luong-san-pham").text(
          "Số lượng sản phẩm không được để trống."
        );
      }

      if ($('[name*="anh-dai-dien"]').val() == "") {
        $("#error-mau-sac").text("Vui lòng nhập màu sắc sản phẩm.");
        // border input và hiển thị lỗi
        $('[name*="anh-dai-dien"]').css("border", "1px solid #f38291");
        $("#error-anh-dai-dien").text(
          "Vui lòng tải lên ảnh đại diện sản phẩm."
        );
      }
      // Thông báo thêm sản phẩm thất bại
      toast({
        title: "Thất bại",
        msg: "Thêm sản phẩm thất bại!",
        type: "error",
        duration: 5000,
        link: "#",
      });
    } else {
      // remove error lỗi
      // border input và hiển thị lỗi
      $('[name*="ten-san-pham"]').css("border", "0");
      $("#error-ten-san-pham").text("");
      // border input và hiển thị lỗi
      $('[name*="gia-san-pham"]').css("border", "0");
      $("#error-gia-san-pham").text("");
      // border input và hiển thị lỗi
      $('[name*="so-luong-san-pham"]').css("border", "0");
      $("#error-so-luong-san-pham").text("");
      // border input và hiển thị lỗi
      $('[name*="anh-dai-dien"]').css("border", "0");
      $("#error-anh-dai-dien").text("");

      // khác rỗng
      //
      // Gửi ajax cho phần dnah mục điện thoại
      //Tiến hành gửi data qua file xử lí, insert vào DB
      $.ajax({
        type: "POST",
        url: "../admin/xu-ly/san-pham/insert-san-pham.php", //send data đến folder xử lý
        data: new FormData(this), //send all data theo id name
        contentType: false,
        processData: false,
        success: function (data) {
          // data được gửi về từ file xử lý

          if (data == 1) {
            //Hiển thị thông báo thêm thành công sản phẩm
            toast({
              title: "Thành công",
              msg: "Thêm sản phẩm mới thành công !",
              type: "success",
              duration: 5000,
              link: "list-san-pham",
            });
            //Insert sản phẩm thành công thì reset form
            $("#them-san-pham")[0].reset();
            // reload lại trang sau khi xoá xong
            setTimeout(location.reload.bind(location), 1300);
          } else if (data == 0) {
            // Thông báo thêm sản phẩm thất bại
            toast({
              title: "Thất bại",
              msg: "Thêm sản phẩm thất bại!",
              type: "error",
              duration: 5000,
              link: "#",
            });
          } else {
            // Thông báo thêm sản phẩm thất bại
            toast({
              title: "Thất bại",
              msg: "Vui lòng thử submit lại!",
              type: "error",
              duration: 5000,
              link: "#",
            });
          }
        },
      });
    }
  }
});

