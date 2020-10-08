<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    require('connect.php');
    try {
        $user = $conn->prepare("select * from user");
        $user->execute();
        $result = $user->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e;
    }
    echo "Trang quản trị hệ thống";
    echo '<table border = 1 class="table table-hover">';
    echo "<tr><th>ID</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th>Số điện thoại</th>
<th colspan = 2>Hành Động</th>
</tr>";
    foreach ($result as $user) {
        echo "<tr>";
        echo "<td>" . $user['id'] . "</td>";
        echo "<td>" . $user['username'] . "</td>";
        echo "<td>" . $user['password'] . "</td>";
        echo "<td>" . $user['email'] . "</td>";
        echo "<td>" . $user['telephone'] . "</td>";
        echo "<td>" . '<a href="update.php?id=' . $user['id'] . '">Sửa</a>' . "</td>";
        echo "<td>" . '<a href="delete.php?id=' . $user['id'] . '">Xóa</a>' . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>

</html>