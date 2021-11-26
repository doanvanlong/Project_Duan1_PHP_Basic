<?php

    require_once '../../../model/tai-khoan.php';
    if (isset($_POST['username']) && $_POST['username']){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        try {
            add_user($username, $password, $name, $phone, $email, $address);
            echo 1;
        } catch (Exception $e) {
            echo 0;
        }
    }

?>