<?php
$Ten_SP = "Tấm hợp kim nhôm ngoài trời";
$Ma_SP = "EV2009";
$SL_kho = "500";
$Don_Gia = "160000";
echo $info . " " . $Ma_SP;
define('THUE_VAT', 5);
echo THUE_VAT;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng Kho</th>
            <th>Đơn Gía</th>
            <th>Thuế VAT</th>
        </tr>
        <tr>
            <td>
                <?php
                echo $Ma_SP;
                ?>
            </td>
            <td>
                <?php
                echo  "$Ten_SP $Ma_SP";
                ?>
            </td>
            <td>
                <?php
                echo $SL_kho . " " . 'Tấm';
                ?>
            </td>
            <td>
                <?php
                echo $Don_Gia . " " . '/1Tấm';
                ?>
            </td>
            <td>
                <?php
                echo THUE_VAT . '%';
                ?>
            </td>
        </tr>
        <tr>
            <th>
                <?php
                var_dump($Ma_SP);
                echo "<br>";
                echo __LINE__;
                echo "<br>";
                echo __FILE__;

                ?>
            </th>
            <th>
                <?php
                    var_dump($Ten_SP);
                    echo "<br>";
                    echo __LINE__;
                    echo "<br>";
                    echo __FILE__;
                ?>
            </th>
            <th>
                <?php
                    var_dump($SL_kho);
                    echo "<br>";
                    echo __LINE__;
                    echo "<br>";
                    echo __FILE__;
                ?>
            </th>
            <th>
                <?php
                    var_dump($Don_Gia);
                    echo "<br>";
                    echo __LINE__;
                    echo "<br>";
                    echo __FILE__;
                ?>
            </th>
            <th>
                <?php 
                 var_dump(THUE_VAT);
                 echo "<br>";
                 echo __LINE__;
                 echo "<br>";
                 echo __FILE__;
                ?>
            </th>
        </tr>
    </table>
    <div>
        <h3>
            Tổng tiền hàng như sau : 160.000đ * 500 tấm = 
            <?php
            echo $Don_Gia * $SL_kho . "đ"; 
            echo "<br>";
            echo "in ra tại dòng".__LINE__;
            echo "<br>";
            echo "in tại file".__FILE__;

            ?>
        </h3>
    </div>
</body>

</html>