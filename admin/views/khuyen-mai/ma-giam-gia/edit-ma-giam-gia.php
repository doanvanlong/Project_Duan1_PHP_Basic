<h3 class="alert bg-secondary text-light heading-cate">Cập nhật chương trình mã giảm giá </h3>
<div class="giam-gia bg-light">
    <p class="alert alert-warning">Vui lòng điền thông tin chi tiết về chương trình mã giảm giá của bạn</p>
    <form action="" id="form_update_ma_giam_gia" method="POST">
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Tên chương trình mã giảm giá</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" value="<?= $info_km['ten_chuong_trinh'] ?>" name="ten_ct_ma_giam_gia_update" aria-describedby="">
                <small class="text-danger error-ten_ct_ma_giam_gia"></small>
            </div>

        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Tên mã giảm giá</label>
            </div>
            <div class="col-5">
                <div class="input-group-prepend">
                    <span class="input-group-text " style="font-weight:600;font-size:1.3rem" id="inputGroup-sizing-lg">LTS</span>
                    <input type="text" class="form-control" value="<?php echo substr($info_ma_giam_gia['ten_ma_giam_gia'], 3) ?>" name="ten_ma_giam_gia" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                </div>
                <small class="error-ten_ma_giam_gia text-danger"></small>
                <small class="text-secondary ">* Tên mã giảm giá mặc định bắt đầu bằng LTS (Viết tắt LTSMART)</small>
            </div>

        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Thời gian kết thúc mã giảm giá</label>
            </div>
            <div class="col-9">
                <div class="row align-items-center">

                    <div class="col-4">
                        <input type="datetime-local" name="date_end" class="form-control">
                        <small class="text-danger error-date_end"></small>
                    </div>
                </div>
                <small class="text-secondary my-3">* Thời gian kết thúc phải sau thời gian bắt đầu ít nhất 1 giờ</small>
            </div>

        </div>

        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Loại chương trình giảm giá</label>
            </div>
            <div class="col-3">
                <select class="form-select form-select-lg exampleFormControlSelect1" name="loai_giam_gia_tien" aria-label="">
                    <?php
                    $list_loai_giam_gia = loai_giam_gia_Query_All();
                    foreach ($list_loai_giam_gia as $loai_giam) {
                        if ($loai_giam['id_loai_giam_gia_tien'] == $info_ma_giam_gia['id_loai_giam_gia_tien']) { ?>
                            <option name="loai_giam_gia_tien" selected value="<?= $loai_giam['id_loai_giam_gia_tien'] ?>"><?= $loai_giam['ten_loai_giam_gia_tien'] ?></option>
                        <?php
                        } else { ?>
                            <option name="loai_giam_gia_tien" value="<?= $loai_giam['id_loai_giam_gia_tien'] ?>"><?= $loai_giam['ten_loai_giam_gia_tien'] ?></option>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-2">
                <label for="" class="col-form-label">Mức giảm</label>
            </div>
            <div class="col-4">
                <input type="number" name="muc_giam" value="<?=$info_ma_giam_gia['muc_giam']?>" placeholder="% or VND" class="form-control" aria-describedby="passwordHelpInline">
                <small class="text-danger error-muc_giam"></small>
            </div>

        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Giá trị đơn hàng tối thiểu</label>
            </div>
            <div class="col-6">
                <input type="number" name="don_hang_toi_thieu" value="<?=$info_ma_giam_gia['gia_tri_don_hang']?>" placeholder="VND" class="form-control" aria-describedby="passwordHelpInline">
                <small class="text-danger error-don_hang_toi_thieu"></small>
            </div>
        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Giới hạn đặt hàng</label>
            </div>
            <div class="col-6">
                <input type="number" name="gioi_han_dat_hang" value="<?=$info_km['so_luot_su_dung']?>" placeholder="" class="form-control" aria-describedby="passwordHelpInline">
                <small class="text-danger error-gioi_han_dat_hang"></small>
                <small class="text-secondary ">* Khi số lượng đặt hàng vượt mức sẻ tự động tạm dừng chương trình khuyến mãi này</small>
            </div>
        </div>
        <div class="row g-3 align-items-center box-form-giam-gia">
            <div class="col-3">
                <label for="" class="col-form-label">Sản phẩm</label>
            </div>
            <div class="col-6">
                <b class="mb-0 ">Áp dụng cho tất cả sản phẩm</b>
            </div>
        </div>
        <div class="row g-3 align-items-center box-form-giam-gia d-flex justify-content-end">
            <a href="ma-giam-gia" class="btn btn-outline-secondary px-5 py-2 mx-2">Huỷ</a>
            <input type="hidden" name="id_km" value="<?=$info_km['id_khuyen_mai']?>">
            <input type="hidden" name="id_ma_giam_gia" value="<?=$info_ma_giam_gia['id_ma_giam_gia']?>">
            <button type="submit" class="btn btn-success px-5 py-2 update_ma_giam_gia">Cập nhật</button>

        </div>
    </form>



</div>