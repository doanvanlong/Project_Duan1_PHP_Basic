<div class="row">
    <div class="col-12">
        <div class="chuong-trinh-km-hom-nay bg-white">
            <div class="chuong-trinh-km-hom-nay-title py-3">Chương trình khuyến mãi hôm nay</div>
            <div class=" owl-carousel owl-theme owl-khuyen-mai-hom-nay mt-4">
                <?php
                $list_bai_viet_km = bai_viet_Query_All_Danh_Muc_KM();
                if (count($list_bai_viet_km) > 0) {
                    foreach ($list_bai_viet_km as $bai_viet_km) { ?>
                        <a href="bai-viet?id=<?= $bai_viet_km['id_bai_viet'] ?>&title=<?= $bai_viet_km['tieu_de_news'] ?>" class="text-dark chuong-trinh-km-hom-nay-box">
                            <div class="chuong-trinh-km-hom-nay-box-img">
                                <img style="width:100%;height:200px" src="<?= $CONTENT_UPLOAD ?>/<?= $bai_viet_km['img_news'] ?>" alt="">
                            </div>
                            <div class="chuong-trinh-km-hom-nay-box-title text-overflow my-3 pl-3" style="font-weight:500;">
                                <?= $bai_viet_km['tieu_de_news'] ?>
                            </div>
                            <div class="chuong-trinh-km-hom-nay-box-title pl-3">
                                <i class="far fa-calendar-alt"></i>
                                <?= $bai_viet_km['ngay_post'] ?>
                            </div>
                        </a>
                <?php
                    }
                }

                ?>

            </div>
        </div>
    </div>

</div>
<div class="row my-4">
    <?php
    $list_bai_viet_km = bai_viet_Query_All_Danh_Muc_KM();
    if (count($list_bai_viet_km) > 0) {
        foreach ($list_bai_viet_km as $bai_viet_km) { ?>
            <div class="col-4" >
                <a href="bai-viet?id=<?= $bai_viet_km['id_bai_viet'] ?>&title=<?= $bai_viet_km['tieu_de_news'] ?>" class="text-dark chuong-trinh-km-hom-nay-box" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="chuong-trinh-km-hom-nay-box-img">
                        <img style="width:100%;height:200px" src="<?= $CONTENT_UPLOAD ?>/<?= $bai_viet_km['img_news'] ?>" alt="">
                    </div>
                    <div class="chuong-trinh-km-hom-nay-box-title text-overflow my-3 pl-3" style="font-weight:500;">
                        <?= $bai_viet_km['tieu_de_news'] ?>
                    </div>
                    <div class="chuong-trinh-km-hom-nay-box-title pl-3">
                        <i class="far fa-calendar-alt"></i>
                        <?= $bai_viet_km['ngay_post'] ?>
                    </div>
                </a>
            </div>
    <?php
        }
    }

    ?>
</div>
</div>
<script>
    //owlcarousel tab menu product
    $(".owl-khuyen-mai-hom-nay").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navText: [
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>',
        ],
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
            },
        },
    });
</script>