<div>
  <h3 class="alert bg-secondary text-light  heading-cate">Danh sách sản phẩm </h3>
  <?php
  if (count($list_san_pham) == 0) {
  ?>
    <h5 class="alert alert-light">Chưa có sản phẩm</h5>
  <?php
  } else {

  ?>
    <form action="" method="POST" id="delete-san-pham">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" style="width:3%"></th>
            <th  style="width:5%" scope="col">#</th>
            <th style="width:5%" scope="col">ID </th>
            <th style="width:10%" scope="col">Hình ảnh</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Tồn kho</th>
            <th scope="col">Khuyến mãi</th>
            <th scope="col">Lượt xem</th>
            <th scope="col">Ngày nhập</th>
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;
          foreach ($list_san_pham as $san_pham) {
            $i++; ?>
            <tr>
              <td><input class="check-san-pham" name="san-pham[]" value="<?= $san_pham['id_sp']; ?>" type="checkbox"></td>
              <th scope="row"><?= $i; ?></th>
              <td><?= $san_pham['id_sp']; ?></td>
              <td><img style="width:60%" src="<?=$CONTENT_UPLOAD?>/<?= $san_pham['hinh_anh']; ?>" alt=""></td>
              <td class="text-overflow"><?= $san_pham['ten_sp']; ?></td>
              <td><?= $san_pham['so_luong']; ?></td>
              <td><?= $san_pham['don_gia']; ?></td>
              <td></td>
              <td></td>
              <td><?= $san_pham['so_luot_xem']; ?></td>
              <td><?= $san_pham['ngay_nhap']; ?></td>
              <td><a href="edit-san-pham&id=<?= $san_pham['id_sp']; ?>"><i class="fas fa-edit mr-3"></i></a><span class="delete-san-pham cursor-pointer" data-ten_san-pham="<?= $san_pham['ten_sp']; ?>" data-delete_id_sp="<?= $san_pham['id_sp']; ?>"><i class="fas fa-trash-alt"></i></span></td>
            </tr>
          <?php
          }
          ?>


        </tbody>
      </table>
      <div class="my-4">
        <div class="btn btn-success" id="checkall-san-pham">Chọn tất cả</div>
        <div class="btn btn-success" id="uncheck-san-pham">Bỏ chọn</div>
        <button type="submit" onclick="return confirm('Bạn có muốn xoá sản phẩm  này không?')" class="btn btn-success">Xoá mục đã chọn</button>
      </div>
    </form>
  <?php
  }
  ?>
</div>