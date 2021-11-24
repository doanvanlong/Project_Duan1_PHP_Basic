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
    //Xoá 1 Bài viết
    if (isset($_POST['delete_news'])){
        $id_news = $_POST['delete_news'];
        try {
           delete_one_news($id_news);
           echo 1;
        } catch (Exception $e) {
            echo 0;
        }
    }
    //Xoá nhiều bài viết
    if (isset($_POST['list-news'])) {
        $list_del_news = $_POST['list-news'];
        try {
            foreach ($list_del_news as $list_delete) {
                $list = $list_delete;
                delete_multi_news($list);
            }
            echo 1;
        } catch (Exception $e) {
           echo 0;
        }
    }

?>