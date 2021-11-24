<?php
    if (isset($one_news_category)){
        extract($one_news_category);
    }
?>
<h3 class="alert bg-secondary text-light heading-cate">Cập Nhật Danh Mục Tin Tức</h3>
<form action="" id="update-news-category" method="POST">
    <div class="form-group">
        <label>Tên danh mục tin tức</label>
        <input type="hidden" name="id_news_category" value="<?=$id_dm_news?>">
        <input type="text" autocomplete="off" class="form-control"  value="<?=$ten_dm_news?>" name="update-news-category" placeholder="">
        <small id="error-news-category" class="form-text text-danger "></small>
    </div>
    <button type="submit" class="btn btn-success">Cập Nhật</button>
</form>