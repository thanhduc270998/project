<?php
    $mang = [32,24,5,62,43,67,836,83,46,7,3];
    $tong = 0;
    for ($i=0;$i<count($mang);$i++)
    {   
        $tong = $tong + $mang[$i];
    }
    echo 'Tổng phần tử trong mảng là :'.$tong;
    ?>