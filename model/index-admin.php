<?php
    require_once 'pdo.php';
    //Lấy ds đơn hàng mới
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateNow = date('Y-m-d');
    //đếm số lượng đơn hàng mới theo trạng thái : chưa xác nhận
    function new_orders(){
        $sql = "SELECT COUNT(trang_thai_don_hang) AS Don_Hang_Moi FROM `hoa_don` WHERE trang_thai_don_hang = 'chuaxacnhan';";
       return pdo_query($sql);
    }
    //lấy bình luận mới theo ngày hiện thực
    function new_comments($dateNow){
        $sql = "SELECT ngay_bl FROM binh_luan_pro
        WHERE ngay_bl='$dateNow'
        UNION ALL
        SELECT ngay_bl FROM binh_luan_news
        WHERE ngay_bl='$dateNow'
        ORDER BY ngay_bl;";
        return pdo_query($sql);
    }
    //đếm số lượng người dùng
    function new_users(){
        $sql = "SELECT COUNT(username) AS User FROM khach_hang;";
        return pdo_query($sql);
    }
    //Doanh thu tính theo đơn hàng đã giao thành công trong 30 ngày
    function sales($dateNow){
        $sql = "SELECT SUM(tong_tien) AS Doanh_Thu FROM hoa_don WHERE ngay_giao_hang BETWEEN (SELECT SUBDATE('$dateNow', INTERVAL 30 DAY)) AND '$dateNow' AND trang_thai_don_hang = 'dagiaohang';";
       return pdo_query($sql);
    }
    //List sản phẩm bán chạy
    function list_product_best_selling(){
        $sql = "SELECT hoa_don_chi_tiet.id_sp AS ID_Product,san_pham.ten_sp AS Name_Product, san_pham.hinh_anh AS IMG, SUM(hoa_don_chi_tiet.so_luong_mua) AS So_Luong_Mua FROM hoa_don_chi_tiet INNER JOIN san_pham ON hoa_don_chi_tiet.id_sp = san_pham.id_sp GROUP BY ID_Product ORDER BY So_Luong_Mua DESC LIMIT 10;";
     return pdo_query($sql);
    }
    //List bình luận mới nhất trước
    function list_comment_news(){
        $sql = "SELECT binh_luan_pro.id_bl_pro AS ID_Comment, binh_luan_pro.id_sp AS ID_Pro, binh_luan_pro.noi_dung AS Content, binh_luan_pro.ngay_bl AS Day_Comment, khach_hang.ho_ten AS Ho_Ten, khach_hang.hinh_anh AS AVT FROM `binh_luan_pro` INNER JOIN khach_hang ON binh_luan_pro.id_kh = khach_hang.id_kh ORDER BY ID_Comment DESC LIMIT 10;";
        return pdo_query($sql);
    }
    function list_product_homepage(){
        $sql = "SELECT DISTINCT(san_pham.id_sp) AS id_product, san_pham.ten_sp AS name_product FROM san_pham INNER JOIN binh_luan_pro ON san_pham.id_sp = binh_luan_pro.id_sp;";
        return pdo_query($sql);
    }
