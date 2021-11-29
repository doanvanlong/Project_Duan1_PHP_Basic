<h3 class="alert bg-secondary text-light heading-cate">Cập Nhật Thông Tin Khách Hàng</h3>
<div class="row">
    <div class="col-12">
        <form action="" method="post" id="update-user">
            <div class="row">
                <div class="form-group col-6">
                    <label>Tên Đăng Nhập (Username):</label>
                    <input type="text" class="form-control" name="update-username" value="<?=$list_one_user['username']?>">
                    <small id="error-update-username" class="form-text text-danger "></small>
                </div>
                <div class="form-group col-6" id="showPassword">
                    <label>Mật Khẩu:</label>
                    <input type="password" class="form-control" name="update-password" id="password" value="<?=$list_one_user['mat_khau']?>">
                    <i class="fas fa-eye-slash" id="eye"></i>
                    <i class="fas fa-eye" id="eye2"></i>
                    <small id="error-update-password" class="form-text text-danger "></small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label>Họ và Tên:</label>
                    <input type="text" class="form-control" name="update-name" value="<?=$list_one_user['ho_ten']?>">
                    <small id="error-update-name" class="form-text text-danger "></small>
                </div>
                <div class="form-group col-6">
                    <label>Số điện thoại:</label>
                    <input type="text" class="form-control" name="update-phone" value="<?=$list_one_user['so_dien_thoai']?>">
                    <small id="error-update-phone" class="form-text text-danger "></small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="update-email" value="<?=$list_one_user['email']?>">
                    <small id="error-update-email" class="form-text text-danger "></small>
                </div>
                <div class="form-group col-6">
                    <label>Địa Chỉ:</label>
                    <input type="text" class="form-control" name="update-address" value="<?=$list_one_user['dia_chi']?>">
                    <small id="error-update-address" class="form-text text-danger "></small>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <label>Ảnh đại diện:</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="update-avt">
                        <label class="input-group-text" for="inputGroupFile02">Tải ảnh lên</label>
                    </div>
                    <div>
                        <?php
                        if (empty($list_one_user['hinh_anh'])) {
                            echo '<img src="'.$CONTENT_CLIENT_URL.'/img/avatar.png'.'" alt="Ảnh đại diện" style="width:10%; padding: 1em 0em;">';
                        } else {
                            echo '<img src="'.$AVTUSER_UPLOAD.'/'.$list_one_user['hinh_anh'].'" alt="Ảnh đại diện" style="width:10%; padding: 1em 0em;">';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id_user" id="" value="<?=$id_user?>">
            <div class="form-group">
                <input type="submit" value="Cập Nhật" class="btn btn-success" id="cap-nhat-khach-hang">
            </div>
        </form>
    </div>
</div>