<?php
require_once '../../global.php';
require_once '../../model/san-pham.php';
if (isset($_POST['search'])) {
    $keyword = $_POST['search'];
    $list_sp_search = san_pham_Search($keyword);
?>
    <div class="container">
        <?php
        foreach ($list_sp_search as $sp_search) { ?>
            <li class="my-4">
                <a href="san-pham?id=<?=$sp_search['id_sp']?>&name=<?=$sp_search['ten_sp']?>" class="row " style="overflow:hidden">
                    <div class="col-2"><img style="width:60px" src="<?= $CONTENT_UPLOAD ?>/<?= $sp_search['hinh_anh'] ?>" alt=""></div>
                    <div class="col-10 pr-4">
                        <div  style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?= $sp_search['ten_sp'] ?></div>
                        <div class="text-danger"><?= number_format($sp_search['don_gia'], 0, ',', '.') . 'đ' ?></div>
                    </div>
                </a>
            </li>
        <?php
        }
        ?>
    </div>
<?php
}

?>