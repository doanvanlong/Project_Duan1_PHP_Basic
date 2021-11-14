<h3 class="alert alert-info  heading-cate">Thêm danh mục </h3>
<form action="add-danh-muc" id="add-danh-muc" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên danh mục</label>
        <input type="text" autocomplete="off" class="form-control" name="ten-danh-muc" id="" aria-describedby="" placeholder="...">
        <small id="error-danh-muc" class="form-text text-danger "></small>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Danh mục chính</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Điện thoại</option>
            <option>Phụ kiện</option>
        </select>
    </div>
    <button type="submit" name="" class="btn btn-primary">Thêm mới</button>
</form>
