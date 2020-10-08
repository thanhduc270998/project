<?php
// Kiểm tra xem đã có tệp webdictionary.txt chưa , nếu chưa có thì thêm mới tệp theo tên mình thiết lập
function themSp($sampham)
{ 
    $myfile = fopen("webdictionary.txt", "a+") or die("Unable to open file!");
    fwrite($myfile, $sampham); //fwrite (file đã được mở trước đó trả từ hàm fopen , nội dung muốn ghi)
    fclose($myfile); // fclose là đóng 1 tệp đang mở
}
function danhSachSanPham()
{
    $arrays = [];
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    fwrite($myfile, 'test');
    while(!feof($myfile))// kiểm tra xem tệp $myfile đã mở hay chưa
    {
        $content = fgets($myfile);
        if(!empty($content)) // kiểm tra xem tệp $content có rỗng hay không
            $arrays[] = explode('|', $content); // loại bỏ kí tự | trong hàm content
    }
    fclose($myfile);
    return $arrays;
}