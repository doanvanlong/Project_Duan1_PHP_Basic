<?php
require_once '../../../model/danh-muc.php'; //gọi model chứa các hàm thao tác CSDL vơi danh mục
// Delete 1 danh mục chính

if (isset($_POST['delete_id_dm_chinh'])) {
    // var_dump($_POST);
    $id_dm_chinh = $_POST['delete_id_dm_chinh'];
    try {
        danh_muc_pro_Delete($id_dm_chinh);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
    // echo 1;
}
// Delete 1 danh mục con
if (isset($_POST['delete_id_dm_con'])) {
    // var_dump($_POST);
    $id_dm_con = $_POST['delete_id_dm_con'];
    try {
        sub_danh_muc_pro_Delete($id_dm_con);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
    // echo 1;
}

// Delete danh mục chính checked 
//Mảng khi checked
if (isset($_POST['dm-chinh'])) {
    $ds_dm_chinh = $_POST['dm-chinh'];
    try {
        foreach ($ds_dm_chinh as $dm_chinh) {
            $id_dm_chinh = $dm_chinh;
            //lấy đc từng id danh mục chính rgọi hàm Xoá
            danh_muc_pro_Delete($id_dm_chinh);
        }
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
if (isset($_POST['dm-con'])) {
    $ds_dm_con = $_POST['dm-con'];
    try {
        foreach ($ds_dm_con as $dm_con) {
            $id_dm_con = $dm_con;
            //lấy đc từng id danh mục chính rgọi hàm Xoá
            sub_danh_muc_pro_Delete($id_dm_con);
        }
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
