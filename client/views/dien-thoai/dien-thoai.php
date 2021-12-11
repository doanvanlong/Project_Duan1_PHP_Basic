<div class="row">
    <div class="col-3">
        <div class="filter">
            <div class="pb-4 filter-hang_san_xuat">
                <b class="filter-hang_san_xuat-title">Hãng sản xuất</b>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input filter hang-san-xuat" checked type="radio" name="hang-san-xuat" value="" id="flexCheckDefault">
                            <label class="form-check-label pl-3 cursor-pointer" for="flexCheckDefault">
                                Tất cả
                            </label>
                        </div>
                    </div>
                    <!-- liệt kê các danh mục thuộc dm điện thoại -->
                    <?php
                    $list_dm_dienthoai = danh_muc_con_Select_by_id_dm_chinh(47);
                    foreach ($list_dm_dienthoai as $dm_dienthoai) { ?>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input  filter hang-san-xuat" type="radio" name="hang-san-xuat" value="<?= $dm_dienthoai['ten_sub_dm_pro'] ?>" id="<?= $dm_dienthoai['ten_sub_dm_pro'] ?>">
                                <label class="form-check-label pl-3 cursor-pointer" for="<?= $dm_dienthoai['ten_sub_dm_pro'] ?>">
                                    <?= $dm_dienthoai['ten_sub_dm_pro']; ?>
                                </label>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="pb-4 filter-muc_gia">
                <b class="filter-muc_gia-title">Mức giá</b>
                <div class="form-check">
                    <input class="form-check-input filter muc_gia" checked type="radio" name="muc-gia" value="" id="muc_gia1">
                    <label class="form-check-label pl-3 cursor-pointer" for="muc_gia1">
                        Tất cả
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter muc_gia" type="radio" name="muc-gia" value="0-2000000" id="muc_gia2">
                    <label class="form-check-label pl-3 cursor-pointer" for="muc_gia2">
                        Dưới 2 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter muc_gia" type="radio" name="muc-gia" value="2000000-4000000" id="muc_gia3">
                    <label class="form-check-label pl-3 cursor-pointer" for="muc_gia3">
                        Từ 2-4 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter muc_gia" type="radio" name="muc-gia" value="4000000-7000000" id="muc_gia4">
                    <label class="form-check-label pl-3 cursor-pointer" for="muc_gia4">
                        Từ 4-7 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter muc_gia" type="radio" name="muc-gia" value="7000000-13000000" id="muc_gia5">
                    <label class="form-check-label pl-3 cursor-pointer" for="muc_gia5">
                        Từ 7-13 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter muc_gia" type="radio" name="muc-gia" value="13000000-100000000" id="muc_gia6">
                    <label class="form-check-label pl-3 cursor-pointer" for="muc_gia6">
                        Trên 13 triệu
                    </label>
                </div>

            </div>
            <div class="pb-4 filter-dung_luong_pin">
                <b class="filter-muc_gia-title">Dung lượng pin</b>
                <div class="form-check">
                    <input class="form-check-input filter dung_luong_pin" checked type="radio" name="dung-luong-pin" value="" id="pin1">
                    <label class="form-check-label pl-3 cursor-pointer" for="pin1">
                        Tất cả
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input filter dung_luong_pin" type="radio" name="dung-luong-pin" value="0-3000" id="pin2">
                    <label class="form-check-label pl-3 cursor-pointer" for="pin2">
                        Dưới 3000 mah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter dung_luong_pin" type="radio" name="dung-luong-pin" value="3000-4000" id="pin3">
                    <label class="form-check-label pl-3 cursor-pointer" for="pin3">
                        Từ 3000-4000 mah
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input filter dung_luong_pin" type="radio" name="dung-luong-pin" value="4000-10000" id="pin4">
                    <label class="form-check-label pl-3 cursor-pointer" for="pin4">
                        Trên 4000 mah
                    </label>
                </div>

            </div>
            <div class="pb-4 filter-danh_gia_sao">
                <b class="filter-muc_gia-title">Đánh giá sao</b>
                <div class="form-check">
                    <input class="form-check-input filter rating" checked type="radio" name="danh-gia-sao" value="" id="rating1">
                    <label class="form-check-label pl-3 cursor-pointer" for="rating1">
                        Tất cả
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input filter rating" type="radio" name="danh-gia-sao" value="5-5" id="rating2">
                    <label class="form-check-label pl-3 cursor-pointer" for="rating2">
                        <i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i> <span> 5 sao</span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter rating" type="radio" name="danh-gia-sao" value="4-5" id="rating3">
                    <label class="form-check-label pl-3 cursor-pointer" for="rating3">
                        <i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i> <span> Từ 4 sao</span>

                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input filter rating" type="radio" name="danh-gia-sao" value="3-5" id="rating4">
                    <label class="form-check-label pl-3 cursor-pointer" for="rating4">
                        </i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i><i class="fas fa-star icon"></i> <span> Từ 3 sao</span>

                    </label>
                </div>

            </div>
        </div>

    </div>
    <div class="col-9">
        <div class="box-dien-thoai">
            <div style=" border-radius:5px ;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;" class="p-4 bg-white box-dien-thoai-title d-flex align-items-center">
                <h1 class="mb-0 font-size-2-5">Điện thoại</h1>
                <?php
                // đếm tất cả điện thoại
                // $dt_count=dien_thoai_Count_All();
                ?>
                <!-- <span class="font-size-1-8 text-secondary pl-3">(<?= $dt_count; ?> sản phẩm)</span> -->
            </div>
            <div class="box-dien-thoai-content bg-white p-4 my-5" style="border-radius:5px ;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                <div class="box-dien-thoai-content-filter d-flex align-items-center justify-content-center ">
                    Ưu tiên xem:
                    <div class="pl-5 box-dien-thoai-content-filter-tab d-flex align-items-center ">
                        <div class="  filter-tab-ban-chay active tab-filter-btn py-2 font-size-1-4 px-4">
                            <input hidden class="form-check-input filter thap_cao" checked type="radio" name="thap_cao" value="0" id="gia_thap">
                            <label class="form-check-label pl-3 cursor-pointer" for="gia_thap">
                                Giá thấp
                            </label>
                        </div>
                        <div class=" tab-filter-btn py-2 font-size-1-4 px-4">
                            <input hidden class="form-check-input filter thap_cao" type="radio" name="thap_cao" value="1" id="gia_cao">
                            <label class="form-check-label pl-3 cursor-pointer" for="gia_cao">
                                Giá cao
                            </label>
                        </div>

                    </div>
                </div>
                <div class="box-dien-thoai-content-product pt-5">
                    <div class="tab__menu-product-content py-4">
                        <!-- sản phẩm bán chạy trước -->
                        <div class=" load_filter">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    #loading {
        text-align: center;
        margin: 0 auto;
        background: url('<?= $CONTENT_CLIENT_URL ?>/img/loading.gif') no-repeat center;
        height: 200px;
        width: 200px;
    }

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