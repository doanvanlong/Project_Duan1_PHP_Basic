<?php
require_once '../../../model/san-pham.php';
require_once '../../../global.php';
require_once '../../../model/khuyen-mai.php';
require_once '../../../model/rating.php';

if (isset($_POST['page'])) {
    $page = $_POST['page'];
} else {
    $page = 1;
}
$row = 12;
$from = ($page - 1) * $row;
$sql = "SELECT DISTINCT san_pham.id_sp,san_pham.don_gia,cau_hinh_phone.dung_luong_pin,rating_sp.avg_rating,sub_danh_muc_pro.ten_sub_dm_pro,san_pham.ten_sp,san_pham.hinh_anh 
FROM `san_pham` left JOIN danh_muc_pro on san_pham.id_dm_pro =danh_muc_pro.id_dm_pro left JOIN sub_danh_muc_pro 
on san_pham.id_sub_dm_pro=sub_danh_muc_pro.id_sub_dm_pro left JOIN cau_hinh_phone on san_pham.id_sp=cau_hinh_phone.id_sp left JOIN rating_sp ON 
san_pham.id_sp=rating_sp.id_sp where san_pham.id_dm_pro =47 ";

if (isset($_POST['hang_sx'])) {
    $hang_sx = $_POST['hang_sx'][0]; //mảng hãng sx nhưng chỉ có 1 phần tử đầu
    $sql .= " AND sub_danh_muc_pro.ten_sub_dm_pro like '%" . $hang_sx . "%'";
}
if (isset($_POST["muc_gia"])) {
    $muc_gia = $_POST["muc_gia"][0];
    if ($muc_gia == "") {
        $sql .= "";
    } else {
        $muc_gia1 = explode('-', $muc_gia); //tách lấy giá đầu và cuôi

        $sql .= " AND san_pham.don_gia between $muc_gia1[0] and $muc_gia1[1]";
    }
}
if (isset($_POST["dung_luong_pin"])) {
    $dung_luong_pin = $_POST["dung_luong_pin"][0];
    if ($dung_luong_pin == "") {
        $sql .= "";
    } else {
        $dung_luong_pin1 = explode('-', $dung_luong_pin); //tách lấy giá đầu và cuôi
        $sql .= " AND cau_hinh_phone.dung_luong_pin between $dung_luong_pin1[0] and $dung_luong_pin1[1]";
    }
}
if (isset($_POST["rating"])) {
    $rating = $_POST["rating"][0];
    if ($rating == "") {
        $sql .= "";
    } else {
        $rating1 = explode('-', $rating); //tách lấy giá đầu và cuôi
        $sql .= " AND rating_sp.avg_rating between $rating1[0] and $rating1[1]";
    }
}
if (isset($_POST['thap_cao'])) {
    $thap_cao = $_POST['thap_cao'][0];

    if ($thap_cao == 1) {
        $sql .= " ORDER BY san_pham.don_gia desc";
    }
    if ($thap_cao == 0) {
        $sql .= " ORDER BY san_pham.don_gia ASC";
    }
}
$list_sp_all = pdo_query($sql);
$count = count($list_sp_all);
$count = ceil($count / $row);
$sql .= " LIMIT $from,$row";
$list_sp = pdo_query($sql);
?>
<div class="row"><?php
                    foreach ($list_sp as $sp) { ?>
        <div class="col-4">
            <a href="san-pham?id=<?= $sp['id_sp']; ?>&name=<?= $sp['ten_sp']; ?>" class="tab__menu-product-content-newproduct">
                <div class="tab__menu-product-content-newproduct-img" style="background-image:url('<?= $CONTENT_UPLOAD ?>/<?= $sp['hinh_anh'] ?>')">
                    <!-- Nhãn giảm giá -->
                    <?php
                        $list_giam_gia = giam_gia_Query_All_Sp();
                        if (count($list_giam_gia) > 0) {
                            foreach ($list_giam_gia as $giam_gia) {
                                if ($giam_gia['id_sp'] == $sp['id_sp']) {
                                    if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                        // %
                    ?>
                                    <span class="tab__menu-product-content-newproduct-sale-label"> Giảm <?= $giam_gia['muc_giam'] ?> %</span>
                                <?php
                                    } else {
                                        //số tiền
                                ?>
                                    <span class="tab__menu-product-content-newproduct-sale-label"> Giảm <?= number_format($giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?> </span>
                    <?php
                                    }
                                }
                            }
                        }
                    ?>

                    <!-- Nhãn check in -->
                    <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Giảm 300k - Check in </span> -->

                    <!-- Nhãn trả góp -->
                    <!-- <span class="tab__menu-product-content-newproduct-installment-label ">Trả góp 0%</span> -->
                </div>
                <div class="px-4 pt-1 pb-5">
                    <div class="tab__menu-product-newproduct-rate">

                        <?php
                        $rating = rating_Avg($sp['id_sp']);
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $rating) { ?>
                                <i class=" fas fa-star"></i>
                            <?php
                            } else { ?>
                                <i class="text-secondary fas fa-star"></i>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                        <?= $sp['ten_sp']; ?>
                    </p>
                    <!-- Nhãn Mã giảm giá -->
                    <?php
                        $list_ma_giam_gia = ma_giam_gia_Query_All();
                        if (count($list_ma_giam_gia) > 0) {
                            foreach ($list_ma_giam_gia as $ma_giam_gia) {
                                if ($ma_giam_gia['id_loai_giam_gia_tien'] == 1) {
                                    // %
                    ?>
                                <span class="tab__menu-product-newproduct-code-label">Giảm <?= $ma_giam_gia['muc_giam'] ?> %</span>

                            <?php
                                } else {
                                    //số tiền
                            ?>
                                <span class="tab__menu-product-newproduct-code-label">Giảm <?= number_format($ma_giam_gia['muc_giam'], 0, ',', '.') . '&nbsp;đ' ?></span>

                    <?php
                                }
                            }
                            if (count($list_giam_gia) > 2) {
                                echo "<br>";
                            }
                        }
                    ?>
                    <!-- Nhãn deal sốc -->
                    <?php
                        $list_deal_soc = deal_soc_Query_All_Sp_Chinh();
                        if (count($list_deal_soc) > 0) {
                            foreach ($list_deal_soc as $deal_soc) {
                                if ($deal_soc['id_sp_chinh'] == $sp['id_sp']) { ?>
                                <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span>

                    <?php
                                }
                            }
                        }
                    ?>
                    <div class="tab__menu-product-newproduct-price d-flex">
                        <b class="tab__menu-product-newproduct-newprice pt-2">
                            <?php
                            $list_giam_gia = giam_gia_Query_All_Sp();
                            if (in_array($sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                //id sp nằm trong giảm giá
                                if (count($list_giam_gia) > 0) {
                                    foreach ($list_giam_gia as $giam_gia) {
                                        if ($giam_gia['id_sp'] == $sp['id_sp']) {
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
                                echo number_format($sp['don_gia'], 0, ',', '.') . '&nbsp;đ';
                            }
                            ?>
                        </b>
                        <strike class="tab__menu-product-newproduct-oldprice pt-2">
                            <?php
                            $list_giam_gia = giam_gia_Query_All_Sp();
                            if (in_array($sp['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                //id sp nằm trong giảm giá
                                if (count($list_giam_gia) > 0) {
                                    foreach ($list_giam_gia as $giam_gia) {
                                        if ($giam_gia['id_sp'] == $sp['id_sp']) {
                                            // nếu sp có giảm giá mới in ra giá củ 
                                            echo  number_format($sp['don_gia'], 0, ',', '.') . 'đ';
                                        }
                                    }
                                }
                            } else {
                                //ko có giảm giá 

                            }
                            ?>
                        </strike>
                    </div>
                </div>
            </a>
        </div>
    <?php
                    }

    ?>
</div>
<nav aria-label="Page navigation example " style="margin-top:30px">
    <ul class="pagination justify-content-center">

        <?php
        if ($page > 1) {
            //previous
            //nếu page >1 là hiện nút page ,và  id= biến prev =page -1
            $prev = $page - 1; ?>
            <li class="page-item " id="1">
                <p class="page-link ">First</i></p>
            </li>
            
            <li class="page-item " id="<?= $prev ?>">
                <p class="page-link ">   <span aria-hidden="true">&laquo;</span></p>
            </li>
            <?php
        }
        for ($i = 1; $i <= $count; $i++) {
            $active = "";
            if ($i == $page) {
                $active = "active";
            ?>
            <?php
            } ?>
            <li class="page-item " id="<?= $i ?>">
                <p class="page-link <?= $active ?>"><?= $i ?></p>
            </li>
        <?php
        }

        if ($page < $count) {
            //nếu page hiện tại bé tổng số page hiện tại thì ++ page
            $page++;
        ?>
          
            <li class="page-item " id="<?= $page ?>">
                <p class="page-link "><span aria-hidden="true">&raquo;</span></p>
            </li>
            <li class="page-item " id="<?=$count?>">
                <p class="page-link ">Last</i></p>
            </li>
        <?php
        }
        ?>

    </ul>
</nav>
<script>
    function filter_dien_thoai(page) {
        $(".load_filter").html("<div id='loading' style=''></div>");
        var hang_sx = get_Class_Lay_Val("hang-san-xuat");
        var muc_gia = get_Class_Lay_Val("muc_gia");
        var dung_luong_pin = get_Class_Lay_Val("dung_luong_pin");
        var rating = get_Class_Lay_Val("rating");
        var thap_cao = get_Class_Lay_Val("thap_cao");

        $.ajax({
            url: "xu-ly/dien-thoai/filter.php",
            type: "POST",
            data: {
                page: page,
                hang_sx: hang_sx,
                muc_gia: muc_gia,
                dung_luong_pin: dung_luong_pin,
                rating: rating,
                thap_cao: thap_cao,
            },
            success: function(data) {
                if (data != "") {
                    setTimeout(function() {
                        $(".load_filter").html(data);
                    }, 400);
                } else {
                    setTimeout(function() {
                        $(".load_filter").html(`
          <div style="margin:0 auto"> 
          <img style='width:300px' src='../content/client/img/noti-search.png'>
          <div class='text-center' style="margin:0 auto ">Không có dữ liệu</div>
          </div>
        `);
                    }, 800)
                }
            },
        });
    }

    // lấy class
    function get_Class_Lay_Val(className) {
        var filter = [];
        $("." + className + ":checked").each(function() {
            filter.push($(this).val());
        });
        return filter;
    }
    // selector . filter
    $(".filter").click(function() {
        // click chọn checked radio thfi gọi hàm gửi dữ liệu search đi
        filter_dien_thoai();
    });
    $('.page-item').click(function() {
        var page = $(this).attr("id");
        filter_dien_thoai(page);

    })
</script>