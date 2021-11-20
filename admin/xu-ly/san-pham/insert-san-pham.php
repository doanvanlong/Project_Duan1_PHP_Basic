<?php
//gọi model xử lý data của sản phẩm
require_once '../../../model/san-pham.php';
require_once '../../../model/danh-muc.php';
require_once '../../../model/san-pham.php';
if (isset($_POST['keyup_ten_san_pham'])) {
    $keyup_ten_san_pham = $_POST['keyup_ten_san_pham'];
    echo (san_pham_Isset_DB($keyup_ten_san_pham));
    // echo 0 là ko trùng dữ liệu
    // echo số khác 0 là trùng dữ liệu
    // vì hàm trả về số record
}


if (isset($_POST['danh-muc-chinh-san-pham'])) {
    $dm_chinh = $_POST['danh-muc-chinh-san-pham'];
    $dm_chi_tiet = $_POST['danh-muc-chi-tiet-san-pham'];
    $ten_san_pham = $_POST['ten-san-pham'];
    $gia_san_pham = $_POST['gia-san-pham'];
    $so_luong_san_pham = $_POST['so-luong-san-pham'];

    $mau_sac = $_POST['mau-sac']; //nếu là điện thoại
    $dung_luong_san_pham = $_POST['dung-luong'];
    //có nhu cầu nhập thêm ,khi chọn điện thoại
    $mau_sac_more_add = $_POST['mau-sac-more-add'];
    // $anh_mau_sac_more_add = $_FILES['anh-mau-sac-more-add']['name'];
    $dung_luong_more_add = $_POST['dung-luong-more-add'];
    $gia_san_pham_more_add = $_POST['gia-san-pham-more-add'];
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




    // Nhận ckeditor
    // mô tả sản phẩm
    if (isset($_POST['content']) && $_POST['content'] != "") {
        // hình ảnh đại diện
        if (isset($_FILES['anh-dai-dien']['name'])) {
            $extension = explode('.', $_FILES['anh-dai-dien']['name']); //cắt thành mảng cách nhau bởi dấu .
            $file_extension = end($extension); //lấy đuôi file
            $allowed_type = array('jpg', 'jpeg', 'png', 'gif'); //cho phép tải file ảnh
            if (in_array($file_extension, $allowed_type)) {
                // nếu đuôi file nằm trong mảng cho chép định dạng thì ok
                $new_name = rand() . "." . $file_extension; //random số + với đuôi file 
                $path = "../../../content/uploads/" . $new_name; //đường dẫn hình ảnh đưa vào
                if (move_uploaded_file($_FILES["anh-dai-dien"]['tmp_name'], $path)) {
                    //    upload hình từ đường dẫn tmp name vào đường dẫn đã khai báo path
                }
            }
        }


        $mo_ta = $_POST['content'];
        $date = Date("y/m/d");
        // 'Điện thoại' DB id =47
        try {
            if ($_POST['danh-muc-chinh-san-pham'] == 47) {
                $id_sp = san_pham_Insert($dm_chinh, $dm_chi_tiet, $ten_san_pham, $new_name, $gia_san_pham, $so_luong_san_pham, $date, $mo_ta);
                san_pham_Insert_Dung_luong($id_sp, $dung_luong_san_pham, $gia_san_pham);
                san_pham_Insert_Color_Img($id_sp, $mau_sac, $new_name);
                // nếu có click them cấu hình
                if (isset($_POST['man-hinh'])) {
                    $man_hinh = $_POST['man-hinh'];
                    san_pham_Insert_Cau_hinh($id_sp, $man_hinh, $camera_sau, $camera_truoc, $ram, $dung_luong_san_pham, $cpu, $dung_luong_pin, $the_sim, $he_dieu_hanh, $xuat_xu);
                }
                // nếu có thêm màu sắc
                if (isset($_POST['mau-sac-more-add'])) {
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
                if (isset($_POST['dung-luong-more-add'])) {
                    $i = 0;
                    foreach ($_POST['dung-luong-more-add'] as $dung_luong) {
                        san_pham_Insert_Dung_luong($id_sp, $dung_luong, $_POST['gia-san-pham-more-add'][$i]);
                        $i++;
                    }
                }
                //nếu có thêm ảnh chi tiết
                if (isset($_FILES['anh-chi-tiet'])) {
                    foreach ($_FILES['anh-chi-tiet']['name'] as $anh_chi_tiet) {
                        san_pham_Insert_Img_Detail($id_sp, $anh_chi_tiet);
                    }
                    $i = 0;
                    foreach ($_FILES['anh-chi-tiet']['name'] as $anh_chi_tiet) {
                        move_uploaded_file($_FILES['anh-chi-tiet']['tmp_name'][$i], '../../../content/uploads/' . $anh_chi_tiet);
                        $i++;
                    }
                }
                echo 1;
            } else {
                san_pham_Insert($dm_chinh, $dm_chi_tiet, $ten_san_pham, $new_name, $gia_san_pham, $so_luong_san_pham, $date, $mo_ta);
                echo 1;
            }
        } catch (Exception $e) {
            echo 0;
        }
    } else {
       
    }
}

//Xử lý ckeditor 

//upload.php
// Xử lý tải lên máy chủ ,và move vào thư mục UPLOAD qua lấy từ $ FILES
if (isset($_FILES['upload']['name'])) {
    $file = $_FILES['upload']['tmp_name']; //đường dẫn tạm hình ảnh
    $file_name = $_FILES['upload']['name']; //tên của hình ảnh ban đầu
    $file_name_array = explode(".", $file_name); //cắt  tên ảnh ban đầu theo dấu . 
    // =>thành mảng gồm tên và đuôi file
    $extension = end($file_name_array); //lấy đuôi file  ảnh 
    $new_image_name = rand() . '.' . $extension; //random số gắn nối với dấu . 
    // gắn vào đuôi file ảnh
    chmod('upload', 0777); //cho phép đọc và ghi vào thư mục upload
    $allowed_extension = array("jpg", "gif", "png"); //tạo mảng cho phép nhận định dạng file ảnh
    if (in_array($extension, $allowed_extension)) { //kiểm tra đuôi file ảnh có tồn tại theo định dạng ko
        move_uploaded_file($file, 'upload/' . $new_image_name); //di chuyển vào thư mục upload
        $function_number = $_GET['CKEditorFuncNum'];
        // url này tính từ Domain vô upload
        $url = 'xu-ly/san-pham/upload/' . $new_image_name; //url : nhận url hình ảnh , trả trở lại 
        $message = '';
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
    }
}


// Trang thêm sản phẩm cần danh mục chi tiết theo danh mục chính
// Gửi id danh mục chính đi để select và hiện ra danh mục con tương ứng
if (isset($_POST['id_dm_chinh'])) {
    $id_dm_pro = $_POST['id_dm_chinh'];
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


?>