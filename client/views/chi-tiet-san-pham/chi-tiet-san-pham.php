    <!-- update số lưuojt xem sp -->
    <?php
    san_pham_Update_So_Luot_Xem($info_sp['id_sp']);
    ?>
    <div class="row">
        <div class="col-12">
            <div class="product-detail p-3">
                <div class="product-detail-heading d-flex justify-content-between align-items-center">
                    <h2 class="product-detail-title py-2 text-overflow"><?= $info_sp['ten_sp']; ?></h2>
                    <div class="product-detail-rating d-flex ">
                        <div class="product-detail-rating-star px-1">
                            <i class="icon-to fas fa-star"></i><i class="icon-to fas fa-star"></i><i class="icon-to fas fa-star"></i><i class="icon-to fas fa-star"></i><i class="icon-to fas fa-star"></i>

                        </div>
                        <div class="product-detail-rating-comment d-flex">
                            <a href="#" class="product-detail-rating-danh-gia px-2">1 đánh giá</a> |
                            <a href="#" class="product-detail-rating-hoi-dap px-2">1 Hỏi & đáp</a>
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-6  ">
                        <div class="porsition-sticky">
                            <div class="product-deltai-img " style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>')">

                                <!-- <img src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt=""> -->
                            </div>
                            <div class="product-detail-imgs my-5">

                                <div class="owl-carousel owl-theme owl-imgs-detail">
                                    <div class="item">
                                        <div class="imgs-items" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>')">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="imgs-items" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>')">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="product-detail-cau-hinh">
                                <ul>
                                    <li><i class="fas fa-mobile-alt"></i>Màn hình chính: 7.6”, Màn hình phụ: 6.2”, HD+, Chính: Dynamic AMOLED 2X, phụ: Dynamic AMOLED 2X, 1768 x 2208 Pixel</li>
                                    <li><i class="fas fa-camera"></i>12.0 MP + 12.0 MP + 12.0 MP</li>
                                    <li><i class="fas fa-camera-retro"></i>10.0 MP</li>
                                    <li><i class="fas fa-microchip"></i>Snapdragon 888</li>
                                    <li><i class="fas fa-hdd"></i>256 GB</li>
                                    <li><a href="#">Xem chi tiết thông số kỹ thuật</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="product-detail-price py-2 d-flex align-items-center">
                            <h2 class="product-detail-price-new pr-3"><?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></h2>
                            <h2 class="product-detail-price-old text-secondary"><strike><?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></strike></h2>

                        </div>
                        <div class="product-detail-select-dung-luong ">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <div class="form-check box-check-dung-luong my-2  active">
                                        <div class="check cursor-pointer">
                                            <input class="form-check-input cursor-pointer " type="radio" name="exampleRadios" id="<?= $info_sp['id_sp'] ?>" value="option1" checked>
                                            <label class="form-check-label pl-2  cursor-pointer" for="<?= $info_sp['id_sp'] ?>">
                                                64 GB
                                            </label>
                                        </div>
                                        <label for="<?= $info_sp['id_sp'] ?>" class="cursor-pointer">
                                            <div class="form-check-price">1000000020 đ</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check box-check-dung-luong my-2 ">
                                        <div class="check cursor-pointer">
                                            <input class="form-check-input cursor-pointer " type="radio" name="exampleRadios" id="<?= $info_sp['id_sp'] ?>" value="option1">
                                            <label class="form-check-label pl-2  cursor-pointer" for="<?= $info_sp['id_sp'] ?>">
                                                64 GB
                                            </label>
                                        </div>
                                        <label for="<?= $info_sp['id_sp'] ?>" class="cursor-pointer">
                                            <div class="form-check-price">1000000020 đ</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check box-check-dung-luong my-2 ">
                                        <div class="check cursor-pointer">
                                            <input class="form-check-input cursor-pointer " type="radio" name="exampleRadios" id="<?= $info_sp['id_sp'] ?>" value="option1">
                                            <label class="form-check-label pl-2  cursor-pointer" for="<?= $info_sp['id_sp'] ?>">
                                                64 GB
                                            </label>
                                        </div>
                                        <label for="<?= $info_sp['id_sp'] ?>" class="cursor-pointer">
                                            <div class="form-check-price">1000000020 đ</div>
                                        </label>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="product-detail-select-mau d-flex py-4 ">
                            <div class="box-items-mau active d-flex flex-column align-items-center justify-content-center">
                                <div class="product-detail-select-mau-img ">

                                    <img style="width:80%" src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt="">
                                </div>
                                <div class="product-detail-select-mau-name">Vàng</div>
                            </div>
                            <div class="box-items-mau d-flex flex-column align-items-center justify-content-center">
                                <div class="product-detail-select-mau-img ">
                                    <img style="width:80%" src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt="">
                                </div>
                                <div class="product-detail-select-mau-name">Vàng</div>
                            </div>
                            <div class="box-items-mau d-flex flex-column align-items-center justify-content-center">
                                <div class="product-detail-select-mau-img ">
                                    <img style="width:80%" src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt="">
                                </div>
                                <div class="product-detail-select-mau-name">Vàng</div>
                            </div>
                            <div class="box-items-mau d-flex flex-column align-items-center justify-content-center">
                                <div class="product-detail-select-mau-img ">
                                    <img style="width:80%" src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt="">
                                </div>
                                <div class="product-detail-select-mau-name">Vàng</div>
                            </div>

                        </div>
                        <div class="product-detail-voucher">
                            <ul>
                                <li>Nhận ngay khuyến mãi đặc biệt</li>
                                <li><i style="color:#48bb78;" class="fas fa-check-circle icon pr-2"></i>Trả góp 0%</li>
                                <li><i style="color:#48bb78;" class="fas fa-check-circle icon pr-2"></i>Thu cũ đổi mới trợ giá 20% đến 3 triệu</li>
                                <li><i style="color:#48bb78;" class="fas fa-check-circle icon pr-2"></i>Giảm 100.000đ khi check in tại cửa hàng</li>
                                <li><i style="color:#48bb78;" class="fas fa-check-circle icon pr-2"></i>Tặng bảo hành 2 năm</li>

                            </ul>
                        </div>
                        <div class="product-detail-buy">
                            <button type="submit" class="product-detail-buy-now btn primary text-white my-3 ">
                                <div>
                                    <strong class="">Mua ngay</strong>
                                    <p class="font-size mb-1">Giao hàng miễn phí hoặc nhận tại shop</p>
                                </div>
                            </button>
                            <div class="row ">
                                <div class="col-6">
                                    <button class="product-detail-buy-tra-gop btn btn-primary ">
                                        <div>
                                            <strong>Trả góp 0%</strong>
                                            <p class="font-size mb-1">Duyệt nhanh qua điện thoại</p>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="product-detail-buy-trade-in btn btn-primary">
                                        <div>
                                            <strong>Trade-in thu cũ lên đời</strong>
                                            <p class="font-size mb-1">Click vào để định giá lên đời</p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail-mua-kem-deal">
                            <div class="product-detail-mua-kem-deal-title mt-4 pb-2 text-dark">
                                <strong>Mua kèm sản phẩm với deal sốc</strong>
                            </div>
                            <div class="product-detail-mua-kem-deal-main-pro">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="product-detail-mua-kem-deal-main-pro-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>')">
                                        </div>

                                    </div>
                                    <div class="col-7">
                                        <div class="product-detail-mua-kem-deal-main-pro-content mb-4">
                                            <p class="product-detail-mua-kem-deal-main-pro-content-title text-ellip"><?= $info_sp['ten_sp'] ?> </p>
                                            <div class="product-detail-mua-kem-deal-main-pro-content-price d-flex">
                                                <div class="product-detail-mua-kem-deal-main-pro-content-price-new">
                                                    <?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?>
                                                </div>
                                                <strike class="product-detail-mua-kem-deal-main-pro-content-price-old text-secondary">
                                                    <?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?>
                                                </strike>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <div class="product-detail-mua-kem-deal-main-pro-add-cart">
                                            <p class="btn font-size" disable> Thêm vào</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="text-center ">
                                <i class="fas fa-plus text-dark"></i>
                            </div>
                            <div class="product-detail-mua-kem-deal-main-items my-3">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="product-detail-mua-kem-deal-main-pro-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>')">
                                        </div>

                                    </div>
                                    <div class="col-7">
                                        <div class="product-detail-mua-kem-deal-main-items-content mb-4">
                                            <p class="product-detail-mua-kem-deal-main-items-content-title text-ellip"><?= $info_sp['ten_sp'] ?> </p>
                                            <!-- Nhãn deal sốc add cart -->
                                            <span class="label-deal-soc-add-cart">
                                                Deal sốc
                                            </span>
                                            <div class="product-detail-mua-kem-deal-main-items-content-price d-flex">
                                                <div class="product-detail-mua-kem-deal-main-items-content-price-new">
                                                    <?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?>
                                                </div>
                                                <strike class="product-detail-mua-kem-deal-main-items-content-price-old text-secondary">
                                                    <?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?>
                                                </strike>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <div class="product-detail-mua-kem-deal-main-items-add-cart">
                                            <p class="btn font-size" disable> Thêm vào</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="box-total-mua-kem-deal-soc py-4 pl-4">
                                <div class="row">

                                    <button class="col-4 btn primary btn-total-mua-kem-deal-soc d-flex justify-content-center align-items-center "><i class="icofont-cart font-size-2-5 pr-2"></i>
                                        <p class="font-size mb-0">Mua deal sốc</p>
                                    </button>
                                    <div class="col-8 total-mua-kem-deal-soc">
                                        <p class="mb-0"><b class="text-dark pr-2">Tổng cộng:</b> <span class="font-weight-5 text-dark"><?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></span>
                                            <strike class="pl-3 text-secondary"><?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></strike>
                                        </p>
                                        <p class="text-primary-color mb-0">Tiết kiệm : <?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="san-pham-tuong-tu py-3 my-5">
                <div class="owl-carousel owl-theme owl-san-pham-tuong-tu">
                    <?php
                    $list_sp_cung_dm = san_pham_Query_Danh_Muc_Con($info_sp['id_sub_dm_pro']);
                    foreach ($list_sp_cung_dm as $sp_cung_dm) { ?>
                        <div class="item">
                            <a href="san-pham?id=<?= $sp_cung_dm['id_sp'] ?>&name=<?= $sp_cung_dm['ten_sp'] ?>" class="tab__menu-product-content-newproduct">
                                <div class="tab__menu-product-content-newproduct-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $sp_cung_dm['hinh_anh'] ?>')">
                                    <span class="tab__menu-product-content-newproduct-sale-label">
                                        Giảm đến 30%
                                    </span>
                                    <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Giảm 300k - Check in
                                     </span> -->
                                    <!-- <span class="tab__menu-product-content-newproduct-installment-label">Trả góp 0%</span> -->
                                </div>
                                <div class="px-4 pt-1 pb-2">

                                    <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                                        <?= $sp_cung_dm['ten_sp'] ?>
                                    </p>
                                    <span class="tab__menu-product-newproduct-code-label">Giảm 100K</span>
                                    <!-- <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span> -->
                                    <div class="tab__menu-product-newproduct-price d-flex">
                                        <b class="tab__menu-product-newproduct-newprice pt-2">
                                            <?= number_format($sp_cung_dm['don_gia'], 0, ',', '.') . 'đ' ?>

                                        </b>
                                        <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                            <?= number_format($sp_cung_dm['don_gia'], 0, ',', '.') . 'đ' ?>
                                        </strike>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="product-detail-mota-news">
                <div class="row">
                    <div class="col-8">
                        <div class="mota-product-detail bg-white p-4">
                            <?= $info_sp['mo_ta'] ?>
                            <button class="doc-them btn btn-primary font-size">Đọc thêm <i class="fas fa-angle-down"></i></button>
                            <button class="an-bot btn btn-primary font-size">Ẩn bớt <i class="fas fa-chevron-up"></i></button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="news-product-detail porsition-sticky">
                            <div class="news-product-detai-title text-overflow">Bài viết về <?= $info_sp['ten_sp'] ?> </div>
                            <div class="danh-sach-bai-viet-product-detail">
                                <!-- dùng chung của banner tin tức đầu trang -->
                                <div class="banner__right-promotion-body-content  d-flex align-items-center">
                                    <div class="banner__right-promotion-body-img">
                                        <img style="width:100%;min-height:60px;" src="<?= $CONTENT_CLIENT_URL ?>/img/(500x250)_crop_cover_web_10-8.png" alt="">
                                    </div>
                                    <div class="banner__right-promotion-body-text ">
                                        <p class="text-overflow">Đặt trước iPhone 12 series VN/A: Tiết kiệm lên đến 5 triệu đồng</p>
                                        <p class="mb-0 text-muted" style="font-size: 1.1rem;">3 tuần trước</p>
                                    </div>
                                </div>
                                <div class="banner__right-promotion-body-content  d-flex align-items-center">
                                    <div class="banner__right-promotion-body-img">
                                        <img style="width:100%;min-height:60px;" src="<?= $CONTENT_CLIENT_URL ?>/img/(500x250)_crop_cover_web_10-8.png" alt="">
                                    </div>
                                    <div class="banner__right-promotion-body-text ">
                                        <p class="text-overflow">Đặt trước iPhone 12 series VN/A: Tiết kiệm lên đến 5 triệu đồng</p>
                                        <p class="mb-0 text-muted" style="font-size: 1.1rem;">3 tuần trước</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-detail-rating my-5 py-4">
                <h3 class="product-detail-rating-title pb-4">
                    Đánh giá & nhận xét <?= $info_sp['ten_sp']; ?>
                </h3>
                <div class="product-detail-rating-content">
                    <div class="row">
                        <div class="col-4">
                            <div class="product-detail-rating-avg text-center">
                                <div class="product-detail-rating-avg-title font-size-1-8 text-capitalize text-dark">
                                    Đánh giá trung bình
                                </div>
                                <b class="product-detail-rating-avg-count ">
                                    3/5
                                </b>
                                <div class="product-detail-rating-avg-star">
                                    <i class="fas fa-star icon-to"></i> <i class="fas fa-star icon-to"></i> <i class="fas fa-star icon-to"></i> <i class="fas fa-star font-size text-dark"></i> <i class="fas fa-star font-size text-dark "></i>
                                </div>
                                <div class="product-detail-rating-avg-count-total text-dark">
                                    10 đánh giá & 10 nhận xét
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="product-detail-rating-proges text-center">
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    5 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:60%"></span>
                                    </div>
                                    <span class="pl-2">2</span>
                                </div>
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    4 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:60%"></span>
                                    </div>
                                    <span class="pl-2">2</span>
                                </div>
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    3 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:60%"></span>
                                    </div>
                                    <span class="pl-2">2</span>
                                </div>
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    2 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:60%"></span>
                                    </div>
                                    <span class="pl-2">2</span>
                                </div>
                                <div class="product-detail-rating-proges-5-star d-flex align-items-center">
                                    1 <i class="fas fa-star icon pl-1 pr-2"></i>
                                    <div class="product-detail-rating-proges-5-star-main-count pr-2">
                                        <span class="product-detail-rating-proges-5-star-counting" style="width:60%"></span>
                                    </div>
                                    <span class="pl-2">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="product-detail-rating-viet-danh-gia text-center">
                                <div class="text-dark my-3">Bạn đã dùng sản phẩm này ?</div>
                                <button class="btn primary btn-viet-danh-gia font-size text-light p-3 ">Viết đánh giá của bạn</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail-rating-write">
                    <div class="row">
                        <div class="col-4">
                            <div class="product-detail-rating-write-title">
                                Bạn chấm sản phẩm này bao nhiêu sao?
                            </div>
                            <!-- <div class="product-detail-rating-write-title-check-star">
                                <input type="radio" name="rating-sao" id="sao5">
                                <label for="sao5"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating-sao" id="sao4">
                                <label for="sao4"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating-sao" id="sao3">
                                <label for="sao3"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating-sao" id="sao2">
                                <label for="sao2"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating-sao" id="sao1">
                                <label for="sao1"><i class="fas fa-star"></i></label>
                            </div> -->

                        </div>
                        <div class="col-8">

                        </div>
                    </div>
                </div>
                <div class="list-product-detail-rating">

                </div>
            </div>
        </div>

    </div>