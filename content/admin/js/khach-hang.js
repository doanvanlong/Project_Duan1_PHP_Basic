//Hiển thị mật khẩu
$("#eye").on("click", () => {
  var pwd = document.getElementById("password");
  var eye = $("#eye");
  eye.css("display", "none");
  $("#eye2").css("display", "inline-block");
  pwd.type == "password" ? (pwd.type = "text") : (pwd.type = "password");
});
$("#eye2").on("click", () => {
  var pwd = document.getElementById("password");
  var eye = $("#eye");
  eye.css("display", "inline-block");
  $("#eye2").css("display", "none");
  pwd.type == "password" ? (pwd.type = "text") : (pwd.type = "password");
});

//Loại bỏ error
$('[name*="username"]').focus(function () {
  $(this).css("border", "0");
  $("#error-username").text("");
});

$('[name*="password"]').focus(function () {
  $(this).css("border", "0");
  $("#error-password").text("");
});

$('[name*="name"]').focus(function () {
  $(this).css("border", "0");
  $("#error-name").text("");
});
$('[name*="email"]').focus(function () {
  $(this).css("border", "0");
  $("#error-email").text("");
});
$('[name*="phone"]').focus(function () {
  $(this).css("border", "0");
  $("#error-phone").text("");
});

$('[name*="address"]').focus(function () {
  $(this).css("border", "0");
  $("#error-address").text("");
});
$('[name*="avt"]').focus(function () {
  $(this).css("border", "0");
  $("#error-avt").text("");
});

//Keyup check username
var check = false;
$('[name*="username"]').keyup(function () {
  if ($(this).val() == "") {
    $(this).css("border", "0");
    $("#error-username").text("");
  } else {
    //Xoá border red input khi khác rỗng
    $(this).css("border", "0");
    //Form có data, gửi ajax qua file php
    $.ajax({
      type: "POST",
      url: "../admin/xu-ly/khach-hang/insert-user.php",
      data: { keyup_usename: $(this).val() },
      dataType: "text",
      success: function (data) {
        // Lấy data trả về từ file php và ktra keyup DB
        if (data != 0) {
          //có dữ liệu
          $("#error-username").text(
            "Username này đã tồn tại, vui lòng nhập username khác!"
          );
          //Đã tồn tại sẽ có border red input
          $('[name*="username"]').css("border", "1px solid #f38291");
          check = false;
        } else {
          //Không có data trả về
          $("#error-username").text("");
          // Nếu không trùng thì xoá border lỗi red input
          $(this).css("border", "0");
          check = true;
        }
      },
    });
  }
});

//SUBMIT THÊM MỚI KHÁCH HÀNG
$("#them-moi-khach-hang").click(function () {
  $("#add-user").submit(function (e) {
    e.preventDefault();
    if (
      $('[name*="username"]') &&
      $('[name*="password"]') &&
      $('[name*="name"]') &&
      $('[name*="email"]') &&
      $('[name*="phone"]') &&
      $('[name*="address"]').val() == ""
    ) {
      //Hiển thị lỗi
      if ($('[name*="username"]').val() == "") {
        $('[name*="username"]').css("border", "1px solid #f38291");
        $("#error-username").text("Vui lòng nhập tên đăng nhập!");
      }
      if ($('[name*="password"]').val() == "") {
        $('[name*="password"]').css("border", "1px solid #f38291");
        $("#error-password").text("Vui lòng nhập mật khẩu!");
      }
      if ($('[name*="name"]').val() == "") {
        $('[name*="name"]').css("border", "1px solid #f38291");
        $("#error-name").text("Vui lòng nhập họ và tên!");
      }
      if ($('[name*="email"]').val() == "") {
        $('[name*="email"]').css("border", "1px solid #f38291");
        $("#error-email").text("Vui lòng nhập email!");
      }
      if ($('[name*="phone"]').val() == "") {
        $('[name*="phone"]').css("border", "1px solid #f38291");
        $("#error-phone").text("Vui lòng nhập số điện thoại!");
      }
      if ($('[name*="address"]').val() == "") {
        $('[name*="address"]').css("border", "1px solid #f38291");
        $("#error-address").text("Vui lòng nhập địa chỉ!");
      }
    } else if (check == true) {
      $.ajax({
        type: "POST",
        url: "../admin/xu-ly/khach-hang/insert-user.php",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (data) {
          if (data == 1) {
            toast({
              title: "Thành công",
              msg: "Thêm khách hàng thành công !",
              type: "success",
              duration: 5000,
              link: "list-user",
            });
            // reload lại trang sau khi xoá xong
            setTimeout(location.reload.bind(location), 1000);
          } else {
            toast({
              title: "Thất bại",
              msg: "Thêm khách hàng thất bại !",
              type: "error",
              duration: 5000,
              link: "#",
            });
          }
        },
      });
    } else {
      toast({
        title: "Thất bại",
        msg: "Thêm khách hàng thất bại !",
        type: "error",
        duration: 5000,
        link: "#",
      });
    }
  });
});

