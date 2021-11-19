<?php
require_once 'pdo.php'; //gọi thư viện pdo
// hàm thêm sản phẩm
function san_pham_Insert($id_dm_pro,$id_sub_dm_pro,$ten_sp,$hinh_anh,$don_gia,$so_luong,$ngay_nhap,$mo_ta){
    $sql="INSERT INTO san_pham(id_dm_pro,id_sub_dm_pro,ten_sp,hinh_anh,don_gia,so_luong,ngay_nhap,mo_ta) values(?,?,?,?,?,?,?,?)";
    return pdo_execute2($sql, $id_dm_pro, $id_sub_dm_pro, $ten_sp,$hinh_anh,$don_gia,$so_luong,$ngay_nhap,$mo_ta);
}
// hàm thêm màu và hình ảnh  cho sản phẩm điện thoại 
function san_pham_Insert_Color_Img($id_sp,$ten_mau,$hinh_anh){
    $sql="INSERT INTO mau_sac_phone(id_sp,ten_mau,hinh_anh) values(?,?,?)";
return pdo_execute($sql, $id_sp,$ten_mau,$hinh_anh);

}
// hàm kiểm tra tên sản phẩm có tồn tại DB Chưa
function san_pham_Isset_DB($id_sp){
    $sql="SELECT count(*) FROM san_pham WHERE ten_sp =?";
    return pdo_query_value($sql, $id_sp)[0];
}
// hàm thêm cấu hình cho điện thoại
function san_pham_Insert_Cau_hinh($id_sp,$man_hinh,$camera_sau,$camera_selfie,$ram,$rom,$cpu,$dung_luong_pin,$the_sim,$he_dieu_hanh,$xuat_xu){
    $sql="INSERT INTO cau_hinh_phone(id_sp,man_hinh,camera_sau,camera_selfie,ram,rom,cpu,dung_luong_pin,the_sim,he_dieu_hanh,xuat_xu) values(?,?,?,?,?,?,?,?,?,?,?)";
    return pdo_execute($sql, $id_sp,$man_hinh,$camera_sau,$camera_selfie,$ram,$rom,$cpu,$dung_luong_pin,$the_sim,$he_dieu_hanh,$xuat_xu);
}
//hàm thêm dung lượng cho điện thoại

function san_pham_Insert_Dung_luong($id_sp,$rom,$don_gia){
    $sql="INSERT INTO dung_luong_phone(id_sp,rom,don_gia) values(?,?,?)";
    return pdo_execute($sql, $id_sp,$rom,$don_gia);
}
//hàm thêm ảnh chi tiết vào sản phẩm Images
function san_pham_Insert_Img_Detail($id_sp,$images){
    $sql="INSERT INTO  images_pro(id_sp,images) values(?,?)";
    return pdo_execute($sql, $id_sp,$images);
}
//hàm truy vấn tất cả sản phẩm
function san_pham_QueryAll(){
    $sql="SELECT * FROM san_pham";
    return pdo_query($sql);
}
?>