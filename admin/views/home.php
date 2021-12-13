<?php
foreach ($new_orders as $new) {
    extract($new);
}
$comment = count($new_comments);
foreach ($new_users as $user) {
    extract($user);
}
foreach ($new_sales as $sales) {
    extract($sales);
    $Doanh_Thu = number_format($Doanh_Thu);
}
?>
<!-- Nội dung thay đổi -->
<h3 class="title alert alert-light text-uppercase">Tổng quan</h3>
<!-- overview -->
<div class="overview d-flex justify-content-between pt-2 pb-4">
    <div class="overview__box d-flex">
        <div class="overview__icon"><i class="fas fa-book"></i></div>
        <div class="overview__content">
            <a href="order-new">
                <div class="overview__text">
                    Đơn hàng mới
                </div>
                <div class="overview__count">
                    <?= $Don_Hang_Moi ?>
                </div>
            </a>
        </div>
    </div>
    <div class="overview__box d-flex">
        <div class="overview__icon"><i class="fas fa-comment-alt"></i></div>
        <div class="overview__content">
            <div class="overview__text">
                Bình luận mới
            </div>
            <div class="overview__count">
                <?= $comment ?>
            </div>
        </div>
    </div>
    <div class="overview__box d-flex">
        <div class="overview__icon"><i class="fas fa-users"></i></div>
        <div class="overview__content">
            <div class="overview__text">
                Khách hàng
            </div>
            <div class="overview__count">
                <?= $User ?>
            </div>
        </div>
    </div>
    <div class="overview__box d-flex">
        <div class="overview__icon"><i class="fas fa-hand-holding-usd"></i></div>
        <div class="overview__content">
            <div class="overview__text">
                Doanh thu
            </div>
            <div class="overview__count">
                <?php echo $Doanh_Thu . 'đ'; ?>
            </div>
        </div>
    </div>
</div>
<!-- biểu đồ thống kê doanh thu tháng -->
<div class="chart__monthl-revenu ">
    <div id="top_x_div" class="d-flex justify-content-center" style="width: 100%; height: 410px;"></div>
</div>
<!-- sản phẩm mới,comment mới -->
<div class="product-selling__comment-new ">
    <div class="row">
        <div class="col-6">
            <div class="product-selling">
                <h4 class="alert alert-light text-uppercase mt-4">Sản phẩm bán chạy</h4>
                <div class="product-selling-table my-4">
                    <?php
                    if (!empty($list_product_best_selling)) {
                        echo '<table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="middle">#</th>
                                                    <th scope="col" class="middle" style="width:18%;">Mã sản phẩm</th>
                                                    <th scope="col" class="middle">Hình</th>
                                                    <th scope="col" class="middle">Tên sản phẩm</th>
                                                    <th scope="col" class="middle">Xem</th>
                                                </tr>
                                            </thead>';
                        $i = 1;
                        foreach ($list_product_best_selling as $list_product) {
                            extract($list_product);
                            echo '<tbody>
                                                <tr>
                                                    <th scope="row" class="middle">' . $i . '</th>
                                                    <td class="middle">' . $ID_Product . '</td>
                                                    <td class="middle"><img style="width:50px"
                                                            src="' . $CONTENT_UPLOAD . '/' . $IMG . '"
                                                            alt="Ảnh sản phẩm bán chạy"></td>
                                                    <td class="text-overflow middle">' . $Name_Product . '</td>
                                                    <td class="middle"><a target="_blank" href="' . $CLIENT_URL . '/san-pham?id=' . $ID_Product . '&name=' . $Name_Product . '"><i class="far fa-eye"></i></a></td>
                                                </tr>
                                            </tbody>';
                            $i++;
                        }
                        echo '</table>';
                    } else {
                        echo '
                            <hr>
                            <div style="text-align: center;">
                            <img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                            <h4 style="padding: 1em 1em;">Chưa có dữ liệu về sản phẩm bán chạy.</h4>
                            </div>
                            <hr>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="comment-new">
                <h4 class="alert alert-light text-uppercase mt-4">Bình luận mới</h4>
                <div class="comment-new-table">
                    <?php
                    if (!empty($list_comment_news)) {
                        echo '<table class="table table-striped">
                       <thead>
                           <tr>
                               <th scope="col" class="middle">#</th>
                               <th scope="col" class="middle" style="width:18%">Mã Sản phẩm</th>
                               <th scope="col" class="middle" style="width:25%">Người bình luận</th>
                               <th scope="col" class="middle">Nội dung</th>
                               <th scope="col" class="middle" style="width:15%">Ngày </th>
                               <th scope="col" class="middle">Xem </th>
                           </tr>
                       </thead>';
                        $i = 0;
                        foreach ($list_comment_news as $list_cmt) {
                            extract($list_cmt);
                            $date = date_create($Day_Comment)->format('d-m-Y');
                            $i++;
                            echo '<tbody>
                           <tr>
                               <th scope="row" class="middle">' . $i . '</th>';
                            foreach ($list_product_homepage as $product) {
                                extract($product);
                                if ($id_product == $ID_Pro) {
                                    echo '<td class="middle">' . $id_product . '</td>';
                                }
                            }
                            echo '
                               <td class="avt_user_cmt">
                                   <p class="user__comment mr-2" style="background-image: url(' . $AVTUSER_UPLOAD . '/' . $AVT . ');">
                                   </p>
                                   <div>' . $Ho_Ten . '</div>
                               </td>
                               <td class="middle">' . $Content . '</td>
                               <td class="middle">' . $date . '</td>';
                            foreach ($list_product_homepage as $product) {
                                extract($product);
                                if ($id_product == $ID_Pro) {
                                    echo '<td class="middle">
                                    <a target="_blank" href="' . $CLIENT_URL . '/san-pham?id=' . $id_product . '&name=' . $name_product . '"> <i class="far fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>';
                                }
                            }
                        }
                        echo '</table>';
                    } else {
                        echo '
                            <hr>
                            <div style="text-align: center;">
                            <img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                            <h4 style="padding: 1em 1em;">Chưa có dữ liệu về về bình luận mới nhất.</h4>
                            </div>
                            <hr>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>