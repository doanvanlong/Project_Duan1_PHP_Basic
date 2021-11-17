<?php
//gọi model xử lý data của sản phẩm
require_once '../../../model/san-pham.php';
if (isset($_POST['them-san-pham'])) {
    $dm_chinh = $_POST['danh-muc-chinh-san-pham'];
    $dm_chi_tiet = $_POST['danh-muc-chi-tiet-san-pham'];
    $ten_san_pham = $_POST['ten-san-pham'];
    $gia_san_pham = $_POST['gia-san-pham'];
    $mau_sac = $_POST['mau-sac'];
    $filename = $_FILES['anh-dai-dien']['name'];
    $targer_dir = "../../../content/uploads";
    $target_file = $target_dir . basename($_FILES["anh-dai-dien"]["name"]);
    if (move_uploaded_file($_FILES["anh-dai-dien"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
    } else {
        echo "Đã xảy ra lỗi khi tải tệp!";
    }
    //thiếu mô tả sản phẩm
    try {
        //thêm vào DB

        echo 1;
    } catch (PDOException $e) {
        echo 0;
    }
}

//Xử lý ckeditor 
//upload.php
// Xử lý tải lên máy chủ ,và move vào thư mục UPLOAD qua lấy từ $ FILES
if (isset($_FILES['upload']['name'])) {
    $file = $_FILES['upload']['tmp_name'];//đường dẫn tạm hình ảnh
    $file_name = $_FILES['upload']['name'];//tên của hình ảnh ban đầu
    $file_name_array = explode(".", $file_name);//cắt  tên ảnh ban đầu theo dấu . 
    // =>thành mảng gồm tên và đuôi file
   $extension = end($file_name_array);//lấy đuôi file  ảnh 
    $new_image_name = rand() . '.' . $extension;//random số gắn nối với dấu . 
    // gắn vào đuôi file ảnh
    chmod('upload', 0777);//cho phép đọc và ghi vào thư mục upload
    $allowed_extension = array("jpg", "gif", "png");//tạo mảng cho phép nhận định dạng file ảnh
    if (in_array($extension, $allowed_extension)) {//kiểm tra đuôi file ảnh có tồn tại theo định dạng ko
        move_uploaded_file($file, 'upload/' . $new_image_name);//di chuyển vào thư mục upload
        $function_number = $_GET['CKEditorFuncNum'];
        // url này tính từ Domain vô upload
        $url = 'xu-ly/san-pham/upload/' . $new_image_name;//url : nhận url hình ảnh , trả trở lại 
        $message = '';
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
    }
}
?>
