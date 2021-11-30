<?php
session_start();
require_once '../../../global.php';
include '../../../model/rating.php';
include '../../../model/tai-khoan.php';
require_once '../../../model/binh-luan_pro.php';
// kiểm tra session khách hàng
if (sessionLogin_Isset()) {
    $id_kh_session = $_SESSION['login']['id_kh'];
}

// thêm rating mới
if (isset($_POST['noi_dung'])) {
    if (isset($_POST['rating-sao'])) {
        if (sessionLogin_Isset()) {
            $rating_sao = $_POST['rating-sao'];
            $noi_dung = $_POST['noi_dung'];
            $id_sp = $_POST['id_sp'];
            $date = Date("Y-m-d ");


            try {
                rating_Insert($id_sp, $id_kh_session, $rating_sao, $noi_dung, $date);
                echo 'thanhcong';
            } catch (Exception $e) {
                echo 'loi';
            }
        } else {
            // lưu url vào session chuyển đến trang login để header lại trang khi nảy
            $url_session = $_POST['url_session'];
            $_SESSION['url_session'] = $url_session;
            echo $url_session;
        }
    } else {
        echo 'saorong';
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
                    <div class="comment-render-label-admin" style="font-size:1.1rem">
                        <?php
                        if ($info_kh_db['vai_tro'] != 0) { ?>
                            Quản trị viên
                        <?php
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
                        // load proges rating
                        function load_proges_rating() {
                            var id_sp_proges_rating = $('[name*="id_sp"]').val();
                            $.ajax({
                                url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
                                type: "POST",
                                data: {
                                    id_proges_rating: id_sp_proges_rating
                                },
                                success: function(data) {
                                    $(".load_proges_rating").html(data);
                                },
                            });
                        }
                        load_proges_rating();
                        //load đánh giá trung binhf
                        function load_rating_AVG() {
                            var id_sp_rating_avg = $('[name*="id_sp"]').val();
                            $.ajax({
                                url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
                                type: "POST",
                                data: {
                                    id_rating_avg: id_sp_rating_avg
                                },
                                success: function(data) {
                                    $(".load_avg-rating").text(data);
                                },
                            });
                        }
                        load_rating_AVG();

                        // load số sao đánh giá avg
                        function load_star_rating_AVG() {
                            var id_sp_star_rating_avg = $('[name*="id_sp"]').val();
                            $.ajax({
                                url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
                                type: "POST",
                                data: {
                                    id_star_rating_avg: id_sp_star_rating_avg
                                },
                                success: function(data) {
                                    $(".product-detail-rating-avg-star").html(data);
                                },
                            });
                        }
                        load_star_rating_AVG();


                        // load tổng số đánh giá sp
                        function load_so_rating() {
                            var id_sp_so_rating = $('[name*="id_sp"]').val();
                            $.ajax({
                                url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
                                type: "POST",
                                data: {
                                    id_so_rating: id_sp_so_rating
                                },
                                success: function(data) {
                                    $(".count_rating").text(data);
                                },
                            });
                        }
                        load_so_rating();

                        // Load rating avg tiêu đề sản phẩm
                        function load_rating_avg_title() {
                            var id_sp_rating_avg_title = $('[name*="id_sp"]').val();
                            $.ajax({
                                url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
                                type: "POST",
                                data: {
                                    id_rating_avg_title: id_sp_rating_avg_title
                                },
                                success: function(data) {
                                    $(".load_rating_avg_title").html(data);
                                },
                            });
                        }
                        load_rating_avg_title();

                        // Load số rating tiêu đề sản phẩm
                        function load_rating_title() {
                            var id_sp_rating_title = $('[name*="id_sp"]').val();
                            $.ajax({
                                url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
                                type: "POST",
                                data: {
                                    id_rating_title: id_sp_rating_title
                                },
                                success: function(data) {
                                    $(".load_rating_cout_title").text(data);
                                },
                            });
                        }
                        load_rating_title();

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

// load số rating avg trug bình

if (isset($_POST['id_rating_avg'])) {
    $id_sp = $_POST['id_rating_avg'];
    echo rating_Avg($id_sp);
}
// load số sao trung bình
if (isset($_POST['id_star_rating_avg'])) {
    $id_sp = $_POST['id_star_rating_avg'];
    $rating = rating_Avg($id_sp);
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) { ?>
            <i class="fas fa-star icon-to"></i>
        <?php
        } else { ?>
            <i class="fas fa-star text-secondary"></i>

        <?php
        }
    }
}

//load tổng số rating 
if (isset($_POST['id_so_rating'])) {
    $id_sp = $_POST['id_so_rating'];
    echo rating_Count($id_sp);
}
// load rating avg tiêu đề sp
if (isset($_POST['id_rating_avg_title'])) {
    $id_sp = $_POST['id_rating_avg_title'];
    $rating = rating_Avg($id_sp);
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) { ?>
            <i class="icon-to fas fa-star"></i>
        <?php
        } else { ?>
            <i class="text-secondary fas fa-star"></i>
    <?php
        }
    }
}
// load rating tiêu đề sp
if (isset($_POST['id_rating_title'])) {
    $id_sp = $_POST['id_rating_title'];
    echo rating_Count($id_sp);
}

//load comment tiêu đề sp
if (isset($_POST['id_comment_title'])) {
    $id_sp = $_POST['id_comment_title'];
    echo binh_luan_pro_Count($id_sp);
}
//load progess rating
if (isset($_POST['id_proges_rating'])) {
    $id_sp = $_POST['id_proges_rating'];
    $sum_rating = rating_Phan_Tram($id_sp);
    ?>
    <div class="product-detail-rating-proges text-center">
        <?php
        $so_luot = (rating_Count_Luot($id_sp, 5)); //số lượng vote theo số sao
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
            $so_luot = (rating_Count_Luot($id_sp, 4)); //số lượng vote theo số sao
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
            $so_luot = (rating_Count_Luot($id_sp, 3)); //số lượng vote theo số sao
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
            $so_luot = (rating_Count_Luot($id_sp, 2)); //số lượng vote theo số sao
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
            $so_luot = (rating_Count_Luot($id_sp, 1)); //số lượng vote theo số sao
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
<?php
}
?>