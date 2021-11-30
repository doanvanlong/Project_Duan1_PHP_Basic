<?php
session_start();
//xoá 1 sản phẩm trong cart
if (isset($_POST['id_sp_xoa_one_cart'])) {
    $id_sp = $_POST['id_sp_xoa_one_cart'];
    $i = 0;
    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        if ($_SESSION['cart'][$i]['id_sp'] == $id_sp) {
            //nếu id muốn xoá = id sp trong session thì xoá
            //xoá mảng session cart
            unset($_SESSION['cart'][$i]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            //array_value để reset lại key mặc định 0 1
        }
    }
    echo 1;
}
//xoá all cart_
if (isset($_POST['xoa_all_cart'])) {
    try {
        unset($_SESSION['cart']);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
