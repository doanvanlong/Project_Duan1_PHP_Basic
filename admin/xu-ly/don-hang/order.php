<?php
    require_once '../../../model/don-hang.php';
    //xác nhận đơn hàng
    if (isset($_POST['xac_nhan']) && $_POST['id_hoa_don']) {
        $xac_nhan = $_POST['xac_nhan'];
        $id_hoa_don = $_POST['id_hoa_don'];
        try {
            confirm_order($xac_nhan, $id_hoa_don);
           echo 1;
        } catch (exception $e) {
           echo 0;
        }
    }
    //huỷ đơn hàng
    if (isset($_POST['huy_don']) && $_POST['id_hoa_don']) {
        $huy_don = $_POST['huy_don'];
        $id_hoa_don = $_POST['id_hoa_don'];
        try {
            cancelled_order($huy_don, $id_hoa_don);
           echo 1;
        } catch (exception $e) {
           echo 0;
        }
    }
    //Xác nhận đã giao đơn hàng
    if (isset($_POST['dateConfirm']) && $_POST['id_hoa_don'] && $_POST['valueDelivery'] && $_POST['payment_status']) {
        $payment_status = $_POST['payment_status'];
        $value = $_POST['valueDelivery'];
        $date = $_POST['dateConfirm'];
        $id_hoa_don = $_POST['id_hoa_don'];
        try {
            confirm_delivery_order($payment_status ,$value, $date, $id_hoa_don);
           echo 1;
        } catch (exception $e) {
           echo 0;
        }
    }
?>