<?php
$result ='';
$error ='';
if (isset($_POST['submit'])){
if(isset($_POST['number_one']) || isset($_POST['number_two'])){
    $number_one = $_POST['number_one'];
    $number_two = $_POST['number_two'];
    if(empty($number_two) || empty($number_two)){
        $error = 'Không được để trống';
    }elseif (!is_numeric($number_one) ||!is_numeric($number_two)){
        $error = 'Phải nhập số';
    }
if(isset($_POST['operator'])){
    $operator = $_POST['operator'];
    switch ($operator){
        case '+': $result = $number_one + $number_two;break;
        case '-': $result = $number_one - $number_two;break;
        case '*': $result = $number_one * $number_two;break;
        case '/': $result = $number_one / $number_two;break;
        case '%': $result = $number_one % $number_two;
    }
}
}}
?>
<style>
    table tr th{
        padding: 10px;
    }
    table tr td{
        padding: 10px;
    }
</style>
<table border="1" cellspacing="0">
    <form action="" method="post">
        <tr>
            <th colspan="2" style="background-color: #0000FF; color: white;">Thực hành toán tử</th>
        </tr>
        <tr>
            <td>Nhập số thứ nhất</td>
            <td><input type="text" name="number_one"></td>
        </tr>
        <tr>
            <td>Nhập số thứ hai</td>
            <td><input type="text" name="number_two"></td>
        </tr>
        <tr>
            <td>Chọn phép tính</td>
            <td>
                <input type="radio" name="operator" value="+"> + <br>
                <input type="radio" name="operator" value="-"> - <br>
                <input type="radio" name="operator" value="*"> * <br>
                <input type="radio" name="operator" value="/"> / <br>
                <input type="radio" name="operator" value="%"> %
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Kết Quả"></td>
            <td style="background-color: #0000FF; color: white;">
                <?php echo $result?>
                <?php echo $error?>
            </td>
        </tr>
    </form>
</table>

