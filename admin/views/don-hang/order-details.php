<?php
// if ($list_orders['hinh_thuc_thanh_toan'] == 0) {
//     $pay = "Thanh toán khi nhận hàng";
// } else if ($list_orders['hinh_thuc_thanh_toan'] == 1) {
//     $pay = "Thanh toán online";
// }
//Xử lí hình thức thanh toán
switch ($list_orders['hinh_thuc_thanh_toan']) {
    case '1':
        $pay = "Thanh toán online";
        break;
    default:
        $pay = "Thanh toán khi nhận hàng";
        break;
}
//Xử lí trạng thái đơn hàng
switch ($list_orders['trang_thai_don_hang']) {
    case 'chuaxacnhan':
        $order_status = 'Chưa Xác Nhận';
        break;
    case 'daxacnhan':
        $order_status = 'Đã Xác Nhận';
        break;
    case 'dahuy':
        $order_status = 'Đã Huỷ Đơn';
        break;
    case 'dagiaohang':
        $order_status = 'Đã Giao Hàng Thành Công';
        break;
    default:
        $order_status = 'Không Có Thông Tin!';
        break;
}
//Xử lí tình trạng thanh toán
switch ($list_orders['tinh_trang_thanh_toan']) {
    case 'dathanhtoan':
        $payment_status = 'Đã Thanh Toán';
        break;
    case 'chuathanhtoan':
        $payment_status = 'Chưa Thanh Toán';
        break;
    default:
        $payment_status = 'Chưa Thanh Toán';
        break;
}
//Xử lí ngày giao hàng
switch ($list_orders['ngay_giao_hang']) {
    case '0000-00-00':
        $date_delivery = 'Chưa có thông tin';
        break;
    default:
        $date_delivery = $list_orders['ngay_giao_hang'];
        break;
}
?>
<h3 class="alert bg-secondary text-light">THÔNG TIN CHI TIẾT ĐƠN HÀNG</h3>
<div class="row">
    <div class="col-12">
        <h4 class="alert bg-secondary text-light content-detail">THÔNG TIN KHÁCH HÀNG</h4>
    </div>
    <div class=" bold">
        <p>Tên Khách Hàng: <span><?= $list_orders['ho_ten'] ?></span></p>
        <p>ID Hoá Đơn: <span><?= $list_orders['id_hoa_don'] ?></span></p>
        <p>Ngày Đặt Hàng: <span><?= $list_orders['ngay_dat_hang'] ?></span></p>
        <p>Hình Thức Thanh Toán: <span><?= $pay; ?></span></p>
        <p>Tình Trạng Thanh Toán: <span><?= $payment_status; ?></span></p>
        <p>Trạng Thái Đơn Hàng: <span style="color: var(--primary);"><?= $order_status; ?></span></p>
        <p>Ngày Đặt Hàng: <span><?= $list_orders['ngay_dat_hang'] ?></span></p>
        <p>Ngày Giao Hàng: <span><?= $date_delivery ?></span></p>
        <p>Số Điện Thoại: <span><?= $list_orders['so_dien_thoai'] ?></span></p>
        <p>Địa Chỉ Giao Hàng: <span><?= $list_orders['dia_chi'] ?></span></p>
        <p>Khuyến Mãi: <span class="bold-red"><?= number_format($list_orders['khuyen_mai']) . ' VNĐ' ?></span></p>
        <p>Tổng Giá Trị Đơn Hàng: <span class="bold-red"><?= number_format($list_orders['tong_tien']) . ' VNĐ' ?></span></p>
    </div>
    <div class="col-12">
        <h4 class="alert bg-secondary text-light content-detail">CHI TIẾT ĐƠN HÀNG</h4>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr style="text-align:center;">
                        <th scope="col" class="table-dark">ID Hoá Đơn</th>
                        <th scope="col" class="table-dark">ID Hoá Đơn Chi Tiết</th>
                        <th scope="col" class="table-dark">Mã Sản Phẩm</th>
                        <th scope="col" class="table-dark">Tên Sản Phẩm</th>
                        <th scope="col" class="table-dark">Ảnh Sản Phẩm</th>
                        <th scope="col" class="table-dark">Màu Sắc</th>
                        <th scope="col" class="table-dark">Dung Lượng</th>
                        <th scope="col" class="table-dark">Số Lượng</th>
                        <th scope="col" class="table-dark">Giảm Giá</th>
                        <th scope="col" class="table-dark">Giá Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($list_orders_details)) {
                        foreach ($list_orders_details as $orders_details) {
                            extract($orders_details);
                            echo '<tr style="text-align:center;">
                                <td class="align-middle">' . $ID_HD . '</td>
                                <td class="align-middle">' . $ID_HD_Chi_Tiet . '</td>
                                <td class="align-middle">' . $ID_San_Pham . '</td>
                                <td class="align-middle">' . $Ten_San_Pham . '</td>
                                <td class="align-middle"><img style="width:5em" src="' . $CONTENT_UPLOAD . '/' . $Anh_San_Pham . '" alt=""></td>
                                <td class="align-middle">' . $Mau_Sac . '</td>
                                <td class="align-middle">' . $Dung_Luong . '</td>
                                <td class="align-middle">' . $So_Luong . '</td>';
                            if (!empty($Giam_Gia)) {
                                echo '<td class="align-middle">' . number_format($Giam_Gia) . ' VNĐ</td>';
                            } else {
                                echo '<td class="align-middle">' . $Giam_Gia . '</td>';
                            }

                            echo '<td class="align-middle" class="bold-red">' . number_format($Gia) . ' VNĐ</td>
                            <tr>';
                        }
                    }
                    ?>
                    <tr class="align-middle">
                        <td class="align-middle" colspan="10" style="text-align:right;"><span class="bold-red">Khuyến mãi: <?= number_format($list_orders['khuyen_mai']) . ' VNĐ' ?></span></td>
                    </tr>
                    <tr class="align-middle">
                        <td class="align-middle" colspan="10" style="text-align:right;"><span class="bold-red">Tổng tiền: <?= number_format($list_orders['tong_tien']) . ' VNĐ' ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>