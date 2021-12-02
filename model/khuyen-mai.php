<?php
require_once 'pdo.php';
// hàm insert khuyến mãi  chung
function khuyen_mai_Insert($ten_chuong_trinh,$id_loai_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$so_luot_su_dung,$tinh_trang){
    $sql="INSERT INTO khuyen_mai(ten_chuong_trinh,id_loai_khuyen_mai,ngay_bat_dau,ngay_ket_thuc,so_luot_su_dung,tinh_trang)
     values(?,?,?,?,?,?)";
    return pdo_execute2($sql,$ten_chuong_trinh,$id_loai_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$so_luot_su_dung,$tinh_trang);
}
//hàm DELETE khuyễn mãi theo ID
function khuyen_mai_Delete_By_Id($id_km) {
    $sql="DELETE FROM khuyen_mai WHERE id_khuyen_mai =?";
    return pdo_execute($sql, $id_km);
}
//hàm truy vấn tất cả khuyến mãi để lấy ngày kết thúc
function khuyen_mai_Query_Id_KM_Date_End(){
    $sql="SELECT khuyen_mai.id_khuyen_mai,khuyen_mai.ngay_ket_thuc FROM `khuyen_mai` ";
    return pdo_query($sql);
}

//Hàm update tình trangj  Khuyến mãi thành 0 , là đã kết thúc
function khuyen_mai_Update_Tinh_Trang_Ket_Thuc($id_khuyen_mai){
    $sql="UPDATE `khuyen_mai` SET tinh_trang = 0 where id_khuyen_mai =?";
    return pdo_execute($sql,$id_khuyen_mai);
}

//hàm update : Kết thúc 1 chương trình kM  từ 1 => 0
function khuyen_mai_Update_Ket_Thuc_KM($id_km,$date_end){
    $sql="UPDATE khuyen_mai SET tinh_trang =0,ngay_ket_thuc=? where id_khuyen_mai =?";
    return pdo_execute($sql,$date_end, $id_km);
}



// GIẢM GIÁ 

//hàm insert giảm giá 
function giam_gia_Insert($id_km,$id_sp, $id_loai_giam_gia_tien,$muc_giam){
    $sql="INSERT INTO giam_gia(id_khuyen_mai,id_sp,id_loai_giam_gia_tien,muc_giam) values(?,?,?,?)";
    return pdo_execute($sql, $id_km,$id_sp, $id_loai_giam_gia_tien,$muc_giam);
}

//hàm truy vấn tất cả sp trong giảm giá có trạng thái đang CHạy

function giam_gia_Query_All_Sp(){
    $sql="SELECT * FROM `giam_gia` INNER JOIN khuyen_mai 
    on khuyen_mai.id_khuyen_mai =giam_gia.id_khuyen_mai
    where khuyen_mai.tinh_trang =1 ";
    return pdo_query($sql);
}

//hàm  truy vấn cho trang liệt kê giảm giá đang chạy

//  thuộc chương trình giảm giá có tình trạng là 1 đang chạy
function giam_gia_Query_By_Id_Km_Dang_Dien_Ra($id_khuyen_mai){
    $sql="SELECT * FROM `giam_gia` INNER JOIN khuyen_mai ON
     giam_gia.id_khuyen_mai=khuyen_mai.id_khuyen_mai INNER JOIN san_pham ON san_pham.id_sp =giam_gia.id_sp
     where khuyen_mai.tinh_trang=1 and giam_gia.id_khuyen_mai=?";
    return pdo_query($sql,$id_khuyen_mai);
}
// hàm truy vấn  bảng giảm giá : =>lấy được id khuyến mãi có tình trạng khuyễn mãi đang chạy
function giam_gia_Select_Ok_Id_Km_Dang_Dien_Ra(){
    $sql="SELECT DISTINCT(khuyen_mai.id_khuyen_mai) FROM `giam_gia` INNER JOIN khuyen_mai
    on khuyen_mai.id_khuyen_mai =giam_gia.id_khuyen_mai
    where khuyen_mai.tinh_trang=1";
    return pdo_query($sql);
}

//  thuộc chương trình giảm giá có tình trạng là 0 đã kết thúc
function giam_gia_Query_By_Id_Km_Da_Ket_Thuc($id_khuyen_mai){
    $sql="SELECT * FROM `giam_gia` INNER JOIN khuyen_mai ON
     giam_gia.id_khuyen_mai=khuyen_mai.id_khuyen_mai INNER JOIN san_pham ON san_pham.id_sp =giam_gia.id_sp
     where khuyen_mai.tinh_trang=0 and giam_gia.id_khuyen_mai=?";
    return pdo_query($sql,$id_khuyen_mai);
}
// hàm truy vấn  bảng giảm giá : =>lấy được id khuyến mãi có tình trạng khuyễn mãi Kết thúc
function giam_gia_Select_Ok_Id_Km_Da_Ket_Thuc(){
    $sql="SELECT DISTINCT(khuyen_mai.id_khuyen_mai) FROM `giam_gia` INNER JOIN khuyen_mai
    on khuyen_mai.id_khuyen_mai =giam_gia.id_khuyen_mai
    where khuyen_mai.tinh_trang=0";
    return pdo_query($sql);
}




// Trang UPDATE GIẢM GIÁ



//hàm truy vấn thông tin 1 kM theo id KM 
function khuyen_mai_Query_One_By_Id_Km($id_khuyen_mai){
    $sql="SELECT * FROM khuyen_mai WHERE id_khuyen_mai=?";
    return pdo_query_one($sql, $id_khuyen_mai);
}


// Hàm lấy tất cả thông tin 1 sp trong bảng giảm giá theo di khuyen_mai
function giam_gia_Query_Info_Sp_By_Id_Km($id_km){
    $sql="SELECT * FROM `giam_gia` INNER JOIN san_pham 
    ON giam_gia.id_sp=san_pham.id_sp
    where giam_gia.id_khuyen_mai=?";
    return pdo_query($sql, $id_km);
}
//hàm delete Sp trong bảng giảm giá Lấy id giảm giá
// 1 sp tương ứng vs 1 id giảm giá ,vì vậy xoá id giảm giá là xoá sp đó
function giam_gia_Delete_Id_Giam_Gia($id_giam_gia){
    $sql="DELETE FROM giam_gia where id_giam_gia=?";
    return pdo_execute($sql, $id_giam_gia);
}
//hàm Update khuyến mãi
function khuyen_mai_Update($id_khuyen_mai,$ten_chuong_trinh,$id_loai_khuyen_mai,$ngay_ket_thuc,$so_luot_su_dung){
    $sql="UPDATE khuyen_mai SET ten_chuong_trinh=? ,id_loai_khuyen_mai=?,ngay_ket_thuc=?,so_luot_su_dung=?
     where id_khuyen_mai=?";
     return pdo_execute($sql, $ten_chuong_trinh,$id_loai_khuyen_mai,$ngay_ket_thuc,$so_luot_su_dung,$id_khuyen_mai);
}

//hàm xoá tất cả giảm giá theo id khuyến mãi
function giam_gia_Delete_By_Id_Km($id_khuyen_mai){
    $sql="DELETE FROM giam_gia where id_khuyen_mai=?";
    return pdo_execute($sql, $id_khuyen_mai);
}