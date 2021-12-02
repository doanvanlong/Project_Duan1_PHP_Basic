<?php
require_once '../../../../model/khuyen-mai.php';
if (isset($_POST['id_delete_giam_gia'])) {
    $id_giam_gia = $_POST['id_delete_giam_gia'];
    try {
        giam_gia_Delete_Id_Giam_Gia($id_giam_gia);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
?>