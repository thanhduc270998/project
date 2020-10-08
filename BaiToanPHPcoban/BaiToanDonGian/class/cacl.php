<?php
class calc{
private $so1 , $so2;
public function __construct($so1 , $so2)
{
    $this->so1=$so1;
    $this->so2=$so2;
} 
public function add(){
    return $this->so1 + $this->so2;
}
public function subtraction(){
    return $this->so1 - $this->so2;
}
public function multiplication(){
    return $this->so1 * $this->so2;
}
public function divide(){
    return $this->so1 / $this->so2;
}   
}
$mycalc = new calc(4,29);
echo 'Phép cộng'.$mycalc->add();  
echo '<br>';
echo 'Phép trừ'.$mycalc->subtraction();
echo '<br>';
echo 'Phép nhân'.$mycalc->multiplication();
echo '<br>';
echo 'Phép chia'.$mycalc->divide();  
?>