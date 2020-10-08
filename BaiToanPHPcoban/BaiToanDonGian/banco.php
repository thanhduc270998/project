<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <?php
            for($x = 0 ; $x < 8 ; $x++)
            {
                echo "<tr>";
                for($y = 0; $y <8 ; $y++)
                {
                    $xy = $x + $y;
                    if ($xy % 2 ==0)
                    {
                        echo "<td style=\"background-color:white ;width:30px ;height:30px;\"></td>";
                    }
                    else{
                        echo "<td style=\"background-color:black ;width:30px ;height:30px;\"></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>