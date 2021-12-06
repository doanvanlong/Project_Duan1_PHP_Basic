<?php
require_once '../../../model/khuyen-mai.php';
session_start();
?>
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Khuyến mãi</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fas fa-times"></i></span>
    </button>
</div>
<div class="modal-body">
    <div class="nhap-ma-km">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" class="" width="20" height="20" viewBox="0 0 20 20">
                    <g fill="none" fill-rule="evenodd">
                        <path fill="#0D5CB6" d="M18.549 4c.757 0 1.378.73 1.445 1.662L20 5.83v1.958c-1.268.247-2.222 1.323-2.222 2.613s.954 2.366 2.222 2.613v1.958c0 .954-.58 1.737-1.32 1.822l-.131.007H1.452c-.757 0-1.379-.73-1.446-1.662l-.005-.167L0 13.013c1.268-.246 2.223-1.323 2.223-2.613S1.268 8.033 0 7.787V5.829c0-.954.58-1.737 1.32-1.822L1.452 4h17.097zM1.517 5.065l-.067.002c-.11.012-.292.247-.33.617l-.008.145-.002 1.197.09.041c1.217.591 2.051 1.772 2.128 3.128l.006.205c0 1.44-.857 2.712-2.134 3.333l-.09.04.001 1.162.004.13c.027.38.195.612.3.66l.037.008 17.031.002.067-.002c.11-.012.292-.247.331-.617l.008-.144-.001-1.2-.088-.04c-1.217-.59-2.05-1.772-2.127-3.127l-.006-.205c0-1.44.856-2.712 2.133-3.332l.088-.042.002-1.161-.004-.13c-.028-.38-.195-.612-.3-.66l-.037-.008-17.032-.002zM12.5 12c.46 0 .833.358.833.8 0 .442-.373.8-.833.8-.46 0-.834-.358-.834-.8 0-.442.373-.8.834-.8zm.442-4.424c.217.208.24.531.072.765l-.072.083-5 4.8c-.244.235-.64.235-.884 0-.217-.208-.241-.531-.072-.765l.072-.083 5-4.8c.244-.235.64-.235.884 0zM7.5 7.2c.46 0 .833.358.833.8 0 .442-.373.8-.833.8-.46 0-.834-.358-.834-.8 0-.442.374-.8.834-.8z" />
                    </g>
                </svg></span>
            <input type="text" class="form-control " name="nhap_ma_giam_gia" placeholder="Nhập mã khuyến mãi" aria-label="Username" aria-describedby="basic-addon1">

            <button class="btn btn-success btn-ap-dung " disabled>Áp Dụng</button>
        </div>

    </div>
    <div class="chon-ma-km py-2">
        <h5 class="ma-giam-gia-title" id="">Mã giảm giá</h5>
        <div class="ma-giam-gia-content">
            <?php
            if (isset($_POST['data_tong_tien'])) {
                $tong_tien = $_POST['data_tong_tien']; ?>
                <input type="hidden" name="id_kh_curren" value="<?= $_SESSION['login']['id_kh'] ?>">
                <input type="hidden" name="tong_tien" value="<?= $tong_tien ?>">
                <?php
            }
            $list_ma_giam_gia = ma_giam_gia_Query_2All();
            if (is_array($list_ma_giam_gia) && count($list_ma_giam_gia) > 0) {
                foreach ($list_ma_giam_gia as $ma_giam_gia) {
                    if ($ma_giam_gia['tinh_trang'] == 1) {
                        if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                            // %
                ?>
                            <div title="Chọn mã giảm giá" class="box-ma_giam_gia click-chon-ma-giam-gia d-flex align-items-center  cursor-pointer">
                                <div class="box-ma_giam_gia-img">
                                    <div class="box-ma_giam_gia-img-tt">
                                        <i class="fas fa-dollar-sign"></i>

                                    </div>
                                </div>
                                <div class="box-ma_giam_gia-content">

                                    <input type="hidden" name="muc_giam" value="<?= $ma_giam_gia['muc_giam'] ?>">
                                    <div class="box-ma_giam_gia-content-title " style="font-weight:600">Giảm <?= $ma_giam_gia['muc_giam'] . '&nbsp;%' ?></div>
                                    <input type="hidden" name="gioi_han_don_hang" value="<?= $ma_giam_gia['gia_tri_don_hang'] ?>">
                                    <div class="box-ma_giam_gia-content-ap-dung">Cho đơn hàng từ <?= number_format($ma_giam_gia['gia_tri_don_hang'], 0, ',', '.') . 'đ' ?></div>
                                    <div class="box-ma_giam_gia-content-han-su-dung py-3">HSD:<?= $ma_giam_gia['ngay_ket_thuc'] ?></div>

                                </div>
                                <input type="hidden" name="id_ma_giam_gia" value="<?= $ma_giam_gia['id_ma_giam_gia'] ?>">
                                <input type="hidden" name="id_kh" value="<?= $ma_giam_gia['id_kh'] ?>">
                            </div>
                        <?php
                        } else {
                            //tiền
                        ?>
                            <div title="Chọn mã giảm giá" class="click-chon-ma-giam-gia box-ma_giam_gia d-flex align-items-center  cursor-pointer">
                                <div class="box-ma_giam_gia-img">
                                    <div class="box-ma_giam_gia-img-tt">
                                        <i class="fas fa-dollar-sign"></i>

                                    </div>
                                </div>
                                <div class="box-ma_giam_gia-content">

                                    <input type="hidden" name="muc_giam" value="<?= $ma_giam_gia['muc_giam'] ?>">
                                    <div class="box-ma_giam_gia-content-title " style="font-weight:600">Giảm <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?></div>
                                    <input type="hidden" name="gioi_han_don_hang" value="<?= $ma_giam_gia['gia_tri_don_hang'] ?>">
                                    <div class="box-ma_giam_gia-content-ap-dung">Cho đơn hàng từ <?= number_format($ma_giam_gia['gia_tri_don_hang'], 0, ',', '.') . 'đ' ?></div>
                                    <div class="box-ma_giam_gia-content-han-su-dung py-3">HSD:<?= $ma_giam_gia['ngay_ket_thuc'] ?></div>

                                </div>
                                <input type="hidden" name="id_ma_giam_gia" value="<?= $ma_giam_gia['id_ma_giam_gia'] ?>">
                                <input type="hidden" name="id_kh" value="<?= $ma_giam_gia['id_kh'] ?>">

                            </div>
                        <?php
                        }
                    } else {
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $date_now = date('Y-m-d H:i:s');
                        $date_end = $ma_giam_gia['ngay_ket_thuc'];
                        $diff = abs(strtotime($date_end) - strtotime($date_now));
                        $years = floor($diff / (365 * 60 * 60 * 24));
                        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                        $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
                        $minutes = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);


                        if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                            // %
                        ?>
                            <div title="Mã giảm giá đã kết thúc" style="opacity:.5;" class=" box-ma_giam_gia d-flex align-items-center  ">
                                <div class="box-ma_giam_gia-img">
                                    <div class="box-ma_giam_gia-img-tt">
                                        <i class="fas fa-dollar-sign"></i>

                                    </div>
                                </div>
                                <div class="box-ma_giam_gia-content">
                                    <div class="box-ma_giam_gia-content-title " style="font-weight:600">Giảm <?= $ma_giam_gia['muc_giam'] . '&nbsp;%' ?></div>
                                    <div class="box-ma_giam_gia-content-ap-dung">Cho đơn hàng từ <?= number_format($ma_giam_gia['gia_tri_don_hang'], 0, ',', '.') . 'đ' ?></div>
                                    <div class="box-ma_giam_gia-content-han-su-dung py-3">HSD:
                                        Đã kết thúc
                                        <?php
                                        if ($months > 0) { ?>
                                            <span class="mx-1"><?= $months ?></span>ngày
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if ($days > 0) { ?>
                                            <span class="mx-1"><?= $days ?></span>ngày <br>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if ($hours > 0) { ?>
                                            <span class="mx-1"><?= $hours ?></span>giờ
                                        <?php
                                        } ?>
                                    </div>

                                </div>
                            </div>
                        <?php
                        } else {
                            //tiền
                        ?>
                            <div title="Mã giảm giá đã kết thúc" style="opacity:.5;" class=" box-ma_giam_gia d-flex align-items-center  ">
                                <div class="box-ma_giam_gia-img">
                                    <div class="box-ma_giam_gia-img-tt">
                                        <i class="fas fa-dollar-sign"></i>

                                    </div>
                                </div>
                                <div class="box-ma_giam_gia-content">
                                    <div class="box-ma_giam_gia-content-title " style="font-weight:600">Giảm <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?></div>
                                    <div class="box-ma_giam_gia-content-ap-dung">Cho đơn hàng từ <?= number_format($ma_giam_gia['gia_tri_don_hang'], 0, ',', '.') . 'đ' ?></div>
                                    <div class="box-ma_giam_gia-content-han-su-dung py-3">HSD:
                                        <div class="box-ma_giam_gia-content-han-su-dung py-3">HSD:
                                            Đã kết thúc
                                            <?php
                                            if ($months > 0) { ?>
                                                <span class="mx-1"><?= $months ?></span>ngày
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($days > 0) { ?>
                                                <span class="mx-1"><?= $days ?></span>ngày <br>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($hours > 0) { ?>
                                                <span class="mx-1"><?= $hours ?></span>giờ
                                            <?php
                                            } ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
            <?php
                        }
                    }
                }
            } ?>


        </div>
    </div>
</div>
<small class="d-block text-danger error-ma_giam_gia text-center" style="font-size:1.3rem"></small>

<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" class="close" data-dismiss="modal" aria-label="Close">Đóng</button>
    <button type="button" class="btn btn-success accept-ma-giam-gia">Áp dụng</button>
</div>



<script>
    $(document).ready(function() {
        $(".box-ma_giam_gia").click(function() {
            if (!$(this).hasClass("active")) {
                $(".box-ma_giam_gia").removeClass("active");
                $(this).addClass("active");
            }
        });
        $(".box-ma_giam_gia").click(function() {
            $('.error-ma_giam_gia').text('');
        })
        //

        var tong_tien = $('[name*="tong_tien"]').val();
        tong_tien = new Number(tong_tien);
        var gia_tri_don_hang = 0;
        gia_tri_don_hang = new Number(gia_tri_don_hang);
        var muc_giam = 0;
        var id_ma_giam_gia = 0;
        var id_kh = new Array();

        $('.click-chon-ma-giam-gia').click(function() {
            // trc tiên phải lấy đước tổng bill trước
            gia_tri_don_hang = $(this).children('.box-ma_giam_gia-content').children('input[name*="gioi_han_don_hang"]').val();
            muc_giam = $(this).children('.box-ma_giam_gia-content').children('input[name*="muc_giam"]').val();
            muc_giam = new Number(muc_giam);
            gia_tri_don_hang = new Number(gia_tri_don_hang);
            id_ma_giam_gia = $(this).children('input[name="id_ma_giam_gia"]').val();
            id_kh = $(this).children('input[name="id_kh"]').val();
            id_kh = id_kh.split(",");
        })
        // áp dụng mã giảm giá . accept 
        $('.accept-ma-giam-gia').click(function() {
            var id_kh_curren = $('[name*="id_kh_curren"]').val();
            if (id_kh[0] == "") {
                // console.log('rỗng')
                // ko cần kiểm tra
                if (gia_tri_don_hang == 0) {
                    // console.log('0 kc')
                    $('.error-ma_giam_gia').text('Vui lòng chọn mã giảm giá');
                } else {
                    if (tong_tien < gia_tri_don_hang) {
                        // console.log('chưa')
                        $('.error-ma_giam_gia').text(`Xin lỗi, Mã giảm giá này chỉ áp dụng cho đơn hàng từ ${gia_tri_don_hang.toLocaleString('vi',{style:'currency',currency:'VND'})}`);
                    } else {
                        window.localStorage.setItem('so_tien_duoc_giam_ap_ma_giam_gia', muc_giam);
                        window.localStorage.setItem('id_ma_giam_gia', id_ma_giam_gia);
                        //hơi fail tý ,tự xét theo % sẻ là bé hơn = 2 chữ số , còn lại là số tiền
                        // remove all modal
                        // $("#modal_ma_km ").remove();
                        // $("body").removeClass("modal-open");
                        // $("body").attr("style", "");
                        // $(".fade").removeClass("modal-backdrop");
                        
                        location.reload();
                    }
                }
            } else {
                // console.log('ok')
                if (id_kh.includes(id_kh_curren)) {
                    // true , là có id kh rồi
                    $('.error-ma_giam_gia').text('Thất bại , Mỗi khách hàng chỉ được tham gia một lần của một mã giảm giá');
                } else {
                    //chauw có id kh thì cho phép mã giamr giá
                    $('.error-ma_giam_gia').text('');

                    if (gia_tri_don_hang == 0) {
                        // console.log('0 kc')
                        $('.error-ma_giam_gia').text('Vui lòng chọn mã giảm giá');
                    } else {
                        if (tong_tien < gia_tri_don_hang) {
                            // console.log('chưa')
                            $('.error-ma_giam_gia').text(`Xin lỗi, Mã giảm giá này chỉ áp dụng cho đơn hàng từ ${gia_tri_don_hang.toLocaleString('vi',{style:'currency',currency:'VND'})}`);
                        }else {
                            id_kh=id_kh.join(',')
                            window.localStorage.setItem('so_tien_duoc_giam_ap_ma_giam_gia', muc_giam);
                            window.localStorage.setItem('id_ma_giam_gia', id_ma_giam_gia);
                            window.localStorage.setItem('id_kh', id_kh);
                            //hơi fail tý ,tự xét theo % sẻ là bé hơn = 2 chữ số , còn lại là số tiền
                            // remove all modal
                            // $("#modal_ma_km ").remove();
                            // $("body").removeClass("modal-open");
                            // $("body").attr("style", "");
                            // $(".fade").removeClass("modal-backdrop");
                            location.reload();
                        }
                    }
                }
            }

        })
    })
</script>