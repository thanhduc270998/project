<?php
session_start();
$error = '';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
    };
    $content = $_POST['content'];
    if (empty($name) || empty($age) || empty($gender) || empty($content)){
        $error = 'Không được để trống';
    }elseif (!is_numeric($age)){
        $error = 'Cần phải nhập số';
    }elseif (empty($error)){
        $_SESSION['success'] = 'Gửi thông tin thành công';
        $_SESSION['name'] = $name;
        header('Location: index.php');
        exit();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <form action="" method="post" enctype="multipart/form-data">
        <tr>
            <th colspan="2">Thông tin liên hệ</th>
        </tr>
        <tr>
            <td>Họ tên (*)</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Tuổi (*)</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>Giới tính (*)</td>
            <td>
                <input type="radio" name="gender" value="male"> Nam
                <input type="radio" name="gender" value="female"> Nữ
            </td>
        </tr>

        <tr>
            <td>Nội dung liên hệ (*)</td>
            <td>
                <textarea name="content" id="" cols="30" rows="5" ></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Gửi thông tin">
                <input type="reset" name="reset" value="Nhập lại">
            </td>
        </tr>
    </form>
</table>
<p style="color: red"><?php echo $error;?></p>
</body>
</html>
