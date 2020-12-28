<?php
// thể hiện cho tínht rừ tượng của OOP
// dùng cho khia báo class
// không thể khởi tạo đối tượng từ 1 class absstract
// class abstract -> không có nội dung
// chỉ dùng cho mục đích kế thừa
abstract class TestAbstract{
    public $name;
    public $age;
    public function showAll(){
        echo "Show all";
    }
    abstract public function test();
}
class A extends TestAbstract{
    // bắt buộc phải khai báo lại phương thức trừ tượng của class cha , viết code cho nó
    public function test()
    {
        echo "test class A";
        // TODO: Implement test() method.
    }
}
class B extends TestAbstract{
    // bắt buộc phải khai báo lại phương thức trừ tượng của class cha , viết code cho nó
    public function test()
    {
        echo "test class B";
        // TODO: Implement test() method.
    }
}
// từ khóa implements
// thực thi các interface - giống như 1 bộ khung
// Interface: không thể khai báo thuộc tính , phương thức đều phải public , ko có nội dung
// class inplêmnt từ interface bắt buộc phải viết lại các phương thức đã khai báo trong interface
interface Config{
    // public $name;
    public function configMail();
    public function sendMail();
}
class Gmail implements Config{
    public function configMail()
    {
        echo "Gmail configMail";
        // TODO: Implement configMail() method.
    }public function sendMail()
{
    echo  "Gmail sendMail";
    // TODO: Implement sendMail() method.
}
}
class Yahoo implements  ConfigTest{
    public function configMail(){
        echo "Yahoo configMail";
    }
    public function sendMail(){
        echo "Yahoo sendMail";
    }
}

// 4 tính chất của OOP ( TUYỂN DỤNG RẤT HAY HỎI)
// Tính trừa tượng: từ khóa abstract , trừu tượng hóa từ các đối tượng giống nhau
// vd có các đối tượng như Xe Toyota, Mazda , Vinfast
// trừu tượng hóa -> abstract class Xehoi
// Tính đóng gói : thể hiện qua phạm vi truy cập:
// private, protected, public -> che giấu thông tin của 1 class đối với bên ngoài
// tính kế thừa: từ khóa extends, cho phép tạo class mới dựa trên class đã có
// tính đa hình: từ khóa implement -> từ 1 bộ khung chung (interface), class con có thể triển khai theo mục đích riêng của nó

?>