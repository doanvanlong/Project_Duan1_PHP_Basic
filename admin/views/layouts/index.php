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
    <!-- ckeditor -->
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

    <!-- favi icon -->

    <link rel="shortcut icon" href="<?= $CONTENT_ADMIN_URL ?>/img/avatar_xt.gif" type="image/x-icon">
    
    <link rel="stylesheet" href="<?= $CONTENT_ADMIN_URL ?>/css/main.css">
    <link rel="stylesheet" href="<?= $CONTENT_ADMIN_URL ?>/css/base.css">
    <link rel="stylesheet" href="<?= $CONTENT_ADMIN_URL ?>/css/toastMessage.css">
    <link rel="stylesheet" href="<?= $CONTENT_ADMIN_URL ?>/css/khuyen-mai.css">

</head>

<body>
    <div class="wrapper">
        <div class="navigation">
            <ul>
                <li class="py-4">
                    <a href="<?= $ADMIN_URL ?>" class="navigation__link d-flex align-items-center">

                        <span><img src="<?= $CONTENT_ADMIN_URL ?>/img/avatar_xt.gif" alt=""></span>
                        <span>
                            <h2 class="logo" style="white-space: nowrap;">LT SMART</h2>
                        </span>
                    </a>
                </li>
                <li class="navigation__items active">
                    <a href="<?= $ADMIN_URL ?>" class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-home"></i></span>
                        <span style="white-space: nowrap;">Trang ch???</span>
                    </a>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-list"></i></span>
                        <span style="white-space: nowrap;">Danh m???c
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="add-danh-muc"><i class="fas fa-circle"></i>Th??m
                            m???i </a>
                        <a class="sub-menu-items d-flex align-items-center" href="list-danh-muc"><i class="fas fa-circle"></i>Danh
                            s??ch</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fab fa-product-hunt"></i></span>
                        <span style="white-space: nowrap;">S???n ph???m
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="add-san-pham"><i class="fas fa-circle"></i>Th??m
                            m???i </a>
                        <a class="sub-menu-items d-flex align-items-center" href="list-san-pham"><i class="fas fa-circle"></i>Danh
                            s??ch</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer ">
                        <span><i class="far fa-newspaper"></i></span>
                        <span style="white-space: nowrap;">Tin t???c
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="news-category"><i class="fas fa-circle"></i>Danh m???c tin t???c</a>
                        <a class="sub-menu-items d-flex align-items-center" href="add-news"><i class="fas fa-circle"></i>Th??m tin t???c</a>
                        <a class="sub-menu-items d-flex align-items-center" href="list-news"><i class="fas fa-circle"></i>Danh s??ch tin t???c</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-bookmark"></i></span>
                        <span style="white-space: nowrap;">Khuy???n m??i
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="ma-giam-gia"><i class="fas fa-circle"></i>M??
                            khuy???n m??i </a>
                        <a class="sub-menu-items d-flex align-items-center" href="giam-gia"><i class="fas fa-circle"></i>Gi???m
                            gi?? s???n ph???m</a>
                        <a class="sub-menu-items d-flex align-items-center" href="deal-soc"><i class="fas fa-circle"></i>Deal
                            s???c</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-users"></i></span>
                        <span style="white-space: nowrap;">Kh??ch h??ng
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="add-user"><i class="fas fa-circle"></i>Th??m
                            m???i </a>
                        <a class="sub-menu-items d-flex align-items-center" href="list-user"><i class="fas fa-circle"></i>Danh
                            s??ch</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-book"></i></span>
                        <span style="white-space: nowrap;">????n h??ng
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="order-new"><i class="fas fa-circle"></i>????n
                            h??ng m???i </a>
                        <a class="sub-menu-items d-flex align-items-center" href="order-confirm"><i class="fas fa-circle"></i>????n
                            h??ng ???? x??c nh???n</a>
                        <a class="sub-menu-items d-flex align-items-center" href="order-delivered"><i class="fas fa-circle"></i>????n
                            h??ng ???? giao</a>
                        <a class="sub-menu-items d-flex align-items-center" href="order-canceled"><i class="fas fa-circle"></i>????n
                            h??ng ???? hu???</a>
                    </div>
                </li>
                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-comment"></i></span>
                        <span style="white-space: nowrap;">B??nh lu???n
                            <span class="box__icon-dropdown"><i class="icon__dropdown fas fa-angle-down"></i></span></span>
                    </div>
                    <div class="sub-menu">
                        <a class="sub-menu-items d-flex align-items-center" href="list-comment"><i class="fas fa-circle"></i>Danh
                            s??ch</a>
                    </div>
                </li>

                <li class="navigation__items">
                    <div class="navigation__link d-flex align-items-center cursor-pointer">
                        <span><i class="fas fa-chart-pie"></i></span>
                        <a href="statistical"><span style="white-space: nowrap; color:var(--dark);">Th???ng k??</span></a>
                    </div>
                </li>

            </ul>
        </div>
        <main class="main">
            <div class="top__bar">
                <div class="toggle">
                    <i class="fas fa-angle-double-left"></i>
                </div>
                <div class="search">
                    <nav class="navbar navbar-light ">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="T??m ki???m ..." aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </nav>
                </div>
                <div class="user ">
                    <div class="dropdown d-flex align-items-center">
                        <?php
                        if (sessionLogin_Isset()) {
                            $id_kh = $_SESSION['login']['id_kh'];
                            $info_kh = khach_hang_Query_One($id_kh);
                            if ($info_kh['hinh_anh'] != '') { ?>
                                <div class="user__dropdown" style="background-image: url('<?= $AVTUSER_UPLOAD ?>/<?=$info_kh['hinh_anh']?>')">
                                </div>
                            <?php
                            } else { ?>
                                <div class="user__dropdown" style="background-image: url('<?= $CONTENT_CLIENT_URL ?>/img/avatar.png')">
                                </div>
                        <?php
                            }
                        }
                        ?>

                        <div class="user__name pl-2 dropdown-toggle" style="cursor: pointer;font-weight: 600;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$info_kh['ho_ten']?></div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">C??i ?????t</a>
                            <a class="dropdown-item" href="client">????ng xu???t</a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="content ">
                <!-- //n???i dung thay ?????i -->
                <?php include $view ?>
                <div id="toast"></div>


            </div>
            <!-- <footer class="footer ">
                B???n quy???n thu???c <span class="text-danger">LT SMART</span> Copyright &copy; 2021 . Trang web
                Designed by <a target="_blank" href="https://github.com/doanvanlong/Duan1">Nh??m 10</a>
            </footer> -->
    </div>
    </main>

    </div>

    <script src="<?= $CONTENT_ADMIN_URL ?>/js/main.js"></script>
    <script src="<?= $CONTENT_ADMIN_URL ?>/js/san-pham.js"></script>
    <script src="<?= $CONTENT_ADMIN_URL ?>/js/tin-tuc.js"></script>
    <script src="<?= $CONTENT_ADMIN_URL ?>/js/khach-hang.js"></script>
    <script src="<?= $CONTENT_ADMIN_URL ?>/js/giam-gia.js"></script>
    <script src="<?= $CONTENT_ADMIN_URL ?>/js/don-hang.js"></script>
    <script src="<?= $CONTENT_ADMIN_URL ?>/js/ma-giam-gia.js"></script>
    <script src="<?= $CONTENT_ADMIN_URL ?>/js/deal-soc.js"></script>
    <script src="<?= $CONTENT_ADMIN_URL ?>/js/comment.js"></script>


</body>

</html>