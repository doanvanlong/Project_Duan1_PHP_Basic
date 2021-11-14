<div class="content">
<h3 class="alert alert-info  heading-cate">Thêm danh mục </h3>
<form action="index.php?act=insert-danh-muc" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên danh mục</label>
    <input type="text" class="form-control" name="ten-danh-muc" id="" aria-describedby="" placeholder="...">
    <small id="" class="form-text text-danger">Tên danh mục không để trống</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Danh mục chính</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option >Điện thoại</option>
      <option>Phụ kiện</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>

</div>