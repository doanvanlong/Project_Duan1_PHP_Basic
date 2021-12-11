<h3 class="alert bg-secondary text-light heading-cate">Bình Luận Sản Phẩm</h3>
<div class="row">
    <div class="col-12">  
        <?php
        if (!empty($list_cmt)) {
            echo '<div class="table-responsive">
                    <table class="table align-middle table-striped">
                    
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col" class="table-dark">ID Bình Luận</th>
                                <th scope="col" class="table-dark">Khách Hàng</th>
                                <th scope="col" class="table-dark">Sản Phẩm</th>
                                <th scope="col" class="table-dark">Nội Dung</th>
                                <th scope="col" class="table-dark">Ngày Bình Luận</th>
                                <th scope="col" class="table-dark">Hành Động</th>
                            </tr>
                        </thead>';
            foreach ($list_cmt as $list_cmt) {
                extract($list_cmt);
                $Date = date_create($Date)->format('d-m-Y');
                echo '<tbody>
                    <tr style="text-align:center;">
                        <td class="align-middle">' . $ID_CMT . '</td>
                        <td class="align-middle avt_user_cmt middle"><p class="user__comment mr-2" style="background-image: url(' . $AVTUSER_UPLOAD . '/' . $AVT . ');">
                        </p>
                        <div>' . $Ho_Ten . '</div></td>
                        <td class="align-middle">' . $Name_Product . '</td>
                        <td class="align-middle">' . $Content . '</td>
                        <td class="align-middle">' . $Date . '</td>
                        <td class="align-middle">
                        <a target="_blank" href="' . $CLIENT_URL . '/san-pham?id=' . $ID_Product . '&name=' . $Name_Product . '" class="btn btn-outline-primary">Xem</a>
                        <a href="reply-comment?ID_Comment='.$ID_CMT.'" class="btn btn-outline-success" >Trả lời</a>
                        <span class="btn btn-outline-danger delete-cmt-product" data-id_comment_product='.$ID_CMT.'>Xoá</span>
                        </td>
                    </tr>
                </tbody>';
            }
            echo '</table>
                        </div>';
        } else {
            echo '
                                    <hr>
                                    <div style="text-align: center;">
                                        <img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                        <h4 style="padding: 1em 1em;">Không có bình luận nào!.</h4>
                                    </div>
                                    <hr>';
        }
        ?>
    </div>
</div>
<h3 class="alert bg-secondary text-light heading-cate">Bình Luận Bài Viết</h3>
<div class="row">
    <div class="col-12">
    <?php
        if (!empty($list_cmt_post)) {
            echo '<div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col" class="table-dark">ID Bình Luận</th>
                                <th scope="col" class="table-dark">Khách Hàng</th>
                                <th scope="col" class="table-dark">Bài Viết</th>
                                <th scope="col" class="table-dark">Nội Dung</th>
                                <th scope="col" class="table-dark">Ngày Bình Luận</th>
                                <th scope="col" class="table-dark">Hành Động</th>
                            </tr>
                        </thead>';
            foreach ($list_cmt_post as $list_cmt_post) {
                extract($list_cmt_post);
                $Date = date_create($Date)->format('d-m-Y');
                echo '<tbody>
                    <tr style="text-align:center;">
                        <td class="align-middle">' . $ID_Cmt_News . '</td>
                        <td class="align-middle avt_user_cmt middle"><p class="user__comment mr-2" style="background-image: url(' . $AVTUSER_UPLOAD . '/' . $avt . ');">
                        </p>
                        <div>' . $ho_ten . '</div></td>
                        <td class="align-middle">' . $Name_Post . '</td>
                        <td class="align-middle">' . $Content . '</td>
                        <td class="align-middle">' . $Date . '</td>
                        <td class="align-middle">
                        <a href="' . $CLIENT_URL . '/bai-viet?id=' . $ID_Post . '&title=' . $Name_Post . '" class="btn btn-outline-primary">Xem</a>
                        <span class="btn btn-outline-danger delete-cmt-post" data-id_comment_post='.$ID_Cmt_News.'>Xoá</span>
                        </td>
                    </tr>
                </tbody>';
            }
            echo '</table>
                        </div>';
        } else {
            echo '
                                    <hr>
                                    <div style="text-align: center;">
                                        <img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                                        <h4 style="padding: 1em 1em;">Không có bình luận nào!.</h4>
                                    </div>
                                    <hr>';
        }

        ?>
    </div>
</div>