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
        <div class="card card-small">
            <div class="card-header border-bottom">
                <h6 class="m-0">Thêm ID Buff Like</h6>
            </div>
            <form  action="post.php" method="POST">

            <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Post ID <span class="text-danger">*</span></label>
                            <input type="text" name="uidbufflike" class="form-control" placeholder=""> 
                        </div>
                        <div class="form-group col-md-6">
                            <label>Số lượng like <span class="text-danger">*</span></label>
                            <input type="number"  name="soluongbufflike" class="form-control" placeholder="100" value="100"> 
                        </div>
                    </div>
                    
                  
                    <input type="hidden" name="tinhtrangbufflike" value="0">
                            <input type="hidden"  name="usernamebufflike" value="<?php echo $row['username']; ?>">
                    <button type="submit" name="bufflike" class="btn btn-accent">Submit</button>
                </li>
            </ul>
        </div>
    </div>
    <?php
        }
      }
   
      ?>
    <?php include('lsbufflike.php'); ?>

        <?php include('../includes/footer.php'); ?>
        <?php include('../includes/scripts.php'); ?>