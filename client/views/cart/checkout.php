<div class="cart">
    <div" class="row">
        <div class="col-9 pl-0">
            <div class="cart__inner">
                <h4 class="cart__inner-productTitle my-3 ">Thông tin thanh toán</h4>
                <ul class="ul_checkout">
                    <li>
                        <h3 class="pt-4 pl-4">1. Thông tin về sản phẩm</h3>
                        <?php
                        
                        foreach ($_SESSION['cart'] as $cart) {
                            $thanh_tien = $cart['so_luong'] * $cart['gia_sp'];
                        ?>
                            <div class="cart__inner-product-items">
                                <div class="row  align-items-center">
                                    <div class="col-4">
                                        <div class="cart__inner-product-items-imgName d-flex align-items-center ">
                                            <div class="cart__inner-product-items-img">
                                                <img src="<?= $cart['hinh_anh'] ?>" alt="">
                                            </div>
                                            <div class="cart__inner-product-items-name ">
                                                <a target="_blank" class="text-overflow" href="${item.url}"><?= $cart['ten_sp'] ?></a>
                                                <div>Số lượng : <b> <?= $cart['so_luong'] ?></b></div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div>Màu : <b><?= $cart['mau_sac'] ?></b></div>
                                    </div>
                                    <div class="col-3">
                                        <div>Dung lượng : <b> <?= $cart['dung_luong'] ?></b> GB</div>
                                    </div>

                                    <div class="col-3">
                                        <div style="color:var(--primary-color);"><?= number_format($thanh_tien, 0, ',', '.') . 'đ' ?></div>
                                    </div>

                                </div>
                            </div>
                        <?php

                        }
                        ?>
                    </li>
                    <li class="px-4">
                        <h3 class="py-3">2. Chọn hình thức thanh toán</h3>
                        <div class="lua_chon_checkout">
                            <ul>
                                <li >
                                    <label for="check1" class="d-flex align-items-center cursor-pointer">
                                        <input type="radio" value="0" checked id="check1" name="checkout">
                                        <img class="px-3" src="<?= $CONTENT_CLIENT_URL ?>/img/icon-payment-method-cod.svg" alt="">
                                        <div>Thanh toán tiền mặt khi nhận hàng</div>
                                    </label>
                                </li>
                                <li >
                                    <label for="check2" class="d-flex align-items-center cursor-pointer">
                                        <input type="radio" value="1" id="check2" name="checkout">
                                        <img class="px-3" src="<?= $CONTENT_CLIENT_URL ?>/img/icon-payment-method-atm.svg" alt="">
                                        <div>Thẻ ATM nội địa/Internet Banking</div>
                                    </label>
                                </li>
                            </ul>
                        </div>

                    </li>
                </ul>

                <div id="toast"></div>

            </div>

        </div>

        <div class="col-3 pl-0 load_tong_tien_checkout-done">
            <!-- load từ ajax -->

        </div>
    </form>
</div>
<script>
    $('.ul.checkout li .load_cart .col-1').hide();
</script>