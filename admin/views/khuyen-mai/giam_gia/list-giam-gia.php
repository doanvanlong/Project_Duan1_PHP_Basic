<h3 class="alert bg-secondary text-light heading-cate">Chương trình giảm giá sản phẩm</h3>
<div class="giam-gia bg-light">
    <div class="row">
        <div class="col-12">
            <p class="alert alert-warning">Hãy bắt đầu tạo Chương Trình Giảm Giá cho từng sản phẩm</p>
            <a href="add-giam-gia" class="btn btn-success textwhite my-3"><i class="fas fa-plus"></i> Tạo Chương Trình Giảm Giá mới</a>
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

                            <!-- nếu chưa có chương trình đang diễn ra nào -->
                            <?php
                            $list_id_dang_dien_ra = giam_gia_Select_Ok_Id_Km_Dang_Dien_Ra();
                            if (count($list_id_dang_dien_ra) > 0) { ?>
                                <input class="form-control" id="myInput" type="text" placeholder="Tìm kiếm chương trình giám giá">
                                <table class="table table-bordered table-striped my-4">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-secondary">Tên chương trình</th>
                                            <th scope="col" class="text-secondary">Sản phẩm</th>
                                            <th scope="col" class="text-secondary">Từ</th>
                                            <th scope="col" class="text-secondary">Đến</th>
                                            <th scope="col" class="text-secondary">Kết thúc</th>
                                            <th scope="col" class="text-secondary">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <?php
                                        $list_id_km = giam_gia_Select_Ok_Id_Km_Dang_Dien_Ra();
                                        foreach ($list_id_km as $id_km) {
                                            $info_all = giam_gia_Query_By_Id_Km_Dang_Dien_Ra($id_km['id_khuyen_mai']);
                                            $mang_anh = [];
                                            foreach ($info_all as $info) {
                                                array_push($mang_anh, $info['hinh_anh']);
                                            }
                                            // có đc mảng ảnh
                                            // xong lặp ra đưa ảnh vào
                                            $info_km = khuyen_mai_Query_One_By_Id_Km($id_km['id_khuyen_mai']);
                                        ?>
                                            <tr>
                                                <td class="d-flex flex-column">
                                                    <b class=""><?= $info_km['ten_chuong_trinh'] ?></b>
                                                    <small class="text-success">Đang diễn ra</small>

                                                </td>
                                                <td>
                                                    <?php
                                                    $i = 0;
                                                    $dem = count($mang_anh);
                                                    foreach ($mang_anh as $anh) { //hiện tối đa 3 ảnh
                                                        if ($i < 3) { ?>
                                                            <img style="width:50px" src="<?= $CONTENT_UPLOAD ?>/<?= $anh ?>" alt="">
                                                        <?php
                                                            $i++;
                                                        } else { ?>
                                                            <span class="count-sp-con-lai text-primary " style="font-weight:600">+ <?= $dem - 3 ?></span>
                                                            <i class="fas fa-ellipsis-h text-primary"></i>
                                                        <?php break;
                                                        } ?>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td><?= $info_km['ngay_bat_dau'] ?></td>
                                                <td><?= $info_km['ngay_ket_thuc'] ?></td>
                                                <td>
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
                                                    Sau
                                                    <?php
                                                    if ($months > 0) { ?>
                                                        <span class="mx-1"><?= $months ?></span>ngày
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($days > 0) { ?>
                                                        <span class="mx-1"><?= $days ?></span>ngày
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
                                                    <a href="edit-giam-gia?id_km=<?=$id_km['id_khuyen_mai']?>" class="btn btn-outline-info sua-km-giam-gia" >Sửa</a>
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
                                    <p class="alert alert-danger">Chưa có chương trình giảm giá nào đang diễn ra</p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="tab-pane fade" id="da-ket-thuc" role="tabpanel" aria-labelledby="da-ket-thuc-tab">
                            <!-- nếu chưa có chương trình kết thúc nào -->
                            <?php
                            $list_id_da_ket_thuc = giam_gia_Select_Ok_Id_Km_Da_Ket_Thuc();
                            if (count($list_id_da_ket_thuc) > 0) { ?>
                                <input class="form-control" id="myInput2" type="text" placeholder="Tìm kiếm chương trình giám giá">
                                <table class="table table-bordered table-striped my-4">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-secondary">Tên chương trình</th>
                                            <th scope="col" class="text-secondary">Sản phẩm</th>
                                            <th scope="col" class="text-secondary">Từ</th>
                                            <th scope="col" class="text-secondary">Kết thúc</th>
                                            <th scope="col" class="text-secondary">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable2">
                                        <?php
                                        $list_id_km = giam_gia_Select_Ok_Id_Km_Da_Ket_Thuc();
                                        foreach ($list_id_km as $id_km) {
                                            $info_all = giam_gia_Query_By_Id_Km_Da_Ket_Thuc($id_km['id_khuyen_mai']);
                                            $mang_anh = [];
                                            foreach ($info_all as $info) {
                                                array_push($mang_anh, $info['hinh_anh']);
                                            }
                                            // có đc mảng ảnh
                                            // xong lặp ra đưa ảnh vào
                                            $info_km = khuyen_mai_Query_One_By_Id_Km($id_km['id_khuyen_mai']);
                                        ?>
                                            <tr>
                                                <td class="d-flex flex-column">
                                                    <b class=""><?= $info_km['ten_chuong_trinh'] ?></b>
                                                    <small class="text-muted">Đã kết thúc</small>

                                                </td>
                                                <td>
                                                    <?php
                                                    $i = 0;
                                                    $dem = count($mang_anh);
                                                    foreach ($mang_anh as $anh) { //hiện tối đa 3 ảnh
                                                        if ($i < 3) { ?>
                                                            <img style="width:50px" src="<?= $CONTENT_UPLOAD ?>/<?= $anh ?>" alt="">
                                                        <?php
                                                            $i++;
                                                        } else { ?>
                                                            <span class="count-sp-con-lai text-primary " style="font-weight:600">+ <?= $dem - 3 ?></span>
                                                            <i class="fas fa-ellipsis-h text-primary"></i>
                                                        <?php break;
                                                        } ?>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td><?= $info_km['ngay_bat_dau'] ?></td>
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
                                                <td class="d-flex flex-column"><?= $info_km['ngay_ket_thuc'] ?>
                                                    <small class="text-danger">Đã kết thúc được
                                                        <?php
                                                        if ($days > 0) { ?>
                                                            <?= $days ?>
                                                            <span class="mx-1">ngày</span>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($hours > 0) { ?>
                                                            <?= $hours ?><span class="mx-1">giờ</span>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?= $minutes ?><span class="mx-1">phút trước</span></small>
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
                                    <p class="alert alert-danger">Chưa có chương trình giảm giá nào đang diễn ra</p>
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
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
        $("#myInput2").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable2 tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    })
</script>