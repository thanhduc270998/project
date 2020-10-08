<?php
require("connect.php");
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " 
    INSERT INTO user(username,password,email,telephone) VALUES('admin1','password1','truongthanhduc270998@gmail.com','0866699365');";
    $sql .= " 
    INSERT INTO user(username,password,email,telephone) VALUES('admin2','password2','truongthanhduc27091998@gmail.com','0336641555');";
    $sql .= " 
    INSERT INTO user(username,password,email,telephone) VALUES('admin3','password3','truongthanhduc2709@gmail.com','0327116326');";
    $conn->exec($sql);
    echo "Thêm dữ liệu thành công";
}catch(PDOException $e){
    echo $e->getMessage();
}
?>