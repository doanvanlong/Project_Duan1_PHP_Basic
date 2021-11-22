<h3 class="alert bg-secondary text-light heading-cate">Danh mục tin tức</h3>
<div class="row">
    <div class="col-4">
        <form action="" method="post" id="add-dm-tin-tuc">
            <div class="form-group">
                <label>Thêm mới danh mục tin tức:</label>
                <input name="danh-muc-tin-tuc" type="text" class="form-control" placeholder="Ví dụ: Tin Công Nghệ,Tin Hot...">
                <small id="error-danh-muc-tin-tuc" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
                <input type="submit" value="Thêm danh mục tin tức" class="btn btn-success">
            </div>
        </form>
    </div>
    <div class="col-8">
        <form action="" method="post" id="dm-tin-tuc">
            <label>Danh sách danh mục tin tức:</label>
            <br>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr style="text-align:center;">
                            <th scope="col" class="table-dark">#</th>
                            <th scope="col" class="table-dark">STT</th>
                            <th scope="col" class="table-dark">ID Danh Mục</th>
                            <th scope="col" class="table-dark">Tên Danh Mục</th>
                            <th scope="col" class="table-dark">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        if (!empty($list_news_category)) {
                            foreach ($list_news_category as $list) {
                                extract($list);
                                echo '
                                <tr style="text-align:center;">
                                <td><input type="checkbox" value="' . $id_dm_news . '" name="list-news-category[]" class="check-news-category"></td>
                                <td scope="row">' . $i . '</td>
                                <td>' . $id_dm_news . '</td>
                                <td>' . $ten_dm_news . '</td>
                                <td>
                                <a href="edit-news-category&ID='.$id_dm_news.'">
                                <i class="fas fa-edit mr-3"></i>
                                </a>
                                <span class="delete-news-category cursor-pointer" data-delete_news_category="'.$id_dm_news.'">
                                <i class="fas fa-trash-alt"></i></span>
                                </td>
                                </tr>';
                                $i++;
                            }
                        } else {
                            echo '
                                <tr>
                                <th scope="row"></th>
                                <td colspan="4" style="text-align:center;"><img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                <h4 style="text-align:center; padding-top:1em;">Danh sách danh mục đang trống!</h4>
                                </td>
                                <td></td>
                                <td></td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="my-4">
            <div class="btn btn-success" id="checkall-news-category">Chọn tất cả</div>
            <div class="btn btn-success" id="uncheck-news-category">Bỏ chọn</div>
            <button type="submit" onclick="return confirm('Bạn có muốn xoá tất cả mục này không?')" class="btn btn-success">Xoá mục đã chọn</button>
      </div>
        </form>
    </div>
</div>