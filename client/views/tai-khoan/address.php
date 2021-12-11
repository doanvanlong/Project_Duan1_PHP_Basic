<?php

if (!sessionLogin_Isset()) {
    //ko có login
} else {
    $info_kh = khach_hang_Query_One($_SESSION['login']['id_kh']);
?>
    <div class="row accountCustomer py-4">
        <div class="col-3">
            <aside class="account__sidebar ">
                <div class="account__avatar d-flex align-items-center">
                    <?php
                    if ($info_kh['hinh_anh'] == '') {

                    ?>
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
            <ul class="accountNav py-3">
                <li class="py-4 accountNav-items js-accountNav-items "><a href="profile" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-user"></i>
                        <span>Thông tin tài
                            khoản</span></a></li>
                <li class="py-4 accountNav-items js-accountNav-items"><a href="my_notica" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-bell"></i>
                        <span>Thông báo của tôi</span></a>
                </li>
                <li class="py-4 accountNav-items js-accountNav-items"><a href="my_order" class="d-flex accountNav-items-link"><svg stroke="currentColor" fill="#a0a0a0" stroke-width="0" viewBox="0 0 24 24" height="2rem" width="2rem" class="mr-3 svg " xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM21 4H3c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15h-9V6h9v13z">
                            </path>
                        </svg>
                        <span>Quản lý đơn hàng</span></a></li>

                <li class="py-4 accountNav-items js-accountNav-items active"><a href="address" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-map-marker-alt"></i><span>Sổ địa
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
                    Địa chỉ giao hàng
                </h3>
                <div class="account__inner-content">
                    <form action="" id="form_update_address" method="post" enctype="multipart/form">
                        <input type="hidden" name="id_kh" value="<?= $info_kh['id_kh'] ?>">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Họ tên</label>
                            <div class="col-sm-10">
                                <input type="text" name="ho_ten_update_address" value="<?= $info_kh['ho_ten'] ?>" class="form-control" id="inputName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPhone" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">
                                <input type="text" name="so_dien_thoai" value="<?= $info_kh['so_dien_thoai'] ?>" class="form-control" id="inputPhone">
                                <small class="text-danger error-sdt"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="<?= $info_kh['email'] ?>" class="form-control" id="inputEmail">
                                <small class="text-danger error-email"></small>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Địa chỉ</label>
                            <div class="col-sm-10 ">
                                <textarea class="form-control " style="font-size:1.3rem;" name="dia_chi" id="exampleFormControlTextarea1" rows="3"><?= $info_kh['dia_chi'] ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10 py-2">
                                <button type="submit" name="" class="btn btnUpdateProfile primary">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div id="toast"></div>
    </div>

<?php
}
?>
<script>
    $(document).ready(function() {
        //check reg so_dien_thoai
        $(".error-sdt").focus(function() {
            $(".error-sdt").text("");
        });

        $('[name*="so_dien_thoai"]').keyup(function(e) {
            var phone_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
            var phone = $('[name*="so_dien_thoai"]').val();
            if (phone_regex.test(phone)) {
                $(".error-sdt").text("");
            } else {
                $(".error-sdt").text("Vui lòng nhập đúng định dạng số điện thoại");
            }
        });
        //check reg so_dien_thoai
        $(".error-email").focus(function() {
            $(".error-email").text("");
        });
        $('[name*="email"]').keyup(function(e) {
            var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            var email = $('[name*="email"]').val();
            if (email_regex.test(email)) {
                $(".error-email").text("");
            } else {
                $(".error-email").text("Vui lòng nhập đúng định dạng email");
            }
        });
        // Update tài khoản ,thay đổi tên ,mật khẩu
        $("#form_update_address").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "../client/xu-ly/tai-khoan/update-address.php",
                type: "POST",
                contentType: false,
                processData: false,
                data: new FormData(this),
                success: function(data) {
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
                            msg: "Cập nhật thành công!",
                            type: "success",
                            duration: 5000,
                            link: "#",
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1300);
                    }
                }
            })
        });

    })
</script>