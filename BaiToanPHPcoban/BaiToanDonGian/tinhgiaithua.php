<?php
  
// function tinhgiaithua($a){
//     $giaithua = 1;
// if ( $a == 0 ){

//     return 0;
// }
//     for ($i = 1 ; $i <= $a ; $i++){
//         $giaithua = $giaithua * $i;
//     }
//     return $giaithua;
// }

//     echo tinhgiaithua(3);

function giaithua($a){
    if ($a == 1)
    return 1;   
    else
    return ($a * giaithua($a - 1));
}
echo giaithua(5);
?>