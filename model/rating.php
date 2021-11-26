<?php
require_once 'pdo.php'; //gọi thư viện pdo
    // hàm thêm mới đánh giá sao
        function rating_Insert($id_sp,$id_kh,$rating,$noi_dung,$date){
            $sql="INSERT INTO rating_sp(id_sp,id_kh,rating,noi_dung,ngay_rating) values(?,?,?,?,?)";
            return pdo_execute($sql, $id_sp,$id_kh, $rating,$noi_dung,$date);
        }
        // hàm truy vấn tất cả đánh giá theo 1 sản phẩm
        function rating_Query_Top5_By_Id_Sp($id_sp){
            $sql="SELECT * FROM rating_sp where id_sp =? order by id_rating desc limit 5";
            return pdo_query($sql, $id_sp);
        }
        // hàm xoá rating theo id rating
        function rating_Delete_By_Id($id_rating){
            $sql="DELETE FROM rating_sp where id_rating=?";
            return pdo_execute($sql, $id_rating);
        }
?>