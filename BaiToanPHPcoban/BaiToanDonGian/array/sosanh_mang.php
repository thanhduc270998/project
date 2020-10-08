<?php
$color1 = array("a"=>"Xanh", "b"=>"Đỏ", "c"=>"Tím" , "Vàng");
$color2 = array("a"=>"Xanh", "Trắng" ,"Đỏ");
function so_sanh($a , $b)
{
    if ($a === $b){
        return 0;
        return ($a > $b)? 1:-1;
    }
};
$result = array_diff_uassoc($color1,$color2,"so_sanh");
so_sanh($color1,$color2);
print_r($result);
?>