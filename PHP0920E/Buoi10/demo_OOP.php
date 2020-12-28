<?php
/***
*Lập tình hướng đối tượng
 *
 */
// - class - lớp: khuôn
// VD: 1 bản vẽ kĩ thuật ngôi nhà -> 1 class, không phải là 1 ngôi nhà (object) thật -> các ngôi nhà đc xây từ bản vẽ này -> các object của class đó
// class - object luôn đi kèm nhau
// tên class viết hoa các ký tự đầu tiên của từng từ:
// House , CategoryBook
// Class đặc trưng bởi thuộc tính và phương thức / hành vi
class House {
    // khai báo thuộc tính cho class
    public $name;
    public $created_at;
    // phương thức về bản chất , thuộc tính trong 1 class giống biến trong PHP thuần
    public function getName() {
        echo "Phương thức getName";
    }
}
// Object - đối tượng , đc tạo ra từ class , đối tượng sẽ có tất cả thuộc tính / phương thức của class theo 2 phạm vi truy cập là public và protected
// class - object luôn đi kèm với nhau
// class House -> Object House A, House B
$obj_a = new House();
// truy cập phương thức giống gán biến
$obj_a->name ='Ngôi nhà A';
$obj_a->created_at = '12/12/2020';
// truy cập phương thức giống gọi hàm
echo "<pre>";
print_r($obj_a);
echo "</pre>";
// tạo bao nhiêu đối tượng từ class cũng đc
$obj_b = new House();
$obj_b->name='Ngôi nhà B';
$obj_b->created_at='1/2/2020';
// - Thuộc tính của class , có phạm vi truy cập : private, protected, public
// class sinh viên: id, name , class_name, age, address
class Student {
    public $id;
    public $name;
    public $class_name;
    public $age;
    public $address;
}
// tạo đối tượng từ class trên
$student_a = new Student();
$student_a->id = 'SVA';
$student_a->name = 'Nguyễn Văn A';
$student_a->class_name = 'PHP0920E';
$student_a->age = '20';
$student_a->address = 'NĐ';
echo "Tên sinh viên A =". $student_a->name;
// phương thức của class: là các hàm của PHP thuần khia báo bên trong class, gắn thêm phạm vi truy cập: private, protected, public
// class quản lí sách : id,name, -create , edit , delete
class Book{
    public $id;
    public $name;
    public function creatBook(){
        echo "Thêm sách";
    }
    public function editBook($id){
        echo "Sửa sách: $id";
    }
}
$book_a = new Book();
$book_a->name='Sách văn';
$book_a->creatBook();
$book_a->editBook(12345);
// từ khóa this: tham chiếu đến chính đối tượng hiện tại, truy cập thuộc tính / phương thức trong chính nó
class TestThis{
    public $id;
    public $name;
    public function getName(){
        //$this tương đương với chính class TestThis
        echo $this->name;
    }
}
$test_this = new TestThis();
$test_this->name = 'Name 1';
$test_this->getName();// name1
