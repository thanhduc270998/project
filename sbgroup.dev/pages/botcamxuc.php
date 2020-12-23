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
    <div class="col-lg-6 mb-5">
        <div class="card card-small mb-">
            <div class="card-header border-bottom">
                <h6 class="m-0">Thêm ID VIP BOT</h6>
            </div>
            <form  action="post.php" method="POST">

            <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>List token <span class="text-danger">*</span></label>
                            <textarea name="tokens" class="form-control" rows="5" placeholder="EAAAA..."></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Số ngày thuê <span class="text-danger">*</span></label>
                            <input type="number" name="ngaythuebot" class="form-control" placeholder="" min="1" value="30"> 
                        </div>
                        
                    </div>
                    
                    <label>Loại cảm xúc <span class="text-danger"> *</span></label>
                    <div class="form-row">
                        <style>
                            .custom-radio {
                                margin-left: 20px;
                            }
                            .custom-radio img{
                                margin-left: -10px;
                            }
                        </style>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input reactions" id="like" value="LIKE" name="camxucbot">
                            <label class="custom-control-label" for="like"><img src="/assets/images/reactions/like.gif" height="50px" width="50px"></label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input reactions" id="love" value="LOVE" name="camxucbot">
                            <label class="custom-control-label" for="love"><img src="/assets/images/reactions/love.gif" height="50px" width="50px"></label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input reactions" id="wow" value="WOW" name="camxucbot">
                            <label class="custom-control-label" for="wow"><img src="/assets/images/reactions/wow.gif" height="50px" width="50px"></label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input reactions" id="haha" value="HAHA" name="camxucbot">
                            <label class="custom-control-label" for="haha"><img src="/assets/images/reactions/haha.gif" height="50px" width="50px"></label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input reactions" id="sad" value="SAD" name="camxucbot">
                            <label class="custom-control-label" for="sad"><img src="/assets/images/reactions/sad.gif" height="50px" width="50px"></label>
                        </div>
                        
                
                    </div>
                    <input type="hidden" name="tinhtrangbot" value="0">
                            <input type="hidden"  name="usernamebot" value="<?php echo $row['username']; ?>">
                    <button type="submit" name="vipbot" class="btn btn-accent">Submit</button>
                </li>
            </ul>
        </div>
    </div>
    <?php
        }
      }
   
      ?>
    <?php include('lsbotcamxuc.php'); ?>

        <?php include('../includes/footer.php'); ?>
        <?php include('../includes/scripts.php'); ?>