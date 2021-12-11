<?php
    require_once '../../../model/don-hang.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date("Y-m-d");
    //xác nhận đơn hàng
    if (isset($_POST['Confirm_Order'])) {
        $xac_nhan = 'daxacnhan';
        $id_hoa_don = $_POST['Confirm_Order'];
        try {
            confirm_order($xac_nhan, $id_hoa_don);
           echo 1;
        } catch (exception $e) {
           echo 0;
        }
    }
    //huỷ đơn hàng
    if (isset($_POST['Cancelled_Order'])) {
        $huy_don = 'dahuy';
        $id_hoa_don = $_POST['Cancelled_Order'];
        try {
            cancelled_order($huy_don, $id_hoa_don);
           echo 1;
        } catch (exception $e) {
           echo 0;
        }
    }
    //Xác nhận đã giao đơn hàng
    if (isset($_POST['Confirm_Delivery'])) {
        $payment_status = 'dathanhtoan';
        $value = 'dagiaohang';
        $date = date("Y-m-d");
        $id_hoa_don = $_POST['Confirm_Delivery'];
        try {
            confirm_delivery_order($payment_status ,$value, $date, $id_hoa_don);
           echo 1;
        } catch (exception $e) {
           echo 0;
        }
    }
?>