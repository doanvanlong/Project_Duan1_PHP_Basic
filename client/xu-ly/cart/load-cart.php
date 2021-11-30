<?php
session_start();
require_once '../../../global.php';
if (sessionCart_Isset()) {

    $arr = [];
    $count = count($_SESSION['cart']);
    $i = 0;
    foreach ($_SESSION['cart'] as $cart) {
        $hinh_anh = $cart['hinh_anh'];
        $id_sp = $cart['id_sp'];
        $url = $cart['url'];
        $ten_sp = $cart['ten_sp'];
        $gia_sp = $cart['gia_sp'];
        $so_luong = $cart['so_luong'];
        $mau_sac = $cart['mau_sac'];
        $dung_luong = $cart['dung_luong'];
        $thanh_tien = $so_luong * $cart['gia_sp'];
        $add = ['count' => $count, 'hinh_anh' => $hinh_anh, 'url' => $url, 'ten_sp' => $ten_sp, 'id_sp' => $id_sp, 'gia_sp' => $gia_sp, 'so_luong' => $so_luong, 'thanh_tien' => $thanh_tien, 'mau_sac' => $mau_sac, 'dung_luong' => $dung_luong];
        array_push($arr, $add);
        $i++;
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}



?>