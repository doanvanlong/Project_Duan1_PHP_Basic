<?php
require_once '../../../model/cart.php';
require_once '../../../model/khuyen-mai.php';
session_start();
if (isset($_POST['checkout_success'])) {
    $giam_gia = $_POST['checkout_success'];
    $hinh_thuc_thanh_toan = $_POST['hinh_thuc_thanh_toan'];
    $id_kh = $_SESSION['login']['id_kh'];
    $trang_thai = "chuaxacnhan"; //trạng thái đơnhangf
    $tong_tien = $_POST['tong_tien_all'];
    if ($_POST['id_ma_giam_gia'] != "") {
        $id_ma_giam_gia = $_POST['id_ma_giam_gia'];
    }
    if (isset($_POST['id_kh_ds']) && $_POST['id_kh_ds'] != "") {
        $id_kh_ds = $_POST['id_kh_ds'];
    }
    if ($hinh_thuc_thanh_toan == 0) {
        $tinh_trang = "chuathanhtoan";
    } else {
        $tinh_trang = "dathanhtoan";
    }
    $date = Date('Y-m-d');

    try {
        $id_hoa_don = cart_Add_DB($id_kh, $tinh_trang, $trang_thai, $hinh_thuc_thanh_toan, $tong_tien, $date, $giam_gia);
        foreach ($_SESSION['cart'] as $cart) {
            $id_sp = $cart['id_sp'];
            $so_luong_mua = $cart['so_luong'];
            $gia = $cart['gia_sp'];
            $mau_sac = $cart['mau_sac'];
            $dung_luong = $cart['dung_luong'];
            try {
                cart_detail_Add_DB($id_hoa_don, $id_sp, $so_luong_mua, $gia, $mau_sac, $dung_luong);
            } catch (Exception $e) {
                echo 0;
            }
            $sql = "SELECT * FROM giam_gia";
            $list = pdo_query($sql);

            if (in_array($cart['id_sp'], array_column($list, 'id_sp')) == true) {
                $sql = "SELECT * FROM giam_gia where id_sp='" . $cart['id_sp'] . "' ";
                $info_km = pdo_query_one($sql);
                $id_km = $info_km['id_khuyen_mai'];
                khuyen_mai_Update_So_Luot_SD($id_km);
            }
        }

        //có mã giảm giá
        if ($_POST['id_ma_giam_gia'] != "") {
            if (isset($_POST['id_kh_ds']) && $_POST['id_kh_ds'] != "") {
                $id_kh_ds = $_POST['id_kh_ds'];
                $id_kh = $id_kh_ds . ',' . $id_kh; //chuỗi id kh trong db và id kh hiện tại
                ma_giam_gia_Update_Id_Kh($id_kh, $id_ma_giam_gia);
                $info = ma_giam_gia_Select_Id_Ma_Giam_Gia($id_ma_giam_gia);
                khuyen_mai_Update_So_Luot_SD($info['id_khuyen_mai']);
            } else {
                ma_giam_gia_Update_Id_Kh($id_kh, $id_ma_giam_gia);
                $info = ma_giam_gia_Select_Id_Ma_Giam_Gia($id_ma_giam_gia);
                khuyen_mai_Update_So_Luot_SD($info['id_khuyen_mai']);
            }
        }
        
        unset($_SESSION['cart']);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
