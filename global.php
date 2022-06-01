<?php
$ROOT_URL='';
$ADMIN_URL= $ROOT_URL.'/admin';
$CLIENT_URL=$ROOT_URL.'/client';
$CONTENT_URL=$ROOT_URL.'/content';
$CONTENT_CLIENT_URL=$CONTENT_URL.'/client';
$CONTENT_ADMIN_URL=$CONTENT_URL.'/admin';
$CONTENT_UPLOAD=$CONTENT_URL.'/uploads';
$AVTUSER_UPLOAD = $ADMIN_URL.'/xu-ly/khach-hang/uploads';

// var_dump
function dd()
{
    $data = func_get_args();
    echo '<prev>';
    var_dump($data);
    echo '</prev>';
}
//check session user đăng nhập
function sessionLogin_Isset()
{
    if (isset($_SESSION['login'])) {
        return true;
    } else {
        return false;
    }
}
// check session cart
function sessionCart_Isset()
{
    if (isset($_SESSION['cart'])) {
        return true;
    } else {
        return false;
    }
}
?>
