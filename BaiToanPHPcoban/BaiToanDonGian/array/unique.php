<?php
$mang = array(1,24,55,6,11,3,2,6,3,23,2,6,1);
// $unique = array();
// foreach($mang as $value){
//     isset($key[$value]) || ($key[$value] = 1) && $unique[] = $value;
// }
$unique = array_keys(array_flip($mang));
print_r($unique);
?>