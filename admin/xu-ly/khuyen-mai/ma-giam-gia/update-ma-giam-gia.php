<?php
require_once '../../../../model/khuyen-mai.php';
if(isset($_POST['ten_ct_ma_giam_gia_update'])){
    $ten_ct = $_POST['ten_ct_ma_giam_gia_update'];
    $id_km=$_POST['id_km'];
    $id_ma_giam_gia=$_POST['id_ma_giam_gia'];
    $ten_ma_giam_gia = 'LTS' . $_POST['ten_ma_giam_gia'];
    $date_end = $_POST['date_end'];
    $id_loai_giam_gia = $_POST['loai_giam_gia_tien'];
    $id_loai_khuyen_mai = 2; // mã giảm giá 
    $muc_giam_gia = $_POST['muc_giam'];
    $gioi_han = $_POST['gioi_han_dat_hang'];
    $don_hang_toi_thieu = $_POST['don_hang_toi_thieu'];
    $date_end = explode("T", $date_end);
    $date_end = implode(" ", $date_end); //xữ lý giờ bên HTML
    $tinh_trang = 1; //đang diễn ra
    try {
        // insert vào bảng khuyến mãi chung
        khuyen_mai_Update($id_km,$ten_ct,$id_loai_khuyen_mai,$date_end,$gioi_han);
        // sau đó insert cụ thể vào bảng giảm giá
        ma_giam_gia_Update($id_ma_giam_gia,$id_km,$ten_ma_giam_gia, $id_loai_giam_gia,$muc_giam_gia,$don_hang_toi_thieu);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
