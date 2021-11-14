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
</head>

<body>
    <div class="wrapper">
        <!-- header -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <a href="<?=$ROOT_URL?>/" class="header__logo d-flex align-items-center"><span class="text__logo">LT SMART</span><img style="width:20%" src="<?= $CONTENT_CLIENT_URL ?>/img/logo ltsmart.PNG" alt=""></a>
                        <div class="header__search ">
                            <form class="form-inline my-2 my-lg-0 ">
                                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm tại đây...">
                                <button class="btn btn-light my-2 my-sm-0" type="submit"><i class="icofont-search"></i></button>
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
                            <!-- <a href="#" class="header__right-user text-dark"><i class="icofont-user"></i></a> -->
                            <div class="header__right-user-login d-flex align-items-center cursor-pointer">
                                <div class="header__right-user-avatar mr-2" style="background-image: url('<?= $CONTENT_ADMIN_URL ?>/img/user.jpg');">
                                </div>
                                <div class="header__right-user-login-text ">
                                    <span class="header__right-user-login-title">
                                        Tài khoản
                                    </span>
                                    <p class="header__right-user-login-name">Long Đoàn <i class="fas fa-caret-down"></i></p>
                                </div>
                            </div>
                            <a href="#" class="header__right-notification"><i class="far fa-bell"></i>
                                <!-- đếm thông báo dùng chung với đếm cart -->
                                <div class="header__right-cart-count__items text-dark d-flex justify-content-center align-items-center">
                                    2</div>
                            </a>
                            <a href="#" class="header__right-cart "><i class="icofont-cart-alt"></i>
                                <div class="header__right-cart-count__items text-dark d-flex justify-content-center align-items-center">
                                    2</div>
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
                        <div class="menu d-flex  justify-content-around">
                            <div class="menu__items active">
                                <div class="menu__items-img">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/phone2.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Điện thoại
                                </div>
                            </div>
                            <div class="menu__items">
                                <div class="menu__items-img">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/apple.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Iphone
                                </div>
                            </div>
                            <div class="menu__items">
                                <div class="menu__items-img">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/phone2.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Samsung
                                </div>
                            </div>
                            <div class="menu__items">
                                <div class="menu__items-img">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/phukien.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Phụ kiện
                                </div>
                            </div>

                            <div class="menu__items">
                                <div class="menu__items-img">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/tragop.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Mua trả góp
                                </div>
                            </div>
                            <div class="menu__items">
                                <div class="menu__items-img">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/gift.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Khuyến mãi
                                </div>
                            </div>
                            <div class="menu__items">
                                <div class="menu__items-img">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/revodich-01.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Rẻ vô địch
                                </div>
                            </div>
                            <div class="menu__items">
                                <div class="menu__items-img">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/renewphone.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Bán máy cũ đổi máy mới
                                </div>
                            </div>
                            <div class="menu__items">
                                <div class="menu__items-img">
                                    <img src="<?= $CONTENT_CLIENT_URL ?>/img/newspaper.svg" alt="">
                                </div>
                                <div class="menu__items-text">
                                    Tin mới
                                </div>
                            </div>

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
                                <a href="" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-facebook"></i>
                                    </div>
                                    <span>Facebook</span>
                                </a>
                                <a href="" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-twitter"></i>
                                    </div>
                                    <span>Twitter</span>
                                </a>
                                <a href="" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-google-plus"></i>
                                    </div>
                                    <span>Google++</span>
                                </a>
                                <a href="" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-instagram"></i>
                                    </div>
                                    <span>Instagram</span>
                                </a>
                                <a href="" class="footer__socical-link">
                                    <div class="footer__socical-btn">
                                        <i class="icofont-youtube-play"></i>
                                    </div>
                                    <span>Youtube</span>
                                </a>
                            </div>
                            <form action="" method="post" class="footer__form">
                                <h2 class="footer__form-heading">
                                    Đăng ký nhận khuyến mãi <span>20%</span>
                                </h2>
                                <input autocomplete="off" class="footer__form-input" type="text" name="tenkh" placeholder="Nhập Họ Tên...">
                                <input autocomplete="off" class="footer__form-input" type="email" name="emailkh" placeholder="Nhập Email...">
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
                                    Liên hệ chúng tôi
                                </h3>
                                <ul class="footer__contact-list">
                                    <li class="footer__contact-items">
                                        <a href=""><i class="icofont-home"></i>137 Nguyễn Thị Thập, Liên Chiểu ,Tp Đà Nẵng</a>
                                    </li>
                                    <li class="footer__contact-items">
                                        <a href=""><i class="icofont-phone"></i>0888999888</a>
                                    </li>
                                    <li class="footer__contact-items">
                                        <a href=""><i class="icofont-email"></i>contact.ltsmart@gmail.com</a>
                                    </li>
                                    <li class="footer__contact-items">
                                        <a href=""><i class="icofont-clock-time"></i>7 ngày trong tuần từ 8:00 sáng đến 9:00 tối</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__local">
                                <h3 class="footer__local-heading footer__heading">
                                    Vị trí cửa hàng
                                </h3>
                                <ul class="footer__local-list">
                                    <li class="footer__local-items">
                                        <a href=""> Đà Nẵng - Việt Nam</a>
                                    </li>
                                    <li class="footer__local-items">
                                        <a href="">Cần Thơ - Việt Nam</a>
                                    </li>
                                    <li class="footer__local-items">
                                        <a href="">HCM - Việt Nam</a>
                                    </li>
                                    <li class="footer__local-items">
                                        <a href="">Hà Nội - Việt Nam</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__service">
                                <h3 class="footer__service-heading footer__heading">
                                    Dịch vụ khách hàng
                                </h3>
                                <ul class="footer__service-list">
                                    <li class="footer__service-items">
                                        <a href=""> Về chúng tôi</a>
                                    </li>
                                    <li class="footer__service-items">
                                        <a href="">Dịch vụ khách hàng</a>
                                    </li>
                                    <li class="footer__service-items">
                                        <a href="">Chính sách bảo mật</a>
                                    </li>
                                    <li class="footer__service-items">
                                        <a href="">Tìm kiếm nâng cao</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__tag">
                                <h3 class="footer__tag-heading footer__heading">
                                    Tag
                                </h3>
                                <ul class="footer__tag-list">
                                    <li class="footer__tag-items">
                                        <a href="index.php?page_layout=danhmucsanpham&id=8" class="footer__tag-link">
                                            Iphone
                                        </a>
                                    </li>
                                    <li class="footer__tag-items">
                                        <a href="index.php?page_layout=danhmucsanpham&id=5" class="footer__tag-link">
                                            Samsung
                                        </a>
                                    </li>
                                    <li class="footer__tag-items">
                                        <a href="index.php?page_layout=danhmucsanpham&id=13" class="footer__tag-link">
                                            Oppo
                                        </a>
                                    </li>
                                    <li class="footer__tag-items">
                                        <a href="index.php?page_layout=nhucau&id=1" class="footer__tag-link">
                                            Vivo
                                        </a>
                                    </li>
                                    <li class="footer__tag-items">
                                        <a href="#" class="footer__tag-link">
                                            Realme
                                        </a>
                                    </li>
                                    <li class="footer__tag-items">
                                        <a href="index.php?page_layout=danhmucsanpham&id=12" class="footer__tag-link">
                                            Xiaomi
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <script src="<?= $CONTENT_CLIENT_URL ?>/js/main.js"> </script>

</body>

</html>