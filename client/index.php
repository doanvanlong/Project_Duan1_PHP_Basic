<?php
// controller
session_start();
require_once '../global.php';
require_once '../model/tai-khoan.php';
require_once '../model/san-pham.php';
require_once '../model/danh-muc.php';


// info kh
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case 'admin':
        header('Location:' . $ADMIN_URL);
        break;
    case 'tai-khoan/login':
        header('Location: ' . $CLIENT_URL . '/views/tai-khoan/login.php');
        break;
    case 'tai-khoan/logout':
        unset($_SESSION['login']);
        header('Location: ' . $CLIENT_URL);
        break;
    case 'dien-thoai':
        $view = "views/dien-thoai/dien-thoai.php";
        $title = 'Điện thoại ,smart phone chính hãng ';
        break;
    case 'dien-thoai=iphone':
        $view = "views/dien-thoai/iphone.php";
        $title = 'Điện thoại |iPhone chính hãng ';
        break;
    case 'dien-thoai=samsung':
        $view = "views/dien-thoai/dien-thoai.php";
        $title = 'Điện thoại | Samsung  chính hãng ';
        break;
    case 'san-pham':
        $id=$_GET["id"];
        $name=$_GET["name"];
        $info_sp= san_pham_QueryOne($id);
        $view = "views/chi-tiet-san-pham/chi-tiet-san-pham.php";
        $title = $name;
        break;
    default:
        $view = 'views/home.php';
        $title = 'LTsmart | Hệ thống bán lẻ điện thoại chính hãng giá rẻ tại Đà Nẵng ';
        break;
}
require_once 'views/layouts/index.php';
