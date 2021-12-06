<h3 class="alert bg-secondary text-light heading-cate">Danh Sách Đơn Hàng Đã Xác Nhận</h3>
<div class="row">
    <div class="col-12">
        <form action="" method="post" id="order">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr style="text-align:center;">
                            <th scope="col" class="table-dark">ID Hoá Đơn</th>
                            <th scope="col" class="table-dark">ID Khách Hàng</th>
                            <th scope="col" class="table-dark">Họ Tên</th>
                            <th scope="col" class="table-dark">Hình Thức Thanh Toán</th>
                            <th scope="col" class="table-dark">Ngày Đặt</th>
                            <th scope="col" class="table-dark">Khuyến Mãi</th>
                            <th scope="col" class="table-dark">Tổng Tiền</th>
                            <th scope="col" class="table-dark" style="width: 13%;">Trạng Thái Đơn Hàng</th>
                            <th scope="col" class="table-dark" style="width: 20%;">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($list_orders)) {
                            foreach ($list_orders as $list) {
                                extract($list);
                                echo '
                                <tr style="text-align:center;">
                                <td class="align-middle">' . $id_hoa_don . '</td>
                                <td class="align-middle">' . $id_kh . '</td>
                                <td class="align-middle">' . $ho_ten . '</td>';
                                if ($hinh_thuc_thanh_toan == 0) {
                                    echo '<td class="align-middle">Thanh toán khi nhận hàng</td>';
                                } else if ($hinh_thuc_thanh_toan == 1) {
                                    echo '<td class="align-middle">Thanh toán online</td>';
                                }
                                echo '<td class="align-middle">' . $ngay_dat_hang . '</td>';
                                echo '<td class="align-middle"><span style="font-weight:bolder;">' . number_format($khuyen_mai) . '</span></td>';
                                echo '<td class="align-middle"><span style="font-weight:bolder; color: red;">' . number_format($tong_tien) . '</span></td>';
                                if ($trang_thai_don_hang == "daxacnhan") {
                                    echo '<td class="align-middle"><span style="font-weight:bold; color: var(--success);">Đã Xác Nhận</span></td>
                                    <td class="align-middle">
                                        <div>
                                        <button type="input" class="btn btn-danger" value="dahuy" id="cancelled" data-id_hoa_don=' . $id_hoa_don . '>Huỷ Đơn</button>
                                        <button type="input" class="btn btn-primary" id="order-details"><a href="order-details?ID=' . $id_hoa_don . '" style="color: white;">Xem Chi Tiết</a></button>
                                        </div>
                                    </td>
                                    </tr>';
                                }
                            }
                        } else {
                            echo '
                                <tr>
                                <td colspan="9" style="text-align:center;"><img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                <h4 style="text-align:center; padding-top:1em;">Không có đơn hàng nào đã xác nhận!</h4>
                                </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>