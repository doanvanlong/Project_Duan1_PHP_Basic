<h3 class="alert bg-secondary text-light heading-cate">Thêm bài viết mới</h3>
<div class="row">
    <div class="col-12">
        <form action="" method="post" id="add-news">
            <div class="row">
                <div class="form-group col-6">
                    <label>Tiêu Đề</label>
                    <input type="text" name="content-news" id="" class="form-control" placeholder="VD: Tin tức mới">
                    <small id="error-content-news" class="form-text text-danger "></small>
                </div>
                <div class="form-group col-6">
                    <label for="">Danh Mục Tin Tức:</label>
                    <br>
                    <select name="news-category" class="form-select" style="padding: .7em .5em !important; width: 100%; border-radius: .2em .2em;">
                        <?php
                        if (isset($list_news_category) && $list_news_category != "") {
                            echo '<option value="">TẤT CẢ DANH MỤC</option>';
                            foreach ($list_news_category as $list) {
                                extract($list);
                               echo '<option value="'.$id_dm_news.'">'.$ten_dm_news.'</option>';
                            }
                        } else {
                            echo '<option value="0">Không có dữ liệu</option>';
                        }
                        ?>
                    </select>
                    <small id="error-news-category" class="form-text text-danger "></small>
                </div>
            </div>
            <div class="form-group">
                <label>Ảnh Đại Diện</label>
                <input type="file" name="avt-news" class="form-control">
                <small id="error-avt-news" class="form-text text-danger "></small>
            </div>
            <div class="form-group">
                <label>Nội Dung:</label>
                <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
                <small id="error-editor1" class="form-text text-danger "></small>
            </div>
            <div class="form-group">
            </div>
            <input type="submit" value="SEND" class="btn btn-primary" id="send">
        </form>

    </div>
</div>
<script src="<?= $CONTENT_ADMIN_URL ?>/js/ckeditor-news.js"></script>