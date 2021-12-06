<div class="row">
    <div class="col-3">
        <div class="filter">
          
            <div class="pb-4 filter-muc_gia">
                <b class="filter-muc_gia-title">Mức giá</b>
                <div class="form-check">
                    <input class="form-check-input" checked type="radio" name="muc-gia" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Tất cả
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="muc-gia" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Dưới 2 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="muc-gia" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Từ 2-4 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="muc-gia" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Từ 4-7 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="muc-gia" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Từ 7-13 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="muc-gia" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Trên triệu
                    </label>
                </div>

            </div>
            <div class="pb-4 filter-dung_luong_pin">
                <b class="filter-muc_gia-title">Dung lượng pin</b>
                <div class="form-check">
                    <input class="form-check-input" checked type="radio" name="dung-luong-pin" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Tất cả
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="dung-luong-pin" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Dưới 3000 mah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="dung-luong-pin" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Từ 3000-4000 mah
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="radio" name="dung-luong-pin" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Trên 4000 mah
                    </label>
                </div>

            </div>
            <div class="pb-4 filter-danh_gia_sao">
                <b class="filter-muc_gia-title">Đánh giá sao</b>
                <div class="form-check">
                    <input class="form-check-input" checked type="radio" name="danh-gia-sao" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        Tất cả
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="danh-gia-sao" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        <i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i> <span> 5 sao</span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="danh-gia-sao" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        <i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i> <span> Từ 4 sao</span>

                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="radio" name="danh-gia-sao" value="" id="">
                    <label class="form-check-label pl-3" for="">
                        </i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i> <span> Từ 3 sao</span>

                    </label>
                </div>

            </div>
        </div>

    </div>
    <div class="col-9">
        <div class="box-dien-thoai">
            <div style=" border-radius:5px ;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;" class="p-4 bg-white box-dien-thoai-title d-flex align-items-center">
                <h1 class="mb-0 font-size-2-5">Điện thoại Apple (iPhone)</h1>
                <?php
                // đếm tất cả điện thoại
                $dt_iphone_count = dien_thoai_iphone_Count_All();
                ?>
                <span class="font-size-1-8 text-secondary pl-3">(<?= $dt_iphone_count; ?> sản phẩm)</span>
            </div>
            <div class="box-dien-thoai-content bg-white p-4 my-5" style="border-radius:5px ;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                <div class="box-dien-thoai-content-filter d-flex align-items-center ">
                    Ưu tiên xem:
                    <div class="pl-5 box-dien-thoai-content-filter-tab d-flex align-items-center ">
                        <div class="filter-tab-ban-chay tab-filter-btn active py-2 font-size-1-4 px-4 ">
                            Bán chạy nhất
                        </div>
                        <div class="filter-tab-tra-gop tab-filter-btn py-2 font-size-1-4 px-4 ">
                            Trả góp 0%
                        </div>
                        <div class="filter-tab-gia-thap tab-filter-btn py-2 font-size-1-4 px-4 ">
                            Giá thấp
                        </div>
                        <div class="filter-tab-gia-cao tab-filter-btn py-2 font-size-1-4 px-4 ">
                            Giá cao
                        </div>
                    </div>
                </div>
                <div class="box-dien-thoai-content-product py-5">
                    <div class="tab__menu-product-content py-4">
                        <!-- sản phẩm bán chạy trước -->
                        <div class="row">
                            <?php
                            $dien_thoai_iphones = dien_thoai_iphone_Query_9();
                            foreach ($dien_thoai_iphones as $dien_thoai_iphone) { ?>
                                <div class="col-4">
                                    <a href="san-pham?id=<?=$dien_thoai_iphone['id_sp']?>&name=<?=$dien_thoai_iphone['ten_sp']?>" class="tab__menu-product-content-newproduct">
                                        <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $dien_thoai_iphone['hinh_anh'] ?>')">
                                            <!-- Nhãn giảm giá -->
                                            <!-- <span class="tab__menu-product-content-newproduct-sale-label"> Giảm  đến 10%  </span> -->
                                            <!-- Nhãn check in -->
                                            <span class="tab__menu-product-content-newproduct-checkin-label">Giảm 300k - Check in </span>

                                            <!-- Nhãn trả góp -->
                                            <span class="tab__menu-product-content-newproduct-installment-label ">Trả góp 0%</span>
                                        </div>
                                        <div class="px-4 pt-1 pb-5">
                                            <div class="tab__menu-product-newproduct-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                                                <?= $dien_thoai_iphone['ten_sp']; ?>
                                            </p>
                                            <!-- Nhãn Mã giảm giá -->
                                            <span class="tab__menu-product-newproduct-code-label">Giảm 100K</span>
                                            <!-- Nhãn deal sốc -->
                                            <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span>
                                            <div class="tab__menu-product-newproduct-price d-flex">
                                                <b class="tab__menu-product-newproduct-newprice pt-2">
                                                    <?= number_format($dien_thoai_iphone['don_gia'], 0, ',', '.') . 'đ'; ?>
                                                </b>
                                                <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                                    <?= number_format($dien_thoai_iphone['don_gia'], 0, ',', '.') . 'đ'; ?>
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

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    .filter {
        position: sticky;
        top: 0;
    }

    .tab-filter-btn {
        border: 1px solid #ced4da;
        color: #8392a5;
        cursor: pointer;
    }

    .tab-filter-btn:nth-child(1) {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .tab-filter-btn:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .tab-filter-btn+.tab-filter-btn {
        border-left: 0;
    }

    .tab-filter-btn.active {
        background-color: var(--primary-color);
        color: white;
    }
</style>