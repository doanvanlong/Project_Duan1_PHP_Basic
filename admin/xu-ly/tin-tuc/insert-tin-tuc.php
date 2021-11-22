<?php
    require_once '../../../model/tin-tuc.php';

    if (isset($_POST['keyup_ten_dm_tin_tuc'])) {
        $keyup_ten_dm_tin_tuc = $_POST['keyup_ten_dm_tin_tuc'];
        echo (check_category_news($keyup_ten_dm_tin_tuc));
        // echo 0 là ko trùng dữ liệu
        // echo số khác 0 là trùng dữ liệu
        // vì hàm trả về số record
    }

    if (isset($_POST['danh-muc-tin-tuc'])) {
       $name_dm_tin_tuc = $_POST['danh-muc-tin-tuc'];
       try {
           insert_news_category($name_dm_tin_tuc);
           echo 1;
       } catch (Exception $e) {
           echo 0;
       }
       
    }

//Xử lý ckeditor 
//upload.php
// Xử lý tải lên máy chủ ,và move vào thư mục UPLOAD qua lấy từ $ FILES
if (isset($_FILES['upload']['name'])) {
    $file = $_FILES['upload']['tmp_name']; //đường dẫn tạm hình ảnh
    $file_name = $_FILES['upload']['name']; //tên của hình ảnh ban đầu
    $file_name_array = explode(".", $file_name); //cắt  tên ảnh ban đầu theo dấu . 
    // =>thành mảng gồm tên và đuôi file
    $extension = end($file_name_array); //lấy đuôi file  ảnh 
    $new_image_name = rand() . '.' . $extension; //random số gắn nối với dấu . 
    // gắn vào đuôi file ảnh
    chmod('uploads', 0777); //cho phép đọc và ghi vào thư mục upload
    $allowed_extension = array("jpg", "gif", "png"); //tạo mảng cho phép nhận định dạng file ảnh
    if (in_array($extension, $allowed_extension)) { //kiểm tra đuôi file ảnh có tồn tại theo định dạng ko
        move_uploaded_file($file, 'uploads/' . $new_image_name); //di chuyển vào thư mục upload
        $function_number = $_GET['CKEditorFuncNum'];
        // url này tính từ Domain vô upload
        $url = 'xu-ly/tin-tuc/uploads/' . $new_image_name; //url : nhận url hình ảnh , trả trở lại 
        $message = '';
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
    }
}

if (isset($_POST['editor1'])) {
    //Xử lí avt tin tức
    if (isset($_FILES['avt-news']['name'])) {
        $extension = explode('.', $_FILES['avt-news']['name']); //cắt thành mảng cách nhau bởi dấu .
        $file_extension = end($extension); //lấy đuôi file
        $allowed_type = array('jpg', 'jpeg', 'png', 'gif'); //cho phép tải file ảnh
        if (in_array($file_extension, $allowed_type)) {
            // nếu đuôi file nằm trong mảng cho chép định dạng thì ok
            $new_name = rand() . "." . $file_extension; //random số + với đuôi file 
            $path = "../../../content/uploads/" . $new_name; //đường dẫn hình ảnh đưa vào
            if (move_uploaded_file($_FILES["avt-news"]['tmp_name'], $path)) {
                //    upload hình từ đường dẫn tmp name vào đường dẫn đã khai báo path
                var_dump($path);
            }
        }
    }
    var_dump($_POST['editor1']);
}

