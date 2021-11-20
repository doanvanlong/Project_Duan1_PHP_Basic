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
// hàm truy vấn 1 sản phẩm
function san_pham_QueryOne($id_sp){
    $sql="SELECT * FROM san_pham where id_sp =?";
    return pdo_query_one($sql,$id_sp);
}
// hàm lấy màu sắc của san_pham
function san_pham_QueryAll_Color($id_sp){
    // màu đầu tiên,hình  là màu,hình đại diện của sp 
    $sql="SELECT * FROM mau_sac_phone where id_sp =? ";
    return pdo_query($sql, $id_sp);
}
// hàm lấy màu sắc ảnh dại diện sp là ảnh màu sắc đầu tiên trong bảng màu sắc
function san_pham_Query_One_Color($id_sp){
    // màu đầu tiên,hình  là màu,hình đại diện của sp 
    $sql="SELECT * FROM mau_sac_phone where id_sp =? order by mau_sac_phone.id_ms_phone asc  limit 1";
    return pdo_query_one($sql, $id_sp);
}
// hàm lấy dung lượng của sp
function san_pham_QueryAll_Dung_Luong($id_sp){
    $sql="SELECT * FROM  dung_luong_phone where id_sp =?";
    return pdo_query($sql, $id_sp);
}
// hàm lấy dung lượng của sp ; dung lượng đại diện (chính)
function san_pham_QueryOne_Dung_Luong($id_sp){
    $sql="SELECT * FROM  dung_luong_phone where id_sp =? order by dung_luong_phone.id_dl_phone asc limit 1";
    return pdo_query_one($sql, $id_sp);
}

// hàm truy vấn ảnh chi tiết nhiều hình ảnh bảng images
function san_pham_Query_Images_Pro($id_sp){
    $sql="SELECT * FROM  images_pro where id_sp =?";
    return pdo_query($sql, $id_sp);
}
// hàm truy vấn cấu Hình
function san_pham_Query_Cau_Hinh($id_sp) {
    $sql="SELECT * FROM cau_hinh_phone where id_sp =?";
    return pdo_query_one($sql, $id_sp);
}
// hàm truy vấn mô tả sản phẩm
function san_pham_Query_Mo_Ta($id_sp){
    $sql="SELECT * FROM san_pham WHERE id_sp =?";
    return pdo_query_one($sql,$id_sp);
}
// hàm kiểm tra sản phẩm có nằm trong danh mục ko: nếu là 0 là ko phải nếu là 1 thì phải là điện thoại
function san_pham_Is_Dm_Phone($id_sp){
    $sql="SELECT count(*) FROM san_pham,danh_muc_pro WHERE
     san_pham.id_dm_pro = danh_muc_pro.id_dm_pro and san_pham.id_sp = ?  and danh_muc_pro.ten_dm_pro='Điện thoại'";
    return pdo_query_value($sql,$id_sp)[0];
}


//Hàm UPDATE sản phẩm
    function san_pham_Update($id_sp,$id_dm_pro ,$id_sub_dm_pro  ,$ten_sp  ,$hinh_anh  ,$don_gia ,$so_luong  ,$mo_ta ){
        $sql="UPDATE san_pham SET  id_dm_pro= ? ,id_sub_dm_pro =? ,ten_sp =? ,hinh_anh =? ,
        don_gia=? ,so_luong =? ,mo_ta =? where id_sp=?";
        return pdo_execute($sql, $id_dm_pro ,$id_sub_dm_pro ,$ten_sp ,$hinh_anh ,$don_gia,$so_luong ,$mo_ta,$id_sp);
    }

    // hàm delete images sản phẩm
    function san_pham_Delete_Images($id_sp){
        $sql="DELETE FROM images where id_sp=?";
        return pdo_execute($sql, $$id_sp);
    }
    // hàm Update màu sắc hình ảnh  chính 
    function san_pham_Update_Color_First($id_sp,$ten_mau,$hinh_anh){
        $sql="UPDATE mau_sac_phone SET ten_mau =?, hinh_anh=? where id_sp =? order by id_ms_phone asc limit 1";
        return pdo_execute($sql,$ten_mau,$hinh_anh, $id_sp);
    }
    // hàm Update dung lượng đơn giá chính 
    function san_pham_Update_Dung_Luong_First($id_sp,$rom,$don_gia){
        $sql="UPDATE dung_luong_phone SET rom=? ,don_gia =? where id_sp=? order by id_dl_phone asc limit 1";
        return pdo_execute($sql, $rom,$don_gia,$id_sp);
    }
    // hàm Update cấu hình 
    function san_pham_Update_Cau_Hinh($id_sp,$man_hinh,$camera_sau,$camera_selfie,$ram,$rom,$cpu,
    $dung_luong_pin,$the_sim,$he_dieu_hanh,$xuat_xu){
        $sql="UPDATE cau_hinh_phone SET man_hinh=?,camera_sau=?,camera_selfie=?,ram=?,rom=?,cpu=?,
        dung_luong_pin=?,the_sim=?,he_dieu_hanh=?,xuat_xu=? where id_sp =?";
        return pdo_execute($sql, $man_hinh,$camera_sau,$camera_selfie,$ram,$rom,$cpu,
        $dung_luong_pin,$the_sim,$he_dieu_hanh,$xuat_xu,$id_sp);
    }
// Hàm truy vấn tất cả màu sắc trừ màu sắc đầu tiên , 
function san_pham_Query_All_Color_Tru_First($id_sp){
    $sql="SELECT * FROM mau_sac_phone where id_sp =? order by id_ms_phone asc limit 1,1000 ";
    return pdo_query($sql,$id_sp);
}
// Hàm truy vấn tất cả dung lượng trừ hàng đầu tiên , 
function san_pham_QueryAll_Dung_luong_Tru_First($id_sp){
    $sql="SELECT * FROM dung_luong_phone where id_sp =? order by id_dl_phone asc limit 1,1000 ";
    return pdo_query($sql,$id_sp);
}
//hàm update màu sắc more update  theo id_ms
function san_pham_Update_Color_More_Update($id_sp,$id_ms_phone,$ten_mau,$hinh_anh){
    $sql="UPDATE mau_sac_phone SET ten_mau=? ,hinh_anh=? where id_sp =? and id_ms_phone=? ";
    return pdo_execute($sql, $ten_mau, $hinh_anh,$id_sp,$id_ms_phone);
}
// hàm xoá màu sắc more add trừ thèn đại diện đầu tiên
function san_pham_Delete_Color_More_Add($id_sp){
    $sql="DELETE FROM mau_sac_phone where id_sp=? order by id_ms_phone asc limit 1,1000";
    return pdo_execute($sql, $id_sp);
}
// hàm update dung Lượng more update
function san_pham_Update_Dung_Luong_More_Update($id_sp,$rom,$don_gia,$id_dl_phone){
    $sql="UPDATE dung_luong_phone SET rom=?,don_gia=? where id_sp =? and id_dl_phone=?";
    return pdo_execute($sql, $rom, $don_gia,$id_sp,$id_dl_phone);
}




//Hàm xoá sản phẩm theo id sản phẩm
function del_san_pham($id_sp){
    $sql = "DELETE FROM `san_pham` WHERE id_sp = ?";
    return pdo_execute($sql, $id_sp);
}

function del_multi_san_pham($list_san_pham){
    $sql = "DELETE FROM `san_pham` WHERE id_sp = ?";
    return pdo_query($sql, $list_san_pham);
}
