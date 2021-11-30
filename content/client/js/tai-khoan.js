$(document).ready(function () {
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
  //   Đăng ký

  var check = true;
  // kiểm tra username-register có tồn tại DB chưa
  $('[name*="username-register"]').keyup(function () {
    var username_register = $(this).val();
    $.post(
      "../../../client/xu-ly/tai-khoan/register.php",
      { username_register: username_register },
      function (data) {
        if (data != 0) {
          //    là có record
          check = false;
          $("#error-username-register").text("Tên đăng nhập đã tồn tại");
        } else {
          check = true;
          $("#error-username-register").text("");
        }
      }
    );
  });
  //Khi focus vào input bỏ lỗi
  $('[name*="ho-ten-kh"]').focus(function () {
    $("#error-ho-ten").text("");
  });

  $('[name*="username-register"]').focus(function () {
    $("#error-username-register").text("");
  });
  $('[name*="password-register"]').focus(function () {
    $("#error-password-register").text("");
  });

  $("#register").submit(function (e) {
    e.preventDefault();
    //kiểm lỗi
    if ($('[name*="ho-ten-kh"]').val() == "") {
      check = false;
      $("#error-ho-ten").text("Không bỏ trống trường này");
    } else {
      $("#error-ho-ten").text("");
    }
    if ($('[name*="username-register"]').val() == "") {
      check = false;
      $("#error-username-register").text("Không bỏ trống trường này");
    } else {
      $("#error-username-register").text("");
    }
    if ($('[name*="password-register"]').val() == "") {
      check = false;
      $("#error-password-register").text("Không bỏ trống trường này");
    } else {
      $("#error-password-register").text("");
    }
    if ($('[name*="password-register"]').val().length < 8) {
      check = false;
      $("#error-password-register").text("Mật khẩu tối thiểu 8 ký tự");
    } else {
      $("#error-password-register").text("");
      check = true;
    }

    if (check == true) {
      // gửi ajax
      $.ajax({
        type: "POST",
        url: "../../../client/xu-ly/tai-khoan/register.php",
        data: $(this).serializeArray(),
        success: function (data) {
          // thông báo toast
          if (data == 1) {
            toast({
              title: "Thành công",
              msg: "Đăng ký thành công!",
              type: "success",
              duration: 5000,
              link: "login.php",
            });
            setTimeout(function () {
              window.location.href = "login.php";
            }, 1300);
          } else {
            toast({
              title: "Thất bại",
              msg: "Đăng ký thất bại!",
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
        msg: "Đăng ký thất bại!",
        type: "error",
        duration: 5000,
        link: "#",
      });
    }
  });

  //Đăng nhập

  //Khi focus vào input bỏ lỗi

  $('[name*="username-login"]').focus(function () {
    $("#error-username-login").text("");
  });
  $('[name*="password-login"]').focus(function () {
    $("#error-password-login").text("");
  });

  //   submit
  $("#login").submit(function (e) {
    e.preventDefault();
    var check_login = true;
    if ($('[name*="username-login"]').val() == "") {
      check_login = false;
      $("#error-username-login").text("Tên đăng nhập không được bỏ trống");
    } else {
      $("#error-username-login").text("");
    }
    if ($('[name*="password-login"]').val() == "") {
      check_login = false;
      $("#error-password-login").text("Tên đăng nhập không được bỏ trống");
    } else {
      $("#error-password-login").text("");
    }

    if (check_login == true) {
      //   console.log("ok");
      $.ajax({
        type: "POST",
        url: "../../../client/xu-ly/tai-khoan/login.php",
        data: $(this).serializeArray(),
        success: function (data) {
          if (data == 0) {
            toast({
              title: "Thất bại",
              msg: "Đăng  nhập thất bại!",
              type: "error",
              duration: 5000,
              link: "#",
            });
            $("#error-password-login").text(
              "Tên đăng nhập hoặc mật khẩu không hợp lệ"
            );
          } else if (data == 1) {
            toast({
              title: "Thành công",
              msg: "Đăng nhập thành công!",
              type: "success",
              duration: 5000,
              link: "../../",
            });
            setTimeout(function () {
              //  data được gửi về là biến session chưa url
              window.location.href = '';
            }, 1200);

          } else {
            toast({
              title: "Thành công",
              msg: "Đăng nhập thành công!",
              type: "success",
              duration: 5000,
              link: "../../",
            });
            setTimeout(function () {
              //  data được gửi về là biến session chưa url
              window.location.href = data;
            }, 1200);
          }
        },
      });
    } else {
      //   console.log("chưa");
    }
  });
});
