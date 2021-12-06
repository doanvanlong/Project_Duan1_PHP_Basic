<?php
require_once '../../../../model/khuyen-mai.php';
require_once '../../../../model/thong-bao.php';
require_once '../../../../model/tai-khoan.php';




// hoàn tất  < add tất cả thông tin giảm giá vào DB rồi xoá session

if (isset($_POST['ten_ct_ma_giam_gia'])) {
    $ten_ct = $_POST['ten_ct_ma_giam_gia'];
    $ten_ma_giam_gia = 'LTS' . $_POST['ten_ma_giam_gia'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $id_loai_giam_gia = $_POST['loai_giam_gia_tien'];
    $id_loai_khuyen_mai = 2; // mã giảm giá 
    $muc_giam_gia = $_POST['muc_giam'];
    $chia_se_user = $_POST['chia_se_user'];
    $gioi_han = $_POST['gioi_han_dat_hang'];
    $don_hang_toi_thieu = $_POST['don_hang_toi_thieu'];
    $date_start = explode("T", $date_start);
    $date_start = implode(" ", $date_start); //xữ lý giờ bên HTML
    $date_end = explode("T", $date_end);
    $date_end = implode(" ", $date_end); //xữ lý giờ bên HTML
    $tinh_trang = 1; //đang diễn ra
    // nếu chia sẻ user là 1 là sẻ chia sẻ, 0 là ko chia sẻ
    try {
        // insert vào bảng khuyến mãi chung
        $id_km = khuyen_mai_Insert($ten_ct, $id_loai_khuyen_mai, $date_start, $date_end, $gioi_han, $tinh_trang);
        // sau đó insert cụ thể vào bảng giảm giá
        ma_giam_gia_Insert($id_km, $ten_ma_giam_gia, $id_loai_giam_gia, $muc_giam_gia, $don_hang_toi_thieu);
        if (strlen($muc_giam_gia) > 2) {
            $tach_muc_giam_gia = number_format($muc_giam_gia, 0, ',', '.') . 'đ';
        } else {
            $tach_muc_giam_gia = $muc_giam_gia . '%';
        }

        if ($chia_se_user == 1) {
            $noi_dung = "Khuyến mãi tặng mã giảm giá giảm&nbsp;" . $tach_muc_giam_gia . '&nbsp;áp dụng cho tất cả đơn hàng  trên &nbsp;' . number_format($don_hang_toi_thieu, 0, ',', '.') . 'đ';
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('Y-m-d H:i:s');
            $id_thong_bao = thong_bao_Insert($ten_ct, $noi_dung, $date);
            $list_user = list_user();
            //lấy id kh để tag khách hàng vào thông báo
            foreach ($list_user as $user) {
                thong_bao_Detail_Insert($id_thong_bao, $user['id_kh'], 0);
            }
        }
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}


//keyup tên mã giảm giá
if (isset($_POST['keyup_ten_ma_giam_gia'])) {
    $ten_ma_giam_gia = 'LTS' . $_POST['keyup_ten_ma_giam_gia'];
    $sql = "SELECT * FROM ma_giam_gia where ten_ma_giam_gia = '" . $ten_ma_giam_gia . "'";
    $list_ma_giam_gia = pdo_query($sql);
    if (is_array($list_ma_giam_gia) && count($list_ma_giam_gia) > 0) {
        echo 0;
        //có rồi
    } else {
        echo 1;
        // chưa Có
    }
}
//keyup tên mã giảm giá
if (isset($_POST['keyup_ten_ct_ma_giam_gia'])) {
    $ten_ct_ma_giam_gia = $_POST['keyup_ten_ct_ma_giam_gia'];
    $sql = "SELECT * FROM khuyen_mai where ten_chuong_trinh = '" . $ten_ct_ma_giam_gia . "'";
    $list_ma_giam_gia = pdo_query($sql);
    if (is_array($list_ma_giam_gia) && count($list_ma_giam_gia) > 0) {
        echo 0;
        //có rồi
    } else {
        echo 1;
        // chưa Có
    }
}
