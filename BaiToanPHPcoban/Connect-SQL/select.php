<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("PHP-connect.php");
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $user = $conn->prepare("SELECT * FROM users");
        $user->execute();
        $result = $user->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        echo "Lỗi: " . $e->getMessage();
    }
    $conn = null;
    echo "<table border = '1'>
    <tr><th>STT</th><th>username</th><th>password</th><th colspan=3>Hành Động</th></tr>";
    foreach($result as $user){
        echo "<tr>";
        echo "<td>" . $user['id'] . "</td>";
        echo "<td>" . $user['user'] . "</td>";
        echo "<td>" . $user['password'] . "</td>";
        echo "<td>".'<a href="">Thêm</a>'."</td>";
        echo "<td>".'<a href="update.php?id='.$user['id'].'">Sửa</a>'."</td>";
        echo "<td>".'<a href="delete.php?id='.$user['id'].'">Xóa</a>'."</td>";
        echo "</tr>";
    }
    echo "</table>";
    $conn = null;
    ?>
</body>
</html>