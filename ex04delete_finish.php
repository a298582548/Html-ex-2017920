<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Connect.php");
$id = $_POST['id'];

if($_SESSION['id'] != null)
{
    //刪除資料庫資料語法
    $sql = "delete from ex04 where id='$id'";
    if(mysqli_query($connect,$sql))
    {
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=LoL/ex04.php>';
    }
    else
    {
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=LoL/ex04.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>