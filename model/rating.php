<?php
require_once 'pdo.php'; //gọi thư viện pdo
// hàm thêm mới đánh giá sao
function rating_Insert($id_sp, $id_kh, $rating, $noi_dung, $date)
{
    $sql = "INSERT INTO rating_sp(id_sp,id_kh,rating,noi_dung,ngay_rating) values(?,?,?,?,?)";
    return pdo_execute($sql, $id_sp, $id_kh, $rating, $noi_dung, $date);
}
// hàm truy vấn tất cả đánh giá theo 1 sản phẩm
function rating_Query_Top5_By_Id_Sp($id_sp)
{
    $sql = "SELECT * FROM rating_sp where id_sp =? order by id_rating desc limit 5";
    return pdo_query($sql, $id_sp);
}
// hàm xoá rating theo id rating
function rating_Delete_By_Id($id_rating)
{
    $sql = "DELETE FROM rating_sp where id_rating=?";
    return pdo_execute($sql, $id_rating);
}

// hàm truy vấn số sao trung bình theo 1 san_pham
function rating_Avg($id_sp)
{
    $sql = "SELECT AVG(rating)  FROM `rating_sp` WHERE id_sp =?";
    $ratingavg = pdo_query_value($sql, $id_sp);
    return floor($ratingavg[0] + 0); //làm tròn xuống 4,7 = 4
}
//hàm đếm số rating san_pham
function rating_Count($id_sp)
{
    $sql = "SELECT COUNT(rating) FROM `rating_sp` WHERE id_sp=?";
    return pdo_query_value($sql, $id_sp)[0];
}


//hàm đếm số lượng rating theo số sao ví dụ : 5 sao có 2 lượt đánh giá
function rating_Count_Luot($id_sp, $rating)
{
    $sql = "SELECT COUNT(*) FROM rating_sp  where  id_sp =? and rating =?";
    return pdo_query_value($sql, $id_sp, $rating)[0];
}

//hàm tính số phần trăm proges số sao đánh giá
// tổng all 5 số sao là 100% ,dựa vào số lượng đánh giá =>% của từng số sao  
function rating_Phan_Tram($id_sp)
{
    //tổng số sao
    $sum = 0;
    for ($i = 1; $i <= 5; $i++) {
        $sum += rating_Count_Luot($id_sp, $i);
    }
    return $sum;
//    cái này chỉ lấy tổng số sao thôi ,việc còn lại % chi tiết thì bên view xữ lý
}