//SUBMIT CẬP NHẬT KHÁCH HÀNG
$("#cap-nhat-khach-hang").click(function () {
  $("#update-user").submit(function (e) {
    e.preventDefault();
    if (
      $('[name*="update-username"]') &&
      $('[name*="update-password"]') &&
      $('[name*="update-name"]').val() == ""
    ) {
      //Hiển thị lỗi
      if ($('[name*="update-username"]').val() == "") {
        $('[name*="update-username"]').css("border", "1px solid #f38291");
        $("#error-update-username").text("Vui lòng nhập tên đăng nhập!");
      }
      if ($('[name*="update-password"]').val() == "") {
        $('[name*="update-password"]').css("border", "1px solid #f38291");
        $("#error-update-password").text("Vui lòng nhập mật khẩu!");
      }
      if ($('[name*="update-name"]').val() == "") {
        $('[name*="update-name"]').css("border", "1px solid #f38291");
        $("#error-update-name").text("Vui lòng nhập họ và tên!");
      }
    } else {
      $.ajax({
        type: "POST",
        url: "../admin/xu-ly/khach-hang/update-user.php",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (data) {
          if (data == 1) {
            toast({
              title: "Thành công",
              msg: "Cập nhật khách hàng thành công !",
              type: "success",
              duration: 5000,
              link: "list-user",
            });
            // reload lại trang sau khi xoá xong
            setTimeout(location.reload.bind(location), 1000);
          } else {
            toast({
              title: "Thất bại",
              msg: "Cập nhật khách hàng thất bại !",
              type: "error",
              duration: 5000,
              link: "#",
            });
          }
        },
      });
    }
  });
});

//Ẩn nút bỏ chọn khi chưa chọn tất cả
$("#uncheck-user").css("display", "none");
//Check all sản phẩm
$("#checkall-user").click(function (isChecked) {
  if (isChecked) {
    $(".check-user").each(function () {
      this.checked = true;
      //Hiển thị nút bỏ chọn sau khi đã check all sản phẩm
      $("#uncheck-user").css("display", "inline-block");
      //Ẩn nút chọn tất cả
      $("#checkall-user").css("display", "none");
    });
  }
});

//Bỏ các mục đã check
$("#uncheck-user").click(function (notChecked) {
  if (notChecked) {
    $(".check-user").each(function () {
      this.checked = false;
      //Ẩn nút bỏ chọn sau khi click
      $("#uncheck-user").css("display", "none");
      //Hiển thị lại nút chọn tất cả
      $("#checkall-user").css("display", "inline-block");
    });
  }
});

//DELETE MỘT KHÁCH HÀNG
$(".delete-user").click(function () {
  var isDeleteComfirm = confirm("Bạn có muốn xoá khách hàng này không?");
  if (isDeleteComfirm) {
    let id = $(this).data("delete_user");
    $.ajax({
      type: "POST",
      url: "../admin/xu-ly/khach-hang/delete-user.php",
      data: { delete_user: id },
      success: function (data) {
        if (data == 1) {
          toast({
            title: "Thành công",
            msg: "Xoá khách hàng thành công!",
            type: "success",
            duration: 5000,
            link: "list-user",
          });
          // reload lại trang sau khi xoá xong
          setTimeout(location.reload.bind(location), 1000);
        } else {
          toast({
            title: "Thất bại",
            msg: "Xoá khách hàng thất bại !",
            type: "error",
            duration: 5000,
            link: "#",
          });
        }
      },
    });
  } else {
  }
});
//Ajax xoá nhiều khách hàng
$("#list-user").submit(function (e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "../admin/xu-ly/khach-hang/delete-user.php",
    data: $("#list-user").serializeArray(),
    success: function (data) {
      if (data == 1) {
        toast({
          title: "Thành công",
          msg: "Xoá khách hàng thành công !",
          type: "success",
          duration: 5000,
          link: "danh-muc-tin-tuc",
        });
        // reload lại trang sau khi xoá xong
        setTimeout(location.reload.bind(location), 1000);
      } else {
        toast({
          title: "Thất bại",
          msg: "Xoá khách hàng thất bại !",
          type: "error",
          duration: 5000,
          link: "#",
        });
      }
    },
  });
});
