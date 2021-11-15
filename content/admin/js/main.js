$(document).ready(function () {
  //toglle class thanh nav
  $(".toggle").click(function () {
    $(".toggle").toggleClass("active");
    $(".navigation").toggleClass("active");
    $(".main").toggleClass("active");
  });
  //thay đổi icon toggle
  $(".toggle").click(function () {
    if ($(".toggle").hasClass("active")) {
      $(".toggle").html('<i class="fas fa-angle-double-right"></i>');
    } else {
      $(".toggle").html('<i class="fas fa-angle-double-left"></i>');
    }
  });
  //   sub menu dropdown navigation
  $(".navigation__link").click(function () {
    $(this).next(".sub-menu").slideToggle();
  });

  // //   class active thay đổi icon dropdown sub menu navigation
  //   $('.navigation__link').click(function(){
  //       $(this).toggleClass('active');
  //   })
  //   //thay đổi icon toggle sub menu navigation
  //   $('.navigation__link').click(function(){
  //       if($(this).hasClass('active')){
  //           $('.box__icon-dropdown').html('<i class="fas fa-chevron-up"></i>');
  //       }else{
  //         $('.box__icon-dropdown').html('<i class="fas fa-angle-down"></i>');
  //       }
  //   })
  // gg chart thống kê doanh thu tháng
  google.charts.load("current", { packages: ["bar"] });
  google.charts.setOnLoadCallback(drawStuff);
  // đếm ngày trong tháng
  function daysInMonth(month, year) {
    monthNum = new Date(Date.parse(month + " 1," + year)).getMonth() + 1;
    return new Date(year, monthNum, 0).getDate();
  }
  //tháng hiện tại
  var monthNow = new Date().getMonth() + 1;
  // năm hiện tại
  var yearNow = new Date().getFullYear();
  var daysInMonth = daysInMonth(monthNow, yearNow);
  function drawStuff() {
    var dataArray = [["Move", "Triệu"]];
    // dùng vòng j push j vào php
    var php = [
      3, 5, 16, 7, 23, 14, 13, 6, 7, 9, 14, 23, 18, 14, 23, 11, 22, 13, 5, 16,
      22, 17, 23, 21, 21, 24, 12,
    ];

    for (var i = 0; i < daysInMonth; i++) {
      dataArray.push([`${i + 1}`, php[i]]);
    }
    var data = new google.visualization.arrayToDataTable(dataArray);
    var width = 1055;
    var options = {
      width: width,
      height: 400,
      legend: { position: "none" },
      chart: {
        title: "Biểu đồ thống kê doanh thu  ",
        subtitle: `Tháng ${monthNow} Năm ${yearNow}`,
      },
      axes: {
        x: {
          0: { side: "top", label: "Ngày" }, // Top x-axis.
        },
      },
      bar: { groupWidth: "90%" },
    };

    var chart = new google.charts.Bar(document.getElementById("top_x_div"));
    // Convert the Classic options to Material options.
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
  //toast thông báo
  function toast({ title = "", msg = "", type = "success", duration = 3000 }) {
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
        <h4 class="toast__title">${title}</h4>
        <p class="toast__msg">${msg}</p>
    </div>
    <div class="toast__close">
        <i class="fas fa-times"></i>
    </div>
        `;

      main.appendChild(toast);
    }
  }

  $(".show").click(function () {
    if ($(this).text() == "show") {
      toast({
        title: "Thành công",
        msg: "Đăng nhập thành công !",
        type: "success",
        duration: 5000,
      });
    } else {
      toast({
        title: "Thất bại!",
        msg: "Đăng nhập thất bại !",
        type: "error",
        duration: 5000,
      });
    }
  });

  //thêm danh mục chính
  // Kiểm tra có tồn tại trong DB chưa
  var check = false;
  $('[name*="ten-danh-muc-chinh"]').keyup(function () {
    if ($(this).val() == "dienthoai") {
      $("#error-danh-muc-chinh").text("Tên danh mục đã tồn tại");
      check = false;
    } else {
      $("#error-danh-muc-chinh").text("");
      check = true;
    }
  });

  // click submit thêm mới  => kiểm lỗi,Gửi dữ liệu đi
  $("#add-danh-muc-chinh").submit(function (e) {
    e.preventDefault();
    // nếu tên danh mục trống
    if ($('[name*="ten-danh-muc-chinh"]').val() == "") {
      $("#error-danh-muc-chinh").text("Tên danh mục không được trống");
      // thông báo toast thất bại
      toast({
        title: "Thất bại",
        msg: "Thêm danh mục thất bại!",
        type: "error",
        duration: 5000,
      });
    } else {
      // nếu tên danh mục đã tồn tại
      if (check == false) {
      } else {
        // danh mục chưa có
        $.ajax({
          type: "POST",
          url: "../admin/xu-ly/danh-muc/insert-danh-muc.php", //gửi đến thư mục xữ lý
          data: $("#add-danh-muc-chinh").serializeArray(), //gửi hết dữ liệu trong form theo name
          success: function (data) {
            // data được gửi về từ file php
            if (data == 1) {
              //thông báo thêm thành công
              toast({
                title: "Thành công",
                msg: "Thêm danh mục thành công !",
                type: "success",
                duration: 5000,
              });
            } else {
              // thông báo toast thất bại
              toast({
                title: "Thất bại",
                msg: "Thêm danh mục thất bại!",
                type: "error",
                duration: 5000,
              });
            }
          },
        });
      }
    }
  });

  //thêm danh mục conn

  // Kiểm tra có tồn tại trong DB chưa
  var check = false;
  $('[name*="ten-danh-muc-con"]').keyup(function () {
    if ($(this).val() == "oppo") {
      $("#error-danh-muc-con").text("Tên danh mục đã tồn tại");
      check = false;
    } else {
      $("#error-danh-muc-con").text("");
      check = true;
    }
  });

  // click submit thêm mới  => kiểm lỗi,Gửi dữ liệu đi
  $("#add-danh-muc-con").submit(function (e) {
    e.preventDefault();
    // nếu tên danh mục trống
    if ($('[name*="ten-danh-muc-con"]').val() == "") {
      $("#error-danh-muc-con").text("Tên danh mục không được trống");
      // thông báo toast thất bại
      toast({
        title: "Thất bại",
        msg: "Thêm danh mục thất bại!",
        type: "error",
        duration: 5000,
      });
    } else {
      // nếu tên danh mục đã tồn tại
      if (check == false) {
      } else {
        // danh mục chưa có
        $.ajax({
          type: "POST",
          url: "../admin/xu-ly/danh-muc/insert-danh-muc.php", //gửi đến thư mục xữ lý
          data: $("#add-danh-muc-con").serializeArray(), //gửi hết dữ liệu trong form theo name
          success: function (data) {
            // data được gửi về từ file php
            if (data == 1) {
              //thông báo thêm thành công
              toast({
                title: "Thành công",
                msg: "Thêm danh mục thành công !",
                type: "success",
                duration: 5000,
              });
            } else {
              // thông báo toast thất bại
              toast({
                title: "Thất bại",
                msg: "Thêm danh mục thất bại!",
                type: "error",
                duration: 5000,
              });
            }
          },
        });
      }
    }
  });

  //check all  danh mục

  // check danh mục chính
  $("#checkall-dm-chinh").click(function (isChecked) {
    if (isChecked) {
      $(".check-dm-chinh").each(function () {
        this.checked = true;
      });
    }
  });
  // bỏ mục đã check
  $("#uncheck-dm-chinh").click(function (notChecked) {
    if (notChecked) {
      $(".check-dm-chinh").each(function () {
        this.checked = false;
      });
    }
  });
  // check danh mục con
  $("#checkall-dm-con").click(function (isChecked) {
    if (isChecked) {
      $(".check-dm-con").each(function () {
        this.checked = true;
      });
    }
  });
  // bỏ mục đã check
  $("#uncheck-dm-con").click(function (notChecked) {
    if (notChecked) {
      $(".check-dm-con").each(function () {
        this.checked = false;
      });
    }
  });

  //delete checked danh mục chính
  // php nhận value là id để xoá dm
  $("#delete-danh-muc-chinh").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "../admin/xu-ly/danh-muc/delete-danh-muc.php", //gửi đến thư mục xữ lý
      data: $("#delete-danh-muc-chinh").serializeArray(), //gửi hết dữ liệu trong form theo name
      success: function (data) {
        console.log(data);
      },
    });
  });
  //delete checked danh mục con
  // php nhận value là id để xoá dm
  $("#delete-danh-muc-con").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "../admin/xu-ly/danh-muc/delete-danh-muc.php", //gửi đến thư mục xữ lý
      data: $("#delete-danh-muc-con").serializeArray(), //gửi hết dữ liệu trong form theo name
      success: function (data) {
        console.log(data);
      },
    });
  });

  // delete danh mục chính theo id  ,dùng thuộc tính data- của html
  $(".delete-dm-chinh").click(function () {
    alert($(this).data("id_dm_chinh"));
  });
  // delete danh mục con theo id  ,dùng thuộc tính data- của html
  $(".delete-dm-con").click(function () {
    alert($(this).data("id_dm_con"));
  });
});
