<?php
    $mang_lien_hop = array(
    "Đây là số"=>"s",
    "ây là số"=>"a",
    "nây là số "=>"f",
    "iây là số"=>"v",
    "cây là số"=>"r",
    "mây là số "=>"u",
    "tây là số"=>"r"
    ,"uây là số"=>"n",

    "zây là số "=>"m",
    "fgây là số "=>"e",

);
        // hàm sort sắp xếp mảng theo thứ tự tăng dần , trả lại về TRUE nếu thành cong , FALSE nếu không thành công
    sort($mang_lien_hop);
    foreach ($mang_lien_hop as $key=>$values){
        echo $values.'<br>';
    }

?>