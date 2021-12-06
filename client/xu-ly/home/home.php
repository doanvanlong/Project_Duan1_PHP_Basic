<?php
require_once '../../../global.php';
require_once '../../../model/san-pham.php';
//tabmenu sản phẩm mới nhất

if (isset($_POST['tab_menu_sp_new_add'])) {
?>
    <div class="row">
        <?php
        $sp_bestsellers = san_pham_Query_All_NewAdd();
        foreach ($sp_bestsellers as $sp_new_add) { ?>
            <div class="col-2-5">
                <a href="san-pham?id=<?=$sp_new_add['id_sp']?>&name=<?=$sp_new_add['ten_sp']?>" class="tab__menu-product-content-newproduct">
                    <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $sp_new_add['hinh_anh'] ?>')">
                        <!-- Nhãn giảm giá -->
                        <!-- <span class="tab__menu-product-content-newproduct-sale-label"> Giảm  đến 10%  </span> -->
                        <!-- Nhãn check in -->
                        <span class="tab__menu-product-content-newproduct-checkin-label">Giảm 300k - Check in </span>

                        <!-- Nhãn trả góp -->
                        <span class="tab__menu-product-content-newproduct-installment-label ">Trả góp 0%</span>
                    </div>
                    <div class="px-4 pt-1 pb-5">
                        <div class="tab__menu-product-newproduct-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                            <?= $sp_new_add['ten_sp']; ?>
                        </p>
                        <!-- Nhãn Mã giảm giá -->
                        <span class="tab__menu-product-newproduct-code-label">Giảm 100K</span>
                        <!-- Nhãn deal sốc -->
                        <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span>
                        <div class="tab__menu-product-newproduct-price d-flex">
                            <b class="tab__menu-product-newproduct-newprice pt-2">
                                <?= number_format($sp_new_add['don_gia'], 0, ',', '.') . 'đ'; ?>
                            </b>
                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                <?= number_format($sp_new_add['don_gia'], 0, ',', '.') . 'đ'; ?>
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
        <?php
        $sp_bestsellers = san_pham_Query_All_BestSeller();
        foreach ($sp_bestsellers as $sp_bestseller) { ?>
            <div class="col-2-5">
                <a href="san-pham?id=<?=$sp_bestseller['id_sp']?>&name<?=$sp_bestseller['ten_sp']?>" class="tab__menu-product-content-newproduct">
                    <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $sp_bestseller['hinh_anh'] ?>')">
                        <!-- Nhãn giảm giá -->
                        <!-- <span class="tab__menu-product-content-newproduct-sale-label"> Giảm  đến 10%  </span> -->
                        <!-- Nhãn check in -->
                        <span class="tab__menu-product-content-newproduct-checkin-label">Giảm 300k - Check in </span>

                        <!-- Nhãn trả góp -->
                        <span class="tab__menu-product-content-newproduct-installment-label ">Trả góp 0%</span>
                    </div>
                    <div class="px-4 pt-1 pb-5">
                        <div class="tab__menu-product-newproduct-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                            <?= $sp_bestseller['ten_sp']; ?>
                        </p>
                        <!-- Nhãn Mã giảm giá -->
                        <span class="tab__menu-product-newproduct-code-label">Giảm 100K</span>
                        <!-- Nhãn deal sốc -->
                        <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span>
                        <div class="tab__menu-product-newproduct-price d-flex">
                            <b class="tab__menu-product-newproduct-newprice pt-2">
                                <?= number_format($sp_bestseller['don_gia'], 0, ',', '.') . 'đ'; ?>
                            </b>
                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                <?= number_format($sp_bestseller['don_gia'], 0, ',', '.') . 'đ'; ?>
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