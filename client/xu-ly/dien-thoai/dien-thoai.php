<?php
require_once '../../../model/san-pham.php';
require_once '../../../global.php';
if (isset($_POST['filter_tab_ban_chay'])) {
    $dt_BestSeller = dien_thoai_Query_9_BestSeller();

?>
    <div class="row">
        <?php
        foreach ($dt_BestSeller as $dt_seller) { ?>
            <div class="col-4">
                <a href="san-pham?id=<?=$dt_seller['id_sp']?>&name=<?=$dt_seller['ten_sp']?>" class="tab__menu-product-content-newproduct">
                    <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $dt_seller['hinh_anh'] ?>')">
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
                            <?= $dt_seller['ten_sp']; ?>
                        </p>
                        <!-- Nhãn Mã giảm giá -->
                        <span class="tab__menu-product-newproduct-code-label">Giảm 100K</span>
                        <!-- Nhãn deal sốc -->
                        <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span>
                        <div class="tab__menu-product-newproduct-price d-flex">
                            <b class="tab__menu-product-newproduct-newprice pt-2">
                                <?= number_format($dt_seller['don_gia'], 0, ',', '.') . 'đ'; ?>
                            </b>
                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                <?= number_format($dt_seller['don_gia'], 0, ',', '.') . 'đ'; ?>
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
// lọc giá thấp
if (isset($_POST['filter_tab_gia_thap'])) {
    $dt_gia_thaps = dien_thoai_Query_9_gia_thap();

?>
    <div class="row">
        <?php
        foreach ($dt_gia_thaps as $dt_gia_thap) { ?>
            <div class="col-4">
                <a href="san-pham?id<?=$dt_gia_thap['id_sp']?>&name=<?=$dt_gia_thap['ten_sp']?>" class="tab__menu-product-content-newproduct">
                    <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $dt_gia_thap['hinh_anh'] ?>')">
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
                            <?= $dt_gia_thap['ten_sp']; ?>
                        </p>
                        <!-- Nhãn Mã giảm giá -->
                        <span class="tab__menu-product-newproduct-code-label">Giảm 100K</span>
                        <!-- Nhãn deal sốc -->
                        <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span>
                        <div class="tab__menu-product-newproduct-price d-flex">
                            <b class="tab__menu-product-newproduct-newprice pt-2">
                                <?= number_format($dt_gia_thap['don_gia'], 0, ',', '.') . 'đ'; ?>
                            </b>
                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                <?= number_format($dt_gia_thap['don_gia'], 0, ',', '.') . 'đ'; ?>
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
// lọc giá cao
if (isset($_POST['filter_tab_gia_cao'])) {
    $dt_gia_caos = dien_thoai_Query_9_gia_cao();

?>
    <div class="row">
        <?php
        foreach ($dt_gia_caos as $dt_gia_cao) { ?>
            <div class="col-4">
                <a href="san-pham?id=<?=$dt_gia_cao['id_sp']?>&name=<?=$dt_gia_cao['ten_sp']?>" class="tab__menu-product-content-newproduct">
                    <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $dt_gia_cao['hinh_anh'] ?>')">
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
                            <?= $dt_gia_cao['ten_sp']; ?>
                        </p>
                        <!-- Nhãn Mã giảm giá -->
                        <span class="tab__menu-product-newproduct-code-label">Giảm 100K</span>
                        <!-- Nhãn deal sốc -->
                        <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span>
                        <div class="tab__menu-product-newproduct-price d-flex">
                            <b class="tab__menu-product-newproduct-newprice pt-2">
                                <?= number_format($dt_gia_cao['don_gia'], 0, ',', '.') . 'đ'; ?>
                            </b>
                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                <?= number_format($dt_gia_cao['don_gia'], 0, ',', '.') . 'đ'; ?>
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