<?php
require_once 'pdo.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
// hàm insert bình luận news
function binh_luan_news_Insert($id_kh, $id_bai_viet,$noi_dung,$ngay_bl){
    $sql="INSERT INTO binh_luan_news(id_kh,id_bai_viet,noi_dung,ngay_bl) values(?,?,?,?)";
    return pdo_execute($sql, $id_kh, $id_bai_viet,$noi_dung,$ngay_bl);
}
//hàm truy vấn top 3 bình luận news
function binh_luan_news_Query_Top3(){
    $sql="SELECT * FROM binh_luan_news order by  id_bl_news desc limit 3";
    return pdo_query($sql);
}
// hàm xoá binh_luan_news
function binh_luan_news_Delete($id_bl_news){
    $sql="DELETE FROM binh_luan_news where id_bl_news=?";
    return pdo_execute($sql, $id_bl_news);
}

?>