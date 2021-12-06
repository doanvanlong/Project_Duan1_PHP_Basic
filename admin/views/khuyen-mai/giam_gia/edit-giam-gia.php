<h3 class="alert bg-secondary text-light heading-cate">Cập nhật chương trình giảm giá</h3>
<div class="giam-gia bg-light">
    <p class="alert alert-warning">Vui lòng điền thông tin chi tiết về chương trình giảm giá của bạn và giá của từng sản phẩm</p>
    <form action="" id="form_update_giam_gia" method="POST">
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Tên chương trình giảm giá</label>
            </div>
            <input type="hidden" name="id_km" value="<?= $info_km['id_khuyen_mai'] ?>">
            <div class="col-5">
                <input type="text" class="form-control" value="<?= $info_km['ten_chuong_trinh'] ?>" name="ten_ct_giam_gia_update" aria-describedby="">
                <small class="text-danger error-ten_ct_giam_gia_update"></small>
            </div>

        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Thời gian kết thúc giảm giá</label>
            </div>
            <input type="hidden" name="id_khuyen_mai" value="<?= $info_km['id_khuyen_mai'] ?>">
            <input type="hidden" name="date_start" value="<?= $info_km['ngay_bat_dau'] ?>">
            <div class="col-9">
                <div class="row align-items-center">

                    <div class="col-6">
                        <input type="datetime-local" name="date_end" class="form-control">
                        <small class="text-danger error-date_end"></small>
                    </div>
                </div>
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
                    $list_loai_giam_gia = loai_giam_gia_Query_All(); //chỉ cần lấy thèn đầu tiên trong mảng list info all sp là đc

                    foreach ($list_loai_giam_gia as $loai_giam) {
                        if ($list_info_all_sp[0]['id_loai_giam_gia_tien'] == $loai_giam['id_loai_giam_gia_tien']) { ?>
                            <option name="loai_giam_gia_tien" selected value="<?= $loai_giam['id_loai_giam_gia_tien'] ?>"><?= $loai_giam['ten_loai_giam_gia_tien'] ?></option>
                        <?php
                        } else { ?>
                            <option name="loai_giam_gia_tien" value="<?= $loai_giam['id_loai_giam_gia_tien'] ?>"><?= $loai_giam['ten_loai_giam_gia_tien'] ?></option>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-2">
                <label for="" class="col-form-label">Mức giảm</label>
            </div>
            <div class="col-4">
                <!-- chỉ cần lấy thèn đại diện trong mảng là đc  -->
                <input type="number" name="muc_giam_gia" value="<?= $list_info_all_sp[0]['muc_giam'] ?>" placeholder="% or VND" class="form-control" aria-describedby="passwordHelpInline">
                <small class="text-danger error-muc_giam"></small>
            </div>

        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Giới hạn đặt hàng</label>
            </div>
            <div class="col-6">
                <input type="number" name="gioi_han_dat_hang" value="<?= $info_km['so_luot_su_dung'] ?>" class="form-control">
                <small class="text-danger error-gioi_han_dat_hang"></small>
                <small class="text-secondary ">* Khi số lượng đặt hàng vượt mức sẻ tự động tạm dừng chương trình khuyến mãi này</small>
            </div>
        </div>
        <div class=" load_sesion_sp">
            <div class="row g-3 align-items-center box-form-giam-gia add-them-san-pham">
                <div class="col-8">
                    <label for="" class="col-form-label pr-4">Sản phẩm</label>
                    <small class="text-secondary"><span class="text-danger">
                            <?php if (isset($_SESSION['add-giam-gia']) && count($_SESSION['add-giam-gia']) > 0) {
                                echo count($_SESSION['add-giam-gia']) + count($list_info_all_sp);
                            }
<<<<<<< HEAD
                            if (!isset($_SESSION['add-giam-gia'])) {
=======
>>>>>>> 13a134285c0f23305cc49bc7a7b48b674ae4eed0
                                echo count($list_info_all_sp);
                            ?>
                        </span>&nbsp;sản phẩm tham gia chương trình giảm giá này</small>
                </div>
                <div class="col-4 text-right">
                    <div class="btn btn-outline-dark unremove-lai-modal " data-toggle="modal" data-target="#exampleModalLong"><i class="fas fa-plus"></i> Thêm sản phẩm</div>
                    <button type="submit" class="btn btn-success cofirm-done-update-giam-gia"><i class="fas fa-check "></i> Cập nhật</button>
                </div>
            </div>
            <div class="row g-3 align-items-center box-form-giam-gia  ">
                <!-- load ajjax -->
                <!-- khi click vào xoá ,hoặc thêm lần thứ 2 vào session  -->
                <div class="col-12">
                    <table id="" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Giá gốc</th>
                                <th>Giá sau giảm</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="load_list_sp_session">
                            <!-- load từ session nếu có thêm -->
                            <?php
                            $i = 0;
                            if (isset($_SESSION['add-giam-gia']) && count($_SESSION['add-giam-gia']) > 0) {
                                foreach ($_SESSION['add-giam-gia'] as $giam_gia) {
                                    $info_sp = san_pham_Query_One($giam_gia);
                                    $i++;
                                    $danh_muc = danh_muc_chinh_QueryOne($info_sp['id_dm_pro']);
                            ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td class="d-flex">
                                            <img style="width:50px;" src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt="">
                                            <div class="text-ellip pl-3">
                                                <?= $info_sp['ten_sp'] ?>
                                            </div>
                                        </td>
                                        <td><?= $danh_muc['ten_dm_pro'] ?></td>
                                        <td><?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></td>
                                        <td>
                                            <p class="gia_sau_giam" data-id="<?= $info_sp['id_sp'] ?>"></p>
                                        </td>
                                        <td class="delete_sp_giam_gia cursor-pointer" data-id_sp="<?= $info_sp['id_sp'] ?>"><i class="fas fa-trash-alt"></i></td>
                                    </tr>

                            <?php
                                }
                            }
                            ?>
                            <!-- Load từ DB ra -->
                            <?php

                            foreach ($list_info_all_sp as $info_sp) {
                                $danh_muc = danh_muc_chinh_QueryOne($info_sp['id_dm_pro']);
                                $i++; ?>
                                <tr>
                                    <input type="hidden" name="id_sp[]" value="<?= $info_sp['id_sp'] ?>">
                                    <td><?= $i ?></td>
                                    <td class="d-flex">
                                        <img style="width:50px;" src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt="">
                                        <div class="text-ellip pl-3">
                                            <?= $info_sp['ten_sp'] ?>
                                        </div>
                                    </td>
                                    <td><?= $danh_muc['ten_dm_pro'] ?></td>
                                    <td><?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></td>
                                    <td>
                                        <p class="gia_sau_giam" data-id="<?= $info_sp['id_sp'] ?>"></p>
                                    </td>
                                    <td class="delete_sp_giam_gia_DB cursor-pointer" data-id_giam_gia="<?= $info_sp['id_giam_gia'] ?>"><i class="fas fa-trash-alt"></i></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </form>

</div>










<!-- modal thêm sản phẩm -->
<!-- Large modal -->

<div class="modal fade modal_add-giam-gia" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column ">
                <h5 class="modal-title text-dark" style="font-size:2rem;font-weight:600;" id="exampleModalLabel ">Chọn sản phẩm</h5>
                <p class="text-info">Một sản phẩm chỉ có thể tham gia vào một chương trình khuyến mãi</p>
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
<script>
    $(document).ready(function() {

        //Trang UPDATE GIẢM giá

        // Delete sp trong DB
        $('.delete_sp_giam_gia_DB').click(function() {
            var id_giam_gia = $(this).data('id_giam_gia');
            $.post(
                '../admin/xu-ly/khuyen-mai/giam-gia/delete-sp_DB.php', {
                    id_delete_giam_gia: id_giam_gia
                },
                function(data) {
                    if (data == 1) {
                        // gọi hàm load sp DB
                        location.reload();
                    }
                }
            )
        })


        // SESSion

        //thành công thì ,lấy giá sau giảm từ JS
        var loai_giam_gia = $('[name*="loai_giam_gia_tien"]').val();
        var muc_giam = $('[name*="muc_giam"]').val();
        if (muc_giam > 0) {
            $.post(
                "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php", {
                    change_so_tien_giam: loai_giam_gia,
                    muc_giam: muc_giam
                },
                function(data) {
                    //lấy data text vào mức giá sau giảm giá
                    var list = JSON.parse(data);
                    var class_gia_sau_giam =
                        document.querySelectorAll(".gia_sau_giam"); //lấy  all thẻ để text vào
                    var i = 0;
                    // lặp obj và text nó vào thứ i , mỗi lần chạy i++;
                    for (var item of list) {
                        var gia_sau_giam = item.gia_sau_giam.toLocaleString("vi", {
                            style: "currency",
                            currency: "VND",
                        });
                        class_gia_sau_giam[i].innerText = gia_sau_giam;
                        i++;
                    }
                }
            );
        }

        //
        //hàm keyup khi cả 2 đều thay đổi mới đc mức giảm thì giá sản phẩm khi giảm sẻ hiện
        $('[name*="loai_giam_gia_tien"]').change(function() {
            $('[name*="muc_giam"]').keyup(function() {
                var loai_giam_gia = $('[name*="loai_giam_gia_tien"]').val();
                //  gửi mức giảm và loại giảm
                var muc_giam = $('[name*="muc_giam"]').val();
                if (muc_giam > 0) {
                    $.post(
                        "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php", {
                            keyup_so_tien_giam: loai_giam_gia,
                            muc_giam: muc_giam
                        },
                        function(data) {
                            //lấy data text vào mức giá sau giảm giá
                            var list = JSON.parse(data);
                            var class_gia_sau_giam = document.querySelectorAll(".gia_sau_giam"); //lấy  all thẻ để text vào
                            var i = 0;
                            // lặp obj và text nó vào thứ i , mỗi lần chạy i++;
                            for (var item of list) {
                                var gia_sau_giam = item.gia_sau_giam.toLocaleString("vi", {
                                    style: "currency",
                                    currency: "VND",
                                });
                                class_gia_sau_giam[i].innerText = gia_sau_giam;
                                i++;
                            }
                        }
                    );
                }
            });
        });
        //hàm keyup khi chỉ1 thèn mức giá thay đổi  thì giá sản phẩm  giảm khi giảm sẻ hiện
        $('[name*="muc_giam"]').keyup(function() {
            var loai_giam_gia = $('[name*="loai_giam_gia_tien"]').val();
            //  gửi mức giảm và loại giảm
            var muc_giam = $('[name*="muc_giam"]').val();
            if (muc_giam > 0) {
                $.post(
                    "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php", {
                        keyup_so_tien_giam: loai_giam_gia,
                        muc_giam: muc_giam
                    },
                    function(data) {
                        //lấy data text vào mức giá sau giảm giá
                        var list = JSON.parse(data);
                        var class_gia_sau_giam = document.querySelectorAll(".gia_sau_giam"); //lấy  all thẻ để text vào
                        var i = 0;
                        // lặp obj và text nó vào thứ i , mỗi lần chạy i++;
                        for (var item of list) {
                            var gia_sau_giam = item.gia_sau_giam.toLocaleString("vi", {
                                style: "currency",
                                currency: "VND",
                            });
                            class_gia_sau_giam[i].innerText = gia_sau_giam;
                            i++;
                        }
                    }
                );
            }
        });


        //    // xữ lý thêm sp giảm giá vào session
        $(".submit-add-giam-gia-session").click(function() {
            var check_id_sp = $('[name*="check_id_sp"]');
            var result = [];
            for (var i = 0; i < check_id_sp.length; i++) {
                if (check_id_sp[i].checked === true) {
                    result.push(check_id_sp[i].value);
                }
            }
            //gửi mảng id_sp vào session
            $.post(
                "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php", {
                    mang_giam_gia_id_sp: result
                },
                function(data) {
                    if (data == 1) {
                        location.reload();

                    }
                }
            );
        });
        //xoá session sản phẩm theo id data
        $(".delete_sp_giam_gia").click(function() {
            var id_sp_xoa_session = $(this).data("id_sp");
            $.post(
                "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php", {
                    id_delete_sp: id_sp_xoa_session
                },
                function(data) {
                    if (data == 1) {
                        // thành công
                        location.reload();
                    }
                }
            );
        });

        //hàm keyup khi chỉ1 thèn mức giá thay đổi  thì giá sản phẩm  giảm khi giảm sẻ hiện
        $('[name*="muc_giam"]').keyup(function() {
            var loai_giam_gia = $('[name*="loai_giam_gia_tien"]').val();
            //  gửi mức giảm và loại giảm
            var muc_giam = $('[name*="muc_giam"]').val();
            if (muc_giam > 0) {
                $.post(
                    "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php", {
                        keyup_so_tien_giam: loai_giam_gia,
                        muc_giam: muc_giam
                    },
                    function(data) {
                        //lấy data text vào mức giá sau giảm giá
                        var list = JSON.parse(data);

                        var class_gia_sau_giam = document.querySelectorAll(".gia_sau_giam"); //lấy  all thẻ để text vào
                        var i = 0;
                        // lặp obj và text nó vào thứ i , mỗi lần chạy i++;
                        for (var item of list) {
                            var gia_sau_giam = item.gia_sau_giam.toLocaleString("vi", {
                                style: "currency",
                                currency: "VND",
                            });
                            class_gia_sau_giam[i].innerText = gia_sau_giam;
                            i++;
                        }
                    }
                );
            }
        })

        //click vào trang để lấy được số trang$
        $(".add-giam-gia-sp.page-link").click(function() {
            var trang = $(this).text();
            // lấy số trang truyền qua file php data-phân trang
            $.get(
                "../admin/xu-ly/khuyen-mai/giam-gia/data-phan-trang.php", {
                    trang: trang
                },
                function(data) {
                    // truyền vào lại html ,mặc định load trước top 5 sp php ,khi click mới gọi ajax
                    $(".load_danh_sach_sp-add-giam-gia").html(data);
                }
            );
        });

        // n
        // Trang Update
        //kiểm tra mới insert vào DB
        $("#form_update_giam_gia").submit(function(e) {
            e.preventDefault();
            if (
                $('[name*="ten_ct_giam_gia"]').val() == "" ||
                $('[name*="date_end"]').val() == "" ||
                $('[name*="muc_giam"]').val() == "" ||
                $('[name*="gioi_han_dat_hang"]').val() == ""
            ) {
                if ($('[name*="ten_ct_giam_gia_update"]').val() == "") {
                    $(".error-ten_ct_giam_gia_update").text("Tên chương trình không được trống");
                } else {
                    $(".error-ten_ct_giam_gia_update").text("");
                }

                if ($('[name*="date_end"]').val() == "") {
                    $(".error-date_end").text("Ngày kết thúc không được trống");
                    toast({
                        title: "Thất bại",
                        msg: "Cập nhật giảm giá thất bại!",
                        type: "error",
                        duration: 5000,
                        link: "#",
                    });
                } else {
                    $(".error-date_end").text("");
                }
                if ($('[name*="muc_giam"]').val() == "") {
                    $(".error-muc_giam").text("Mức giảm không được trống");
                } else {
                    $(".error-muc_giam").text("");
                }
                if ($('[name*="gioi_han_dat_hang"]').val() == "") {
                    $(".error-gioi_han_dat_hang").text(
                        "Giới hạn đặt hàng không được trống"
                    );
                } else {
                    $(".error-gioi_han_dat_hang").text("");
                }
            } else {
                // kiểm trố số âm
                if (
                    $('[name*="muc_giam"]').val() <= 0 ||
                    $('[name*="gioi_han_dat_hang"]').val() <= 0
                ) {
                    if ($('[name*="muc_giam"]').val() <= 0) {
                        $(".error-muc_giam").text("Mức giảm không là số âm");
                    } else {
                        $(".error-muc_giam").text("");
                    }
                    if ($('[name*="gioi_han_dat_hang"]').val() <= 0) {
                        $(".error-gioi_han_dat_hang").text(
                            "Giới hạn đặt hàng không là số âm"
                        );
                    } else {
                        $(".error-gioi_han_dat_hang").text("");
                    }
                } else {
                    // gửi ajax
                    $.ajax({
                        url: "../admin/xu-ly/khuyen-mai/giam-gia/update-giam-gia.php",
                        type: "POST",
                        data: $("#form_update_giam_gia").serializeArray(),
                        success: function(data) {
                              if (data == 1) {
                                toast({
                                  title: "Thành công",
                                  msg: "Cập nhật giảm giá thành công !",
                                  type: "success",
                                  duration: 5000,
                                  link: "add-giam-gia",
                                });
                                setTimeout(function () {
                                  window.location.href = "giam-gia";
                                }, 1200);
                                //khi add thành công,và xoá session done thì reload về
                                // trang list giảm giá
                              }
                        },
                    });

                }
            }
        });

    })
</script>