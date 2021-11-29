<?php

require_once '../../../model/tai-khoan.php';
//keyup username
if (isset($_POST['keyup_usename'])) {
    $name_username = $_POST['keyup_usename'];
    echo (check_username($name_username));
}
if (isset($_POST['username']) && $_POST['username'] != "") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    //Xử lí ảnh đại diện khách hàng
    if (isset($_FILES['avt']['name']) && $_FILES['avt']['name'] != "") {
        $extension = explode('.', $_FILES['avt']['name']); //cắt thành mảng cách nhau bởi dấu .
        $file_extension = end($extension); //lấy đuôi file
        $allowed_type = array('jpg', 'jpeg', 'png', 'gif'); //cho phép tải file ảnh
        if (in_array($file_extension, $allowed_type)) {
            // nếu đuôi file nằm trong mảng cho chép định dạng thì ok
            $new_name = rand() . "." . $file_extension; //random số + với đuôi file 
            $path = "./uploads/" . $new_name; //đường dẫn hình ảnh đưa vào
            if (move_uploaded_file($_FILES['avt']['tmp_name'], $path)) {
                //    upload hình từ đường dẫn tmp name vào đường dẫn đã khai báo path
            }
        }
        $avt_user = $new_name;
    } else {
        $avt_user = "";
    }
    try {
        add_user($username, $password, $name, $phone, $email, $address, $avt_user);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
