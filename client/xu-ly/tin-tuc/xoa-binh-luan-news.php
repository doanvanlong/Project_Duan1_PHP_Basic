<?php
    require_once '../../../model/binh_luan_news.php';
    if(isset($_POST['id_bl_news_xoa'])){
       $id_bl_news_xoa = $_POST['id_bl_news_xoa'];
       binh_luan_news_Delete($id_bl_news_xoa);
       echo 1;
    }
?>