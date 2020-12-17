<?php
require_once 'database.php';
session_start();

/**
Thêm mới sản phẩm
 * bảng products: id , name, avatar , price , created_at
 */
// Xử lý submit form
// Debug các biến liên quan: $_POST , $_FILES
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
// khai báo biến chứa thông tin lỗi/ kết quả
$error = '';
// xử lí submit form
if(isset($_POST['submit'])){
    // gán biến trung gian
    $name = $_POST['name'];
    $price = $_POST['price'];
    $avatar_arr = $_FILES['avatar'];
    // validate form:
    // Tên giá ko đc để trống
    // tên phải là số
    // file upload phải là ảnh, dung lượng max = 2MB
    if (empty($name) || empty($price)){
        $error = 'Phải nhập tên hoặc giá';
    } elseif(!is_numeric($price)){
        $error = 'Gía trị phải là số';
    } elseif ($avatar_arr['error'] == 0){
        // file phải là ảnh, dựa vào đuôi file
        $extension = pathinfo($avatar_arr['name'] , PATHINFO_EXTENSION);
        $extension = strtolower($extension); // chuyển về kí tự thường
        $extension_allow = ['jpeg','jpg','gif' , 'png']; // mảng đuôi file ảnh hợp lệ
        if(!in_array($extension,$extension_allow)){
            $error = 'File phải là dạng ảnh';

        }
        // file <=2mb
        // 1mb = 1024MB = 1024 *1024B
        $size_b = $avatar_arr['size'];
        $size_mb = $size_b / (1024 * 1024);
        $size_mb  = round($size_mb , 1); // làm tròn giữ lại số thập phân
        if($size_mb > 2){
            $error = 'File phải nhỏ hơn 2MB';
        }
    }
    // xử lí logic bài toán chỉ khi ko có lỗi
    // xư lí upload file , nếu có file đc tải lên
    if($avatar_arr['error'] == 0){
        $dir_upload = 'uploads';
        // Nếu chưa tồn tại thì mới tạo thư mục : file_exist
        if(!file_exists($dir_upload)){
            mkdir($dir_upload); // tạo thư mục
        }
        // tạo tên file mang tính duy nhất, để tránh ghi đè file khi tải file trùng tên
        $avatar = time() . '-' . $avatar_arr['name'];
        var_dump($avatar);
        // upload file
        move_uploaded_file($avatar_arr['tmp_name'], $dir_upload . "/" . $avatar);
    }
    // lưu vào bảng productss: id , name , avatar , price , creatred_at
    // + Tạo câu truy vấn
    $sql_insert = "INSERT INTO products(name, avatar , price) VALUES ('$name' , '$avatar', $price)"; // do biến price kiểu số nên k trong ngoặc
    // Thực thi truy vấn
    $is_insert = mysqli_query($connection, $sql_insert);
    //var_dump($is_insert);
    if($is_insert){
        $_SESSION['success'] = 'Thêm mới thành công';
        header('Location: index.php');
        exit();
    }else{
        $error = 'Thêm mới thất bại';
    }


}

?>
<h3 style="color: red"><?php echo $error; ?></h3>
<h2>Form thêm mới sản phẩm</h2>
<form action="" method="POST" enctype="multipart/form-data">
    Nhập tên:
    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
    <br>
    <input type="file" name="avatar">
    <br>
    Gía:
    <input type="text" name="price" value=" <?php echo isset($_POST['price']) ? $_POST['price'] : '' ;?>">
    <br>
    <input type="submit" name="submit" value="Lưu sp">
</form>
