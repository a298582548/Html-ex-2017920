<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Connect.php");

$paper = $_POST['paper'];
$style = $_POST['style'];
$id = $_POST['id'];

if( $paper != null && $style != null) {
    //更新資料庫資料語法
    $sql = "UPDATE `ex03` SET `paper` = '$paper', `style` = '$style' WHERE `id` = '$id';";

    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=LoL/ex03.php>';
    }
    else
    {

        echo '修改失敗!';
        echo $sql;
//        echo '<meta http-equiv=REFRESH CONTENT=2;>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=LoL/ex02.php>';
}
?>