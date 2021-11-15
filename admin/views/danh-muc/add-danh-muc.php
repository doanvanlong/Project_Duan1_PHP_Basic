<<<<<<< HEAD
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
        <option>Điện thoại</option>
        <option>Phụ kiện</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
  </form>
=======
<div >
    <div class="danh-muc-chinh ">
        <h2 class="alert alert-info  heading-cate">Thêm danh mục chính </h2>
        <form action="" id="add-danh-muc-chinh" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" autocomplete="off" class="form-control" name="ten-danh-muc-chinh" id="" aria-describedby="" placeholder="Điện thoai,Phụ kiện...">
                <small id="error-danh-muc-chinh" class="form-text text-danger "></small>
            </div>
            <button type="submit" name="submit-danh-muc-chinh" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>

    <div class="danh-muc-con my-4">
        <h2 class="alert alert-info  heading-cate ">Thêm danh mục con </h2>
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
>>>>>>> 2a3fed07c44f18b3941d93d506e74cf61195a472

</div>