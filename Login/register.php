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
  .btn__color {
    background-image: linear-gradient(0, #f33155, #f36844);
  }
</style>

<body>
  <div class="container d-flex justify-content-around">
    <form action="" style="max-width:600px;" method="post">
      <fieldset class="p-5" style="border: 1px solid #EDF0F2 ; border-radius : 5px;">
        <legend class="d-flex justify-content-around">Thông Tin Đăng ký</legend>
        <div class="form-group">
          <label for="uname">Tài khoản:</label>
          <input type="text" class="form-control" id="uname" name="username" value="<?php echo @$_POST['username']; ?>" placeholder="Nhập tài khoản" name="uname" required>
        </div>
        <div class="form-group">
          <label for="pwd">Mật khẩu:</label>
          <input type="password" class="form-control" id="pwd" name="password" value="<?php echo @$_POST['password']; ?>" placeholder="Nhập mật khẩu" name="pswd" required>
        </div>
        <div class="form-group">
          <label for="pwd">Nhập lại mật khẩu:</label>
          <input type="password" class="form-control" id="repwd" name="repassword" value="<?php echo @$_POST['password']; ?>" placeholder="Nhập lại mật khẩu" name="repswd" required>
        </div>
        <div class="form-group">
          <label for="pwd">Email:</label>
          <input type="text" class="form-control" id="email" name="email" value="<?php echo @$_POST['email']; ?>" placeholder="Nhập email của bạn" name="email" required>
        </div>
        <div class="form-group">
          <label for="pwd"> Số điện thoại:</label>
          <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo @$_POST['telephone']; ?>" placeholder="Nhập số điện thoại của bạn" name="telephone" required>
        </div>
        <div class="auth-form__aside">
          <p class="auth-form__policy-text">Bằng việc đăng kí, bạn đã đồng ý với SBGroup về
          <br>
            <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
            <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
          </p>
          
        </div>
        <div class="form-group form-check d-flex justify-content-between">
          Bạn đã có tài khoản?<a href="login.php">Đăng nhập</a>
        </div>
        <button type="submit" class="btn btn__color btn-primary pr-5 pl-5 hover" name="btnRegister" style="background-color: #f33155 ;border: 1px solid#f33155;width:339px;">Đăng ký</button>
      </fieldset>
    </form>
  </div>
  <?php
  require("connect.php");
  if (isset($_POST['btnRegister'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    if (empty($username) or empty($password) or empty($repassword) or empty($email) or empty($telephone)) {
      echo "Vui lòng nhập đầy đủ thông tin";
    } else {
      $sql = "select username from user where username = :username";
      $query = $conn->prepare($sql);
      $query->bindvalue(':username', $username);
      $query->execute();
      $user = $query->fetch(PDO::FETCH_ASSOC);
      if (strlen($username) < 4 or strlen($username) > 50) {
        $error = 'Tài khoản phải từ 4 - 50 kí tự';
      } else {
        echo 'Tài khoản hợp lệ';
      }
      if (strlen($password) < 4 or strlen($password) > 50) {
        $error = 'Mật khẩu phải từ 4 - 50 kí tự';
      } else {
        echo 'Mật khẩu hợp lệ';
      }
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("$email is a valid email address");
      } else {
        echo 'Email không hợp lệ';
        exit();
      }
      if ($user) {
        echo 'Tài khoản bị trùng ,vui lòng nhập tài khoản khác ';
      } else {
        if ($password != $repassword) {
          echo 'Mật khẩu không trùng nhau';
        } else {
          try {
            $query = $conn->prepare('insert into user (username,password,email,telephone) values (:username,:password,:email,:telephone)');
            $query->bindValue(':username', $username);
            $query->bindValue(':password', $password);
            $query->bindValue(':email', $email);
            $query->bindValue(':telephone', $telephone);
            $query->execute();
            echo 'Đăng ký thành công';
            header("location: login.php");
          } catch (PDOException $e) {
            echo $e;
          }
        }
      }
    }
  }

  ?>
</body>

</html>