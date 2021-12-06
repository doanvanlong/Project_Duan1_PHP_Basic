<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=215145093675199&autoLogAppEvents=1" nonce="QYuqm8ej"></script>
<div class="chi-tiet-bai-viet  bg-white">
    <div class="chi-tiet-bai-viet-content p-5" style="border-bottom :1px solid #eaeaea;">
        <?= $info_bai_viet['noi_dung'] ?>
        <div class="fb-like" data-href="http://ltsmart.ga/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
    </div>
    <div class="chi-tiet-bai-viet-content-cung-danh-muc p-5">
        <?php
        $list_bai_viet = bai_viet_Query_Cung_Danh_Muc($info_bai_viet['id_dm_news']); ?>
        <h2 class="chi-tiet-bai-viet-content-cung-danh-muc-title text-uppercase pb-4">Bài viết cùng chuyên mục</h2>
        <div class="row">
            <?php
            if (count($list_bai_viet) > 0) {
                foreach ($list_bai_viet as $bai_viet) { ?>
                    <div class="col-4">
                        <a href="bai-viet?id=<?= $bai_viet['id_bai_viet'] ?>&title=<?= $bai_viet['tieu_de_news'] ?>" class="text-dark chi-tiet-bai-viet-content-cung-danh-muc-content">
                            <img style="width:100%;height:150px" src="<?= $CONTENT_UPLOAD ?>/<?= $bai_viet['img_news'] ?>" alt="">
                            <div class="chi-tiet-bai-viet-content-cung-danh-muc-content-title py-2 text-overflow" style="font-size:1.3rem;font-weight:500">
                                <?= $bai_viet['tieu_de_news'] ?>
                            </div>
                            <div class="chi-tiet-bai-viet-content-cung-danh-muc-content-date text-secondary pt-3">
                                <i class="far fa-clock"></i> <?= $bai_viet['ngay_post'] ?>
                            </div>
                        </a>
                    </div>

            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="chi-tiet-bai-viet-content-binh-luan p-5">
        <form action="" id="form-binh_luan_news" type="post">
            <input type="hidden" name="id_bai_viet" value="<?= $info_bai_viet['id_bai_viet'] ?>">
            <input type="hidden" name="url_session" value="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Bình luận</label>
                <textarea class="form-control " style="font-size:1.4rem" placeholder="..." id="exampleFormControlTextarea1" name="binh_luan_news" rows="3"></textarea>
            </div>
            <div class="binh_luan_submit">
                <button class="btn primary text-white px-5 py-2" style="font-size:1.4rem" type="submit">Gửi</button>
            </div>
        </form>
    </div>
    <div class="chi-tiet-bai-viet-content-list-binh-luan p-5">

    </div>
</div>
<script>
    $(document).ready(function() {


        // load bình luận news
        function laod_binh_luan_news() {
            $.post(
                'xu-ly/tin-tuc/load-binh-luan-news.php',
                function(data) {
                    $('.chi-tiet-bai-viet-content-list-binh-luan').html(data);
                    $('.click_xoa_comment_news').click(function() {
                        var id_bl_news = ($(this).data('id_comment_news'));
                        $.post(
                            'xu-ly/tin-tuc/xoa-binh-luan-news.php', {
                                id_bl_news_xoa: id_bl_news
                            },
                            function(data) {
                                if (data == 1) {
                                    laod_binh_luan_news();

                                }
                            }
                        )
                    })
                }
            )
        }
        laod_binh_luan_news();


        $('#form-binh_luan_news').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'xu-ly/tin-tuc/chi-tiet-bai-viet.php',
                type: 'post',
                data: $(this).serializeArray(),
                success: function(data) {
                    if (data == 1) {
                        laod_binh_luan_news();
                    } else if (data == 0) {

                    } else {
                        location.href = "tai-khoan/login";
                    }
                }
            })
        })
    })
</script>