<div class="row">
    <div class="col-12">
        <div class="menu-danh-muc-tin-tuc">
            <?php
            if (count($list_dm_tin_tuc) > 0) {
                foreach ($list_dm_tin_tuc as $tin_tuc) { ?>
                    <a class="menu-items-tin-tuc" href="
                    <?php
                    if ($tin_tuc['id_dm_news'] == 7) {
                        echo 'tin-cong-nghe';
                    } else if ($tin_tuc['id_dm_news'] == 9) {
                        echo 'danh-gia-trai-nghiem';
                    } else if ($tin_tuc['id_dm_news'] == 10) {
                        echo "thu-thuat";
                    } else if ($tin_tuc['id_dm_news'] == 11) {
                        echo 'khuyen-mai';
                    } else {
                        echo "hoat-dong-cua-hang";
                    }
                    ?>">
                        <div class="box-radius"><i class="fas fa-plus"></i></div> <?= $tin_tuc['ten_dm_news'] ?>
                    </a>
            <?php
                }
            }

            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <?php
        $top1_bai_viet_km = bai_viet_Query_Top1_Danh_Muc_KM();
        ?>
        <div class="banner_tin-khuyen_mai my-5 " style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $top1_bai_viet_km['img_news'] ?>')">
            <a href="bai-viet?id=<?=$top1_bai_viet_km['id_bai_viet']?>&title=<?=$top1_bai_viet_km['tieu_de_news']?>" class="banner_tin_tin_khuyen_mai-title">
                <div class="title"> <?= $top1_bai_viet_km['tieu_de_news'] ?></div>
                <div class="text-secondary" style="font-size:1.2rem;font-style:italic">
                    <i class="far fa-clock"></i>
                    <?php
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date_now = date('Y-m-d H:i:s');
                    $date_post = $top1_bai_viet_km['ngay_post'];
                    $diff = abs(strtotime($date_post) - strtotime($date_now));
                    $years = floor($diff / (365 * 60 * 60 * 24));
                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                    ?>
                    <?php
                    if ($days > 0) { ?>
                        <span class="mx-1"><?= $days ?></span>ngày trước<br>
                    <?php
                    } ?>
                </div>
            </a>
        </div>
        <div class="row">
            <?php
            $list_top_bai_viet_km = bai_viet_Query_Top3_Danh_Muc_KM();
            foreach ($list_top_bai_viet_km as $bai_viet) { ?>
                <div class="col-4">
                    <a href="bai-viet?id=<?=$bai_viet['id_bai_viet']?>&title=<?=$bai_viet['tieu_de_news']?>"" class="tin-khuyen-mai-items text-dark">
                        <div class="tin-khuyen-mai-items-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $bai_viet['img_news'] ?>')">
                        </div>
                        <div class="tin-khuyen-mai-items-title text-overflow  "><?= $bai_viet['tieu_de_news'] ?></div>
                        <div class="tin-khuyen-mai-items-date" style="font-style: italic">
                            <i class="far fa-clock"></i>
                            <span>
                                <?php
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $date_now = date('Y-m-d H:i:s');
                                $date_post = $bai_viet['ngay_post'];
                                $diff = abs(strtotime($date_post) - strtotime($date_now));
                                $years = floor($diff / (365 * 60 * 60 * 24));
                                $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                ?>
                                <?php
                                if ($days > 0) { ?>
                                    <span class="mx-1"><?= $days ?></span>ngày trước<br>
                                <?php
                                }
                                ?>
                            </span>
                        </div>
                    </a>
                </div>

            <?php
            }
            ?>

        </div>
    </div>
    <div class="col-4 my-5">

        <div class="list-tin-tuc-noi-bat">
            <div class="list-tin-tuc-noi-bat-title">Tin tức nổi bật</div>
            <?php
            $top6_bai_viet = bai_viet_Query_All_Top6_Noi_Bat();
            if (count($top6_bai_viet) > 0) {
                foreach ($top6_bai_viet as $bai_viet) { ?>
                    <a href="bai-viet?id=<?=$bai_viet['id_bai_viet']?>&title=<?=$bai_viet['tieu_de_news']?>" class="tin-tuc-noi-bat-items d-flex  align-item-center my-4">
                        <div class="list-tin-tuc-noi-bat-items-content">
                            <div class="list-tin-tuc-noi-bat-items-content-title" style="font-size:1.2rem;color:black;font-weight:500"><?= $bai_viet['tieu_de_news'] ?></div>
                            <div class="text-secondary " style="font-style:italic;font-size:1.2rem">
                                <i class="far fa-clock"></i>

                                <?php
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $date_now = date('Y-m-d H:i:s');
                                $date_post = $bai_viet['ngay_post'];
                                $diff = abs(strtotime($date_post) - strtotime($date_now));
                                $years = floor($diff / (365 * 60 * 60 * 24));
                                $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                ?>
                                <?php
                                if ($days > 0) { ?>
                                    <span class="mx-1"><?= $days ?></span>ngày trước<br>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="list-tin-tuc-noi-bat-items-img">
                            <img style="width:120px;height:70px" src="<?= $CONTENT_UPLOAD ?>/<?= $bai_viet['img_news'] ?>" alt="">
                        </div>
                    </a>
            <?php
                }
            }
            ?>
        </div>


    </div>
</div>
<div class="row">
    <div class="col-8">
        <?php
        $list_top10 = bai_viet_Query_All_Top10_New(); ?>
        <div class="list-tin-tuc-moi-nhat">
            <div class="list-tin-tuc-moi-nhat-title">
                Tin tức mới nhất
            </div>
            <?php
            if (count($list_top10) > 0) {
                foreach ($list_top10 as $bai_viet) { ?>
                    <a href="bai-viet?id=<?=$bai_viet['id_bai_viet']?>&title=<?=$bai_viet['tieu_de_news']?>" class="list-tin-tuc-moi-nhat-content text-dark d-flex my-2 py-4" style="border-bottom: 1px dotted #cacaca">
                        <div class="list-tin-tuc-moi-nhat-content-img">
                            <img style="width:240px;height:150px" src="<?= $CONTENT_UPLOAD ?>/<?= $bai_viet['img_news'] ?>" alt="">
                        </div>
                        <div class="list-tin-tuc-moi-nhat-content-text pl-5">
                            <div class="list-tin-tuc-moi-nhat-content-text-title " style="font-weight:500;"><?= $bai_viet['tieu_de_news'] ?></div>
                            <div class="list-tin-tuc-moi-nhat-content-text-date">
                                <div class="text-secondary " style="font-style:italic;font-size:1.2rem">
                                    <i class="far fa-clock"></i>

                                    <?php
                                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                                    $date_now = date('Y-m-d H:i:s');
                                    $date_post = $bai_viet['ngay_post'];
                                    $diff = abs(strtotime($date_post) - strtotime($date_now));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                    ?>
                                    <?php
                                    if ($days > 0) { ?>
                                        <span class="mx-1"><?= $days ?></span>ngày trước<br>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="list-tin-tuc-moi-nhat-content-text-noi-dung text-overflow " style="font-size:.1rem">
                            </div>
                            <div class="list-tin-tuc-moi-nhat-content-text-danh-muc text-danger "><?= $bai_viet['ten_dm_news'] ?></div>
                        </div>
                    </a>
            <?php
                }
            }

            ?>
        </div>
    </div>
    <div class="col-4">
        <div class="list-tin-tuc-noi-bat">
            <div class="list-tin-tuc-noi-bat-title">Tin tức nổi bật</div>
            <?php
            $top10_bai_viet_danh_gia = bai_viet_Query_All_Top10_Danh_Gia();
            if (count($top10_bai_viet_danh_gia) > 0) {
                foreach ($top10_bai_viet_danh_gia as $bai_viet) { ?>
                    <a href="bai-viet?id=<?=$bai_viet['id_bai_viet']?>&title=<?=$bai_viet['tieu_de_news']?>" class="tin-tuc-noi-bat-items d-flex  align-item-center my-4">
                        <div class="list-tin-tuc-noi-bat-items-content">
                            <div class="list-tin-tuc-noi-bat-items-content-title" style="font-size:1.2rem;color:black;font-weight:500"><?= $bai_viet['tieu_de_news'] ?></div>
                            <div class="text-secondary " style="font-style:italic;font-size:1.2rem">
                                <i class="far fa-clock"></i>

                                <?php
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $date_now = date('Y-m-d H:i:s');
                                $date_post = $bai_viet['ngay_post'];
                                $diff = abs(strtotime($date_post) - strtotime($date_now));
                                $years = floor($diff / (365 * 60 * 60 * 24));
                                $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                ?>
                                <?php
                                if ($days > 0) { ?>
                                    <span class="mx-1"><?= $days ?></span>ngày trước<br>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="list-tin-tuc-noi-bat-items-img">
                            <img style="width:120px;height:70px" src="<?= $CONTENT_UPLOAD ?>/<?= $bai_viet['img_news'] ?>" alt="">
                        </div>
                    </a>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>