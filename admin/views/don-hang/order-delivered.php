<h3 class="alert bg-secondary text-light">DANH SÁCH ĐƠN HÀNG ĐÃ GIAO THÀNH CÔNG:</h3>
<div class="row">
    <div class="col-12">
        <h3 class="alert bg-secondary text-light">Danh Sách Đơn Hàng Chờ Xác Nhận Đã Giao</h3>
        <?php
        if (!empty($list_orders_confirm)) {
            echo '<div class="table-responsive">
                    <table class="table">
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
                            ';
            foreach ($list_orders_confirm as $list) {
                extract($list);
                echo '<tbody>
                                <tr style="text-align:center;">
                                <td class="align-middle">' . $idHoaDon . '</td>
                                <td class="align-middle">' . $idKhachHang . '</td>
                                <td class="align-middle">' . $hoTen . '</td>';
                if ($hinhThucThanhToan == 0) {
                    echo '<td class="align-middle">Thanh toán khi nhận hàng</td>';
                } else if ($hinhThucThanhToan == 1) {
                    echo '<td class="align-middle">Thanh toán online</td>';
                }
                echo '<td class="align-middle">' . date_create($ngayDatHang) -> format('d-m-Y') . '</td>';
                echo '<td class="align-middle"><span style="font-weight:bolder;">' . number_format($khuyenMai) . '</span></td>';
                echo '<td class="align-middle"><span style="font-weight:bolder; color: red;">' . number_format($tongTien) . '</span></td>';
                if ($trangThai == "daxacnhan") {
                    echo '<td class="align-middle"><span style="font-weight:bold; color: var(--success);">Đã Xác Nhận</span></td>
                                    <td class="align-middle">
                                        <div style="display: flex; flex-direction: column; align-content: stretch; align-items: stretch;gap: .5em;">
                                        <div type="button" class="btn btn-primary" id="order-details"><a href="order-details?ID=' . $idHoaDon . '" style="color: white;">Xem Chi Tiết</a></div>
                                            <div type="submit" class="btn btn-success confirmDelivery" data-toggle="modal" data-target="#confirmDelivery" data-id_hoa_don_delivery=' . $idHoaDon . '>Xác Nhận Đã Giao</div>
                                        </div>
                                    </td>
                                    </tr>
                                </tbody>
                            ';
                }
            }
            echo '</table>
            </div>';
        } else {
            echo '
            <hr>
            <div style="text-align: center;">
                <img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                <h4 style="padding: 1em 1em;">Không có đơn hàng cần xác nhận đã giao.</h4>
            </div>
            <hr>';
        }
        ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h3 class="alert bg-secondary text-light">Danh Sách Đơn Hàng Đã Giao Thành Công</h3>
                        <?php
                        if (!empty($list_orders_delivery_confirm)) {
                            echo '<div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col" class="table-dark">ID Hoá Đơn</th>
                                    <th scope="col" class="table-dark">ID Khách Hàng</th>
                                    <th scope="col" class="table-dark" style="width:12%;">Họ Tên</th>
                                    <th scope="col" class="table-dark">Trạng Thái Thanh Toán</th>
                                    <th scope="col" class="table-dark" style="width:15%;">Hình Thức Thanh Toán</th>
                                    <th scope="col" class="table-dark">Ngày Đặt Hàng</th>
                                    <th scope="col" class="table-dark">Ngày Giao Hàng</th>
                                    <th scope="col" class="table-dark">Khuyến Mãi</th>
                                    <th scope="col" class="table-dark">Tổng Tiền</th>
                                    <th scope="col" class="table-dark">Trạng Thái Đơn Hàng</th>
                                    <th scope="col" class="table-dark">Hành Động</th>
                                </tr>
                            </thead>';
                            foreach ($list_orders_delivery_confirm as $list2) {
                                extract($list2);
                                echo '<tbody>
                                <tr style="text-align:center;">
                                <td class="align-middle">' . $idHoaDon . '</td>
                                <td class="align-middle">' . $idKhachHang . '</td>
                                <td class="align-middle">' . $hoTen . '</td>';
                                if ($thanhToan == "dathanhtoan") {
                                    echo '<td class="align-middle">Đã thanh toán</td>';
                                } else {
                                    echo '<td class="align-middle">Chưa thanh toán</td>';
                                }
                                if ($hinhThucThanhToan == 0) {
                                    echo '<td class="align-middle">Thanh toán khi nhận hàng</td>';
                                } else if ($hinhThucThanhToan == 1) {
                                    echo '<td class="align-middle">Thanh toán online</td>';
                                }
                                echo '<td class="align-middle">' . date_create($ngayDatHang) -> format('d-m-Y') . '</td>';
                                echo '<td class="align-middle">' . date_create($ngayGiaoHang) -> format('d-m-Y') . '</td>';
                                echo '<td class="align-middle"><span style="font-weight:bolder;">' . number_format($khuyenMai) . '</span></td>';
                                echo '<td class="align-middle"><span style="font-weight:bolder; color: red;">' . number_format($tongTien) . '</span></td>';
                                if ($trangThai == "dagiaohang") {
                                    echo '<td class="align-middle"><span style="font-weight:bold; color: var(--primary);">Đã Giao Hàng</span></td>
                                    <td class="align-middle">
                                        <div style="display: flex; flex-direction: column; align-content: stretch; align-items: stretch;gap: .5em;">
                                            <div type="button" class="btn btn-primary" id="order-details"><a href="order-details?ID=' . $idHoaDon . '" style="color: white;">Xem Chi Tiết</a></div>
                                        </div>
                                    </td>
                                    </tr>
                                    </tbody>';
                                }
                            }
                            echo '</table></div>';
                        } else {
                            echo '
                            <hr>
                            <div style="text-align: center;">
                                <img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                <h4 style="padding: 1em 1em;">Không có đơn hàng nào đã giao.</h4>
                            </div>
                            <hr>';
                        }
                        ?>
    </div>
</div>
<!-- Modal xác nhận đã giao thành công đơn hàng-->
<div class="modal fade modal_remove" id="confirmDelivery" tabindex="-1" role="dialog" aria-labelledby="confirmDelivery" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  " style="font-size:1.6rem !important" id="exampleModalLongTitle">Bạn có muốn xác nhận đã giao thành công đơn hàng này ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="container my-5">
                <div class="row">
                    <button type="button" style="margin-left:20px" class="font-size col-5 py-3  btn btn-outline-primary btn-no_accpet text-primary" data-dismiss="modal" aria-label="Close">Không</button>
                    <button type="button" class="font-size col-5 offset-1 py-3  btn primary btn-accept text-light accept-delivery">Xác nhận đã giao hàng</button>
                </div>
            </div>
        </div>
    </div>
</div>