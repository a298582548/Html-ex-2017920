<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang="en">
<head>
    <title>新增畫面</title>
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
    <link rel="stylesheet" href="login/login.css">
    <scrapt scr ="login/login.js"></scrapt>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    註冊會員</p>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<form name="form" method="post" action="register_finish.php">
    名稱 : <input type="text" name="name" /> <br>
    帳號：<input type="text" name="username" /> <br>
    密碼：<input type="password" name="passwd" /> <br>
    再一次輸入密碼：<input type="password" name="passwd2" /> <br>
    電話：<input type="text" name="telephone" /> <br>
    email：<input type="text" name="email" /> <br>
    <input type="submit" name="button" value="確定" />
    <div class="remember-forgot">
        <div class="row">
            <div class="col-md-6">
            </div>
        </div>
    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!--        <div class="posted-by">Posted By: <a href="http://www.jquery2dotnet.com">Bhaumik Patel</a></div>-->
</div>
</body>
</html>