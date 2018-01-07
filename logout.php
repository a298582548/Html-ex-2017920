<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/3
 * Time: 上午 11:22
 */

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['username']);
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
?>