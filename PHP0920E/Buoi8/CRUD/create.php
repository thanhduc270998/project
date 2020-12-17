<?php
// nhúng file database.php để sử dụng đc biến $connection
require_once 'database.php';
/**
 *crud/create.php
 *Chức năng thêm mới sản phẩm , là chức năng đầu tiên sẽ code của ứng dụng CRUD
 *+ Thêm mới sản phẩm
 *id, name, avatar , pricce, created_at
 */
// xử lí submit form
// debug các biến $_POST , $_FILES
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
// khai báo biến chứa lỗi
$error = '';
// nếu user submit form thì mới xử lý đc
if(isset($_POST['submit'])){
    // gán biến trung gian
    $name = $_POST['name'];
    $price = $_POST['price'];
    $avatar = $_FILES['avatar'];
    // validate form
    // tên , gía không ddược để trống: empty
    // tên ít nhất 3 kí tự: strlen
    // file upload nếu có phải là ảnh, dung lượng <=2mb
    if(empty($name) || empty($price)){
        $error = 'Tên hoặc giá không được để trống';
    }elseif (strlen($name) < 3){
        $error = 'Tên ít nhất 3 ký tự';
    }elseif ($avatar['error'] == 0){
        //validate ảnh
        //validate dung lượng
    }
    // lưu vào csdl khi k có lỗi xảy ra
    if(empty($error)){
        // xử lí upload file nếu user có chọn file
        if($avatar['error'] == 0){
            //code xử lý upload file
        }
        // lưu vào bảng products
        // quay lại các bước tương tác với CSDL
        // Tạo câu truy vấn:
        $sql_insert = "
        INSERT INTO products(name , avatar , price)
        VALUES('$name', '' , '$price')";
        // thực thi truy vấn
        $is_insert = mysqli_query($connection , $sql_insert);
            var_dump($is_insert);
            if($is_insert){
                $_SESSION['success'] = 'Thêm mới thành công';
                header('Location: index.php');
                exit();
            }else{
                $error = 'Thêm thất bại';
        }
    }
}
?>
<h1>Form thêm mới sản phẩm</h1>
<form action="" method="POST" enctype="multipart/form-data">
    Tên sp:
    <input type="text" name="name" value="">
    <br>
    Ảnh đại diện:
    <input type="file" name="avatar">
    <br>
    Gía sp:
    <input type="number" name="price" value="">
    <br>
    <input type="submit" name="submit" value="Lưu">
</form>
