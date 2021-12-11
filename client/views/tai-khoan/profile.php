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
                    if ($info_kh['hinh_anh'] == '') { ?>
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
                <li class="py-4 accountNav-items js-accountNav-items active"><a href="profile" class="d-flex accountNav-items-link"><i class="icon__accoutNav fas fa-user"></i>
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
                    Thông tin tài khoản
                </h3>
                <div class="account__inner-content">
                    <form action="" id="form_update_profile" method="post" enctype="multipart/form">
                        <input type="hidden" name="id_kh" value="<?= $info_kh['id_kh'] ?>">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Họ tên</label>
                            <div class="col-sm-10">
                                <input type="text" name="ho_ten" value="<?= $info_kh['ho_ten'] ?>" class="form-control">
                            </div>
                        </div>
                        <?php
                        if ($_SESSION['login']['id_fb'] == "") { ?>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Tên đăng nhập</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="username" value="<?= $info_kh['username'] ?>" class="form-control">
                                </div>
                            </div>
                        <?php
                        } else {
                        }
                        ?>


                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">
                                <input type="text" name="so_dien_thoai" value="<?= $info_kh['so_dien_thoai'] ?>" class="form-control">
                                <small class="text-danger error-sdt"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="<?= $info_kh['email'] ?>" class="form-control">
                                <small class="text-danger error-email"></small>
                            </div>
                        </div>
                        <?php
                        if ($_SESSION['login']['id_fb'] == "") {
                            //upload

                        ?>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Hình ảnh</label>
                                <div class="col-sm-10">
                                    <input type="file" name="hinh_anh">
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" name="hidden_changePass" class="form-check-input js-check-hidden_changePassword" id="exampleCheck1">
                                        <label class="form-check-label pl-3" for="exampleCheck1">Thay đổi mật
                                            khẩu</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">

                                </div>
                            </div>
                            <div class="hidden_changePassword js-hidden_changePassword">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Mật khẩu cũ</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="mat_khau" class="form-control" placeholder="Nhập mật khẩu cũ">
                                        <small class="text-danger error-mat_khau_cu"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Mật khẩu mới</label>
                                    <div class="col-sm-10 box-show_pass">
                                        <div class="show_pass"><i class="far fa-eye"></i></div>
                                        <div class="hide_pass"><i class="fas fa-eye-slash"></i></div>
                                        <input type="password" autocomplete="off" name="mat_khau_moi" class="form-control" placeholder="Nhập mật khẩu mới">
                                        <small class="text-danger error-mat_khau_moi"></small>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label ">Nhập lại</label>
                                    <div class="col-sm-10 box-show_pass">
                                        <div class="show_pass1"><i class="far fa-eye"></i></div>
                                        <div class="hide_pass1"><i class="fas fa-eye-slash"></i></div>
                                        <input type="password" autocomplete="off" name="re_mat_khau_moi" class="form-control" placeholder="Nhập lại mật khẩu mới">
                                        <small class="text-danger error-re_mat_khau_cu"></small>

                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                            //link
                        ?>
                        <?php
                        }

                        ?>



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