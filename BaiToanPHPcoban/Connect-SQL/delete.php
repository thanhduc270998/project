<?php
require("PHP-connect.php");

    
    try{
    $id = $_GET['id'];
    $conn = new PDO("mysql:host=$servername;dbname=baitapsql",$username,$password);    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM users WHERE id = :id";
    $user=$conn->prepare($sql);
    $user->bindParam(':id', $id);
    $user->execute();
    echo  "Xóa thành công"; 
    header("location: select.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }




// try{
//     $id = $_GET['id'];
//     $sql = "
//     DELETE FROM users WHERE id =:id";
//     $user->bindParam(':id',$id);
//     $user->execute();
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $row = $user->fetch(PDO::FETCH_ASSOC);
//     echo "Xóa thành công";  
//     print_r($user);
//     die();
// }
// catch(PDOException $e){
//     echo $e->getMessage();
// }
// ?>