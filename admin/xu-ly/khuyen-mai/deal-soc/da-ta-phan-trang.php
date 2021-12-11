<?php
require_once '../../../../model/pdo.php';
require_once '../../../../model/san-pham.php';
require_once '../../../../global.php';
require_once '../../../../model/khuyen-mai.php';

// file này để ajax gọi tới lấy all sp , chỉ hiển thị 4 sp 1 trang

$so_sp_1_trang = 4;
$trang = $_GET["trang"];
settype($trang, "int"); //đề phòng số trang là string abc
$from = ($trang - 1) * $so_sp_1_trang;
$sql = "SELECT * FROM san_pham  where id_dm_pro=47  order by id_sp desc limit $from , $so_sp_1_trang";
$list_sp_1_trang = pdo_query($sql);
foreach ($list_sp_1_trang as $sp) {

    // sp chưa nằm trong khuyến mãi giảm giá
?>
    <tr>
        <th scope="row" class="align-middle"> <input type="checkbox" name="check_id_sp_chinh" id="<?= $sp['id_sp'] ?>" value="<?= $sp['id_sp'] ?>"></th>
        <td class="text-ellip d-flex">
            <img style="width:60px;height:60px" src="<?= $CONTENT_UPLOAD ?>/<?= $sp['hinh_anh'] ?>" alt="">
            <label for="<?= $sp['id_sp'] ?>" id="" class="cursor-pointer">
                <div class="content-ten-sp"><?= $sp['ten_sp'] ?></div>
                <div class="content-id_sp text-secondary">Mã: <?= $sp['id_sp'] ?></div>
            </label>
        </td>
        <td><?= san_pham_Count_Da_Ban($sp['id_sp']) ?></td>
        <td><?= number_format($sp['don_gia'], 0, ',', '.') . 'đ' ?></td>
        <td>
            <?= $sp['so_luong'] ?>
        </td>
    </tr>
<?php
}
?>
<script>
    // $(document).ready(function() {
    //     //    // xữ lý thêm sp giảm giá vào session
    //     $(".submit-add-giam-gia-session").click(function() {
    //         var check_id_sp = $('[name*="check_id_sp"]');
    //         var result = [];
    //         for (var i = 0; i < check_id_sp.length; i++) {
    //             if (check_id_sp[i].checked === true) {
    //                 result.push(check_id_sp[i].value);
    //             }
    //         }
    //         // gửi mảng id_sp vào session
    //         $.post(
    //             "../admin/xu-ly/khuyen-mai/giam-gia/add-giam-gia.php", {
    //                 mang_giam_gia_id_sp: result
    //             },
    //             function(data) {
    //                 if (data == 1) {
    //                     location.reload();
    //                 }
    //             }
    //         );
    //     });

    //     //khi click check all thì đồng thời tất cả sp sẻ checked
    //     $(".ap-dung-giam-gia-all").click(function() {
    //         var check_id_sp = $('[name*="check_id_sp"]');
    //         console.log(check_id_sp);
    //         for (var i = 0; i < check_id_sp.length; i++) {
    //             check_id_sp[i].setAttribute('checked', 'true');
    //         }
    //     })
    //     //xữ lý thêm tất cả sp  là giảm giá
    //     $(".ap-dung-giam-gia-all").click(function() {
    //         $(".submit-add-giam-gia-session").click(function() {

    //             $.post(
    //                 "add-giam-gia.php", {
    //                     chon_all_sp: "chon_all_sp"
    //                 },
    //                 function(data) {
    //                     if (data == 1) {
    //                         location.reload();
    //                     }
    //                 }
    //             );
    //         });
    //     });
    //     //xoá session sản phẩm theo id data
    //     $(".delete_sp_giam_gia").click(function() {
    //         var id_sp_xoa_session = $(this).data("id_sp");
    //         $.post(
    //             "add-giam-gia.php", {
    //                 id_delete_sp: id_sp_xoa_session
    //             },
    //             function(data) {
    //                 if (data == 1) {
    //                     // thành công
    //                     location.reload();
    //                 }
    //             }
    //         );
    //     });
    // })
</script>