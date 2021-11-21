<?php
    require_once '../../../model/tin-tuc.php';

    if (isset($_POST['keyup_ten_dm_tin_tuc'])) {
        $keyup_ten_dm_tin_tuc = $_POST['keyup_ten_dm_tin_tuc'];
        echo (check_category_news($keyup_ten_dm_tin_tuc));
        // echo 0 là ko trùng dữ liệu
        // echo số khác 0 là trùng dữ liệu
        // vì hàm trả về số record
    }

    if (isset($_POST['danh-muc-tin-tuc'])) {
       $name_dm_tin_tuc = $_POST['danh-muc-tin-tuc'];
       try {
           insert_news_category($name_dm_tin_tuc);
           echo 1;
       } catch (Exception $e) {
           echo 0;
       }
       
    }
?>