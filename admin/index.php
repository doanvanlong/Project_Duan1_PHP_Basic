<?php
session_start();
require_once '../global.php';
require_once '../model/danh-muc.php'; //gọi model hàm xử lý danh mục
require_once '../model/san-pham.php'; //gọi model hàm xử lý san-pham
require_once '../model/tai-khoan.php'; //gọi model 
require_once '../model/san-pham.php'; //gọi model hàm xử lý danh mục
require_once '../model/tin-tuc.php'; //Gọi model hàm xử lí tin tức
require_once '../model/loai_giam_gia.php';
require_once '../model/khuyen-mai.php';
require_once '../model/don-hang.php';
require_once '../model/index-admin.php';
require_once '../model/comment.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date_now = date('Y-m-d H:i:s');

// kết thúc km nếu ngày hiện tại > ngày kết thúc
$list_km = khuyen_mai_Query_Id_KM_Date_End(); //nếu bảng km có dữ liệu
if (count($list_km) > 0 && is_array($list_km)) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date_now = date('Y-m-d H:i:s');
    //khuyến mãi
    foreach ($list_km as $km) {
        if ($date_now >= $km['ngay_ket_thuc']) {
            //    đã kết thúc 
            // update lại thành 0
            $id_km = $km['id_khuyen_mai'];
            khuyen_mai_Update_Ket_Thuc_KM($id_km, $date_now);
        } else {
            // echo 1;
        }
    }
}
//kết thúc km nếu số lượt sử dụng < số lươt đã sử Dụng
$list_km_sd = khuyen_mai_Query_Id_KM_So_Luot_SD();
if (count($list_km_sd) > 0 && is_array($list_km_sd)) {
    //khuyến mãi
    foreach ($list_km_sd as $km_sd) {
        if ($km_sd['so_luot_su_dung'] <= $km_sd['da_su_dung']) {
            //    đã kết thúc 
            // update lại thành 0
            $id_km = $km_sd['id_khuyen_mai'];
            khuyen_mai_Update_Ket_Thuc_KM($id_km, $date_now);
        } else {
            // echo 1;
        }
    }
}
// nếu session user mà ko có vai trò là 1 thì ko thể vào đc
if (sessionLogin_Isset() || !sessionLogin_Isset()) {
    if (!sessionLogin_Isset()) { ?>
        <h3>Bạn không có quyền truy cập trang này!</h3><a href="../">Quay lại</a>
        <?php
    }
    if (sessionLogin_Isset()) {
        $id_kh = $_SESSION['login']['id_kh'];
        $kh = khach_hang_Query_One($id_kh);
        if ($kh['vai_tro'] != 1) { ?>
            <h3>Bạn không có quyền truy cập trang này!</h3><a href="../">Quay lại</a>
<?php
        } else {


            $url = isset($_GET['url']) ? $_GET['url'] : '/';
            switch ($url) {
                case '/':
                    $view = "views/home.php";
                    $title = "Admin";
                    $new_orders = new_orders();
                    $new_comments = new_comments($dateNow);
                    $new_users = new_users();
                    $new_sales = sales($dateNow);
                    $list_product_best_selling = list_product_best_selling();
                    $list_comment_news = list_comment_news();
                    $list_product_homepage = list_product_homepage();
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
                    $id_sp = $_GET["id"];
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
                    $list_news_category = list_news_category();
                    break;
                case 'list-news':
                    $view = "views/tin-tuc/list-news.php";
                    $title = "Danh sách bài viết";
                    $list_news = list_news();
                    $list_news_category = list_category_news();
                    break;
                case 'edit-news':
                    $view = "views/tin-tuc/edit-news.php";
                    $title = "Cập nhật bài viết";
                    $id_news = $_GET["ID"];
                    $one_news = one_news($id_news);
                    $list_news_category = list_category_news();
                    break;
                case 'add-user':
                    $view = "views/khach-hang/add-user.php";
                    $title = "Thêm khách hàng";
                    break;
                case 'list-user':
                    $view = "views/khach-hang/list-user.php";
                    $title = "Danh sách khách hàng";
                    $list_user = list_user();
                    break;
                case 'edit-user':
                    $view = "views/khach-hang/edit-user.php";
                    $title = "Cập nhật thông tin khách hàng";
                    $id_user = $_GET['ID'];
                    $list_one_user = khach_hang_Query_One($id_user);
                    break;
                case 'giam-gia':
                    $view = "views/khuyen-mai/giam_gia/list-giam-gia.php";
                    $title = "Chương trình giảm giá";
                    break;
                case 'add-giam-gia':
                    $view = "views/khuyen-mai/giam_gia/add-giam-gia.php";
                    $title = "Tạo chương trình giảm giá mới";
                    break;
                case 'edit-giam-gia':
                    $id_km = $_GET["id_km"];
                    $info_km = khuyen_mai_Query_One_By_Id_Km($id_km);
                    $list_info_all_sp = giam_gia_Query_Info_Sp_By_Id_Km($id_km);
                    $view = "views/khuyen-mai/giam_gia/edit-giam-gia.php";
                    $title = "Cập nhật chương trình giảm giá";
                    break;
                case 'ma-giam-gia':
                    $view = "views/khuyen-mai/ma-giam-gia/list-ma-giam-gia.php";
                    $title = "Chương trình tạo mã giảm giá";
                    break;
                case 'add-ma-giam-gia':
                    $view = "views/khuyen-mai/ma-giam-gia/add-ma-giam-gia.php";
                    $title = "Tạo chương trình  mã giảm giá mới";
                    break;
                case 'edit-ma-giam-gia':
                    $id_km = $_GET["id_km"];
                    $info_km = khuyen_mai_Query_One_By_Id_Km($id_km);
                    $info_ma_giam_gia = ma_giam_gia_Query_By_Id_Km_Dang_Dien_Ra($id_km);
                    $view = "views/khuyen-mai/ma-giam-gia/edit-ma-giam-gia.php";
                    $title = "Cập nhật chương trình  mã giảm giá ";
                    break;
                case 'deal-soc':
                    $view = "views/khuyen-mai/deal-soc/list-deal-soc.php";
                    $title = "Chương trình tạo giảm giá mua kèm deal sốc";
                    break;
                case 'add-deal-soc':
                    $view = "views/khuyen-mai/deal-soc/add-deal-soc.php";
                    $title = "Tạo chương trình  mua kèm deal sốc mới";
                    break;
                    // case 'edit-deal-soc':
                    //     $id_km = $_GET["id_km"];
                    //     $info_km = khuyen_mai_Query_One_By_Id_Km($id_km);
                    //     $info_deal_soc = deal_soc_Query_By_Id_Km_Dang_Dien_Ra($id_km);
                    //     $view = "views/khuyen-mai/deal-soc/edit-deal-soc.php";
                    //     $title = "Cập nhật chương trình  deal sốc";
                    //     break;
                case 'order-new':
                    $view = "views/don-hang/order-new.php";
                    $title = "Đơn Hàng Mới";
                    $list_orders = list_orders_news();
                    break;
                case 'order-details':
                    $view = "views/don-hang/order-details.php";
                    $title = "Chi Tiết Đơn Hàng";
                    $ID = $_GET['ID'];
                    $list_orders = list_orders($ID);
                    $list_orders_details = list_order_details($ID);
                    break;
                case 'order-confirm':
                    $view = "views/don-hang/order-confirm.php";
                    $title = "Đơn Hàng Đã Xác Nhận";
                    $list_orders = list_orders_confirm();
                    break;
                case 'order-delivered':
                    $view = "views/don-hang/order-delivered.php";
                    $title = "Đơn Hàng Đã Giao";
                    $list_orders_confirm = list_orders_confirm();
                    $list_orders_delivery_confirm = list_orders_delivery_confirm();
                    break;
                case 'order-canceled':
                    $view = "views/don-hang/order-canceled.php";
                    $title = "Đơn Hàng Đã Huỷ";
                    $list_orders = list_orders_cancelled();
                    break;
                case 'list-comment':
                    $view = "views/binh-luan/list-comment.php";
                    $title = "Danh Sách Bình Luận";
                    $list_cmt = list_cmt();
                    $list_cmt_post = list_cmt_post();
                    break;
                case 'reply-comment':
                    $view = "views/binh-luan/reply-comment.php";
                    $title = "Trả Lời Bình Luận";
                    $id = $_GET['ID_Comment'];
                    $list_cmt_one = list_cmt_one($id);
                    break;
                case 'statistical':
                    $view = "views/thong-ke/statistical.php";
                    $title = "Thống Kê";
                    $main_category_statistics = main_category_statistics();
                    $subcategory_statistics = subcategory_statistics();
                    $list_statistics = list_statistics();
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
        }
    }
}
