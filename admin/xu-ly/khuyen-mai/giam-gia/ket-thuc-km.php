<?php
require_once '../../../../model/khuyen-mai.php';

// Kết thúc km giảm giá,và cập nhập lại ngày kết thúc luôn
if (isset($_POST['id_ket_thuc_km'])) {
    $id_km = $_POST['id_ket_thuc_km'];
    try {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now_end = date('Y-m-d H:i:s');
        khuyen_mai_Update_Ket_Thuc_KM($id_km,$date_now_end);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
//xoá khuyễn mãi khỏi Db
if(isset($_POST['id_xoa_km'])){
    $id_km=$_POST['id_xoa_km'];
    try{
        khuyen_mai_Delete_By_Id($id_km);
        echo 1;
    }catch (Exception $e) {
        echo 0;
    }
}
?>