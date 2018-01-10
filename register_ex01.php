<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 10:26
 */
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Connect.php");
$year = $_POST['year'];
$class = $_POST['class'];
$style = $_POST['style'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($year != null && $style != null)
{
    //新增資料進資料庫語法
    $sql = "insert into user(year, class,style) values ('$year', '$class','$style')";
    if(mysqli_query($link,$sql))
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
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=ex1.02.html>';
}
?>