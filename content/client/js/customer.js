//Thay đổi mật khẩu
$(document).ready(function () {
  $(".js-accountNav-items").click(function () {
    if (!$(this).hasClass("active")) {
      $(".js-accountNav-items").removeClass("active");
      $(this).addClass("active");
    }
  });

  var hidden_changePassword = document.querySelector(
    ".js-hidden_changePassword"
  );
  var check_hidden_changePassword = document.querySelector(
    ".js-check-hidden_changePassword"
  );
  check_hidden_changePassword.addEventListener("click", function () {
    if (check_hidden_changePassword.checked === true) {
      hidden_changePassword.classList.add("open");
    } else {
      hidden_changePassword.classList.remove("open");
    }
  });
  // ẩn hiện pass
  $(".hide_pass").hide();
  $(".show_pass").hide();
  $('[name*="mat_khau_moi"]').keyup(function (e) {
    $(".show_pass").show();
  });
  $(".show_pass").click(function () {
    var input = $(this).next().next('input[name*="mat_khau_moi"]');
    input.attr("type", "text");
    $(".hide_pass").show();
    $(".show_pass").hide();
  });
  $(".hide_pass").click(function () {
    var input = $(this).next('input[name*="mat_khau_moi"]');
    input.attr("type", "password");
    $(".hide_pass").hide();
    $(".show_pass").show();
  });

  $(".hide_pass1").hide();
  $(".show_pass1").hide();
  $('[name*="re_mat_khau_moi"]').keyup(function (e) {
    $(".show_pass1").show();
  });
  $(".show_pass1").click(function () {
    var input = $(this).next().next('input[name*="re_mat_khau_moi"]');
    input.attr("type", "text");
    $(".hide_pass1").show();
    $(".show_pass1").hide();
  });
  $(".hide_pass1").click(function () {
    var input = $(this).next('input[name*="re_mat_khau_moi"]');
    input.attr("type", "password");
    $(".hide_pass1").hide();
    $(".show_pass1").show();
  });
  //check reg so_dien_thoai
  $(".error-sdt").focus(function () {
    $(".error-sdt").text("");
  });
 
  $('[name*="so_dien_thoai"]').keyup(function (e) {
    var phone_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    var phone = $('[name*="so_dien_thoai"]').val();
    if (phone_regex.test(phone)) {
      $(".error-sdt").text("");
    } else {
      $(".error-sdt").text("Vui lòng nhập đúng định dạng số điện thoại");
    }
  });
  //check reg so_dien_thoai
  $(".error-email").focus(function () {
    $(".error-email").text("");
  });
  $('[name*="email"]').keyup(function (e) {
    var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var email = $('[name*="email"]').val();
    if (email_regex.test(email)) {
      $(".error-email").text("");
    } else {
      $(".error-email").text("Vui lòng nhập đúng định dạng email");
    }
  });
  // Update tài khoản ,thay đổi tên ,mật khẩu
  
  $("#form_update_profile").submit(function (e) {
    e.preventDefault();
    
    $.ajax({
      url: "../client/xu-ly/tai-khoan/update-profile.php",
      type: "POST",
      contentType: false,
      processData: false,
      data: new FormData(this),
      success: function (data) {
        if (data == 1) {
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
          toast({
            title: "Thành công",
            msg: "Cập nhật thành công!",
            type: "success",
            duration: 5000,
            link: "#",
          });
          setTimeout(function () {
            location.reload();
          }, 1300);
        } else if (data == "Vui lòng nhập đúng mật khẩu cũ của bạn") {
          $(".error-mat_khau_cu").text(
            "Vui lòng nhập đúng mật khẩu cũ của bạn"
          );
        } else if (data == "Mật khẩu  không được rỗng") {
          $(".error-mat_khau_moi").text("Mật khẩu  không được rỗng");
        } else if (data == "Mật khẩu ít nhất 8 ký tự") {
          $(".error-mat_khau_moi").text("Mật khẩu ít nhất 8 ký tự");
        } else if (data == "Vui lòng xác nhận đúng mật khẩu") {
          $(".error-mat_re_khau_moi").text("VVui lòng xác nhận đúng mật khẩu");
        }
      },
    });
  });

});
