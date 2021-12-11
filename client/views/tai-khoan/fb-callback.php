<?php
require_once "config.php";
require_once "../../../global.php";
require_once "../../../model/pdo.php";
require_once '../../../model/tai-khoan.php';

try {
    $accessToken = $helper->getAccessToken();
} catch (\Facebook\Exceptions\FacebookResponseException $e) {
    echo "Response Exception: " . $e->getMessage();
    exit();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
    echo "SDK Exception: " . $e->getMessage();
    exit();
}

if (!$accessToken) {
    header('Location:tai-khoan/login');
    exit();
}

$oAuth2Client = $FB->getOAuth2Client();
if (!$accessToken->isLongLived())
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

$response = $FB->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
$userData = $response->getGraphNode()->asArray();
$_SESSION['userData'] = $userData;
$_SESSION['access_token'] = (string) $accessToken;
//nếu thành công header tới index
//phải kiểm tra đã có email trong db chưa ,
// nếu chưa thì lưu r vào index ,có r thì vào index 

if (!empty($userData)) {
    $sql = "SELECT * FROM khach_hang where email=?";
    $info_kh = pdo_query($sql, $userData['email']);//lấy email login select DB
    
    $id_kh=$info_kh[0]['id_kh'];
    $ho_ten=$info_kh[0]['ho_ten'];

    if (count($info_kh) > 0) {
        //đã lk rồi
        $_SESSION['login'] = array('id_fb'=>$userData['id'], 'id_kh' => $id_kh, 'ho_ten' => $ho_ten);
        header('Location:' . $ROOT_URL); //về home
      
        exit();
    } else {
        //chưa có liên kết fb
        $sql = "INSERT INTO khach_hang (ho_ten,email,hinh_anh) values(?,?,?)";
       $id_insert= pdo_execute2($sql, $userData['first_name'] .' '. $userData['last_name'], $userData['email'],$userData['picture']['url']);
        $_SESSION['login'] = array('id_fb'=>$userData['id'],'id_kh' => $id_insert, 'ho_ten' => $userData['first_name'].$userData['last_name']);
        header('Location:' . $ROOT_URL); //về home
        exit();
    }
}
?>
