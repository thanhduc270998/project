<?php 
$tin_rao = 'Cho thuê văn phòng chuyên nghiệp phố Phố Tây Sơn, Đống Đa, Hà Nội.
Đa dạng diện tích cho thuê từ 100m2, 200m2 tới 1500 m2.
Liên hệ Phương Bắc 0913572439.
Giá thuê từ 227.2 nghìn/m2/tháng gồm VAT.
Các tòa nhà điển hình:
+ Tòa nhà 187 Tây Sơn.
Là tòa nhà Complex 3 tầng thương mại và căn hộ cao cấp, mặt tiền 50m, giao thông thuận tiện và quảng bá tốt thương hiệu.
- Diện tích sàn 1000m2.
- 01 tầng hầm.
- Hệ thống thang máy 05 thang, độc lập văn phòng và chung cư.
- Hệ thống điều hòa âm trần.
Quý khách có nhu cầu thuê và tham khảo thông tin miễn phí.
Mr Phương Bắc 0913572439 hoặc 0912828282.
Chị Mai 0968902117
Xin chân thành cảm ơn!';

$pattern = '/09[0-9]{8}/';

// preg_match_all($pattern, $tin_rao, $output);

$x = explode(" ",str_replace(PHP_EOL, ' ', $tin_rao));
$mang = [];
foreach($x as $value){  
    if (preg_match($pattern, $value, $output))
    {
        $mang[] = array_shift($output);
    }
}
echo '<pre>';
var_dump(array_unique($mang));
?>