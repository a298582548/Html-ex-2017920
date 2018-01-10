<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 09:25
 */

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Connect.php");

$name = $_POST['username'];
$id = $_POST['id'];
$passwd = $_POST['passwd'];
$passwd2 = $_POST['passwd2'];
$phone = $_POST['telephone'];
$email = $_POST['email'];


//紅色字體為判斷密碼是否填寫正確
if($_SESSION['id'] != null && $passwd != null && $passwd2 != null && $passwd == $passwd2)
{
    $id = $_SESSION['username'];

    //更新資料庫資料語法
    $sql = "update user set username=$name,id=$id, passwd=$passwd, telephone=$phone, email=$email ";
    if(mysqli_query($sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>