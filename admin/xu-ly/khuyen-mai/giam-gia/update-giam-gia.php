<?php
session_start();
require_once '../../../../model/khuyen-mai.php';

if (isset($_POST['ten_ct_giam_gia_update'])) {
    $ten_ct = $_POST['ten_ct_giam_gia_update'];
    $date_end = $_POST['date_end'];
    $id_loai_giam_gia = $_POST['loai_giam_gia_tien'];
    $id_loai_khuyen_mai = 1; // giảm giá sp
    $gioi_han = $_POST['gioi_han_dat_hang'];
    $date_end = explode("T", $date_end);
    $date_end = implode(" ", $date_end); //xữ lý giờ bên HTML
    $tinh_trang = 1; //đang diễn ra
    $id_khuyen_mai = $_POST['id_khuyen_mai'];
    $muc_giam_gia = $_POST['muc_giam_gia'];
    //xoá tất cả bên bảng giảm giá rồi insert lại
    $list_giam_gia = giam_gia_Query_Info_Sp_By_Id_Km($id_khuyen_mai);
    foreach ($list_giam_gia as $gg) {
        giam_gia_Delete_Id_Giam_Gia($id_khuyen_mai);
    }
    try {
        // insert vào bảng khuyến mãi chung
        khuyen_mai_Update($id_khuyen_mai, $ten_ct, $id_loai_khuyen_mai, $date_end, $gioi_han);
        // sau đó insert cụ thể vào bảng giảm giá
        try {

            //lấy sp ở session
            if (isset($_SESSION['add-giam-gia']) && count($_SESSION['add-giam-gia']) > 0) {
                foreach ($_SESSION['add-giam-gia'] as $sp) {
                    giam_gia_Insert($id_khuyen_mai, $sp, $id_loai_giam_gia, $muc_giam_gia);
                }
            }
            // lấy sp ở DB còn lại Update
            // Kiểm tra nếu sản phẩm đã nằm trong giảm giá thì ko cho vào
            if (isset($_POST['id_sp']) && count($_POST['id_sp']) > 0) {
                $mang_id_sp = $_POST['id_sp'];
                foreach ($mang_id_sp as $id_sp) {
                    $list_giam_gia = giam_gia_Query_All_Sp();
                    if (in_array($id_sp, array_column($list_giam_gia, 'id_sp')) != true) {
                        giam_gia_Insert($id_khuyen_mai, $id_sp, $id_loai_giam_gia, $muc_giam_gia);
                    }
                }
            }
            giam_gia_Update($muc_giam_gia,$id_khuyen_mai);
            echo 1;
            unset($_SESSION['add-giam-gia']);
        } catch (Exception $e) {
            echo 0;
        }
    } catch (Exception $e) {
        echo 0;
    }
}
