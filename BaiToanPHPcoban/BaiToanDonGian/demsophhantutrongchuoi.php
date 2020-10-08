<?php 
$chuoi = 'Kết luận chỉ đạo tại buổi lễ, ông Phạm Quang Dũng - Tổng Giám đốc Vietcombank khẳng định với sự ủng hộ, chỉ đạo sát sao của Ban Lãnh đạo cùng  sự nỗ lực hết mình của đội ngũ nhân sự chất lượng cao của Vietcombank và năng lực của FNIS, dự án sẽ thành công, góp phần giúp Vietcombank  tăng cường hiệu quả công việc và trở thành một trong những ngân hàng dẫn đầu về dịch vụ khách hàng.';
$x=0;
$dem=0;
//$x = strpos($chuoi, 'c');
    for($x=0;$x <= strlen($chuoi);$x++){
        if($chuoi[$x] == 'c'){
            $dem++;
        } 
    }
    echo 'Số phần tử c trong chuỗi là'. " ".$dem;
?>      