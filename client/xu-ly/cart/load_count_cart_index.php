<?php
require_once '../../../global.php';
session_start();
if (sessionLogin_Isset()) {
    if (sessionCart_Isset()) {
        if (count($_SESSION['cart']) > 0) { ?>
            <div class="header__right-cart-count__items text-dark d-flex justify-content-center align-items-center">
                <?php echo count($_SESSION['cart']); ?>
            </div>
        <?php
        }
        ?>

<?php
    }
}
?>