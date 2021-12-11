<?php
require_once 'pdo.php'; //gọi thư viện pdo

// hàm thêm mới danh mục chính
function danh_muc_chinh_Insert($ten_dm_pro)
{
    $sql = "INSERT INTO danh_muc_pro(ten_dm_pro) values(?)";
    return pdo_execute($sql, $ten_dm_pro);
}
//hàm kiểm tra sự tồn tại của tên danh mục  chính
function danh_muc_chinh_Isset($keyup_dm_chinh)
{
    // trả về (theo mảng) số record trong bảng 
    $sql = "SELECT count(*) FROM danh_muc_pro where ten_dm_pro = ?"; //dùng toán tử = so sánh tuyệt đối
    return pdo_query_value($sql, $keyup_dm_chinh)[0];
    // vì trả về mảng nên return mảng số 0 chính là value
}
//hàm truy vấn tất cả danh mục chính
function danh_muc_chinh_QueryAll()
{
    $sql = "SELECT * FROM danh_muc_pro ";
    return pdo_query($sql);
}

// hàm truy vấn 1 danh mục chính
function danh_muc_chinh_QueryOne($id_dm_pro)
{
    $sql = "SELECT * FROM danh_muc_pro where id_dm_pro = ?";
    return pdo_query_one($sql,$id_dm_pro);
}

// hàm truy vấn 1 danh mục con
function danh_muc_con_QueryOne($id_sub_dm_pro)
{
    $sql = "SELECT * FROM sub_danh_muc_pro where id_sub_dm_pro = ?";
    return pdo_query_one($sql,$id_sub_dm_pro);
}
// hàm truy vấn all danh mục phụ kiện
function danh_muc_con_Query_Phu_Kien()
{
    $sql = "SELECT * FROM sub_danh_muc_pro where id_dm_pro = 48";
    return pdo_query($sql);
}
// hàm thêm mới danh mục con
function danh_muc_con_Insert($ten_sub_dm_pro, $id_dm_pro)
{
    $sql = "INSERT INTO sub_danh_muc_pro(ten_sub_dm_pro,id_dm_pro) values(?,?)";
    return pdo_execute($sql, $ten_sub_dm_pro, $id_dm_pro);
}
//hàm kiểm tra sự tồn tại của tên danh mục  con
function danh_muc_con_Isset($keyup_dm_con)
{
    // trả về (theo mảng) số record trong bảng 
    $sql = "SELECT count(*) FROM sub_danh_muc_pro where ten_sub_dm_pro = ?"; //dùng toán tử = so sánh tuyệt đối
    return pdo_query_value($sql, $keyup_dm_con)[0];
    // vì trả về mảng nên return mảng số 0 con là value
}

//hàm truy vấn tất cả danh mục con
function danh_muc_con_QueryAll()
{
    $sql = "SELECT * FROM sub_danh_muc_pro ";
    return pdo_query($sql);
}

//hàm delete danh mục chính 
function danh_muc_pro_Delete($id_dm_pro)
{
    $sql = "DELETE FROM danh_muc_pro where id_dm_pro =?";
    return pdo_execute($sql, $id_dm_pro);
}


//hàm delete danh mục con
function sub_danh_muc_pro_Delete($id_sub_dm_pro)
{
    $sql = "DELETE FROM sub_danh_muc_pro where id_sub_dm_pro =?";
    return pdo_execute($sql, $id_sub_dm_pro);
}
//hàm select 1  danh mục chính theo id danh mục chính
function danh_muc_pro_Select_by_id_dm_pro($id_dm_pro)
{
    $sql="SELECT * FROM danh_muc_pro where id_dm_pro =?";
    return pdo_query_one($sql,$id_dm_pro);
}

//hàm update danh mục chính 
function danh_muc_chinh_Update($id_dm_pro,$ten_dm_pro){
    $sql="UPDATE danh_muc_pro SET ten_dm_pro = ? where id_dm_pro =? ";
    return pdo_query($sql, $ten_dm_pro,$id_dm_pro);
}

//hàm update danh mục con
function danh_muc_con_Update($id_sub_dm_pro,$ten_sub_dm_pro,$id_dm_pro){
    $sql="UPDATE sub_danh_muc_pro SET ten_sub_dm_pro = ?,id_dm_pro =? where id_sub_dm_pro =? ";
    return pdo_query($sql, $ten_sub_dm_pro,$id_dm_pro,$id_sub_dm_pro);
}

// Hàm liệt kê danh mục con theo danh mục chính
function danh_muc_con_Select_by_id_dm_chinh($id_dm_pro){
    $sql="SELECT * FROM sub_danh_muc_pro where id_dm_pro =?";
    return pdo_query($sql, $id_dm_pro); 
}


?>