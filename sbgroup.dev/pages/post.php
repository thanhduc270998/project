<?php
session_start();
include("../includes/database.php");


if(isset($_POST['viplike']))
{
    $uidlike             = $_POST['uidlike'];
    $soluonglike         = $_POST['soluonglike'];
    $ngaythuelike        = $_POST['ngaythuelike'];
    $timelike     = $_POST['timelike'];
    $camxuclike          = $_POST['camxuclike'];
    $usernamelike           = $_POST['usernamelike'];
    $tinhtranglike       = $_POST['tinhtranglike'];

    $query = "INSERT INTO viplike (uid,soluong,ngaythue,time,camxuc,username,tinhtrang) VALUES ('$uidlike','$soluonglike','$ngaythuelike','$timelike','$camxuclike','$usernamelike','$tinhtranglike') ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success'] = "<script>swal('Thông Báo', 'Mua Dịch Vụ Thành Công ! Vui Lòng Liên Hệ Admin Để Được Duyệt.', 'success')</script>";
        header('Location: /pages/viplike.php');
    }
    else
    {
        $_SESSION['status'] = "<script>swal('Thông Báo', 'Mua Thất Bại !', 'error')</script>";
        header('Location: /pages/viplike.php');
        }

}
if(isset($_POST['bufflike']))
{
    $uidbufflike            = $_POST['uidbufflike'];
    $soluongbufflike         = $_POST['soluongbufflike'];
    $tinhtrangbufflike      = $_POST['tinhtrangbufflike'];
    $usernamebufflike       = $_POST['usernamebufflike'];
    $query = "INSERT INTO bufflike (uid,soluong,tinhtrang,username) VALUES ('$uidbufflike','$soluongbufflike','$tinhtrangbufflike','$usernamebufflike') ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success'] = "<script>swal('Thông Báo', 'Mua Dịch Vụ Thành Công !', 'success')</script>";
        header('Location: /pages/bufflike.php');
    }
    else
    {
        $_SESSION['status'] = "<script>swal('Thông Báo', 'Mua Thất Bại !', 'error')</script>";
        header('Location: /pages/bufflike.php');
        }

}
if(isset($_POST['vipcmt']))
{
    $uidcmt            = $_POST['uidcmt'];
    $soluongcmt         = $_POST['soluongcmt'];
    $ngaythuecmt        = $_POST['ngaythuecmt'];
    $timecmt       = $_POST['timecmt'];
    $noidungcmt      = $_POST['noidungcmt'];
    $tinhtrangcmt      = $_POST['tinhtrangcmt'];
    $usernamecmt      = $_POST['usernamecmt'];

    $query = "INSERT INTO vipcmt (uid,soluong,ngaythue,time,noidung,username,tinhtrang) VALUES ('$uidcmt','$soluongcmt','$ngaythuecmt','$timecmt','$noidungcmt','$usernamecmt','$tinhtrangcmt') ";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success'] = "<script>swal('Thông Báo', 'Mua Dịch Vụ Thành Công !', 'success')</script>";
        header('Location: /pages/vipcmt.php');
    }
    else
    {
        $_SESSION['status'] = "<script>swal('Thông Báo', 'Mua Thất Bại !', 'error')</script>";
        header('Location: /pages/vipcmt.php');
        }

}



if(isset($_POST['vipbot']))
{
    $tokens            = $_POST['tokens'];
    $ngaythuebot         = $_POST['ngaythuebot'];
    $camxucbot        = $_POST['camxucbot'];
    $usernamebot      = $_POST['usernamebot'];
    $tinhtrangbot       = $_POST['tinhtrangbot'];
  

    $query = "INSERT INTO vipbot (tokens,ngaythue,camxuc,username,tinhtrang) VALUES ('$tokens','$ngaythuebot','$camxucbot','$usernamebot','$tinhtrangbot') ";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success'] = "<script>swal('Thông Báo', 'Mua Dịch Vụ Thành Công !', 'success')</script>";
        header('Location: /pages/botcamxuc.php');
    }
    else
    {
        $_SESSION['status'] = "<script>swal('Thông Báo', 'Mua Thất Bại !', 'error')</script>";
        header('Location: /pages/botcamxuc.php');
        }

}





if(isset($_POST['profile']))
{
    $e_fullname      = $_POST['e_fullname'];
    $user            = $_SESSION['username'];

  

    $query = "UPDATE register SET ten='$e_fullname' WHERE username='$user'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success'] = "<script>swal('Thông Báo', 'Cập Nhật Thông Tin Thành Công !', 'success')</script>";
        header('Location: /pages/profile.php');
    }
    else
    {
        $_SESSION['status'] = "<script>swal('Thông Báo', 'Cập Nhật Thông Tin Thất Bại !', 'error')</script>";
        header('Location: /pages/profile.php');
        }

}
















?>
