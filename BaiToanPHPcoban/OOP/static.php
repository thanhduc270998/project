<?php 
// class domain {
//     protected static function getWebsiteName(){
//         return "sbonline247.com";
//     }
// }
// class domainsb extends domain{
//     public $websiteName;
//     public function __construct(){
//         $this->websiteName=parent::getWebsiteName();
//     }
// }
// $domainsb = new domainsb;
// echo $domainsb->websiteName;
class ConNguoi{
    private static $name = "Trương Thành Đức";
    public function setName($name){
        self::$name = $name;
    }
    public function getName(){
    return self::$name; 
    }
}
// khởi tạo đối tượng con người
$chuBlog = new ConNguoi();
//set name cho đối tượng
$chuBlog->setName('ABC');
//in ra name của đối tượng
echo $chuBlog->getName();
// kết quả : ABC
//khởi tạo đối tượng con người
$nguoixem = new ConNguoi();
// hiển thị ra tên người xem
echo $nguoixem->getName();
//kết quả : ABC
?>