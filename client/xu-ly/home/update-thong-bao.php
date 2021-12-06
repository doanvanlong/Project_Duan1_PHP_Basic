<?php
require_once '../../../model/thong-bao.php';
    if(isset($_POST['id_thong_bao_detail'])){
        $id_thong_bao_detail=$_POST['id_thong_bao_detail'];
        thong_bao_Update_Da_Xem(1,$id_thong_bao_detail);
        echo 1;
    }

?>
