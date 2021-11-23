<?php
require_once '../../../model/tin-tuc.php';
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
if (isset($_POST['update-news-category']) && $_POST['update-news-category'] != "") {
    //Xử lí điều kiện nếu update mà không upload ảnh
    if ($_FILES['update-avt-news']['name'] == null) {
        $img_news_update = null;
    } else {
        $extension = explode('.', $_FILES['update-avt-news']['name']); //cắt thành mảng cách nhau bởi dấu .
        $file_extension = end($extension); //lấy đuôi file
        $allowed_type = array('jpg', 'jpeg', 'png', 'gif'); //cho phép tải file ảnh
        if (in_array($file_extension, $allowed_type)) {
            // nếu đuôi file nằm trong mảng cho chép định dạng thì ok
            $new_name = rand() . "." . $file_extension; //random số + với đuôi file 
            $path = "../../../content/uploads/" . $new_name; //đường dẫn hình ảnh đưa vào
            if (move_uploaded_file($_FILES['update-avt-news']['tmp_name'], $path)) {
                //    upload hình từ đường dẫn tmp name vào đường dẫn đã khai báo path
            }
        }
        $img_news_update = $new_name;
    }
    //Xử lí data liên quan khác
    $name_news_update = $_POST['update-name-news'];
    $name_news_category_update = $_POST['update-news-category'];
    $mo_ta_news_update = $_POST['editor1'];
    $id_news = $_POST['id_news'];
    try {
        update_news($id_news, $name_news_category_update, $name_news_update, $img_news_update, $mo_ta_news_update);
        //Thành công hiển thị 1
        echo 1;
    } catch (exception $e) {
        //Thất bại hiển thị 0
        echo 0;
    }
}