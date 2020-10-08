<?php
require 'connect.php';
class model extends connectDB{

    protected $table = '';
    private $wheres = '';
    private $updates = '';
// gọi hàm cha ra
    function __construct()
    {
        parent::__construct('127.0.0.1', 'test02', 'root', 'phuongdaik@');
    }
//trỏ vào database
    public function table($table)
    {
        $this->table = $table;
        return $this;
    }
    public function where(array $wheres = [])
    {
        //['id' => 1, 'username' => 'admin']
        //'id = 1 and username = 'admin''
        $this->wheres = $this->implode($wheres, 'where', 'and');
             return $this;
    } 
    //gọi bảng ra
    public function get()
    {
        $query = $this->conn->prepare("select * from {$this->table} {$this->wheres}");
        $query->setFetchMode(PDO::FETCH_OBJ);

        $query->execute();
        
        return $query->fetchAll();
    }
    private function implode($arrays, $type, $char)
    {
        if(is_array($arrays) && !empty($arrays))
        {
            $sql = $type.' ';
            $update = [];
            foreach($arrays as $key => $value)
            {
                if(is_numeric($value))
                    $update[] = $key.'='.$value;
                else
                    $update[] = $key." = '".$value."'";
            }
            $sql .= implode($char, $update);
        }
        return $sql;
    }
    public function update(array $updates = [])
    {
        $this->updates = $this->implode($updates, 'set', ',');
        $query = $this->conn->prepare("update {$this->table} {$this->updates} {$this->wheres}");
        return $query->execute();
    }

    public function delete()
    {
        $query = $this->conn->prepare("delete from {$this->table} {$this->wheres}");
        return $query->execute();
    }
}