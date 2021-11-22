<?php
session_start();
require_once '../global.php';
require_once '../model/danh-muc.php'; //gọi model hàm xử lý danh mục
require_once '../model/san-pham.php'; //gọi model hàm xử lý danh mục
require_once '../model/tin-tuc.php'; //Gọi model hàm xử lí tin tức

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        $view = "views/home.php";
        $title = "Admin";
        break;
        
    case 'add-danh-muc':
        $view = 'views/danh-muc/add-danh-muc.php';
        $title = 'Thêm danh mục';
        $list_dm_pro = danh_muc_chinh_QueryAll();
        break;
    case 'list-danh-muc':
        $view = 'views/danh-muc/list-danh-muc.php';
        $title = 'Danh sách danh mục';
        $list_dm_pro = danh_muc_chinh_QueryAll();
        $list_sub_dm_pro = danh_muc_con_QueryAll();
        break;
    case 'edit-danh-muc-chinh':
        $view = 'views/danh-muc/edit-danh-muc-chinh.php';
        $title = 'Sửa danh mục';
        $id_dm_pro = $_GET["id"]; //lấy id trên url
        $info_dm_pro = danh_muc_chinh_QueryOne($id_dm_pro);
        break;
    case 'edit-danh-muc-con':
        $view = 'views/danh-muc/edit-danh-muc-con.php';
        $title = 'Sửa danh mục';
        $id_sub_dm_pro = $_GET["id"]; //lấy id trên url
        $info_sub_dm_pro = danh_muc_con_QueryOne($id_sub_dm_pro);
        $list_dm_pro = danh_muc_chinh_QueryAll();
        break;
    case 'add-san-pham':
        $view = 'views/san-pham/add-san-pham.php';
        $title = "Thêm sản phẩm";
        $list_dm_pro = danh_muc_chinh_QueryAll();
        $list_sub_dm_pro = danh_muc_con_QueryAll();
        break;
    case 'list-san-pham':
        $view = 'views/san-pham/list-san-pham.php';
        $title = "Danh sách sản phẩm";
        $list_san_pham = san_pham_QueryAll();
        $list_dm_pro = danh_muc_chinh_QueryAll();
        $list_sub_dm_pro = danh_muc_con_QueryAll();
        break;
    case 'edit-san-pham':
        $view = 'views/san-pham/edit-san-pham.php';
        $title = "Sửa sản phẩm";
        $id_sp=$_GET["id"];
        $info_sp = san_pham_QueryOne($id_sp);

        $list_san_pham = san_pham_QueryAll();
        $list_dm_pro = danh_muc_chinh_QueryAll();
        $list_sub_dm_pro = danh_muc_con_QueryAll();
        break;
    case 'ct-san-pham':
        $view = "views/san-pham/san-pham.php";
        $title = "Chi tiết sản phẩm";
        break;
    case 'news-category':
        $view = "views/tin-tuc/danh-muc-tin-tuc.php";
        $title = "Thêm danh mục tin tức";
        $list_news_category = list_news_category();
        break;
    case 'edit-news-category':
        $view = "views/tin-tuc/edit-news-category.php";
        $title = "Cập nhật danh mục tin tức";
        $id_news_category = $_GET["ID"];
        $one_news_category = one_news_category($id_news_category);
        break;
    case 'add-news':
        $view = "views/tin-tuc/add-news.php";
        $title = "Thêm bài viết mới";
        break;
    case 'client':
        header('location:../client');
        break;
    default:
        $view = 'views/home.php';
        $title = 'Admin';
        break;
}
require_once 'views/layouts/index.php';
