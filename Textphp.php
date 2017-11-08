<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:14
 */
$n = $_POST['n'];
$m = $_POST['m'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>乘法表</title>
    <table border="1">
    <?php

    for($i = 1;$i<=$n;$i++){
        echo "<tr>";
        for($j = 1;$j<=$m;$j++){
            echo"<td style='font-size: 1.5em' width='50px' align='center' >".$i*$j."</td>";
        }
        echo"</tr>";
    }
?>
    </table>
</head>
</html>