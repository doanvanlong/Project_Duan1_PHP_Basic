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

  //thêm danh mục

  // Kiểm tra có tồn tại trong DB chưa
  $('[name*="ten-danh-muc"]').keyup(function () {
    if($(this).val() == "a") {
      $("#error-danh-muc").text("Tên danh mục đã tồn tại");
    }else{
      $("#error-danh-muc").text("");
    }
  });
  // kiểm lỗi,Gửi dữ liệu đi 
  $('#add-danh-muc').submit(function (e) {
    e.preventDefault();
    if ($('[name*="ten-danh-muc"]').val() == "") {
      $("#error-danh-muc").text("Tên danh mục không được trống");
    }else{
      $.ajax({
        type: "POST",
        url:'../admin/xu-ly/danh-muc/insert-danh-muc.php',//gửi đến thư mục xữ lý
        data:$('#add-danh-muc').serializeArray(),//gửi hết dữ liệu trong form theo name
        success: function(data){
          console.log(data);
        }
      })
    }
    
  });

  // thêm sản phẩm

});
