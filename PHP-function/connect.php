<?php 
    class connectDB{
        public $conn= null;

    function __construct($host,$dbname,$username,$password){
        try{
            $this->conn =new PDO("mysql:host =$host;dbname = $dbname,$username,$password");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('Lỗi kết nối');
        }
    }
    }
?>