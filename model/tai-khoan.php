<?php
require_once 'pdo.php'; //gọi thư viện pdo
// hàm kiểm tra Username có tồn tại trong DB chưa
function username_Check_DB($username)
{
    $sql = "SELECT count(username) FROM `khach_hang` WHERE username=?";
    return pdo_query_value($sql, $username)[0];
    // trả về số record kiểu mảng nên phải [0]
}

//hàm insert khách hàng đăng ký tài khoản bằng username pass
function khach_hang_Insert($username, $password, $hoten)
{
    $sql = "INSERT INTO khach_hang(username,mat_khau,ho_ten) values(?,?,?)";
    return pdo_execute($sql, $username, $password, $hoten);
}

//hàm kiểm tra đăng nhập  ,username,pass có trung trong DB ko
function khach_hang_Isset_DB($username, $password)
{
    $sql = "SELECT * FROM `khach_hang` where username=? and mat_khau=?";
    return pdo_query_one($sql, $username, $password);
    // trả về số record
}
// hàm query one 1 khách hàng
function khach_hang_Query_One($id_kh)
{
    $sql = "SELECT * FROM khach_hang where id_kh =?";
    return pdo_query_one($sql, $id_kh);
}
//check keyup username
function check_username($name_username)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE username = ?";
    return pdo_query_value($sql, $name_username)[0];
}
//Thêm mới khách hàng bằng admin
function add_user($username, $password, $name, $phone, $email, $address, $avt_user)
{
    $sql = "INSERT INTO `khach_hang`(`username`, `mat_khau`, `ho_ten`, `hinh_anh`, `so_dien_thoai`, `email`, `dia_chi`) VALUES ('$username','$password','$name', '$avt_user','$phone', '$email','$address');";
    if ($avt_user == "") {
        $sql = "INSERT INTO `khach_hang`(`username`, `mat_khau`, `ho_ten`, `so_dien_thoai`, `email`, `dia_chi`) VALUES ('$username','$password','$name', '$phone', '$email','$address');";
    }
    pdo_execute($sql);
}

//cập nhật thông tin khách hàng
function update_user($id_user, $username, $password, $name, $phone, $email, $address, $avt_user)
{
    if ($avt_user == "") {
        $sql = "UPDATE `khach_hang` SET `username`='$username', `mat_khau`='$password', `ho_ten`='$name', `so_dien_thoai`='$phone', `email`='$email', `dia_chi`='$address' WHERE `id_kh` = '$id_user';";
    } else {
        $sql = "UPDATE `khach_hang` SET `username`='$username', `mat_khau`='$password', `ho_ten`='$name', `hinh_anh`='$avt_user', `so_dien_thoai`='$phone', `email`='$email', `dia_chi`='$address' WHERE `id_kh` = '$id_user';";
    }
   return pdo_execute($sql);
}
//Lấy danh sách khách hàng
function list_user()
{
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}
//Xoá một trường khách Hàng
function delete_one_user($id_user)
{
    $sql = "DELETE FROM khach_hang WHERE id_kh = ?";
    pdo_execute($sql, $id_user);
}
//Xoá nhiều khách hàng
function delete_multi_user($list)
{
    $sql = "DELETE FROM khach_hang WHERE id_kh = ?";
    pdo_execute($sql, $list);
}
