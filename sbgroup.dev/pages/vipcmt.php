<?php
session_start();
if(empty($_SESSION['username'])){
	session_destroy();
	header('location: /');
	die();
}
include("../includes/database.php");

include("../includes/func.php");

include("../includes/header.php");

include("../includes/nav.php");

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
  $query = "SELECT * FROM register WHERE username = '".$_SESSION['username']."' ORDER BY id DESC LIMIT 0,3 ";
  $query_run = mysqli_query($conn, $query);
  if(mysqli_num_rows($query_run) > 0 )
  {
    while($row = mysqli_fetch_assoc($query_run))
    {
   
  ?>

 <div class="page-header row no-gutters py-4">
              
<div class="row">
    <div class="col-lg-5 mb-5">
        <div class="card card-small mb-">
            <div class="card-header border-bottom">
                <h6 class="m-0">Thêm ID VIP CMT</h6>
            </div>
            <form  action="post.php" method="POST">

            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>UID VIP <span class="text-danger">*</span></label>
                            <input type="text" name="uidcmt" class="form-control" placeholder=""> 
                        </div>
                        <div class="form-group col-md-6">
                            <label>Số lượng comment <span class="text-danger">*</span></label>
                            <select name="soluongcmt" class="form-control">
                                <option></option>
                                <option value="50">50</option><option value="200">200</option><option value="300">300</option><option value="500">500</option>                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Số ngày thuê <span class="text-danger">*</span></label>
                            <select name="ngaythuecmt" class="form-control">
                                <option value="1">30</option>
                                <option value="2">60</option>
                                <option value="3">90</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tốc độ comment mỗi 5 phút <span class="text-danger">*</span></label>
                            <input type="number" name="timecmt" class="form-control" min="1" value="20"> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Nội dung comment (mỗi cmt 1 dòng, Tối đa 4000 kí tự) <span class="text-danger">*</span></label>
                            <textarea name="noidungcmt" class="form-control" rows="5"></textarea>
                        </div>
                 
                    </div>
                    <input type="hidden" name="tinhtrangcmt" value="0">
                            <input type="hidden"  name="usernamecmt" value="<?php echo $row['username']; ?>">
                    <button type="submit" name="vipcmt" class="btn btn-accent">Submit</button>
                </li>
            </ul>
        </div>
    </div>
    <?php
        }
      }
   
      ?>
    <?php include('lsvipcmt.php'); ?>

        <?php include('../includes/footer.php'); ?>
        <?php include('../includes/scripts.php'); ?>