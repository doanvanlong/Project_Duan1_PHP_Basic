<?php
session_start();
require_once '../../../global.php';
include '../../../model/rating.php';
include '../../../model/tai-khoan.php';
// kiểm tra session khách hàng
if (sessionLogin_Isset()) {
    $id_kh_session = $_SESSION['login']['id_kh'];
}

// thêm rating mới
if (isset($_POST['noi_dung'])) {
    if (isset($_POST['rating-sao'])) {
        $rating_sao = $_POST['rating-sao'];
        $noi_dung = $_POST['noi_dung'];
        $id_sp = $_POST['id_sp'];
        $date = Date('y-m-d');

        try {
            rating_Insert($id_sp, $id_kh_session, $rating_sao, $noi_dung, $date);
            echo 1;
        } catch (Exception $e) {
            echo 0;
        }
    } else {
        echo 2;
    }
}
//load dữ liệu đánh giá ra trang HTML

if (isset($_POST['id_sp_rating'])) {
    $id_sp = $_POST['id_sp_rating'];
    $list_rating = rating_Query_Top5_By_Id_Sp($id_sp);
    foreach ($list_rating as $rating) { ?>
        <div class="comment-render-box d-flex align-items-center my-4">
            <?php
            $id_kh_db = $rating['id_kh'];
            $info_kh_db = khach_hang_Query_One($id_kh_db);
            if ($info_kh_db['hinh_anh'] == "") { ?>
                <div class="comment-render-avatar mt-3" style="background-image:url('<?= $CONTENT_CLIENT_URL ?>/img/avatar.png')">
                </div>
            <?php
            } else { ?>
                <div class="comment-render-avatar mt-3" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $info_kh_db['hinh_anh'] ?>')">
                </div>
            <?php
            }
            ?>
            <div class="comment-render-content  pl-2">
                <div class="comment-render-name d-flex align-items-center">
                    <div class="comment-render-name-title"><?= $info_kh_db['ho_ten'] ?>
                        <?php
                        if (sessionLogin_Isset()) {
                            if ($info_kh_db['id_kh'] == $id_kh_session) { ?>
                                <span class="btn font-size click-xoa-rating text-primary" data-id_rating="<?= $rating['id_rating'] ?>">Xoá</span>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="line-height:1rem">
                    <div class="render-star">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $rating['rating']) { ?>
                                <i class="fas fa-star icon-min m-0"></i>
                            <?php
                            } else { ?>
                                <i class="fas fa-star icon-secondary m-0"></i>
                        <?php
                            }
                        }
                        ?>

                    </div>
                    <div class="comment-render-name-date pt-1 font-size-1-2"> <?= $rating['ngay_rating'] ?></div>

                </div>
                <div class="comment-render-content py-1"><?= $rating['noi_dung'] ?></div>


            </div>

        </div>

    <?php
    } ?>
    <!-- phân trang -->
    <div class="phan-trang-rating  d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span class="font-size" aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <script>
        $(document).ready(function() {
            $('.click-xoa-rating').click(function() {
                var id_del_rating = $(this).data('id_rating');
                $.post(
                    '../client/xu-ly/chi-tiet-san-pham/rating-sao.php', {
                        id_del_rating: id_del_rating
                    },
                    function(data) {
                        //  Load dữ liệu , load tất cả đánh giá
                        function load_danh_gia() {
                            var id_sp = $('[name*="id_sp"]').val();

                            $.ajax({
                                url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
                                data: {
                                    id_sp_rating: id_sp
                                },
                                type: "POST",
                                success: function(data) {
                                    $(".list-product-detail-rating").html(data);
                                },
                            });
                        }
                        setTimeout(function() {
                            load_danh_gia();
                        }, 400);
                    }
                )
            })
        })
    </script>

<?php
}
//xử lý xoá rating khi khách hàng là có session truy Cập
if (isset($_POST['id_del_rating'])) {
    $id_del_rating = $_POST['id_del_rating'];
    try {

        rating_Delete_By_Id($id_del_rating);
        echo 1;
    } catch (PDOException $e) {
        echo 0;
    }
}
?>