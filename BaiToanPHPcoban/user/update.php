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
require("connect.php");
$id = $_GET['id'];
$user = $conn->prepare('select * from user where id=:id');
$user->bindParam(':id',$id);
$user->execute();
$conn->getAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$row = $user->fetch(PDO::FETCH_ASSOC);
?>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
        <input type="text" class="form-control" name="username" value="<?php echo $row['user'] ;?>">
        </div>
        <div class="form-group">
        <input type="password" class="form-control" name="password" value="<?php echo $row['user'] ;?>">
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary " name="btnsubmit" value="<?php echo $row['user'] ;?>">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ;?>">
        </div>
    </form>
</div>
<?php
if (isset($_POST['btnsubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = $conn->prepare('update user set username=:username , password=:password where id =:id');
    $user->bindParam(':username',$username);
    $user->bindParam(':password',$password);
    $user->bindParam(':id',$id);
}
try{
    $user->execute();
    echo "Update thành công";
    header("location: select.php");
}catch(PDOException $e){
    echo $e->getMessage();
}
?>
</body>
</html>