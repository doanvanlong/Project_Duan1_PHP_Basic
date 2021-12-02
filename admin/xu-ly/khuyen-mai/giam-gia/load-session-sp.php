<?php session_start();
require_once '../../../../model/san-pham.php';
require_once '../../../../model/danh-muc.php';
require_once '../../../../global.php';
?>
<div class="row g-3 align-items-center box-form-giam-gia add-them-san-pham">
    <?php if (isset($_SESSION['add-giam-gia']) && count($_SESSION['add-giam-gia']) > 0) { ?>
        <div class="col-8">
            <label for="" class="col-form-label pr-4">Sản phẩm</label>
            <small class="text-secondary"><span class="text-danger"><?= count($_SESSION['add-giam-gia']) ?> </span>&nbsp;sản phẩm tham gia chương trình giảm giá này</small>
        </div>
        <div class="col-4 text-right">
            <div class="btn btn-outline-dark unremove-lai-modal " data-toggle="modal" data-target="#exampleModalLong"><i class="fas fa-plus"></i> Thêm sản phẩm</div>
            <button type="submit" class="btn btn-success cofirm-done-add-giam-gia"><i class="fas fa-check "></i> Hoàn tất</button>
        </div>
    <?php
    } else { ?>
        <div class="col-8">
            <label for="" class="col-form-label pr-4">Sản phẩm</label>
        </div>
        <div class="col-4 text-right">
        </div>
    <?php
    }
    ?>
</div>
</form>
<!-- chưa có sản phẩm -->
<!-- NẾU mà chưa có session add giảm giá thì thông báo chưa có sp -->

<!-- Khi thêm vào DB xong thì xoá session add giảm giá  -->

<?php
if (isset($_SESSION['add-giam-gia']) && count($_SESSION['add-giam-gia']) > 0) {

?>
    <div class="row g-3 align-items-center box-form-giam-gia  ">
        <!-- load ajjax -->
        <!-- khi click vào xoá ,hoặc thêm lần thứ 2 vào session  -->
        <div class="col-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Giá gốc</th>
                        <th>Giá sau giảm</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody class="load_list_sp_session">

                    <?php
                    $i = 0;
                    foreach ($_SESSION['add-giam-gia'] as $giam_gia) {
                        $info_sp = san_pham_Query_One($giam_gia);
                        $i++;
                        $danh_muc = danh_muc_chinh_QueryOne($info_sp['id_dm_pro']);
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td class="d-flex">
                                <img style="width:50px;" src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt="">
                                <div class="text-ellip pl-3">
                                    <?= $info_sp['ten_sp'] ?>
                                </div>
                            </td>
                            <td><?= $danh_muc['ten_dm_pro'] ?></td>
                            <td><?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></td>
                            <td><p class="gia_sau_giam" data-id="<?= $info_sp['id_sp'] ?>" ></p></td>
                            <td class="delete_sp_giam_gia cursor-pointer" data-id_sp="<?= $info_sp['id_sp'] ?>"><i class="fas fa-trash-alt"></i></td>
                        </tr>

                    <?php
                    } ?>
                </tbody>

            </table>
        </div>
    </div>
<?php
} else { ?>
    <div class="row g-3 align-items-center justify-content-center box-form-giam-gia remove-khi-co-sp">
        <div class="box-chua-co-san-pham ">
            <img src="<?= $CONTENT_ADMIN_URL ?>/img/nodata.png" alt="">
            <div class="text-center my-3">
                <div class="btn bgprimary textwhite" data-toggle="modal" data-target="#exampleModalLong"><i class="fas fa-plus"></i> Thêm sản phẩm</div>
            </div>
        </div>
    </div>
<?php } ?>

<script>
    $(document).ready(function() {
        //hàm load table list sp session
        function load_list_sp_add_giam_gia() {
            $.post(
                "../admin/xu-ly/khuyen-mai/giam-gia/load-session-sp.php",
                function(data) {
                    $('.hello').html(data);
                }
            );
        }
        //xoá session sản phẩm theo id data
        $(".delete_sp_giam_gia").click(function() {
            var id_sp_xoa_session = $(this).data("id_sp");
            $.post(
                "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php", {
                    id_delete_sp: id_sp_xoa_session
                },
                function(data) {
                    if (data == 1) {
                        // thành công
                        // location.reload();
                        load_list_sp_add_giam_gia();
                    }
                }
            );
        });
       

       
    })
</script>