<?php
session_start();
require_once '../../../global.php';
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
//add cart
if (!sessionLogin_Isset()) {
    if (isset($_POST['url_session'])) {
        $_SESSION['url-session'] = $_POST['url_session'];
        echo 0;
    }
} else {
    if (isset($_POST['tong_cong_deal'])) {
        //deal sốc
        var_dump($_POST);
    } else {
        //ko có deal
        $id_sp = $_POST['id_sp_chinh'];
        $url = $_POST['url_session'];
        $ten_sp = $_POST['ten_sp_chinh'];
        $gia_sp = $_POST['gia_sp_chinh'];
        $dung_luong = $_POST['dung_luong_chinh'];
        $mau_sac = $_POST['mau_sac_chinh'];
        $hinh_anh = $_POST['hinh_anh_chinh'];
        $so_luong = 1; //mặc định
        $add = ['id_sp' => $id_sp, 'ten_sp' => $ten_sp, 'url' => $url, 'gia_sp' => $gia_sp, 'so_luong' => $so_luong, 'dung_luong' => $dung_luong, 'mau_sac' => $mau_sac, 'hinh_anh' => $hinh_anh];
        // kiểm tra xem ,id_sp này có trong mảng cart chưa
        if (in_array($id_sp, array_column($_SESSION['cart'], 'id_sp')) != true) {
            // chưa có
            array_push($_SESSION['cart'], $add);
            //đẩy $add lấy được vào cart
        } else {
            // có rồi
            // Tăng số lượng
            //nếu khác Gb or màu sắc thì nối chuỗi

            $sl = 0;
            $mau = "/";
            $dl="/";
            foreach ($_SESSION['cart'] as $cart) {
                if ($cart['id_sp'] != $id_sp) {
                } else {
                    // echo "trùng";
                    // $cart['so_luong'] += $so_luong;
                    //đẩy cart số lượng vò mảng sess
                    // chỉ lấy thèn có id_sp trùng tăng số lượng ,nên phải lặp
                    $sl += $so_luong;
                    $mau .= $mau_sac;
                    $dl .= $dung_luong;
                }
            }
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                if ($_SESSION['cart'][$i]['id_sp'] == $id_sp) {
                    //  nếu  cart có id sp bằng $id 
                    $_SESSION['cart'][$i]['so_luong'] += $sl;
                    $_SESSION['cart'][$i]['mau_sac'] .= $mau;
                    $_SESSION['cart'][$i]['dung_luong'] .= $dl;

                }
            }
        }
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i]['id_sp'] == $id_sp) {
                $array = explode("/", $_SESSION['cart'][$i]['mau_sac']);//tách chuỗi màu thành mảng 
                $array = (array_unique($array));//loại bỏ phần tử trùng trong mảng
                $mau_sac = (implode("/", $array));//chuyển mảng thành chuỗi
                $_SESSION['cart'][$i]['mau_sac']=$mau_sac;//gán lại màu sắc cho session
                // dung lượng
                $array = explode("/", $_SESSION['cart'][$i]['dung_luong']);//tách chuỗi dung lượng thành mảng 
                $array = (array_unique($array));//loại bỏ phần tử trùng trong mảng
                $dung_luong = (implode("/", $array));//chuyển mảng thành chuỗi
                $_SESSION['cart'][$i]['dung_luong']=$dung_luong;//gán lại dung lượng sắc cho session
            
            }
        }
        var_dump($_SESSION['cart']);
    }
}
