<?php
require("connect.php");
class model extends connectDB{

    protected $table = '';
    private $wheres = '';
    private $update ='';
    private $add ='';

    function __construct(){
        parent::__construct('localhost','user','root','');
    }
    public function table($table)
    {
        $this->table = $table;
        return $table;
    }
    public function where(array $wheres = [])
    {
        $this->where = $this->implode($wheres,'where','and');
            return $this;
    }
    public function get()
    {
        $query = $this->conn->prepare("select * form{$this->table} {$this->where} {$this->and}");
        $query->setFetchMode(PDO::FETCH_OBJ); //THIẾT LẬP KIỂU DỮ LIỆU TRẢ VỀ
        $query->execute(); //THỰC THI
        return $query->fetchAll(); // TRẢ VỀ TẤT CẢ CÁC DỮ LIỆU CỦA $query
    }
    private function implode($array,$type,$char)
    {   if(is_array($array) && !empty($array))
        $sql = $type . ' ';
        $update = [];
        foreach($array as $key=>$value)
        {
            if(is_numeric($value))
                $update[] = $key.'='.$value;
            else 
                $update[] = $key." = '".$value."'";
        }
        $sql .= implode($char, $update);
        return $sql;
    }   
}
?>