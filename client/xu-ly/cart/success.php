<?php
require_once '../../../model/cart.php';
session_start();
if (isset($_POST['checkout_success'])) {
    $giam_gia = $_POST['checkout_success'];
    $hinh_thuc_thanh_toan = $_POST['hinh_thuc_thanh_toan'];
    $id_kh = $_SESSION['login']['id_kh'];
    $trang_thai = "chuaxacnhan"; //trạng thái đơnhangf
    $tong_tien = $_POST['tong_tien_all'];
    if ($hinh_thuc_thanh_toan == 0) {
        $tinh_trang = "chuathanhtoan";
    } else {
        $tinh_trang = "dathanhtoan";
    }
    $date = Date('Y-m-d');

    try {
        $id_hoa_don = cart_Add_DB($id_kh, $tinh_trang, $trang_thai, $hinh_thuc_thanh_toan, $tong_tien, $date,$giam_gia);
        foreach ($_SESSION['cart'] as $cart) {
            $id_sp = $cart['id_sp'];
            $so_luong_mua = $cart['so_luong'];
            $gia = $cart['gia_sp'];
            $mau_sac = $cart['mau_sac'];
            $dung_luong = $cart['dung_luong'];
            try {
                cart_detail_Add_DB($id_hoa_don, $id_sp, $so_luong_mua, $gia, $mau_sac, $dung_luong);
                echo 1;
            } catch (Exception $e) {
                echo 0;
            }
        }
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
