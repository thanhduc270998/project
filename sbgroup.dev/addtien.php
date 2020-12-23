
<div class="modal fade" id="naptien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cộng Tiền Thành Viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="includes/post.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Tài Khoản </label>
                <input type="text" name="username"  <?php
$sql = mysqli_query($conn, "SELECT * FROM `register`");
while($res = mysqli_fetch_assoc($sql)){
    ?>
    <?php
    }
    ?> class="form-control" placeholder="Enter Tài Khoản">
            </div>
            <div class="form-group">
                <label>Số Tiền</label>
                <input type="number" name="money" class="form-control" value="<?= $res['username'] ?>" placeholder="Enter Money">
            </div>
     
</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addmoney" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#naptien">
Nạp Tiền Thành Viên
            </button>
            