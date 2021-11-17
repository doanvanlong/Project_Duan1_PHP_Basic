<?php
session_start();
require_once '../global.php';
require_once '../model/danh-muc.php'; //gọi model hàm xử lý danh mục
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        $view = "views/home.php";
        $title = "Admin";
        break;

    case 'add-danh-muc':
        $view = 'views/danh-muc/add-danh-muc.php';
        $title = 'Thêm danh mục';
        $list_dm_pro=danh_muc_chinh_QueryAll();
        break;
    case 'list-danh-muc':
        $view = 'views/danh-muc/list-danh-muc.php';
        $title = 'Danh sách danh mục';
        $list_dm_pro=danh_muc_chinh_QueryAll();
        $list_sub_dm_pro=danh_muc_con_QueryAll();
        break;
    case 'edit-danh-muc-chinh':
        $view = 'views/danh-muc/edit-danh-muc-chinh.php';
        $title = 'Sửa danh mục';
        $id_dm_pro=$_GET["id"];//lấy id trên url
        $info_dm_pro=danh_muc_chinh_QueryOne($id_dm_pro);
        break;
    case 'edit-danh-muc-con':
        $view = 'views/danh-muc/edit-danh-muc-con.php';
        $title = 'Sửa danh mục';
        $id_sub_dm_pro=$_GET["id"];//lấy id trên url
        $info_sub_dm_pro=danh_muc_con_QueryOne($id_sub_dm_pro);
        $list_dm_pro=danh_muc_chinh_QueryAll();
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
