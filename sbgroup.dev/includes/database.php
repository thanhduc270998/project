<?php
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "zhhfceguhosting_sbgroup";

$conn = mysqli_connect($server_name,$db_username,$db_password);
$secutiry = mysqli_select_db($conn,$db_name);
mysqli_query($conn,"set names 'utf8'");  date_default_timezone_set("Asia/Ho_Chi_Minh");


?>