$(document).ready(function() {
    //toglle class thanh nav
    $(".toggle").click(function() {
        $(".toggle").toggleClass("active");
        $(".navigation").toggleClass("active");
        $(".main").toggleClass("active");
    });
    //thay đổi icon toggle
    $(".toggle").click(function() {
        if ($(".toggle").hasClass("active")) {
            $(".toggle").html('<i class="fas fa-angle-double-right"></i>');
        } else {
            $(".toggle").html('<i class="fas fa-angle-double-left"></i>');
        }
    });
    //   sub menu dropdown navigation
    $(".navigation__link").click(function() {
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
        var dataArray = [
            ["Move", "Triệu"]
        ];
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
            const autoRemoveId = setTimeout(function() {
                //trả lại id settimeout
                main.removeChild(toast);
            }, duration + 1000); //2 animation = 4s , settime khi end 1 animation thi clear
            //remove khi click
            toast.onclick = function(e) {
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

    $(".show").click(function() {
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

    // Trang thêm danh mục

    //thêm danh mục chính

    // Kiểm tra có tồn tại trong DB chưa
    var check = false;
    $('[name*="ten-danh-muc-chinh"]').keyup(function() {
        if ($(this).val() == "") {
            $("#error-danh-muc-chinh").text("");
            // Nếu value =  rỗng thì xoá border lỗi red input
            $(this).css("border", "0");
            check = true;
        } else {
            // Nếu khác rỗng thì xoá border lỗi red input
            $(this).css("border", "0");
            check = true;
            // nếu có dữ liệu khi nhập , thì gửi ajax qua file php với name là keyup
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/danh-muc/insert-danh-muc.php",
                data: { keyup_dm_chinh: $(this).val() },
                dataType: "text",
                success: function(data) {
                    // lấy dữ liệu trở về từ file php kiểm tra keyup DB
                    if (data != 0) {
                        // có record
                        $("#error-danh-muc-chinh").text("Tên danh mục đã tồn tại");
                        //Danh mục đã tồn tại sẻ có border red input
                        $('[name*="ten-danh-muc-chinh"]').css(
                            "border",
                            "1px solid #f38291"
                        );
                        check = false;
                    } else {
                        // ko có record
                        $("#error-danh-muc-chinh").text("");
                        // Nếu không trùng danh mục thì xoá border lỗi red input
                        $(this).css("border", "0");
                        check = true;
                    }
                },
            });
        }
    });
    // khi focus vào lại thì sẻ bỏ border red lỗi
    $('[name*="ten-danh-muc-chinh"]').focus(function() {
        $(this).css("border", "0");
        $("#error-danh-muc-chinh").text("");
    });

    // click submit thêm mới  => kiểm lỗi,Gửi dữ liệu đi
    $("#add-danh-muc-chinh").submit(function(e) {
        e.preventDefault();
        // nếu tên danh mục trống
        if ($('[name*="ten-danh-muc-chinh"]').val() == "") {
            //để Trống khi submit sẻ có border red input
            $('[name*="ten-danh-muc-chinh"]').css("border", "1px solid #f38291");
            $("#error-danh-muc-chinh").text("Tên danh mục không được trống");

            // thông báo toast thất bại
            toast({
                title: "Thất bại",
                msg: "Thêm danh mục thất bại!",
                type: "error",
                duration: 5000,
                link: "#",
            });
        } else {
            // nếu tên danh mục đã tồn tại
            if (check == false) {
                // nếu danh mục đã tồn tại
            } else {
                //check = true
                // danh mục chưa có
                $.ajax({
                    type: "POST",
                    url: "../admin/xu-ly/danh-muc/insert-danh-muc.php", //gửi đến thư mục xữ lý
                    data: $("#add-danh-muc-chinh").serializeArray(), //gửi hết dữ liệu trong form theo name
                    success: function(data) {
                        // data được gửi về từ file php
                        if (data == 1) {
                            //thông báo thêm thành công
                            toast({
                                title: "Thành công",
                                msg: "Thêm danh mục thành công !",
                                type: "success",
                                duration: 5000,
                                link: "list-danh-muc",
                            });
                            // thêm thành công thì reset form
                            $("#add-danh-muc-chinh")[0].reset();
                        } else {
                            // thông báo toast thất bại
                            toast({
                                title: "Thất bại",
                                msg: "Thêm danh mục thất bại!",
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

    //thêm danh mục con

    // Kiểm tra có tồn tại trong DB chưa
    var check = false;
    $('[name*="ten-danh-muc-con"]').keyup(function() {
        if ($(this).val() == "") {
            $("#error-danh-muc-con").text("");
            // Nếu value =  rỗng thì xoá border lỗi red input
            $(this).css("border", "0");
            check = true;
        } else {
            // Nếu khác rỗng thì xoá border lỗi red input
            $(this).css("border", "0");
            check = true;
            // nếu có dữ liệu khi nhập (keyup) , thì gửi ajax qua file php với name là keyup
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/danh-muc/insert-danh-muc.php",
                data: { keyup_dm_con: $(this).val() },
                dataType: "text",
                success: function(data) {
                    // lấy dữ liệu trở về từ file php kiểm tra keyup DB
                    if (data != 0) {
                        // có record
                        $("#error-danh-muc-con").text("Tên danh mục đã tồn tại");
                        //Danh mục đã tồn tại sẻ có border red input
                        $('[name*="ten-danh-muc-con"]').css("border", "1px solid #f38291");
                        check = false;
                    } else {
                        // ko có record
                        $("#error-danh-muc-con").text("");
                        // Nếu không trùng danh mục thì xoá border lỗi red input
                        $(this).css("border", "0");
                        check = true;
                    }
                },
            });
        }
    });
    // khi focus vào lại thì sẻ bỏ border red lỗi
    $('[name*="ten-danh-muc-con"]').focus(function() {
        $(this).css("border", "0");
        $("#error-danh-muc-con").text("");
    });
    // click submit thêm mới  => kiểm lỗi,Gửi dữ liệu đi
    $("#add-danh-muc-con").submit(function(e) {
        e.preventDefault();
        // nếu tên danh mục trống
        if ($('[name*="ten-danh-muc-con"]').val() == "") {
            //để Trống khi submit sẻ có border red input
            $('[name*="ten-danh-muc-con"]').css("border", "1px solid #f38291");
            $("#error-danh-muc-con").text("Tên danh mục không được trống");

            // thông báo toast thất bại
            toast({
                title: "Thất bại",
                msg: "Thêm danh mục thất bại!",
                type: "error",
                duration: 5000,
                link: "#",
            });
        } else {
            // nếu tên danh mục đã tồn tại
            if (check == false) {} else {
                // danh mục chưa có
                $.ajax({
                    type: "POST",
                    url: "../admin/xu-ly/danh-muc/insert-danh-muc.php", //gửi đến thư mục xữ lý
                    data: $("#add-danh-muc-con").serializeArray(), //gửi hết dữ liệu trong form theo name
                    success: function(data) {
                        // data được gửi về từ file php
                        if (data == 1) {
                            //thông báo thêm thành công
                            toast({
                                title: "Thành công",
                                msg: "Thêm danh mục thành công !",
                                type: "success",
                                duration: 5000,
                                link: "list-danh-muc",
                            });
                            // thêm thành công thì reset form
                            $("#add-danh-muc-con")[0].reset();
                        } else {
                            // thông báo toast thất bại
                            toast({
                                title: "Thất bại",
                                msg: "Thêm danh mục thất bại!",
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

    // Trang danh sách danh mục

    //check all  danh mục
    //danh mục chính
    $("#uncheck-dm-chinh").css("display", "none");
    // ban đầu thèn bỏ chọn dplay ẩn
    // check danh mục chính
    $("#checkall-dm-chinh").click(function(isChecked) {
        if (isChecked) {
            $(".check-dm-chinh").each(function() {
                this.checked = true;
            });
            $("#checkall-dm-chinh").css("display", "none");
            //dplay none btn chọn tất cả sau khi đã click vào btn chọn tất cả
            $("#uncheck-dm-chinh").css("display", "inline-block");
        }
    });
    // bỏ mục đã check
    $("#uncheck-dm-chinh").click(function(notChecked) {
        if (notChecked) {
            $(".check-dm-chinh").each(function() {
                this.checked = false;
            });
            $("#checkall-dm-chinh").css("display", "inline-block");
            //dplay block btn chọn tất cả sau khi đã click vào btn bỏ chọn
        }
    });

    $("#uncheck-dm-con").css("display", "none");
    // ban đầu thèn bỏ chọn dplay ẩn
    // check danh mục con
    $("#checkall-dm-con").click(function(isChecked) {
        if (isChecked) {
            $(".check-dm-con").each(function() {
                this.checked = true;
            });
            $("#checkall-dm-con").css("display", "none");
            //dplay none btn chọn tất cả sau khi đã click vào btn chọn tất cả
            $("#uncheck-dm-con").css("display", "inline-block");
        }
    });
    // bỏ mục đã check
    $("#uncheck-dm-con").click(function(notChecked) {
        if (notChecked) {
            $(".check-dm-con").each(function() {
                this.checked = false;
            });
            $("#checkall-dm-con").css("display", "inline-block");
            //dplay block btn chọn tất cả sau khi đã click vào btn bỏ chọn
        }
    });

    //delete checked danh mục chính
    // php nhận value là id để xoá dm
    $("#delete-danh-muc-chinh").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/danh-muc/delete-danh-muc.php", //gửi đến thư mục xữ lý
            data: $("#delete-danh-muc-chinh").serializeArray(), //gửi hết dữ liệu trong form theo name
            success: function(data) {
                //data gửi về từ file php
                if (data == 1) {
                    //thông báo xoá danh mục thành công
                    toast({
                        title: "Thành công",
                        msg: "Xoá danh mục thành công !",
                        type: "success",
                        duration: 5000,
                        link: "#",
                    });
                    // reload lại trang sau khi xoá xong
                    setTimeout(location.reload.bind(location), 300);
                } else {}
            },
        });
    });
    //delete checked danh mục con
    // php nhận value là id để xoá dm
    $("#delete-danh-muc-con").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/danh-muc/delete-danh-muc.php", //gửi đến thư mục xữ lý
            data: $("#delete-danh-muc-con").serializeArray(), //gửi hết dữ liệu trong form theo name
            success: function(data) {
                //thông báo xoá danh mục thành công
                toast({
                    title: "Thành công",
                    msg: "Xoá danh mục thành công !",
                    type: "success",
                    duration: 5000,
                    link: "#",
                });
                // reload lại trang sau khi xoá xong
                setTimeout(location.reload.bind(location), 300);
            },
        });
    });

    // delete danh mục chính theo id  ,dùng thuộc tính data- của html
    $(".delete-dm-chinh").click(function() {
        // ${(this).data("ten_dm_chinh")}
        var isDelete = confirm("Bạn có muốn xoá danh mục này không ?"); //hỏi có muốn xoá ko
        if (!isDelete) {
            // ko Ok là ko xoá
        } else {
            var id_dm_chinh = $(this).data("delete_id_dm_chinh");
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/danh-muc/delete-danh-muc.php",
                data: { delete_id_dm_chinh: id_dm_chinh },
                success: function(data) {
                    if (data == 1) {
                        toast({
                            title: "Thành công",
                            msg: "Xoá danh mục thành công !",
                            type: "success",
                            duration: 5000,
                            link: "#",
                        });
                        // reload lại trang sau khi xoá xong
                        setTimeout(location.reload.bind(location), 300);
                    } else {
                        toast({
                            title: "Thất bại",
                            msg: "Xoá danh mục thất bại !",
                            type: "error",
                            duration: 5000,
                            link: "#",
                        });
                    }
                },
            });
        }
    });
    // delete danh mục con theo id  ,dùng thuộc tính data- của html
    $(".delete-dm-con").click(function() {
        // ${(this).data("ten_dm_chinh")}
        var isDelete = confirm("Bạn có muốn xoá danh mục này không ?"); //hỏi có muốn xoá ko
        if (!isDelete) {
            // ko Ok là ko xoá
        } else {
            var id_dm_con = $(this).data("delete_id_dm_con");
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/danh-muc/delete-danh-muc.php",
                data: { delete_id_dm_con: id_dm_con },
                success: function(data) {
                    if (data == 1) {
                        toast({
                            title: "Thành công",
                            msg: "Xoá danh mục thành công !",
                            type: "success",
                            duration: 5000,
                            link: "#",
                        });
                        // reload lại trang sau khi xoá xong
                        setTimeout(location.reload.bind(location), 400);
                    } else {
                        toast({
                            title: "Thất bại",
                            msg: "Xoá danh mục thất bại !",
                            type: "error",
                            duration: 5000,
                            link: "#",
                        });
                    }
                },
            });
        }
    });

    //trang Update Edit danh mục Chính

    // Lấy từ value gán cho hằng số cố định
    // Dùng check =true flase hơi fail , hên có Unique DB
    var check = "false";
    const data_DB = $('[name*="ten-danh-muc-chinh-update"]').val();
    // new RegExp($(this).val(), "i").test(data_DB);//kiểu bool : kiểm tra chuổi này có tồn tại trong chuổi kia
    //khai báo hằng để value DB ko thay đổi
    // Nếu value từ DB mà = value keyup thì KO thông báo lỗi như lúc thêm danh mục
    $('[name*="ten-danh-muc-chinh-update"]').keyup(function() {
        if (
            new RegExp($(this).val(), "i").test(data_DB) &&
            $(this).val().length == data_DB.length
        ) {
            // nó search con chuỗi nằm trong chuỗi mẹ ko phân biệt hoa thường => Nên thêm dk độ dài có bằng nhau ko
            // Mà vẫn cho update bt
            $('[name*="ten-danh-muc-chinh-update"]').css("border", "0 !important");
            $("#error-danh-muc-chinh-update").text("");
            check = "true";
        } else {
            // Khác thì kiểm tra DB tiếp
            // nếu có dữ liệu khi nhập , thì gửi ajax qua file php với name là keyup
            $('[name*="ten-danh-muc-chinh-update"]').css("border", "0 !important");
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/danh-muc/update-danh-muc.php",
                data: { keyup_dm_chinh_update: $(this).val() },
                dataType: "text",
                success: function(data) {
                    // lấy dữ liệu trở về từ file php kiểm tra keyup DB
                    if (data != 0) {
                        // có record
                        $("#error-danh-muc-chinh-update").text("Tên danh mục đã tồn tại");
                        //Danh mục đã tồn tại sẻ có border red input
                        $('[name*="ten-danh-muc-chinh-update"]').css(
                            "border",
                            "1px solid #f38291"
                        );
                        check = "false";
                    } else {
                        // ko có record
                        $("#error-danh-muc-chinh-update").text("");
                        // Nếu không trùng danh mục thì xoá border lỗi red input
                        $('[name*="ten-danh-muc-chinh-update"]').css(
                            "border",
                            "0 !important"
                        );
                        check = "true";
                    }
                },
            });
        }
    });

    // khi focus vào lại thì sẻ bỏ border red lỗi
    $('[name*="ten-danh-muc-chinh-update"]').focus(function() {
        $(this).css("border", "0 !important");
        $("#error-danh-muc-chinh-update").text("");
    });

    // click submit cập nhật  => kiểm lỗi,Gửi dữ liệu đi
    $("#update-danh-muc-chinh").submit(function(e) {
        e.preventDefault();
        // nếu tên danh mục trống
        if ($('[name*="ten-danh-muc-chinh-update"]').val() == "") {
            //để Trống khi submit sẻ có border red input
            $('[name*="ten-danh-muc-chinh-update"]').css(
                "border",
                "1px solid #f38291"
            );
            $("#error-danh-muc-chinh-update").text("Tên danh mục không được trống");

            // thông báo toast thất bại
            toast({
                title: "Thất bại",
                msg: "Thêm danh mục thất bại!",
                type: "error",
                duration: 5000,
                link: "#",
            });
        } else {
            // nếu tên danh mục đã tồn tại
            if (check === "false") {
                // nếu danh mục đã tồn tại
            } else {
                //check = true
                // danh mục chưa có
                const id_dm_chinh_update = $(
                    '[name*="ten-danh-muc-chinh-update"]'
                ).data("id_dm_chinh_update");
                // id dm chính update
                $.ajax({
                    type: "POST",
                    url: "../admin/xu-ly/danh-muc/update-danh-muc.php", //gửi đến thư mục xữ lý
                    data: $("#update-danh-muc-chinh").serializeArray(), //gửi hết dữ liệu trong form theo name
                    success: function(data) {
                        // data được gửi về từ file php
                        if (data == 1) {
                            //thông báo thêm thành công
                            toast({
                                title: "Thành công",
                                msg: "Thêm danh mục thành công !",
                                type: "success",
                                duration: 5000,
                                link: "list-danh-muc",
                            });
                            // reload lại trang sau khi xoá xong
                            setTimeout(location.reload.bind(location), 500);
                        } else {
                            // thông báo toast thất bại
                            toast({
                                title: "Thất bại",
                                msg: "Thêm danh mục thất bại!",
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
    // Dùng check =true flase hơi fail , hên có Unique DB
    //trang Update Edit danh mục con

    // Lấy từ value gán cho hằng số cố định
    var check_dm_con = "flase";
    const data_dm_con_DB = $('[name*="ten-danh-muc-con-update"]').val();
    // new RegExp($(this).val(), "i").test(data_DB);//kiểu bool : kiểm tra chuổi này có tồn tại trong chuổi kia
    //khai báo hằng để value DB ko thay đổi
    // Nếu value từ DB mà = value keyup thì KO thông báo lỗi như lúc thêm danh mục
    $('[name*="danh-muc-con-update"]').change(function() {
        check_dm_con = "true";
    });
    $('[name*="ten-danh-muc-con-update"]').keyup(function() {
        if (
            new RegExp($(this).val(), "i").test(data_dm_con_DB) &&
            $(this).val().length == data_dm_con_DB.length
        ) {
            // nó search con chuỗi nằm trong chuỗi mẹ ko phân biệt hoa thường => Nên thêm dk độ dài có bằng nhau ko
            // Mà vẫn cho update bt
            $('[name*="ten-danh-muc-con-update"]').css("border", "0 !important");
            $("#error-danh-muc-con-update").text("");
            check_dm_con = "true";
        } else {
            // Khác thì kiểm tra DB tiếp
            // nếu có dữ liệu khi nhập , thì gửi ajax qua file php với name là keyup
            $('[name*="ten-danh-muc-con-update"]').css("border", "0 !important");
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/danh-muc/update-danh-muc.php",
                data: { keyup_dm_con_update: $(this).val() },
                dataType: "text",
                success: function(data) {
                    // lấy dữ liệu trở về từ file php kiểm tra keyup DB
                    if (data != 0) {
                        // có record
                        $("#error-danh-muc-con-update").text("Tên danh mục đã tồn tại");
                        //Danh mục đã tồn tại sẻ có border red input
                        $('[name*="ten-danh-muc-con-update"]').css(
                            "border",
                            "1px solid #f38291"
                        );
                        check_dm_con = "false";
                    } else {
                        // ko có record
                        $("#error-danh-muc-con-update").text("");
                        // Nếu không trùng danh mục thì xoá border lỗi red input
                        $('[name*="ten-danh-muc-con-update"]').css(
                            "border",
                            "0 !important"
                        );
                        check_dm_con = "true";
                    }
                },
            });
        }
    });

    // khi focus vào lại thì sẻ bỏ border red lỗi
    $('[name*="ten-danh-muc-con-update"]').focus(function() {
        $(this).css("border", "0 !important");
        $("#error-danh-muc-con-update").text("");
    });

    // check xem danh mục chính có thay đổi k

    // click submit cập nhật  => kiểm lỗi,Gửi dữ liệu đi
    $("#update-danh-muc-con").submit(function(e) {
        e.preventDefault();
        // nếu tên danh mục trống
        if ($('[name*="ten-danh-muc-con-update"]').val() == "") {
            //để Trống khi submit sẻ có border red input
            $('[name*="ten-danh-muc-con-update"]').css("border", "1px solid #f38291");
            $("#error-danh-muc-con-update").text("Tên danh mục không được trống");

            // thông báo toast thất bại
            toast({
                title: "Thất bại",
                msg: "Thêm danh mục thất bại!",
                type: "error",
                duration: 5000,
                link: "#",
            });
        } else {
            // nếu tên danh mục đã tồn tại
            if (check_dm_con === "false") {} else {
                //check = true
                // danh mục chưa có
                // id dm chính update
                $.ajax({
                    type: "POST",
                    url: "../admin/xu-ly/danh-muc/update-danh-muc.php", //gửi đến thư mục xữ lý
                    data: $("#update-danh-muc-con").serializeArray(), //gửi hết dữ liệu trong form theo name
                    success: function(data) {
                        // data được gửi về từ file php
                        if (data == 1) {
                            //thông báo thêm thành công
                            toast({
                                title: "Thành công",
                                msg: "Thêm danh mục thành công !",
                                type: "success",
                                duration: 5000,
                                link: "list-danh-muc",
                            });
                            // reload lại trang sau khi xoá xong
                            setTimeout(location.reload.bind(location), 500);
                        } else {
                            // thông báo toast thất bại
                            toast({
                                title: "Thất bại",
                                msg: "Thêm danh mục thất bại!",
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
});











//DELETE MỘT SẢN PHẨM

$(".delete-san-pham").click(function () {
  var isDelSanPham = confirm("Bạn có muốn xoá sản phẩm này không?");
  if (isDelSanPham) {
    let id_san_pham = $(this).data("delete_id_sp");
    $.ajax({
      type: "POST",
      url: "../admin/xu-ly/san-pham/delete-san-pham.php",
      data: { delete_id_sp: id_san_pham },
      success: function (data) {
        if (data == 1) {
          toast({
            title: "Thành công",
            msg: "Xoá sản phẩm thành công !",
            type: "success",
            duration: 5000,
            link: "#",
          });
          // reload lại trang sau khi xoá xong
          setTimeout(location.reload.bind(location), 1000);
        } else {
          toast({
            title: "Thất bại",
            msg: "Xoá sản phẩm thất bại !",
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

//DELETE NHIỀU SẢN PHẨM

//Ẩn nút bỏ chọn khi chưa chọn tất cả
$("#uncheck-san-pham").css("display", "none");
//Check all sản phẩm
$("#checkall-san-pham").click(function(isChecked) {
    if (isChecked) {
        $(".check-san-pham").each(function() {
            this.checked = true;
            //Hiển thị nút bỏ chọn sau khi đã check all sản phẩm
            $("#uncheck-san-pham").css("display", "inline-block");
            //Ẩn nút chọn tất cả
            $("#checkall-san-pham").css("display", "none");
        });
    }
});

//Bỏ các mục đã check
$("#uncheck-san-pham").click(function(notChecked) {
    console.log(notChecked);
    if (notChecked) {
        $(".check-san-pham").each(function() {
            this.checked = false;
            //Ẩn nút bỏ chọn sau khi click
            $("#uncheck-san-pham").css("display", "none");
            //Hiển thị lại nút chọn tất cả
            $("#checkall-san-pham").css("display", "inline-block");
        })
    }
})

//GửI ajax xoá nhiều sản phẩm
$("#delete-san-pham").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../admin/xu-ly/san-pham/delete-san-pham.php",
        data: $("#delete-san-pham").serializeArray(),
        success: function(data) {
            if (data == 1) {
                toast({
                    title: "Thành công",
                    msg: "Xoá sản phẩm thành công !",
                    type: "success",
                    duration: 5000,
                    link: "#",
                });
                // reload lại trang sau khi xoá xong
                setTimeout(location.reload.bind(location), 1000);
            } else {
                toast({
                    title: "Thất bại",
                    msg: "Xoá sản phẩm thất bại !",
                    type: "error",
                    duration: 5000,
                    link: "#",
                });
            }
        },
    });
});