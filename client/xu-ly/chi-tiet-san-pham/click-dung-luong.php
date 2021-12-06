<?php
require_once '../../../model/san-pham.php';
require_once '../../../model/khuyen-mai.php';
if (isset($_POST['id_dung_luong'])) {
    // Nếu có giảm giá thì xữ lý ở đây
    // lấy dc id dung lượng select vào bảng dung lượng lấy giá
    $dl = san_pham_Query_One_Id_Dung_Luong($_POST['id_dung_luong']);
    $list_giam_gia = giam_gia_Query_All_Sp();
    if (in_array($dl['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
        //có nằm
        if (count($list_giam_gia) > 0) {
            foreach ($list_giam_gia as $giam_gia) {
                if ($giam_gia['id_sp'] == $dl['id_sp']) {
                    if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                        // %
                        $gia_new = ((100 - $giam_gia['muc_giam']) / 100) * $dl['don_gia'];
                        $gia_old = $dl['don_gia'];
                        $add = ['gia_new' => $gia_new, 'gia_old' => $gia_old];
                        echo json_encode($add);
?>
                        <?php
                    } else {
                        //số tiền
                        $gia_new = ($dl['don_gia'] - $giam_gia['muc_giam']);
                        $gia_old = $dl['don_gia'];
                        $add = ['gia_new' => $gia_new, 'gia_old' => $gia_old];
                        echo json_encode($add);
                        ?>
                          
            <?php
                    }
                }
            }
        }
    } else {
        //ko nằm
        $add=['gia_new' => "",'gia_old'=>$dl['don_gia']];
        echo json_encode($add);
    }
}
            ?>