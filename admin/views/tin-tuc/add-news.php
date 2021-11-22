<h3 class="alert bg-secondary text-light heading-cate">Thêm bài viết mới</h3>
<div class="row">
    <div class="col-12">
        <form action="" method="post" id="add-news">
            <div class="form-group">
                <label>Ảnh đại diện:</label>
                <input type="file" name="avt-news" class="form-control">
            </div>
            <div class="form-group">
                <label>Nội dung:</label>
                <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
            </div>
            <div class="form-group">
            </div>
            <input type="submit" value="SEND" class="btn btn-primary" id="send">
        </form>
        
    </div>
</div>
<h1>hello</h1>
<script src="<?= $CONTENT_ADMIN_URL ?>/js/ckeditor-news.js"></script>