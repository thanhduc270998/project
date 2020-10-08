<?php
$s = array("aayLaMangLienHop"=>"hihihi", "AuoiLenNao"=>"haha", "blogan"=>"Muaahaha");
$max_key = max(array_keys($s));
$min_key = min(array_keys($s));
echo "Phần tử dài nhất trong bảng mã ASCII là:".$max_key;
echo "<br>";
echo "Phần tử ngắn nhất trong bảng mã ASCII là:".$min_key;
?>