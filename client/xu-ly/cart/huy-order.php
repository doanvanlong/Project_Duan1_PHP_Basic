<?php
require_once '../../../model/cart.php';
if (isset($_POST['id_hoa_don_huy'])) {
    $id = $_POST['id_hoa_don_huy'];
    try {
        cart_Huy_Order($id, 'dahuy');
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
?>