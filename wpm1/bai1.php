<?php
$result = '';
$error = '';
if(isset($_POST['number'])){
    $number = $_POST['number'];
    if($number <= 1){
        $error = 'Đây không phải là số nguyên tố';
    } elseif ($number == ''){
        $error = 'Không được để trống';
    } elseif (!is_numeric($number) ){
        $error = 'Cần phải nhập số';
    }elseif ($number == 2){
        $result .= ' Đây là số nguyên tố';
    }
    elseif ($number >2){
        for ($i = 2 ; $i <= $number-1 ; $i++){
            if ($number%$i == 0) {
                $error .= ' Không phải là số nguyên tố';
                break;
            }else{
                $result .= ' Đây là số nguyên tố';
                break;
            }
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

    <table  border="1" cellspacing="0">
        <form action="" method="POST">
        <tr>
            <th colspan="2" style="background-color: #0000FF; color: white;">Kiểm tra số nguyên tố</th>
        </tr>
        <tr>
            <td>Nhập số cần kiểm tra</td>
            <td><input type="number" style="width: 100%" name="number" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Kiểm tra"></td>
            <td style="background-color: #0000FF;">
                <p style="color: white"><?php echo $result?></p>
                <p style="color: white"><?php echo $error?></p>
            </td>

        </tr>
        </form>
    </table>

