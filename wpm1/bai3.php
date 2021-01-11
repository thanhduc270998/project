<?php
session_start();
$error = '';
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    if (empty($username) || empty($name) || empty($password)) {
        $error = 'Không được để trống';
    }
    if (empty($error)) {
        $_SESSION['success'] = 'Đăng kí thành công';
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    }
}
?>
<style>
    table tr th {
        padding: 10px;
    }

    table tr td {
        padding: 10px;
    }
</style>
<p style="color:red">
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</p>
<p style="color: red;"><?php echo $error; ?></p>
<table border="1" cellspacing="0">
    <form action="" method="post">
        <tr>
            <th colspan="2" style="background-color: #0000FF; color: white;">Form đăng ký</th>
        </tr>
        <tr>
            <td>Nhập username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Nhập họ tên</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Nhập password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="2">
                <input type="submit" name="register" value="Đăng ký">
                <input type="reset" name="reset" value="Nhập lại">
            </td>
        </tr>
    </form>
</table>