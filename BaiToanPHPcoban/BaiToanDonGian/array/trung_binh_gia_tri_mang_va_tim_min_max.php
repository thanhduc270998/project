<?php
$s = "2,4,1,6,7,8,454,35,74,25,764,57";
$tach_mang = explode(',',$s);
$do_dai_mang = count($tach_mang);
$tong_gia_tri_mang = 0;
for ($i=0;$i < $do_dai_mang;$i++)
{
    $tong_gia_tri_mang = $tong_gia_tri_mang + $tach_mang[$i]; 
}
echo $trung_binh=$tong_gia_tri_mang/$do_dai_mang;
echo"<br>";
echo '5 số nhỏ nhất là:';
for ($i = 0 ; $i < 5; $i++){
    sort($tach_mang);     
echo $tach_mang[$i].","; 
}
echo "<br>";
echo '5 số lớn nhất là:';
for ($i = ($do_dai_mang-5); $i < ($do_dai_mang); $i++){
    sort($tach_mang);     
echo $tach_mang[$i].","; 
}
?>