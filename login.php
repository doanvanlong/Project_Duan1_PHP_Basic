<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="content/icon/icofont/icofont.min.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="content/lib/carousel/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="content/lib/carousel/assets/owlcarousel/assets/owl.theme.default.min.css">
    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="content/lib/carousel/assets/owlcarousel/owl.carousel.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="admin/content/img/avatar_xt.gif" type="image/x-icon">
    <link rel="stylesheet" href="content/css/base.css">
    <link rel="stylesheet" href="content/css/main.css">
    <link rel="stylesheet" href="content/css/LoginRegister.css">
</head>

<body>

    <nav>
        <div class="container-fluid">
            <div class="navigation">
                <div class="logo">
                    <div class="text__logo">
                        <a href="index.html">
                            <span>LT Smart</span>
                            <img src="" alt="">
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
                <form action="" method="post">
                    <div class="form-group">
                        <label>Đăng Nhập</label>
                        <input type="text" class="form-control form-control-lg"
                            placeholder="Tên đăng nhập/Số điện thoại">
                        <input type="password" class="form-control form-control-lg" placeholder="Mật khẩu">
                    </div>
                    <button type="submit" class="login">đăng nhập</button>
                </form>
                <div class="forgetPass">
                    <div>
                        <span>Bạn chưa có tài khoản?
                            <a href="signup.html">Đăng kí</a>
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
                    <button type="submit" class="loginWidthSocial__inline facebook login">
                        <div><i class="icofont-facebook"></i></div>
                        <div>Facebook</div>
                    </button>
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

</body>

</html>