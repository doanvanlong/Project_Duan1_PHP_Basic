<?php
require_once '../../../model/san-pham.php';
//Xoá 1 sản phẩm
    if (isset($_POST['delete_id_sp'])){
        $id_sp = $_POST['delete_id_sp'];
        try {
            del_san_pham($id_sp);
            //Xoá thành công, hiển thị 1
            echo 1;
        } catch (Exception $e) {
            //Xoá không thành công, hiển thị 0
            echo 0;
        }
    }
//Xoá nhiều sản phẩm
    if (isset($_POST['san-pham'])) {
        $list_san_pham_del = $_POST['san-pham'];
        try {
            foreach ($list_san_pham_del as $ds_san_pham_del) {
                $list_san_pham = $ds_san_pham_del;
                del_multi_san_pham($list_san_pham);
            }
            //Successfully hiển thị 1
            echo 1;
        } catch (Exception $e) {
            //Error hiển thị 0
           echo 0;
        }
    }

?>