<?php
session_start();
require_once 'database.php';
/***

 crud/delete.php
 Xóa bản ghi theo id bắt từ url

 */
// Lấy giá trị id từ url
// xử lí validate cho id giống như lúc cập nhật
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    $_SESSION['error'] = 'ID không hợp lệ';
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];
// tương tác với CSDL để thực hiện xóa bản ghi theo id
// viết truy vấn
$sql_delete = "DELETE FROM products WHERE id = $id";
// Thực thi truy vấn
$is_delete = mysqli_query($connection, $sql_delete);
var_dump($is_delete);
if ($is_delete){
    $_SESSION['success'] = 'Xóa thành công';

} else{
    $_SESSION['error'] = 'Xóa thất bại';
}
header('Location: index.php');
exit();
?>