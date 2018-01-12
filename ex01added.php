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
    <title>更改畫面</title>
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
                    Added</p>
                <form name="form" method="post" action="LoL/register_ex01.php">
                    <p><b>year:</b></p> <input type="text" name="semester" placeholder="semester" />
                    <p><b>class:</b></p> <input type="text"  name="class" placeholder="可是空值" />
                    <p><b>style</b></p>
                    <select name="style">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <input type="submit" name="button" value="確定" class="btn btn-success btn-sm" /><br>
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
