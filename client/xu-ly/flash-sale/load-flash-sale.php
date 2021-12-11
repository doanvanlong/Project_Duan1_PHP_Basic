<?php
require_once '../../../global.php';
require_once '../../../model/san-pham.php';
require_once '../../../model/khuyen-mai.php';
require_once '../../../model/rating.php';


?>
<div class="row ">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $row = 12;
    $from = ($page - 1) * $row;

    $sql = "SELECT * FROM `san_pham` INNER JOIN giam_gia 
        ON san_pham.id_sp=giam_gia.id_sp INNER JOIN khuyen_mai 
        on khuyen_mai.id_khuyen_mai=giam_gia.id_khuyen_mai 
        where khuyen_mai.tinh_trang=1 ";
    $list_flash_sale = pdo_query($sql);
    $count = count($list_flash_sale);
    $total_page = ceil($count / $row);
    $sql .= " LIMIT $from,$row";
    $list_flash_sale = pdo_query($sql);
    if (count($list_flash_sale) > 0) {
        foreach ($list_flash_sale as $flash_sale) { ?>
            <div class="col-3 my-4">
                <a href="san-pham?id=<?= $flash_sale['id_sp'] ?>&name=<?= $flash_sale['ten_sp'] ?>" class="tab__menu-product-content-newproduct">
                    <div class="tab__menu-product-content-newproduct-img" style="background-image: url('<?= $CONTENT_UPLOAD ?>/<?= $flash_sale['hinh_anh'] ?>')">

                        <!-- Nhãn giảm giá -->
                        <?php
                        $list_giam_gia = giam_gia_Query_All_Sp();
                        if (count($list_giam_gia) > 0) {
                            foreach ($list_giam_gia as $giam_gia) {
                                if ($giam_gia['id_sp'] == $flash_sale['id_sp']) {
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
                            <?= $flash_sale['ten_sp'] ?>
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
                                if (in_array($flash_sale['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                    //id sp nằm trong giảm giá
                                    if (count($list_giam_gia) > 0) {
                                        foreach ($list_giam_gia as $giam_gia) {
                                            if ($giam_gia['id_sp'] == $flash_sale['id_sp']) {
                                                if ($giam_gia['id_loai_giam_gia_tien'] == 1) {
                                                    // %
                                                    echo So_Tien_Giam_Phan_Tram($giam_gia['muc_giam'], $flash_sale['don_gia']);
                                ?>
                                                <?php
                                                } else {
                                                    //số tiền
                                                    echo So_Tien_Giam_Gia_Tien($flash_sale['don_gia'], $giam_gia['muc_giam']);
                                                ?>

                                <?php
                                                }
                                            }
                                        }
                                    }
                                } else {
                                    //id sp ko nằm trong gg
                                    echo number_format($flash_sale['don_gia'], 0, ',', '.') . '&nbsp;đ';
                                }
                                ?>

                            </b>
                            <strike class="tab__menu-product-newproduct-oldprice pt-2">
                                <?php
                                $list_giam_gia = giam_gia_Query_All_Sp();
                                if (in_array($flash_sale['id_sp'], array_column($list_giam_gia, 'id_sp')) == true) {
                                    //id sp nằm trong giảm giá
                                    if (count($list_giam_gia) > 0) {
                                        foreach ($list_giam_gia as $giam_gia) {
                                            if ($giam_gia['id_sp'] == $flash_sale['id_sp']) {
                                                // nếu sp có giảm giá mới in ra giá củ 
                                                echo  number_format($flash_sale['don_gia'], 0, ',', '.') . 'đ';
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
    }
    ?>


</div>
</div>
<nav aria-label="Page navigation example " style="margin-top:30px">
    <ul class="pagination justify-content-center">

        <?php
        if ($page > 1) {
            //previous
            //nếu page >1 là hiện nút page ,và  id= biến prev =page -1
            $prev = $page - 1; ?>
            <li class="page-item " data-page_fl="1">
                <p class="page-link ">First</i></p>
            </li>

            <li class="page-item " data-page_fl="<?= $prev ?>">
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
            <li class="page-item " data-page_fl="<?= $i ?>">
                <p class="page-link <?= $active ?>"><?= $i ?></p>
            </li>
        <?php
        }

        if ($page < $total_page) {
            //nếu page hiện tại bé tổng số page hiện tại thì ++ page
            $page++;
        ?>

            <li class="page-item " data-page_fl="<?= $page ?>">
                <p class="page-link "><span aria-hidden="true">&raquo;</span></p>
            </li>
            <li class="page-item " data-page_fl="<?= $count ?>">
                <p class="page-link ">Last</i></p>
            </li>
        <?php
        }
        ?>

    </ul>
</nav>
<script>
    function load_sp_flash_sale(page) {
        $.ajax({
            url: 'xu-ly/flash-sale/load-flash-sale.php',
            data: {
                page: page
            },
            type: 'GET',
            success: function(data) {
                $('.load_sp_fl').html(data);
            }
        })
    }
    $('.page-item').click(function() {
        var page = $(this).data("page_fl");
        load_sp_flash_sale(page);

    })
</script>

<?php

?>