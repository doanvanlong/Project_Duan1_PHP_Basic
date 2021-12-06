<?php
require_once '../../../global.php';
require_once '../../../model/binh_luan_news.php';
require_once '../../../model/tai-khoan.php';
session_start();
$list_bl_news = binh_luan_news_Query_Top3();
foreach ($list_bl_news as $bl) { ?>
    <div class="product-detail-comment-render">
        <!-- comment cha -->
        <div class="comment-render-box d-flex align-items-center">
            <?php

            $info_kh_db = khach_hang_Query_One($bl['id_kh']);
            if ($info_kh_db['hinh_anh'] == "") { ?>
                <div class="comment-render-avatar" style="background-image:url('<?= $CONTENT_CLIENT_URL ?>/img/avatar.png')">
                </div>
            <?php
            } else { ?>
                <div class="comment-render-avatar" style="background-image:url('<?= $AVTUSER_UPLOAD ?>/<?= $info_kh_db['hinh_anh'] ?>')">
                </div>
            <?php
            }
            ?>

            <div class="comment-render-content  pl-2">
                <div class="comment-render-name d-flex align-items-center">
                    <div class="comment-render-name-title"><?= $info_kh_db['ho_ten'] ?></div>
                    <div class="comment-render-label-admin" style="font-size:1.1rem">
                        <?php
                        if ($info_kh_db['vai_tro'] != 0) { ?>
                            Quản trị viên
                        <?php
                        }
                        ?>
                    </div>
                    <div class="comment-render-name-date"><?= $bl['ngay_bl'] ?></div>
                </div>
                <div class="comment-render-content"><?= $bl['noi_dung'] ?></div>
                <div class="comment-render-action py-1 " style="font-size:1.3rem">
                    <?php
                    // kiểm tra session khách hàng
                    if (sessionLogin_Isset()) {
                        $id_kh_session = $_SESSION['login']['id_kh'];
                        if ($id_kh_session == $bl['id_kh']) { ?>
                            <span data-id_comment_news="<?= $bl['id_bl_news'] ?>" class="click_xoa_comment_news">Xoá</span>
                    <?php
                        }
                    }

                    ?>
                </div>

            </div>

        </div>



    </div>

<?php
} ?>
