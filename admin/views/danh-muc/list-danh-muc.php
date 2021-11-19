<div>
  <h3 class="alert bg-secondary text-light  heading-cate">Danh sách danh mục </h3>
  <?php
  if (count($list_dm_pro) == 0) {
  ?>
    <h5 class="alert alert-light">Chưa có danh mục</h5>
  <?php
  } else {

  ?>
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
          <?php $i = 0;
          foreach ($list_dm_pro as $dm_pro) {
            $i++; ?>
            <tr>
              <td><input class="check-dm-chinh" name="dm-chinh[]" value="<?php echo $dm_pro['id_dm_pro']; ?>" type="checkbox"></td>
              <th scope="row"><?= $i; ?></th>
              <td><?= $dm_pro['id_dm_pro']; ?></td>
              <td><?= $dm_pro['ten_dm_pro']; ?></td>
              <td><a href="edit-danh-muc-chinh&id=<?= $dm_pro['id_dm_pro']; ?>"><i class="fas fa-edit mr-3"></i></a><span class="delete-dm-chinh cursor-pointer" data-ten_dm_chinh="<?= $dm_pro['ten_dm_pro']; ?>" data-delete_id_dm_chinh="<?= $dm_pro['id_dm_pro']; ?>"><i class="fas fa-trash-alt"></i></span></td>
            </tr>
          <?php
          }
          ?>


        </tbody>
      </table>
      <div class="my-4">
        <div class="btn btn-success" id="checkall-dm-chinh">Chọn tất cả</div>
        <div class="btn btn-success" id="uncheck-dm-chinh">Bỏ chọn</div>
        <button type="submit" onclick="return confirm('Bạn có muốn xoá này không?')" class="btn btn-success">Xoá mục đã chọn</button>
      </div>
    </form>
  <?php
  }
  ?>
</div>
<div class="my-4">
  <h3 class="alert bg-secondary text-light  heading-cate">Danh sách danh mục chi tiết </h3>
  <?php
  if (count($list_sub_dm_pro) == 0) { ?>
    <h5 class="alert alert-light">Chưa có danh mục</h5>
  <?php
  } else {
  ?>
    <form action="" id="delete-danh-muc-con" method="POST">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" style="width:3%"></th>
            <th scope="col">#</th>
            <th scope="col">ID danh mục chi tiết</th>
            <th scope="col">Tên danh mục chi tiết</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;
          foreach ($list_sub_dm_pro as $sub_dm_pro) {
            $i++; ?>
            <tr>
              <td><input type="checkbox" name="dm-con[]" value="<?= $sub_dm_pro['id_sub_dm_pro']; ?>" class="check-dm-con"></td>
              <th scope="row"><?= $i; ?></th>
              <td><?= $sub_dm_pro['id_sub_dm_pro']; ?></td>
              <td><?= $sub_dm_pro['ten_sub_dm_pro']; ?></td>
              <?php
              $Select_one_dm_pro= danh_muc_pro_Select_by_id_dm_pro($sub_dm_pro['id_dm_pro']);
              ?>
              <td><?= $Select_one_dm_pro['ten_dm_pro'] ?></td>
              <td><a href="edit-danh-muc-con&id=<?= $sub_dm_pro['id_sub_dm_pro']; ?>"><i class="fas fa-edit mr-3"></i></a><span class="delete-dm-con cursor-pointer" data-delete_id_dm_con="<?= $sub_dm_pro['id_sub_dm_pro']; ?>"><i class="fas fa-trash-alt"></i></span></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <div class="my-4">
        <div class="btn btn-success" id="checkall-dm-con">Chọn tất cả</div>
        <div class="btn btn-success" id="uncheck-dm-con">Bỏ chọn</div>
        <button type="submit" onclick="return confirm('Bạn có muốn xoá tất cả mục này không?')" class="btn btn-success">Xoá mục đã chọn</button>
      </div>
    </form>
  <?php
  }
  ?>
</div>