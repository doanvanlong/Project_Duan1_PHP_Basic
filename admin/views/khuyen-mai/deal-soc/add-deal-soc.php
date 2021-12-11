<h3 class="alert bg-secondary text-light heading-cate">Tạo chương trình mua kèm deal sốc mới</h3>
<div class="giam-gia bg-light">
    <p class="alert alert-warning">Vui lòng điền thông tin chi tiết về chương trình deal sốc của bạn và mức giảm giá cho từng sản phẩm</p>
    <form action="" id="form_add_deal_soc" method="POST">
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Tên chương trình deal sốc</label>
            </div>
            <div class="col-5">
                <input type="text" autocomplete="off" class="form-control" name="ten_ct_deal_soc" aria-describedby="">
                <small class="text-danger error-ten_ct_deal_soc"></small>
            </div>

        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Thời gian deal sốc</label>
            </div>
            <div class="col-9">
                <div class="row align-items-center">
                    <div class="col-4">
                        <input type="datetime-local" name="date_start" class="form-control">
                        <small class="text-danger error-date_start"></small>
                    </div>
                    <div class="">---</div>
                    <div class="col-4">
                        <input type="datetime-local" name="date_end" class="form-control">
                        <small class="text-danger error-date_end"></small>
                    </div>
                </div>
                <small class="text-secondary my-3">* Thời gian kết thúc phải sau thời gian bắt đầu ít nhất 1 giờ</small>
                <small class="error-date text-danger"></small>
            </div>

        </div>

        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Loại chương trình giảm giá</label>
            </div>
            <div class="col-3">
                <select class="form-select form-select-lg exampleFormControlSelect1" name="loai_giam_gia_tien" aria-label="">
                    <?php
                    $list_loai_giam_gia = loai_giam_gia_Query_All();
                    foreach ($list_loai_giam_gia as $loai_giam) { ?>
                        <option name="loai_giam_gia_tien" value="<?= $loai_giam['id_loai_giam_gia_tien'] ?>"><?= $loai_giam['ten_loai_giam_gia_tien'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Giới hạn đặt hàng</label>
            </div>
            <div class="col-3">
                <input type="number" name="gioi_han_dat_hang" placeholder="" class="form-control" aria-describedby="passwordHelpInline">
                <small class="text-danger error-gioi_han_dat_hang"></small>
                <small class="text-secondary ">* Giới hạn khách đặt hàng khi tham gia</small>
            </div>
            <div class="col-3">
                <label for="" class="col-form-label">Sản phẩm mua kèm tối đa</label>
            </div>
            <div class="col-3">
                <select name="" id="" class="form-control exampleFormControlSelect1">
                    <option value="">1</option>
                </select>
            </div>
        </div>
        <div class="add-sp-deal-soc">


        </div>














        <!-- modal thêm sản phẩm  chính-->
        <!-- Large modal -->

        <div class="modal fade modal_add-sp-chinh" id="modal_add-sp-chinh" tabindex="-1" role="dialog" aria-labelledby="modal_add-sp-chinhTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header flex-column ">
                        <h5 class="modal-title text-dark" style="font-size:2rem;font-weight:600;" id="exampleModalLabel ">Chọn sản phẩm chính</h5>
                    </div>
                    <div class="scroll">
                        <div class="modal-body">
                            <div class="add-giam-gia-search-sp my-3 d-flex justify-content-between">
                                <select class="form-select form-select-lg mb-3 exampleFormControlSelect1" id="" aria-label=".form-select-lg example">
                                    <option selected>Tất cả loại hàng</option>
                                    <?php
                                    $list_dm = danh_muc_chinh_QueryAll();
                                    foreach ($list_dm as $dm) { ?>
                                        <option><?= $dm['ten_dm_pro'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <div class="mx-4 d-flex align-items-center searchgiam-gia-theo-ten justify-content-between">
                                    <select class="form-select form-select-lg mb-3 exampleFormControlSelect1" id="ten-san-search-giam-gia" aria-label=".form-select-lg example">
                                        <option selected>Tên sản phẩm</option>
                                    </select>
                                    <div class="box-form-search-add-giam-gia">
                                        <div class="form-inline form-search-add-giam-gia-sp  justify-content-between">
                                            <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                                            <button class="btn btn-outline-primary " type=""><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-sp my-4">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="radio" disabled="disabled"></th>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Đã bán</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Kho</th>
                                        </tr>
                                    </thead>
                                    <tbody class="load_danh_sach_sp-chinh">
                                        <?php
                                        $list_sp = san_pham_Query_Dien_Thoai_Top4_New(0); //limit 0,4
                                        foreach ($list_sp as $sp) {

                                            // sp ko nằm trong khuyến mãi giảm giá
                                        ?>
                                            <tr class="cursor-pointer " >
                                                <th scope="row" class="align-middle"> <input type="radio"  name="check_id_sp_chinh" id="<?= $sp['id_sp'] ?>" value="<?= $sp['id_sp'] ?>"></th>
                                                <td class="text-ellip d-flex">
                                                    <img style="width:60px;height:60px" src="<?= $CONTENT_UPLOAD ?>/<?= $sp['hinh_anh'] ?>" alt="">
                                                    <label for="<?= $sp['id_sp'] ?>" id="" class="">
                                                        <div class="content-ten-sp cursor-pointer"><?= $sp['ten_sp'] ?></div>
                                                        <div class="content-id_sp text-secondary">Mã: <?= $sp['id_sp'] ?></div>
                                                    </label>
                                                </td>
                                                <td><?= san_pham_Count_Da_Ban($sp['id_sp']) ?></td>
                                                <td><?= number_format($sp['don_gia'], 0, ',', '.') . 'đ' ?></td>
                                                <td>
                                                    <?= $sp['so_luong'] ?>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example " class="d-flex justify-content-center">
                            <ul class="pagination">
                                <!-- đếm số all record để biết đc số trang -->
                                <?php
                                $so_record = count(san_pham_Query_All_Dien_Thoai());
                                $so_sp_1_trang = 4;
                                $so_trang = ceil($so_record / $so_sp_1_trang); ?>
                                <!-- lấy tổng số trang qua cho Ajax -->
                                <input type="hidden" name="tong_so_trang" value="<?= $so_trang ?>">
                                <?php
                                for ($i = 1; $i <= $so_trang; $i++) {
                                    if ($i == 1) { ?>
                                        <li class="page-item"><a class="add-giam-gia-sp page-link active"><?= $i ?></a></li>
                                    <?php
                                    } else { ?>
                                        <li class="page-item"><a class="add-giam-gia-sp page-link "><?= $i ?></a></li>
                                    <?php
                                    }
                                    ?>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                            <button type="button" class="btn btn-primary submit-add-sp-chinh-session">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal thêm sản phẩm mua kèm -->
        <!-- Large modal -->

        <div class="modal fade modal_add-sp-mua-kem" id="modal_add-sp-mua-kem" tabindex="-1" role="dialog" aria-labelledby="modal_add-sp-mua-kemTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header flex-column ">
                        <h5 class="modal-title text-dark" style="font-size:2rem;font-weight:600;" id="exampleModalLabel ">Chọn sản phẩm</h5>
                        <p class="text-info">Một sản phẩm chỉ có thể tham gia một lần vào chương trình khuyến mãi</p>
                    </div>
                    <div class="scroll">
                        <div class="modal-body">
                            <div class="add-giam-gia-search-sp my-3 d-flex justify-content-between">
                                <select class="form-select form-select-lg mb-3 exampleFormControlSelect1" id="" aria-label=".form-select-lg example">
                                    <option selected>Tất cả loại hàng</option>
                                    <?php
                                    $list_dm = danh_muc_chinh_QueryAll();
                                    foreach ($list_dm as $dm) { ?>
                                        <option><?= $dm['ten_dm_pro'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <div class="mx-4 d-flex align-items-center searchgiam-gia-theo-ten justify-content-between">
                                    <select class="form-select form-select-lg mb-3 exampleFormControlSelect1" id="ten-san-search-giam-gia" aria-label=".form-select-lg example">
                                        <option selected>Tên sản phẩm</option>
                                    </select>
                                    <div class="box-form-search-add-giam-gia">
                                        <div class="form-inline form-search-add-giam-gia-sp  justify-content-between">
                                            <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                                            <button class="btn btn-outline-primary " type=""><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-sp my-4">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" disabled="disabled"></th>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Đã bán</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Kho</th>
                                        </tr>
                                    </thead>
                                    <tbody class="load_danh_sach_sp-mua-kem">
                                        <?php
                                        $list_sp = san_pham_Query_Top4_Phu_Kien(0); //limit 0,4
                                        $list_giam_gia = giam_gia_Query_All_Sp();
                                        foreach ($list_sp as $sp) {
                                            if (in_array($sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                // sp đã nằm trong khuyến mãi giảm giá
                                        ?>
                                                <tr class="cursor-help text-secondary" title="Sảm phẩm đã nằm trong chương trình khuyến mãi">
                                                    <th scope="row" class="align-middle"> <input type="checkbox" disabled name="check_id_sp_mua_kem" id="<?= $sp['id_sp'] ?>" value="<?= $sp['id_sp'] ?>"></th>
                                                    <td class="text-ellip d-flex">
                                                        <img style="width:60px;height:60px" src="<?= $CONTENT_UPLOAD ?>/<?= $sp['hinh_anh'] ?>" alt="">
                                                        <label for="<?= $sp['id_sp'] ?>" id="" class="">
                                                            <div class="content-ten-sp cursor-help"><?= $sp['ten_sp'] ?></div>
                                                            <div class="content-id_sp text-secondary">Mã: <?= $sp['id_sp'] ?></div>
                                                        </label>
                                                    </td>
                                                    <td><?= san_pham_Count_Da_Ban($sp['id_sp']) ?></td>
                                                    <td><?= number_format($sp['don_gia'], 0, ',', '.') . 'đ' ?></td>
                                                    <td>
                                                        <?= $sp['so_luong'] ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            } else {
                                                // sp chưa nằm trong khuyến mãi giảm giá
                                            ?>
                                                <tr>
                                                    <th scope="row" class="align-middle"> <input type="checkbox" name="check_id_sp_mua_kem" id="<?= $sp['id_sp'] ?>" value="<?= $sp['id_sp'] ?>"></th>
                                                    <td class="text-ellip d-flex">
                                                        <img style="width:60px;height:60px" src="<?= $CONTENT_UPLOAD ?>/<?= $sp['hinh_anh'] ?>" alt="">
                                                        <label for="<?= $sp['id_sp'] ?>" id="" class="cursor-pointer">
                                                            <div class="content-ten-sp"><?= $sp['ten_sp'] ?></div>
                                                            <div class="content-id_sp text-secondary">Mã: <?= $sp['id_sp'] ?></div>
                                                        </label>
                                                    </td>
                                                    <td><?= san_pham_Count_Da_Ban($sp['id_sp']) ?></td>
                                                    <td><?= number_format($sp['don_gia'], 0, ',', '.') . 'đ' ?></td>
                                                    <td>
                                                        <?= $sp['so_luong'] ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example " class="d-flex justify-content-center">
                            <ul class="pagination">
                                <!-- đếm số all record để biết đc số trang -->
                                <?php
                                $so_record = count(san_pham_Query_All_Phu_Kien());
                                $so_sp_1_trang = 4;
                                $so_trang = ceil($so_record / $so_sp_1_trang); ?>
                                <!-- lấy tổng số trang qua cho Ajax -->
                                <input type="hidden" name="tong_so_trang" value="<?= $so_trang ?>">
                                <?php
                                for ($i = 1; $i <= $so_trang; $i++) {
                                    if ($i == 1) { ?>
                                        <li class="page-item"><a class="add-sp-mua-kem page-link active"><?= $i ?></a></li>
                                    <?php
                                    } else { ?>
                                        <li class="page-item"><a class="add-sp-mua-kem page-link "><?= $i ?></a></li>
                                    <?php
                                    }
                                    ?>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                            <button type="button" class="btn btn-primary submit-add-sp-mua-kem-session">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>