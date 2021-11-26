<h3 class="alert text-light bg-secondary  heading-cate mb-5">Sửa sản phẩm</h3>
<form action="" id="update-san-pham" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <input type="hidden" name="id_sp" value="<?= $info_sp['id_sp']; ?>">
                <label>Danh mục: </label>
                <select class="form-select padding-select danh-muc-chinh-san-pham-update" style="border: 1px solid #ced4da;outline:none;" name="danh-muc-chinh-san-pham-update">
                    <!-- <option value="">---Chọn danh mục---</option> -->
                    <?php
                    if (isset($list_dm_pro)) {
                        if (isset($id_sp) && isset($info_sp)) { //nếu danh mục chính của sp == danh muc chính khi lặp ra thì selected
                            foreach ($list_dm_pro as $dm_pro) {
                                if ($dm_pro['id_dm_pro'] == $info_sp['id_dm_pro']) { ?>
                                    <option selected value="<?= $dm_pro['id_dm_pro']; ?>"><?= $dm_pro['ten_dm_pro']; ?></option>
                                <?php
                                } else { ?>
                                    <option value="<?= $dm_pro['id_dm_pro']; ?>"><?= $dm_pro['ten_dm_pro']; ?></option>
                                <?php
                                }
                                ?>
                    <?php
                            }
                        }
                    }
                    ?>
                </select>
                <small id="error-danh-muc-chinh-san-pham-update" class="form-text text-danger  "></small>

            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label class="form-label">Danh mục chi tiết: </label>
                <select class="form-select padding-select" name="danh-muc-chi-tiet-update">
                    <!-- danh-muc-chi-tiet-san-pham -->
                    <?php
                    if (isset($list_sub_dm_pro)) {
                        if (isset($list_dm_pro)) {
                            foreach ($list_dm_pro as $dm_pro) {
                                if ($dm_pro['id_dm_pro'] == $info_sp['id_dm_pro']) {
                                    // nếu thuộc danh mục chính 
                                    $id_dm_pro =  $info_sp['id_dm_pro']; //lấy được danh mục chính của sp
                                    $list_dm_con_by_id_dm_chinh = danh_muc_con_Select_by_id_dm_chinh($id_dm_pro);
                                    foreach ($list_dm_con_by_id_dm_chinh as $list_dm_con_by_id_dm_chinh) {
                                        if ($list_dm_con_by_id_dm_chinh['id_sub_dm_pro'] == $info_sp['id_sub_dm_pro']) {
                                            // nếu id dm con của sp = id dm con của list dm con thì hiển thị đầu tiên
                    ?>
                                            <option selected value="<?= $list_dm_con_by_id_dm_chinh['id_sub_dm_pro']; ?>"><?= $list_dm_con_by_id_dm_chinh['ten_sub_dm_pro'] ?></option>
                                        <?php
                                        } else {
                                            // nếu id dm con của sp khác id dm con của list dm con 
                                        ?>
                                            <option value="<?= $list_dm_con_by_id_dm_chinh['id_sub_dm_pro']; ?>"><?= $list_dm_con_by_id_dm_chinh['ten_sub_dm_pro'] ?></option>
                    <?php
                                        }
                                    }
                                }
                            }
                        }
                    }
                    ?>
                </select>
                <small id="error-danh-muc-chi-tiet-san-pham" class="form-text text-danger  "></small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Tên sản phẩm:</label>
            <input type="text" class="form-control" value="<?= $info_sp['ten_sp']; ?>" name="ten-san-pham">
            <small id="error-ten-san-pham" class="form-text text-danger "></small>
        </div>
        <div class="col-md-6">
            <label>Đơn giá:</label>
            <input type="number" class="form-control" value="<?= $info_sp['don_gia']; ?>" name="gia-san-pham" placeholder="VND">
            <small id="error-gia-san-pham" class="form-text text-danger "></small>
        </div>
        <!-- Nếu là điện thoại mới có màu sắc -->
        <?php
        if (san_pham_Is_Dm_Phone($info_sp['id_sp']) == 0) {
        } else {
            //  là điện thoại
        ?>
            <div class="col-md-3 hide-mau-sac">
                <label>Màu sắc:</label>
                <?php
                $mau_sac_sp = san_pham_Query_One_Color($info_sp['id_sp']);
                $mau_sac = $mau_sac_sp['ten_mau'];
                ?>
                <input type="text" value="<?= $mau_sac; ?>" class="form-control" name="mau-sac">
                <small id="error-mau-sac" class="form-text text-danger "></small>
            </div>
        <?php
        }

        ?>
        <div class="col-md-3">

            <label>Số lượng:</label>
            <input type="number" value="<?= $info_sp['so_luong']; ?>" class="form-control" name="so-luong-san-pham">
            <small id="error-so-luong-san-pham" class="form-text text-danger "></small>
        </div>

        <!-- NẾu là điện thoại mới có dung lượng -->
        <?php
        if (san_pham_Is_Dm_Phone($info_sp['id_sp']) == 0) {
        } else { ?>
            <div class="col-md-6 hide-dung-luong">
                <label>Dung lượng:</label>
                <br>
                <?php
                // xữ lý checked dung lượng DB
                $dung_luong_sp = san_pham_QueryOne_Dung_Luong($info_sp['id_sp']);
                $dung_luong = $dung_luong_sp['rom'];
                if ($dung_luong) { ?>
                    <input type="hidden" class="check_remove_dung_luong" value="<?php echo $dung_luong; ?>">
                <?php
                }
                ?>

                <div class="form-check form-check-inline check-dung-luong" data-check_dung_luong="16">
                    <input class="form-check-input" type="radio" name="dung-luong" id="inlineRadio2" value="16 ">
                    <label class="form-check-label" for="inlineRadio2">16 GB</label>
                </div>

                <div class="form-check form-check-inline check-dung-luong" data-check_dung_luong="32">
                    <input class="form-check-input" type="radio" name="dung-luong" id="inlineRadio2" value="32 ">
                    <label class="form-check-label" for="inlineRadio2">32 GB</label>
                </div>
                <div class="form-check form-check-inline check-dung-luong" data-check_dung_luong="64">
                    <input class="form-check-input" type="radio" name="dung-luong" id="inlineRadio3" value="64">
                    <label class="form-check-label" for="inlineRadio3">64 GB</label>
                </div>
                <div class="form-check form-check-inline check-dung-luong" data-check_dung_luong="128">
                    <input class="form-check-input" type="radio" name="dung-luong" id="inlineRadio4" value="128 ">
                    <label class="form-check-label" for="inlineRadio4">128 GB</label>
                </div>
                <div class="form-check form-check-inline check-dung-luong" data-check_dung_luong="256">
                    <input class="form-check-input" type="radio" name="dung-luong" id="inlineRadio5" value="256 ">
                    <label class="form-check-label" for="inlineRadio5">256 GB</label>
                </div>
                <small id="error-dung-luong" class="form-text text-danger "></small>
                <p id="msg-dung-luong"></p>
            </div>
        <?php
        }
        ?>


    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label class="form-label">Ảnh đại diện:</label>
                <input class="form-control" type="file" id="formFile" name="anh-dai-dien">
                <small id="error-anh-dai-dien" class="form-text text-danger "></small>
                <img style="width:100px" src="<?= $CONTENT_UPLOAD . '/' . $info_sp['hinh_anh']; ?>" alt="">
            </div>

        </div>
        <div class="col-6">
            <div class="mb-3">

                <label class="form-label">Ảnh chi tiết:</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple name="anh-chi-tiet[]">
                <small><i>Có thể tải lên nhiều ảnh</i></small>
                <small id="error-anh-chi-tiet" class="form-text text-danger "></small>
                <?php
                $images = san_pham_Query_Images_Pro($info_sp['id_sp']);
                foreach ($images as $image) { 
                ?>
                
                    <img style="width:100px" src="<?= $CONTENT_UPLOAD . '/' . $image['images']; ?>" alt="">
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Nếu là điện thoại thì mới có thêm màu sắc, dung lượng -->
    <?php
    if (san_pham_Is_Dm_Phone($info_sp['id_sp']) == 0) {
    } else { ?>
        <div class="row hide-them-mau-sac-dung-luong">
            <div class="col-6">
                <div class="btn btn-info click-mau-sac-more">Sửa màu sắc</div>
                <div class="mau-sac-more  px-2 py-2 my-4 " style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                    <div class="btn btn-info click-nhap-them-mau-sac">Nhập thêm</div>

                    <?php
                    // lặp màu sắc đã thêm hiển thị ra
                    // gọi hàm truy vấn màu săc thêm
                    $colors = san_pham_Query_All_Color_Tru_First($info_sp['id_sp']);
                    foreach ($colors as $color) { ?>
                        <div class="row ">
                            <div class="col-2">
                            <span class="btn btn-outline-danger click_xoa-mau-sac ml-2" data-id_ms="<?=$color['id_ms_phone']?>">Xoá</span>
                            </div>
                            <div class="col-4">
                                <input type="hidden" name="id_ms_phone[]" value="<?= $color['id_ms_phone'] ?>">
                                <div class="mau-sac-more-update">
                                    <div class="mb-3">
                                        <label class="my-3">Màu sắc:</label>
                                        <input type="text" value="<?= $color['ten_mau']; ?>" class="form-control" name="mau-sac-more-update[]" placeholder="">
                                        <small id="error-mau-sac-more-update" class="form-text text-danger "></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="hinh-anh-more-update">
                                    <div class="mb-3 d-flex align-items-center">
                                        <label class="form-label my-3">Ảnh màu sắc:</label>
                                        <div class="d-flex align-items-center">
                                            <input style="width:50%;" class="form-control mt-3 " type="file" id="" name="anh-mau-sac-more-update[]">
                                            <img style="width:100px" src="<?= $CONTENT_UPLOAD . '/' . $color['hinh_anh']; ?>" alt="">
                                        </div>
                                        <small id="error-anh-mau-sac-more-add" class="form-text text-danger "></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="btn btn-info click-dung-luong-more">Sửa dung lượng</div>
                <div class="dung-luong-more  px-2 py-2 my-4 " style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                    <div class="btn btn-info click-nhap-them-dung-luong">Nhập thêm</div>
                    <?php
                    // lặp dung lượng đã thêm hiển thị ra
                    // gọi hàm
                    $dung_luongs = san_pham_QueryAll_Dung_Luong_Tru_First($info_sp['id_sp']);

                    foreach ($dung_luongs as $dung_luong) { ?>
                        <div class="row ">
                            <div class="col-2">
                            <span class="btn btn-outline-danger click_xoa-dung-luong ml-2" data-id_dl="<?=$dung_luong['id_dl_phone']?>">Xoá</span>
                            </div>
                            <div class="col-4 ">
                                <input type="hidden" name="id_dl_phone[]" value="<?= $dung_luong['id_dl_phone']; ?>">
                                <div class="dung-luong-more-update">
                                    <label class="my-3">Dung lượng:</label>
                                    <input type="number" value="<?= $dung_luong['rom']; ?>" class="form-control" name="dung-luong-more-update[]" placeholder=" ">
                                    <small id="error-dung-luong-more-update" class="form-text text-danger "></small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="don-gia-more-update">
                                    <label class="my-3">Đơn giá:</label>
                                    <input type="number" class="form-control" value="<?= $dung_luong['don_gia']; ?>" name="gia-san-pham-more-update[]" placeholder="">
                                    <small id="error-gia-san-pham" class="form-text text-danger "></small>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    <?php
    }
    ?>
    <!-- Nếu là điên thoại mới có cấu hình -->
    <?php
    if (san_pham_Is_Dm_Phone($info_sp['id_sp']) == 0) {
    } else { ?>
        <div class="row hide-cau-hinh">
            <div class="col">
                <div class="btn btn-info mt-5 click-add-cau-hinh">Sửa cấu hình</div>
                <div>
                    <?php
                    $cau_hinhs = san_pham_Query_Cau_Hinh($info_sp['id_sp']);
                    ?>
                    <!-- <small class="text-danger pl-2"><i>Bắt buộc nhập</i></small> -->
                </div>
                <div class="add-cau-hinh  px-2 py-2 my-4" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                    <div class="row">
                        <div class="col-3">
                            <label class="">Màn hình:</label>
                            <textarea class="form-control" name="man-hinh" style="resize:none" id="exampleFormControlTextarea1" rows="1"><?= $cau_hinhs['man_hinh']; ?></textarea>
                            <small id="error-man-hinh" class="form-text text-danger "></small>
                        </div>
                        <div class="col-3">
                            <label class="">Camera sau:</label>
                            <input type="text" value="<?= $cau_hinhs['camera_sau']; ?>" class="form-control" name="camera-sau" placeholder="">
                            <small id="error-camera-sau" class="form-text text-danger "></small>
                        </div>
                        <div class="col-3">
                            <label class="">Camera trước:</label>
                            <input type="text" value="<?= $cau_hinhs['camera_selfie']; ?>" class="form-control" name="camera-truoc" placeholder="">
                            <small id="error-camera-truoc" class="form-text text-danger "></small>
                        </div>
                        <div class="col-3">
                            <label class="">RAM:</label>
                            <input type="number" value="<?= $cau_hinhs['ram']; ?>" class="form-control" name="ram" placeholder="">
                            <small id="error-ram" class="form-text text-danger "></small>
                        </div>
                        <div class="col-3">
                            <label class="">ROM:</label>
                            <input type="number" value="<?= $cau_hinhs['rom']; ?>" class="form-control" name="rom" placeholder="">
                            <small id="error-rom" class="form-text text-danger "></small>
                        </div>
                        <div class="col-3">
                            <label class="">CPU:</label>
                            <input type="text" value="<?= $cau_hinhs['cpu']; ?>" class="form-control" name="cpu" placeholder="">
                            <small id="error-cpu" class="form-text text-danger "></small>
                        </div>
                        <div class="col-3">
                            <label class="">Dung lượng pin:</label>
                            <input type="number" value="<?= $cau_hinhs['dung_luong_pin']; ?>" class="form-control" name="dung-luong-pin" placeholder="">
                            <small id="error-dung-luong-pin" class="form-text text-danger "></small>
                        </div>
                        <div class="col-3">
                            <label class="">Thẻ sim:</label>
                            <input type="text" value="<?= $cau_hinhs['the_sim']; ?>" class="form-control" name="the-sim" placeholder="">
                            <small id="error-the-sim" class="form-text text-danger "></small>
                        </div>
                        <div class="col-3">
                            <label class="">Hệ điều hành:</label>
                            <input type="text" value="<?= $cau_hinhs['he_dieu_hanh']; ?>" class="form-control" name="he-dieu-hanh" placeholder="">
                            <small id="error-he-dieu-hanh" class="form-text text-danger "></small>
                        </div>
                        <div class="col-3">
                            <label class="">Xuất xứ:</label>
                            <input type="text" value="<?= $cau_hinhs['xuat_xu']; ?>" class="form-control" name="xuat-xu" placeholder="">
                            <small id="error-xuat-xu" class="form-text text-danger "></small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <hr>

    <div class="row">
        <div class="col">
            <div class="form-floating">
                <label class="form-label">Mô tả sản phẩm</label>
                <div class="panel-body">
                    <?php
                    // gọihafm truy vấn
                    $mo_tas = san_pham_Query_Mo_Ta($info_sp['id_sp']);
                    ?>
                    <textarea name="content" id="content" class="form-control ckeditor"><?= $mo_tas['mo_ta']; ?></textarea>
                </div>
                <small id="error-mo-ta" class="form-text text-danger "></small>
            </div>
        </div>
    </div>


    <div class="form-group" style="margin-top: 1em;">
        <input type="submit" value="Sửa sản phẩm" class="btn btn-success">
    </div>
</form>