<div class="row">
    <div class="col-12">
        <div class="box-dien-thoai">
            <div style=" border-radius:5px ;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;" class="pt-4 px-4 bg-white box-dien-thoai-title ">
                <div class="py-3" style="border-bottom:1px solid #eaeaea">
                    <h1 class="mb-0 font-size-2-5">Phụ kiện</h1>
                </div>
                <div class="danh_muc_pk py-4 d-flex justify-content-around">
                    <?php

                    $list_phu_kien = danh_muc_con_Query_Phu_Kien();
                    if (count($list_phu_kien) > 0) {
                        foreach ($list_phu_kien as $phu_kien) { ?>
                            <label for="<?= $phu_kien['id_sub_dm_pro'] ?>" class=" active_phu_kien d-flex flex-column align-items-center box-dm-pk">
                                <input type="radio" hidden class="filter_phu_kien " name="danh_muc_pku_kien" id="<?= $phu_kien['id_sub_dm_pro'] ?>" value="<?= $phu_kien['id_sub_dm_pro'] ?>">
                                <div class="box-icon_dm-pk">
                                    <?php
                                    if ($phu_kien['ten_sub_dm_pro'] == 'Tai nghe') { ?>
                                        <i class="fas fa-headphones-alt"></i>
                                    <?php
                                    } else if ($phu_kien['ten_sub_dm_pro'] == 'Pin dự phòng') { ?>
                                        <i class="fas fa-battery-half"></i>

                                    <?php
                                    } else if ($phu_kien['ten_sub_dm_pro'] == 'Củ sạc') { ?>
                                        <i class="fas fa-charging-station"></i>

                                    <?php
                                    } else if ($phu_kien['ten_sub_dm_pro'] == 'Ốp lưng') { ?>
                                        <img src="https://img.icons8.com/ios-glyphs/50/000000/phone-case.png" />

                                    <?php
                                    }
                                    ?>
                                </div>

                                <div><?= $phu_kien['ten_sub_dm_pro'] ?></div>
                            </label>
                    <?php

                        }
                    }
                    ?>
                </div>

            </div>

            <div class="box-dien-thoai-content bg-white p-4 my-5" style="border-radius:5px ;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                <div class="box-dien-thoai-content-product pt-5">
                    <div class="tab__menu-product-content py-4">
                        <!-- sản phẩm bán chạy trước -->
                        <div class="load_filter_phu_kien">

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
    </style>