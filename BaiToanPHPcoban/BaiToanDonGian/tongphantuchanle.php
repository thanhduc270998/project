<?php
    $mang = [32,24,5,62,43,67,836,83,46,7,3];
    $tongchan = 0;
    $tongle = 0;
    for ($i=0;$i<count($mang);$i++)
    {
        if ($mang[$i] % 2== 0) {
            $tongchan = $tongchan + $mang[$i];
        }else{
            $tongle = $tongle + $mang[$i];
        } 
    }    
    echo 'Tổng phần tử mảng chẵn là :' .$tongchan;
    echo 'Tổng phần tử mảng lẻ là :' .$tongle;

?>