<?php
    session_start();
    require_once '../../../global.php';
    require_once '../../../model/tai-khoan.php';
    if(isset($_POST['load_tong_tien_checkout'])){
       if(sessionLogin_Isset()){
           if(sessionCart_Isset()){
               $tong=0;
               foreach($_SESSION['cart'] as $cart){
                $tong+=$cart['so_luong']* $cart['gia_sp'];
               }
               $info_kh=khach_hang_Query_One($_SESSION['login']['id_kh']);
                   $array=['tong_tien' =>$tong ,'id_kh'=>$info_kh['id_kh'],'ho_ten'=>$info_kh['ho_ten'],'dia_chi'=>$info_kh['dia_chi'],'so_dien_thoai'=>$info_kh['so_dien_thoai']];
                    echo json_encode ($array);
           }
       }
    }
?>