<h3 class="alert bg-secondary text-light heading-cate">Danh Sách Đơn Hàng Mới</h3>
<div class="row">
    <div class="col-12">
                    <?php
                    if (!empty($list_orders)) {
                        echo '<div class="table-responsive">
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
                                    <th scope="col" class="table-dark" style="width: 23%;">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>';
                        foreach ($list_orders as $list) {
                            extract($list);
                            echo '
                                <tr style="text-align:center;">
                                <td class="align-middle">' . $idHoaDon . '</td>
                                <td class="align-middle">' . $idKhachHang . '</td>
                                <td class="align-middle">' . $hoTen . '</td>';
                            if ($hinhThucThanhToan == 0) {
                                echo '<td class="align-middle">Thanh toán khi nhận hàng</td>';
                            } else if ($hinhThucThanhToan == 1) {
                                echo '<td class="align-middle">Thanh toán online</td>';
                            }
                            echo '<td class="align-middle">' .date_create($ngayDatHang) -> format('d-m-Y') . '</td>';
                            echo '<td class="align-middle"><span style="font-weight:bolder;">' . number_format($khuyenMai) . '</span></td>';
                            echo '<td class="align-middle"><span style="font-weight:bolder; color: red;">' . number_format($tongTien) . '</span></td>';
                            if ($trangThai == "chuaxacnhan") {
                                echo '<td class="align-middle"><span style="font-weight:bold; color: var(--primary);">Chưa Xác Nhận</span></td>
                                    <td class="align-middle">
                                        <div class="btn-control">
                                            <div type="submit" class="btn btn-success confirmOrder" data-toggle="modal" data-target="#confirmOrder" data-id_hoa_don_confirm=' . $idHoaDon . '>Xác Nhận</div>
                                            <div type="submit" class="btn btn-danger confirmCancelled" data-toggle="modal" data-target="#confirmCancelled" data-id_hoa_don_cancelled=' . $idHoaDon . '>Huỷ Đơn</div>
                                            <div type="button" class="btn btn-primary" id="order-details"><a href="order-details?ID=' . $idHoaDon . '" style="color: white;">Xem Chi Tiết</a></div>
                                        </div>
                                    </td>
                                    </tr>';
                            }
                        }
                        echo '</table></div>';
                    } else {
                        echo '
                                        <hr>
                                        <div style="text-align: center;">
                                            <img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                            <h4 style="padding: 1em 1em;">Không có đơn hàng nào cần xác nhận.</h4>
                                        </div>
                                        <hr>';
                    }
                    ?>
                </tbody>
    </div>
    <!-- Modal xác nhận đơn hàng-->
    <div class="modal fade modal_remove" id="confirmOrder" tabindex="-1" role="dialog" aria-labelledby="ConfirmOrder" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  " style="font-size:1.6rem !important" id="exampleModalLongTitle">Bạn có muốn xác nhận đơn hàng này ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="container my-5">
                    <div class="row">
                        <button type="button" style="margin-left:20px" class="font-size col-5 py-3  btn btn-outline-primary btn-no_accpet text-primary" data-dismiss="modal" aria-label="Close">Không</button>
                        <button type="button" class="font-size col-5 offset-1 py-3  btn primary btn-accept text-light accept-confirm">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal huỷ đơn hàng-->
    <div class="modal fade modal_remove" id="confirmCancelled" tabindex="-1" role="dialog" aria-labelledby="ConfirmCancelled" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  " style="font-size:1.6rem !important" id="exampleModalLongTitle">Bạn có muốn huỷ đơn hàng này ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="container my-5">
                    <div class="row">
                        <button type="button" style="margin-left:20px" class="font-size col-5 py-3  btn btn-outline-primary btn-no_accpet text-primary" data-dismiss="modal" aria-label="Close">Không</button>
                        <button type="button" class="font-size col-5 offset-1 py-3  btn primary btn-accept text-light accept-cancelled">Huỷ đơn</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
