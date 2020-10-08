    <?php
    $Date_of_birth_continue = mktime(0,0,0,9,27,2021);
    $Ngay_hom_nay = time();
    $So_ngay_con_lai = (int)(($Date_of_birth_continue - $Ngay_hom_nay)/86400);
    Echo 'Số ngày còn lại là đến sinh nhật bạn là :'.' '. $So_ngay_con_lai .' ' .'Ngày';
    ?>