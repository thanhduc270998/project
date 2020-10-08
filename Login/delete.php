<?php
require('connect.php');
try{
    $id = $_GET['id'];
    $conn = new PDO("mysql:host=localhost;dbname=baitapsql",'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $sql = "delete from user where id =:id";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id);
    $result->execute();
    echo 'Xóa Thành Công';
    header('location: admin.php');
}catch(PDOException $e){
    echo $e;

}
?>