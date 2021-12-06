<?php
session_start();
require_once '../../../../model/san-pham.php';
require_once '../../../../model/khuyen-mai.php';
require_once '../../../../model/danh-muc.php';
// adđ vào session add giảm giá
if (!isset($_SESSION['add-giam-gia'])) {
    $_SESSION['add-giam-gia'] = [];
}
if (isset($_POST['mang_giam_gia_id_sp'])) {
    $mang_id_sp = $_POST['mang_giam_gia_id_sp'];
    foreach ($mang_id_sp as $id_sp) {
        if (in_array($id_sp, $_SESSION['add-giam-gia']) != true) {
            array_push($_SESSION['add-giam-gia'], $id_sp);
        }
    }
    echo 1;
}

//add tất cả sp vào giảm giá ,khi click vào chọn tất cả
if (isset($_POST['chon_all_sp'])) {
    if (isset($_SESSION['add-giam-gia']) && count($_SESSION['add-giam-gia']) > 0) {
        unset($_SESSION['add-giam-gia']); //xoá  để add all sp
    }
    $_SESSION['add-giam-gia'] = [];
    // lấy tất cả sp add vào session
    $list_sp = san_pham_QueryAll();
    $list_giam_gia = giam_gia_Query_All_Sp(); //truy vấn thèn này để biết sp có nằm trong km chưa
    foreach ($list_sp as $sp) {
        if (in_array($sp['id_sp'], array_column($list_giam_gia, 'id_sp')) != true) {
            array_push($_SESSION['add-giam-gia'], $sp['id_sp']);
            // adđ vào vì nó chưa có KM
        }
    }
    echo 1;
}

//xoá sản phẩm trong session
if (isset($_POST['id_delete_sp'])) {
    $id_sp = $_POST['id_delete_sp'];
    for ($i = 0; $i < count($_SESSION['add-giam-gia']); $i++) {
        if ($_SESSION['add-giam-gia'][$i] == $id_sp) {
            try {
                unset($_SESSION['add-giam-gia'][$i]);
                $_SESSION['add-giam-gia'] = array_values($_SESSION['add-giam-gia']);
                echo 1;
            } catch (Exception $e) {
                echo 0;
            }
        }
    }
}

//keyup số tiền giảm theo mức giảm giá và loại giảm
if (isset($_POST['keyup_so_tien_giam'])) {
    $loai_giam = $_POST['keyup_so_tien_giam'];
    $muc_giam = $_POST['muc_giam'];
    $list_gia = [];
    if ($loai_giam == 1) {
        //theo %
        foreach ($_SESSION['add-giam-gia'] as $sp) {
            $info_sp = san_pham_QueryOne($sp);
            $gia_sau_giam = ($info_sp['don_gia'] * (100 - $muc_giam) / 100);
            array_push($list_gia, ['id_sp' => $info_sp['id_sp'], 'gia_sau_giam' => $gia_sau_giam]);
        }

        echo json_encode($list_gia);
    } else {
        // theo số tiền
        foreach ($_SESSION['add-giam-gia'] as $sp) {
            $info_sp = san_pham_QueryOne($sp);
            $gia_sau_giam = ($info_sp['don_gia'] - $muc_giam);
            array_push($list_gia, ['id_sp' => $info_sp['id_sp'], 'gia_sau_giam' => $gia_sau_giam]);
        }

        echo json_encode($list_gia);
    }
}
//change_so_tien_giam theo mức giảm giá và Loại
if (isset($_POST['change_so_tien_giam'])) {
    $loai_giam = $_POST['change_so_tien_giam'];
    $muc_giam = $_POST['muc_giam'];
    $list_gia = [];
    if ($loai_giam == 1) {
        //theo %
        foreach ($_SESSION['add-giam-gia'] as $sp) {
            $info_sp = san_pham_QueryOne($sp);
            $gia_sau_giam = ($info_sp['don_gia'] * (100 - $muc_giam) / 100);
            array_push($list_gia, ['id_sp' => $info_sp['id_sp'], 'gia_sau_giam' => $gia_sau_giam]);
        }

        echo json_encode($list_gia);
    } else {
        // theo số tiền
        foreach ($_SESSION['add-giam-gia'] as $sp) {
            $info_sp = san_pham_QueryOne($sp);
            $gia_sau_giam = ($info_sp['don_gia'] - $muc_giam);
            array_push($list_gia, ['id_sp' => $info_sp['id_sp'], 'gia_sau_giam' => $gia_sau_giam]);
        }

        echo json_encode($list_gia);
    }
}

// hoàn tất  < add tất cả thông tin giảm giá vào DB rồi xoá session

if (isset($_POST['ten_ct_giam_gia'])) {
    $ten_ct = $_POST['ten_ct_giam_gia'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $id_loai_giam_gia = $_POST['loai_giam_gia_tien'];
    $id_loai_khuyen_mai = 1; // giảm giá sp
    $muc_giam_gia = $_POST['muc_giam'];
    $gioi_han = $_POST['gioi_han_dat_hang'];
    $date_start = explode("T", $date_start);
    $date_start = implode(" ", $date_start); //xữ lý giờ bên HTML
    $date_end = explode("T", $date_end);
    $date_end = implode(" ", $date_end); //xữ lý giờ bên HTML
    $tinh_trang = 1; //đang diễn ra
    try {
        // insert vào bảng khuyến mãi chung
        $id_km = khuyen_mai_Insert($ten_ct, $id_loai_khuyen_mai, $date_start, $date_end, $gioi_han, $tinh_trang);
        // sau đó insert cụ thể vào bảng giảm giá
            foreach ($_SESSION['add-giam-gia'] as $sp) {
                giam_gia_Insert($id_km, $sp, $id_loai_giam_gia, $muc_giam_gia);
            }
            unset($_SESSION['add-giam-gia']);
       
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}
