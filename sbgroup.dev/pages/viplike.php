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
                <h6 class="m-0">Thêm ID VIP Like</h6>
            </div>
            <form  action="post.php" method="POST">

            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>UID hoặc link profile <span class="text-danger">*</span></label>
                            <input type="text" name="uidlike" class="form-control" placeholder=""> 
                        </div>
                        <div class="form-group col-md-6">
                            <label>Số lượng cảm xúc <span class="text-danger">*</span></label>
                            <select name="soluonglike" class="form-control">
                                <option></option>
                                <option value="50">50</option><option value="200">200</option><option value="300">300</option><option value="500">500</option>                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Số ngày thuê <span class="text-danger">*</span></label>
                            <select name="ngaythuelike" class="form-control">
                                <option value="1">30</option>
                                <option value="2">60</option>
                                <option value="3">90</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tốc độ like mỗi 5 phút <span class="text-danger">*</span></label>
                            <input type="number" name="timelike" class="form-control" min="1" value="20"> 
                        </div>
                    </div>
                    <div class="form-row">
                        <style>
                            .custom-checkbox {
                                margin-left: 20px;
                            }
                            .custom-checkbox img{
                                margin-left: -10px;
                            }
                        </style>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="like" value="LIKE" name="camxuclike" checked="" >
                            <label class="custom-control-label" for="like"><img src="/assets/images/reactions/like.gif" height="50px" width="50px"></label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="love" value="LOVE" name="camxuclike">
                            <label class="custom-control-label" for="love"><img src="/assets/images/reactions/love.gif" height="50px" width="50px"></label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="wow" value="WOW" name="camxuclike">
                            <label class="custom-control-label" for="wow"><img src="/assets/images/reactions/wow.gif" height="50px" width="50px"></label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="haha" value="HAHA" name="camxuclike">
                            <label class="custom-control-label" for="haha"><img src="/assets/images/reactions/haha.gif" height="50px" width="50px"></label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="sad" value="SAD" name="camxuclike">
                            <label class="custom-control-label" for="sad"><img src="/assets/images/reactions/sad.gif" height="50px" width="50px"></label>
                        </div>
                      
                    </div>
                    <input type="hidden" name="tinhtranglike" value="0">
                            <input type="hidden"  name="usernamelike" value="<?php echo $row['username']; ?>">
                    <button type="submit" name="viplike" class="btn btn-accent">Submit</button>
                </li>
            </ul>
        </div>
    </div>
    <?php
        }
      }
   
      ?>
    <?php include('lsviplike.php'); ?>

        <?php include('../includes/footer.php'); ?>
        <?php include('../includes/scripts.php'); ?>