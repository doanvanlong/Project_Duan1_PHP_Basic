<div class="row">
    <div class="col-12">
        <!-- banner -->
        <div class="banner">
            <div class="row">
                <div class="col-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            $list_news_km = bai_viet_Query_Danh_Muc_KM();
                            foreach ($list_news_km as $news_km) {
                                if ($list_news_km[0]['id_bai_viet'] == $news_km['id_bai_viet']) { ?>
                                    <a href="bai-viet?id=<?= $news_km['id_bai_viet'] ?>&title=<?= $news_km['tieu_de_news'] ?>" class="carousel-item active ">
                                        <img alt="<?= $news_km['tieu_de_news'] ?>" style="height:301px;" class="d-block w-100" src="<?= $CONTENT_UPLOAD ?>/<?= $news_km['img_news'] ?>" alt="First slide">
                                    </a>
                                <?php
                                } else { ?>
                                    <a href="bai-viet?id=<?= $news_km['id_bai_viet'] ?>&title=<?= $news_km['tieu_de_news'] ?>" class="carousel-item ">
                                        <img alt="<?= $news_km['tieu_de_news'] ?>" style="height:301px;" class="d-block w-100" src="<?= $CONTENT_UPLOAD ?>/<?= $news_km['img_news'] ?>" alt="First slide">
                                    </a>
                            <?php
                                }
                            }
                            ?>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="banner__right">
                        <div class="banner__right-promotion">
                            <div class="banner__right-promotion-title d-flex justify-content-between align-items-center">
                                <h3 class="banner__right-promotion-heading mb-0">Khuy???n m??i</h3>
                                <a href="#" style="font-size:1.3rem" class="banner__right-promotion-seeall mb-0">Xem th??m</a>
                            </div>
                            <div class="banner__right-promotion-body">
                                <?php
                                $top_2_news_km = bai_viet_Query_Top2_Km();
                                foreach ($top_2_news_km as $top_2_km) { ?>
                                    <a href="bai-viet?id=<?= $top_2_km['id_bai_viet'] ?>&title=<?= $top_2_km['tieu_de_news'] ?>" class="banner__right-promotion-body-content  d-flex align-items-center">
                                        <div class="banner__right-promotion-body-img">
                                            <img style="width:100%;min-height:60px;" src="<?= $CONTENT_UPLOAD ?>/<?= $top_2_km['img_news'] ?>" alt="">
                                        </div>
                                        <div class="banner__right-promotion-body-text ">
                                            <p class="text-overflow"><?= $top_2_km['tieu_de_news'] ?></p>
                                            <p class="mb-0 text-muted" style="font-size: 1.1rem;"><?= $top_2_km['ngay_post'] ?></p>
                                        </div>
                                    </a>

                                <?php
                                }
                                ?>

                            </div>


                        </div>
                    </div>
                    <!-- <img style="width:100%;" src="<?= $CONTENT_CLIENT_URL ?>/img/thu_cY_3.jpg" alt=""> -->
                    <img style="width:100%;margin-top:6px" src="<?= $CONTENT_CLIENT_URL ?>/img/iphone_2.jpg" alt="">
                </div>

            </div>
        </div>
        <!-- end banner -->
    </div>
