<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- css font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- gg chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- boostrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- favi icon -->
    <link rel="shortcut icon" href="<?= $CONTENT_ADMIN_URL ?>/img/avatar_xt.gif" type="image/x-icon">
    <link rel="stylesheet" href="<?= $CONTENT_ADMIN_URL ?>/css/main.css">
    <link rel="stylesheet" href="<?= $CONTENT_ADMIN_URL ?>/css/base.css">
    <link rel="stylesheet" href="<?= $CONTENT_ADMIN_URL ?>/css/toastMessage.css">
</head>

<body>
    <div class="wrapper">
        <div class="navigation">
            <ul>
                <li class="py-4">
                    <a href="<?= $ADMIN_URL ?>" class="navigation__link d-flex align-items-center">
                        <img src="<?= $CONTENT_ADMIN_URL ?>/img/avatar_xt.gif" alt="">
                        <span>
                            <h2 class="logo" style="white-space: nowrap;">LT SMART</h2>
                        </span>
                    </a>
                </li>
                <li class="navigation__items active">
                    <a href="<?= $ADMIN_URL; ?>" class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-home"></i></span>
                        <span style="white-space: nowrap;">Trang chủ</span>
                    </a>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-list"></i></span>
                        <span style="white-space: nowrap;">Danh mục
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="index.php?act=add-danh-muc"><i class="fas fa-circle"></i>Thêm
                            mới </a>
                        <a class="sub-menu-items d-flex align-items-center" href="list-danh-muc"><i class="fas fa-circle"></i>Danh
                            sách</a>
                    </div>
                </li>

                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fab fa-product-hunt"></i></span>
                        <span style="white-space: nowrap;">Sản phẩm
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Thêm
                            mới </a>
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Danh
                            sách</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer ">
                        <span><i class="far fa-newspaper"></i></span>
                        <span style="white-space: nowrap;">Tin tức
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Thêm
                            tin </a>
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Danh
                            sách</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-bookmark"></i></span>
                        <span style="white-space: nowrap;">Khuyến mãi
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Mã
                            khuyến mãi </a>
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Giảm
                            giá sản phẩm</a>
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Deal
                            sốc</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-users"></i></span>
                        <span style="white-space: nowrap;">Khách hàng
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Thêm
                            mới </a>
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Danh
                            sách</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-book"></i></span>
                        <span style="white-space: nowrap;">Đơn hàng
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Đơn
                            hàng mới </a>
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Đơn
                            hàng đã xác nhận</a>
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Đơn
                            hàng đã giao</a>
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Đơn
                            hàng đã huỷ</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-comment"></i></span>
                        <span style="white-space: nowrap;">Bình luận
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Bình
                            luận mới </a>
                        <a class="sub-menu-items d-flex align-items-center" href="#"><i class="fas fa-circle"></i>Danh
                            sách</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="far fa-images"></i></span>
                        <span style="white-space: nowrap;">Banner
                        </span>
                    </div>

                </li>

                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-chart-pie"></i></span>
                        <span style="white-space: nowrap;">Thống kê</span>
                    </div>
                </li>

            </ul>
        </div>
        