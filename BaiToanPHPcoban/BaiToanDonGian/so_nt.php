<?php
// $i = 0;
//     for ($i = ;$i<= 100;$i++){
//         $i++;
//     //     if ($i <2){
//     //         return false;
//     //     }else{
//     //     if ($i%2!=0){
//     //         return $i;
//     //         }
//     //     }
//     echo 'a'.$i;
//  }

function check_string($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_string($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check_string($i))
            echo $i, '<br>';
    }
}
show_string(1, 60);