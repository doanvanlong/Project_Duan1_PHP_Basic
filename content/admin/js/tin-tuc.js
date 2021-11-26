//Loại bỏ lỗi
$('[name*="danh-muc-tin-tuc"]').focus(function() {
    $(this).css("border", "0");
    $("#error-danh-muc-tin-tuc").text("");
});

//VALIDATE FORM NHẬP DANH MỤC TIN TỨC
//Check tên danh mục tin tức đã tồn tại chưa
var check = false;
$('[name*="update-news-category"]').keyup(function() {
    if ($(this).val() == "") {
        $(this).css("border", "0");
        $("#error-news-category").text("");
    } else {
        //Xoá border red input khi khác rỗng
        $(this).css("border", "0");
        //Form có data, gửi ajax qua file php
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/tin-tuc/update-news-category.php",
            data: { keyup_update_news_category: $(this).val() },
            dataType: "text",
            success: function(data) {
                // Lấy data trả về từ file php và ktra keyup DB
                if (data != 0) {
                    //có dữ liệu
                    $("#error-news-category").text(
                        "Tên danh mục này đã tồn tại, vui lòng nhập tên khác!"
                    );
                    //Sản phẩm đã tồn tại sẽ có border red input
                    $('[name*="update-news-category"]').css(
                        "border",
                        "1px solid #f38291"
                    );
                    check = false;
                } else {
                    //Không có data trả về
                    $("#error-news-category").text("");
                    // Nếu không trùng sản phẩm thì xoá border lỗi red input
                    $(this).css("border", "0");
                    check = true;
                }
            },
        });
    }
});



//SUBMIT FORM THÊM DANH MỤC TIN TỨC
$("#add-dm-tin-tuc").submit(function(e) {
    e.preventDefault();

    //validate form
    var checkForm = $('[name*="danh-muc-tin-tuc"]').val() == "";
    if (checkForm == true) {
        $('[name*="danh-muc-tin-tuc"]').css("border", "1px solid #f38291");
        $("#error-danh-muc-tin-tuc").text(
            "Tên danh mục tin tức không được để trống!"
        );
        toast({
            title: "Thất bại",
            msg: "Thêm danh mục tin tức mới thất bại !",
            type: "error",
            duration: 5000,
            link: "#",
        });
    } else {
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/tin-tuc/insert-tin-tuc.php",
            data: new FormData(this), //send all data theo id name
            contentType: false,
            processData: false,
            success: function(data) {
                if (data == 1) {
                    toast({
                        title: "Thành công",
                        msg: "Thêm danh mục tin tức thành công !",
                        type: "success",
                        duration: 5000,
                        link: "news-category",
                    });
                    // reload lại trang sau khi thêm thành công
                    setTimeout(location.reload.bind(location), 1000);
                } else {
                    toast({
                        title: "Thất bại",
                        msg: "Thêm danh mục tin tức thất bại !",
                        type: "error",
                        duration: 5000,
                        link: "#",
                    });
                }
            },
        });
    }
});

//KEYUP UPDATE DANH MỤC TIN TỨC
var check = false;
$('[name*="danh-muc-tin-tuc"]').keyup(function() {
    if ($(this).val() == "") {
        $(this).css("border", "0");
        $("#error-danh-muc-tin-tuc").text("");
    } else {
        //Xoá border red input khi khác rỗng
        $(this).css("border", "0");
        //Form có data, gửi ajax qua file php
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/tin-tuc/insert-tin-tuc.php",
            data: { keyup_ten_dm_tin_tuc: $(this).val() },
            dataType: "text",
            success: function(data) {
                // Lấy data trả về từ file php và ktra keyup DB
                if (data != 0) {
                    //có dữ liệu
                    $("#error-danh-muc-tin-tuc").text(
                        "Tên danh mục này đã tồn tại, vui lòng nhập tên khác!"
                    );
                    //Sản phẩm đã tồn tại sẽ có border red input
                    $('[name*="danh-muc-tin-tuc"]').css("border", "1px solid #f38291");
                    check = false;
                } else {
                    //Không có data trả về
                    $("#error-danh-muc-tin-tuc").text("");
                    // Nếu không trùng sản phẩm thì xoá border lỗi red input
                    $(this).css("border", "0");
                    check = true;
                }
            },
        });
    }
});
//SUBMIT UPDATE DANH MỤC TIN TỨC
$("#update-news-category").submit(function(e) {
    e.preventDefault();
    //validate form
    var checkForm = $('[name*="update-news-category"]').val() == "";
    if (checkForm == true) {
        $('[name*="update-news-category"]').css("border", "1px solid #f38291");
        $("#error-news-category").text("Tên danh mục tin tức không được để trống!");
        toast({
            title: "Thất bại",
            msg: "Cập nhật danh mục tin tức thất bại !",
            type: "error",
            duration: 5000,
            link: "#",
        });
    } else if (check == true) {
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/tin-tuc/update-news-category.php",
            data: new FormData(this), //send all data theo id name
            contentType: false,
            processData: false,
            success: function(data) {
                if (data == 1) {
                    toast({
                        title: "Thành công",
                        msg: "Cập nhật danh mục tin tức thành công !",
                        type: "success",
                        duration: 5000,
                        link: "news-category",
                    });
                    // reload lại trang sau khi thêm thành công
                    setTimeout(location.reload.bind(location), 1000);
                } else {
                    toast({
                        title: "Thất bại",
                        msg: "Cập nhật danh mục tin tức thất bại !",
                        type: "error",
                        duration: 5000,
                        link: "#",
                    });
                }
            },
        });
    }
});

