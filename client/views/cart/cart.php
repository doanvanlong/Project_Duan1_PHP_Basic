<?php
if (sessionLogin_Isset()) { ?>
    <div class="cartcart">
        <?php
        if (!sessionCart_Isset()) {
        ?>
            <div class="cart_rong">
                <div class="cart ">
                    <div class="row">
                        <div class="col-12 pl-0">
                            <div class="cart__inner">
                                <h4 class="cart__inner-productTitle my-3 ">Giỏ hàng</h4>
                            </div>
                            <div class="cart__inner-product-items text-center">
                                <img style="width:180px" src="<?= $CONTENT_CLIENT_URL ?>/img/mascot@2x.png" alt="">
                                <div class="py-3">Không có sản phẩm nào trong giỏ hàng của bạn</div>
                                <a href="<?= $CLIENT_URL ?>" class="btn primary btn-cart-zero my-4">Tiếp tục mua sắm</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php
        } else {
            if(is_array($_SESSION['cart']) && count($_SESSION['cart'])>0){
                $tong=0;
            foreach ($_SESSION['cart'] as $cart){
                $tong+=$cart['so_luong']*$cart['gia_sp'];
            }
            }
        ?>
            <div class="cart">
                <div class="row">
                    <div class="col-9 pl-0">
                        <div class="cart__inner">
                            <h4 class="cart__inner-productTitle my-3 ">Giỏ hàng</h4>
                            <div class="cart__inner-product-heading">
                                <div class="row">

                                    <div class="col-5">
                                        Tất cả (<?= count($_SESSION['cart']) ?> sản phẩm)
                                    </div>
                                    <div class="col-2">Đơn giá</div>
                                    <div class="col-2">Số lượng</div>
                                    <div class="col-2">Thành tiền</div>
                                    <div class="col-1">
                                        <div class="cart__inner-productRemove-all cursor-pointer delete_all_cart" data-toggle="modal" data-target="#modal_xoa_all_cart" title="Click để xoá tất cả sản phẩm trong giỏ hàng">
                                            <i class="fas fa-trash-alt icon-delete"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal hỏi xoá all cart -->
                            <div class="modal fade " id="modal_xoa_all_cart" tabindex="-1" role="dialog" aria-labelledby="modal_xoa_all_cartTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title  " style="font-size:1.6rem !important" id="exampleModalLongTitle">Bạn có muốn xoá tất cả sản phẩm ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="container my-5">
                                            <div class="row">
                                                <button type="button" style="margin-left:20px" class="font-size col-5 py-3 btn-no-accept btn btn-outline-primary btn-no_delete_all_cart text-primary" data-dismiss="modal" aria-label="Close">Không</button>
                                                <button type="button" class="font-size col-5 offset-1 py-3  btn primary btn-accept btn-accept_delete_all_cart text-light">Xoá</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="load_cart">
                                <!-- gọi ajax -->


                            </div>
                            <div id="toast"></div>

                        </div>

                    </div>
                    
                    <div class="col-3 pl-0 load_tong_tien_checkout">
                    <!-- load từ ajax -->
                       
                    </div>
                </div>
            </div>
            
        <?php


        }
        ?>
    </div>
<?php
} else { ?>
    <h3><a href="tai-khoan/login">Vui lòng đăng nhập để xem giỏ hàng</a></h3>
<?php
}
?>