<h3 class="alert bg-secondary text-light heading-cate">Thêm Mới Khách Hàng</h3>
<div class="row">
    <div class="col-12">
        <form action="" method="post" id="add-user" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-6">
                    <label>Tên Đăng Nhập (Username):</label>
                    <input type="text" class="form-control" name="username">
                    <small id="error-username" class="form-text text-danger "></small>
                </div>
                <div class="form-group col-6" id="showPassword">
                    <label>Mật Khẩu:</label>
                    <input type="password" class="form-control" name="password" id="password">
                    <i class="fas fa-eye-slash" id="eye"></i>
                    <i class="fas fa-eye" id="eye2"></i>
                    <small id="error-password" class="form-text text-danger "></small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label>Họ và Tên:</label>
                    <input type="text" class="form-control" name="name">
                    <small id="error-name" class="form-text text-danger "></small>
                </div>
                <div class="form-group col-6">
                    <label>Số điện thoại:</label>
                    <input type="text" class="form-control" name="phone">
                    <small id="error-phone" class="form-text text-danger "></small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email">
                    <small id="error-email" class="form-text text-danger "></small>
                </div>
                <div class="form-group col-6">
                    <label>Địa Chỉ:</label>
                    <input type="text" class="form-control" name="address">
                    <small id="error-address" class="form-text text-danger "></small>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <label>Ảnh đại diện:</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="avt">
                        <label class="input-group-text" for="inputGroupFile02">Tải ảnh lên</label>
                    </div>
                    <small id="error-avt" class="form-text text-danger "></small>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Thêm Khách Hàng" class="btn btn-success" id="them-moi-khach-hang">
            </div>
        </form>
    </div>
</div>