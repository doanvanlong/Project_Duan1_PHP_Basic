<?php
$ROOT_URL='/duan1';
$ADMIN_URL= $ROOT_URL.'/admin';
$CLIENT_URL=$ROOT_URL.'/client';
$CONTENT_URL=$ROOT_URL.'/content';
$CONTENT_CLIENT_URL=$CONTENT_URL.'/client';
$CONTENT_ADMIN_URL=$CONTENT_URL.'/admin';

// var_dump
function dd(){
    $data=func_get_args();
    echo '<prev>';
    var_dump($data);
    echo '</prev>';

}
?>