<?php
require_once '../../../../model/khuyen-mai.php';
session_start();
if (isset($_POST['id_sp_chinh'])) {
    $id_sp_chinh = $_POST['id_sp_chinh'];
    $_SESSION['add-sp-chinh'] = $id_sp_chinh;
    echo 1;
}
//keyup tên chương trình deal sốc
if (isset($_POST['keyup_ten_ct_deal_soc'])) {
    $ten_ct = $_POST['keyup_ten_ct_deal_soc'];
    echo khuyen_mai_Isset_Ten_Ct_Km($ten_ct);
}
//add ct km vào DB
if (isset($_POST['ten_ct_deal_soc'])) {
    $ten_ct = $_POST['ten_ct_deal_soc'];
    $id_loai_khuyen_mai = 3; //deal sốc
    $so_luot_su_dung = $_POST['gioi_han_dat_hang'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $date_start = explode("T", $date_start);
    $date_start = implode(" ", $date_start); //xữ lý giờ bên HTML
    $date_end = explode("T", $date_end);
    $date_end = implode(" ", $date_end); //xữ lý giờ bên HTML
    $tinh_trang = 1; //đang diễn ra
    $id_km = khuyen_mai_Insert($ten_ct, $id_loai_khuyen_mai, $date_start, $date_end, $so_luot_su_dung, $tinh_trang);
    $id_sp_chinh = $_SESSION['add-sp-chinh'];
    $muc_giam = $_POST['muc_giam_mua_kem'];
    $id_loai_giam_gia_tien=$_POST['loai_giam_gia_tien'];
    $i = 0;
    try {
        foreach ($_SESSION['add-sp-mua-kem'] as $id_sp) {
            deal_soc_Insert($id_km, $id_sp_chinh, $id_sp, $id_loai_giam_gia_tien, $muc_giam[$i]);
            $i++;
        }
        echo 1;
        unset($_SESSION['add-sp-mua-kem']);
        unset($_SESSION['add-sp-chinh']);
    } catch (Exception $e) {
        echo 0;
    }
}
?>