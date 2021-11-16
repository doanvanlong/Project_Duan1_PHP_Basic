<?php
require_once '../global.php';
require_once '../model/pdo.php';
pdo_get_connection();
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        $view = "views/home.php";
        $title = "Admin";
        break;

    case 'add-danh-muc':
        $view = 'views/danh-muc/add-danh-muc.php';
        $title = 'Thêm danh mục';
        break;
    case 'list-danh-muc':
        $view = 'views/danh-muc/list-danh-muc.php';
        $title = 'Danh sách danh mục';
        break;
    case 'edit-danh-muc-chinh':
        $view = 'views/danh-muc/edit-danh-muc-chinh.php';
        $title = 'Sửa danh mục';
        break;
    case 'edit-danh-muc-con':
        $view = 'views/danh-muc/edit-danh-muc-con.php';
        $title = 'Sửa danh mục';
        break;
    case 'add-san-pham':
        $view = 'views/san-pham/add-san-pham.php';
        $title = "Thêm sản phẩm";
        break;

    case 'ct-san-pham':
        $view = "views/san-pham/san-pham.php";
        $title = "Chi tiết sản phẩm";
        break;
    default:
        $view = 'views/home.php';
        $title = 'Admin';
        break;
}
require_once 'views/layouts/index.php';
