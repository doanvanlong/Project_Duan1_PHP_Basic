<?php
require_once '../../../model/san-pham.php';
if(isset($_POST['id_sp_keyup_quantity'])){
    $id = $_POST['id_sp_keyup_quantity'];
    $so_luong_mua = $_POST['so_luong_mua'];
    if(san_pham_Count_Ton_Kho($id)< $so_luong_mua){
        echo 0;
    }else{
        echo 1;
    }
}
?>