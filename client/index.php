<?php
// controller
require_once '../global.php';
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case 'admin':
        header('Location:'.$ADMIN_URL);
    case 'sanpham':
        $view = "views/san-pham/index.php";
        break;
    case 'chi-tiet-san-pham':
        $view = "views/san-pham/chi-tiet-san-pham.php";
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        break;
    default:
        $view = 'views/home.php';
        $title='LTsmart| Hệ thống bán lẻ điện thoại chính hãng giá rẻ tại Đà Nẵng ';
        break;

}
require_once 'views/layouts/index.php';
?>
