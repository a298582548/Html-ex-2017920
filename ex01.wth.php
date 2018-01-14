<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Connect.php");

$semester = $_POST['semester'];
$class = $_POST['class'];
$style = $_POST['style'];
$id = $_POST['id'];

if($style!= null && $semester != null) {
    //更新資料庫資料語法
    $sql = "UPDATE `ex01` SET semester = '$semester',class = '$class',style = '$style' WHERE `id` = '$id'";

    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=LoL/ex01.php>';
    }
    else
    {
        echo $sql;
        echo '修改失敗!';
//        echo '<meta http-equiv=REFRESH CONTENT=2;url=ex01.php>';
    }
}
//else
//{
//    echo '您無權限觀看此頁面!';
//    echo '<meta http-equiv=REFRESH CONTENT=2;url=../index.html>';
//}
?>