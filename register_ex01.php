<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 10:26
 */
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../Connect.php");
$semester = $_POST['semester'];
$class = $_POST['class'];
$style = $_POST['style'];

if($semester != null )
{
    //新增資料進資料庫語法
    $sql = "INSERT INTO `ex01` (`semester`, `class`, `style`) VALUES ('$semester', '$class', '$style')";
    if(mysqli_query($connect,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=ex01.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=ex01.php>';
    }
}
else
{
    echo '請輸入值';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=ex01.php>';
}
?>