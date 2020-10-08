<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require("PHP-connect.php");
$id = $_GET['id'];
$user = $conn->prepare('select * from users where id=:id');
$user->bindParam(':id',$id);
$user->execute();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$row = $user->fetch(PDO::FETCH_ASSOC);
?>
<div class="container ">
    
<form action="" method="post">
<div class="form-group">
<input class="form-control" type="text" name="user" value="<?php echo $row['user'] ; ?>">
</div>
    <div class="form-group">
    <input class="form-control" type="password" name="password" value="<?php echo $row['password'];?>">
    </div>
    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="btnsubmit">
    </div>
</form>
</div>
<?php
if(isset($_POST['btnsubmit'])){
    $username = $_POST['user'];
    $password = $_POST['password'];
    $user = $conn->prepare('update users set user =:user , password =:password where id = :id');
    $user->bindParam(':user', $username);
    $user->bindParam(':password', $password);
    $user->bindParam(':id', $id);
    try{
        $user->execute();
        echo "Update thành công";
        header("location: select.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>
</body>
</html>