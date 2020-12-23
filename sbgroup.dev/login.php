<div class="col-lg-6">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Đăng Nhập</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                        <?php

if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
{
    echo ''.$_SESSION['status'].'';
    unset($_SESSION['status']);
}
?>
					    <form action="includes/post.php" method="POST">
                          
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label>Tài Khoản</label>
                                <input type="" class="form-control" placeholder="Nhập tài khoản" value="yanabcxyz" name="taikhoan">
                              </div>
                              <div class="form-group col-md-12">
                                <label>Mật Khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="matkhau">
                              </div>
                            </div>
                           
                            <button type="submit" name="dangnhap" class="btn btn-success">Đăng Nhập</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              </div>