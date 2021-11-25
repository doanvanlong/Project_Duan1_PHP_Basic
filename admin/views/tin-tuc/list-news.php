<h3 class="alert bg-secondary text-light heading-cate">Danh sách bài viết</h3>
<div class="row">
    <div class="col-12">
        <form action="" method="post" id="list-news">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr style="text-align:center;">
                            <th scope="col" class="table-dark"></th>
                            <th scope="col" class="table-dark">#</th>
                            <th scope="col" class="table-dark">ID </th>
                            <th scope="col" class="table-dark">Danh Mục </th>
                            <th scope="col" style="width:30%" class="table-dark">Tên Bài Viết</th>
                            <th scope="col" style="width:20%" class="table-dark">Ảnh Đại Diện</th>
                            <th scope="col"  class="table-dark">Nội dung</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        if (!empty($list_news)) { 
                            foreach ($list_news as $list) {
                                extract($list);
                                if (isset($list_news_category)){
                                    foreach ($list_news_category as $list_category) {
                                        if ($list_category['id_dm_news'] == $id_dm_news) {
                                            $tenDanhMuc = $list_category['ten_dm_news'];
                                        }
                                    }
                                }
                                echo '
                                <tr style="text-align:center;">
                                <td class="align-middle"><input type="checkbox" value="' . $id_bai_viet . '" name="list-news[]" class="check-news"></td>
                                <td scope="row" class="align-middle">' . $i . '</td>
                                <td class="align-middle">' . $id_bai_viet . '</td>
                                <td class="align-middle">' . $tenDanhMuc . '</td>
                                <td class="align-middle">'.$tieu_de_news.'</td>
                                <td class="align-middle"><img style="width:60%;" src="' . $CONTENT_UPLOAD .'/'. $img_news. '" alt="Ảnh đại diện bài viết"></td>
                                <td class="align-middle">
                                <a href="edit-news&ID=' . $id_bai_viet . '">
                                <i class="fas fa-edit mr-3"></i>
                                </a>
                                <span class="delete-news cursor-pointer" data-delete_news="' . $id_bai_viet . '">
                                <i class="fas fa-trash-alt"></i></span>
                                </td>
                                </tr>';
                                $i++;
                            }
                        } else {
                            echo '
                                <tr>
                                <td scope="row"></td>
                                <td colspan="6" style="text-align:center;"><img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                <h4 style="text-align:center; padding-top:1em;">Không có bài viết nào để hiển thị!</h4>
                                </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="my-4">
                <div class="btn btn-success" id="checkall-news">Chọn tất cả</div>
                <div class="btn btn-success" id="uncheck-news">Bỏ chọn</div>
                <button type="submit" onclick="return confirm('Bạn có muốn xoá tất cả mục này không?')" class="btn btn-success">Xoá mục đã chọn</button>
            </div>
        </form>
    </div>
</div>