<?php
session_start();
// adđ vào session add giảm giá
if (!isset($_SESSION['add-sp-mua-kem'])) {
    $_SESSION['add-sp-mua-kem'] = [];
}
if (isset($_POST['mang_id_sp_mua_kem'])) {
    $mang_id_sp = $_POST['mang_id_sp_mua_kem'];
    foreach ($mang_id_sp as $id_sp) {
        if (in_array($id_sp, $_SESSION['add-sp-mua-kem']) != true) {
            array_push($_SESSION['add-sp-mua-kem'], $id_sp);
        }
    }
    echo 1;
}
// xoá id sp mua kèm session
if (isset($_POST['id_delete_sp'])) {
    $id_sp = $_POST['id_delete_sp'];
    //xoá sản phẩm trong session
    for ($i = 0; $i < count($_SESSION['add-sp-mua-kem']); $i++) {
        if ($_SESSION['add-sp-mua-kem'][$i] == $id_sp) {
            try {
                unset($_SESSION['add-sp-mua-kem'][$i]);
                $_SESSION['add-sp-mua-kem'] = array_values($_SESSION['add-sp-mua-kem']);
                echo 1;
            } catch (Exception $e) {
                echo 0;
            }
        }
    }
}
?>