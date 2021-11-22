<?php
    require_once 'pdo.php'; //gọi thư viện pdo
    function list_news_category(){
        $sql = "SELECT * FROM `danh_muc_news` ORDER BY `id_dm_news` ASC";
        $list_news_category = pdo_query($sql);
        return $list_news_category;
    }

    function check_category_news($keyup_ten_dm_tin_tuc){
        $sql="SELECT count(*) FROM danh_muc_news WHERE ten_dm_news =?";
        return pdo_query_value($sql, $keyup_ten_dm_tin_tuc)[0];
    }

    function insert_news_category($name_dm_tin_tuc){
        $sql = ("INSERT INTO `danh_muc_news`( `ten_dm_news`) VALUES ('$name_dm_tin_tuc')");
        pdo_execute($sql);
    }
    function one_news_category($id_news_category){
        $sql = "SELECT * FROM `danh_muc_news` WHERE `id_dm_news` = ?";
        return pdo_query_one($sql, $id_news_category);
    }
    function update_news_category($id, $name_update_news_category){
        $sql = "UPDATE `danh_muc_news` SET `ten_dm_news`= '$name_update_news_category' WHERE `id_dm_news` = '$id'";
        pdo_execute($sql);
    }
    function delete_one_news_category($id){
        $sql = "DELETE FROM `danh_muc_news` WHERE `id_dm_news` = '$id'";
        pdo_execute($sql);
    }
    function delete_multi_news_category($list){
        $sql = "DELETE FROM `danh_muc_news` WHERE `id_dm_news` = ?";
        pdo_execute($sql, $list);
    }
    function insert_news($name_news_category,$name_news,$img_news,$mo_ta_news){
        $sql = "INSERT INTO `bai_viet`(`id_dm_news`, `tieu_de_news`, `img_news`, `noi_dung`) VALUES (?,?,?,?)";
        pdo_execute($sql,$name_news_category,$name_news,$img_news,$mo_ta_news);
    }
?>