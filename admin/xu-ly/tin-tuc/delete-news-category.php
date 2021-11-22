<?php
    require_once '../../../model/tin-tuc.php';
    //Xoá 1 Danh mục
    if (isset($_POST['delete_news_category'])){
        $id = $_POST['delete_news_category'];
        try {
           delete_one_news_category($id);
           echo 1;
        } catch (Exception $e) {
            echo 0;
        }
    }
    //Xoá nhiều danh mục
    if (isset($_POST['list-news-category'])) {
        $list_del_news_category = $_POST['list-news-category'];
        try {
            foreach ($list_del_news_category as $list_delete) {
                $list = $list_delete;
                delete_multi_news_category($list);
            }
            echo 1;
        } catch (Exception $e) {
           echo 0;
        }
    }

?>