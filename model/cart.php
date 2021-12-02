<?php

    require_once 'pdo.php';
    // hàm thêm giỏ hàng vào DB
    function cart_Add_DB($id_kh,$tinh_trang,$trang_thai,$hinh_thuc_thanh_toan,$tong_tien,$ngay_dat_hang,$khuyen_mai){
        $sql="INSERT INTO hoa_don(id_kh,tinh_trang_thanh_toan,trang_thai_don_hang,hinh_thuc_thanh_toan,tong_tien,ngay_dat_hang,khuyen_mai) values(?,?,?,?,?,?,?)";
        return pdo_execute2($sql,$id_kh,$tinh_trang,$trang_thai,$hinh_thuc_thanh_toan,$tong_tien,$ngay_dat_hang,$khuyen_mai);
    }
    // hàm thêm giỏ hàng chi tiết 
    function cart_detail_Add_DB( $id_hoa_don, $id_sp, $so_luong,$don_gia,$mau_sac,$dung_luong){
        $sql="INSERT INTO hoa_don_chi_tiet (id_hoa_don,id_sp,so_luong_mua,don_gia,mau_sac,dung_luong) values(?,?,?,?,?,?)";
        return pdo_execute($sql, $id_hoa_don, $id_sp, $so_luong,$don_gia,$mau_sac,$dung_luong);
    }
    
?>