<h3 class="alert bg-secondary text-light heading-cate">Sửa danh mục </h3>
<form action="" id="update-danh-muc-chinh" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên danh mục</label>
        <input type="hidden" name="id_dm_chinh_update" value="<?= $info_dm_pro['id_dm_pro']; ?>">
        <input type="text" autocomplete="off" class="form-control"  value="<?=$info_dm_pro['ten_dm_pro'];?>" name="ten-danh-muc-chinh-update"  id="" data-id_dm_chinh_update="<?=$info_dm_pro['id_dm_pro'];?>" placeholder="">
        <small id="error-danh-muc-chinh-update" class="form-text text-danger "></small>
    </div>
    <button type="submit" name="submit-danh-muc-chinh" class="btn btn-primary">Cập nhật</button>
</form>