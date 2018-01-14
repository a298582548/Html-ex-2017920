<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                    Change</p>
                <?php
                include("Connect.php");

                if($_SESSION['id'] != null)
                {
                    $sql = "SELECT * FROM ex02";
                    $result = mysqli_query($connect,$sql);

                    while($row = mysqli_fetch_row($result)) {
                        echo "<form name=\"form\" method=\"post\" action='ex02change_finish.php'>";
                        echo "<b>position：</b><input type=\"text\" name=\"paper1\" value=\"$row[0]\" /> <br>";
                        echo "<b>semester：</b><br><input type=\"text\" name=\"semester\" value=\"$row[1]\" /> <br>";
                        echo "<b>style：</b><input type=\"text\" name=\"style\" value=\"$row[3]\" /> <br>";
                        echo "<input type=\"hidden\" name=\"id\" value=\"$row[2]\"/>  ";
                        echo "<input type=\"submit\" name=\"button\" value=\"確定\" /><br>";
                        echo "</form>";
                    }

                }
                else
                {
                    echo '您無權限觀看此頁面!';
                    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
                }
                ?>
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