//DELETE MỘT DANH MỤC TIN TỨC
$(".delete-news-category").click(function() {
    var isDeleteComfirm = confirm("Bạn có muốn xoá sản phẩm này không?");
    if (isDeleteComfirm) {
        let id = $(this).data("delete_news_category");
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/tin-tuc/delete-news-category.php",
            data: { delete_news_category: id },
            success: function(data) {
                console.log(data);
                if (data == 1) {
                    toast({
                        title: "Thành công",
                        msg: "Xoá danh mục tin tức thành công!",
                        type: "success",
                        duration: 5000,
                        link: "danh-muc-tin-tuc",
                    });
                    // reload lại trang sau khi xoá xong
                    setTimeout(location.reload.bind(location), 1000);
                } else {
                    toast({
                        title: "Thất bại",
                        msg: "Xoá danh mục tin tức thất bại !",
                        type: "error",
                        duration: 5000,
                        link: "#",
                    });
                }
            },
        });
    } else {}
});
//DELETE NHIỀU DANH MỤC TIN TỨC
//Ẩn nút bỏ chọn khi chưa chọn tất cả
$("#uncheck-news-category").css("display", "none");
//Check all sản phẩm
$("#checkall-news-category").click(function(isChecked) {
    if (isChecked) {
        $(".check-news-category").each(function() {
            this.checked = true;
            //Hiển thị nút bỏ chọn sau khi đã check all sản phẩm
            $("#uncheck-news-category").css("display", "inline-block");
            //Ẩn nút chọn tất cả
            $("#checkall-news-category").css("display", "none");
        });
    }
});

//Bỏ các mục đã check
$("#uncheck-news-category").click(function(notChecked) {
    if (notChecked) {
        $(".check-news-category").each(function() {
            this.checked = false;
            //Ẩn nút bỏ chọn sau khi click
            $("#uncheck-news-category").css("display", "none");
            //Hiển thị lại nút chọn tất cả
            $("#checkall-news-category").css("display", "inline-block");
        });
    }
});

//GửI ajax xoá nhiều sản phẩm
$("#dm-tin-tuc").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../admin/xu-ly/tin-tuc/delete-news-category.php",
        data: $("#dm-tin-tuc").serializeArray(),
        success: function(data) {
            if (data == 1) {
                toast({
                    title: "Thành công",
                    msg: "Xoá danh mục thành công !",
                    type: "success",
                    duration: 5000,
                    link: "danh-muc-tin-tuc",
                });
                // reload lại trang sau khi xoá xong
                setTimeout(location.reload.bind(location), 1000);
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
});
//Loại bỏ lỗi khỏi form
$('[name*="content-news"]').focus(function() {
    $(this).css("border", "0");
    $("#error-content-news").text("");
});

$('[name*="news-category"]').focus(function() {
    $(this).css("border", "0");
    $("#error-news-category").text("");
});

$('[name*="avt-news"]').focus(function() {
    $(this).css("border", "0");
    $("#error-avt-news").text("");
});

$('[name*="editor1"]').focus(function() {
    $(this).css("border", "0");
    $("#error-editor1").text("");
});
//END loại bỏ lỗi

$('.show-danh-gia-trai-nghiem').hide();
//SELECT TAG sản phẩm vào bài viết 
$('[name*="news-category"]').change(function() {
    if($(this).val()==9){
        $('.show-danh-gia-trai-nghiem').show();
    }else{
        $('.show-danh-gia-trai-nghiem').hide();

    }
})

