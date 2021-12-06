<?php
require_once 'pdo.php';
// hàm  truy vấn tất cả loại hình thức giảm giá tiền ,khuyến mãi
function loai_giam_gia_Query_All(){
    $sql="SELECT * FROM loai_giam_gia_tien";
    return pdo_query($sql);
}





?>