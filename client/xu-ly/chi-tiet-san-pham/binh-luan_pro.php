<?php
session_start();
require_once '../../../global.php';
require_once '../../../model/binh-luan_pro.php';
require_once '../../../model/tai-khoan.php';

//thêm comment
if (isset($_POST['noi_dung_comment'])) {
    if (!sessionLogin_Isset()) {
        // lưu url vào session chuyển đến trang login để header lại trang khi nảy
        $url_session = $_POST['url_session'];
        $_SESSION['url_session'] = $url_session;
        echo $url_session;
    } else {
        $noi_dung = $_POST['noi_dung_comment'];
        $id_sp = $_POST['id_sp'];
        $id_kh = $_POST['id_kh'];
        $ngay_bl = Date("Y-m-d");
        try {
            binh_luan_pro_Insert($id_kh, $id_sp, $noi_dung, $ngay_bl);
            echo 1;
        } catch (Exception $e) {
            echo 0;
        }
    }
}

// thêm comment reply
if (isset($_POST['id_sp_comment_reply'])) {
    if (!sessionLogin_Isset()) {
        // lưu url vào session chuyển đến trang login để header lại trang khi nảy
        $url_session = $_POST['url_session'];
        $_SESSION['url_session'] = $url_session;
        echo $url_session;
    } else {
        $id_sp = $_POST['id_sp_comment_reply'];
        $id_bl_pro = $_POST['id_bl_pro'];
        $id_kh = $_POST['id_kh'];
        $noi_dung = $_POST['noi_dung_comment_reply'];
        $date = Date("Y-m-d ");
        try {
            binh_luan_pro_Reply_Insert($id_bl_pro, $id_kh, $noi_dung, $date);
            echo 1;
        } catch (PDOException $e) {
            echo 0;
        }
    }
?>

    <?php
}
//load comment
if (isset($_POST['id_sp_comment'])) {
    $id_sp = $_POST['id_sp_comment'];
    $list_bl = binh_luan_pro_Query_Top5_By_Id($id_sp);
    foreach ($list_bl as $bl) { ?>
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
                    <div class="comment-render-avatar" style="background-image:url('<?= $AVTUSER_UPLOAD?>/<?= $info_kh_db['hinh_anh'] ?>')">
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
                        <span class="pr-2 reply-comment" data-id_comment="<?= $bl['id_bl_pro'] ?>">Trả lời</span>
                        <?php
                        // kiểm tra session khách hàng
                        if (sessionLogin_Isset()) {
                            $id_kh_session = $_SESSION['login']['id_kh'];
                            if ($id_kh_session == $bl['id_kh']) { ?>
                                <span data-id_comment_pro="<?= $bl['id_bl_pro'] ?>" class="click_xoa_comment">Xoá</span>
                        <?php
                            }
                        }

                        ?>
                    </div>

                </div>

            </div>
            <!-- comment  reply con -->
            <!-- render comment con -->
            <div class="comment-render-reply">
                <?php

                $list_bl_reply = binh_luan_pro_Reply_Query_Top5_By_Id_Blpro($bl['id_bl_pro']);
                foreach ($list_bl_reply as $bl_reply) {
                    if ($bl_reply['id_bl_pro'] == $bl['id_bl_pro']) {

                        $info_kh_db = khach_hang_Query_One($bl_reply['id_kh']) ?>
                        <div class="comment-render-content chia-nhanh-reply pl-2 col-11 my-3 d-flex">
                            <div>
                                <?php
                                $info_kh_db = khach_hang_Query_One($bl['id_kh']);
                                if ($info_kh_db['hinh_anh'] == "") { ?>
                                    <div class="comment-render-avatar" style="background-image:url('<?= $CONTENT_CLIENT_URL ?>/img/avatar.png')">
                                    </div>
                                <?php
                                } else { ?>
                                    <div class="comment-render-avatar" style="background-image:url('<?= $AVTUSER_UPLOAD?>/<?= $info_kh_db['hinh_anh'] ?>')">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div>
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
                                    <div class="comment-render-name-date"><?= $bl_reply['ngay_reply'] ?></div>
                                </div>

                                <div class="comment-render-content"><?= $bl_reply['noi_dung'] ?></div>
                                <div class="comment-render-action py-1 " style="font-size:1.3rem">
                                    <?php
                                    // kiểm tra session khách hàng
                                    if (sessionLogin_Isset()) {
                                        $id_kh_session = $_SESSION['login']['id_kh'];
                                        // nếu khách hàng đang truy cập có id = id trong bl reply thì xoá được bl
                                        if ($id_kh_session == $bl_reply['id_kh']) { ?>
                                            <span data-id_comment_reply="<?= $bl_reply['id_reply'] ?>" class="xoa_comment_reply">Xoá</span>
                                    <?php
                                        }
                                    }

                                    ?>
                                </div>

                            </div>

                        </div>

                <?php
                    }
                }
                ?>
            </div>

            <!-- gọi ajax -->
            <!-- input reply comment cha -->
            <form action="" id="" method="POST" class="comment-render-reply-write send_comment_reply" data-id_comment="<?= $bl['id_bl_pro'] ?>">
                <div class="form-group box-write-danh-gia pr-4 box-write-reply">
                    <input type="hidden" name="id_sp_comment_reply" value="<?= $id_sp ?>">
                    <input type="hidden" name="url_session" value="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">

                    <input type="hidden" name="id_kh" value="<?= $id_kh_session ?>">
                    <input type="hidden" name="id_bl_pro" value="<?= $bl['id_bl_pro'] ?>">
                    <textarea class="form-control text-area-send-rate" name="noi_dung_comment_reply" id="" style="resize:none;" placeholder="Viết đánh của bạn ..." rows="2">
                                </textarea>
                    <button type="submit" class="btn primary btn-send-comment-reply font-size text-light p-3">Gửi bình luận</button>
                </div>
            </form>
        </div>

    <?php
    } ?>
    <!-- phân trang -->
    <div class="phan-trang-comment mt-5 mb-2 d-flex justify-content-center">
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
            //xử lý reply comment
            //hiện thanh input khi muốn reply
            $(".comment-render-reply-write").hide();
            $(".reply-comment").click(function() {
                var element_click = $(this).data("id_comment");
                // ra node cha
                var box_comment = $(this).parent().parent().parent().parent();
                box_comment.children(".comment-render-reply-write").slideToggle("fast");
                //lấy được ô nhập ở hiện tại
            });



            //thêm bình luận reply
            $('.send_comment_reply').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: '../client/xu-ly/chi-tiet-san-pham/binh-luan_pro.php',
                    type: 'post',
                    data: $(this).serializeArray(),
                    success: function(data) {
                        if (data == 1) {
                            $('.comment-render-reply-write').hide();
                            $(".send_comment_reply")[0].reset();
                            // Bắt scroll ở vj trí hiện tại

                            location.reload();



                        } else if (data == 0) {

                        } else {
                            window.location.href = "./tai-khoan/login";
                        }
                    }
                })
            })
            //load comment
            function load_comment() {
                var id_sp = $('[name*="id_sp"]').val();
                $.ajax({
                    url: "../client/xu-ly/chi-tiet-san-pham/binh-luan_pro.php",
                    type: "POST",
                    data: {
                        id_sp_comment: id_sp
                    },
                    success: function(data) {
                        $(".list-comment-render").html(data);
                    },
                });
            }
            //xoá comment chính
            $('.click_xoa_comment').click(function() {
                var id_comment_pro = ($(this).data('id_comment_pro'));
                $.ajax({
                    url: '../client/xu-ly/chi-tiet-san-pham/binh-luan_pro.php',
                    type: 'post',
                    data: {
                        id_xoa_comment_pro: id_comment_pro
                    },
                    success: function(data) {
                        if (data == 1) {
                            setTimeout(function() {
                                load_comment();
                            }, 200);
                            // Load số comment tiêu đề sản phẩm
                            function load_comment_title() {
                                var id_sp_comment_title = $('[name*="id_sp"]').val();
                                $.ajax({
                                    url: "../client/xu-ly/chi-tiet-san-pham/rating-sao.php",
                                    type: "POST",
                                    data: {
                                        id_comment_title: id_sp_comment_title
                                    },
                                    success: function(data) {
                                        $(".load_comment_cout_title").text(data);
                                    },
                                });
                            }
                            load_comment_title();

                        }
                    }
                })
            })

            //xoá comment reply
            $('.xoa_comment_reply').click(function() {
                var id_comment_reply = ($(this).data('id_comment_reply'));
                $.ajax({
                    url: '../client/xu-ly/chi-tiet-san-pham/binh-luan_pro.php',
                    type: 'post',
                    data: {
                        id_xoa_comment_reply: id_comment_reply
                    },
                    success: function(data) {
                        if (data == 1) {
                            setTimeout(function() {
                                load_comment();
                            }, 200);
                        }
                    }
                })
            })
        })
    </script>
<?php
}

if (isset($_POST['id_xoa_comment_pro'])) {
    $id_bl_pro = $_POST['id_xoa_comment_pro'];
    try {
        binh_luan_pro_Delete($id_bl_pro);
        echo 1;
    } catch (PDOException $e) {
        echo 0;
    }
}
if (isset($_POST['id_xoa_comment_reply'])) {
    $id_comment_rep = $_POST['id_xoa_comment_reply'];
    try {
        binh_luan_pro_Reply_Delete($id_comment_rep);
        echo 1;
    } catch (PDOException $e) {
        echo 0;
    }
}
?>