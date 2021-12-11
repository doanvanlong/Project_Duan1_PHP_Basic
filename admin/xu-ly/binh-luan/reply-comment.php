<?php
require_once('../../../model/comment.php');
if (isset($_POST['id-comment-product'])) {
    $id_bl_pro = $_POST['id-comment-product'];
    $id_admin = $_POST['id-admin'];
    $noi_dung = $_POST['noi-dung'];
    $date = $_POST['date-reply'];
    try {
        reply_comment($id_bl_pro, $id_admin, $noi_dung, $date);
        echo 1;
    } catch (exception $e) {
        echo 0;
    }
}
