<?php
require_once '../../../model/san-pham.php';
    if(isset($_POST['id_dung_luong'])){
        // Nếu có giảm giá thì xữ lý ở đây
        // lấy dc id dung lượng select vào bảng dung lượng lấy giá
       $dl= san_pham_Query_One_Id_Dung_Luong($_POST['id_dung_luong']);
        echo number_format($dl['don_gia'], 0, ',', '.').'đ';
    }
?>