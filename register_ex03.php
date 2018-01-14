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
$paper = $_POST['paper'];
$style = $_POST['style'];

if($paper != null && $style != null)
{
    //新增資料進資料庫語法
    $sql = "INSERT INTO `ex03` (`paper`, `style`) VALUES ('$paper','$style')";
    if(mysqli_query($connect,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=LoL/ex03.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=LoL/ex03.php>';
    }
}
else
{
    echo '請輸入值';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=LoL/ex03.php>';
}
?>