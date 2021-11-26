<?php
require_once 'pdo.php'; //gọi thư viện pdo
function list_news_category()
{
    $sql = "SELECT * FROM `danh_muc_news` ORDER BY `id_dm_news` ASC";
    $list_news_category = pdo_query($sql);
    return $list_news_category;
}

function check_category_news($keyup_ten_dm_tin_tuc)
{
    $sql = "SELECT count(*) FROM danh_muc_news WHERE ten_dm_news =?";
    return pdo_query_value($sql, $keyup_ten_dm_tin_tuc)[0];
}

function insert_news_category($name_dm_tin_tuc)
{
    $sql = ("INSERT INTO `danh_muc_news`( `ten_dm_news`) VALUES ('$name_dm_tin_tuc')");
    pdo_execute($sql);
}
function one_news_category($id_news_category)
{
    $sql = "SELECT * FROM `danh_muc_news` WHERE `id_dm_news` = ?";
    return pdo_query_one($sql, $id_news_category);
}
function list_category_news()
{
    $sql = "SELECT * FROM `danh_muc_news` ORDER BY `danh_muc_news`.`id_dm_news` ASC";
    return pdo_query($sql);
}
function update_news_category($id, $name_update_news_category)
{
    $sql = "UPDATE `danh_muc_news` SET `ten_dm_news`= '$name_update_news_category' WHERE `id_dm_news` = '$id'";
    pdo_execute($sql);
}
function delete_one_news_category($id)
{
    $sql = "DELETE FROM `danh_muc_news` WHERE `id_dm_news` = '$id'";
    pdo_execute($sql);
}
function delete_multi_news_category($list)
{
    $sql = "DELETE FROM `danh_muc_news` WHERE `id_dm_news` = ?";
    pdo_execute($sql, $list);
}
function insert_news($name_news_category, $name_news, $img_news, $mo_ta_news,$id_sp,$date)
{
    $sql = "INSERT INTO `bai_viet`(`id_dm_news`, `tieu_de_news`, `img_news`, `noi_dung`,`id_sp`,`ngay_post`) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $name_news_category, $name_news, $img_news, $mo_ta_news,$id_sp,$date);
}
function list_news()
{
    $sql = "SELECT * FROM `bai_viet`";
    return pdo_query($sql);
}
function one_news($id_news)
{
    $sql = "SELECT * FROM `bai_viet` WHERE `id_bai_viet` = ?";
    return pdo_query_one($sql, $id_news);
}
function update_news($id_news, $name_news_category_update, $name_news_update, $img_news_update, $mo_ta_news_update)
{
    if ($img_news_update != null) {
        $sql = "UPDATE `bai_viet` 
            SET `id_dm_news`= '$name_news_category_update',
                `tieu_de_news`= '$name_news_update',
                `img_news`= '$img_news_update',
                `noi_dung`= '$mo_ta_news_update' 
            WHERE `id_bai_viet` = '$id_news'";
    } else {
        $sql = "UPDATE `bai_viet` 
            SET `id_dm_news`= '$name_news_category_update',
                `tieu_de_news`= '$name_news_update',
                `noi_dung`= '$mo_ta_news_update' 
            WHERE `id_bai_viet` = '$id_news'";
    }
    pdo_execute($sql);
}
function delete_one_news($id_news){
    $sql = "DELETE FROM `bai_viet` WHERE `id_bai_viet` = ?";
    pdo_execute($sql, $id_news);
}
function delete_multi_news($list)
{
    $sql = "DELETE FROM `bai_viet` WHERE `id_bai_viet` = ?";
    pdo_execute($sql, $list);
}

//hàm truy vấn bài viết thuộc danh mục đánh giá trải nghiệm 9
function bai_viet_Query_By_Id_Sp_Thuoc_DM_Danh_Gia($id_sp){
    $sql="SELECT * FROM bai_viet where id_dm_news =9 and id_sp=?";
    return pdo_query($sql,$id_sp);
}

//hàm truy vấn tất cả bài viết thuộc danh mục tin khuyến mãi
function bai_viet_Query_Danh_Muc_KM(){
    $sql="SELECT * FROM bai_viet where id_dm_news =11";
    return pdo_query($sql);
}
// hàm truy vấn top 2 tin khuyến mãi mới
function bai_viet_Query_Top2_Km(){
    $sql="SELECT * FROM bai_viet where id_dm_news=11 order by id_bai_viet desc  limit 2";
    return pdo_query($sql);
}