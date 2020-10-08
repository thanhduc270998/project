<?php
    require("connect.php");
    class model extends connectDB{
        /* Khai báo */
        protected $table ='';
        private $wheres = '';
        private $update = '';
        private $add ='';
        /* Gọi hàm cha bên connect.php ra để kết nối vào file baitapsql trong sql */
        function __construct()
        {
            parent::__construct('localhost','baitapsql' , 'root' ,'');
        }
        /* Gọi table trong sql
        sau khi trỏ về giá trị trong bảng thì 
        trả về table */
        public function table($table){
            $this->table = $table;
            return $this;
        }
        /* hàm phân tách mảng thành chuỗi đối với where , sau khi phân tách xong trả lại giá trị chính nó  */
        public function where(array $wheres=[]){
            $this->wheres=$this->implode($wheres,'where','and');
            return $this;
        }
        /* hàm get dữ liệu trong bảng ra với select all bao gồm tiết cả các cột với điều kiện gì đó */        
            public function get(){
            $query = $this->conn->prepare("select * from {$this->table} {$this->wheres}");
            $query->setFetchMode(PDO::FETCH_OBJ); // gán dữ liệu với kiểu FETCH_OBJ
            $query->execute(); // thực thi câu lệnh
            return $query->fetchAll(); // trả về tất cả giá trị dữ liệu với fetchAll()
        }
        /* hàm row tương tự như hàm get nhưng trả về 1 giá trị với fetch() */
        public function row(){
            $query = $this->conn->prepare("select * from {$this->table} {$this->wheres}");
            $query->execute();
            return $query->fetch();
        }
        /* Hàm tách dữ liệu từ mảng thàng chuỗi */
        private function implode($array,$type,$char){
            if(is_array($array) && !empty($array)) // kiểm tra xem dữ liệu đó có phải dạng array không và xem nó có rỗng không , nếu k rỗng thì vào thực thi câu lệnh
            {
                $sql = $type.' ';
                $update = [];
                foreach($array as $key => $value){
                    if(is_numeric($value)) // nếu giá trị là số thì gán vào
                        $update[] = $key.'='.$value;
                    else // nếu giá trị là string thì gán giá trị dưới dạng string
                        $update[] = $key."='".$value."'";
                }
                $sql .= implode($char ,$update); // dấu .= biểu thị tương tự như toán tử $sql = $sql.implode($char ,$update); 
            }
            return $sql; // trả về giá trị của $sql
        }
        /* hàm update */
        public function update(array $update = []){
            $this->updates = $this->implode($update, 'set',','); // tách mảng ra thành chuỗi
            $query = $this->conn->prepare("update {$this->table}{$this->updates}{$this->wheres}"); //câu lệnh sql
            return $query->execute();// trả về giá  trị $query và thực thi
        }
        /** hàm delete */
        public function delete(){
            $query = $this->conn->prepare("delete {$this->table}{$this->wheres}"); //  xóa dữ liệu với điều kiện thích ứng
            return $query->execute(); // trả về giá trị $query và thực thi
        }
    }
?>