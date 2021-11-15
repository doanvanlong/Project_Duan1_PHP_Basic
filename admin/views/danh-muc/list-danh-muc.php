<div>
  <h2 class="alert alert-info  heading-cate">Danh sách danh mục </h2>
  <form action="" method="POST" id="delete-danh-muc-chinh">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" style="width:3%"></th>
          <th scope="col">#</th>
          <th scope="col">ID danh mục</th>
          <th scope="col">Tên danh mục</th>
          <th scope="col">Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input class="check-dm-chinh" name="dm-chinh[]" value="1" type="checkbox"></td>
          <th scope="row">1</th>
          <td>1</td>
          <td>Điện thoại</td>
          <td><a href=""><i class="fas fa-edit mr-3"></i></a><span class="delete-dm-chinh" data-id_dm_chinh="1"><i class="fas fa-trash-alt"></i></span></td>
        </tr>
        <tr>
          <td><input class="check-dm-chinh" name="dm-chinh[]" value="2" type="checkbox"></td>
          <th scope="row">2</th>
          <td>2</td>
          <td>Phụ kiện</td>
          <td><a href=""><i class="fas fa-edit mr-3"></i></a><span class="delete-dm-chinh" data-id_dm_chinh="2"><i class="fas fa-trash-alt"></i></span></td>
        </tr>
      </tbody>
    </table>
    <div class="my-4">
      <div class="btn btn-primary" id="checkall-dm-chinh">Chọn tất cả</div>
      <div class="btn btn-primary" id="uncheck-dm-chinh">Bỏ chọn</div>
      <button type="submit" class="btn btn-primary">Xoá mục đã chọn</button>
    </div>
  </form>
</div>
<div class="my-4">
  <h2 class="alert alert-info  heading-cate">Danh sách danh mục chi tiết </h2>
  <form action="" id="delete-danh-muc-con" method="POST">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" style="width:3%"></th>
          <th scope="col">#</th>
          <th scope="col">ID danh mục chi tiết</th>
          <th scope="col">Tên danh mục</th>
          <th scope="col">Tên danh mục chi tiết</th>
          <th scope="col">Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" name="dm-con[]" value="1" class="check-dm-con"></td>
          <th scope="row">1</th>
          <td>1</td>
          <td>Điện thoại</td>
          <td>Oppo</td>
          <td><a href=""><i class="fas fa-edit mr-3"></i></a><span class="delete-dm-con" data-id_dm_con="1"><i class="fas fa-trash-alt"></i></span></td>
        </tr>
        <tr>
          <td><input type="checkbox" name="dm-con[]" value="2" class="check-dm-con"></td>
          <th scope="row">2</th>
          <td>2</td>
          <td>Phụ kiện</td>
          <td>Củ sạc</td>
          <td><a href=""><i class="fas fa-edit mr-3"></i></a><span class="delete-dm-con" data-id_dm_con="2"><i class="fas fa-trash-alt"></i></span></td>
        </tr>
      </tbody>
    </table>
    <div class="my-4">
      <div class="btn btn-primary" id="checkall-dm-con">Chọn tất cả</div>
      <div class="btn btn-primary" id="uncheck-dm-con">Bỏ chọn</div>
      <button type="submit" class="btn btn-primary">Xoá mục đã chọn</button>
    </div>
  </form>
</div>