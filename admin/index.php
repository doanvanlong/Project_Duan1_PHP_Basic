<?php
require_once '../global.php';
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        $view = "views/home.php";
        $title="Admin";
        break;
    case 'add-danh-muc':
        $view = 'views/danh-muc/danh-muc.php';
        $title='Thêm danh mục';
        break;
   
    case 'ct-san-pham':
        $view = "views/san-pham/san-pham.php";
        $title="Chi tiết sản phẩm";
        break;
    default:
        $view = 'views/home.php';
        $title='Admin';
        break;
}
require_once 'views/layouts/index.php';
