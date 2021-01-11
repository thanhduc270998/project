<?php
class app{
// http://localhost/php-ITPlus/PHP0920E/mvctucode/Home/SayHi/1/2/3

    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];


    function __construct()
    {
    $arr = $this->UrlProcess();
    print_r($arr);
    }
    function UrlProcess(){
        // Home/SayHi/1/2/3
        if (isset($_GET["url"])){
           return explode("/",filter_var(trim($_GET["url"] , "/")));
            //  hàm trim để cắt phần tử / trong links url
            // hàm explode dùng để tách phần tử thành mảng
        }

    }
}
?>