<div class="row">
    <div class="col pl-0">
        <div class="cart__inner " style="">
            <h4 class="cart__inner-productTitle mb-4">Đặt hàng thành công</h4>
            <div class="">
                <div class="cart__inner-product-heading p-5">
                    <h4>Đơn hàng của bạn đã đặt thành công ! </h4>
                    <?php if (isset($_SESSION['id_hoa_don'])) { ?>
                        <p>Mã đơn hàng của bạn là <b class="alert alert-success py-2 px-4"><?php echo $_SESSION['id_hoa_don']; ?></b></p>
                        <a class="btn btn-outline-info" style="font-size:1.3rem" href="<?=$CLIENT_URL?>/my_order">Xem đơn hàng</a>
                    <?php
                    }
                    ?>
                    <a class="btn btn-outline-dark" style="font-size:1.3rem" href="<?= $ROOT_URL ?>">Quay về trang chủ</a>

                </div>
            </div>
        </div>
    </div>
</div>