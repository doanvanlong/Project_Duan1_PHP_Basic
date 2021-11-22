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
                <div class="col-6">
                    <div class="product-deltai-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>')">

                        <!-- <img src="<?= $CONTENT_UPLOAD ?>/<?= $info_sp['hinh_anh'] ?>" alt=""> -->
                    </div>
                    <div class="product-detail-imgs">

                    </div>
                </div>
                <div class="col-6">
                    <div class="product-detail-price d-flex align-items-center">
                        <h2 class="product-detail-price-new pr-3"><?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></h2>
                        <h2 class="product-detail-price-old text-secondary"><strike><?= number_format($info_sp['don_gia'], 0, ',', '.') . 'đ' ?></strike></h2>

                    </div>
                    <div class="product-detail-select-dung-luong d-flex py-3">
                        <div class="form-check box-check-dung-luong active">
                            <div class="check">
                                <input class="form-check-input  " type="radio" name="exampleRadios" id="" value="option1" checked>
                                <label class="form-check-label pl-2 " for="">
                                    64 GB
                                </label>
                            </div>
                            <div class="form-check-price">1000000020 đ</div>
                        </div>
                        <div class="form-check box-check-dung-luong">
                            <div class="check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="" value="option1">
                                <label class="form-check-label pl-2" for="">
                                    128 GB
                                </label>
                            </div>
                            <div class="form-check-price">1000000020 đ</div>

                        </div>
                        <div class="form-check box-check-dung-luong">
                            <div class="check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="" value="option1">
                                <label class="form-check-label pl-2" for="">
                                    256 GB
                                </label>
                            </div>
                            <div class="form-check-price">1000000020 đ</div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .product-detail {
        background-color: #fff;

    }

    .product-deltai-img {
        height: 400px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    }

    .product-detail-heading {
        border-bottom: 1px solid #eeeeee;
    }

    .product-detail-rating-danh-gia {}

    .product-detail-price-new {
        font-size: 2.9rem;
        color: var(--primary-color);

    }

    .product-detail-price-old {
        font-size: 1.9rem;
    }

    .box-check-dung-luong {
        background-color: #f8f9fa;
        padding: 5px 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
    }
    .box-check-dung-luong input[type=radio]:checked {
        background-color: red !important;
    }
    
    .box-check-dung-luong.active{
        background-color: #edeeef;
    }
    
</style>