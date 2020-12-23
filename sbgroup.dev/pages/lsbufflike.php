<div class="col-lg-7 mb-6">
        <div class="card card-small mb-">
            <div class="card-header border-bottom">
                <h6 class="m-0">Quản Lý VIP ID</h6>
            </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">UID</th>
                          <th scope="col" class="border-0">Số Lượng</th>
                   
                          <th scope="col" class="border-0">Tài Khoản</th>

                          <th scope="col" class="border-0">Trình Trạng</th>

                        </tr>
                      </thead>
                      <tbody>
     <?php 
     $query = "SELECT * FROM bufflike WHERE username = '".$_SESSION['username']."' ORDER BY id DESC LIMIT 0,3 ";
     $query_run = mysqli_query($conn, $query);
     if(mysqli_num_rows($query_run) > 0 )
     {
       while($row = mysqli_fetch_assoc($query_run))
       {
   
    ?>
          <tr>
             <td> <?php echo $row['id']; ?> </td>

            <td> <?php echo $row['uid']; ?> </td>
            <td> <?php echo $row['soluong']; ?></td>

            <td> <?php echo $row['username']; ?></td>

                <td><?php 
                 if($row['tinhtrang'] == '1'){
                    echo '<button class="btn btn-success";><b>Done</b></button>';
                 }elseif($row['tinhtrang'] == '0')
                  echo '<button class="btn btn-danger";><b>Chưa Chạy Xong</b></button>';
                 ?></td>
        
        <?php
        }
      }
      else {
        echo "Chưa Có Dữ Liệu";
      }
      ?>    
          </tr>
      
        </tbody>
      </table>
      
                  </div>
                </div>
                </div>

                </div>

                </div>