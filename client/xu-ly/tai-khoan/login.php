<?php
require_once '../../../model/tai-khoan.php';
session_start();
if (isset($_POST['username-login'])) {
    $username = $_POST['username-login'];
    $password = $_POST['password-login'];
    // lưu id,username,mat_khau
    $info = (khach_hang_Isset_DB($username, $password));
    if (is_array($info)) {
        $_SESSION['login'] = array('id_kh' => $info['id_kh'], 'ho_ten' => $info['ho_ten']);
        if (isset($_SESSION['url-session'])) {
            echo $_SESSION['url-session'];
        }else{
            echo 1;
        }

    } else {
        echo 0;
    }
}
