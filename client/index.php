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
require_once '../model/khuyen-mai.php';
require_once '../model/cart.php';
require_once '../model/thong-bao.php';
require_once '../model/binh_luan_news.php';

date_default_timezone_set('Asia/Ho_Chi_Minh');
$date_now = date('Y-m-d H:i:s');
// // kết thúc km nếu ngày hiện tại > ngày kết thúc
// $list_km = khuyen_mai_Query_Id_KM_Date_End(); //nếu bảng km có dữ liệu
// if (is_array($list_km) && count($list_km) > 0 ) {
//     date_default_timezone_set('Asia/Ho_Chi_Minh');
//     $date_now = date('Y-m-d H:i:s');
//     //khuyến mãi
//     foreach ($list_km as $km) {
//         if ($date_now >= $km['ngay_ket_thuc']) {
//             //    đã kết thúc 
//             // update lại thành 0
//             $id_km = $km['id_khuyen_mai'];
//             khuyen_mai_Update_Ket_Thuc_KM($id_km, $date_now);
//         } else {
//             // echo 1;
//         }
//     }
// }
// //kết thúc km nếu số lượt sử dụng < số lươt đã sử Dụng
// $list_km_sd = khuyen_mai_Query_Id_KM_So_Luot_SD();
// if (is_array($list_km_sd) &&  count($list_km_sd) > 0) {
//     //khuyến mãi
//     foreach ($list_km_sd as $km_sd) {
//         if ($km_sd['so_luot_su_dung'] <= $km_sd['da_su_dung']) {
//             //    đã kết thúc 
//             // update lại thành 0
//             $id_km = $km_sd['id_khuyen_mai'];
//             khuyen_mai_Update_Ket_Thuc_KM($id_km, $date_now);
//         } else {
//             // echo 1;
//         }
//     }
// }
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
        session_destroy();
        header('Location: ' . $CLIENT_URL);
        break;
    case 'search':
        $view = 'xu-ly/home/search.php';
        $title = "Tìm kiếm";
        if (isset($_POST['search'])) {
            $keyword = $_POST['search'];
        }
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
        $view = "views/dien-thoai/samsung.php";
        $title = 'Điện thoại | Samsung  chính hãng ';
        break;
    case 'phu-kien':
        $view = "views/phu-kien/list-phu-kien.php";
        $title = 'Phụ kiện , Ốp lưng ,Sạc dự phòng ';
        break;
    case 'mua-tra-gop':
        $view = "views/mua-tra-gop/mua-tra-gop.php";
        $title = 'Trả góp';
        break;
    case 're-vo-dich':
        $view = "views/flash-sale/flash-sale.php";
        $title = 'Siêu khuyến mãi Flash Sale, Ưu đãi ';
        break;
    case 'ban-may-cu-doi-may-moi':
        $view = "views/thu-cu-doi-moi/thu-cu-doi-moi.php";
        $title = 'Thu cũ ,đổi mới iPhone,Samsung ';
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
    case 'vnpay':
        $view = "views/cart/vnpay/index.php";
        $title = 'Thanh toán';
        break;
    case 'checkout':
        $view = "views/cart/checkout.php";
        $title = 'Thông tin thanh toán ';
        break;
    case 'success':
        $view = "views/cart/success.php";
        $title = 'Hoàn tất đặt hàng ';
        break;
    case 'address':
        $view = "views/tai-khoan/address.php";
        $title = 'Sổ địa chỉ ';
        break;
    case 'pay-back':
        $view = "views/cart/vnpay/index.php";
        $title = 'Thanh toán ';
        break;
    case 'order_view':
        $view = "views/tai-khoan/order-view.php";
        $title = 'Đơn hàng của tôi ';
        break;

    case 'profile':
        $view = "views/tai-khoan/profile.php";
        $title = 'Tài khoản của tôi';
        break;
    case 'my_order':
        $view = "views/tai-khoan/my_order.php";
        $title = 'Đơn hàng của tôi';
        break;
    case 'my_notica':
        $view = "views/tai-khoan/my_notica.php";
        $title = 'Thông báo của tôi';
        break;
    case 'khuyen-mai':
        $view = "views/khuyen-mai/list-khuyen-mai.php";
        $title = 'Khuyến mãi LTsmart';
        break;
    case 'tin-tuc':
        $view = "views/tin-tuc/list-tin-tuc.php";
        $title = 'Tin tức';
        $list_dm_tin_tuc = list_news_category();
        break;
    case 'bai-viet':
        $view = "views/tin-tuc/chi-tiet-bai-viet.php";
        $id_bai_viet = $_GET["id"];
        $title = $_GET["title"];
        $info_bai_viet = bai_viet_Query_One($id_bai_viet);
        break;
    case 'home':
        $view = 'views/home.php';
        $title = 'LTsmart | Hệ thống bán lẻ điện thoại chính hãng giá rẻ tại Đà Nẵng ';
        break;
    case 'lien-he':
        $view = 'views/lien-he.php';
        $title = 'LTsmart | Liên hệ ';
        break;
    default:
        $view = 'views/home.php';
        $title = 'LTsmart | Hệ thống bán lẻ điện thoại chính hãng giá rẻ tại Đà Nẵng ';
        break;
}
require_once 'views/layouts/index.php';
?>
<script>
    $('#lien_he').submit(function(e) {
        e.preventDefault();
        if ($('[name*="ho_ten_kh_lh"]').val() == "" || $('[name*="email_kh_lh"]').val() == "") {
            if ($('[name*="ho_ten_kh_lh"]').val() == "") {
                $('.error_ho_ten_lh').text('Họ tên không được rỗng');
            } else {
                $('.error_ho_ten_lh').text('');
            }
            if ($('[name*="email_kh_lh"]').val() == "") {
                $('.error_email_lh').text('Email không được rỗng');
            } else {
                $('.error_email_lh').text('');
            }
        } else {

        }
        $.ajax({
            url: 'xu-ly/lien-he/lien-he.php',
            type: 'post',
            data: $(this).serializeArray(),
            success: function(data) {
                if (data == 1) {
                    //toast thông báo
                    function toast({
                        title = "",
                        msg = "",
                        link = "",
                        type = "success",
                        duration = 3000,
                    }) {
                        const main = document.getElementById("toast");
                        if (main) {
                            const toast = document.createElement("div");
                            //auto remove
                            const autoRemoveId = setTimeout(function() {
                                //trả lại id settimeout
                                main.removeChild(toast);
                            }, duration + 1000); //2 animation = 4s , settime khi end 1 animation thi clear
                            //remove khi click
                            toast.onclick = function(e) {
                                if (e.target.closest(".toast__close")) {
                                    main.removeChild(toast);
                                    clearTimeout(autoRemoveId);
                                }
                            };
                            const icons = {
                                success: "fas fa-check-circle",
                                error: "fas fa-exclamation-circle",
                            };
                            const icon = icons[type];
                            const delay = (duration / 1000).toFixed(2);
                            toast.classList.add("toast", `toast--${type}`);
                            toast.style.animation = `slideInLeft ease 0.3s,fadeOut linear 1s ${delay}s forwards`;

                            toast.innerHTML = `

                              <div class="toast__icon">
                              <i class="${icon}"></i>
                          </div>
                          <div class="toast__body">
                          <a href="${link}">
                              <h4 class="toast__title">${title}</h4>
                              <p class="toast__msg">${msg}</p>
                          </a>
                          </div>
                          <div class="toast__close">
                              <i class="fas fa-times"></i>
                          </div>
                              `;

                            main.appendChild(toast);
                        }
                    }
                    toast({
                        title: "Thành công",
                        msg: "Phản hồi của bạn đã được gửi!",
                        type: "success",
                        duration: 5000,
                        link: "#",
                    });
                    $('#lien_he')[0].reset();
                }
            }
        })
    })
</script>