<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- icon font -->
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/icon/icofont/icofont.min.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/lib/carousel/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/lib/carousel/assets/owlcarousel/assets/owl.theme.default.min.css">
    <!-- javascript -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- carousel js -->
    <script src="<?= $CONTENT_CLIENT_URL ?>/lib/carousel/assets/owlcarousel/owl.carousel.js"></script>
    <!--  boostrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- favi icon -->
    <link rel="SHORTCUT ICON" href="<?= $CONTENT_ADMIN_URL ?>/img/avatar_xt.gif" type="image/x-icon">
    <!-- css  -->
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/base.css">
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/main.css">
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/san-pham-detail.css">
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/cart.css">
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/toastMessage.css">
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/customer.css">
    <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/tin-tuc.css">

</head>

<body>

    <div class="wrapper">
        <!-- header -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <a href="<?= $ROOT_URL ?>/" class="header__logo d-flex align-items-center"><span class="text__logo">LT SMART</span><img style="width:20%" src="<?= $CONTENT_CLIENT_URL ?>/img/logo ltsmart.PNG" alt=""></a>
                        <div class="header__search ">
                            <form class="form-inline my-2 my-lg-0 " id="kq_search" action="search" method="post">
                                <input class="form-control mr-sm-2" autocomplete="off" type="search" name="search" placeholder="T??m ki???m t???i ????y...">
                                <button class="btn btn-light my-2 my-sm-0" type="submit"><i class="icofont-search"></i></button>
                                <ul class="goi-y-search" style="opacity:0;">
                                    <div class="sp_goi_y_data  py-4">

                                    </div>

                                </ul>
                                <ul class="header__keyword-search d-flex ">
                                    <li class="header__keyword-search-items">
                                        iPhone 8
                                    </li>
                                    <li class="header__keyword-search-items">
                                        iPhone X
                                    </li>
                                    <li class="header__keyword-search-items">
                                        iPhone XS
                                    </li>
                                    <li class="header__keyword-search-items">
                                        Galaxy Note 8
                                    </li>
                                    <li class="header__keyword-search-items">
                                        iPhone 13
                                    </li>
                                    <li class="header__keyword-search-items">
                                        Galaxy S10 5G
                                    </li>
                                </ul>
                            </form>

                        </div>
                        <div class="header__right pl-2 d-flex justify-content-around align-items-center">

                            <?php
                            if (sessionLogin_Isset()) {
                                $info_kh = khach_hang_Query_One($_SESSION['login']['id_kh']);
                            ?>
                                <!-- ???? ????ng nh???p -->
                                <div class="header__right-user-login d-flex align-items-center cursor-pointer">
                                    <div class="header__right-user-dropdown">
                                        <ul>
                                            <li><a href="my_order">????n h??ng c???a t??i</a></li>
                                            <li><a href="profile">T??i kho???n c???a t??i</a></li>
                                            <li><a href="tai-khoan/logout">????ng xu???t</a></li>
                                            <?php
                                            if ($info_kh['vai_tro'] == 1) { ?>
                                                <li><a href="admin">Qu???n tr???</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <?php

                                    if ($info_kh['hinh_anh'] != "") {
                                        if ($_SESSION['login']['id_fb'] == "") {
                                            //login = username l???y ???nh t??? Th?? m???c upload
                                    ?>
                                            <!-- l???y ???nh DB ra -->
                                            <div class="header__right-user-avatar mr-2" style="background-image: url('<?= $AVTUSER_UPLOAD ?>/<?= $info_kh['hinh_anh'] ?>');">
                                            <?php
                                        } else {
                                            // login = fb l???y ???nh = link website
                                            ?>
                                                <!-- l???y ???nh DB ra -->
                                                <div class="header__right-user-avatar mr-2" style="background-image: url('<?= $info_kh['hinh_anh'] ?>');">
                                                <?php
                                            }
                                        } else {
                                                ?>
                                                <div class="header__right-user-avatar mr-2" style="background-image: url('<?= $CONTENT_CLIENT_URL ?>/img/avatar.png');">
                                                <?php
                                            }
                                                ?>
                                                </div>
                                                <div class="header__right-user-login-text ">
                                                    <span class="header__right-user-login-title">
                                                        T??i kho???n
                                                    </span>
                                                    <p class="header__right-user-login-name"><?= $info_kh['ho_ten']; ?> <i class="fas fa-caret-down"></i></p>
                                                </div>
                                                </div>
                                            <?php
                                        } else { ?>
                                                <!-- ch??a ????ng nh???p -->
                                                <a href="tai-khoan/login" class="header__right-user text-dark"><i class="icofont-user"></i></a>
                                            <?php

                                        }
                                            ?>
                                            <a href="" class="header__right-notification dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <!-- ?????m th??ng b??o d??ng chung v???i ?????m cart -->
                                                <i class="far fa-bell"></i>
                                                <div class="header__right-cart-count__items count_thong_bao_new text-dark d-flex justify-content-center align-items-center"></div>

                                                <div class="dropdown-menu load_thong_bao_user" aria-labelledby="dropdownMenuLink">
                                                    <h5 class="thong_bao_user-title text-secondary my-2">Th??ng b??o m???i nh???n</h5>
                                                    <div class="thong_bao_user-content ">

                                                    </div>
                                                    <div class="thong_bao_user-footer d-flex justify-content-center font-size-1-2">
                                                        <a href="my_notica">Xem t???t c???</a>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="cart" class="header__right-cart ">
                                                <i class="icofont-cart-alt"></i>
                                                <div class="load_count_cart_index">
                                                    <?php
                                                    if (sessionLogin_Isset()) {
                                                        if (sessionCart_Isset()) {
                                                            if (count($_SESSION['cart']) > 0) { ?>
                                                                <div class="header__right-cart-count__items text-dark d-flex justify-content-center align-items-center">
                                                                    <?php echo count($_SESSION['cart']); ?>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>

                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>

                                            </a>
                                            </div>

                                </div>
                        </div>
                    </div>

        </header>
        <!-- end header -->
        <!-- nav menu  -->
        <nav class="nav">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu d-flex  justify-content-between">
                            <a href="dien-thoai" class="menu__items ">
                                <div class="menu__items-img menu-dien-thoai">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/phone2.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    ??i???n tho???i
                                </div>
                            </a>
                            <!-- <a href="dien-thoai=iphone" class="menu__items">
                                <div class="menu__items-img menu-iphone">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/apple.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Iphone
                                </div>
                            </a>
                            <a href="dien-thoai=samsung" class="menu__items">
                                <div class="menu__items-img menu-samsung">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/phone2.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Samsung
                                </div>
                            </a> -->
                            <a href="phu-kien" class="menu__items">
                                <div class="menu__items-img menu-phu-kien">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/phukien.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Ph??? ki???n
                                </div>
                            </a>

                            <a href="#" class="menu__items">
                                <div class="menu__items-img menu-mua-tra-gop">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/tragop.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Mua tr??? g??p
                                </div>
                            </a>
                            <a href="khuyen-mai" class="menu__items">
                                <div class="menu__items-img menu-khuyen-mai">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/gift.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Khuy???n m??i
                                </div>
                            </a>
                            <a href="re-vo-dich" class="menu__items">
                                <div class="menu__items-img menu-re-vo-dich">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/revodich-01.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    R??? v?? ?????ch
                                </div>
                            </a>
                            <a href="#" class="menu__items">
                                <div class="menu__items-img menu-cu-moi">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/renewphone.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    B??n m??y c?? ?????i m??y m???i
                                </div>
                            </a>
                            <a href="tin-tuc" class="menu__items">
                                <div class="menu__items-img menu-tin-moi">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/newspaper.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Tin m???i
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav menu -->
        <!-- main -->
        <main class="main">
            <div class="container">
                <?php include $view; ?>
            </div>
        </main>
        <!-- end main -->
        <!-- footer -->
        <footer class="footer">
            <div class="footer__social-form">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex">
                            <div class="footer__socical">
                                <a target="_blank" href="https://www.facebook.com/LTsmart-100568199007047/?ref=pages_you_manage" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-facebook"></i>
                                    </div>
                                    <span>Facebook</span>
                                </a>
                                <a href="#" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-twitter"></i>
                                    </div>
                                    <span>Twitter</span>
                                </a>
                                <a href="#" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-google-plus"></i>
                                    </div>
                                    <span>Google++</span>
                                </a>
                                <a href="#" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-instagram"></i>
                                    </div>
                                    <span>Instagram</span>
                                </a>
                                <a href="#" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-youtube-play"></i>
                                    </div>
                                    <span>Youtube</span>
                                </a>
                            </div>
                            <form action="" id="lien_he"  method="post" class="footer__form">
                                <h2 class="footer__form-heading">
                                    ????ng k?? nh???n khuy???n m??i <span>20%</span>
                                </h2>
                                <input type="hidden" name="noidung_lh">
                                <input autocomplete="off" class="footer__form-input" type="text" name="ho_ten_kh_lh" placeholder="Nh???p H??? T??n...">
                                <input autocomplete="off" class="footer__form-input" type="email" name="email_kh_lh" placeholder="Nh???p Email...">
                                <button type="" name="phanhoi" class="footer__form-btn">
                                    <i class="icofont-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer__info">
                            <div class="footer__contact">
                                <h3 class="footer__contact-heading footer__heading">
                                    Li??n h??? ch??ng t??i
                                </h3>
                                <ul class="footer__contact-list">
                                    <li class="footer__contact-items">
                                        <a href="#"><i class="icofont-home"></i>137 Nguy???n Th??? Th???p, Li??n Chi???u ,Tp ???? N???ng</a>
                                    </li>
                                    <li class="footer__contact-items">
                                        <a href="#"><i class="icofont-phone"></i>0888999888</a>
                                    </li>
                                    <li class="footer__contact-items">
                                        <a href="#"><i class="icofont-email"></i>contact.ltsmart@gmail.com</a>
                                    </li>
                                    <li class="footer__contact-items">
                                        <a href="#"><i class="icofont-clock-time"></i>7 ng??y trong tu???n t??? 8:00 s??ng ?????n 9:00 t???i</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__local">
                                <h3 class="footer__local-heading footer__heading">
                                    V??? tr?? c???a h??ng
                                </h3>
                                <ul class="footer__local-list">
                                    <li class="footer__local-items">
                                        <a href="#"> ???? N???ng - Vi???t Nam</a>
                                    </li>
                                    <li class="footer__local-items">
                                        <a href="#">C???n Th?? - Vi???t Nam</a>
                                    </li>
                                    <li class="footer__local-items">
                                        <a href="#">HCM - Vi???t Nam</a>
                                    </li>
                                    <li class="footer__local-items">
                                        <a href="#">H?? N???i - Vi???t Nam</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__service">
                                <h3 class="footer__service-heading footer__heading">
                                    D???ch v??? kh??ch h??ng
                                </h3>
                                <ul class="footer__service-list">
                                    <li class="footer__service-items">
                                        <a href="lien-he"> V??? ch??ng t??i</a>
                                    </li>
                                    <li class="footer__service-items">
                                        <a href="#">D???ch v??? kh??ch h??ng</a>
                                    </li>
                                    <li class="footer__service-items">
                                        <a href="#">Ch??nh s??ch b???o m???t</a>
                                    </li>
                                    <li class="footer__service-items">
                                        <a href="#">T??m ki???m n??ng cao</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__tag">
                                <h3 class="footer__tag-heading footer__heading">
                                    Tag
                                </h3>
                                <ul class="footer__tag-list">
                                    <?php
                                    $list_dm_con = danh_muc_con_QueryAll();
                                    if (count($list_dm_con) > 0) {
                                        foreach ($list_dm_con as $dm_con) { ?>
                                            <li class="footer__tag-items">
                                                <?php
                                                if ($dm_con['id_dm_pro'] == 47) { ?>
                                                    <a href="dien-thoai" class="footer__tag-link">
                                                        <?= $dm_con['ten_sub_dm_pro'] ?>
                                                    </a>
                                                <?php
                                                } else { ?>
                                                    <a href="phu-kien" class="footer__tag-link">
                                                        <?= $dm_con['ten_sub_dm_pro'] ?>
                                                    </a>
                                                <?php
                                                }

                                                ?>
                                            </li>

                                    <?php

                                        }
                                    }
                                    ?>




                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100568199007047");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="<?= $CONTENT_CLIENT_URL ?>/js/main.js"> </script>
    <script src="<?= $CONTENT_CLIENT_URL ?>/js/home.js"> </script>
    <script src="<?= $CONTENT_CLIENT_URL ?>/js/chi-tiet-san-pham.js"> </script>
    <script src="<?= $CONTENT_CLIENT_URL ?>/js/cart.js"> </script>
    <script src="<?= $CONTENT_CLIENT_URL ?>/js/customer.js"> </script>
    <script src="<?= $CONTENT_CLIENT_URL ?>/js/tin-tuc.js"> </script>

    <!-- <script async src="https://dochat.vn/code.js?id=9211205093811877578"></script> -->



</body>

</html>