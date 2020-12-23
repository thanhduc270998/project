      
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Thông Báo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="includes/post.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Tiêu Đề </label>
                <input type="text" name="tieude" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label> Nội Dung </label>
                <textarea type="text" name="thongbao" class="form-control" placeholder=""></textarea>
            </div>
           
</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" name="addthongbao" class="btn btn-primary">Đăng</button>
        </div>
      </form>

    </div>
  </div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Thông Báo
            </button>
            