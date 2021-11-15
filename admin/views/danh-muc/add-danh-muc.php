<h3 class="alert bg-secondary text-light heading-cate">Thêm danh mục</h3>
<div class="row">
    <div class="danh-muc-chinh col-5">
        <h4 class="alert alert-light  heading-cate">Danh mục  </h4>
        <form action="" id="add-danh-muc-chinh" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" autocomplete="off" class="form-control" name="ten-danh-muc-chinh" id="" aria-describedby="" placeholder="Điện thoai,Phụ kiện...">
                <small id="error-danh-muc-chinh" class="form-text text-danger "></small>
            </div>
            <button type="submit" name="submit-danh-muc-chinh" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>

    <div class="danh-muc-con col-7">
        <h4 class="alert alert-light  heading-cate ">Danh mục chi tiết</h4>
        <form action="" id="add-danh-muc-con" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" autocomplete="off" class="form-control" name="ten-danh-muc-con" id="" aria-describedby="" placeholder="Oppo,Samsung,Tai nghe,Sạc...">
                <small id="error-danh-muc-con" class="form-text text-danger "></small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Danh mục chính</label>
                <select class="form-control" id="exampleFormControlSelect1" name="danh-muc-chinh">
                    <option>Điện thoại</option>
                    <option>Phụ kiện</option>
                </select>
            </div>
            <button type="submit" name="submit-danh-muc-con" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>

</div>