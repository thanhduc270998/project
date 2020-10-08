<?php 
    require("PHP-connect.php");
    try{
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "
        INSERT INTO users(user ,password) VALUES('admin3','matkhau3')
        ";
        $conn->exec($sql);
        echo "Thêm dữ liệu thành công";
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>