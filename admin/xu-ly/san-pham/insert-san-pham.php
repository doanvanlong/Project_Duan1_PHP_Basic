<?php
    //gọi model xử lý data của sản phẩm
    require_once '../../../model/san-pham.php';
    if (isset($_POST['them-san-pham'])) {
        $dm_chinh = $_POST['danh-muc-chinh-san-pham'];
        $dm_chi_tiet = $_POST['danh-muc-chi-tiet-san-pham'];
        $ten_san_pham = $_POST['ten-san-pham'];
        $gia_san_pham = $_POST['gia-san-pham'];
        $mau_sac = $_POST['mau-sac'];
        $filename = $_FILES['anh-dai-dien']['name'];
        $targer_dir = "../../../content/uploads";
        $target_file = $target_dir . basename($_FILES["anh-dai-dien"]["name"]);
        if (move_uploaded_file($_FILES["anh-dai-dien"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
        } else {
            echo "Đã xảy ra lỗi khi tải tệp!";
        }
        //thiếu mô tả sản phẩm
        try {
            //thêm vào DB

            echo 1;
        } catch (PDOException $e) {
           echo 0;
        }
    }
