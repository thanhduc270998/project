<?php

class connectDB{
    public $conn = null;

    function __construct($host, $dbname, $username, $password)
    {
        try{
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die('loi ket noi');
        }
        
    }
}
// $host = '127.0.0.1';
// $dbname = 'test02';
// $username = 'root';
// $password = 'phuongdaik@';

// try{
   
    // $sql = "create table users (id int auto_increment primary key, username varchar(20) not null, password varchar(100) not null)";


    // $conn->beginTransaction();

    // $sql = "insert into users(username, password) values ('admin6', '123456')";
    // $conn->exec($sql);


    // $conn->scommit();
    // echo 'last id: '.$conn->lastInsertId();

    // $query = $conn->prepare('insert into users(username, password) values (:username, :password)');

    // $query->bindParam(':username', $user);
    // $query->bindParam(':password', $pass);

    // $user = 'admin11';
    // $pass = '1234567';
    // $query->execute();

    // $query = $conn->prepare('select * from users');

    // $query->execute();

    // $query->setAttribute(PDO::FETCH_ASSOC);

    // echo '<table border="1">';
    // echo '<tr><th>id</th><th>username</th><th>password</th></tr>';
    // foreach($query->fetchAll() as $value)
    // {
    //     echo '<tr><th>'.$value['id'].'</th><th>'.$value['username'].'</th><th>'.$value['password'].'</th></tr>';
    // }

    // echo '</table>';

    // echo 'ket noi thanh cong';
// }
// catch(PDOException $e)
// {
//     echo 'Loi: '.$e->getMessage();
// }