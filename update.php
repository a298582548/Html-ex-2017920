<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/9
 * Time: 下午 06:43
 */

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Connect.php");

if($_SESSION['id'] != null)
{
//    將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
//    $id = $_SESSION['username'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM `user` where username='$id'";
    $result = mysqli_query($sql);
    $row = mysqli_fetch_row($result);

//    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[1]\" />(此項目無法修改) <br>";
    echo "名子：<input type=\"text\" name=\"name\" value=\"$row[3]\" /><br>";
    echo "密碼：<input type=\"password\" name=\"passwd\" value=\"$row[2]\" /> <br>";
    echo "再一次輸入密碼：<input type=\"password\" name=\"passwd2\" value=\"$row[2]\" /> <br>";
    echo "電話：<input type=\"text\" name=\"telephone\" value=\"$row[5]\" /> <br>";
    echo "email：<input type=\"text\" name=\"email\" value=\"$row[4]\" /> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}