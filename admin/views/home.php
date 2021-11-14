 <!-- Nội dung thay đổi -->
 <h3 class="title alert alert-light text-uppercase">Tổng quan</h3>
                <!-- overview -->
                <div class="overview d-flex justify-content-between pt-2 pb-4">
                    <div class="overview__box d-flex">
                        <div class="overview__icon"><i class="fas fa-book"></i></div>
                        <div class="overview__content">
                            <div class="overview__text">
                                Đơn hàng mới
                            </div>
                            <div class="overview__count">
                                123
                            </div>
                        </div>
                    </div>
                    <div class="overview__box d-flex">
                        <div class="overview__icon"><i class="fas fa-comment-alt"></i></div>
                        <div class="overview__content">
                            <div class="overview__text">
                                Bình luận mới
                            </div>
                            <div class="overview__count">
                                123
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
                                123
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
                                123
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
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Mã sản phẩm</th>
                                                <th scope="col">Hình</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Xem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>12</td>
                                                <td><img style="width:50px"
                                                        src="<?=$CONTENT_CLIENT_URL?>/img/(600x600)_crop_iPhone_6s_16GB_Quoc_Te_Likenew_XTsmart.jpg"
                                                        alt=""></td>
                                                <td class="text-overflow">iPhone 7 Plus 256GB Quốc Tế (Likenew)</td>
                                                <td><a href="#"><i class="far fa-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>13</td>
                                                <td><img style="width:50px"
                                                        src="<?=$CONTENT_CLIENT_URL?>/img/(600x600)_crop_iPhone_6s_16GB_Quoc_Te_Likenew_XTsmart.jpg"
                                                        alt=""></td>
                                                <td class="text-overflow">iPhone 7 Plus 256GB Quốc Tế (Likenew)</td>
                                                <td><a href="#"><i class="far fa-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>14</td>
                                                <td><img style="width:50px"
                                                        src="<?=$CONTENT_CLIENT_URL?>/img/(600x600)_crop_iPhone_6s_16GB_Quoc_Te_Likenew_XTsmart.jpg"
                                                        alt=""></td>
                                                <td class="text-overflow">iPhone 7 Plus 256GB Quốc Tế (Likenew)</td>
                                                <td><a href="#"><i class="far fa-eye"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="comment-new">
                                <h4 class="alert alert-light text-uppercase mt-4">Bình luận mới</h4>
                                <div class="comment-new-table">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Người bình luận</th>
                                                <th scope="col">Nội dung</th>
                                                <th scope="col">Ngày </th>
                                                <th scope="col">Xem </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Iphone 11</td>
                                                <td class='d-flex '>
                                                    <p class="user__comment mr-2"
                                                        style="background-image: url('<?=$CONTENT_ADMIN_URL?>/img/user.jpg');"></p>Long
                                                    Đoàn
                                                </td>
                                                <td>sản phẩm tốt</td>
                                                <td>20/11/2021</td>
                                                <td>
                                                    <a href="#"> <i class="far fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Iphone 11</td>
                                                <td class='d-flex '>
                                                    <p class="user__comment mr-2"
                                                        style="background-image: url('<?=$CONTENT_ADMIN_URL?>/img/user.jpg');"></p>Long
                                                    Đoàn
                                                </td>
                                                <td>sản phẩm tốt</td>
                                                <td>20/11/2021</td>
                                                <td>
                                                    <a href="#"> <i class="far fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Iphone 11</td>
                                                <td class='d-flex '>
                                                    <p class="user__comment mr-2"
                                                        style="background-image: url('<?=$CONTENT_ADMIN_URL?>/img/user.jpg');"></p>Long
                                                    Đoàn
                                                </td>
                                                <td>sản phẩm tốt</td>
                                                <td>20/11/2021</td>
                                                <td>
                                                    <a href="#"> <i class="far fa-eye"></i></a>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>