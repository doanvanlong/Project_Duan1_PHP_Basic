<?php
    require_once('../../../model/comment.php');
    if (isset($_POST['Id_Delete_Comment_Post']) && $_POST['Id_Delete_Comment_Post'] != "" && $_POST['Id_Delete_Comment_Post'] > 0) {
        $id = $_POST['Id_Delete_Comment_Post'];
        try {
            delete_cmt_news($id);
            echo 1;
        } catch (exception $e) {
           echo 0;
        }
    }
    if (isset($_POST['Id_Delete_Comment_Product']) && $_POST['Id_Delete_Comment_Product'] != "" && $_POST['Id_Delete_Comment_Product'] > 0) {
        $id = $_POST['Id_Delete_Comment_Product'];
        try {
            delete_cmt_product($id);
            echo 1;
        } catch (exception $e) {
           echo 0;
        }
    }
?>