<div class="row">

<?php 

$query = "SELECT * FROM setting ORDER BY id DESC LIMIT 0,2";
$query_run = mysqli_query($conn, $query);
if($query)
{
while($row = mysqli_fetch_assoc($query_run))
{

?>


              <div class="col-lg-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--aside card-post--1">
                  <div class="card-post__image" style="background-image: url('images/content-management/6.jpeg');">
                    <a href="#" class="card-post__category badge badge-pill badge-info">#THÔNG BÁO</a>
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('https://i.imgur.com/Dd9egse.jpg');">sbonline247.com</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" href="#"><?php echo $row['tieude']; ?></a>
                    </h5>
                    <p class="card-text d-inline-block mb-3"><?php echo $row['thongbao']; ?>.</p><br>
                    <span class="text-muted"><?php echo date("H:i:s d/m/Y"); ?></span>
                    </div>
                </div>
              </div>
              <?php
 }
}
else {
 echo "Chưa Có Dữ Liệu";
}
?>
            </div>