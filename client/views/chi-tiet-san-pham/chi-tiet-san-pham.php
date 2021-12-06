    <!-- update số lưuojt xem sp -->
    <?php
    // unset session khi vào lại trang chi tiết ,vì trước đó đã tạo session
    unset($_SESSION['url-session']);
    san_pham_Update_So_Luot_Xem($info_sp['id_sp']);
    if (sessionLogin_Isset()) {
        $id_kh_session = $_SESSION['login']['id_kh'];
    }
    ?>
    <input type="hidden" name="id_sp" value="<?php echo $info_sp['id_sp'] ?>">
    <div class="row">
        <div class="col-12">
            <form action="" method="POST" id="add-cart" class="product-detail p-3">
                <input type="hidden" name="ten_sp_chinh" value="<?= $info_sp['ten_sp'] ?>">
                <div class="product-detail-heading d-flex justify-content-between align-items-center">
                    <h2 class="product-detail-title py-2 text-overflow"><?= $info_sp['ten_sp']; ?></h2>
                    <div class="product-detail-rating d-flex ">
                        <div class="product-detail-rating-star px-1 load_rating_avg_title">
                            <?php
                            $rating = rating_Avg($info_sp['id_sp']);
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $rating) { ?>
                                    <i class="icon-to fas fa-star"></i>
                                <?php
                                } else { ?>
                                    <i class="text-secondary fas fa-star"></i>
                            <?php
                                }
                            }
                            ?>

                        </div>
                        <div class="product-detail-rating-comment d-flex">
                            <a href="#" class="product-detail-rating-danh-gia px-2 "><span class="load_rating_cout_title"><?= rating_Count($info_sp['id_sp']) ?></span> đánh giá</a> |
                            <a href="#" class="product-detail-rating-hoi-dap px-2"><span class="load_comment_cout_title"><?= binh_luan_pro_Count($info_sp['id_sp']) ?></span> Hỏi & đáp</a>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="url-session" value="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?> ">

                <div class="row py-4">
                    <div class="col-6  ">
                        <div class="porsition-sticky">
                            <div class="product-deltai-img mt-5 " style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>')">

                                <!-- <img src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt=""> -->
                            </div>

                            <?php
                            $list_imgs = san_pham_Query_Images_Pro($info_sp['id_sp']);
                            if (count($list_imgs) > 0) { ?>
                                <div class="product-detail-imgs my-5 ">
                                    <div class="owl-carousel owl-theme owl-imgs-detail">
                                        <?php
                                        $list_imgs = san_pham_Query_Images_Pro($info_sp['id_sp']);
                                        if (count($list_imgs) > 0) {
                                            foreach ($list_imgs as $imgs) { ?>
                                                <div class="item cursor-pointer">
                                                    <div class="imgs-items" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $imgs['images'] ?>')">
                                                    </div>
                                                </div>
                                            <?php

                                            }
                                            ?>


                                        <?php
                                        }
                                        ?>


                                    </div>

                                </div>
                            <?php
                            } ?>
                            <?php
                            $cau_hinh_sp = san_pham_Query_Cau_Hinh($info_sp['id_sp']);
                            $list_dung_luong = san_pham_Query_Dung_Luong($info_sp['id_sp']);
                            if (is_array($cau_hinh_sp) > 0) { ?>
                                <div class="product-detail-cau-hinh">
                                    <ul>
                                        <?php $cau_hinh_sp = san_pham_Query_Cau_Hinh($info_sp['id_sp']);
                                        if (is_array($cau_hinh_sp)) {
                                        ?>
                                            <li><i class="fas fa-mobile-alt"></i><?= $cau_hinh_sp['man_hinh'] ?></li>
                                            <li><i class="fas fa-camera"></i><?= $cau_hinh_sp['camera_sau'] ?></li>
                                            <li><i class="fas fa-camera-retro"></i><?= $cau_hinh_sp['camera_selfie'] ?></li>
                                            <li><i class="fas fa-microchip"></i><?= $cau_hinh_sp['cpu'] ?></li>
                                            <li class=""><i class="fas fa-hdd"></i><span class="dung_luong_san_pham"><?= $list_dung_luong[0]['rom'] . '&nbsp;GB' ?></span> </li>
                                            <li><a href="#">Xem chi tiết thông số kỹ thuật</a></li>
                                        <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="product-detail-price py-2 d-flex align-items-center">
                            <h2 class="product-detail-price-new pr-3"> <?php
                                                                        $list_giam_gia = giam_gia_Query_All_Sp();
                                                                        if (in_array($info_sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                                            //id sp nằm trong giảm giá
                                                                            if (count($list_giam_gia) > 0) {
                                                                                foreach ($list_giam_gia as $giam_gia) {
                                                                                    if ($giam_gia['id_sp'] == $info_sp['id_sp']) {
                                                                                        if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                                                            // %
                                                                                            echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $info_sp['don_gia']);
                                                                        ?>
                                                <?php
                                                                                        } else {
                                                                                            //số tiền
                                                                                            echo So_Tien_Giam_Gia_Tien($info_sp['don_gia'], $giam_gia['muc_giam']);
                                                ?>

                                <?php
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        } else {
                                                                            //id sp ko nằm trong gg
                                                                            echo number_format($info_sp['don_gia'], 0, ',', '.') . '&nbsp;đ';
                                                                        }
                                ?>

                            </h2>
                            <h2 class="product-detail-price-old text-secondary"><strike class="gia_old">
                                    <?php
                                    $list_giam_gia = giam_gia_Query_All_Sp();
                                    if (in_array($info_sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                        //id sp nằm trong giảm giá
                                        if (count($list_giam_gia) > 0) {
                                            foreach ($list_giam_gia as $giam_gia) {
                                                if ($giam_gia['id_sp'] == $info_sp['id_sp']) {
                                                    // nếu sp có giảm giá mới in ra giá củ 
                                                    echo number_format($info_sp['don_gia'], 0, ',', '.') . '&nbsp;đ';
                                                }
                                            }
                                        }
                                    } else {
                                        //ko có giảm giá 
                                    }
                                    ?></strike></h2>
                            <span>
                                <!-- Nhãn giảm giá -->
                                <?php
                                $list_giam_gia = giam_gia_Query_All_Sp();
                                if (count($list_giam_gia) > 0) {
                                    foreach ($list_giam_gia as $giam_gia) {
                                        if ($giam_gia['id_sp'] == $info_sp['id_sp']) {
                                            if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                // %
                                ?>
                                                <span class="product-detail-label_giam-gia"> Giảm <?= $giam_gia['muc_giam'] ?> %</span>
                                            <?php
                                            } else {
                                                //số tiền
                                            ?>
                                                <span class="product-detail-label_giam-gia"> Giảm <?= number_format($giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?> </span>
                                <?php
                                            }
                                        }
                                    }
                                }
                                ?>
                            </span>
                            <input type="hidden" name="id_sp_chinh" value="<?= $info_sp['id_sp'] ?>">
                            <input type="hidden" class="product-detail-price-new-road_cart" name="gia_sp_chinh" value="<?php
                                                                                                                        $list_giam_gia = giam_gia_Query_All_Sp();
                                                                                                                        if (in_array($info_sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                                                                                            //id sp nằm trong giảm giá
                                                                                                                            if (count($list_giam_gia) > 0) {
                                                                                                                                foreach ($list_giam_gia as $giam_gia) {
                                                                                                                                    if ($giam_gia['id_sp'] == $info_sp['id_sp']) {
                                                                                                                                        if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                                                                                                            // %
                                                                                                                                            echo (((100 - $giam_gia['muc_giam']) / 100) * $info_sp['don_gia']);
                                                                                                                        ?>
                                                                                                        <?php
                                                                                                                                        } else {
                                                                                                                                            //số tiền
                                                                                                                                            echo ($info_sp['don_gia'] - $giam_gia['muc_giam']);
                                                                                                        ?>
                                                                                                             <?php
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        } else {
                                                                                                                            //ko có giảm giá 
                                                                                                                            echo $info_sp['don_gia'];
                                                                                                                        }

                                                                                                                ?>
                                                                                                                                ">
                        </div>
                        <!-- dung lượng -->
                        <div class="product-detail-select-dung-luong ">
                            <div class="row no-gutters">
                                <?php
                                foreach ($list_dung_luong as $dung_luong) { ?>
                                    <div class="col-4">
                                        <?php
                                        if ($list_dung_luong[0]['rom'] == $dung_luong['rom']) {
                                        ?>
                                            <label for="<?= $dung_luong['id_dl_phone'] ?>" class="form-check box-check-dung-luong my-2 active" data-id_dung_luong="<?= $dung_luong['id_dl_phone'] ?>">
                                                <div class="check cursor-pointer ">
                                                    <input class="form-check-input cursor-pointer " type="radio" name="dung-luong_chinh" id="<?= $dung_luong['id_dl_phone'] ?>" checked value="<?= $dung_luong['rom'] ?>">
                                                    <label class="form-check-label pl-2 text-dung-luong  cursor-pointer" for="<?= $dung_luong['id_dl_phone'] ?>">
                                                        <?= $dung_luong['rom'] ?> GB
                                                    </label>
                                                </div>
                                                <label for="<?= $dung_luong['id_dl_phone'] ?>" class="cursor-pointer">
                                                    <div class="form-check-price"> <?php
                                                                                    $list_giam_gia = giam_gia_Query_All_Sp();
                                                                                    if (in_array($info_sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {

                                                                                        // id sp có trong giảm giá  if (count($list_giam_gia) > 0) {
                                                                                        foreach ($list_giam_gia as $giam_gia) {
                                                                                            if ($giam_gia['id_sp'] == $info_sp['id_sp']) {
                                                                                                if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                                                                    // %
                                                                                                    echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $dung_luong['don_gia']);
                                                                                    ?>
                                                                    <?php
                                                                                                } else {
                                                                                                    //số tiền
                                                                                                    echo So_Tien_Giam_Gia_Tien($dung_luong['don_gia'], $giam_gia['muc_giam']);
                                                                    ?>

                                                        <?php
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    } else {

                                                                                        // id sp ko nằm
                                                                                        echo number_format($dung_luong['don_gia'], 0, ',', '.'), '&nbsp;đ';
                                                                                    }


                                                        ?>
                                                    </div>
                                                </label>
                                            </label>
                                        <?php
                                        } else {
                                        ?>
                                            <label for="<?= $dung_luong['id_dl_phone'] ?>" class="form-check box-check-dung-luong my-2" data-id_dung_luong="<?= $dung_luong['id_dl_phone'] ?>">
                                                <div class="check cursor-pointer ">
                                                    <input class="form-check-input cursor-pointer " type="radio" name="dung-luong_chinh" id="<?= $dung_luong['id_dl_phone'] ?>" value="<?= $dung_luong['rom'] ?>">
                                                    <label class="form-check-label pl-2 text-dung-luong cursor-pointer" for="<?= $dung_luong['id_dl_phone'] ?>">
                                                        <?= $dung_luong['rom'] ?> GB
                                                    </label>
                                                </div>
                                                <label for="<?= $dung_luong['id_dl_phone'] ?>" class="cursor-pointer">
                                                    <div class="form-check-price">
                                                        <?php
                                                        $list_giam_gia = giam_gia_Query_All_Sp();
                                                        if (in_array($info_sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                            //có nằm
                                                            if (count($list_giam_gia) > 0) {
                                                                foreach ($list_giam_gia as $giam_gia) {
                                                                    if ($giam_gia['id_sp'] == $info_sp['id_sp']) {
                                                                        if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                                            // %
                                                                            echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $dung_luong['don_gia']);
                                                        ?>
                                                                        <?php
                                                                        } else {
                                                                            //số tiền
                                                                            echo So_Tien_Giam_Gia_Tien($dung_luong['don_gia'], $giam_gia['muc_giam']);
                                                                        ?>

                                                        <?php
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        } else {
                                                            //ko nằm
                                                            echo number_format($dung_luong['don_gia'], 0, ',', '.'), '&nbsp;đ';
                                                        }


                                                        ?>
                                                    </div>
                                                </label>
                                            </label>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                <?php
                                }
                                ?>


                            </div>



                        </div>
                        <div class="product-detail-select-mau d-flex py-4 ">
                            <?php
                            $list_mau_sac = san_pham_Query_Color($info_sp['id_sp']);
                            foreach ($list_mau_sac as $mau_sac) {
                                if ($list_mau_sac[0]['id_ms_phone'] == $mau_sac['id_ms_phone']) { ?>
                                    <div class="box-items-mau active  d-flex flex-column align-items-center justify-content-center">
                                        <div class="product-detail-select-mau-img ">
                                            <input type="radio" hidden name="hinh-anh-chinh" checked value="<?= $CONTENT_UPLOAD ?>/<?= $mau_sac['hinh_anh'] ?>">
                                            <img style="width:80%" class="select_mau_sac_img" src="<?= $CONTENT_UPLOAD ?>/<?= $mau_sac['hinh_anh'] ?>" alt="">
                                        </div>
                                        <input type="radio" hidden name="mau_sac_chinh" checked value="<?= $mau_sac['ten_mau'] ?>">
                                        <div class="product-detail-select-mau-name"><?= $mau_sac['ten_mau'] ?></div>
                                    </div>
                                <?php
                                } else { ?>
                                    <div class="box-items-mau  d-flex flex-column align-items-center justify-content-center">
                                        <div class="product-detail-select-mau-img ">
                                            <input type="radio" hidden name="hinh-anh-chinh" value="<?= $CONTENT_UPLOAD ?>/<?= $mau_sac['hinh_anh'] ?>">
                                            <img style="width:80%" class="select_mau_sac_img" src="<?= $CONTENT_UPLOAD ?>/<?= $mau_sac['hinh_anh'] ?>" alt="">
                                        </div>
                                        <input type="radio" hidden name="mau_sac_chinh" value="<?= $mau_sac['ten_mau'] ?>">
                                        <div class="product-detail-select-mau-name"><?= $mau_sac['ten_mau'] ?></div>
                                    </div>
                                <?php
                                }
                                ?>


                            <?php


                            }
                            if (count($list_mau_sac) == 0) { ?>
                            <input type="hidden" name="hinh-anh-chinh" value="<?=$CONTENT_UPLOAD?>/<?=$info_sp['hinh_anh']?>">
                            <?php
                            }
                            ?>


                        </div>
                        <?php
                        $list_ma_giam_gia = ma_giam_gia_Query_All();
                        if (count($list_ma_giam_gia) > 0) { ?>
                            <div class="d-flex mt-2 mb-5 ma_giam_gia">

                                <?php
                                $list_ma_giam_gia = ma_giam_gia_Query_All();
                                if (count($list_ma_giam_gia) > 0) { ?>
                                    <div class="text-gray">Mã giảm giá</div>
                                    <?php
                                    foreach ($list_ma_giam_gia as $ma_giam_gia) {
                                        if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                                            // %
                                    ?>

                                            <span class="tab__menu-product-newproduct-code-label text-uppercase font-size-1-4 ml-3" style="background-color:#fbebed !important;color:var(--primary-color);">Giảm <?= $ma_giam_gia['muc_giam'] ?> %</span>

                                        <?php
                                        } else {
                                            //số tiền
                                        ?>

                                            <span class="tab__menu-product-newproduct-code-label text-uppercase font-size-1-4 ml-3" style="background-color:#fbebed !important;color:var(--primary-color);">Giảm <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?></span>

                                <?php
                                        }
                                    }
                                }
                                ?>
                                <div class="hover-box-ma-giam-gia d-flex justify-content-center flex-column align-items-center pt-3 pb-3">
                                    <div class="hover-box-ma-giam-gia-title my-3 text-secondary">Tiết kiệm hơn khi áp dụng mã giảm giá.</div>

                                    <?php
                                    foreach ($list_ma_giam_gia as $ma_giam_gia) {
                                        if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                                            // %
                                    ?>
                                            <div class="hover-box-ma-giam-gia-content ">
                                                <div class="p-4 hover-box-ma-giam-gia-content-items d-flex justify-content-center align-items-center">
                                                    <div class="hover-box-ma-giam-gia-content-items-img">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    <div class="hover-box-ma-giam-gia-content-items-content pl-3">
                                                        <p class="hover-box-ma-giam-gia-content-items-content-title mb-0" style="line-height:1.2rem;font-weight:500">Giảm <?= $ma_giam_gia['muc_giam'] . '&nbsp;%' ?></p>
                                                        <p class="d-block font-size-1-4 mb-0">Đơn tối thiểu <?= number_format($ma_giam_gia['gia_tri_don_hang'], 0, ',', '.') . '&nbsp;đ' ?></p>
                                                        <small class="" style="font-size:1rem">HSD: <?= $ma_giam_gia['ngay_ket_thuc'] ?> </small>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        } else {
                                            //tiền
                                        ?>
                                            <div class="hover-box-ma-giam-gia-content ">
                                                <div class="p-4 hover-box-ma-giam-gia-content-items d-flex justify-content-center align-items-center">
                                                    <div class="hover-box-ma-giam-gia-content-items-img">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    <div class="hover-box-ma-giam-gia-content-items-content pl-3">
                                                        <p class="hover-box-ma-giam-gia-content-items-content-title mb-0" style="line-height:1.2rem;font-weight:500">Giảm <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?> </p>
                                                        <p class="d-block font-size-1-4 mb-0">Đơn tối thiểu <?= number_format($ma_giam_gia['gia_tri_don_hang'], 0, ',', '.') . '&nbsp;đ' ?></p>
                                                        <small class="" style="font-size:1rem">HSD: <?= $ma_giam_gia['ngay_ket_thuc'] ?> </small>

                                                    </div>
                                                </div>
                                            </div>

                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        <?php } ?>
                        <div class="product-detail-voucher">
                            <ul>
                                <li>Nhận ngay khuyến mãi đặc biệt</li>
                                <li><i style="color:#48bb78;" class="fas fa-check-circle icon pr-2"></i>Trả góp 0%</li>
                                <li><i style="color:#48bb78;" class="fas fa-check-circle icon pr-2"></i>Thu cũ đổi mới trợ giá 20% đến 3 triệu</li>
                                <li><i style="color:#48bb78;" class="fas fa-check-circle icon pr-2"></i>Giảm 100.000đ khi check in tại cửa hàng</li>
                                <li><i style="color:#48bb78;" class="fas fa-check-circle icon pr-2"></i>Tặng bảo hành 2 năm</li>

                            </ul>
                        </div>
                        <div class="product-detail-buy">
                            <button type="submit" name="mua-ngay" class="product-detail-buy-now btn primary text-white my-3 ">
                                <div>
                                    <strong class="">Mua ngay</strong>
                                    <p class="font-size mb-1">Giao hàng miễn phí hoặc nhận tại shop</p>
                                </div>
                            </button>
                            <div class="row ">
                                <div class="col-6">
                                    <button class="product-detail-buy-tra-gop btn btn-primary ">
                                        <div>
                                            <strong>Trả góp 0%</strong>
                                            <p class="font-size mb-1">Duyệt nhanh qua điện thoại</p>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="product-detail-buy-trade-in btn btn-primary">
                                        <div>
                                            <strong>Trade-in thu cũ lên đời</strong>
                                            <p class="font-size mb-1">Click vào để định giá lên đời</p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail-mua-kem-deal">
                            <div class="product-detail-mua-kem-deal-title mt-4 pb-2 text-dark">
                                <strong>Mua kèm sản phẩm với deal sốc</strong>
                            </div>
                            <div class="product-detail-mua-kem-deal-main-pro">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <input type="hidden" name="hinh-anh-deal[]" value="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>">
                                        <div class="product-detail-mua-kem-deal-main-pro-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>')">
                                        </div>

                                    </div>
                                    <div class="col-7">
                                        <div class="product-detail-mua-kem-deal-main-pro-content mb-4">
                                            <p class="product-detail-mua-kem-deal-main-pro-content-title text-ellip"><?= $info_sp['ten_sp'] ?> </p>
                                            <div class="product-detail-mua-kem-deal-main-pro-content-price d-flex">
                                                <div class="product-detail-mua-kem-deal-main-pro-content-price-new">
                                                    <?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?>
                                                </div>
                                                <strike class="product-detail-mua-kem-deal-main-pro-content-price-old text-secondary">
                                                    <?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?>
                                                </strike>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <div class="product-detail-mua-kem-deal-main-pro-add-cart">
                                            <p class="btn font-size" disable> Thêm vào</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="text-center ">
                                <i class="fas fa-plus text-dark"></i>
                            </div>
                            <div class="product-detail-mua-kem-deal-main-items my-3">
                                <div class="row align-items-center">
                                    <div class="col-2 ">
                                        <div class="product-detail-mua-kem-deal-main-pro-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>')">
                                        </div>

                                    </div>
                                    <div class="col-7">
                                        <div class="product-detail-mua-kem-deal-main-items-content mb-4">
                                            <p class="product-detail-mua-kem-deal-main-items-content-title text-ellip">Loa blu </p>
                                            <!-- Nhãn deal sốc add cart -->
                                            <span class="label-deal-soc-add-cart">
                                                Deal sốc
                                            </span>
                                            <input type="hidden" name="ten_sp_deal" value="loa blu">
                                            <input type="hidden" name="gia_sp_deal" value="5000000">
                                            <div class="product-detail-mua-kem-deal-main-items-content-price d-flex">
                                                <div class="product-detail-mua-kem-deal-main-items-content-price-new">
                                                    5.000.000đ
                                                </div>
                                                <strike class="product-detail-mua-kem-deal-main-items-content-price-old text-secondary">
                                                    10.000.000đ
                                                </strike>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <div class="product-detail-mua-kem-deal-main-items-add-cart">
                                            <p class="btn font-size add-deal"> Thêm vào</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="box-total-mua-kem-deal-soc py-4 pl-4">
                                <div class="row">

                                    <button type="submit" name="mua-deal" title="Bạn chưa thêm deal " disabled="true" class="col-4 btn primary btn-total-mua-kem-deal-soc d-flex justify-content-center align-items-center "><i class="icofont-cart font-size-2-5 pr-2"></i>
                                        <p class="font-size mb-0 ">Mua deal sốc</p>
                                    </button>
                                    <div class="col-8 total-mua-kem-deal-soc">
                                        <input type="hidden" name="tong_cong_deal" value="32.400.000">
                                        <p class="mb-0"><b class="text-dark pr-2">Tổng cộng:</b> <span class="font-weight-5 text-dark">32.400.000đ</span>
                                            <strike class="pl-3 text-secondary">10.000.000đ</strike>
                                        </p>
                                        <p class="text-primary-color mb-0">Tiết kiệm : <?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            <!-- end box 1 -->
            <div class="san-pham-tuong-tu py-3 my-5">
                <h3 class="san-pham-tuong-tu-title py-4 pl-4 font-size-heading">Sản phẩm bạn quan tâm</h3>
                <div class="owl-carousel owl-theme owl-san-pham-tuong-tu">
                    <?php
                    $list_sp_cung_dm = san_pham_Query_Danh_Muc_Con($info_sp['id_sub_dm_pro']);
                    foreach ($list_sp_cung_dm as $sp_cung_dm) { ?>
                        <div class="item">
                            <a href="san-pham?id=<?= $sp_cung_dm['id_sp'] ?>&name=<?= $sp_cung_dm['ten_sp'] ?>" class="tab__menu-product-content-newproduct">
                                <div class="tab__menu-product-content-newproduct-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $sp_cung_dm['hinh_anh'] ?>')">
                                    <!-- Nhãn giảm giá -->
                                    <?php
                                    $list_giam_gia = giam_gia_Query_All_Sp();
                                    if (count($list_giam_gia) > 0) {
                                        foreach ($list_giam_gia as $giam_gia) {
                                            if ($giam_gia['id_sp'] == $sp_cung_dm['id_sp']) {
                                                if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                    // %
                                    ?>
                                                    <span class="tab__menu-product-content-newproduct-sale-label"> Giảm <?= $giam_gia['muc_giam'] ?> %</span>
                                                <?php
                                                } else {
                                                    //số tiền
                                                ?>
                                                    <span class="tab__menu-product-content-newproduct-sale-label"> Giảm <?= number_format($giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?> </span>
                                    <?php
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                    <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Giảm 300k - Check in
                                     </span> -->
                                    <!-- <span class="tab__menu-product-content-newproduct-installment-label">Trả góp 0%</span> -->
                                </div>
                                <div class="px-4 pt-1 pb-2">

                                    <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                                        <?= $sp_cung_dm['ten_sp'] ?>
                                    </p>
                                    <span class="tab__menu-product-newproduct-code-label">Giảm 100K</span>
                                    <!-- <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span> -->
                                    <div class="tab__menu-product-newproduct-price d-flex">
                                        <b class="tab__menu-product-newproduct-newprice pt-2">
                                            <?= number_format($sp_cung_dm['don_gia'], 0, ',', '.') . 'đ' ?>

                                        </b>
                                        <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                            <?= number_format($sp_cung_dm['don_gia'], 0, ',', '.') . 'đ' ?>
                                        </strike>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="product-detail-mota-news">
                <div class="row">
                    <div class="col-8">
                        <?php
                        if ($info_sp['mo_ta'] == "") { ?>
                            <div class="product-detail-mota-no-content">
                                <h3>Chưa có mô tả nào về <?= $info_sp['ten_sp'] ?></h3>
                            </div>
                        <?php
                        } else { ?>
                            <div class="mota-product-detail bg-white p-4">
                                <?= $info_sp['mo_ta'] ?>
                                <button class="doc-them btn btn-primary font-size">Đọc thêm <i class="fas fa-angle-down"></i></button>
                                <button class="an-bot btn btn-primary font-size">Ẩn bớt <i class="fas fa-chevron-up"></i></button>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div class="col-4">
                        <div class="news-product-detail porsition-sticky">
                            <div class="news-product-detai-title text-overflow">Bài viết về <?= $info_sp['ten_sp'] ?> </div>
                            <?php
                            $list_bai_viet = bai_viet_Query_By_Id_Sp_Thuoc_DM_Danh_Gia($info_sp['id_sp']);
                            if (count($list_bai_viet) > 0) { ?>
                                <div class="danh-sach-bai-viet-product-detail">
                                    <?php
                                    foreach ($list_bai_viet as $bai_viet) { ?>
                                        <!-- dùng chung của banner tin tức đầu trang -->
                                        <a href="#" class="banner__right-promotion-body-content  d-flex align-items-center">
                                            <div class="banner__right-promotion-body-img">
                                                <img style="width:100%;min-height:60px;" src="<?= $CONTENT_UPLOAD ?>/<?= $bai_viet['img_news'] ?>" alt="">
                                            </div>
                                            <div class="banner__right-promotion-body-text ">
                                                <p class="text-overflow"><?= $bai_viet['tieu_de_news'] ?></p>
                                                <p class="mb-0 text-muted" style="font-size: 1.1rem;"><?= $bai_viet['ngay_post'] ?></p>
                                            </div>
                                        </a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            } else { ?>
                                <p class="py-3"><i>Đang cập nhật...</i></p>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="product-detail-rating my-5 ">
                <h2 class="product-detail-rating-title  pt-4 pl-4 pb-4">
                    Đánh giá & nhận xét <?= $info_sp['ten_sp']; ?>
                </h2>
                <div class="product-detail-rating-content py-3">
                    <div class="row">
                        <div class="col-4">
                            <div class="product-detail-rating-avg text-center">
                                <div class="product-detail-rating-avg-title font-size-1-8 text-capitalize text-dark">
                                    Đánh giá trung bình
                                </div>
                                <b class="product-detail-rating-avg-count ">
                                    <!-- ajax gửi về -->
                                    <span class="load_avg-rating">
                                        <?php echo rating_Avg($info_sp['id_sp']) ?>
                                    </span>/5
                                </b>
                                <div class="product-detail-rating-avg-star">
                                    <?php
                                    // ajax gửi về
                                    $rating_avg = rating_Avg($info_sp['id_sp']);
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $rating_avg) { ?>
                                            <i class="fas fa-star icon-to"></i>
                                        <?php
                                        } else { ?>
                                            <i class="fas fa-star text-secondary"></i>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="product-detail-rating-avg-count-total text-dark">
                                    <span class="count_rating">
                                        <!-- cập nhật lấy từ ajax  -->
                                        <?php
                                        echo rating_Count($info_sp['id_sp']);
                                        ?>
                                    </span>
                                    <span class="pl-2">đánh giá </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 load_proges_rating">
                            <!-- gọi ajax lấy dữ liệu realtime -->
                            <?php
                            $sum_rating = rating_Phan_Tram($info_sp['id_sp']);
                            ?>
                            <div class="product-detail-rating-proges text-center">
                                <?php
                                $so_luot = (rating_Count_Luot($info_sp['id_sp'], 5)); //số lượng vote theo số sao
                                if ($so_luot > 0) {
                                    $phan_tram = ($so_luot / $sum_rating) * 100;
                                } else {
                                    $phan_tram = 0;
                                }
                                ?>
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    5 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:<?= $phan_tram ?>%"></span>
                                    </div>
                                    <span class="pl-2">
                                        <?php
                                        echo $so_luot; //số lượng vote theo số sao

                                        ?>
                                    </span>
                                </div>
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    <?php
                                    $so_luot = (rating_Count_Luot($info_sp['id_sp'], 4)); //số lượng vote theo số sao
                                    if ($so_luot > 0) {
                                        $phan_tram = ($so_luot / $sum_rating) * 100;
                                    } else {
                                        $phan_tram = 0;
                                    }
                                    ?>
                                    4 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:<?= $phan_tram ?>%"></span>
                                    </div>
                                    <span class="pl-2">
                                        <?php
                                        echo $so_luot;
                                        ?>
                                    </span>
                                </div>
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    <?php
                                    $so_luot = (rating_Count_Luot($info_sp['id_sp'], 3)); //số lượng vote theo số sao
                                    if ($so_luot > 0) {
                                        $phan_tram = ($so_luot / $sum_rating) * 100;
                                    } else {
                                        $phan_tram = 0;
                                    }
                                    ?>
                                    3 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:<?= $phan_tram ?>%"></span>
                                    </div>
                                    <span class="pl-2">
                                        <?php
                                        echo $so_luot;
                                        ?>
                                    </span>
                                </div>
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    <?php
                                    $so_luot = (rating_Count_Luot($info_sp['id_sp'], 2)); //số lượng vote theo số sao
                                    if ($so_luot > 0) {
                                        $phan_tram = ($so_luot / $sum_rating) * 100;
                                    } else {
                                        $phan_tram = 0;
                                    }
                                    ?>
                                    2 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:<?= $phan_tram ?>%"></span>
                                    </div>
                                    <span class="pl-2">
                                        <?php
                                        echo $so_luot;
                                        ?>
                                    </span>
                                </div>
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    <?php
                                    $so_luot = (rating_Count_Luot($info_sp['id_sp'], 1)); //số lượng vote theo số sao
                                    if ($so_luot > 0) {
                                        $phan_tram = ($so_luot / $sum_rating) * 100;
                                    } else {
                                        $phan_tram = 0;
                                    }
                                    ?>
                                    1 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:<?= $phan_tram ?>%"></span>
                                    </div>
                                    <span class="pl-2">
                                        <?php
                                        echo $so_luot;
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="product-detail-rating-viet-danh-gia text-center">
                                <div class="text-dark my-3">Bạn đã dùng sản phẩm này ?</div>
                                <button class="btn primary btn-viet-danh-gia font-size text-light p-3 ">Viết đánh giá của bạn</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail-rating-write py-4">
                    <form ation="" method="post" id="send-danh-gia" class="row align-items-center">
                        <div class="col-5 text-center box-select-star">
                            <div class="product-detail-rating-write-title font-size-1-8 ">
                                Bạn chấm sản phẩm này bao nhiêu sao?
                            </div>
                            <input type="hidden" name="id_sp" value="<?= $info_sp['id_sp'] ?>">
                            <div class="product-detail-rating-write-title-check-star vote-sao py-2">
                                <input hidden type="radio" class="rating-sao" name="rating-sao" value="5" id="sao5">
                                <label data-text="Tuyệt vời" for="sao5" class="rating-sao "><i class="fas fa-star icon-star icon-max"></i></label>
                                <input hidden type="radio" class="rating-sao" name="rating-sao" value="4" id="sao4">
                                <label data-text="Hài lòng" for="sao4" class="rating-sao"><i class="fas fa-star icon-star icon-max"></i></label>
                                <input hidden type="radio" class="rating-sao" name="rating-sao" value="3" id="sao3">
                                <label data-text="Bình thường" for="sao3" class="rating-sao"><i class="fas fa-star icon-star icon-max"></i></label>
                                <input hidden type="radio" class="rating-sao" name="rating-sao" value="2" id="sao2">
                                <label data-text="Tạm được" for="sao2" class="rating-sao"><i class="fas fa-star icon-star icon-max"></i></label>
                                <input hidden type="radio" class="rating-sao" name="rating-sao" value="1" id="sao1">
                                <label data-text="Không thích" for="sao1" class="rating-sao"><i class="fas fa-star icon-star icon-max"></i></label>
                            </div>
                            <p class="text-select-star"></p>

                        </div>
                        <div class="col-7 pt-3">
                            <!-- -->
                            <input type="hidden" name="url_session" value="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
                            <div class="form-group box-write-danh-gia pr-4">
                                <textarea class="form-control text-area-send-rate" name="noi_dung" id="" style="resize:none;" placeholder="Viết đánh của bạn ..." rows="3">
                                </textarea>
                                <button tpye="submit" class="btn primary btn-send-danh-gia font-size text-light p-3">Gửi đánh giá</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- render list đánh giá -->
                <div class="list-product-detail-rating ">

                    <!-- ajax load ra -->
                    <!-- dùng chung comment reder -->


                </div>

            </div>
            <div class="product-detail-comment">
                <div class="product-detail-comment-title">
                    Hỏi & đáp về <?= $info_sp['ten_sp'] ?>
                </div>
                <!-- dùng chung textarea rating -->
                <form action="" method="POST" id="send_comment" class="product-detail-comment-write">
                    <div class="form-group box-write-danh-gia pr-4">
                        <input type="hidden" name="id_sp" value="<?= $info_sp['id_sp'] ?>">
                        <input type="hidden" name="id_kh" value="<?= $id_kh_session ?>">
                        <input type="hidden" name="url_session" value="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
                        <textarea class="form-control text-area-send-rate" name="noi_dung_comment" id="" style="resize:none;" placeholder="Viết đánh của bạn ..." rows="2">
                                </textarea>
                        <button type="submit" class="btn primary btn-send-comment font-size text-light p-3">Gửi bình luận</button>
                    </div>
                </form>
                <!-- end viết comment -->
                <!-- comment1 -->
                <div class="list-comment-render">
                    <!-- load từ ajax -->
                </div>
            </div>
        </div>


    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });
    </script>