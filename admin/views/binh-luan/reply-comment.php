<?php
foreach ($list_cmt_one as $list) {
    extract($list);
}
$Date = date_create($Date)->format('d-m-Y');
$id_admin = $_SESSION['login']['id_kh'];
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<h3 class="alert bg-secondary text-light heading-cate">Trả Lời Bình Luận</h3>
<div class="row">
    <div class="col-12">
        <div style="display: flex;flex-direction: column;flex-wrap: wrap;align-content: flex-start;align-items: stretch;gap: .5em;">
            <span>Khách hàng: <?= $Ho_Ten ?></span>
            <span>Tên sản phẩm đã bình luận: <?= $Name_Product ?></span>
            <span>Ngày bình luận: <?= $Date ?></span>
            <span style="font-weight: bolder;">Nội dung: <?= $Content ?></span>
        </div>
        <hr>
        <form action="" method="post" id="reply-comment">
            <textarea name="noi-dung" id="" cols="30" rows="2" class="form-control"></textarea>
            <hr>
            <small id="error-noi-dung" class="form-text text-danger "></small>
            <input type="hidden" name="id-comment-product" id="" value="<?=$ID_CMT;?>">
            <input type="hidden" name="id-admin" id="" value="<?=$id_admin;?>">
            <input type="hidden" name="date-reply" id="" value="<?=$dateReply = date('Y-m-d');?>">
            <input type="submit" value="Trả lời" class="btn btn-info" id="submit-reply">
        </form>

    </div>
</div>