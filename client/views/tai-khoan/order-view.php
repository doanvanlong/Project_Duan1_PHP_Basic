<?php

if (!sessionLogin_Isset()) {
    //ko có login
} else {
    $info_kh = khach_hang_Query_One($_SESSION['login']['id_kh']);
    $sql = "SELECT * FROM `hoa_don` INNER JOIN hoa_don_chi_tiet ON hoa_don_chi_tiet.id_hoa_don=hoa_don.id_hoa_don INNER JOIN san_pham ON san_pham.id_sp=hoa_don_chi_tiet.id_sp INNER JOIN khach_hang on khach_hang.id_kh=hoa_don.id_kh  where hoa_don.id_hoa_don =?";
    $info_dh = pdo_query_one($sql, $_GET['hoa_don']);
?>
    <div class="row accountCustomer py-4">
        <div class="col-3 ">
            <div class="porsition-sticky">
                <aside class="account__sidebar  ">
                    <div class="account__avatar d-flex align-items-center">
                        <?php
                        if ($info_kh['hinh_anh'] == '') { ?>
                            <img class="account__avatar-img" src="<?= $CONTENT_CLIENT_URL ?>/img/avatar.png" alt="">
                            <?php
                        } else {
                            if ($_SESSION['login']['id_fb'] == "") {
                                //upload
                            ?>
                                <img class="account__avatar-img" src="<?= $AVTUSER_UPLOAD ?>/<?= $info_kh['hinh_anh'] ?>" alt="">
                            <?php
                            } else {
                                //link
                            ?>
                                <img class="account__avatar-img" src="<?= $info_kh['hinh_anh'] ?>" alt="">
                        <?php
                            }
                        }
                        ?>
                        <div class="account__avatar-info px-3">
                            <p class="m-0">Tài khoản của</p>
                            <strong class="account__avatar-name"><?= $info_kh['ho_ten']; ?></strong>
                        </div>
                    </div>
                </aside>
                <ul class="accountNav py-3 ">
                    <li class="py-4 accountNav-items js-accountNav-items "><a href="profile" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-user"></i>
                            <span>Thông tin tài
                                khoản</span></a></li>
                    <li class="py-4 accountNav-items js-accountNav-items"><a href="my_notica" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-bell"></i>
                            <span>Thông báo của tôi</span></a>
                    </li>
                    <li class="py-4 accountNav-items js-accountNav-items "><a href="my_order" class="d-flex accountNav-items-link"><svg stroke="currentColor" fill="#a0a0a0" stroke-width="0" viewBox="0 0 24 24" height="2rem" width="2rem" class="mr-3 svg " xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM21 4H3c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15h-9V6h9v13z">
                                </path>
                            </svg>
                            <span>Quản lý đơn hàng</span></a></li>

                    <li class="py-4 accountNav-items js-accountNav-items"><a href="address" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-map-marker-alt"></i><span>Sổ địa
                                chỉ</span></a></li>
                    <li class="py-4 accountNav-items js-accountNav-items"><a href="#" class="d-flex accountNav-items-link"><i class="icon__accoutNav far fa-eye"></i>
                            <span>Sản phẩm đã xem</span></a></li>
                    <li class="py-4 accountNav-items js-accountNav-items"><a href="#" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-heart"></i><span>Sản phẩm yêu thích</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-9">
            <div class="account__inner">
                <h3 class="account__inner-heading py-4">
                    Chi tiết đơn hàng #<?= $_GET["hoa_don"] ?> -
                    <span class="text-info" style="font-weight:500;font-size:1.8rem">
                        <?php
                        if ($info_dh['trang_thai_don_hang'] == 'chuaxacnhan') {
                            if ($info_dh['tinh_trang_thanh_toan'] == 'chuathanhtoan') {
                                if ($info_dh['hinh_thuc_thanh_toan'] == 1) {
                                    echo "Chưa thanh toán";
                                } else {
                                    echo "Đang xử lý";
                                }
                            } else {
                                echo "Đang xử lý";
                            }
                        } else if ($info_dh['trang_thai_don_hang'] == 'daxacnhan') {
                            echo "Đang vận chuyển";
                        } else if ($info_dh['trang_thai_don_hang'] == 'dagiaohang') {
                            echo "Giao hàng thành công";
                        } else {
                            echo "Đã huỷ";
                        }

                        ?>

                    </span>
                    <span class="ml-5 " style="font-size:1.4rem;font-weight:500;">Ngày đặt hàng <?= $info_dh['ngay_dat_hang'] ?></span>

                </h3>

                <?php
                if ($info_dh['trang_thai_don_hang'] != "dahuy") {
                    if ($info_dh['hinh_thuc_thanh_toan'] == 0) {
                ?>
                        <ul class="progressbar ">
                            <?php
                            if ($info_dh['trang_thai_don_hang'] == 'chuaxacnhan') { ?>
                                <li class="active">Đang xử lý</li>
                                <li class="">Đang giao hàng</li>
                                <li class="">Giao hàng thành công</li>
                            <?php
                            } else if ($info_dh['trang_thai_don_hang'] == 'daxacnhan') { ?>
                                <li class="complete">Đã xử lý</li>
                                <li class="active">Đang giao hàng</li>
                                <li class="">Giao hàng thành công</li>
                            <?php
                            } else { ?>
                                <li class="complete">Đã xử lý</li>
                                <li class="complete">Đang giao hàng</li>
                                <li class="active">Giao hàng thành công</li>
                            <?php
                            }
                            ?>

                        </ul>
                        <?php
                    } else {
                        if ($info_dh['tinh_trang_thanh_toan'] != 'chuathanhtoan') {
                        ?>
                            <ul class="progressbar ">
                                <?php
                                if ($info_dh['trang_thai_don_hang'] == 'chuaxacnhan') { ?>
                                    <li class="active">Đang xử lý</li>
                                    <li class="">Đang giao hàng</li>
                                    <li class="">Giao hàng thành công</li>
                                <?php
                                } else if ($info_dh['trang_thai_don_hang'] == 'daxacnhan') { ?>
                                    <li class="complete">Đã xử lý</li>
                                    <li class="active">Đang giao hàng</li>
                                    <li class="">Giao hàng thành công</li>
                                <?php
                                } else { ?>
                                    <li class="complete">Đã xử lý</li>
                                    <li class="complete">Đang giao hàng</li>
                                    <li class="active">Giao hàng thành công</li>
                                <?php
                                }
                                ?>

                            </ul>
                <?php
                        }
                    }
                }
                ?>

                <div>
                    <div class="row">
                        <div class="col-6">
                            <div class="box-dia-chi-nguoi-nhan">
                                <h5 class="dia-chi-nguoi-nhan-heading text-uppercase mb-3" style="font-weight:500">Địa chỉ người nhận</h5>
                                <div class="dia-chi-nguoi-nhan-inner bg-white" style="border-radius:3px">
                                    <b class="dia-chi-nguoi-nhan-inner-name text-uppercase"><?= $info_dh['ho_ten'] ?></b>
                                    <div class="dia-chi-nguoi-nhan-dia-chi">
                                        <p>Địa chỉ: <?= $info_dh['dia_chi'] ?></p>
                                        <p>Số điện thoại : <?= $info_dh['so_dien_thoai'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-dia-chi-nguoi-nhan">
                                <h5 class="hinh-thuc-thanh-toan-heading text-uppercase mb-3" style="font-weight:500">Hình thức thanh toán</h5>
                                <div class="dia-chi-nguoi-nhan-inner bg-white" style="border-radius:3px;">
                                    <div class="hinh-thuc-thanh-toan-inner-content">
                                        <?php
                                        if ($info_dh['hinh_thuc_thanh_toan'] == 1) {
                                            if ($info_dh['tinh_trang_thanh_toan'] == 'chuathanhtoan') { ?>
                                                <p>Thẻ ATM nội địa ( Hỗ trợ Internet Banking )</p>
                                                <p class="text-warning">Chưa thực hiện thanh toán. Vui lòng tiến hành thanh toán lại .</p>
                                            <?php
                                            } else { ?>
                                                <p>Thẻ ATM nội địa ( Hỗ trợ Internet Banking )</p>
                                            <?php
                                            }
                                        } else { ?>
                                            <p>Thanh toán khi nhận hàng</p>
                                        <?php
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account__inner-content">
                    <table class="table bg-white">
                        <thead>

                            <tr>
                                <th style="border-top: none !important ;width:50%;" scope="col">Sản phẩm</th>
                                <th style="border-top: none !important" scope="col">Giá</th>
                                <th style="border-top: none !important ;" scope="col">Số lượng</th>
                                <th style="border-top: none !important" scope="col">Tạm tính</th>

                            </tr>
                        </thead>
                        <tbody>
                            <style>
                                table th {
                                    border-bottom: none !important;
                                }

                                tr:hover {
                                    background-color: rgba(23, 162, 184, 0.1);
                                }
                            </style>
                            <?php
                            $sql = "SELECT * FROM `hoa_don` INNER JOIN hoa_don_chi_tiet on hoa_don_chi_tiet.id_hoa_don=hoa_don.id_hoa_don INNER JOIN
                            san_pham ON san_pham.id_sp=hoa_don_chi_tiet.id_sp where hoa_don_chi_tiet.id_hoa_don=?";
                            $list_sp = pdo_query($sql, $info_dh['id_hoa_don']);
                            $id_sp_chinh = $list_sp[0]['id_sp'];
                            foreach ($list_sp as $sp) { ?>
                                <tr>
                                    <td class="d-flex"><img style="width:80px;" src="<?= $CONTENT_UPLOAD ?>/<?= $sp['hinh_anh'] ?>" alt="">
                                        <div>
                                            <p><?= $sp['ten_sp'] ?></p>
                                            <?php
                                            if ($sp['mau_sac'] != "") { ?>
                                                <p>Màu sắc : <span class="text-primary"><?= $sp['mau_sac'] ?></span></p>
                                                <p>Dung lượng : <span class="text-primary"> <?= $sp['dung_luong'] ?></span></p>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php
                                        $list_giam_gia = giam_gia_Query_All_Sp();
                                        $check = false;
                                        if (in_array($sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                            //id sp nằm trong giảm giá
                                            if (count($list_giam_gia) > 0) {
                                                foreach ($list_giam_gia as $giam_gia) {
                                                    if ($giam_gia['id_sp'] == $sp['id_sp']) {
                                                        $check = true;
                                                        if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                            // %
                                                            echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $sp['don_gia']);
                                        ?>
                                                        <?php
                                                        } else {
                                                            //số tiền
                                                            echo So_Tien_Giam_Gia_Tien($sp['don_gia'], $giam_gia['muc_giam']);
                                                        ?>

                                        <?php
                                                        }
                                                    }
                                                }
                                            }
                                        } else {
                                            //id sp ko nằm trong gg
                                            // echo number_format($sp['don_gia'], 0, ',', '.') . '&nbsp;đ';
                                            $list_deal_soc = deal_soc_Query_All_Sp_Chinh();
                                            if (count($list_deal_soc) > 0) {
                                                foreach ($list_deal_soc as $deal_soc) {
                                                    if ($deal_soc['id_sp_chinh'] == $id_sp_chinh) {
                                                        $list_deal_soc = deal_soc_Query_All_Sp_Mua_Kem();
                                                        if (count($list_deal_soc) > 0) {
                                                            foreach ($list_deal_soc as $deal_soc) {

                                                                if ($deal_soc['id_sp_mua_kem'] == $sp['id_sp']) {
                                                                    $check = true;
                                                                    if ($deal_soc['id_loai_giam_gia_tien'] == 1) {
                                                                        //   %
                                                                        echo  So_Tien_Giam_Phan_Tram($deal_soc['muc_giam'], $sp['don_gia']);
                                                                    } else {
                                                                        //tiền
                                                                        echo   So_Tien_Giam_Gia_Tien($sp['don_gia'], $deal_soc['muc_giam']);
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        if ($check == false) {
                                            echo number_format($sp['don_gia'], 0, ',', '.') . '&nbsp;đ';
                                        }
                                        ?>
                                    </td>
                                    <td><?= $sp['so_luong_mua'] ?></td>

                                    <td>
                                        <?php
                                        $list_giam_gia = giam_gia_Query_All_Sp();
                                        $check = false;
                                        if (in_array($sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                            //id sp nằm trong giảm giá
                                            if (count($list_giam_gia) > 0) {
                                                foreach ($list_giam_gia as $giam_gia) {
                                                    if ($giam_gia['id_sp'] == $sp['id_sp']) {
                                                        $check = true;
                                                        if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                            // %
                                                            echo number_format((So_Tien_Giam_Phan_Tram1($giam_gia['muc_giam'], $sp['don_gia'])) * $sp['so_luong_mua'], 0, ',', '.') . 'đ';
                                        ?>
                                                        <?php
                                                        } else {
                                                            //số tiền
                                                            echo number_format((So_Tien_Giam_Gia_Tien1($sp['don_gia'], $giam_gia['muc_giam'])) * $sp['so_luong_mua'], 0, ',', '.') . 'đ';
                                                        ?>

                                        <?php
                                                        }
                                                    }
                                                }
                                            }
                                        } else {
                                            //id sp ko nằm trong gg
                                            // echo number_format($sp['don_gia'], 0, ',', '.') . '&nbsp;đ';
                                            $list_deal_soc = deal_soc_Query_All_Sp_Chinh();
                                            if (count($list_deal_soc) > 0) {
                                                foreach ($list_deal_soc as $deal_soc) {
                                                    if ($deal_soc['id_sp_chinh'] == $id_sp_chinh) {
                                                        $list_deal_soc = deal_soc_Query_All_Sp_Mua_Kem();
                                                        if (count($list_deal_soc) > 0) {
                                                            foreach ($list_deal_soc as $deal_soc) {

                                                                if ($deal_soc['id_sp_mua_kem'] == $sp['id_sp']) {
                                                                    $check = true;
                                                                    if ($deal_soc['id_loai_giam_gia_tien'] == 1) {
                                                                        //   %
                                                                        echo  number_format((So_Tien_Giam_Phan_Tram1($deal_soc['muc_giam'], $sp['don_gia'])) * $sp['so_luong_mua'], 0, ',', '.') . 'đ';
                                                                    } else {
                                                                        //tiền
                                                                        echo   number_format((So_Tien_Giam_Gia_Tien1($sp['don_gia'], $deal_soc['muc_giam'])) * $sp['so_luong_mua'], 0, ',', '.') . 'đ';
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        if ($check == false) {
                                            $tam_tinh = $sp['don_gia'] * $sp['so_luong_mua'];
                                            echo number_format($tam_tinh, 0, ',', '.') . '&nbsp;đ';
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="text-secondary my-3">Tạm tính</div>
                                    <div class="text-secondary my-3">Khuyến mãi</div>
                                    <div class="text-secondary my-3">Tổng cộng</div>
                                </td>
                                <td>
                                    <div class="my-3"><?= number_format($info_dh['tong_tien'], 0, ',', '.') . 'đ' ?></div>
                                    <div class="my-3"><?= number_format($info_dh['khuyen_mai'], 0, ',', '.') . 'đ' ?></div>

                                    <div class="font-size-1-8 text-danger my-3">
                                        <?php
                                        $tam_tinh = $info_dh['tong_tien'] - $info_dh['khuyen_mai'];
                                        echo number_format($tam_tinh, 0, ',', '.') . 'đ';
                                        ?>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>



        </div>

    </div>

<?php
}
?>
<style>
    .dia-chi-nguoi-nhan-inner {
        padding: 10px;
        min-height: 130px;

    }

    .box-dia-chi-nguoi-nhan {
        margin: 20px 0;
    }
</style>