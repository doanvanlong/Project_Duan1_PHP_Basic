<?php
require_once '../../../model/don-hang.php';
require_once '../../../model/thong-bao.php';

date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date("Y-m-d");
//xác nhận đơn hàng
if (isset($_POST['Confirm_Order'])) {
    $xac_nhan = 'daxacnhan';
    $id_hoa_don = $_POST['Confirm_Order'];
    try {
        confirm_order($xac_nhan, $id_hoa_don);
        // insert bảng thông báo user
        $sql = "SELECT * FROM hoa_don where id_hoa_don =?";
        $info = pdo_query_one($sql, $id_hoa_don);
        $id_tb = thong_bao_Insert('Xác nhận đơn hàng', 'Đơn hàng của bạn đã được xữ lý và dự kiến giao hàng trong 3 ngày tới , quý khách vui lòng giữ liên lạc với shipper !', $date);
        thong_bao_Detail_Insert($id_tb, $info['id_kh'], 0);
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
        // insert bảng thông báo user
        $sql = "SELECT * FROM hoa_don where id_hoa_don =?";
        $info = pdo_query_one($sql, $id_hoa_don);
        $id_tb = thong_bao_Insert('Xác nhận huỷ đơn', 'Rất thành thật xin lỗi vì sự bất tiện này , đơn hàng của bạn đã bị huỷ do sản phẩm trong không đủ số lượng . Quý khách có thể tìm sản phẩm khác ưng ý và quay trở lại đặt hàng!', $date);
        thong_bao_Detail_Insert($id_tb, $info['id_kh'], 0);
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
        confirm_delivery_order($payment_status, $value, $date, $id_hoa_don);
        // insert bảng thông báo user
        $sql = "SELECT * FROM hoa_don where id_hoa_don =?";
        $info = pdo_query_one($sql, $id_hoa_don);
        $id_tb = thong_bao_Insert('Xác nhận giao thành công', 'Đơn hàng của bạn đã được giao thành công ! Cảm ơn quý khách đã ủng hộ chúng tôi . ', $date);
        thong_bao_Detail_Insert($id_tb, $info['id_kh'], 0);

        echo 1;
    } catch (exception $e) {
        echo 0;
    }
}

// ----------------------------------------------------------------
//select lấy id hoá đơn cộng tổng tiền theo ngày hiện tại cập nhật doanh thu ngày 
if (isset($_POST['chart_dthu'])) {
    $date_now = getdate();
    $sql = "SELECT DISTINCT hoa_don.id_hoa_don,hoa_don.trang_thai_don_hang,hoa_don.tong_tien,hoa_don.ngay_giao_hang FROM `hoa_don` INNER JOIN hoa_don_chi_tiet on hoa_don.id_hoa_don=hoa_don_chi_tiet.id_hoa_don WHERE  hoa_don.trang_thai_don_hang='dagiaohang' and 
    year(hoa_don.ngay_giao_hang)=? and month(hoa_don.ngay_giao_hang)= ? and day(hoa_don.ngay_giao_hang)= ?";
    $list_id = pdo_query($sql, $date_now['year'], $date_now['mon'], $date_now['mday']);
    if (count($list_id) > 0) {
        $sum = 0;
        foreach ($list_id as $id) {
            $sum += $id['tong_tien'];
        }
        $date = $list_id[0]['ngay_giao_hang'];
        $date2 = explode("-", $date);
        $date3 = ($date2[2]);
        $arr = ['day' => $date3, 'sum' => $sum];
        echo json_encode($arr);
    }
}
