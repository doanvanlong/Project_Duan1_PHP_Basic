<?php
    require_once '../../../model/tai-khoan.php';
    if (isset($_POST['id_user'])) {
        $id_user = $_POST['id_user'];
        $username = $_POST['update-username'];
        $password = $_POST['update-password'];
        $name = $_POST['update-name'];
        $phone = $_POST['update-phone'];
        $email = $_POST['update-email'];
        $address = $_POST['update-address'];
        //Xử lí ảnh đại diện khách hàng
        if (isset($_FILES['update-avt']['name']) && $_FILES['update-avt']['name'] != "") {
            $extension = explode('.', $_FILES['update-avt']['name']); //cắt thành mảng cách nhau bởi dấu .
            $file_extension = end($extension); //lấy đuôi file
            $allowed_type = array('jpg', 'jpeg', 'png', 'gif'); //cho phép tải file ảnh
            if (in_array($file_extension, $allowed_type)) {
                // nếu đuôi file nằm trong mảng cho chép định dạng thì ok
                $new_name = rand() . "." . $file_extension; //random số + với đuôi file 
                $path = "./uploads/" . $new_name; //đường dẫn hình ảnh đưa vào
                if (move_uploaded_file($_FILES['update-avt']['tmp_name'], $path)) {
                    //    upload hình từ đường dẫn tmp name vào đường dẫn đã khai báo path
                }
            }
            $avt_user = $new_name;
        } else {
            $avt_user = "";
        }
        try {
            update_user($id_user, $username, $password, $name, $phone, $email, $address, $avt_user);
            echo 1;
        } catch (Exception $e) {
            echo 0;
        }
    }
?>