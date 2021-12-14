<?php
// require_once("./config.php");
require_once '../global.php';
require_once '../model/cart.php';
require_once '../model/pdo.php';

if (isset($_SESSION['id_hoa_don']) || isset($_GET['id-hoa-don'])) {
    $sql = "SELECT * FROM hoa_don WHERE id_hoa_don =?";
    if(isset($_GET['id-hoa-don'])){
        $info_hoa_don = pdo_query_one($sql, $_GET['id-hoa-don']);
        $sql = "SELECT * FROM `hoa_don_chi_tiet` INNER JOIN san_pham ON san_pham.id_sp=hoa_don_chi_tiet.id_sp where id_hoa_don=?";
        $info_sp = pdo_query_one($sql, $_GET['id-hoa-don']);
        $_SESSION['id_hoa_don']=$_GET['id-hoa-don'];
    }else{
        $info_hoa_don = pdo_query_one($sql, $_SESSION['id_hoa_don']);
        $sql = "SELECT * FROM `hoa_don_chi_tiet` INNER JOIN san_pham ON san_pham.id_sp=hoa_don_chi_tiet.id_sp where id_hoa_don=?";
        $info_sp = pdo_query_one($sql, $_SESSION['id_hoa_don']);
    }
   
?>
    <h3 class="text-uppercase my-3">Xác nhận thanh toán</h3>
    <div class="chon_thanh_toan bg-white p-4" style=" box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    border-radius: 2px;">
        <form action="views/cart/vnpay/vnpay_create_payment.php" id="create_form" method="post">
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <label for="order_id">Mã hóa đơn</label>
                        <input class="form-control" readonly id="order_id" name="order_id" type="text" value="<?php if(isset($_SESSION['id_hoa_don'])){echo $_SESSION['id_hoa_don'];}else{echo $_GET['id-hoa-don'];}  ?>" />
                    </div>

                    <div class="form-group">
                        <label for="">Sản phẩm</label>
                        <input class="form-control" id="" readonly name="" type="text" value="<?= $info_sp['ten_sp'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="amount">Số tiền</label>
                        <input class="form-control" id="amount" readonly name="amount" type="number" value="<?= $info_hoa_don['tong_tien'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="order_desc">Nội dung thanh toán</label>
                        <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Thanh toán đơn hàng</textarea>
                    </div>
                    <div class="form-group">
                        <label for="language">Ngôn ngữ</label>
                        <select name="language" id="language" class="form-control">
                            <option value="vn">Tiếng Việt</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label for="bank_code">Ngân hàng</label>
                    </div>
                    <div class="ngan_hang">
                        <input type="radio" hidden name="bank_code" checked value="">
                        <label for="bank_code1" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/ACB.jpg" alt="">
                            <input hidden type="radio" id="bank_code1" name="bank_code" value="ACB">
                        </label>
                        <label for="bank_code2" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/NCB.jpg" alt="">
                            <input hidden type="radio" id="bank_code2" name="bank_code" value="NCB">
                        </label>
                        <label for="bank_code3" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/VARB.jpg" alt="">
                            <input hidden type="radio" id="bank_code3" name="bank_code" value="AGRIBANK">
                        </label>
                        <label for="bank_code4" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/1ad7660d2088ca2b2d56e8fccb7f07c4.png" alt="">
                            <input hidden type="radio" id="bank_code4" name="bank_code" value="SCB">
                        </label>
                        <label for="bank_code5" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/2feb0c1f3f3ec9f38dd4d462883459be.png" alt="">
                            <input hidden type="radio" id="bank_code5" name="bank_code" value="SACOMBANK">
                        </label>
                        <label for="bank_code6" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/EIB.jpg" alt="">
                            <input hidden type="radio" id="bank_code6" name="bank_code" value="EXIMBANK">
                        </label>
                        <label for="bank_code7" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/MSB.jpg" alt="">
                            <input hidden type="radio" id="bank_code7" name="bank_code" value="MSBANK">
                        </label>
                        <label for="bank_code8" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/NAB.jpg" alt="">
                            <input hidden type="radio" id="bank_code8" name="bank_code" value="NAMABANK">
                        </label>
                        <label for="bank_code9" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/viettink.png" alt="">
                            <input hidden type="radio" id="bank_code9" name="bank_code" value="VIETINBANK">
                        </label>
                        <label for="bank_code10" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/vcb.jpg" alt="">
                            <input hidden type="radio" id="bank_code10" name="bank_code" value="VIETCOMBANK">
                        </label>
                        <label for="bank_code11" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/HDB.jpg" alt="">
                            <input hidden type="radio" id="bank_code11" name="bank_code" value="HDBANK">
                        </label>
                        <label for="bank_code12" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/DAB.jpg" alt="">
                            <input hidden type="radio" id="bank_code12" name="bank_code" value="DONGABANK">
                        </label>
                        <label for="bank_code13" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/TPB.jpg" alt="">
                            <input hidden type="radio" id="bank_code13" name="bank_code" value="TPBANK">
                        </label>
                        <label for="bank_code14" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/BIDV.jpg" alt="">
                            <input hidden type="radio" id="bank_code14" name="bank_code" value="BIDV">
                        </label>
                        <label for="bank_code15" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/TCB.jpg" alt="">
                            <input hidden type="radio" id="bank_code15" name="bank_code" value="TECHCOMBANK">
                        </label>
                        <label for="bank_code16" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/VPB.jpg" alt="">
                            <input hidden type="radio" id="bank_code16" name="bank_code" value="VPBANK">
                        </label>
                        <label for="bank_code17" class="box-ngan_hang">
                            <img style="width:90px;" src="<?= $CONTENT_CLIENT_URL ?>/img/MB.jpg" alt="">
                            <input hidden type="radio" id="bank_code17" name="bank_code" value="MBBANK">
                        </label>

                    </div>


                </div>
            </div>



            <!-- <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Post</button> -->
            <button type="submit" name="redirect" id="redirect" class="btn primary text-white checkout_ngan_hang " style="font-size:1.4rem;">Thanh toán </button>
            <div class="btn btn-outline-danger huy-thanh-toan" data-toggle="modal" data-target="#modal_huy_thanh_toan" style="font-size:1.4rem;">Huỷ </div>
        </form>
        <!-- Modal hỏi thanh toán-->
        <div class="modal fade " id="modal_huy_thanh_toan" tabindex="-1" role="dialog" aria-labelledby="modal_huy_thanh_toanTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  " style="font-size:1.6rem !important" id="exampleModalLongTitle">Bạn có muốn thoát mà chưa thanh toán ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                    </div>
                    <div class="container my-5">
                        <div class="row">
                            <button type="button" style="margin-left:20px" class="font-size col-5 py-3 btn-no-accept btn btn-outline-primary btn-no_delete_all_cart text-primary" data-dismiss="modal" aria-label="Close">Không</button>
                            <button type="button" class="font-size col-5 offset-1 py-3  btn primary btn-accept btn-accept_huy_thanh_toan text-light">Chấp nhận</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
    <script>
        $('.box-ngan_hang').click(function() {
            if (!$(this).hasClass('active')) {
                $('.box-ngan_hang').removeClass('active');
                $(this).addClass('active');
            }
        })
       $('.btn-accept_huy_thanh_toan').click(function () {
           setTimeout(function () {
               location.href ="../";
           },800)
       })
    </script>
<?php
} ?>