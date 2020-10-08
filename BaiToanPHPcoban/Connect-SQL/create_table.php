<?php 
    require("PHP-connect.php");

    try{
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql ="        
        CREATE TABLE users (
            id INT auto_increment PRIMARY KEY,
            user VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL
        )";
        $conn->exec($sql);
        echo "Tạo bảng thành công";
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>