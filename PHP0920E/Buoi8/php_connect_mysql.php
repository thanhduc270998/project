<?php
/**
 * Cách PHP tương tác với CSDL MySQL
 * MySQLi để kêts nối
 * Ngoài thư viện MySQLi này còn có cơ chế kết nối khác là PDO (PHP Data Object)
 * MySQLi hỗ trợ cả 2 hướng code : thuần va hướng đối tượng -> hướng dẫn trước ,còn PDO hoàn toàn hướng đối tượng
 * MySQLi chỉ hỗ trợ kết nối tới CSDL là MySQL,
 * PDO kết nối được hết
 * Demo dùng code PHP để insert , select , update , delete vào CSDL
 * Tạo CSDL php0920e)_mysqli:
 * CREATE DATABASE IF NOT EXIST php0920e_mysqli
 * CHARACTER SET utf8 COLLATE utf8_general_ci;
 * - refresh lại trình duyệt , click vào CSDL vừa tạo để tạo bảng products:
 * id: khóa chính, INT(11)
 * name: tên sp
 * description: chi tiết
 * price: giá sp
 * created_at: ngày tạo
 * CREATE TABLE products(

 * id INT(11) AUTO_INCREMENT,
 * name VARCHAR(150),
 * description: TEXT,
 * price INT(11) DEFAULT 0,
 * created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 * PRIMARY KEY (id)
 * )
*/
// các bước kết nối CSDL MySQL bằng PHP dùng thư viện MySQLi
//1 khởi tạo kết nối
// khai báo các hằng kết nối:
const DB_HOST = 'localhost';
// Username đăng nhập vào CSDL , do XAMPP tự sinh ra lúc cài đặt
const DB_USERNAME = 'root';
// Password đăng nhập vào CSDL , giá trị rỗng do XAMPP tạo ra sẵn
const DB_PASSWORD = '';
// Tên CSDL sẽ kết nối
const DB_NAME = 'php0920e_mysqli';
// cổng kết nối CSDL
const DB_POST = 3306;
// các hàm thư viện MySQLi cung cấp có tiền tố là:
// mysqli_
$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME, DB_POST);
if(!$connection){

    die('Kết nối thất bại' . mysqli_connect_error());
}
echo 'Kết nối CSDL thành công';
// 2 - Demo truy vấn thêm dữ liệu vào bảng products id , name , description , price , created_at
// Viết câu truy vấn:
$sql_insert = "INSERT INTO products( name , description , price)
VALUES('Điện thoại SAMSUNG', 'Mô tả chi tiết' , 10)
";
// Thực thi câu truy vấn vừa tạo, với các truy vấn
//INSERT , UPDATE , DELETE thì kết quả sau khi thực thi luôn là true/false
$is_insert = mysqli_query($connection, $sql_insert);
var_dump($is_insert);
// cách debug khi trả về false: copy câu truy vấn vừa tạo
// paste lên tab SQL của PHPMyadmin xem có chạy đc k?

//3 - Demo truy vấn cập nhật
//vd cập nhật bản ghi có id = 1
// Viết câu truy , luôn sd where khi update/delete:
$sql_update = "
UPDATE products 
SET name = 'New name', description = 'New des' , price = 2
WHERE id = 1
";
//Thực thi truy vấn, giống INSERT => true/false
$is_update = mysqli_query($connection, $sql_update);
var_dump($is_update);

// 4 truy vấn xóa
// VD: xóa các bản ghi có id > 10
// viết truy vấn , với DELETE luôn phải kèm WHERE
$sql_delete = "DELETE FROM proceducts WHERE  id >10";
// Thực thi truy vấn , giống INSERT/UPDATE -> true/false
$is_delete = mysqli_query($connection,$sql_delete);
var_dump($is_delete);

// 5- truy vấn lấy dữ liệu, phức tạp nhất
// lấy nhiều bản ghi: lấy tất cả sản phẩm sắp xếp theo id giảm dần
// viết câu truy vấn
$sql_select_all = "SELECT * FROM products ORDER BY id DESC
";
// THỰC THI TRUY VẤN , TUY NHIÊN KẾT QUẢ TRẢ VỀ KHÔNG PHẢI LÀ true/false như INSERT/UPDATE/DELETE, mà là 1 đối tượng trung gian
$result_all = mysqli_query($connection,$sql_select_all);
//echo "<pre>";
//print_r($result_all);
//echo "</pre>";
// trả về mảng các sp dưới đạng mảng kết hợp , phải truyền hằng sau vào tham số thứ 2 của hàm
$products = mysqli_fetch_all($result_all,MYSQLI_ASSOC);
echo "<pre>";
print_r($products);
echo "</pre>";
foreach ($products AS $product){
    echo "<br /> Tên: {$product['name']} , Gía: {$product['price']}";
}
// b / lấy ra 1 phần tử duy nhất
//vd: lấy thông tin sản phảm có id = 1
// viết câu truy vấn
$sql_select_one = "SELECT * FROM products WHERE id = 1";
// thực thi truy vấn , trả về đối tượng trung gian
$result_one = mysqli_query($connection,$sql_select_one);
//trả về mảng 1 chiều
$products = mysqli_fetch_assoc($result_one);
echo "<pre>";
print_r($products);
echo "</pre>";
echo  "<br />
Tên: {$product['name']} , Gía: {$product['price']}
";

?>