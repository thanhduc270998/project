<?php 
interface Animal{
    public function makeSound();
}
class Cat implements Animal {
    public function makeSound(){
        echo " Meow";
    }
}
class Dog implements Animal {
    public function makeSound(){
        echo "Bark";
    }
}
class Mouse implements Animal {
    public function makeSound(){
        echo "Squeak";
    }
}  
$cat = new Cat();
$dog = new Dog();
$Mouse = new Mouse();
$aminals = array($cat, $dog,$mouse);
foreach( $animals as $animal){
    $animal->makeSound();
}
?>