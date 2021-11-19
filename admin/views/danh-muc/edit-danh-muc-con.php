<h3 class="alert bg-secondary text-light heading-cate">Sửa danh mục chi tiết</h3>
<form action="" id="update-danh-muc-con" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên danh mục</label>
        <input type="hidden" name="id_dm_con_update" value="<?= $info_sub_dm_pro['id_sub_dm_pro']; ?>">
        <input type="text" autocomplete="off" class="form-control" name="ten-danh-muc-con-update" value="<?= $info_sub_dm_pro['ten_sub_dm_pro']; ?>" id="" aria-describedby="" placeholder="">
        <small id="error-danh-muc-con-update" class="form-text text-danger "></small>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Danh mục chính</label>
        <select class="form-control" id="exampleFormControlSelect1" name="danh-muc-con-update">
            <?php
            // lấy thông tin danh mục pro qua id : lấy id của danh mục con : dm đang đứng
            $info_dm_pro = danh_muc_pro_Select_by_id_dm_pro($info_sub_dm_pro['id_dm_pro']);
            // lặp tất cả trong DB ra
            foreach ($list_dm_pro as $dm_pro) {
                // nếu dm đang đứng = dm trong Db thì selected
                if ($info_dm_pro['id_dm_pro'] == $dm_pro['id_dm_pro']) { ?>
                    <option selected value="<?= $dm_pro['id_dm_pro']; ?>"><?= $dm_pro['ten_dm_pro'] ?></option>
                <?php
                } else { ?>
                    <option  value="<?= $dm_pro['id_dm_pro']; ?>"><?= $dm_pro['ten_dm_pro'] ?></option>
            <?php
                }
            }
            ?>
            <?php
            ?>
        </select>
    </div>
    <button type="submit" name="submit-danh-muc-con" class="btn btn-success">Cập nhật</button>
</form>