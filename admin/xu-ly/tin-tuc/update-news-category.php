<?php
    require_once '../../../model/tin-tuc.php';
    //keyup update danh mục tin tức
    if (isset($_POST['keyup_update_news_category'])){
        $name_dm = $_POST['keyup_update_news_category'];
        echo (check_category_news($name_dm));
    }

    //Update danh mục tin Tức
    if (isset($_POST['update-news-category'])){
        $id = $_POST['id_news_category'];
        $name_update_news_category = $_POST['update-news-category'];
        try {
            update_news_category($id,$name_update_news_category);
            echo 1;
        } catch (Exception $e) {
            echo 0;
        }
    }
?>