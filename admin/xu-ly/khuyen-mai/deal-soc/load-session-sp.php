<?php session_start();
require_once '../../../../model/san-pham.php';
require_once '../../../../model/danh-muc.php';
require_once '../../../../global.php';
?>
<div class="row g-3 align-items-center box-form-giam-gia add-them-san-pham">
    <?php if (isset($_SESSION['add-sp-chinh'])) { ?>
        <div class="col-8">
            <label for="" class="col-form-label pr-4">Sản phẩm chính</label>
        </div>
        <div class="col-4 text-right">
            <div class="btn btn-outline-danger unremove-lai-modal " data-toggle="modal" data-target="#modal_add-sp-chinh"><i class="fas fa-plus"></i>Thay đổi</div>
        </div>
    <?php
    } else { ?>
        <div class="col-3">
            <label for="" class="col-form-label pr-4">Sản phẩm chính</label>
        </div>
        <div class="col-2 text-right">
            <div class="btn bgprimary textwhite" data-toggle="modal" data-target="#modal_add-sp-chinh"><i class="fas fa-plus"></i> Thêm sản phẩm chính</div>
        </div>
    <?php
    }
    ?>
</div>

<!-- chưa có sản phẩm -->
<!-- NẾU mà chưa có session add giảm giá thì thông báo chưa có sp -->

<!-- Khi thêm vào DB xong thì xoá session add giảm giá  -->

<?php
if (isset($_SESSION['add-sp-chinh'])) {

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

                    </tr>
                </thead>
                <tbody class="load_list_sp_session">

                    <?php
                    $i = 0;
                    $info_sp = san_pham_Query_One($_SESSION['add-sp-chinh']);
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

                    </tr>

                <?php
            } ?>
                </tbody>

            </table>
        </div>
    </div>
    <div class="row g-3 align-items-center box-form-giam-gia add-them-san-pham">
        <?php if (isset($_SESSION['add-sp-mua-kem']) && count($_SESSION['add-sp-mua-kem']) > 0) { ?>
            <div class="col-8">
                <label for="" class="col-form-label pr-4">Sản phẩm mua kèm</label>
            </div>
            <div class="col-4 text-right">
                <div class="btn btn-outline-danger unremove-lai-modal " data-toggle="modal" data-target="#modal_add-sp-mua-kem"><i class="fas fa-plus"></i>Thêm sản phẩm mua kèm</div>
            </div>
        <?php
        } else { ?>
            <div class="col-3">
                <label for="" class="col-form-label pr-4">Sản phẩm mua kèm</label>
            </div>
            <div class="col-2 text-right">
                <div class="btn bgprimary textwhite" data-toggle="modal" data-target="#modal_add-sp-mua-kem"><i class="fas fa-plus"></i> Thêm sản phẩm mua kèm</div>
            </div>
        <?php
        }
        ?>
    </div>
    <?php if (isset($_SESSION['add-sp-mua-kem']) && count($_SESSION['add-sp-mua-kem']) > 0) {

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
                            <th>Mức giảm</th>
                            <th>Giá sau giảm</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="load_list_sp_session">

                        <?php
                        $i = 0;
                        foreach ($_SESSION['add-sp-mua-kem'] as $giam_gia) {
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
                                <td class="gia_tien">
                                    <input type="number" hidden value="<?= $info_sp['don_gia'] ?>" name="gia_tien">
                                    <?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?>
                                </td>
                                <td><input type="number" class="form-control" style="height:30px" name="muc_giam_mua_kem[]">
                                    <small class="error-muc_giam_mua_kem text-danger"></small>
                                </td>
                                <td>
                                    <p class="gia_sau_giam" data-id="<?= $info_sp['id_sp'] ?>"></p>
                                </td>
                                <td class="delete_sp_mua_kem cursor-pointer" data-id_sp="<?= $info_sp['id_sp'] ?>"><i class="fas fa-trash-alt"></i></td>
                            </tr>

                        <?php
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    <?php } ?>
    <?php
    if (isset($_SESSION['add-sp-chinh']) || isset($_SESSION['add-sp-mua-kem'])) {
    ?>
        <div class="row g-3 align-items-center box-form-giam-gia  ">
            <div class="col-12">
                <button class="btn btn-success submit_deal_soc">Hoàn tất</button>
            </div>
        </div>
    <?php
    }
    ?>
    </form>
    <script>
        $(document).ready(function() {
            //hàm load table list sp session
            function load_list_add_sp_chinh() {
                $.post(
                    "../admin/xu-ly/khuyen-mai/deal-soc/load-session-sp.php",
                    function(data) {
                        $(".add-sp-deal-soc").html(data);
                    }
                );
            }
            //xoá session sản phẩm theo id data
            $(".delete_sp_mua_kem").click(function() {
                var id_sp_xoa_session = $(this).data("id_sp");
                $.post(
                    "../admin/xu-ly/khuyen-mai/deal-soc/add-sp-mua-kem.php", {
                        id_delete_sp: id_sp_xoa_session
                    },
                    function(data) {
                        if (data == 1) {
                            // thành công
                            // location.reload();
                            load_list_add_sp_chinh();
                        }
                    }
                );
            });

            //keyup mức giảm giá
            $('[name*="muc_giam_mua_kem"]').keyup(function() {
                $('.error-muc_giam_mua_kem').text('');
                var loai_giam_gia = $('[name*="loai_giam_gia_tien"]').val();
                var muc_giam = $(this).val();
                var element_gia_sau_giam = $(this).parent().next().children('.gia_sau_giam');
                var gia_tien = $(this).parent().parent().children('.gia_tien').children('input[name*="gia_tien"]').val();
                if (muc_giam > 0) {
                    if (loai_giam_gia == 1) {
                        //%
                        var gia_tien = ((100 - muc_giam) / 100) * gia_tien;
                        gia_tien = gia_tien.toLocaleString('vi', {
                            style: 'currency',
                            currency: 'VND'
                        });
                        element_gia_sau_giam.text(gia_tien);
                    } else {
                        // số tiền
                        var gia_tien = gia_tien - muc_giam;
                        gia_tien = gia_tien.toLocaleString('vi', {
                            style: 'currency',
                            currency: 'VND'
                        });
                        element_gia_sau_giam.text(gia_tien);
                    }
                } else {
                    element_gia_sau_giam.text('');

                }
            })

            $('.submit_deal_soc').click(function() {
                if ($('[name*="muc_giam_mua_kem"]').val() == '') {}
            })

        })
    </script>