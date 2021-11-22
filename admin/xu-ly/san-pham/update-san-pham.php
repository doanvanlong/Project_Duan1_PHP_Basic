<?php
//gọi model xử lý data của sản phẩm
require_once '../../../model/san-pham.php';
require_once '../../../model/danh-muc.php';
// Gửi id danh mục chính đi để select và hiện ra danh mục con tương ứng
if (isset($_POST['id_dm_chinh_update'])) {
    $id_dm_pro = $_POST['id_dm_chinh_update'];
?>
    <!-- <option selected value="0">---Chọn danh mục chi tiết---</option> -->
    <?php
    $list_sub_dm_pro = danh_muc_con_Select_by_id_dm_chinh($id_dm_pro);
    foreach ($list_sub_dm_pro as $sub_dm_pro) {
        echo '<option value="' . $sub_dm_pro['id_sub_dm_pro'] . '">' . $sub_dm_pro['ten_sub_dm_pro'] . '</option>';
    }
    ?>

<?php
}
if (isset($_POST['danh-muc-chinh-san-pham-update'])) {
    $dm_chinh = $_POST['danh-muc-chinh-san-pham-update'];
    $dm_chi_tiet = $_POST['danh-muc-chi-tiet-update'];
    $ten_san_pham = $_POST['ten-san-pham'];
    $gia_san_pham = $_POST['gia-san-pham'];
    $so_luong_san_pham = $_POST['so-luong-san-pham'];
    $id_sp = $_POST['id_sp'];
    $mau_sac = $_POST['mau-sac']; //nếu là điện thoại
    $dung_luong_san_pham = $_POST['dung-luong'];
    //có nhu cầu nhập thêm ,khi chọn điện thoại
    $mau_sac_more_update = $_POST['mau-sac-more-update'];
    $dung_luong_more_update = $_POST['dung-luong-more-update'];
    $gia_san_pham_more_update = $_POST['gia-san-pham-more-update'];
    $man_hinh = $_POST['man-hinh'];
    $camera_sau = $_POST['camera-sau'];
    $camera_truoc = $_POST['camera-truoc'];
    $ram = $_POST['ram'];
    $rom = $_POST['rom'];
    $cpu = $_POST['cpu'];
    $dung_luong_pin = $_POST['dung-luong-pin'];
    $the_sim = $_POST['the-sim'];
    $he_dieu_hanh = $_POST['he-dieu-hanh'];
    $xuat_xu = $_POST['xuat-xu'];
    $mo_ta = $_POST['content'];
    //khi clcik Thêm mới màu sắc,ảnh,dung lượng,giá
    // $anh_mau_sac_more_add = $_FILES['anh-mau-sac-more-add']['name'];
    $id_ms_phones = $_POST['id_ms_phone'];
    $id_dl_phones = $_POST['id_dl_phone'];


    //Xữ lý Hình ảnh đại diện  Nếu ko click thay đổi
    try {
        if ($_FILES['anh-dai-dien']['name'] == '') {
            //là ko chọn ảnh,thì lấy ảnh DB đưa lại nó và ko MOVE_UPLOAD_FILE
            // GỌi hàm truy vấn 1sp để lấy thông tin ảnh trong DB
            $info_sp = san_pham_QueryOne($id_sp);
            $hinh_anh = $info_sp['hinh_anh'];

            //ảnh chi Tiết
            //   rỗng thì kệ nó ko làm gì
        } else {
            //khác rỗng ,tức là có chọn ảnh mới
            $extension = explode('.', $_FILES['anh-dai-dien']['name']); //cắt thành mảng cách nhau bởi dấu .
            $file_extension = end($extension); //lấy đuôi file
            $allowed_type = array('jpg', 'jpeg', 'png', 'gif'); //cho phép tải file ảnh
            if (in_array($file_extension, $allowed_type)) {
                // nếu đuôi file nằm trong mảng cho chép định dạng thì ok
                $hinh_anh = rand() . "." . $file_extension; //random số + với đuôi file 
                $path = "../../../content/uploads/" . $hinh_anh; //đường dẫn hình ảnh đưa vào
                if (move_uploaded_file($_FILES["anh-dai-dien"]['tmp_name'], $path)) {
                    //    upload hình từ đường dẫn tmp name vào đường dẫn đã khai báo path
                }
            }
        }

        // vì nó là mảng

        if ($_FILES['anh-chi-tiet']['name'][0] == "") {
            // echo "rỗng ảnh ct";
            // if DB chưa có thì chỉ insert
            // $images = san_pham_Query_Images_Pro($id_sp);
            // if (count($images) > 0) {
            //     // echo "ok";
            //     // // update lấy củ up lại
            //     foreach ($images as $image) {
            //         san_pham_Update_Images($id_sp, $image['id_images_pro'], $image['images']);
            //     }
            // } else {
            //     // echo "ko có";
            //     // vừa rỗng và rổng vừa Db ko có thì k làm gì
            // }
        } else {
            //    kiểm tra DB có ko 
            $images = san_pham_Query_Images_Pro($id_sp);
            // nếu có
            if (count($images) > 0) {
                $i = 0;
                san_pham_Delete_Images($id_sp);
                // xoá hết insert lại
                foreach ($_FILES['anh-chi-tiet']['name'] as $anh_chi_tiet) {
                    san_pham_Insert_Img_Detail($id_sp, $anh_chi_tiet);
                    $i++;
                }
                $j=0;
                $anhct_names=$_FILES['anh-chi-tiet']['name'];
                foreach ($_FILES['anh-chi-tiet']['tmp_name'] as $anh_chi_tiet_tmp) {
                    // move upload file
                    move_uploaded_file($anh_chi_tiet_tmp, '../../../content/uploads/' .$anhct_names[$j]);
                    $j++;
                }
            } else {
                // DB ko có thì INsert
                foreach ($_FILES['anh-chi-tiet']['name'] as $anh_chi_tiet) {
                    san_pham_Insert_Img_Detail($id_sp, $anh_chi_tiet);
                }
                $name_acts = $_FILES["anh-chi-tiet"]['name'];
                $i = 0;
                foreach ($_FILES['anh-chi-tiet']['tmp_name'] as $anh_chi_tiet_tmp) {
                    // move upload file
                    move_uploaded_file($anh_chi_tiet_tmp, '../../../content/uploads/' . $name_acts[$i]);
                    $i++;
                }
            }
        }

        //update sp
        $info_sp = san_pham_QueryOne($id_sp);

        san_pham_Update($id_sp, $dm_chinh, $dm_chi_tiet, $ten_san_pham, $hinh_anh, $gia_san_pham, $so_luong_san_pham, $mo_ta);
        // update màu sắc  đầu tiên limit 1 ,là chính của sp
        san_pham_Update_Color_First($info_sp['id_sp'], $mau_sac, $hinh_anh);
        // update dung lượng và đơn giá đầu tiên limit 1 ,là chính của sp
        san_pham_Update_Dung_Luong_First($info_sp['id_sp'], $dung_luong_san_pham, $gia_san_pham);
        //update cấu hình
        san_pham_Update_Cau_Hinh($info_sp['id_sp'], $man_hinh, $camera_sau, $camera_truoc, $ram, $rom, $cpu, $dung_luong_pin, $the_sim, $he_dieu_hanh, $xuat_xu);
        // Sửa màu sắc more update
        $mau_sac_more_updates = $_POST['mau-sac-more-update'];
        $i = 0;
        $anh_mau_sac_more_updates = $_FILES['anh-mau-sac-more-update']['name'];
        foreach ($anh_mau_sac_more_updates as $anh_mau_sac_more_update) {
            if ($anh_mau_sac_more_update == '') {
                //    rỗng thì kệ nó ko làm gì
                $colors = san_pham_Query_All_Color_Tru_First($info_sp['id_sp']);
                $hinh_anh_more = $colors[$i]['hinh_anh'];
                $id_more = $id_ms_phones[$i];
                $mau_sac_more = $mau_sac_more_updates[$i];
                san_pham_Update_Color_More_Update($info_sp['id_sp'], $id_more, $mau_sac_more, $hinh_anh_more);
                $i++;
            } else {
                // có thì update
                $colors = san_pham_Query_All_Color_Tru_First($info_sp['id_sp']);
                $hinh_anh_more = $anh_mau_sac_more_updates[$i];
                $id_more = $id_ms_phones[$i];
                $mau_sac_more = $mau_sac_more_updates[$i];
                san_pham_Update_Color_More_Update($info_sp['id_sp'], $id_more, $mau_sac_more, $hinh_anh_more);
                $i++;
            }
        }

        //sửa dung lượng more update
        $dung_luong_more_updates = $_POST['dung-luong-more-update'];
        $don_gia_more_updates = $_POST['gia-san-pham-more-update'];
        $i = 0;
        foreach ($dung_luong_more_updates as $dung_luong_more_update) {
            $id_sp;
            $id_dl_phones[$i];
            $dung_luong_more_update;
            $don_gia_more_updates[$i];
            san_pham_Update_Dung_Luong_More_Update($id_sp, $dung_luong_more_update, $don_gia_more_updates[$i], $id_dl_phones[$i]);
            $i++;
        }
        //more add ,muốn thêm tiếp dung lượng khi sửa

        // nếu có thêm màu sắc
        if (isset($_POST['mau-sac-more-add']) && $_POST['mau-sac-more-add'] != "") {
            //    hình ảnh more adđ là mảng
            // hình ảnh more add nên dùng mau-sac-more-add [i] thứ i
            if (isset($_FILES['anh-mau-sac-more-add'])) {
                $anh_names = $_FILES['anh-mau-sac-more-add']['name'];
                $i = 0;
                foreach ($anh_names as $anh_name) {
                    san_pham_Insert_Color_Img($id_sp, $_POST['mau-sac-more-add'][$i], $anh_name);
                    $i++;
                }
                $j = 0;
                foreach ($_FILES['anh-mau-sac-more-add']['name'] as $anh) {
                    move_uploaded_file($_FILES['anh-mau-sac-more-add']['tmp_name'][$j], '../../../content/uploads/' . $anh);
                    $j++;
                }
            }
        }
        // nếu có thêm dung lượng
        if (isset($_POST['dung-luong-more-add']) && $_POST['dung-luong-more-add'] != "") {
            $i = 0;
            foreach ($_POST['dung-luong-more-add'] as $dung_luong) {
                san_pham_Insert_Dung_luong($id_sp, $dung_luong, $_POST['gia-san-pham-more-add'][$i]);
                $i++;
            }
        }
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
}


?>