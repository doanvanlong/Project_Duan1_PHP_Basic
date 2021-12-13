<h3 class="alert bg-secondary text-light heading-cate">Danh Sách Khách Hàng</h3>
<div class="row">
    <div class="col-12">
        <form action="" method="post" id="list-user">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr style="text-align:center;">
                            <th scope="col" class="table-dark"></th>
                            <th scope="col" class="table-dark">#</th>
                            <th scope="col" class="table-dark">ID Khách Hàng</th>
                            <th scope="col" class="table-dark">User Name</th>
                            <th scope="col" class="table-dark">Họ Tên</th>
                            <th scope="col" class="table-dark" style="width:20%;">Ảnh Đại Diện</th>
                            <th scope="col" class="table-dark">Số Điện Thoại</th>
                            <th scope="col" class="table-dark">Email</th>
                            <th scope="col" class="table-dark">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                                        
                        $i = 1;
                        if (!empty($list_user)) {
                            foreach ($list_user as $list) {
                                extract($list);                                
                                echo '<tr style="text-align:center;">';
                                    if ($vai_tro == 1) {
                                        echo '<td class="align-middle"><span style="font-weight: bolder;color: red;">ADMIN</span></td>';
                                    } else {
                                        echo '<td class="align-middle"><input type="checkbox" value="' . $id_kh . '" name="list-user[]" class="check-user"></td>';
                                    }
                                    echo'
                                    <td scope="row" class="align-middle">' . $i . '</td>
                                    <td class="align-middle">' . $id_kh . '</td>
                                    <td class="align-middle">' . $username . '</td>
                                    <td class="align-middle">' . $ho_ten . '</td>';
                                if ($hinh_anh != "") {
                                    $sub = "http";
                                    if (strpos($hinh_anh, $sub) !== false) {
                                        echo '<td class="align-middle"><img style="width:30%;" src="'. $hinh_anh . '" alt="Ảnh đại diện Facebook"></td>';
                                    } else {
                                        echo '<td class="align-middle"><img style="width:30%;" src="' . $AVTUSER_UPLOAD . '/' . $hinh_anh . '" alt="Ảnh đại diện"></td>';
                                    }
                                } else {
                                    echo '<td class="align-middle"><img style="width:30%;" src="' . $CONTENT_CLIENT_URL . '/img/avatar.png" alt="Không có ảnh đại diện"></td>';
                                }
                                
                                echo '
                                    <td class="align-middle">' . $so_dien_thoai . '</td>
                                    <td class="align-middle">' . $email . '</td>';
                                if ($vai_tro == 1) {
                                    echo '<td class="align-middle">
                                        <a href="edit-user&ID=' . $id_kh . '">
                                        <i class="fas fa-edit mr-3"></i>
                                        </a>
                                        </td>
                                </tr>';
                                } else {
                                    echo '<td class="align-middle">
                                        <a href="edit-user&ID=' . $id_kh . '">
                                        <i class="fas fa-edit mr-3"></i>
                                        </a>
                                        <span class="delete-user cursor-pointer" data-delete_user="' . $id_kh . '">
                                        <i class="fas fa-trash-alt"></i></span>
                                        </td>
                                </tr>';
                                }
                                $i++;
                            }
                        } else {
                            echo '
                                <tr>
                                    <td scope="row"></td>
                                    <td colspan="6" style="text-align:center;"><img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                    <h4 style="text-align:center; padding-top:1em;">Không có dữ liệu!</h4>
                                    </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="my-4">
                <div class="btn btn-success" id="checkall-user">Chọn tất cả</div>
                <div class="btn btn-success" id="uncheck-user">Bỏ chọn</div>
                <button type="submit" onclick="return confirm('Bạn có muốn xoá tất cả mục này không?')" class="btn btn-success">Xoá mục đã chọn</button>
            </div>
        </form>
    </div>
</div>