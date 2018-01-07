<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/12/27
 * Time: 下午 02:41
 */
$db_server = "localhost";
//資料庫名稱
$db_name = "105021010";
//資料庫管理者帳號
$db_user = "105021010";
//資料庫管理者密碼
$db_passwd = "#mEM1RRLe";

//對資料庫連線
$connect = @mysqli_connect($db_server, $db_user, $db_passwd,$db_name);

mysqli_set_charset($connect,'utf8');
if(!$connect)
    die("無法對資料庫連線");
//資料庫連線採UTF8
mysqli_set_charset($connect,'utf8');
////選擇資料庫
if(!@mysqli_select_db($connect,$db_name))
    echo"無法使用資料庫";
?>