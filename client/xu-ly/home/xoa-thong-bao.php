<?php
require_once '../../../model/thong-bao.php';
if (isset($_POST['id_thong_bao_xoa'])) {
    $id_thong_bao = $_POST['id_thong_bao_xoa'];
    $id_kh=$_POST['id_kh'];
    try {
        thong_bao_Detail_Delete_Id($id_kh,$id_thong_bao);
        echo 1;
    } catch (PDOException $e) {
        echo 0;
    }
}
