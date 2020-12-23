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
$query = "SELECT * FROM register WHERE username = '".$_SESSION['username']."' ORDER BY id DESC LIMIT 0,3 ";
  $query_run = mysqli_query($conn, $query);
  if(mysqli_num_rows($query_run) > 0 )
  {
    while($row = mysqli_fetch_assoc($query_run))
    {
   
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
 <div class="page-header row-12 no-gutters py-4">

<div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Chỉnh sửa thông tin</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                <form  action="post.php" method="POST">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Username <span class="text-danger">*</span></label>
                            <input type="text" value="<?php echo $row['username']; ?>" class="form-control" disabled=""> 
                        </div>
                        <div class="form-group col-md-6">
                            <label>Mật khẩu <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Nhập mật khẩu" value="<?php echo $row['password']; ?> " disabled="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Họ tên</label>
                            <input type="text" name="e_fullname" class="form-control" value="<?php echo $row['ten']; ?>"> 
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text"  class="form-control" value="<?php echo $row['email']; ?> " disabled="">
                        </div>
                    </div>
                   
                    <button type="submit" name="profile" class="btn btn-accent">Submit</button>
</form>
                </li>
            </ul>
        </div>
        <?php
        }
      }
   
      ?>