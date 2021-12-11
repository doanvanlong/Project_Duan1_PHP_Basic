<?php
require_once 'pdo.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
    // hàm insert bình luận sản phẩm
    function binh_luan_pro_Insert($id_kh,$id_sp,$noi_dung,$ngay_bl){
        $sql="INSERT INTO binh_luan_pro (id_kh,id_sp,noi_dung,ngay_bl) values(?,?,?,?)";
        return pdo_execute($sql, $id_kh, $id_sp, $noi_dung, $ngay_bl);
    }
    // hàm truy vấn top 5 bình luận theo sp
    function binh_luan_pro_Query_Top5_By_Id($id_sp){
        $sql="SELECT * FROM binh_luan_pro WHERE id_sp=? order by id_bl_pro desc limit 5";
        return pdo_query($sql, $id_sp);
    }

    //hàm xoá comment chính
    function binh_luan_pro_Delete($id_bl_pro){
        $sql="DELETE FROM binh_luan_pro WHERE id_bl_pro=?";
        return pdo_execute($sql, $id_bl_pro);
    }

    //hàm đếm tổng số bình luận của san_pham
    function binh_luan_pro_Count($id_sp){
        $sql="SELECT count(*) FROM binh_luan_pro where id_sp=?";
        return pdo_query_value($sql,$id_sp)[0];
    }

    // Bình luận REPLY

    // hàm thêm mới bình luận reply
    function binh_luan_pro_Reply_Insert($id_bl_pro,$id_kh,$noi_dung,$date){
        $sql="INSERT INTO reply_binh_luan_pro(id_bl_pro,id_kh,noi_dung,ngay_reply) values(?,?,?,?)";
        return pdo_execute($sql, $id_bl_pro, $id_kh, $noi_dung,$date);
    }
    // hàm truy vấn tất cả bình luận reply theo 1 sp và 1 id khách hàng
    function binh_luan_pro_Reply_Query_Top5_By_Id_Blpro($id_bl_pro){
        $sql="SELECT * FROM reply_binh_luan_pro where id_bl_pro=? ";
        return pdo_query($sql,$id_bl_pro);
    }
    // hàm xoá comment reply
    function binh_luan_pro_Reply_Delete($id_reply){
        $sql="DELETE FROM reply_binh_luan_pro where id_reply=?";
        return pdo_execute($sql, $id_reply);
    }
   
?>