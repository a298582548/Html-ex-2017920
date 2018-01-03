<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/12/27
 * Time: 下午 01:15
 */

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>登入畫面</title>
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
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form name="form" method="post" action="Connectcheck.php">
                    <input type="text" name="id" placeholder="Username" />
                    <input type="password"  name="pw" placeholder="Password" />
                    <input type="submit" name="button" value="登入" class="btn btn-success btn-sm" /><br>
                    <a href="register.php">申請帳號</a>
                    <div class="remember-forgot">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" />
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 forgot-pass-content">
                                <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="posted-by">Posted By: <a href="http://www.jquery2dotnet.com">Bhaumik Patel</a></div>
</div>
</body>
</html>

<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--<form name="form" method="post" action="Connectcheck.php">-->
<!--    <input type="text" name="id" /> <br>-->
<!--    <input type="password" name="pw" /> <br>-->
<!--    <input type="submit" name="button" value="登入" />-->
<!--    <a href="register.php">申請帳號</a>-->
<!--</form>-->