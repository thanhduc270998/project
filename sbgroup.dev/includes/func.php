<?php 
include('database.php');

if($_SESSION['username'])
{
   // echo "Đã Kết Nối";
}
else
{
    header("Location: /dashboard.php");
}

if(!$_SESSION['username'])
{
    header("Location: /index.php");

}
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
?>