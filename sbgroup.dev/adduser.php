
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Thành Viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="includes/post.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="rpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <label>Phân Quyền</label>

        <select name="phanquyen" class="form-control">
          <option value="Admin">Admin</option>
          <option value="CTV">CTV</option>
          <option value="Member">Member</option>

</select>
</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="adduser" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduser">
              Add Thành Viên
            </button>
            