<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .btn__color{
        background-image: linear-gradient(0 , #f33155,#f36844);
    }
</style>
<body>
<div class="container d-flex justify-content-around">
  <form style="max-width:600px;" method="post">
  <fieldset class="p-5"style ="border: 1px solid #EDF0F2 ; border-radius : 5px;">
   <legend class = "d-flex justify-content-around">Thông Tin Đăng nhập</legend>
    <div class="form-group">
      <label for="uname">Tài khoản:</label>
      <input type="text" class="form-control" id="uname" name="username" value="<?php echo @$_POST['username'];?>" placeholder="Nhập tài khoản" name="uname" required>
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="pwd" name="password" value="<?php echo @$_POST['password'];?>"placeholder="Nhập mật khẩu" name="pswd" required>
    </div>
    <div class="form-group form-check d-flex justify-content-between">
      <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember" required> Lưu mật khẩu
      </label>
      <a href="register.php">Đăng ký</a>
    </div>
    <button type="submit" class="btn btn__color btn-primary pr-5 pl-5 hover" name="btnLogin" style="background-color: #f33155 ;border: 1px solid #f33155;width:339px;">Đăng nhập</button>
    </fieldset>
  </form>
</div>
    <!-- <div class="container">
        <div class="d-flex justify-content-around">
            <h3>Thông tin đăng nhập</h3>
        </div>
        <div class="login d-flex justify-content-around">
            <form action="" method="post">
                <div class="form-group ">
                    <input type="text" name="username" class="form-control" style="max-width:600px;" value="<?php echo @$_POST['username']; ?>" placeholder="Nhập username">
                </div>
                <div class="form-group ">
                    <input type="password" name="password" class="form-control" style="max-width:600px;" value="<?php echo @$_POST['password']; ?>" placeholder="Nhập mật khẩu">
                </div>
                <button type="submit" name="btnlogin" class="btn btn-primary " style="width:339px;">Đăng nhập</button>
            </form>
        </div>
    </div> -->
    <?php
    // require("model.php");
    // if (isset($_POST['btnLogin'])) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $model = new model();
    //     $result = $model->table('user')->where(['username'=>$username])->row();
    //     if (empty($result)) {
    //         die('Tên đăng nhập không chính xác');
    //     }
    //     if ($result['password'] != $password) {
    //         die('Sai mật khẩu');
    //     }
    //     $_SESSION['auth'] = ['username' => $result['username']];
    //     $_SESSION['msg'] = 'Đăng nhập thành công';
    // }
    
    require("connect.php");
    if (isset($_POST['btnLogin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql="select username, password from user where username = :username";
        $query = $conn->prepare($sql);
        $query->bindvalue(':username',$username);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        if (empty($user)) {
            die('Tên đăng nhập không chính xác');
        }else{
        }
        if ($user['password'] != $password) {
            die('Sai mật khẩu');
        }
        $_SESSION['auth'] = ['username' => $user['username']];
        $_SESSION['msg'] = 'Đăng nhập thành công';
        header('location:index.php');
    }
    ?>

</body>

</html>