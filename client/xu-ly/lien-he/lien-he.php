<?php
require_once '../../../global.php';
require_once '../../../model/pdo.php';
    if(isset($_POST['ho_ten_kh_lh'])){
        $ho_ten_kh_lh = $_POST['ho_ten_kh_lh'];
        $email_kh_lh=$_POST['email_kh_lh'];
        $noi_dung = $_POST['noidung_lh'];
        if(sessionLogin_Isset()){
            $id_kh = $_SESSION['login']['id_kh'];
            $sql="INSERT INTO lien_he(ho_ten,noi_dung,email,id_kh) value(?,?,?,?)";
            pdo_execute($sql,$ho_ten_kh_lh,$noi_dung,$email_kh_lh,$id_kh);
            echo 1;
        }else{
            $sql="INSERT INTO lien_he(ho_ten,noi_dung,email) value(?,?,?)";
            pdo_execute($sql,$ho_ten_kh_lh,$noi_dung,$email_kh_lh);
            echo 1;
        }
       
    }

?>