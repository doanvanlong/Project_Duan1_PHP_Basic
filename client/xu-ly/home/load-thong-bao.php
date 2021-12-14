<?php
session_start();
require_once '../../../model/thong-bao.php';
require_once '../../../model/tai-khoan.php';
require_once '../../../global.php';
if (sessionLogin_Isset()) {
    $id_kh = $_SESSION['login']['id_kh'];
}
$output = "";
$list_thong_bao = thong_bao_detail_Query_Top3($id_kh);
if (is_array($list_thong_bao) && count($list_thong_bao) > 0) {
    //kháhc hàng có thông báo,nhận đc từ admin 
    //lấy 3 thông báo
    foreach ($list_thong_bao as $thong_bao) {
        if($thong_bao['trang_thai'] ==0){
            $output .= "
            <a href='my_notica' target='_self'  class='thong_bao_user-content-box   d-flex my-4' >
            <input type='hidden'  name='id_thong_bao_detail' value='" . $thong_bao['id_thong_bao_detail'] . "'>  
            <div class='thong_bao_user-content-img'>
                <i class='fas fa-dollar-sign '></i>
            </div>
            <div class='thong_bao_user-content-text text-overflow active' >
                ".$thong_bao['noi_dung']."
            </div>
        </a>
            
            ";
        }else{
            $output .= "
            <a href='my_notica' target='_self' class='thong_bao_user-content-box   d-flex my-4' >
            <input type='hidden' name='id_thong_bao_detail' value='" . $thong_bao['id_thong_bao_detail'] . "'>  
            <div class='thong_bao_user-content-img'>
                <i class='fas fa-dollar-sign '></i>
            </div>
            <div class='thong_bao_user-content-text text-overflow ' >
                ".$thong_bao['noi_dung']."
            </div>
        </a>
            
            ";
        }
       
    }
}
$list_thong_bao_new = thong_bao_user_detail_Query_New($id_kh);
 $count_new=count($list_thong_bao_new);
 $data=array(
     'noi_dung'=>$output,
     'count_new'=>$count_new
 );
 echo json_encode($data);
?>

