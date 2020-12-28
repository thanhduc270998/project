<?php
/***
*KẾT NỐI CSDL THEO CƠ CHẾ PDO
 * PHP data Object -> cơ chế kết nối CSDL
 * PDO kết nối nhiều CSDL, MySQLi chỉ kết nối đc với CSDL MySQL
 * PDO viết hoàn toàn theo OOP -> khó nhớ hơn MySQLi
 * PDO bảo mật hơn MySQLi bởi cơ chế bind param vào câu truy vấn
 * Các framework/cms thường dùng PDO
 * Các bước kết nối giống MySQLi
 */
// khởi tạo kết nối
//DSN - Data source name - chuỗi kết nối theo PDO
const DB_DSN ='mysql:host=localhost;dbname=php0920e_oop;port=3306;charset=utf8';
// username
const DB_USERNAME = 'root';
//password
const DB_PASSWORD = '';
//Với PDO nên khởi tạo kết nối trong try catch
try{
    $connection = new PDO(DB_DSN, DB_USERNAME , DB_PASSWORD);
}catch (PDOException $e){
    die("Lỗi" . $e->getMessage());
}
echo "<h2>Kết nối theo PDO thành công</h2>";
// 2 -truy vấn INSERT
// viết câu truy vấn, với các trường có kiểu dữ liệu là chuỗi bắt buộc cần phải chống SQLInjection , bằng cách bind param/ tạo tham số trong câu truy vấn
// không cần thể hiện giá trị của tham  số trong chuỗi
$sql_insert = "INSERT INTO books(name, amount) VALUES (:name, :amount)";
// + Chuẩn bị đối tượng truy vấn
$obj_insert = $connection->prepare($sql_insert);
// + Tạo mảng để truyền giá trị thật cho tham số trong câu truy vấn
//là Bước trung gian , chỉ sinh ra nếu câu truy vấn có tham số
// số phần tử mảng đúng bằng số lượng tham số trong câu truy vấn
$inserts = [
':name' =>'Book PDO 1',
    ':amount' => 100
];
// thực thi đối tượng truy vấn,  với INSERT/UPDATE/DELETE ->boolean
$is_insert = $obj_insert->execute($inserts);
var_dump($is_insert);
// 3 truy vấn UPDATE
// viết câu truy vấn , ko sử dụng tham số trong câu truy vấn
$sql_update = "UPDATE books SET name=:name, amount = 20 WHERE id=1";
// chuẩn bị đối tượng truy vấn
$obj_update = $connection->prepare($sql_update);
// + Tạo mảng để truyền giá trtị thật cho câu truy vấn
$updates =[
    ':name'=> 'Name 1 PDO'
];
// + Thực thi truy vấn trên
$is_update = $obj_update->execute($updates);
var_dump($is_update);
// 4 - truy vấn DELETE: xóa bản ghi có id > 5
// viết truy vấn : k cần tham số
$sql_delete = "DELETE FROM books WHERE id > 5";
// chuẩn bị đối tượgn truy vấn
$obj_delete = $connection->prepare($sql_delete);
// bỏ qua bước tạo mảng trung gian vì cây truy vấn ko có tham số nào
// thực thi đối tượng truy vấn
$is_delete = $obj_delete->execute();
var_dump($is_delete);