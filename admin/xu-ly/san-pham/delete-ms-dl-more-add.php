<?php
    require_once '../../../model/san-pham.php';
    if(isset($_POST['id_ms_phone'])){
        $id_ms_phone = $_POST['id_ms_phone'];
        //Xoá
       try{
        san_pham_Delete_One_MS_phone($id_ms_phone);
        echo 1;
       }catch (PDOException $e) {
           echo 0;
       }

    }
    if(isset($_POST['id_dl_phone'])){
        $id_dl_phone = $_POST['id_dl_phone'];
        //Xoá
       try{
        san_pham_Delete_One_DL_phone($id_dl_phone);
        echo 1;
       }catch (PDOException $e) {
           echo 0;
       }

    }
