<?php
require_once 'pdo.php';
//hàm insert thông báo 
    function thong_bao_Insert($title,$noi_dung,$ngay_thong_bao){
        $sql="INSERT INTO thong_bao_user(title,noi_dung,ngay_thong_bao) value(?,?,?)";
        return pdo_execute2($sql,$title,$noi_dung,$ngay_thong_bao);
    }
    //hàm insert thông báo  chi tiết
    function thong_bao_Detail_Insert($id_thong_bao,$id_kh,$trang_thai){
        $sql="INSERT INTO thong_bao_user_detail(id_thong_bao,id_kh,trang_thai) value(?,?,?)";
        return pdo_execute($sql,$id_thong_bao,$id_kh,$trang_thai);
    }
    
    //hàm truy vấn tất cả bảng thông báo theo id_kh  detail,còn chiện status 0 ,1 tính sau
    function thong_bao_detail_Query_All($id_kh){
        $sql="SELECT * FROM `thong_bao_user_detail` INNER JOIN thong_bao_user
        ON thong_bao_user.id_thong_bao=thong_bao_user_detail.id_thong_bao where id_kh=? order by thong_bao_user.id_thong_bao desc";
        return pdo_query($sql,$id_kh);

    }
    //hàm truy vấn 3 thông báo bảng thông báo theo id_kh  detail,còn chiện status 0 ,1 tính sau
    function thong_bao_detail_Query_Top3($id_kh){
        $sql="SELECT * FROM `thong_bao_user_detail` INNER JOIN thong_bao_user
        ON thong_bao_user.id_thong_bao=thong_bao_user_detail.id_thong_bao where id_kh=? order by thong_bao_user_detail.id_thong_bao desc limit 3";
        return pdo_query($sql,$id_kh);

    }
    //hàm truy vấn thông báo mới trạng thái =0
    function thong_bao_user_detail_Query_New($id_kh){
        $sql="SELECT * FROM `thong_bao_user_detail` INNER JOIN thong_bao_user
        ON thong_bao_user.id_thong_bao=thong_bao_user_detail.id_thong_bao where id_kh=? and thong_bao_user_detail.trang_thai =0 ORDER by thong_bao_user_detail.id_thong_bao desc";
        return pdo_query($sql,$id_kh);
    }
    // hàm update thông báo sang trạng thái đã xem , 1
    function thong_bao_Update_Da_Xem($trang_thai, $id_thong_bao_detail){
        $sql="UPDATE thong_bao_user_detail SET trang_thai =? where id_thong_bao_detail=?";
        return pdo_execute($sql, $trang_thai, $id_thong_bao_detail);
    }
    //hàm xoá thông báo thei id 
    function thong_bao_Detail_Delete_Id($id_kh,$id_thong_bao){
        $sql=" DELETE FROM thong_bao_user_detail where id_thong_bao_detail=? and id_kh=?";
        return pdo_execute($sql, $id_thong_bao,$id_kh);
    }

    
?>