<h3 class="alert text-light bg-secondary  heading-cate mb-5">Thêm sản phẩm</h3>
<form action="" id="them-san-pham" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Danh mục: </label>
                <select class="form-select padding-select danh-muc-chinh-san-pham" style="border: 1px solid #ced4da;outline:none;" name="danh-muc-chinh-san-pham">
                    <option value="0">---Chọn danh mục---</option>
                    <?php
                    if (isset($list_dm_pro)) {
                        foreach ($list_dm_pro as $dm_pro) { ?>
                            <option value="<?= $dm_pro['id_dm_pro']; ?>"><?= $dm_pro['ten_dm_pro']; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <small id="error-danh-muc-chinh-san-pham" class="form-text text-danger  "></small>

            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label class="form-label">Danh mục chi tiết: </label>
                <select class="form-select padding-select" name="danh-muc-chi-tiet-san-pham">
                    <option selected value="0">---Chọn danh mục chi tiết---</option>

                </select>
                <small id="error-danh-muc-chi-tiet-san-pham" class="form-text text-danger  "></small>
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
            <input type="number" class="form-control" name="gia-san-pham" placeholder="VND">
            <small id="error-gia-san-pham" class="form-text text-danger "></small>
        </div>
        <!-- Nếu là điện thoại mới có màu sắc -->
        <div class="col-md-3 hide-mau-sac">
            <label>Màu sắc:</label>
            <input type="text" class="form-control" name="mau-sac">
            <small id="error-mau-sac" class="form-text text-danger "></small>
        </div>
        <div class="col-md-3">
            <label>Số lượng:</label>
            <input type="number" class="form-control" name="so-luong-san-pham">
            <small id="error-so-luong-san-pham" class="form-text text-danger "></small>
        </div>

        <!-- NẾu là điện thoại mới có dung lượng -->
        <div class="col-md-6 hide-dung-luong">
            <label>Dung lượng:</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" checked type="radio" name="dung-luong" id="inlineRadio1" value="16 GB">
                <label class="form-check-label" for="inlineRadio1">16 GB</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dung-luong" id="inlineRadio2" value="32 GB">
                <label class="form-check-label" for="inlineRadio2">32 GB</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dung-luong" id="inlineRadio3" value="64 GB">
                <label class="form-check-label" for="inlineRadio3">64 GB</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dung-luong" id="inlineRadio4" value="128 GB">
                <label class="form-check-label" for="inlineRadio4">128 GB</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dung-luong" id="inlineRadio5" value="256 GB">
                <label class="form-check-label" for="inlineRadio5">256 GB</label>
            </div>
            <small id="error-dung-luong" class="form-text text-danger "></small>
            <p id="msg-dung-luong"></p>
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
                    <input class="form-control" type="file" id="formFile" name="anh-dai-dien">
                    <small id="error-anh-dai-dien" class="form-text text-danger "></small>
                </div>
           
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label class="form-label">Ảnh chi tiết:</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple name="anh-chi-tiet">
                <small><i>Có thể tải lên nhiều ảnh</i></small>
                <small id="error-anh-chi-tiet" class="form-text text-danger "></small>
            </div>
        </div>
    </div>
    <!-- Nếu là điện thoại thì mới có thêm màu sắc, dung lượng -->
    <div class="row hide-them-mau-sac-dung-luong">
        <div class="col-6">
            <div class="btn btn-info click-mau-sac-more">Thêm màu sắc</div>
            <div class="mau-sac-more  px-2 py-2 my-4 " style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                <div class="btn btn-info click-nhap-them-mau-sac">Nhập thêm</div>
                <div class="row ">
                    <div class="col-5">
                        <div class="mau-sac-more-add">
                            <div class="mb-3">
                                <label class="my-3">Màu sắc:</label>
                                <input type="text" class="form-control" name="mau-sac-more-add[]" placeholder="Xanh ,Đỏ...">
                                <small id="error-mau-sac-more-add" class="form-text text-danger "></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="hinh-anh-more-add">
                            <div class="mb-3">
                                <label class="form-label my-3">Ảnh màu sắc:</label>
                                <input class="form-control" type="file" id="" name="anh-mau-sac-more-add[]">
                                <small id="error-anh-mau-sac-more-add" class="form-text text-danger "></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="btn btn-info click-dung-luong-more">Thêm dung lượng</div>
            <div class="dung-luong-more  px-2 py-2 my-4 " style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                <div class="btn btn-info click-nhap-them-dung-luong">Nhập thêm</div>
                <div class="row ">
                    <div class="col-6 ">
                        <div class="dung-luong-more-add">
                            <label class="my-3">Dung lượng:</label>
                            <input type="number" class="form-control" name="dung-luong-more-add[]" placeholder="64,128... ">
                            <small id="error-dung-luong-more-add" class="form-text text-danger "></small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="don-gia-more-add">
                            <label class="my-3">Đơn giá:</label>
                            <input type="number" class="form-control" name="gia-san-pham-more-add[]" placeholder="VND">
                            <small id="error-gia-san-pham" class="form-text text-danger "></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Nếu là điên thoại mới có cấu hình -->
    <div class="row hide-cau-hinh">
        <div class="col">
            <div class="btn btn-info mt-5 click-add-cau-hinh">Nhập cấu hình</div>
            <div>
                <!-- <small class="text-danger pl-2"><i>Bắt buộc nhập</i></small> -->
            </div>
            <div class="add-cau-hinh  px-2 py-2 my-4" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                <div class="row">
                    <div class="col-3">
                        <label class="">Màn hình:</label>
                        <textarea class="form-control" name="man-hinh" style="resize:none" id="exampleFormControlTextarea1" rows="1"></textarea>
                        <small id="error-man-hinh" class="form-text text-danger "></small>
                    </div>
                    <div class="col-3">
                        <label class="">Camera sau:</label>
                        <input type="text" class="form-control" name="camera-sau" placeholder="">
                        <small id="error-camera-sau" class="form-text text-danger "></small>
                    </div>
                    <div class="col-3">
                        <label class="">Camera trước:</label>
                        <input type="text" class="form-control" name="camera-truoc" placeholder="">
                        <small id="error-camera-truoc" class="form-text text-danger "></small>
                    </div>
                    <div class="col-3">
                        <label class="">RAM:</label>
                        <input type="number" class="form-control" name="ram" placeholder="">
                        <small id="error-ram" class="form-text text-danger "></small>
                    </div>
                    <div class="col-3">
                        <label class="">ROM:</label>
                        <input type="number" class="form-control" name="rom" placeholder="">
                        <small id="error-rom" class="form-text text-danger "></small>
                    </div>
                    <div class="col-3">
                        <label class="">CPU:</label>
                        <input type="text" class="form-control" name="cpu" placeholder="">
                        <small id="error-cpu" class="form-text text-danger "></small>
                    </div>
                    <div class="col-3">
                        <label class="">Dung lượng pin:</label>
                        <input type="number" class="form-control" name="dung-luong-pin" placeholder="">
                        <small id="error-dung-luong-pin" class="form-text text-danger "></small>
                    </div>
                    <div class="col-3">
                        <label class="">Thẻ sim:</label>
                        <input type="text" class="form-control" name="the-sim" placeholder="">
                        <small id="error-the-sim" class="form-text text-danger "></small>
                    </div>
                    <div class="col-3">
                        <label class="">Hệ điều hành:</label>
                        <input type="text" class="form-control" name="he-dieu-hanh" placeholder="">
                        <small id="error-he-dieu-hanh" class="form-text text-danger "></small>
                    </div>
                    <div class="col-3">
                        <label class="">Xuất xứ:</label>
                        <input type="text" class="form-control" name="xuat-xu" placeholder="">
                        <small id="error-xuat-xu" class="form-text text-danger "></small>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col">
            <div class="form-floating">
                <label class="form-label">Mô tả sản phẩm</label>
                <div class="panel-body">
                    <textarea name="content" id="content" class="form-control ckeditor"></textarea>
                </div>
                <small id="error-mo-ta" class="form-text text-danger "></small>
            </div>
        </div>
    </div>


    <div class="form-group" style="margin-top: 1em;">
        <input type="submit" value="Thêm sản phẩm" class="btn btn-success">
    </div>
</form>