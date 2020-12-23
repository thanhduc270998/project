<div class="col-lg-6">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Đăng Ký</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                        <?php
                        require_once ('includes/database.php');
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

  $query = "SELECT * FROM register";
  $query_run = mysqli_query($conn, $query);
  ?>
                          
					    <form action="includes/post.php" method="POST">
                          
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label>Tài Khoản</label>
                                <input type="text" class="form-control" placeholder="Nhập tên tài khoản" value="" name="username">
                              </div>
                              <div class="form-group col-md-12">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Nhập email" value="sbgroup@example.com" name="email">
                              </div>
                              <div class="form-group col-md-12">
                                <label>Mật Khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password">
                              </div>
                              <div class="form-group col-md-12">
                                <label>Xác Minh Mật Khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="rpassword">
                              </div>
                            </div>
                            <input type="hidden" name="phanquyen">

                            <button type="submit" name="dangky" class="btn btn-warning">Tạo Tài Khoản</button>
                            </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>