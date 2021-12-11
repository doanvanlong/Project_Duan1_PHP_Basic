<?php
require_once '../../../global.php';
require_once "config.php";
if (isset($_SESSION['access_token']) || isset($_SESSION['login'])) {
    header('Location:'.$ROOT_URL);//login fb
    exit();
}

$redirectURL = "http://localhost/Duan1/client/views/tai-khoan/fb-callback.php";
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
if (!sessionLogin_Isset()) {//login username
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng Nhập</title>
        <!-- javascript -->
        <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/icon/icofont/icofont.min.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="<?= $CONTENT_ADMIN_URL ?>/img/avatar_xt.gif" type="image/x-icon">
        <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/base.css">
        <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/main.css">
        <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/LoginRegister.css">
        <link rel="stylesheet" href="<?= $CONTENT_CLIENT_URL ?>/css/toastMessage.css">

    </head>

    <body>
        <div class="wrapper">
            <nav>
                <div class="container">
                    <div class="navigation">
                        <div class="logo">
                            <div class="text__logo">
                                <a href="">
                                    <span>LT Smart</span>
                                </a>
                            </div>
                            <span class="logo__content">Đăng nhập</span>
                        </div>
                        <div class="support">
                            <div>
                                <a href=""><span>Cần trợ giúp?</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div style="background-color: var(--primary-color);">
                <div class="container__body">
                    <div class="form">
                        <form action="<?= $CLIENT_URL ?>/xu-ly/tai-khoan/login.php" id="login" method="post">
                            <div class="form-group">
                                <label>Đăng Nhập</label>
                                <input type="text" class="form-control form-control-lg" name="username-login" placeholder="Tên đăng nhập">
                                <small id="error-username-login" class="form-text text-danger "></small>

                                <input type="password" name="password-login" class="form-control form-control-lg" placeholder="Mật khẩu">
                                <small id="error-password-login" class="form-text text-danger "></small>

                            </div>
                            <button type="submit" class="login">đăng nhập</button>
                        </form>
                        <div class="forgetPass">
                            <div>
                                <span>Bạn chưa có tài khoản?
                                    <a href="register.php">Đăng kí</a>
                                </span>
                            </div>
                            <div>
                                <span>
                                    <a href="">Quên mật khẩu</a>
                                </span>
                            </div>
                        </div>
                        <div class="or">
                            <span>Hoặc</span>
                        </div>
                        <div class="loginWidthSocial">
                            <a href="<?=$loginURL;?>"  class="loginWidthSocial__inline facebook login">
                                <div><i class="icofont-facebook"></i></div>
                                <div>Facebook</div>
                            </a>
                            <button type="submit" class="loginWidthSocial__inline google login">
                                <div><i class="icofont-google-plus"></i></div>
                                <div>Google</div>
                            </button>
                            <button type="submit" class="loginWidthSocial__inline apple login">
                                <div><i class="icofont-brand-apple"></i></div>
                                <div>Apple</div>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <footer>
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
                                <div id="toast"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="<?= $CONTENT_CLIENT_URL ?>/js/tai-khoan.js"></script>
    </body>

    </html>
<?php
} else {
    header('location:' . $ROOT_URL);
}
?>