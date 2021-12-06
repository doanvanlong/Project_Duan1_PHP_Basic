<?php
    require_once 'pdo.php';
    //DS ĐƠN HÀNG CHỜ XÁC NHẬN
    function list_orders_news() {
        $sql = "SELECT hoa_don.id_hoa_don, hoa_don.trang_thai_don_hang, hoa_don.hinh_thuc_thanh_toan, hoa_don.tong_tien, hoa_don.ngay_dat_hang, hoa_don.khuyen_mai, khach_hang.ho_ten, khach_hang.so_dien_thoai, khach_hang.dia_chi FROM hoa_don LEFT JOIN khach_hang ON hoa_don.id_kh = khach_hang.id_kh WHERE hoa_don.trang_thai_don_hang = 'chuaxacnhan';";
        return pdo_query($sql);
    }
    //DS ĐƠN HÀNG ĐÃ XÁC NHẬN
    function list_orders_confirm() {
        $sql = "SELECT hoa_don.id_hoa_don, hoa_don.trang_thai_don_hang, hoa_don.hinh_thuc_thanh_toan, hoa_don.tong_tien, hoa_don.ngay_dat_hang, hoa_don.khuyen_mai, khach_hang.ho_ten, khach_hang.so_dien_thoai, khach_hang.dia_chi FROM hoa_don LEFT JOIN khach_hang ON hoa_don.id_kh = khach_hang.id_kh WHERE hoa_don.trang_thai_don_hang = 'daxacnhan';";
        return pdo_query($sql);
    }
    //DS ĐƠN HÀNG ĐÃ GIAO THÀNH CÔNG
    function list_orders_delivery_confirm() {
        $sql = "SELECT hoa_don.id_hoa_don, hoa_don.tinh_trang_thanh_toan, hoa_don.trang_thai_don_hang, hoa_don.hinh_thuc_thanh_toan, hoa_don.ngay_giao_hang, hoa_don.tong_tien, hoa_don.ngay_dat_hang, hoa_don.khuyen_mai, khach_hang.ho_ten, khach_hang.so_dien_thoai, khach_hang.dia_chi FROM hoa_don LEFT JOIN khach_hang ON hoa_don.id_kh = khach_hang.id_kh WHERE hoa_don.trang_thai_don_hang = 'dagiaohang';";
        return pdo_query($sql);
    }
    //DS ĐƠN HÀNG ĐÃ HUỶ
    function list_orders_cancelled() {
        $sql = "SELECT hoa_don.id_hoa_don, hoa_don.trang_thai_don_hang, hoa_don.hinh_thuc_thanh_toan, hoa_don.tong_tien, hoa_don.ngay_dat_hang, hoa_don.khuyen_mai, khach_hang.ho_ten, khach_hang.so_dien_thoai, khach_hang.dia_chi  FROM hoa_don LEFT JOIN khach_hang ON hoa_don.id_kh = khach_hang.id_kh WHERE hoa_don.trang_thai_don_hang = 'dahuy';";
        return pdo_query($sql);
    }
    //DS CHI TIẾT SẢN PHẨM
    function list_order_details($ID){
        $sql = "SELECT hoa_don_chi_tiet.id_hoa_don_chi_tiet AS ID_HD_Chi_Tiet, hoa_don_chi_tiet.id_hoa_don AS ID_HD, hoa_don_chi_tiet.so_luong_mua AS So_Luong, hoa_don_chi_tiet.don_gia AS Gia, hoa_don_chi_tiet.mau_sac AS Mau_Sac, hoa_don_chi_tiet.dung_luong AS Dung_Luong, hoa_don_chi_tiet.giam_gia AS Giam_Gia, san_pham.id_sp AS ID_San_Pham, san_pham.ten_sp AS Ten_San_Pham, san_pham.hinh_anh AS Anh_San_Pham FROM hoa_don_chi_tiet LEFT JOIN san_pham ON hoa_don_chi_tiet.id_sp = san_pham.id_sp WHERE id_hoa_don = $ID;";
        return pdo_query($sql);
    }
    //DS ĐƠN HÀNG
    function list_orders($ID_HD) {
        $sql = "SELECT hoa_don.id_hoa_don, hoa_don.tinh_trang_thanh_toan, hoa_don.ngay_giao_hang, hoa_don.trang_thai_don_hang, hoa_don.hinh_thuc_thanh_toan, hoa_don.tong_tien, hoa_don.ngay_dat_hang, hoa_don.khuyen_mai, khach_hang.ho_ten, khach_hang.so_dien_thoai, khach_hang.dia_chi FROM hoa_don LEFT JOIN khach_hang ON hoa_don.id_kh = khach_hang.id_kh WHERE hoa_don.id_hoa_don = $ID_HD;";
        return pdo_query_one($sql);
    }
    //XÁC NHẬN ĐƠN HÀNG
    function confirm_order($xac_nhan, $id_hoa_don) {
        $sql  = "UPDATE `hoa_don` SET `trang_thai_don_hang`='$xac_nhan' WHERE id_hoa_don = $id_hoa_don;";
        pdo_execute($sql);
    }
    //HUỶ ĐƠN HÀNG
    function cancelled_order($huy_don, $id_hoa_don) {
        $sql  = "UPDATE `hoa_don` SET `trang_thai_don_hang`='$huy_don' WHERE id_hoa_don = $id_hoa_don;";
        pdo_execute($sql);
    }
    //XÁC NHẬN ĐÃ GIAO HÀNG
    function confirm_delivery_order($payment_status, $value, $date, $id_hoa_don){
        $sql = "UPDATE hoa_don SET tinh_trang_thanh_toan = '$payment_status', trang_thai_don_hang = '$value', ngay_giao_hang = '$date' WHERE id_hoa_don =  $id_hoa_don";
        pdo_execute($sql);
    }
?>