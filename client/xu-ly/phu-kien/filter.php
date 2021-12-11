<?php

require_once '../../../model/danh-muc.php';
require_once '../../../model/khuyen-mai.php';
require_once '../../../model/rating.php';
require_once '../../../model/san-pham.php';
require_once '../../../global.php';



if (isset($_POST['page'])) {
    $page = $_POST['page'];
} else {
    $page = 1;
}
$row = 12;
$from = ($page - 1) * $row;
$sql = "SELECT * FROM sub_danh_muc_pro INNER JOIN san_pham 
    on san_pham.id_sub_dm_pro =sub_danh_muc_pro.id_sub_dm_pro 
    where san_pham.id_dm_pro = 48 ";

if (isset($_POST['dm_phu_kien'])) {
    $id_sub_dm_pro = $_POST['dm_phu_kien'];
    $sql .= " AND  san_pham.id_sub_dm_pro = $id_sub_dm_pro ";
}
$list_phu_kien = pdo_query($sql);
$count = count($list_phu_kien);
$total_page = ceil($count / $row);
$sql .= " LIMIT $from,$row";
$list_phu_kien = pdo_query($sql);
// echo $count;
// echo $total_page;
?>
<div class="row"><?php
                    foreach ($list_phu_kien as $phu_kien) { ?>
        <div class="col-3 my-5">
            <a href="san-pham?id=<?= $phu_kien['id_sp'] ?>&name=<?= $phu_kien['ten_sp'] ?>" class="tab__menu-product-content-newproduct">
                <div class="tab__menu-product-content-newproduct-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $phu_kien['hinh_anh'] ?>')">

                    <!-- Nhãn giảm giá -->
                    <?php
                        $list_giam_gia = giam_gia_Query_All_Sp();
                        if (count($list_giam_gia) > 0) {
                            foreach ($list_giam_gia as $giam_gia) {
                                if ($giam_gia['id_sp'] == $phu_kien['id_sp']) {
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
                    <!-- <span class="tab__menu-product-content-newproduct-checkin-label">Giảm 300k - Check in
                                     </span> -->
                    <!-- <span class="tab__menu-product-content-newproduct-installment-label">Trả góp 0%</span> -->
                </div>
                <div class="px-4 pt-1 pb-2">
                    <!-- <div class="tab__menu-product-newproduct-rate">
                                          <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                          </div> -->
                    <p class="tab__menu-product-newproduct-name text-overflow  mb-2">
                        <?= $phu_kien['ten_sp'] ?>
                    </p>
                    <!-- <span class="tab__menu-product-newproduct-code-label">Giảm 100K</span> -->
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
                        }
                    ?>
                    <!-- <span class="tab__menu-product-newproduct-deal-label">Mua kèm Deal sốc</span> -->
                    <div class="tab__menu-product-newproduct-price d-flex">
                        <b class="tab__menu-product-newproduct-newprice pt-2">
                            <?php
                            $list_giam_gia = giam_gia_Query_All_Sp();
                            if (in_array($phu_kien['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                //id sp nằm trong giảm giá
                                if (count($list_giam_gia) > 0) {
                                    foreach ($list_giam_gia as $giam_gia) {
                                        if ($giam_gia['id_sp'] == $phu_kien['id_sp']) {
                                            if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                // %
                                                echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $phu_kien['don_gia']);
                            ?>
                                            <?php
                                            } else {
                                                //số tiền
                                                echo So_Tien_Giam_Gia_Tien($phu_kien['don_gia'], $giam_gia['muc_giam']);
                                            ?>

                            <?php
                                            }
                                        }
                                    }
                                }
                            } else {
                                //id sp ko nằm trong gg
                                echo number_format($phu_kien['don_gia'], 0, ',', '.') . '&nbsp;đ';
                            }
                            ?>

                        </b>
                        <strike class="tab__menu-product-newproduct-oldprice pt-2">
                            <?php
                            $list_giam_gia = giam_gia_Query_All_Sp();
                            if (in_array($phu_kien['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                //id sp nằm trong giảm giá
                                if (count($list_giam_gia) > 0) {
                                    foreach ($list_giam_gia as $giam_gia) {
                                        if ($giam_gia['id_sp'] == $phu_kien['id_sp']) {
                                            // nếu sp có giảm giá mới in ra giá củ 
                                            echo  number_format($phu_kien['don_gia'], 0, ',', '.') . 'đ';
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
            <li class="page-item " data-id="1">
                <p class="page-link ">First</i></p>
            </li>

            <li class="page-item " data-id="<?= $prev ?>">
                <p class="page-link "> <span aria-hidden="true">&laquo;</span></p>
            </li>
            <?php
        }
        for ($i = 1; $i <= $total_page; $i++) {
            $active = "";
            if ($i == $page) {
                $active = "active";
            ?>
            <?php
            } ?>
            <li class="page-item " data-id="<?= $i ?>">
                <p class="page-link <?= $active ?>"><?= $i ?></p>
            </li>
        <?php
        }

        if ($page < $total_page) {
            //nếu page hiện tại bé tổng số page hiện tại thì ++ page
            $page++;
        ?>

            <li class="page-item " data-id="<?= $page ?>">
                <p class="page-link "><span aria-hidden="true">&raquo;</span></p>
            </li>
            <li class="page-item " data-id="<?= $total_page ?>">
                <p class="page-link ">Last</i></p>
            </li>
        <?php
        }
        ?>

    </ul>
</nav>
<script>
    function filter_phu_kien(page) {
        $(".load_filter_phu_kien").html("<div id='loading' style=''></div>");
        var dm_phu_kien = get_Class_Phu_Kien_Lay_Val("filter_phu_kien");

        $.ajax({
            url: "xu-ly/phu-kien/filter.php",
            type: "POST",
            data: {
                page: page,
                dm_phu_kien: dm_phu_kien
            },
            success: function(data) {
                if (data != "") {
                    setTimeout(function() {
                        $(".load_filter_phu_kien").html(data);
                    }, 300);
                } else {
                    setTimeout(function() {
                        $(".load_filter_phu_kien").html(`
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
    function get_Class_Phu_Kien_Lay_Val(className) {
        var filter = $("." + className + ":checked").val();
        return filter;
    }

    // selector . filter
    $(".filter_phu_kien").click(function() {
        // click chọn checked radio thfi gọi hàm gửi dữ liệu search đi
        filter_phu_kien();
    });
    $('.page-item').click(function() {
        var page = $(this).data("id");
        filter_phu_kien(page);

    })
</script>