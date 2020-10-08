<?php
trait message1{
    public function msg1(){
        echo "Đây là content1";
    }    
}
trait message2{
    public function msg2(){
        echo "Đây là content2";
    }
}
class welcome1{
    use message1;
}
class welcome2{
    use message1 , message2;
}
$obj = new welcome1();
$obj->msg1();
echo "<br>";
$obj = new welcome2();
$obj->msg1();
$obj->msg2();
?>