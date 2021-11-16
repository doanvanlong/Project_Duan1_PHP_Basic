<?php
require_once '../../../model/danh-muc.php'; //gọi model chứa các hàm thao tác CSDL vơi danh mục

if (isset($_POST['keyup_dm_chinh'])) {
    $ten_dm_chinh_keyup = $_POST['keyup_dm_chinh']; //lấy được tên danh mục chính khi user đang nhập
    echo (danh_muc_chinh_Isset($ten_dm_chinh_keyup));
    // echo 0 là ko trùng dữ liệu
    // echo số khác 0 là trùng dữ liệu
    // vì hàm trả về số record
}
if (isset($_POST['ten-danh-muc-chinh'])) {
    // tên danh mục chính lấy từ $ _post
    $ten_dm_chinh = $_POST['ten-danh-muc-chinh'];
    try {
        danh_muc_chinh_Insert($ten_dm_chinh);
        // Nếu insert thành công thì trả về 1 ,để thông báo toast message
        echo 1;
    } catch (PDOException $e) {
        // Trả về 0
        echo 0;
    }
}
if (isset($_POST['ten-danh-muc-con'])) {
    // var_dump($_POST);
    $ten_dm_con = $_POST['ten-danh-muc-con'];
    $danh_muc_chinh = $_POST['danh-muc-chinh'];
    try {
        danh_muc_con_Insert($ten_dm_con, $danh_muc_chinh);
        // Nếu insert thành công thì trả về 1 ,để thông báo toast message
        echo 1;
    } catch (Exception $e) {
        // Trả về 0
        echo 0;
    }
}
if (isset($_POST['keyup_dm_con'])) {
    $ten_dm_con_keyup = $_POST['keyup_dm_con']; //lấy được tên danh mục chính khi user đang nhập
    echo (danh_muc_con_Isset($ten_dm_con_keyup));
    // echo 0 là ko trùng dữ liệu
    // echo số khác là trùng dữ liệu
    // vì hàm trả về số record
}
?>