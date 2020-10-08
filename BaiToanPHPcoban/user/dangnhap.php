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
<link rel="stylesheet" href="style/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-light">
    <div class="container" id="menu">
    <ul class="navbar-nav d-flex">
        <li class="li nav-link "><a href="" class="text-white">Home</a></li>
        <li class="li nav-link "><a href="" class="text-white">Đăng nhập</a>
        <ul>
<li>
<div class="d-none">
<form action="" method="post" >
    <div class="form-group">
    <input type="text" name="username" class="form-control"value="<?php echo @$_POST['username']; ?>" placeholder="Nhập tài khoản"/>
    </div>
    <div class="form-group">
<input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu"/>
</div>
<button type="submit" name="btnLogin" class="btn btn-primary">Đăng nhập</button>
</form>
</div>
<?php
require("connect.php");
if(isset($_POST['btnLogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $conn->prepare('select * from user where username = :username');

    $login->bindParam(':username', $username);

    $login->execute();

    $result = $login->fetch(PDO::FETCH_ASSOC);

    if(empty($result))
    {
        die('Tên đăng nhập không chính xác');
    }

    if($result['password'] != $password)
    {
        die('Sai mật khẩu');
    }

    $_SESSION['auth'] = ['username' => $result['username']];
    $_SESSION['msg'] = 'Đăng nhập thành công';
} 
?>
</div>
</li>
        </ul>
    </li>
        <li class="li nav-link "><a href="" class="text-white">Đăng ký</a></li>
    </ul>
    </div>
    </nav>
</body>
</html>