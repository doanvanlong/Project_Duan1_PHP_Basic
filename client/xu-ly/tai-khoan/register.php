<?php
    require_once '../../../model/tai-khoan.php';
//check username có tồn tại chưa
if(isset($_POST['username_register'])){
    $username = $_POST['username_register'];
  echo(username_Check_DB($username));
}
// insert DB
if(isset($_POST['username-register'])){
    $username=$_POST['username-register'];
    $password=$_POST['password-register'];
    $ho_ten=$_POST['ho-ten-kh'];
    try{
        khach_hang_Insert($username,$password,$ho_ten);
        echo 1;
    }catch(Exception $e){
        echo 0;
    }
}
?>