<?php
require_once '../../../model/tai-khoan.php';
if (isset($_POST['ho_ten_update_address'])) {
    $ho_ten = $_POST['ho_ten_update_address'];
    $id_kh = $_POST['id_kh'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    $email = $_POST['email'];
    $info_kh = khach_hang_Query_One($id_kh);
    $dia_chi = $_POST['dia_chi'];
    $mat_khau = $info_kh['mat_khau'];
    $hinh_anh = $info_kh['hinh_anh'];
    try {
        khach_hang_Update_profile($id_kh, $mat_khau, $ho_ten, $hinh_anh, $so_dien_thoai, $email, $dia_chi);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
