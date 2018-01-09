<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/7
 * Time: 下午 03:28
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

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $passwd != null && $passwd2 != null && $passwd == $passwd2)
{
    //新增資料進資料庫語法
    $sql = "insert into user(id, passwd,username, email,telephone) values ('$id', '$passwd','$name','$email' , '$phone')";
    if(mysqli_query($link,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../login.html>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=../index.html>';
}
?>