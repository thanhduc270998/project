<?php 
session_start();
if(isset($_SESSION['username'])){
	header('location: /dashboard.php');
	die();
}
include('includes/database.php'); 


include("includes/header.php");

include("includes/nav.php");
?>

         
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <h3 class="page-title"> <font color="BLUE"size=5"><strong><marquee>CHÀO MỪNG ANH EM ĐẾN VỚI HỆ THỐNG SBONLINE247.COM! CHÚC ANH EM NGÀY MỚI VUI VẺ!!!</marquee></strong></font></h3>
              </div>
            </div>
            <div class="row">
            
        <?php include('register.php'); ?>
        <?php include('login.php'); ?>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>