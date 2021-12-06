<?php
if (!sessionLogin_Isset()) {
} else {
    $info_kh = khach_hang_Query_One($_SESSION['login']['id_kh'])
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
                <li class="py-4 accountNav-items js-accountNav-items active"><a href="my_notica" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-bell"></i>
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
        <div class="col-9">
            <div class="account__inner">
                <h3 class="account__inner-heading py-4">
                    Thông báo của tôi
                </h3>
                <input type="hidden" name="id_kh" value="<?= $info_kh['id_kh'] ?>">
                <div class="account__inner-content">
                    <table class="table table-notica">
                        <tbody>
                            <?php
                            $list_thong_bao = thong_bao_detail_Query_All($info_kh['id_kh']);
                            if (is_array($list_thong_bao) && count($list_thong_bao) > 0) {
                                foreach ($list_thong_bao as $thong_bao) { ?>
                                    <tr>
                                        <td><?= $thong_bao['ngay_thong_bao'] ?></td>
                                        <td><?= $thong_bao['noi_dung'] ?></td>
                                        <td>
                                            <p class="text-primary xoa_notica cursor-pointer" data-id_notica="<?= $thong_bao['id_thong_bao_detail'] ?>">Xoá</p>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else { ?>
                                <tr>
                                    <td><h4>Bạn chưa có thông báo nào</h4></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="toast"></div>
        </div>

    <?php
}
    ?>
    <style>
        .table-notica th,
        td {
            border-top: 0 !important;
        }
    </style>
    <script>
        $('.xoa_notica').click(function() {
            var id_thong_bao = ($(this).data('id_notica'));
            var id_kh = $('[name*="id_kh"]').val();
            $.post(
                'xu-ly/home/xoa-thong-bao.php', {
                    id_thong_bao_xoa: id_thong_bao,
                    id_kh: id_kh
                },
                function(data) {
                    if (data == 1) {
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
                            msg: "Xoá thành công!",
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
    </script>