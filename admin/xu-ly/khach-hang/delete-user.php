<?php
    require_once '../../../model/tai-khoan.php';
    //Xoá 1 khách hàng
    if (isset($_POST['delete_user'])){
        $id_user = $_POST['delete_user'];
        try {
            delete_one_user($id_user);
            echo 1;
        } catch (Exception $e) {
            echo 0;
        }
    }
    //Xoá nhiều khách Hàng
    if (isset($_POST['list-user'])) {
        $list_delete_user = $_POST['list-user'];
        try {
            foreach ($list_delete_user as $list_delete) {
                $list = $list_delete;
                delete_multi_user($list);
            }
            echo 1;
        } catch (Exception $e) {
           echo 0;
        }
    }
?>