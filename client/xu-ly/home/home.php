<?php
require_once '../../../global.php';
require_once '../../../model/san-pham.php';
require_once '../../../model/khuyen-mai.php';
require_once '../../../model/san-pham.php';
require_once '../../../model/rating.php';

//tabmenu sản phẩm mới nhất

if (isset($_POST['tab_menu_sp_new_add'])) {
?>
    <div class="row">
        <?php
        $san_pham_new_add = san_pham_Query_All_NewAdd();
        foreach ($san_pham_new_add as $sp_new_add) { ?>
            <div class="col-2-5">
                <a href="san-pham?id=<?= $sp_new_add['id_sp']; ?>&name=<?= $sp_new_add['ten_sp']; ?>" class="tab__menu-product-content-newproduct">
                    <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $sp_new_add['hinh_anh'] ?>')">
                        <!-- Nhãn giảm giá -->
                        <?php
                        $list_giam_gia = giam_gia_Query_All_Sp();
                        if (count($list_giam_gia) > 0) {
                            foreach ($list_giam_gia as $giam_gia) {
                                if ($giam_gia['id_sp'] == $sp_new_add['id_sp']) {
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

                        <!-- Nhãn check in -->
                        <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Giảm 300k - Check in </span> -->

                        <!-- Nhãn trả góp -->
                        <!-- <span class="tab__menu-product-content-newproduct-installment-label ">Trả góp 0%</span> -->
                    </div>
                    <div class="px-4 pt-1 pb-5">
                        <div class="tab__menu-product-newproduct-rate">

                            <?php
                            $rating = rating_Avg($sp_new_add['id_sp']);
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
                            <?= $sp_new_add['ten_sp']; ?>
                        </p>
                        <!-- Nhãn Mã giảm giá -->
                        <?php
                        $list_ma_giam_gia = ma_giam_gia_Query_All();
                        if (count($list_ma_giam_gia) > 0) {
                            foreach ($list_ma_giam_gia as $ma_giam_gia) {
                                if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                                    // %
                        ?>
                                    <span class="tab__menu-product-newproduct-code-label">Giảm <?= $ma_giam_gia['muc_giam'] ?> %</span>

                                <?php
                                } else {
                                    //số tiền
                                ?>
                                    <span class="tab__menu-product-newproduct-code-label">Giảm <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?></span>

                        <?php
                                }
                            }
                            if (count($list_giam_gia) > 2) {
                                echo "<br>";
                            }
                        }
                        ?>
                        <!-- Nhãn deal sốc -->
                        <?php
                        $list_deal_soc = deal_soc_Query_All_Sp_Chinh();
                        if (count($list_deal_soc) > 0) {
                            foreach ($list_deal_soc as $deal_soc) {
                                if ($deal_soc['id_sp_chinh'] == $sp_new_add['id_sp']) { ?>
                                    <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span>

                        <?php
                                }
                            }
                        }
                        ?>
                        <div class="tab__menu-product-newproduct-price d-flex">
                            <b class="tab__menu-product-newproduct-newprice pt-2">
                                <?php
                                $list_giam_gia = giam_gia_Query_All_Sp();
                                if (in_array($sp_new_add['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                    //id sp nằm trong giảm giá
                                    if (count($list_giam_gia) > 0) {
                                        foreach ($list_giam_gia as $giam_gia) {
                                            if ($giam_gia['id_sp'] == $sp_new_add['id_sp']) {
                                                if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                    // %
                                                    echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $sp_new_add['don_gia']);
                                ?>
                                                <?php
                                                } else {
                                                    //số tiền
                                                    echo So_Tien_Giam_Gia_Tien($sp_new_add['don_gia'], $giam_gia['muc_giam']);
                                                ?>

                                <?php
                                                }
                                            }
                                        }
                                    }
                                } else {
                                    //id sp ko nằm trong gg
                                    echo number_format($sp_new_add['don_gia'], 0, ',', '.') . '&nbsp;đ';
                                }
                                ?>
                            </b>
                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                <?php
                                $list_giam_gia = giam_gia_Query_All_Sp();
                                if (in_array($sp_new_add['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                    //id sp nằm trong giảm giá
                                    if (count($list_giam_gia) > 0) {
                                        foreach ($list_giam_gia as $giam_gia) {
                                            if ($giam_gia['id_sp'] == $sp_new_add['id_sp']) {
                                                // nếu sp có giảm giá mới in ra giá củ 
                                                echo  number_format($sp_new_add['don_gia'], 0, ',', '.') . 'đ';
                                            }
                                        }
                                    }
                                } else {
                                    //ko có giảm giá 

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
<?php
}
//tab menu sản phẩm bán chạy
if (isset($_POST['tab_menu_sp_bestseller'])) {
?>
    <div class="row">
        <!-- sản phẩm bán chạy trước -->
        <?php
        $san_pham_BestSeller = san_pham_Query_All_BestSeller();
        foreach ($san_pham_BestSeller as $sp_BestSeller) { ?>
            <div class="col-2-5">
                <a href="san-pham?id=<?= $sp_BestSeller['id_sp']; ?>&name=<?= $sp_BestSeller['ten_sp']; ?>" class="tab__menu-product-content-newproduct">
                    <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $sp_BestSeller['hinh_anh'] ?>')">
                        <!-- Nhãn giảm giá -->
                        <?php
                        $list_giam_gia = giam_gia_Query_All_Sp();
                        if (count($list_giam_gia) > 0) {
                            foreach ($list_giam_gia as $giam_gia) {
                                if ($giam_gia['id_sp'] == $sp_BestSeller['id_sp']) {
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

                        <!-- Nhãn check in -->
                        <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Giảm 300k - Check in </span> -->

                        <!-- Nhãn trả góp -->
                        <!-- <span class="tab__menu-product-content-newproduct-installment-label ">Trả góp 0%</span> -->
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
                        <!-- Nhãn Mã giảm giá -->
                        <?php
                        $list_ma_giam_gia = ma_giam_gia_Query_All();
                        if (count($list_ma_giam_gia) > 0) {
                            foreach ($list_ma_giam_gia as $ma_giam_gia) {
                                if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                                    // %
                        ?>
                                    <span class="tab__menu-product-newproduct-code-label">Giảm <?= $ma_giam_gia['muc_giam'] ?> %</span>

                                <?php
                                } else {
                                    //số tiền
                                ?>
                                    <span class="tab__menu-product-newproduct-code-label">Giảm <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?></span>

                        <?php
                                }
                            }
                            if (count($list_giam_gia) > 2) {
                                echo "<br>";
                            }
                        }
                        ?>
                        <!-- Nhãn deal sốc -->
                        <?php
                        $list_deal_soc = deal_soc_Query_All_Sp_Chinh();
                        if (count($list_deal_soc) > 0) {
                            foreach ($list_deal_soc as $deal_soc) {
                                if ($deal_soc['id_sp_chinh'] == $sp_BestSeller['id_sp']) { ?>
                                    <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span>

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
                                    //id sp nằm trong giảm giá
                                    if (count($list_giam_gia) > 0) {
                                        foreach ($list_giam_gia as $giam_gia) {
                                            if ($giam_gia['id_sp'] == $sp_BestSeller['id_sp']) {
                                                if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                    // %
                                                    echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $sp_BestSeller['don_gia']);
                                ?>
                                                <?php
                                                } else {
                                                    //số tiền
                                                    echo So_Tien_Giam_Gia_Tien($sp_BestSeller['don_gia'], $giam_gia['muc_giam']);
                                                ?>

                                <?php
                                                }
                                            }
                                        }
                                    }
                                } else {
                                    //id sp ko nằm trong gg
                                    echo number_format($sp_BestSeller['don_gia'], 0, ',', '.') . '&nbsp;đ';
                                }
                                ?>
                            </b>
                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                <?php
                                $list_giam_gia = giam_gia_Query_All_Sp();
                                if (in_array($sp_BestSeller['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                    //id sp nằm trong giảm giá
                                    if (count($list_giam_gia) > 0) {
                                        foreach ($list_giam_gia as $giam_gia) {
                                            if ($giam_gia['id_sp'] == $sp_BestSeller['id_sp']) {
                                                // nếu sp có giảm giá mới in ra giá củ 
                                                echo  number_format($sp_BestSeller['don_gia'], 0, ',', '.') . 'đ';
                                            }
                                        }
                                    }
                                } else {
                                    //ko có giảm giá 

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
<?php
}
?>