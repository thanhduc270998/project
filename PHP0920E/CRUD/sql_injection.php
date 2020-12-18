<?php
require_once 'database.php';
/**
Lỗi bảo mật SQL Injection trong câu truy vấn
 -Là lỗi tấn công vào câu truy vấn sql
VD: Demo chức năng tìm kiếm theo tên sp

 **/
// xử li submit form
if(isset($_POST['submit'])){
    // fix lỗi bảo mật SQL Injection bằng cách lọc dữ liệu từ form = hàm sau
    $name = $_POST['name'];
    $name= mysqli_real_escape_string($connection,$name);

    // cần tìm iphone -> ne , ph -> dùng LIKE
    // viết truy vấn:
    $sql_select_all = "SELECT * FROM products WHERE name LIKE '%$name%'";
    var_dump($sql_select_all);
    // Thực thi truy vấn
    $result_all = mysqli_query($connection , $sql_select_all);
    // trả về mảng kết hợp từ obj trung gian trên
    $products = mysqli_fetch_all($result_all,MYSQLI_ASSOC);
    echo "<pre>";
    print_r($products);
    echo "</pre>";
    // thử nhập chuỗi tìm kiếm sau:
    //123456' OR name != ' -> show ra hết bản ghi
    // => dính lỗi bảo mật SQL Injection
}
?>
<form action="" method="post">
   Nhập tên sp:
    <input type="text" name="name"
           value="<?php echo isset($_POST['name']) ? $_POST['name'] : '';

           ?>">
    <br>
    <input type="submit" name="submit" value="Tìm Kiếm">

</form>
