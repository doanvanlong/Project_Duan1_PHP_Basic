<?php

if (!sessionLogin_Isset()) {
    //ko có login
} else {
    $info_kh = khach_hang_Query_One($_SESSION['login']['id_kh']);
    $list_cart = cart_Query_One_Kh($info_kh['id_kh']);
?>
    <div class="row accountCustomer py-4">
        <div class="col-3 ">
            <aside class="account__sidebar  ">
                <div class="account__avatar d-flex align-items-center">
                    <?php
                    if ($info_kh['hinh_anh'] == '') { ?>
                        <img class="account__avatar-img" src="<?= $CONTENT_CLIENT_URL ?>/img/avatar.png" alt="">
                    <?php
                    } else { ?>
                        <img class="account__avatar-img" src="<?= $AVTUSER_UPLOAD ?>/<?= $info_kh['hinh_anh'] ?>" alt="">
                    <?php
                    }
                    ?>
                    <div class="account__avatar-info px-3">
                        <p class="m-0">Tài khoản của</p>
                        <strong class="account__avatar-name"><?= $info_kh['ho_ten']; ?></strong>
                    </div>
                </div>
            </aside>
            <ul class="accountNav py-3">
                <li class="py-4 accountNav-items js-accountNav-items "><a href="profile" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-user"></i>
                        <span>Thông tin tài
                            khoản</span></a></li>
                <li class="py-4 accountNav-items js-accountNav-items"><a href="my_notica" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-bell"></i>
                        <span>Thông báo của tôi</span></a>
                </li>
                <li class="py-4 accountNav-items js-accountNav-items active"><a href="my_order" class="d-flex accountNav-items-link"><svg stroke="currentColor" fill="#a0a0a0" stroke-width="0" viewBox="0 0 24 24" height="2rem" width="2rem" class="mr-3 svg " xmlns="http://www.w3.org/2000/svg">
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
        <div class="col-9">
            <?php
            if (is_array($list_cart) && count($list_cart) > 0) { ?>
                <div class="account__inner">
                    <h3 class="account__inner-heading py-4">
                        Đơn hàng của tôi
                    </h3>
                    <div class="account__inner-content">

                        <table class="table bg-white">
                            <thead>

                                <tr>
                                    <th style="border-top: none !important" scope="col">Mã đơn hàng</th>
                                    <th style="border-top: none !important" scope="col">Ngày mua</th>
                                    <th style="border-top: none !important ;width:40%" scope="col">Sản phẩm</th>
                                    <th style="border-top: none !important" scope="col">Tổng tiền</th>
                                    <th style="border-top: none !important" scope="col">Trạng thái</th>

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
                                foreach ($list_cart as $cart) { ?>
                                    <tr>
                                        <td class="text-primary"><?= $cart['id_hoa_don'] ?></td>
                                        <td><?= $cart['ngay_dat_hang'] ?></td>
                                        <td><?= $cart['ten_sp'] ?></td>
                                        <td><?= number_format($cart['tong_tien'], 0, ',', '.') . 'đ'; ?></td>
                                        <?php if ($cart['trang_thai_don_hang'] == 'daxacnhan') { ?>
                                            <td class="text-danger">Đã xác nhận</td>

                                        <?php
                                        } else if ($cart['trang_thai_don_hang'] == 'dahuy') { ?>
                                            <td class="text-danger">Đã huỷ</td>

                                        <?php
                                        } else if ($cart['trang_thai_don_hang'] == 'dagiaohang') { ?>
                                            <td class="text-danger">Giao hàng thành công</td>

                                        <?php
                                        } else { ?>
                                            <td class="text-danger">
                                                <p>Chưa xác nhận</p>
                                                <p class="btn btn-primary huy_order" data-toggle="modal" data-target="#modal_huy_order" data-id_hoa_don="<?= $cart['id_hoa_don'] ?>">Huỷ</p>
                                            </td>

                                        <?php
                                        }
                                        ?>
                                    </tr>
                                <?php
                                } ?>


                            </tbody>
                        </table>
                    </div>

                </div>
            <?php
            } else { ?>

                <div class="account__inner">
                    <h3 class="account__inner-heading py-4">
                        Đơn hàng của tôi
                    </h3>
                    <div class="account__inner-content">
                        <h4>Bạn chưa có đơn hàng nào.</h4>
                    </div>
                </div>

            <?php
            }
            ?>



        </div>

        <div id="toast"></div>

        <!-- Modal hỏi xoá all cart -->
        <div class="modal fade " id="modal_huy_order" tabindex="-1" role="dialog" aria-labelledby="modal_huy_orderTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  " style="font-size:1.6rem !important" id="exampleModalLongTitle">Bạn có muốn huỷ đơn hàng này ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                    </div>
                    <div class="container my-5">
                        <div class="row">
                            <button type="button" style="margin-left:20px" class="font-size col-5 py-3 btn-no-accept btn btn-outline-primary btn-no_delete_all_cart text-primary" data-dismiss="modal" aria-label="Close">Không</button>
                            <button type="button" class="font-size col-5 offset-1 py-3  btn primary btn-accept btn-accpet_huy_order text-light">Chấp nhận</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
}
?>
<script>
    $('.huy_order').click(function() {
        var id_hoa_don = $(this).data('id_hoa_don');
        $('.btn-accpet_huy_order').click(function() {
            $.post(
                'xu-ly/cart/huy-order.php', {
                    id_hoa_don_huy: id_hoa_don
                },
                function(data) {
                    if (data == 1) {
                        // remove all modal
                        $("#modal_huy_order").remove();
                        $("body").removeClass("modal-open");
                        $("body").attr("style", "");
                        $(".fade").removeClass("modal-backdrop");
                        //toast thông báo
                        function toast({
                            title = "",
                            msg = "",
                            link = "",
                            type = "success",
                            duration = 3000,
                        }) {
                            const main = document.getElementById("toast");
                            if (main) {
                                const toast = document.createElement("div");
                                //auto remove
                                const autoRemoveId = setTimeout(function() {
                                    //trả lại id settimeout
                                    main.removeChild(toast);
                                }, duration + 1000); //2 animation = 4s , settime khi end 1 animation thi clear
                                //remove khi click
                                toast.onclick = function(e) {
                                    if (e.target.closest(".toast__close")) {
                                        main.removeChild(toast);
                                        clearTimeout(autoRemoveId);
                                    }
                                };
                                const icons = {
                                    success: "fas fa-check-circle",
                                    error: "fas fa-exclamation-circle",
                                };
                                const icon = icons[type];
                                const delay = (duration / 1000).toFixed(2);
                                toast.classList.add("toast", `toast--${type}`);
                                toast.style.animation = `slideInLeft ease 0.3s,fadeOut linear 1s ${delay}s forwards`;

                                toast.innerHTML = `
       
        <div class="toast__icon">
        <i class="${icon}"></i>
    </div>
    <div class="toast__body">
    <a href="${link}">
        <h4 class="toast__title">${title}</h4>
        <p class="toast__msg">${msg}</p>
    </a>
    </div>
    <div class="toast__close">
        <i class="fas fa-times"></i>
    </div>
        `;

                                main.appendChild(toast);
                            }
                        }
                        toast({
                            title: "Thành công",
                            msg: "Huỷ đơn hàng thành công!",
                            type: "success",
                            duration: 5000,
                            link: "#",
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1200);
                    }
                }
            )
        })
    })
</script>