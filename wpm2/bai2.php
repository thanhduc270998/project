<?php
$result = '';
$error = '';
if (isset($_POST['submit'])){
    $number = $_POST['number'];
    if (empty($number)){
        $error = "Không được để trống";
    }elseif (!is_numeric($number)) {
        $error = "Cần phải nhập số";
    } elseif (empty($error)){
        if ($number <= 10){
            $result = $number * 6000;
        }elseif ($number> 10 && $number <=20){
            $result = ($number - 10)* 7000 + 10 * 6000;
        } elseif ($number > 20 && $number <=30 ){
            $result = ($number - 20)* 8500 + 10* 7000 + 10 * 6000;
        } elseif ($number > 30){
            $result = ($number - 30) * 15000 + 10*8500 + 10*7000 + 10*6000;
        }
    }
}
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
            <th colspan="2" style="background-color: #0000FF; color: white;">Tính tiền nước</th>
        </tr>
        <tr>
            <td>Nhập số m3 nước tiệu thụ</td>
            <td><input type="text" name="number"></td>
        </tr>
        <tr>
            <th colspan="2">Bảng giá nước theo bậc thang</th>
        </tr>
        <tr>
            <td>0 - 10m3</td>
            <td>
                <b>6000đ/m3</b>
            </td>
        </tr>
        <tr>
            <td>Trên 10m3 - 20m3</td>
            <td>
                <b>7000đ/m3</b>
                <p>Từ 0 - 10m3 giá 6000đ/m3</p>
            </td>
        </tr>
        <tr>
            <td>Trên 20m3 - 30m3</td>
            <td>
                <b>8500đ/m3</b>
                <p>Từ 0 - 10m3 giá 6000đ/m3</p>
                <p>Từ 10 - 20m3 giá 7000đ/m3</p>
            </td>
        </tr>
        <tr>
            <td>Trên 30m3</td>
            <td>
                <b>15000đ/m3</b>
                <p>Từ 0 - 10m3 giá 6000đ/m3</p>
                <p>Từ 10 - 20m3 giá 7000đ/m3</p>
                <p>Từ 20 - 30m3 giá 8500đ/m3</p>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Tính tiền"></td>
            <td style="background-color: #0000FF; color: white;">
                <p><?php echo $result?></p>
                <p><?php echo $error?></p>
            </td>
        </tr>
    </form>
</table>
