<?php
    class Nguoi{
        public $ten;
        public $tuoi;
        public function __construct($ten,$tuoi)
        {
            $this->ten = $ten ;
            $this->tuoi = $tuoi;
        }    
        public function intro(){
            echo "Tên anh ấy là {$this->ten} , Tuổi anh ấy là {$this->tuoi}";
        }
    }
    class Tuan extends Nguoi{
        public $diachi;
        public function __construct($ten,$tuoi,$diachi)
        {
            $this->ten = $ten;
            $this->tuoi = $tuoi;
            $this->diachi = $diachi;
        }
        public function intro(){
            echo "Tên anh ấy là {$this->ten} , Tuổi anh ấy là {$this->tuoi} , Địa chỉ anh ấy là {$this->diachi}";
        }
    }
        $Tuan= new Tuan("Trần Văn Tuấn",30,"Nam Định");
        $Tuan->intro();
    // final class Duc extends Nguoi{
    //     private $sdt;
    //     public function __construct($ten,$tuoi,$sdt)
    //     {
    //         $this->ten = $ten;
    //         $this->tuoi = $tuoi;
    //         $this->sdt = $sdt;
    //     }
    //     public function intro(){
    //         echo "Tên anh ấy là {$this->ten} , Tuổi anh ấy là {$this->tuoi} , số điện thoại anh ấy là {$this->sdt}";
    //     }
    // }
    // $Duc= new Duc("Trương Thành Đức",22,"0866699365");
    // $Duc->intro();

?>