</div>
<div class="row">
    <div class="col-12">
        <!-- tab__menu-product -->
        <div class="tab__menu-product my-4">
            <div class="tab__menu-product-list  d-flex justify-content-center text-uppercase ">
                <h4 class="tab__menu-product-items active" id="tab__menu-bestseller">B??n ch???y</h4>
                <h4 class="tab__menu-product-items" id="tab__menu-newadd">S???n ph???m m???i</h4>
            </div>
            <div class="tab__menu-product-content py-4">
                <div class=" owl-carousel owl-theme owl-tab_menu_product">
                    <!-- s???n ph???m b??n ch???y tr?????c -->
                    <?php
                    $san_pham_BestSeller = san_pham_Query_All_BestSeller();
                    foreach ($san_pham_BestSeller as $sp_BestSeller) { ?>
                        <div class="item">
                            <a href="san-pham?id=<?= $sp_BestSeller['id_sp']; ?>&name=<?= $sp_BestSeller['ten_sp']; ?>" class="tab__menu-product-content-newproduct">
                                <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $sp_BestSeller['hinh_anh'] ?>')">
                                    <!-- Nh??n gi???m gi?? -->
                                    <?php
                                    $list_giam_gia = giam_gia_Query_All_Sp();
                                    if (count($list_giam_gia) > 0) {
                                        foreach ($list_giam_gia as $giam_gia) {
                                            if ($giam_gia['id_sp'] == $sp_BestSeller['id_sp']) {
                                                if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                    // %
                                    ?>
                                                    <span class="tab__menu-product-content-newproduct-sale-label"> Gi???m <?= $giam_gia['muc_giam'] ?> %</span>
                                                <?php
                                                } else {
                                                    //s??? ti???n
                                                ?>
                                                    <span class="tab__menu-product-content-newproduct-sale-label"> Gi???m <?= number_format($giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;??' ?> </span>
                                    <?php
                                                }
                                            }
                                        }
                                    }
                                    ?>

                                    <!-- Nh??n check in -->
                                    <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Gi???m 300k - Check in </span> -->

                                    <!-- Nh??n tr??? g??p -->
                                    <!-- <span class="tab__menu-product-content-newproduct-installment-label ">Tr??? g??p 0%</span> -->
                                </div>
                                <div class="px-4 pt-1 pb-5">
                                    <div class="tab__menu-product-newproduct-rate">

                                        <?php
                                        $rating = rating_Avg($sp_BestSeller['id_sp']);
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $rating) { ?>
                                                <i class=" fas fa-star"></i>
                                            <?php
                                            } else { ?>
                                                <i class="text-secondary fas fa-star"></i>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                                        <?= $sp_BestSeller['ten_sp']; ?>
                                    </p>
                                    <!-- Nh??n M?? gi???m gi?? -->
                                    <?php
                                    $list_ma_giam_gia = ma_giam_gia_Query_All();
                                    if (count($list_ma_giam_gia) > 0 ) {
                                        foreach ($list_ma_giam_gia as $ma_giam_gia) {
                                            if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                // %
                                    ?>
                                                <span class="tab__menu-product-newproduct-code-label">Gi???m <?= $ma_giam_gia['muc_giam'] ?> %</span>

                                            <?php
                                            } else {
                                                //s??? ti???n
                                            ?>
                                                <span class="tab__menu-product-newproduct-code-label">Gi???m <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;??' ?></span>

                                    <?php
                                            }
                                        }
                                        if (count($list_giam_gia) > 2) {
                                            echo "<br>";
                                        }
                                    }
                                    ?>
                                    <!-- Nh??n deal s???c -->
                                    <?php
                                    $list_deal_soc = deal_soc_Query_All_Sp_Chinh();
                                    if (count($list_deal_soc) > 0) {
                                        foreach ($list_deal_soc as $deal_soc) {
                                            if ($deal_soc['id_sp_chinh'] == $sp_BestSeller['id_sp']) { ?>
                                                <span class="tab__menu-product-newproduct-deal-label">Mua k??m Deal s???c</span>

                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <div class="tab__menu-product-newproduct-price d-flex">
                                        <b class="tab__menu-product-newproduct-newprice pt-2">
                                            <?php
                                            $list_giam_gia = giam_gia_Query_All_Sp();
                                            if (in_array($sp_BestSeller['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                //id sp n???m trong gi???m gi??
                                                if (count($list_giam_gia) > 0) {
                                                    foreach ($list_giam_gia as $giam_gia) {
                                                        if ($giam_gia['id_sp'] == $sp_BestSeller['id_sp']) {
                                                            if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                                // %
                                                                echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $sp_BestSeller['don_gia']);
                                            ?>
                                                            <?php
                                                            } else {
                                                                //s??? ti???n
                                                                echo So_Tien_Giam_Gia_Tien($sp_BestSeller['don_gia'], $giam_gia['muc_giam']);
                                                            ?>

                                            <?php
                                                            }
                                                        }
                                                    }
                                                }
                                            } else {
                                                //id sp ko n???m trong gg
                                                echo number_format($sp_BestSeller['don_gia'], 0, ',', '.') . '&nbsp;??';
                                            }
                                            ?>
                                        </b>
                                        <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                            <?php
                                            $list_giam_gia = giam_gia_Query_All_Sp();
                                            if (in_array($sp_BestSeller['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                //id sp n???m trong gi???m gi??
                                                if (count($list_giam_gia) > 0) {
                                                    foreach ($list_giam_gia as $giam_gia) {
                                                        if ($giam_gia['id_sp'] == $sp_BestSeller['id_sp']) {
                                                            // n???u sp c?? gi???m gi?? m???i in ra gi?? c??? 
                                                            echo  number_format($sp_BestSeller['don_gia'], 0, ',', '.') . '??';
                                                        }
                                                    }
                                                }
                                            } else {
                                                //ko c?? gi???m gi?? 

                                            }
                                            ?>
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
        </div>
        <!--end  tab menu product -->
    </div>
</div>
<!-- banner check in -->
<div class="banner-checkin">
    <img style="width: 100%; " src="<?= $CONTENT_CLIENT_URL ?>/img/baner_ngan_web.jpg" alt="Check in nh???n qu??">
</div>
<!-- product flash sale -->
<!-- s???n ph???m d??ng chung tab menu product -->
<div class="product__flash-sale mt-5 mb-2">
    <div class="row">
        <div class="col-3">
            <div class="product__flash-sale-countdown">
                <img style="width: 100%; " src="<?= $CONTENT_CLIENT_URL ?>/img/fs.gif" alt="">
                <div class="product__flash-sale-countdown-content d-flex justify-content-center">
                    <span class="product__flash-sale-countdown-items">
                        <div class="product__flash-sale-countdown-count-items product__flash-sale-countdown-count-items-hours">
                            3
                        </div>
                        <div class="product__flash-sale-countdown-text-items">
                            Gi???
                        </div>
                    </span>
                    <span class="product__flash-sale-countdown-items">
                        <div class="product__flash-sale-countdown-count-items product__flash-sale-countdown-count-items-mins">
                            3
                        </div>
                        <div class="product__flash-sale-countdown-text-items">
                            Ph??t
                        </div>
                    </span>
                    <span class="product__flash-sale-countdown-items">
                        <div class="product__flash-sale-countdown-count-items product__flash-sale-countdown-count-items-secs">
                            3
                        </div>
                        <div class="product__flash-sale-countdown-text-items">
                            Gi??y
                        </div>
                    </span>
                </div>
                <a href="#" class="product__flash-sale-countdown-view-all">Xem t???t c???</a>
            </div>
        </div>
        <div class="col-9">
            <div class="product__flash-sale-content">
                <div class="owl-carousel owl-theme owl-product__flash-sale">
                    <?php
                    $sp_flash_sales = san_pham_Query_All_Flash_Sale();
                    foreach ($sp_flash_sales as $sp_flash_sale) { ?>
                        <div class="item">
                            <a href="san-pham?id=<?= $sp_flash_sale['id_sp']; ?>&name=<?= $sp_flash_sale['ten_sp']; ?>" class="tab__menu-product-content-newproduct">
                                <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $sp_flash_sale['hinh_anh'] ?>')">
                                    <!-- Nh??n gi???m gi?? -->
                                    <?php
                                    $list_giam_gia = giam_gia_Query_All_Sp();
                                    if (count($list_giam_gia) > 0) {
                                        foreach ($list_giam_gia as $giam_gia) {
                                            if ($giam_gia['id_sp'] == $sp_flash_sale['id_sp']) {
                                                if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                    // %
                                    ?>
                                                    <span class="tab__menu-product-content-newproduct-sale-label"> Gi???m <?= $giam_gia['muc_giam'] ?> %</span>
                                                <?php
                                                } else {
                                                    //s??? ti???n
                                                ?>
                                                    <span class="tab__menu-product-content-newproduct-sale-label"> Gi???m <?= number_format($giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;??' ?> </span>
                                    <?php
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                    <!-- Nh??n check in -->
                                    <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Gi???m 300k - Check in </span> -->

                                    <!-- Nh??n tr??? g??p -->
                                    <!-- <span class="tab__menu-product-content-newproduct-installment-label ">Tr??? g??p 0%</span> -->
                                </div>
                                <div class="px-2 pt-1 ">
                                    <!-- <div class="tab__menu-product-newproduct-rate">
                                         <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                          </div> -->
                                    <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                                        <?= $sp_flash_sale['ten_sp'] ?>
                                    </p>
                                    <!-- Nh??n M?? gi???m gi?? -->
                                    <?php
                                    $list_ma_giam_gia = ma_giam_gia_Query_All();
                                    if (count($list_ma_giam_gia) > 0) {
                                        foreach ($list_ma_giam_gia as $ma_giam_gia) {
                                            if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                // %
                                    ?>
                                                <span class="tab__menu-product-newproduct-code-label">Gi???m <?= $ma_giam_gia['muc_giam'] ?> %</span>

                                            <?php
                                            } else {
                                                //s??? ti???n
                                            ?>
                                                <span class="tab__menu-product-newproduct-code-label">Gi???m <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;??' ?></span>

                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <!-- <span class="tab__menu-product-newproduct-code-label">Gi???m 100K</span> -->
                                    <!-- Nh??n deal s???c -->
                                    <!-- <span class="tab__menu-product-newproduct-deal-label">Mua k??m Deal s???c</span> -->
                                    <!-- Nh??n deal s???c -->
                                    <?php
                                    $list_deal_soc = deal_soc_Query_All_Sp_Chinh();
                                    if (count($list_deal_soc) > 0) {
                                        foreach ($list_deal_soc as $deal_soc) {
                                            if ($deal_soc['id_sp_chinh'] == $sp_flash_sale['id_sp']) { ?>
                                                <span class="tab__menu-product-newproduct-deal-label">Mua k??m Deal s???c</span>

                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <div class="tab__menu-product-newproduct-price d-flex">
                                        <b class="tab__menu-product-newproduct-newprice pt-2">
                                            <?php
                                            $list_giam_gia = giam_gia_Query_All_Sp();
                                            if (in_array($sp_flash_sale['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                //id sp n???m trong gi???m gi??
                                                if (count($list_giam_gia) > 0) {
                                                    foreach ($list_giam_gia as $giam_gia) {
                                                        if ($giam_gia['id_sp'] == $sp_flash_sale['id_sp']) {
                                                            if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                                // %
                                                                echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $sp_flash_sale['don_gia']);
                                            ?>
                                                            <?php
                                                            } else {
                                                                //s??? ti???n
                                                                echo So_Tien_Giam_Gia_Tien($sp_flash_sale['don_gia'], $giam_gia['muc_giam']);
                                                            ?>

                                            <?php
                                                            }
                                                        }
                                                    }
                                                }
                                            } else {
                                                //id sp ko n???m trong gg
                                                echo number_format($sp_flash_sale['don_gia'], 0, ',', '.') . '&nbsp;??';
                                            }
                                            ?>

                                        </b>
                                        <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                            <?php
                                            $list_giam_gia = giam_gia_Query_All_Sp();
                                            if (in_array($sp_flash_sale['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                //id sp n???m trong gi???m gi??
                                                if (count($list_giam_gia) > 0) {
                                                    foreach ($list_giam_gia as $giam_gia) {
                                                        if ($giam_gia['id_sp'] == $sp_flash_sale['id_sp']) {
                                                            // n???u sp c?? gi???m gi?? m???i in ra gi?? c??? 
                                                            echo  number_format($sp_flash_sale['don_gia'], 0, ',', '.') . '??';
                                                        }
                                                    }
                                                }
                                            } else {
                                                //ko c?? gi???m gi?? 

                                            }
                                            ?>
                                        </strike>
                                    </div>
                                    <div class="product__flash-sale-sold my-2">
                                        <?php
                                        echo   $da_ban = san_pham_Count_Da_Ban($sp_flash_sale['id_sp']);
                                        $tong_kho = $sp_flash_sale['so_luong'];
                                        $phan_tram = ($da_ban / $tong_kho) * 100;
                                        ?>
                                        <span class="product__flash-sale-sold-count" style="width:<?= $phan_tram ?>%;"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- ??i???n tho???i n???i b???t  l?????t xem nhi???u -->
<div class="phone-features">
    <h3 class="phone-features-heading">??i???n tho???i n???i b???t</h3>
    <div class="phone-features-product">
        <!-- l?????t xem nhi???u -->
        <div class="row">
            <div class="col-5">
                <!-- banner ??i???n tho???i n???i b???t -->
                <img style="width:100%;height:100%;" src="<?= $CONTENT_CLIENT_URL ?>/img/banner noi bat.jpg" alt="??i???n tho???i n???i b???t">
            </div>
            <div class="col-7">
                <div class="phone-features-product">
                    <div class="row">
                        <!-- S???n ph???m d??ng chung v???i tab menu -->
                        <?php
                        $sp_features = san_pham_Query_Dien_Thoai_Feature();
                        foreach ($sp_features as $sp_feature) { ?>
                            <div class="col-4">
                                <a href="san-pham?id=<?= $sp_feature['id_sp']; ?>&name=<?= $sp_feature['ten_sp']; ?>" class="tab__menu-product-content-newproduct">
                                    <div class="tab__menu-product-content-newproduct-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $sp_feature['hinh_anh'] ?>')">

                                        <!-- Nh??n gi???m gi?? -->
                                        <?php
                                        $list_giam_gia = giam_gia_Query_All_Sp();
                                        if (count($list_giam_gia) > 0) {
                                            foreach ($list_giam_gia as $giam_gia) {
                                                if ($giam_gia['id_sp'] == $sp_feature['id_sp']) {
                                                    if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                        // %
                                        ?>
                                                        <span class="tab__menu-product-content-newproduct-sale-label"> Gi???m <?= $giam_gia['muc_giam'] ?> %</span>
                                                    <?php
                                                    } else {
                                                        //s??? ti???n
                                                    ?>
                                                        <span class="tab__menu-product-content-newproduct-sale-label"> Gi???m <?= number_format($giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;??' ?> </span>
                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                        <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Gi???m 300k - Check in
                          </span> -->
                                        <!-- <span class="tab__menu-product-content-newproduct-installment-label">Tr??? g??p 0%</span> -->
                                    </div>
                                    <div class="px-4 pt-1 pb-2">
                                        <!-- <div class="tab__menu-product-newproduct-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div> -->
                                        <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                                            <?= $sp_feature['ten_sp'] ?>
                                        </p>
                                        <!-- <span class="tab__menu-product-newproduct-code-label">Gi???m 100K</span> -->
                                        <?php
                                        $list_ma_giam_gia = ma_giam_gia_Query_All();
                                        if (count($list_ma_giam_gia) > 0) {
                                            foreach ($list_ma_giam_gia as $ma_giam_gia) {
                                                if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                    // %
                                        ?>
                                                    <span class="tab__menu-product-newproduct-code-label">Gi???m <?= $ma_giam_gia['muc_giam'] ?> %</span>

                                                <?php
                                                } else {
                                                    //s??? ti???n
                                                ?>
                                                    <span class="tab__menu-product-newproduct-code-label">Gi???m <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;??' ?></span>

                                        <?php
                                                }
                                            }
                                            if (count($list_giam_gia) > 2) {
                                                echo "<br>";
                                            }
                                        }
                                        ?>
                                        <!-- <span class="tab__menu-product-newproduct-deal-label">Mua k??m Deal s???c</span> -->
                                        <?php
                                        $list_deal_soc = deal_soc_Query_All_Sp_Chinh();
                                        if (count($list_deal_soc) > 0) {
                                            foreach ($list_deal_soc as $deal_soc) {
                                                if ($deal_soc['id_sp_chinh'] == $sp_feature['id_sp']) { ?>
                                                    <span class="tab__menu-product-newproduct-deal-label">Mua k??m Deal s???c</span>

                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                        <div class="tab__menu-product-newproduct-price d-flex">
                                            <b class="tab__menu-product-newproduct-newprice pt-2">
                                                <?php
                                                $list_giam_gia = giam_gia_Query_All_Sp();
                                                if (in_array($sp_feature['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                    //id sp n???m trong gi???m gi??
                                                    if (count($list_giam_gia) > 0) {
                                                        foreach ($list_giam_gia as $giam_gia) {
                                                            if ($giam_gia['id_sp'] == $sp_feature['id_sp']) {
                                                                if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                                    // %
                                                                    echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $sp_feature['don_gia']);
                                                ?>
                                                                <?php
                                                                } else {
                                                                    //s??? ti???n
                                                                    echo So_Tien_Giam_Gia_Tien($sp_feature['don_gia'], $giam_gia['muc_giam']);
                                                                ?>

                                                <?php
                                                                }
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    //id sp ko n???m trong gg
                                                    echo number_format($sp_feature['don_gia'], 0, ',', '.') . '&nbsp;??';
                                                }
                                                ?>

                                            </b>
                                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                                <?php
                                                $list_giam_gia = giam_gia_Query_All_Sp();
                                                if (in_array($sp_feature['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                    //id sp n???m trong gi???m gi??
                                                    if (count($list_giam_gia) > 0) {
                                                        foreach ($list_giam_gia as $giam_gia) {
                                                            if ($giam_gia['id_sp'] == $sp_feature['id_sp']) {
                                                                // n???u sp c?? gi???m gi?? m???i in ra gi?? c??? 
                                                                echo  number_format($sp_feature['don_gia'], 0, ',', '.') . '??';
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    //ko c?? gi???m gi?? 

                                                }
                                                ?>
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

            </div>
        </div>

    </div>
</div>
<!-- Ph??? ki???n gi?? r??? ,gi???m gi?? -->
<!-- d??ng chung v???i ??i???n tho???i n???i b???t -->
<div class="phone-features">
    <h3 class="phone-features-heading">Ph??? ki???n gi?? r???</h3>
    <div class="phone-features-product">

        <div class="row">
            <div class="col-5">
                <!-- banner ph??? ki???n gi?? r??? -->
                <img style="width:100%;height:100%;" src="<?= $CONTENT_CLIENT_URL ?>/img/banner phu kien.jpg" alt="Ph??? ki???n gi?? r???">
            </div>
            <div class="col-7">
                <div class="phone-features-product">
                    <div class="row">
                        <!-- S???n ph???m d??ng chung v???i tab menu -->
                        <!-- ph??? ki???n c?? l?????t xem nhi???u -->
                        <?php
                        $phu_kien_feature = san_pham_Phu_kien_Query_Feature();
                        foreach ($phu_kien_feature as $phu_kien_feature) { ?>
                            <div class="col-4">
                                <a href="san-pham?id=<?= $phu_kien_feature['id_sp'] ?>&name=<?= $phu_kien_feature['ten_sp'] ?>" class="tab__menu-product-content-newproduct">
                                    <div class="tab__menu-product-content-newproduct-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $phu_kien_feature['hinh_anh'] ?>')">

                                        <!-- Nh??n gi???m gi?? -->
                                        <?php
                                        $list_giam_gia = giam_gia_Query_All_Sp();
                                        if (count($list_giam_gia) > 0) {
                                            foreach ($list_giam_gia as $giam_gia) {
                                                if ($giam_gia['id_sp'] == $phu_kien_feature['id_sp']) {
                                                    if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                        // %
                                        ?>
                                                        <span class="tab__menu-product-content-newproduct-sale-label"> Gi???m <?= $giam_gia['muc_giam'] ?> %</span>
                                                    <?php
                                                    } else {
                                                        //s??? ti???n
                                                    ?>
                                                        <span class="tab__menu-product-content-newproduct-sale-label"> Gi???m <?= number_format($giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;??' ?> </span>
                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                        <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Gi???m 300k - Check in
                                     </span> -->
                                        <!-- <span class="tab__menu-product-content-newproduct-installment-label">Tr??? g??p 0%</span> -->
                                    </div>
                                    <div class="px-4 pt-1 pb-2">
                                        <!-- <div class="tab__menu-product-newproduct-rate">
                                          <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                          </div> -->
                                        <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                                            <?= $phu_kien_feature['ten_sp'] ?>
                                        </p>
                                        <!-- <span class="tab__menu-product-newproduct-code-label">Gi???m 100K</span> -->
                                        <?php
                                        $list_ma_giam_gia = ma_giam_gia_Query_All();
                                        if (count($list_ma_giam_gia) > 0) {
                                            foreach ($list_ma_giam_gia as $ma_giam_gia) {
                                                if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                    // %
                                        ?>
                                                    <span class="tab__menu-product-newproduct-code-label">Gi???m <?= $ma_giam_gia['muc_giam'] ?> %</span>

                                                <?php
                                                } else {
                                                    //s??? ti???n
                                                ?>
                                                    <span class="tab__menu-product-newproduct-code-label">Gi???m <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;??' ?></span>

                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                        <!-- <span class="tab__menu-product-newproduct-deal-label">Mua k??m Deal s???c</span> -->
                                        <div class="tab__menu-product-newproduct-price d-flex">
                                            <b class="tab__menu-product-newproduct-newprice pt-2">
                                                <?php
                                                $list_giam_gia = giam_gia_Query_All_Sp();
                                                if (in_array($phu_kien_feature['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                    //id sp n???m trong gi???m gi??
                                                    if (count($list_giam_gia) > 0) {
                                                        foreach ($list_giam_gia as $giam_gia) {
                                                            if ($giam_gia['id_sp'] == $phu_kien_feature['id_sp']) {
                                                                if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                                    // %
                                                                    echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $phu_kien_feature['don_gia']);
                                                ?>
                                                                <?php
                                                                } else {
                                                                    //s??? ti???n
                                                                    echo So_Tien_Giam_Gia_Tien($phu_kien_feature['don_gia'], $giam_gia['muc_giam']);
                                                                ?>

                                                <?php
                                                                }
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    //id sp ko n???m trong gg
                                                    echo number_format($phu_kien_feature['don_gia'], 0, ',', '.') . '&nbsp;??';
                                                }
                                                ?>

                                            </b>
                                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                                <?php
                                                $list_giam_gia = giam_gia_Query_All_Sp();
                                                if (in_array($phu_kien_feature['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                                    //id sp n???m trong gi???m gi??
                                                    if (count($list_giam_gia) > 0) {
                                                        foreach ($list_giam_gia as $giam_gia) {
                                                            if ($giam_gia['id_sp'] == $phu_kien_feature['id_sp']) {
                                                                // n???u sp c?? gi???m gi?? m???i in ra gi?? c??? 
                                                                echo  number_format($phu_kien_feature['don_gia'], 0, ',', '.') . '??';
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    //ko c?? gi???m gi?? 

                                                }
                                                ?>
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

            </div>
        </div>

    </div>
</div>
<!-- S???n ph???m ???? xem -->
<!-- L???y title c???a phone... d??ng chung -->
<div class="load_sp_vua_xem">
    
</div>
<div id="toast"></div>