// Ckeditor 4
CKEDITOR.replace("content", {
  height: 300,
  filebrowserUploadUrl: "../admin/xu-ly/san-pham/insert-san-pham.php", //gửi đến file thao tác php
  //xử lý hình ảnh vs ckeditor
});
switch (key) {
  case value:
    
    break;

  default:
    break;
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
      data: { keyup_dm_chinh_san_pham: $(this).val() },
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
  } else {
    $("#error-gia-san-pham").text("");
    $('[name*="gia-san-pham"]').css("border", "0");
  }
});
//kiểm tra số lượng sản phẩm khi nhập
$('[name*="so-luong-san-pham"]').keyup(function () {
  if ($(this).val() < 0) {
    $("#error-so-luong-san-pham").text("Số lượng sản phẩm không thể là số âm!");
    $('[name*="so-luong-san-pham"]').css("border", "1px solid #f38291");
  } else {
    $("#error-so-luong-san-pham").text("");
    $('[name*="so-luong-san-pham"]').css("border", "0");
  }
});

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
  // validate danh mục chính
  if ($(".danh-muc-chinh-san-pham").children("option:selected").val() == 0) {
    $("#error-danh-muc-chinh-san-pham").text("Vui lòng chọn danh mục");
  } else {
    $("#error-danh-muc-chinh-san-pham").text("");
    // submit theo danh mục
    if (
      $(".danh-muc-chinh-san-pham").children("option:selected").text() ==
      "Điện thoại"
    ) {
      //submit nội dung liên quan đến điện thoại
      // validate danh mục chi tiết
      if (
        $('[name*="danh-muc-chi-tiet-san-pham"]')
          .children("option:selected")
          .val() == 0
      ) {
        $("#error-danh-muc-chi-tiet-san-pham").text("Vui lòng chọn danh mục");
      } else {
        $("#error-danh-muc-chi-tiet-san-pham").text("");
        // Trường hợp ko lổi gửi đi
        //validate tên sản phẩm
        if ($('[name*="ten-san-pham"]').val() == "") {
          // border input và hiển thị lỗi
          $('[name*="ten-san-pham"]').css("border", "1px solid #f38291");
          $("#error-ten-san-pham").text("Tên sản phẩm không được để trống.");
        }

        // Validate giá sản phẩm
        if ($('[name*="gia-san-pham"]').val() == "") {
          // border input và hiển thị lỗi
          $('[name*="gia-san-pham"]').css("border", "1px solid #f38291");
          $("#error-gia-san-pham").text("Giá sản phẩm không được để trống.");
        }
        // Validate số lượng sản phẩm
        if ($('[name*="so-luong-san-pham"]').val() == "") {
          // border input và hiển thị lỗi
          $('[name*="so-luong-san-pham"]').css("border", "1px solid #f38291");
          $("#error-so-luong-san-pham").text(
            "Số lượng sản phẩm không được để trống."
          );
        }

        //Validate màu sắc sản phẩm
        if ($('[name*="mau-sac"]').val() == "") {
          // border input và hiển thị lỗi
          $('[name*="mau-sac"]').css("border", "1px solid #f38291");
          $("#error-mau-sac").text("Vui lòng nhập màu sắc sản phẩm.");
        }
        //Validate dung lượng sản phẩm
        $(document).ready(function () {
          var selectRadio = $("input[name='dung-luong']:checked").val();
          if (selectRadio) {
            document.getElementById("error-dung-luong").innerHTML = "";
          } else {
            document.getElementById("error-dung-luong").innerHTML =
              "Vui lòng chọn dung lượng.";
            // document.getElementById("error-dung-luong").style.color = "red";
            // document.getElementById("error-dung-luong").style.fontSize = "1em";
          }
        });
        //Validate ảnh đại diện sản phẩm
        if ($('[name*="anh-dai-dien"]').val() == "") {
          // border input và hiển thị lỗi
          $('[name*="anh-dai-dien"]').css("border", "1px solid #f38291");
          $("#error-anh-dai-dien").text(
            "Vui lòng tải lên ảnh đại diện sản phẩm."
          );
        }

        //màu sắc more add
        $('[name*="mau-sac-more-add"]').css("border", "0 ");
        //giá sản phẩm  more add
        $('[name*="gia-san-pham-more-add"]').css("border", "0 ");
      }
    } else {
      //submit nội dung khác điện thoại

      // validate danh mục chi tiết
      if (
        $('[name*="danh-muc-chi-tiet-san-pham"]')
          .children("option:selected")
          .val() == 0
      ) {
        $("#error-danh-muc-chi-tiet-san-pham").text("Vui lòng chọn danh mục");
      } else {
        $("#error-danh-muc-chi-tiet-san-pham").text("");
      }
      //validate tên sản phẩm
      if ($('[name*="ten-san-pham"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="ten-san-pham"]').css("border", "1px solid #f38291");
        $("#error-ten-san-pham").text("Tên sản phẩm không được để trống.");
      }

      // Validate giá sản phẩm
      if ($('[name*="gia-san-pham"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="gia-san-pham"]').css("border", "1px solid #f38291");
        $("#error-gia-san-pham").text("Giá sản phẩm không được để trống.");
      }
      // Validate số lượng sản phẩm
      if ($('[name*="so-luong-san-pham"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="so-luong-san-pham"]').css("border", "1px solid #f38291");
        $("#error-so-luong-san-pham").text(
          "Số lượng sản phẩm không được để trống."
        );
      }
      //Validate ảnh đại diện sản phẩm
      if ($('[name*="anh-dai-dien"]').val() == "") {
        // border input và hiển thị lỗi
        $('[name*="anh-dai-dien"]').css("border", "1px solid #f38291");
        $("#error-anh-dai-dien").text(
          "Vui lòng tải lên ảnh đại diện sản phẩm."
        );
      }
    }
    //
    // Gửi ajax cho phần danh mục điện thoại
    //Tiến hành gửi data qua file xử lí, insert vào DB
    // console.log($(this).serializeArray());
    $.ajax({
      type: "POST",
      url: "../admin/xu-ly/san-pham/insert-san-pham.php", //send data đến folder xử lý
      data: new FormData(this), //send all data theo id name
      contentType: false,
      processData: false,
      success: function (data) {
        // data được gửi về từ file xử lý
        console.log(data);
        // if (data == 1) {
        //   //Hiển thị thông báo thêm thành công sản phẩm
        //   toast({
        //     title: "Thành công",
        //     msg: "Thêm sản phẩm mới thành công !",
        //     type: "success",
        //     duration: 5000,
        //     link: "list-san-pham",
        //   });
        //   //Insert sản phẩm thành công thì reset form
        //   $("#them-san-pham")[0].reset();
        // } else {
        //   // Thông báo thêm sản phẩm thất bại
        //   toast({
        //     title: "Thất bại",
        //     msg: "Thêm sản phẩm thất bại!",
        //     type: "error",
        //     duration: 5000,
        //     link: "#",
        //   });
        // }
      },
    });
  }

  // ràng buộc nhập cáu hình cho điện thoại
});
