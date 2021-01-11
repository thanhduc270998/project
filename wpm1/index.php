<?php
session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['error'] = 'Bạn cần đăng kí để hiện thị chức năng này';
    header('Location: bai3.php');
}
    ?>
<style>
    span{
        font-weight: bold;
    }
</style>
<p>Cản ơn bạn đã đăng kí,<span> <?php echo $_SESSION['username'];?> </span></p>
