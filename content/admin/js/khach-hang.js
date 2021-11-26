//Hiển thị mật khẩu
$("#eye").on('click', () => {
    var pwd = document.getElementById("password");
    var eye = $("#eye");
    eye.css("display", "none");
    $("#eye2").css("display", "block");
    (pwd.type == 'password') ? pwd.type = 'text': pwd.type = 'password';
});
$("#eye2").on('click', () => {
    var pwd = document.getElementById("password");
    var eye = $("#eye");
    eye.css("display", "block");
    $("#eye2").css("display", "none");
    (pwd.type == 'password') ? pwd.type = 'text': pwd.type = 'password';
});


//Loại bỏ error
$('[name*="username"]').focus(function() {
    $(this).css("border", "0");
    $("#error-username").text("");
});

$('[name*="password"]').focus(function() {
    $(this).css("border", "0");
    $("#error-password").text("");
});

$('[name*="name"]').focus(function() {
    $(this).css("border", "0");
    $("#error-name").text("");
});
$('[name*="email"]').focus(function() {
    $(this).css("border", "0");
    $("#error-email").text("");
});

//SUBMIT
$("#them-moi-khach-hang").click(function() {
    $("#add-user").submit(function(e) {
        e.preventDefault();
        if ($('[name*="username"]') &&
            $('[name*="password"]') &&
            $('[name*="name"]') &&
            $('[name*="email"]').val() == "") {
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
        } else {
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/khach-hang/insert-user.php",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                }
            });
        }
    })
});