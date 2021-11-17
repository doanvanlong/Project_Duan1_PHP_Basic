
  // Ckeditor 4
  CKEDITOR.replace("content", {
    height: 300,
    filebrowserUploadUrl: "../admin/xu-ly/san-pham/insert-san-pham.php", //gửi đến file thao tác php
    //xử lý hình ảnh vs ckeditor
  });
  //Hiển thị dung lượng đã chọn
  function showRadio() {
    var selectRadio = $("input[name='dung-luong']:checked").val();
    var msgDL = document.getElementById("msg-dung-luong");
    msgDL.innerHTML = "Bạn đã chọn dung lượng: <b>" + selectRadio + "</b>";
    msgDL.style.color = "red";
    document.getElementById("error-dung-luong").innerHTML = "";
  }
  //VALIDATE FORM SẢN PHẨM
  //Check sản phẩm đã tồn tại chưa
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

  //focus bỏ border red lỗi
  $('[name*="ten-san-pham"]').focus(function () {
    $(this).css("border", "0");
  });

  // Click submit thêm sản phẩm mới => kiểm lỗi, gửi data đi
  $("#them-san-pham").submit(function (e) {
    e.preventDefault();
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
      $("#error-anh-dai-dien").text("Vui lòng tải lên ảnh đại diện sản phẩm.");
    }

    //Validate ảnh chi tiết sản phẩm
    if ($('[name*="anh-chi-tiet"]').val() == "") {
      // border input và hiển thị lỗi
      $('[name*="anh-chi-tiet"]').css("border", "1px solid #f38291");
      $("#error-anh-chi-tiet").text("Vui lòng tải lên ảnh chi tiết sản phẩm.");
    }
    //Validate mô tả sản phẩm
    // if ($('[name*="mo-ta"]').val() == "") {
    //   // border input và hiển thị lỗi
    //   $('[name*="mo-ta"]').css("border", "1px solid #f38291");
    //   $("#error-mo-ta").text("Vui lòng nhập mô tả cho sản phẩm.");
    // }

    //Tiến hành gửi data qua file xử lí, insert vào DB
    $.ajax({
      type: "POST",
      url: "../admin/xu-ly/san-pham/insert-san-pham.php", //send data đến folder xử lý
      data: $("#them-san-pham").serializeArray(), //send all data theo id name
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
  });
