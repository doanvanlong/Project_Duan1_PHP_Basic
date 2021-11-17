<?php
require_once '../../../model/danh-muc.php'; //gọi model chứa các hàm thao tác CSDL vơi danh mục

    if(isset($_POST['keyup_dm_chinh_update'])){
        $ten_dm_chinh_update_keyup = $_POST['keyup_dm_chinh_update']; //lấy được tên danh mục chính khi user đang nhập
        echo (danh_muc_chinh_Isset($ten_dm_chinh_update_keyup));
        // echo 0 là ko trùng dữ liệu
        // echo số khác 0 là trùng dữ liệu
        // vì hàm trả về số record
    }

    if (isset($_POST['ten-danh-muc-chinh-update'])) {
        // tên danh mục chính lấy từ $ _post
        if(isset($_POST['id_dm_chinh_update'])){
            $id_dm_pro=$_POST['id_dm_chinh_update'];
        }
        $ten_dm_chinh = $_POST['ten-danh-muc-chinh-update'];
        try {
            danh_muc_chinh_Update($id_dm_pro,$ten_dm_chinh);
            // Nếu insert thành công thì trả về 1 ,để thông báo toast message
            echo 1;
        } catch (PDOException $e) {
            // Trả về 0
            echo 0;
        }
    }
    // danh mục con

    if(isset($_POST['keyup_dm_con_update'])){
        $ten_dm_con_update_keyup = $_POST['keyup_dm_con_update']; //lấy được tên danh mục chính khi user đang nhập
        echo (danh_muc_con_Isset($ten_dm_con_update_keyup));
        // echo 0 là ko trùng dữ liệu
        // echo số khác 0 là trùng dữ liệu
        // vì hàm trả về số record
    }

    if (isset($_POST['ten-danh-muc-con-update'])) {
        // tên danh mục chính lấy từ $ _post
        if(isset($_POST['id_dm_con_update'])){
            $id_sub_dm_pro=$_POST['id_dm_con_update'];
        }
        if(isset($_POST['danh-muc-con-update'])){
             $id_dm_pro=$_POST['danh-muc-con-update'];
        }
        $ten_dm_con = $_POST['ten-danh-muc-con-update'];
        try {
            danh_muc_con_Update($id_sub_dm_pro,$ten_dm_con,$id_dm_pro);
            // Nếu insert thành công thì trả về 1 ,để thông báo toast message
            echo 1;
        } catch (PDOException $e) {
            // Trả về 0
            echo 0;
        }
    }

?>