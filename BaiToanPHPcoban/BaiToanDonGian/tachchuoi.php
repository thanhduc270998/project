<?php 
// $chuoi = "truongthanhduc270998@gmail.com";
// $catchuoi = explode('@', $chuoi);
// echo $catchuoi[0];
// echo "</br>";
// echo $catchuoi[1];
    $chuoi = "truongthanhduc270998@gmail.com";
    $findstr = "@";
    $x = strpos($chuoi, $findstr);
    $domain = substr($chuoi,$x+1,strlen($chuoi));
    $y = trim($chuoi,$domain);
    $user = trim($y, $findstr);
    echo $user;
    echo $domain;
?>