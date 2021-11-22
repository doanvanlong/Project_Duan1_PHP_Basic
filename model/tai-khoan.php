<?php
    require_once 'pdo.php'; //gọi thư viện pdo
    // hàm kiểm tra Username có tồn tại trong DB chưa
    function username_Check_DB($username){
        $sql="SELECT count(username) FROM `khach_hang` WHERE username=?";
        return pdo_query_value($sql, $username)[0];
        // trả về số record kiểu mảng nên phải [0]
    }

    //hàm insert khách hàng đăng ký tài khoản bằng username pass
    function khach_hang_Insert($username, $password,$hoten){
        $sql= "INSERT INTO khach_hang(username,mat_khau,ho_ten) values(?,?,?)";
        return pdo_execute($sql, $username,$password,$hoten);
    }

    //hàm kiểm tra đăng nhập  ,username,pass có trung trong DB ko
    function khach_hang_Isset_DB($username,$password){
        $sql="SELECT * FROM `khach_hang` where username=? and mat_khau=?";
        return pdo_query_one($sql, $username,$password);
        // trả về số record
    }
    // hàm query one 1 khách hàng
    function khach_hang_Query_One($id_kh){
        $sql="SELECT * FROM khach_hang where id_kh =?";
        return pdo_query_one($sql,$id_kh);
    }
?>