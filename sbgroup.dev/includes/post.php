<?php
session_start();
include("database.php");

if(isset($_POST['dangky']))
{
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $rpassword  = $_POST['rpassword'];
    $phanquyen  = $_POST['phanquyen'];

    if($password === $rpassword)
    {
  
    $sql = "INSERT INTO register (username,email,password,phanquyen) VALUES ('$username','$email','$password','$phanquyen')";
    $sql_info = mysqli_query($conn, $sql);
    if($sql_info)
    {
        $_SESSION['success'] = "<script>swal('Thông Báo', 'Đăng Ký Thành Công!', 'success')</script>";
        header('Location: /index.php');
    }
    else 
    {
        $_SESSION['status'] = "Đăng Ký Thất Bại";
        header('Location: /index.php');
    }
}
else {
    $_SESSION['status'] = "<script>swal('Thông Báo', 'Mật Khẩu Không Trùng!', 'error')</script>";
    header('Location: /index.php');
}

}

if(isset($_POST['dangnhap']))
{
    $email_lg = $_POST['taikhoan'];
    $pass_lg = $_POST['matkhau'];
    $query = "SELECT * FROM register WHERE username='$email_lg' AND password='$pass_lg'";
    $query_run = mysqli_query($conn, $query);
    
    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $email_lg;
        header('Location: /dashboard.php');
    }
    else
    {
        $_SESSION['status'] = "<script>swal('Thông Báo', 'Tài Khoản Hoặc Mật Khẩu Không Đúng !', 'error')</script>";
        header('Location: /index.php');
    
    }
}


if(isset($_POST['addthongbao']))
{
    $tieude          = $_POST['tieude'];
    $thongbao        = $_POST['thongbao'];

    $query = "INSERT INTO setting (tieude,thongbao) VALUES ('$tieude','$thongbao') ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success'] = "<script>swal('Thông Báo', 'Thêm Thông Báo Thành Công !', 'success')</script>";
        header('Location: /dashboard.php');
    }
    else
    {
        $_SESSION['status'] = "<script>swal('Thông Báo', 'Thêm Thất Bại !', 'error')</script>";
        header('Location: /dashboard.php');
        }

}

if(isset($_POST['adduser']))
{
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $rpassword  = $_POST['rpassword'];
    $phanquyen  = $_POST['phanquyen'];

    if($password === $rpassword)
    {
  
    $sql = "INSERT INTO register (username,email,password,phanquyen) VALUES ('$username','$email','$password','$phanquyen')";
    $sql_info = mysqli_query($conn, $sql);
    if($sql_info)
    {
        $_SESSION['success'] = "<script>swal('Thông Báo', 'Bạn Đã Thêm Thành Công!', 'success')</script>";
        header('Location: /dashboard.php');
    }
    else 
    {
        $_SESSION['status'] = "<script>swal('Thông Báo', 'Thêm Không Thành Công!', 'error')</script>";
        header('Location: /dashboard.php');
    }
}
else {
    $_SESSION['status'] = "<script>swal('Thông Báo', 'Mật Khẩu Không Trùng!', 'error')</script>";
    header('Location: /dashboard.php');
}
}


if(isset($_POST['addmoney'])){
    $username = $_POST['username'];
    $money = $_POST['money'];
    $sql_info = mysqli_query($conn, "UPDATE `register` SET `money`=`money`+'$money' WHERE `username`='$username'");
    if($sql_info)
    {
        $_SESSION['success'] = "<script>swal('Thông Báo', 'Thành Công !', 'success')</script>";
        header('Location: /dashboard.php');
    }
    else
    {
        $_SESSION['status'] = "<script>swal('Thông Báo', ' Thất Bại !', 'error')</script>";
        header('Location: /dashboard.php');
        }

}


    
?>
