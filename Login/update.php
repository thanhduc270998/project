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

<body>
<?php
  require('connect.php');
  $id = $_GET['id'];
  $user = $conn->prepare('select * from user where id = :id');
  $user->bindParam(':id', $id);
  $user->execute();
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $row = $user->fetch(PDO::FETCH_ASSOC);
  ?>
  <div class="container d-flex justify-content-around">
    <form action="" style="max-width:600px;" method="post">
      <fieldset class="p-5" style="border: 1px solid #EDF0F2 ; border-radius : 5px;">
        <legend class="d-flex justify-content-around">Thông Tin</legend>
        <div class="form-group">
          <label for="uname">Tài khoản:</label>
          <input type="text" class="form-control" id="uname" name="username" value="<?php echo $row['username']; ?>">
        </div>
        <div class="form-group">
          <label for="pwd">Mật khẩu:</label>
          <input type="password" class="form-control" id="pwd" name="password" value="<?php echo $row['password']; ?>">
        </div>
        <div class="form-group">
          <!-- <label for="pwd">Nhập lại mật khẩu:</label>
      <input type="password" class="form-control" id="repwd" name="repassword" value="<?php echo $row['password']; ?>"placeholder="Nhập lại mật khẩu" name="repswd" required>
    </div> -->
          <div class="form-group">
            <label for="pwd">Email:</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
          </div>
          <div class="form-group">
            <label for="pwd"> Số điện thoại:</label>
            <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo $row['telephone']; ?>">
          </div>
          <button type="submit" class="btn btn-primary pr-5 pl-5 hover" name="btnRegister" style="background-color: #f33155 ;border: 1px solid#f33155;width:339px;">UPDATE</button>
      </fieldset>
    </form>
  </div>

  <?php
  if(isset($_POST['btnRegister'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $sql = "update user set username =:username , password =:password , email =:email , telephone =:telephone where id=:id";
    $query = $conn->prepare($sql);
    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);
    $query->bindParam(':email', $email);
    $query->bindParam(':telephone', $telephone);
    $query->bindParam(':id', $id);
    try {
      $query->execute();
      echo 'Update thành công';
      header("location: admin.php");
    } catch (PDOException $e) {
      echo $e;
    }
  }
  ?>
</body>

</html>