<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    require("connect.php");
    try{
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $user=$conn->prepare("SELECT * FROM user");
        $user->execute();
        $result = $user->fetchALL(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    echo "<table border = 1>";
    echo "<tr><th>ID</th><th>username</th><th>password</th><th>email</th><th>số điện thoại</th><th cowspan=3 >Hành động</th></tr>";
    foreach($result as $user){
    echo "<tr>";
    echo "<td>".$user['id']."</td>";
    echo "<td>".$user['username']."</td>";
    echo "<td>".$user['password']."</td>";
    echo "<td>".$user['email']."</td>";
    echo "<td>".$user['telephone']."</td>";
    echo "<td>".'<a href="update.php?id='.$user['id'].'">Sửa</a>'."</td>";
    echo "<td>".'<a href="delete.php?id='.$user['id'].'">Xóa</a>'."</td>";
    echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>