<?php
if (isset($one_news) && $one_news != "") {
    extract($one_news);
}

?>
<h3 class="alert bg-secondary text-light heading-cate">Cập Nhật Bài Viết</h3>
<form action="" id="update-news" method="POST">
    <div class="row">
        <div class="form-group col-6">
            <label>Danh Mục Bài Viết:</label>
            <br>
            <select name="update-news-category" class="form-select" style="padding: .7em .5em !important; width: 100%; border-radius: .2em .2em;">
                <?php
                if (isset($list_news_category) && $list_news_category != "") {
                    foreach ($list_news_category as $list) {
                        if ($list['id_dm_news'] == $id_dm_news) {
                            echo '<option selected value="'.$list['id_dm_news'].'">'.$list['ten_dm_news'].'</option>';
                        } else {
                            echo '<option value="'.$list['id_dm_news'].'">'.$list['ten_dm_news'].'</option>';
                        }
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group col-6">
            <label>Tên Bài Viết:</label>
            <input type="text" autocomplete="off" class="form-control" value="<?= $tieu_de_news ?>" name="update-name-news">
            <small id="error-update-name-news" class="form-text text-danger "></small>
        </div>

    </div>
    <div class="form-group">
        <label for="">Ảnh Đại Diện Bài Viết:</label>
        <input type="file" name="update-avt-news" class="form-control">
        <div><img src="<?= $CONTENT_UPLOAD . '/' . $img_news ?>"></div>
    </div>
    <div class="form-group">
        <label>Nội Dung:</label>
        <textarea name="editor1" id="editor1" rows="10" cols="80"><?= $noi_dung ?></textarea>
    </div>
    <input type="hidden" name="id_news" value="<?= $id_bai_viet ?>">
    <button type="submit" class="btn btn-success" class="up-news">Cập Nhật</button>
</form>
<script src="<?= $CONTENT_ADMIN_URL ?>/js/ckeditor-news.js"></script>