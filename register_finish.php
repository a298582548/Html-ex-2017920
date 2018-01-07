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

$name = $_POST['name'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    //新增資料進資料庫語法
    $sql = "insert into member_table (username, password, telephone, email) values ('$name','$id', '$pw', '$telephone', '$email',)";
    if(mysqli_query($sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>