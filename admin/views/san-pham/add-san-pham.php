<h3 class="alert alert-info  heading-cate">Thêm sản phẩm</h3>
<form action="" id="them-san-pham" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Danh mục: </label>
                <select class="form-select padding-select" name="danh-muc-chinh-san-pham">
                    <option selected>Vui lòng chọn danh mục</option>
                    <option value="">Điện thoại</option>
                    <option value="">Phụ kiện</option>
                    <option value="">Iphone</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label class="form-label">Danh mục chi tiết: </label>
                <select class="form-select padding-select" name="danh muc-chi-tiet-san-pham">
                    <option selected>Vui lòng chọn danh mục sản phẩm</option>
                    <option value="">One</option>
                    <option value="">Two</option>
                    <option value="">Three</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Tên sản phẩm:</label>
            <input type="text" class="form-control" name="ten-san-pham">
            <small id="error-ten-san-pham" class="form-text text-danger "></small>
        </div>
        <div class="col-md-6">
            <label>Đơn giá:</label>
            <input type="text" class="form-control" name="gia-san-pham">
            <small id="error-gia-san-pham" class="form-text text-danger "></small>
        </div>
        <div class="col-md-6">
            <label>Ngày nhập hàng:</label>
            <input type="date" class="form-control" name="ngay-nhap-hang">
            <small id="error-ngay-nhap-hang" class="form-text text-danger "></small>
        </div>
        <div class="col-md-6">
            <label>Màu sắc:</label>
            <input type="text" class="form-control" name="mau-sac">
            <small id="error-mau-sac" class="form-text text-danger "></small>
        </div>
        <div class="col-md-6">
            <label>Dung lượng:</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="16GB">
                <label class="form-check-label" for="inlineRadio1">16 GB</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="32GB">
                <label class="form-check-label" for="inlineRadio2">32 GB</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="64GB">
                <label class="form-check-label" for="inlineRadio3">64 GB</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="64GB">
                <label class="form-check-label" for="inlineRadio4">128 GB</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="64GB">
                <label class="form-check-label" for="inlineRadio5">256 GB</label>
            </div>
            <small id="error-dung-luong" class="form-text text-danger "></small>
        </div>
        <!-- <div class="col-md-6">
                <label for="">Dung lượng 2:</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                </div>
            </div> -->
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label class="form-label">Ảnh đại diện:</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label class="form-label">Ảnh chi tiết:</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
        </div>
    </div>
    <hr>
    <div class="form-floating">
        <label class="form-label">Mô tả sản phẩm</label>
        <div id="editor">
            <textarea class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group" style="margin-top: 1em;">
        <input type="submit" value="Thêm sản phẩm" class="btn btn-success">
    </div>
</form>