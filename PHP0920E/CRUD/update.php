<?php
session_start();
require_once 'database.php';
/***

 Form update rất giống form thêm mới, mặc định dc đổ dữ liệu vào các input


 + copy form HTML từ file create.php -> file hiện tại
 */
// lấy thông tin sản phẩm dựa vào id từ url
// ....update.php?iu=2
// cần phải check user sửa url
// set id không phải số
$error ='';
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    $_SESSION['error'] = 'ID không hợp lệ';
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];
// tương tác với CSDL -> lấy sp theo id -> đổ dữ liệu ra form
// viết truy vấn lấy dữ liệu select
$sql_select_one = "SELECT * FROM products 
WHERE id = $id";
// Thực thi truy vấn -> obj trung gian
$result_once = mysqli_query($connection , $sql_select_one);
// lấy mảng kết hợp từ obj trung gian trên
$product = mysqli_fetch_assoc($result_once);
echo "<pre>";
print_r($product);
echo "</pre>";
// xử lí submit form : rất giống form thêm mới
// Debug: $_POST, $_FILE
// khai báo biến chứa lỗi
$error ='';
// nếu user submit form thì mới xử lí
if(isset($_POST['submit'])){
    // gán biến trung gian
    $name = $_POST['name'];
    $price =  $_POST['price'];
    $avatar_arr = $_FILES['avatar'];
    // validate form: giống hệt như thêm mới
    // xử lí upload file nếu có
    // Xử lí logic bài toán chỉ khi ko có lỗi xảy ra
    if(empty($error)){
        // nếu user ko upload đè ảnh , thì vẫn phải giữ nguyên tên file ảnh cũ
        $avatar = $product['avatar'];
        // nếu upload đè file thì xử lí upload file mới và phải xóa file cũ để tránh rác hệ thống : unlink
        if($avatar_arr['error'] == 0){
            $dir_upload = 'uploads';
            if(!file_exists($dir_upload)){ // kiểm tra xem đường dẫn đến file có tồn tại hay k : file_exists
                mkdir($dir_upload);
            }
            // xóa file cũ đi
            unlink("uploads/$avatar");
            // tạo tên file có tính duy nhất
            $avatar = time() . '-' . $avatar_arr['name'];
            move_uploaded_file($avatar_arr['tmp_name'] , $dir_upload . "/" . $avatar);
        }
// tương tác cập nhật bản ghi
// viết truy vấn
        $sql_update = "UPDATE products SET name = '$name' , avatar = '$avatar', price = $price WHERE  id = $id";
// thực thi truy vấn
        $is_update = mysqli_query($connection , $sql_update);
        if($is_update){
            $_SESSION['success'] = "update thành công";
            header('Location: index.php');
            exit();
        } else{
            $error = 'Update thất bại';
        }
    }
}

?>
<h3 style="color: red"><?php echo $error; ?></h3>
<h2>Form cập nhật sản phẩm</h2>
<form action="" method="POST" enctype="multipart/form-data">
    Nhập tên:
    <input type="text" name="name" value="<?php echo isset($_POST['name'])?
        $_POST['name'] : $product['name'];
    ?>">
    <br>
    <input type="file" name="avatar">
    <img src="uploads/<?php echo $product['avatar']?>" alt="Image" height="100px">
    <br>
    Gía:
    <input type="text" name="price" value=" <?php echo isset($_POST['price'])?
        $_POST['price'] : $product['price'];
    ?>">
    <br>
    <input type="submit" name="submit" value="Lưu sp">
</form>