//THÊM TIN TỨC MỚI
$("#send").click(function() {
    $("#add-news").submit(function(e) {
        e.preventDefault();
        if (
            $('[name*="content-news"]') &&
            $('[name*="news-category"]') &&
            $('[name*="avt-news"]') &&
            $('[name*="editor1"]').val() == ""
        ) {
            if ($('[name*="content-news"]').val() == "") {
                // border input và hiển thị lỗi
                $('[name*="content-news"]').css("border", "1px solid #f38291");
                $("#error-content-news").text("Tiêu đề không được để trống!");
            }
            if ($('[name*="news-category"]').val() == "") {
                // border input và hiển thị lỗi
                $('[name*="news-category"]').css("border", "1px solid #f38291");
                $("#error-news-category").text("Vui lòng chọn danh mục tin tức!");
            }
            if ($('[name*="avt-news"]').val() == "") {
                // border input và hiển thị lỗi
                $('[name*="avt-news"]').css("border", "1px solid #f38291");
                $("#error-avt-news").text("Vui lòng tải lên ảnh đại diện bài viết!");
            }
            if ($('[name*="editor1"]').val() == "") {
                // border input và hiển thị lỗi
                $('[name*="editor1"]').css("border", "1px solid #f38291");
                $("#error-editor1").text("Vui lòng nhập mô tả bài viết!");
            }
        } else {
            //GửI dữ liệu đến form xử lí
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/tin-tuc/insert-tin-tuc.php",
                data: new FormData(this), //send all data theo id name
                contentType: false,
                processData: false,
                success: function(data) {
                    // Xử lí data trả về
                    if (data == 1) {
                        toast({
                            title: "Thành công",
                            msg: "Thêm bài viết mới thành công !",
                            type: "success",
                            duration: 5000,
                            link: "list-news",
                        });
                        // reload lại trang sau khi xoá xong
                        setTimeout(location.reload.bind(location), 1000);
                    } else {
                        toast({
                            title: "Thất bại",
                            msg: "Thêm bài viết mới thất bại !",
                            type: "error",
                            duration: 5000,
                            link: "#",
                        });
                    }
                },
            });
            //Tạo biến data lưu mô tả, send 1 ajax khác đến form xử lí
            var data = CKEDITOR.instances.editor1.getData();
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/tin-tuc/insert-tin-tuc.php",
                data: { editor1: data }, //send all data theo id name
                success: function(data) {
                    //đẩy data mô tả bài viết thành công
                },
            });
        }
    });
});
//Loại bỏ lỗi form cập Nhật
$('[name*="update-name-news"]').focus(function() {
    $(this).css("border", "0");
    $("#error-update-name-news").text("");
});
//SUBMIT FORM CẬP NHẬT BÀI VIẾT
$("#update-news").submit(function(e) {
    e.preventDefault();
    if ($('[name*="update-name-news"]').val() == "") {
        $('[name*="update-name-news"]').css("border", "1px solid #f38291");
        $("#error-update-name-news").text("Tên bài viết không được để trống!");
    } else {
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/tin-tuc/update-news.php",
            data: new FormData(this), //send all data theo id name
            contentType: false,
            processData: false,
            success: function(data) {
                // Xử lí data trả về
                if (data == 1) {
                    toast({
                        title: "Thành công",
                        msg: "Cập nhật bài viết thành công !",
                        type: "success",
                        duration: 5000,
                        link: "list-news",
                    });
                    // reload lại trang sau khi xoá xong
                    setTimeout(location.reload.bind(location), 1000);
                } else {
                    toast({
                        title: "Thất bại",
                        msg: "Cập nhật bài viết thất bại !",
                        type: "error",
                        duration: 5000,
                        link: "#",
                    });
                }
            },
        });
    }
});
//CHECK ALL BÀI VIẾT
//Ẩn nút bỏ chọn khi chưa chọn tất cả
$("#uncheck-news").css("display", "none");
//Check all sản phẩm
$("#checkall-news").click(function(isChecked) {
    if (isChecked) {
        $(".check-news").each(function() {
            this.checked = true;
            //Hiển thị nút bỏ chọn sau khi đã check all sản phẩm
            $("#uncheck-news").css("display", "inline-block");
            //Ẩn nút chọn tất cả
            $("#checkall-news").css("display", "none");
        });
    }
});

//Bỏ các mục đã check
$("#uncheck-news").click(function(notChecked) {
    if (notChecked) {
        $(".check-news").each(function() {
            this.checked = false;
            //Ẩn nút bỏ chọn sau khi click
            $("#uncheck-news").css("display", "none");
            //Hiển thị lại nút chọn tất cả
            $("#checkall-news").css("display", "inline-block");
        });
    }
});

//DELETE MỘT BÀI VIẾT
$(".delete-news").click(function() {
    var isDeleteComfirm = confirm("Bạn có muốn xoá bài viết này không?");
    if (isDeleteComfirm) {
        let id_news = $(this).data("delete_news");
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/tin-tuc/delete-news-category.php",
            data: { delete_news: id_news },
            success: function(data) {
                if (data == 1) {
                    toast({
                        title: "Thành công",
                        msg: "Xoá bài viết thành công!",
                        type: "success",
                        duration: 5000,
                        link: "list-news",
                    });
                    // reload lại trang sau khi xoá xong
                    setTimeout(location.reload.bind(location), 1000);
                } else {
                    toast({
                        title: "Thất bại",
                        msg: "Xoá bài viết thất bại !",
                        type: "error",
                        duration: 5000,
                        link: "#",
                    });
                }
            },
        });
    } else {}
});
//Delete nhiều bài viết
$("#list-news").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../admin/xu-ly/tin-tuc/delete-news-category.php",
        data: $("#list-news").serializeArray(),
        success: function(data) {
            if (data == 1) {
                toast({
                    title: "Thành công",
                    msg: "Xoá bài viết thành công !",
                    type: "success",
                    duration: 5000,
                    link: "list-news",
                });
                // reload lại trang sau khi xoá xong
                setTimeout(location.reload.bind(location), 1000);
            } else {
                toast({
                    title: "Thất bại",
                    msg: "Xoá bài viết thất bại !",
                    type: "error",
                    duration: 5000,
                    link: "#",
                });
            }
        },
    });
});