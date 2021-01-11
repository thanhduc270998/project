<?php
$error = '';
$result = '';
if(isset($_POST['submit'])){
    $number = $_POST['number'];
    if(empty($number)){
        $error = 'Không được để trống';
    }elseif (!is_numeric($number)){
        $error = ' Cần phải nhập số';
    }
    if(isset($_POST['operator'])){
        $operator = $_POST['operator'];
        switch ($operator){
            case 'le':
                if($number%2 != 0){$result = 'true';}
                else{ $result = 'false';} ;
                break;
            case 'chan':
                if($number%2 == 0){$result = 'true';}
                else{ $result = 'false';};
                break;
            case 'chiahet3':
                if($number%3 == 0){$result = 'true';}
                else{ $result = 'false';};
                break;
            case 'chiahet4':
                if($number%4 == 0){$result = 'true';}
                else{ $result = 'false';};
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
            <th colspan="2" style="background-color: #0000FF; color: white;">Kiểm tra logic</th>
        </tr>
        <tr>
            <td>Nhập số ban đầu</td>
            <td><input type="text" name="number"></td>
        </tr>
        <tr>
            <td>Chọn logic</td>
            <td>
                <input type="radio" name="operator" value="le"> Là số lẻ? <br>
                <input type="radio" name="operator" value="chan"> Là số chẵn? <br>
                <input type="radio" name="operator" value="chiahet3"> Chia hết cho 3 ? <br>
                <input type="radio" name="operator" value="chiahet4"> Chia hết cho 4 ?
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Kiểm tra"></td>
            <td style="background-color: #0000FF; color: white;">
                <p><?php echo $result?></p>
                <p><?php echo $error?></p>
            </td>
        </tr>
    </form>
</table>

