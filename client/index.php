<?php
// controller
session_start();
require_once '../global.php';
require_once '../model/tai-khoan.php';
require_once '../model/san-pham.php';
require_once '../model/danh-muc.php';
require_once '../model/tin-tuc.php';
require_once '../model/rating.php';
require_once '../model/binh-luan_pro.php';
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
        $id = $_GET["id"];
        $name = $_GET["name"];
        $info_sp = san_pham_QueryOne($id);
        $view = "views/chi-tiet-san-pham/chi-tiet-san-pham.php";
        $title = $name;
        break;
    case 'cart':
        $view = "views/cart/cart.php";
        $title = 'Giỏ hàng ';
        break;
    case 'checkout':
        $view = "views/cart/checkout.php";
        $title = 'Thông tin thanh toán ';
        break;
    case 'checkout=success':
        $view = "views/cart/success.php";
        $title = 'Hoàn tất đặt hàng ';
        break;
    case 'address':
        $view = "views/tai-khoan/address.php";
        $title = 'Sổ địa chỉ ';
        break;
    case 'home':
        $view = 'views/home.php';
        $title = 'LTsmart | Hệ thống bán lẻ điện thoại chính hãng giá rẻ tại Đà Nẵng ';
        break;
    default:
        $view = 'views/home.php';
        $title = 'LTsmart | Hệ thống bán lẻ điện thoại chính hãng giá rẻ tại Đà Nẵng ';
        break;
}
require_once 'views/layouts/index.php';
