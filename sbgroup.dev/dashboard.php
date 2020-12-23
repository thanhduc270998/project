<?php
session_start();
if(empty($_SESSION['username'])){
	session_destroy();
	header('location: /');
	die();
}
include("includes/database.php");
include("includes/func.php");

include("includes/header.php");


include("includes/nav.php");
if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{
  echo ''.$_SESSION['success'].'';
  unset($_SESSION['success']);
}

if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
  echo ''.$_SESSION['status'].'';
  unset($_SESSION['status']);
}

?>   
   
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <h3 class="page-title">TRANG CHỦ</h3> <br>

                <?php include("addblog.php");?>
                <?php include("adduser.php");?>
                <?php include("addtien.php");?>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            <div class="row">
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">TỔNG ĐƠN VIP UID</span>
                        <h6 class="stats-small__value count my-3"><?php
require 'includes/database.php';
$query = "SELECT id FROM viplike ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo ''.$row.'';
?></h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">TỔNG ĐƠN CMT BÀI VIẾT</span>
                        <h6 class="stats-small__value count my-3"><?php
require 'includes/database.php';
$query = "SELECT id FROM vipcmt ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo ''.$row.'';
?></h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">TỔNG SỐ LƯỢT ĐƠN LIKE</span>
                        <h6 class="stats-small__value count my-3"><?php
require 'includes/database.php';
$query = "SELECT id FROM viplike ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo ''.$row.'';
?></h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">TỔNG THÀNH VIÊN</span>
                        <h6 class="stats-small__value count my-3"><?php
require 'includes/database.php';
$query = "SELECT id FROM register ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo ''.$row.'';
?></h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-12 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">TỔNG ĐƠN BOT CẢM XÚC</span>
                        <h6 class="stats-small__value count my-3"><?php
require 'includes/database.php';
$query = "SELECT id FROM vipbot ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
echo ''.$row.'';
?></h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-5"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <?php include("includes/blog.php");?>
            <div class="row">
	<!-- Users Stats -->
	<div class="col-lg-12">
		<div class="card card-small card-post mb-4">
			<div class="card-body">
				<h5 class="card-title">CHÀO MỪNG ĐẾN VỚI HỆ THỐNG VIPLIKE CỦA SBGROUP.</h5>
			
			</div>
			<div class="card-footer border-top d-flex">
				<div class="card-post__author d-flex">
					<a href="https://www.facebook.com/100005610586786" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('https://graph.facebook.com/100005610586786/picture');"></a>
					<div class="d-flex flex-column justify-content-center ml-3">
						<span class="card-post__author-name">Trương Thành Đức</span>
						<small class="text-muted"><?php echo date("H:i:s d/m/Y"); ?></small>
					</div>
				</div>
				<div class="my-auto ml-auto">
					<a class="btn btn-sm btn-white" href="https://www.facebook.com/100005610586786">
						<i class="far fa-bookmark mr-1"></i> Facebook </a>
					</div>
				</div>
			</div>
		</div>

	</div>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>