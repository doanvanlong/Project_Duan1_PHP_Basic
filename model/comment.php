<?php
    require_once 'pdo.php';
    //lấy ds comment sản phẩm
    function list_cmt(){
        $sql = "SELECT binh_luan_pro.id_bl_pro AS ID_CMT,san_pham.id_sp AS ID_Product, san_pham.ten_sp AS Name_Product, binh_luan_pro.noi_dung AS Content, binh_luan_pro.ngay_bl AS Date,khach_hang.id_kh AS ID_User,khach_hang.ho_ten AS Ho_Ten, khach_hang.hinh_anh AS AVT FROM binh_luan_pro INNER JOIN khach_hang ON binh_luan_pro.id_kh = khach_hang.id_kh INNER JOIN san_pham ON binh_luan_pro.id_sp = san_pham.id_sp ORDER BY ID_CMT DESC;";
       return pdo_query($sql);
    }
    //lấy 1 comment
    function list_cmt_one($id){
        $sql = "SELECT binh_luan_pro.id_bl_pro AS ID_CMT,san_pham.id_sp AS ID_Product, san_pham.ten_sp AS Name_Product, binh_luan_pro.noi_dung AS Content, binh_luan_pro.ngay_bl AS Date,khach_hang.id_kh AS ID_User,khach_hang.ho_ten AS Ho_Ten, khach_hang.hinh_anh AS AVT FROM binh_luan_pro INNER JOIN khach_hang ON binh_luan_pro.id_kh = khach_hang.id_kh INNER JOIN san_pham ON binh_luan_pro.id_sp = san_pham.id_sp WHERE binh_luan_pro.id_bl_pro = $id ORDER BY ID_CMT DESC;";
       return pdo_query($sql);
    }
    //ds comment bài viết
    function list_cmt_post(){
        $sql = "SELECT binh_luan_news.id_bl_news AS ID_Cmt_News, binh_luan_news.id_kh AS ID_User, binh_luan_news.id_bai_viet AS ID_Post, bai_viet.tieu_de_news AS Name_Post, binh_luan_news.noi_dung AS Content, binh_luan_news.ngay_bl AS Date, khach_hang.ho_ten AS ho_ten, khach_hang.hinh_anh AS avt FROM `binh_luan_news` INNER JOIN khach_hang ON binh_luan_news.id_kh = khach_hang.id_kh INNER JOIN bai_viet ON binh_luan_news.id_bai_viet = bai_viet.id_bai_viet ORDER BY ID_Cmt_News DESC;";
        return pdo_query($sql);
    }
    //xoá bình luận bài viết
    function delete_cmt_news($id){
        $sql="DELETE FROM binh_luan_news where id_bl_news=?";
        pdo_execute($sql, $id);
    }
    //xoá bình luận sản phẩm
    function delete_cmt_product($id){
        $sql="DELETE FROM binh_luan_pro WHERE id_bl_pro=?";
        pdo_execute($sql, $id);
    }
    //trả lời bình luận
    function reply_comment($id_bl_pro, $id_admin, $noi_dung, $date){
        $sql = "INSERT INTO `reply_binh_luan_pro`(`id_bl_pro`, `id_kh`, `noi_dung`, `ngay_reply`) VALUES (?,?,?,?)";
        pdo_execute($sql,$id_bl_pro, $id_admin, $noi_dung, $date);
    }
?>