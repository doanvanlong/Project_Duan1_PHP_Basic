<h3 class="alert bg-secondary text-light">DANH SÁCH ĐƠN HÀNG ĐÃ GIAO THÀNH CÔNG:</h3>
<div class="row">
    <div class="col-12">
        <h3 class="alert bg-secondary text-light">Danh Sách Đơn Hàng Chờ Xác Nhận Đã Giao</h3>
        <form action="" method="post" id="order-delivery">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col" class="table-dark">ID Hoá Đơn</th>
                            <th scope="col" class="table-dark">ID Khách Hàng</th>
                            <th scope="col" class="table-dark" style="width:11%;">Họ Tên</th>
                            <th scope="col" class="table-dark">Hình Thức Thanh Toán</th>
                            <th scope="col" class="table-dark">Ngày Đặt</th>
                            <th scope="col" class="table-dark">Khuyến Mãi</th>
                            <th scope="col" class="table-dark">Tổng Tiền</th>
                            <th scope="col" class="table-dark">Trạng Thái Đơn Hàng</th>
                            <th scope="col" class="table-dark">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($list_orders_confirm)) {
                            foreach ($list_orders_confirm as $list) {
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
                                        <div style="display: flex; flex-direction: column; align-content: stretch; align-items: stretch;gap: .5em;">
                                        <button type="input" class="btn btn-info" id="order-details"><a href="order-details?ID=' . $id_hoa_don . '" style="color: white;">Xem Chi Tiết</a></button>
                                        <button type="input" class="btn btn-success" id="delivery-confirmation" value="dagiaohang"data-id_hoa_don=' . $id_hoa_don . '>Xác Nhận Đã Giao</button>
                                        </div>
                                    </td>
                                    </tr>';
                                }
                            }
                        } else {
                            echo '
                                <tr>
                                <td colspan="9" style="text-align:center;"><img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                <h4 style="text-align:center; padding-top:1em;">Không có đơn hàng chưa xác nhận!</h4>
                                </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <input type="hidden" name="date" id="datenow" class="form-control" data-date_now="<?= $today =  date("Y-m-d") ?>">
            <input type="hidden" name="payment-status" class="form-control" data-payment_status="dathanhtoan">
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h3 class="alert bg-secondary text-light">Danh Sách Đơn Hàng Đã Giao Thành Công</h3>
        <form action="" method="post" id="order-delivery">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col" class="table-dark">ID Hoá Đơn</th>
                            <th scope="col" class="table-dark">ID Khách Hàng</th>
                            <th scope="col" class="table-dark" style="width:11%;">Họ Tên</th>
                            <th scope="col" class="table-dark">Trạng Thái Thanh Toán</th>
                            <th scope="col" class="table-dark">Hình Thức Thanh Toán</th>
                            <th scope="col" class="table-dark">Ngày Đặt Hàng</th>
                            <th scope="col" class="table-dark">Ngày Giao Hàng</th>
                            <th scope="col" class="table-dark">Khuyến Mãi</th>
                            <th scope="col" class="table-dark">Tổng Tiền</th>
                            <th scope="col" class="table-dark">Trạng Thái Đơn Hàng</th>
                            <th scope="col" class="table-dark">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($list_orders_delivery_confirm)) {
                            foreach ($list_orders_delivery_confirm as $list2) {
                                extract($list2);
                                echo '
                                <tr style="text-align:center;">
                                <td class="align-middle">' . $id_hoa_don . '</td>
                                <td class="align-middle">' . $id_kh . '</td>
                                <td class="align-middle">' . $ho_ten . '</td>';
                                if ($tinh_trang_thanh_toan == "dathanhtoan") {
                                    echo '<td class="align-middle">Đã thanh toán</td>';
                                } else {
                                    echo '<td class="align-middle">Chưa thanh toán</td>';
                                }
                                if ($hinh_thuc_thanh_toan == 0) {
                                    echo '<td class="align-middle">Thanh toán khi nhận hàng</td>';
                                } else if ($hinh_thuc_thanh_toan == 1) {
                                    echo '<td class="align-middle">Thanh toán online</td>';
                                }
                                echo '<td class="align-middle">' . $ngay_dat_hang . '</td>';
                                echo '<td class="align-middle">' . $ngay_giao_hang . '</td>';
                                echo '<td class="align-middle"><span style="font-weight:bolder;">' . number_format($khuyen_mai) . '</span></td>';
                                echo '<td class="align-middle"><span style="font-weight:bolder; color: red;">' . number_format($tong_tien) . '</span></td>';
                                if ($trang_thai_don_hang == "dagiaohang") {
                                    echo '<td class="align-middle"><span style="font-weight:bold; color: var(--primary);">Đã Giao Hàng</span></td>
                                    <td class="align-middle">
                                        <div style="display: flex; flex-direction: column; align-content: stretch; align-items: stretch;gap: .5em;">
                                        <button type="input" class="btn btn-info" id="order-details"><a href="order-details?ID=' . $id_hoa_don . '" style="color: white;">Xem Chi Tiết</a></button>
                                        </div>
                                    </td>
                                    </tr>';
                                }
                            }
                        } else {
                            echo '
                                <tr>
                                <td colspan="11" style="text-align:center;"><img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                <h4 style="text-align:center; padding-top:1em;">Không có đơn hàng chưa xác nhận!</h4>
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