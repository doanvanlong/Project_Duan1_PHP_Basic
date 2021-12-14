<?php
require_once '../../../model/tai-khoan.php';
require_once '../../../global.php';
if (isset($_POST['ho_ten']) && isset($_POST['username'])) {
    $ho_ten = $_POST['ho_ten'];
    $username = $_POST['username'];
    $id_kh = $_POST['id_kh'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    $email = $_POST['email'];
    $info_kh = khach_hang_Query_One($id_kh);
    $hinh_anh = $_FILES['hinh_anh']['name'];
    if ($hinh_anh == "") {
        //ko có ảnh
        if (isset($_POST['hidden_changePass']) && $_POST['hidden_changePass'] == "on") {
            // echo 1; có đổi pass
            $mat_khau_cu = $_POST['mat_khau'];
            $mat_khau_moi = $_POST['mat_khau_moi'];
            $mat_khau_moi2 = $_POST['re_mat_khau_moi'];
            if ($mat_khau_cu == $info_kh['mat_khau']) {
                // echo 1;
                if ($mat_khau_moi == "" || strlen($mat_khau_moi) < 8) {
                    if ($mat_khau_moi == "") {
                        echo "Mật khẩu  không được rỗng";
                    } else {
                        echo "Mật khẩu ít nhất 8 ký tự";
                    }
                } else {
                    if ($mat_khau_moi == $mat_khau_moi2) {
                        // ok
                        $hinh_anh = $info_kh['hinh_anh'];
                        $dia_chi = $info_kh['dia_chi'];
                        khach_hang_Update_profile($id_kh, $mat_khau_moi, $ho_ten, $hinh_anh, $so_dien_thoai, $email, $dia_chi);
                        echo 1;
                    } else {
                        echo "Vui lòng xác nhận đúng mật khẩu";
                    }
                }
            } else {
                // echo 0; ko cho up
                echo "Vui lòng nhập đúng mật khẩu cũ của bạn";
            }
        } else {
            // echo 0; ko có đổi pass
            $mat_khau = $info_kh['mat_khau'];
            $hinh_anh = $info_kh['hinh_anh'];
            $dia_chi = $info_kh['dia_chi'];
            khach_hang_Update_profile($id_kh, $mat_khau, $ho_ten, $hinh_anh, $so_dien_thoai, $email, $dia_chi);
            echo 1;
        }
    } else {
        // /có ảnh
        $hinh_anh = $_FILES['hinh_anh']['name'];
        move_uploaded_file($_FILES['hinh_anh']['tmp_name'], '../../../admin/xu-ly/khach-hang/uploads/' . $hinh_anh);
        if (isset($_POST['hidden_changePass']) && $_POST['hidden_changePass'] == "on") {
            // echo 1; có đổi pass
            // echo 1; có đổi pass
            $mat_khau_cu = $_POST['mat_khau'];
            $mat_khau_moi = $_POST['mat_khau_moi'];
            $mat_khau_moi2 = $_POST['re_mat_khau_moi'];
            if ($mat_khau_cu == $info_kh['mat_khau']) {
                // echo 1;
                if ($mat_khau_moi == "" || strlen($mat_khau_moi) < 8) {
                    if ($mat_khau_moi == "") {
                        echo "Mật khẩu  không được rỗng";
                    } else {
                        echo "Mật khẩu ít nhất 8 ký tự";
                    }
                } else {
                    if ($mat_khau_moi == $mat_khau_moi2) {
                        // ok

                        $dia_chi = $info_kh['dia_chi'];
                        khach_hang_Update_profile($id_kh, $mat_khau_moi, $ho_ten, $hinh_anh, $so_dien_thoai, $email, $dia_chi);
                        echo 1;
                    } else {
                        echo "Vui lòng xác nhận đúng mật khẩu";
                    }
                }
            } else {
                // echo 0; ko cho up
                echo "Vui lòng nhập đúng mật khẩu cũ của bạn";
            }
        } else {
            // echo 0; ko có đổi pass
            // echo 0; ko có đổi pass
            $mat_khau = $info_kh['mat_khau'];
            $dia_chi = $info_kh['dia_chi'];
            khach_hang_Update_profile($id_kh, $mat_khau, $ho_ten, $hinh_anh, $so_dien_thoai, $email, $dia_chi);
            echo 1;
        }
    }
}
if (isset($_POST['ho_ten'])) {
    $ho_ten = $_POST['ho_ten'];
    $id_kh = $_POST['id_kh'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    $sql="UPDATE khach_hang SET ho_ten =? ,so_dien_thoai =? where id_kh=?";
    pdo_execute($sql,$ho_ten,$so_dien_thoai,$id_kh);    
   echo 1;
}
