<h3 class="alert bg-secondary text-light heading-cate">Tạo chương trình giảm giá mới</h3>
<div class="giam-gia bg-light">
    <p class="alert alert-warning">Vui lòng điền thông tin chi tiết về chương trình giảm giá của bạn và giá của từng sản phẩm</p>
    <form action="" id="form_add_giam_gia" method="POST">
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Tên chương trình giảm giá</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" name="ten_ct_giam_gia" aria-describedby="">
                <small class="text-danger error-ten_ct_giam_gia"></small>
            </div>

        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Thời gian giảm giá</label>
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
        <!-- <div class="row g-3 align-items-center box-form-giam-gia">
        <div class="col-3">
            <label for="" class="col-form-label"></label>
        </div>
        <div class="col-5">
            <div class="btn btn-success">Lưu và Tiếp tục</div>
        </div>

    </div> -->
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
            <div class="col-2">
                <label for="" class="col-form-label">Mức giảm</label>
            </div>
            <div class="col-4">
                <input type="number" name="muc_giam" placeholder="% or VND" class="form-control" aria-describedby="passwordHelpInline">
                <small class="text-danger error-muc_giam"></small>
            </div>

        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Giới hạn đặt hàng</label>
            </div>
            <div class="col-6">
                <input type="number" name="gioi_han_dat_hang" placeholder="" class="form-control" aria-describedby="passwordHelpInline">
                <small class="text-danger error-gioi_han_dat_hang"></small>
                <small class="text-secondary ">* Khi số lượng đặt hàng vượt mức sẻ tự động tạm dừng chương trình khuyến mãi này</small>
            </div>
        </div>
        <div class="hello">


        </div>














        <!-- modal thêm sản phẩm -->
        <!-- Large modal -->

        <div class="modal fade modal_add-giam-gia" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                            <div class="btn btn-outline-info ap-dung-giam-gia-all">Áp dụng tất cả sản phẩm</div>
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
                                    <tbody class="load_danh_sach_sp-add-giam-gia">
                                        <?php
                                        $list_sp = san_pham_Query_Top4_New(0); //limit 0,4
                                        $list_giam_gia = giam_gia_Query_All_Sp();
                                        foreach ($list_sp as $sp) {
                                            if (in_array($sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                // sp đã nằm trong khuyến mãi giảm giá
                                        ?>
                                                <tr class="cursor-help text-secondary" title="Sảm phẩm đã nằm trong chương trình khuyến mãi">
                                                    <th scope="row" class="align-middle"> <input type="checkbox" disabled name="check_id_sp" id="<?= $sp['id_sp'] ?>" value="<?= $sp['id_sp'] ?>"></th>
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
                                                    <th scope="row" class="align-middle"> <input type="checkbox" name="check_id_sp" id="<?= $sp['id_sp'] ?>" value="<?= $sp['id_sp'] ?>"></th>
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
                                $so_record = count(san_pham_QueryAll());
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
                            <button type="button" class="btn btn-primary submit-add-giam-gia-session">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>