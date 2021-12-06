<h3 class="alert bg-secondary text-light heading-cate">Chương trình tạo mã giảm giá sản phẩm</h3>
<div class="giam-gia bg-light">
    <div class="row">
        <div class="col-12">
            <p class="alert alert-warning">Hãy bắt đầu tạo Mã Giảm Giá cho shop</p>
            <a href="add-ma-giam-gia" class="btn btn-success textwhite my-3"><i class="fas fa-plus"></i> Tạo Chương Trình Mã Giảm Giá mới</a>
            <div class="giam-gia-inner">
                <div class="giam-gia-tab-status my-3">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="dang-dien-ra-tab" data-toggle="tab" href="#dang-dien-ra" role="tab" aria-controls="dang-dien-ra" aria-selected="true">Đang diễn ra</a>
                            <a class="nav-item nav-link" id="da-ket-thuc-tab" data-toggle="tab" href="#da-ket-thuc" role="tab" aria-controls="da-ket-thuc" aria-selected="false">Đã kết thúc</a>
                        </div>
                    </nav>
                    <div class="tab-content py-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="dang-dien-ra" role="tabpanel" aria-labelledby="dang-dien-ra-tab">

                            <!-- nếu  có chương trình đang diễn ra  -->
                            <?php
                            $list_id_dang_dien_ra = ma_giam_gia_Select_Ok_Id_Km_Dang_Dien_Ra();
                            if (count($list_id_dang_dien_ra) > 0) { ?>
                                <input class="form-control" id="myInput3" type="text" placeholder="Tìm kiếm chương trình giám giá">
                                <table class="table table-bordered table-striped my-4">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-secondary">Mã giảm giá | Tên</th>
                                            <th scope="col" class="text-secondary">Giảm giá</th>
                                            <th scope="col" class="text-secondary">Số lượng mã</th>
                                            <th scope="col" class="text-secondary">Số mã có thể sử dụng</th>
                                            <th scope="col" class="text-secondary">Đã dùng</th>
                                            <th scope="col" class="text-secondary">Trạng thái | thời gian</th>
                                            <th scope="col" class="text-secondary">Kết thúc</th>
                                            <th scope="col" class="text-secondary">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable3">
                                        <?php
                                        $list_id_km = ma_giam_gia_Select_Ok_Id_Km_Dang_Dien_Ra();
                                        foreach ($list_id_km as $id_km) {
                                            $info_all = ma_giam_gia_Query_By_Id_Km_Dang_Dien_Ra($id_km['id_khuyen_mai']);
                                            $info_km = khuyen_mai_Query_One_By_Id_Km($id_km['id_khuyen_mai']);
                                        ?>
                                            <tr>
                                                <td class="d-flex">
                                                    <div class="img-ma_giam_gia mr-2"><i class="fas fa-dollar-sign"></i></div>
                                                    <div>
                                                        <b class="text-secondary"><?= $info_all['ten_ma_giam_gia'] ?></b>
                                                        <small class="d-block text-secondary"><?= $info_km['ten_chuong_trinh'] ?></small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($info_all['id_loai_giam_gia_tien'] == 1) {
                                                        echo $info_all['muc_giam'] . '&nbsp;%';
                                                    } else {
                                                        echo number_format($info_all['muc_giam'], 0, ',', '.') . '&nbsp;đ';
                                                    }
                                                    ?>
                                                </td>
                                                <td><?= $info_km['so_luot_su_dung'] ?></td>
                                                <td style="width:10%"><?= $info_km['so_luot_su_dung'] - $info_km['da_su_dung'] ?></td>
                                                <td><?= $info_km['da_su_dung'] ?></td>
                                                <td style="font-size:1.2rem">
                                                    <div class="text-success">Đang diễn ra</div>
                                                    <div><?= $info_km['ngay_bat_dau'] ?></div>
                                                    <div><?= $info_km['ngay_ket_thuc'] ?></div>
                                                </td>
                                                <td class="" style="font-size:1.2rem">
                                                    <?php
                                                    $date_now = date('Y-m-d H:i:s');
                                                    $date_end = $info_km['ngay_ket_thuc'];
                                                    $diff = abs(strtotime($date_end) - strtotime($date_now));
                                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                                    $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
                                                    $minutes = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
                                                    ?>
                                                    <i class="fas fa-clock"></i> Sau
                                                    <?php
                                                    if ($months > 0) { ?>
                                                        <span class="mx-1"><?= $months ?></span>ngày
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($days > 0) { ?>
                                                        <span class="mx-1"><?= $days ?></span>ngày <br>
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($hours > 0) { ?>
                                                        <span class="mx-1"><?= $hours ?></span>giờ
                                                    <?php
                                                    }
                                                    ?>
                                                    <span class="mx-1"><?= $minutes ?></span>phút
                                                </td>
                                                <td>
                                                    <div class="btn btn-danger ket_thuc_km " data-toggle="modal" data-id_km="<?= $id_km['id_khuyen_mai'] ?>" data-target="#modal_ket_thuc_km">Kết thúc</div>
                                                    <a href="edit-ma-giam-gia?id_km=<?= $id_km['id_khuyen_mai'] ?>" class="btn btn-outline-info sua-km-ma-giam-gia">Sửa</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }

                                        ?>
                                    </tbody>
                                </table>

                                <!-- Modal hỏi có muốn kthuc KM ko-->
                                <div class="modal fade " id="modal_ket_thuc_km" tabindex="-1" role="dialog" aria-labelledby="modal_ket_thuc_kmTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title  " style="font-size:1.6rem !important" id="exampleModalLongTitle">Bạn có muốn kết thúc chương trình giảm giá này ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                                </button>
                                            </div>
                                            <div class="container my-5">
                                                <div class="row  " style="">
                                                    <button type="button" style="margin-left:20px" class="font-size col-5 py-3  btn btn-outline-primary btn-no_accpet text-primary" data-dismiss="modal" aria-label="Close">Không</button>
                                                    <button type="button" class="font-size col-5 offset-1 py-3  btn primary btn-accept text-light accpet-ket_thuc_km">Chấp nhận</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            <?php
                            } else { ?>
                                <div class="d-flex justify-content-center flex-column align-items-center">
                                    <img src="<?= $CONTENT_ADMIN_URL ?>/img/nodata.png" alt="">
                                    <p class="alert alert-danger">Chưa có chương trình mã giảm giá nào đang diễn ra</p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="tab-pane fade" id="da-ket-thuc" role="tabpanel" aria-labelledby="da-ket-thuc-tab">
                            <!-- nếu  có chương trình kết thúc  -->
                            <?php
                            $list_id_da_ket_thuc = ma_giam_gia_Select_Ok_Id_Km_Da_Ket_Thuc();
                            if (count($list_id_da_ket_thuc) > 0) { ?>
                                <input class="form-control" id="myInput4" type="text" placeholder="Tìm kiếm chương trình giám giá">
                                <table class="table table-bordered table-striped my-4">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-secondary">Mã giảm giá | Tên</th>
                                            <th scope="col" class="text-secondary">Giảm giá</th>
                                            <th scope="col" class="text-secondary">Số lượng mã</th>
                                            <th scope="col" class="text-secondary">Đã dùng</th>
                                            <th scope="col" class="text-secondary">Trạng thái | thời gian</th>
                                            <th scope="col" class="text-secondary">Kết thúc</th>
                                            <th scope="col" class="text-secondary">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable4">
                                        <?php
                                        $list_id_km = ma_giam_gia_Select_Ok_Id_Km_Da_Ket_Thuc();
                                        foreach ($list_id_km as $id_km) {
                                            $info_all = ma_giam_gia_Query_By_Id_Km_Da_Ket_Thuc($id_km['id_khuyen_mai']);
                                            $info_km = khuyen_mai_Query_One_By_Id_Km($id_km['id_khuyen_mai']);
                                        ?>
                                            <tr>
                                                <td class="d-flex">
                                                    <div class="img-ma_giam_gia mr-2"><i class="fas fa-dollar-sign"></i></div>
                                                    <div>
                                                        <b class="text-secondary"><?= $info_all['ten_ma_giam_gia'] ?></b>
                                                        <small class="d-block text-secondary"><?= $info_km['ten_chuong_trinh'] ?></small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($info_all['id_loai_giam_gia_tien'] == 1) {
                                                        echo $info_all['muc_giam'] . '&nbsp;%';
                                                    } else {
                                                        echo number_format($info_all['muc_giam'], 0, ',', '.') . '&nbsp;đ';
                                                    }
                                                    ?>
                                                </td>
                                                <td><?= $info_km['so_luot_su_dung'] ?></td>
                                                <td><?= $info_km['da_su_dung'] ?></td>
                                                <td style="font-size:1.2rem">
                                                    <div class="text-secondary">Đã kết thúc</div>
                                                    <div><?= $info_km['ngay_bat_dau'] ?></div>
                                                    <div><?= $info_km['ngay_ket_thuc'] ?></div>
                                                </td>
                                                <td class="text-danger" style="font-size:1.2rem">
                                                    <?php
                                                    $date_now = date('Y-m-d H:i:s');
                                                    $date_end = $info_km['ngay_ket_thuc'];
                                                    $diff = abs(strtotime($date_end) - strtotime($date_now));
                                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                                    $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
                                                    $minutes = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
                                                    ?>
                                                    <i class="fas fa-clock"></i> Đã kết thúc được
                                                    <?php
                                                    if ($months > 0) { ?>
                                                        <span class="mx-1"><?= $months ?></span>ngày
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($days > 0) { ?>
                                                        <span class="mx-1"><?= $days ?></span>ngày <br>
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($hours > 0) { ?>
                                                        <span class="mx-1"><?= $hours ?></span>giờ
                                                    <?php
                                                    }
                                                    ?>
                                                    <span class="mx-1"><?= $minutes ?></span>phút
                                                </td>
                                                <td>
                                                <div class="btn btn-danger xoa_km " data-toggle="modal" data-id_km="<?= $id_km['id_khuyen_mai'] ?>" data-target="#modal_xoa_km">Xoá</div>
                                                </td>
                                            </tr>
                                        <?php
                                        }

                                        ?>
                                    </tbody>
                                </table>

                                <!-- Modal hỏi có muốn xoá luôn KM ko-->
                                <div class="modal fade " id="modal_xoa_km" tabindex="-1" role="dialog" aria-labelledby="modal_xoa_kmTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title  " style="font-size:1.6rem !important" id="exampleModalLongTitle">Bạn có muốn xoá chương trình giảm giá này ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                                </button>
                                            </div>
                                            <div class="container my-5">
                                                <div class="row  " style="">
                                                    <button type="button" style="margin-left:20px" class="font-size col-5 py-3  btn btn-outline-primary btn-no_accpet text-primary" data-dismiss="modal" aria-label="Close">Không</button>
                                                    <button type="button" class="font-size col-5 offset-1 py-3  btn primary btn-accept text-light accpet-xoa_km">Chấp nhận</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            <?php
                            } else { ?>
                                <div class="d-flex justify-content-center flex-column align-items-center">
                                    <img src="<?= $CONTENT_ADMIN_URL ?>/img/nodata.png" alt="">
                                    <p class="alert alert-danger">Chưa có chương trình mã giảm giá nào đã kết thúc</p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        // search table bootstrap
        $("#myInput3").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable3 tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
        $("#myInput4").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable4 tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    })
</script>