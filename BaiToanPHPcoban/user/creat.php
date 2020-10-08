<?php
    require("connect.php");
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $sql ="
    CREATE TABLE user (
        id INT auto_increment PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        telephone INT
    )";
    echo '__FILE__.'.'.__LINE__';
    echo '<pre>';
    echo 'print_r($sql)';
    echo '</pre>';
    $conn->exec($sql);
    echo 'Chúc mừng bạn tạo bảng thành công';
}catch(PDOException $e){
    echo $e->getMessage();
}
$conn = null;
?>