<?php
session_start();
require_once '../../../global.php';
require_once '../../.././model/binh_luan_news.php';
if (sessionLogin_Isset()) {
    if (isset($_POST['binh_luan_news'])) {
        $noi_dung = $_POST['binh_luan_news'];
        $id_kh = $_SESSION['login']['id_kh'];
        $id_bai_viet = $_POST['id_bai_viet'];
        $ngay_bl = Date("Y-m-d ");
        binh_luan_news_Insert($id_kh, $id_bai_viet, $noi_dung, $ngay_bl);
        echo 1;
    }
} else {
    $url_session = $_POST['url_session'];
    $_SESSION['url_session'] = $url_session;
    echo $url_session;
}
