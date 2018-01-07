<?php session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/3
 * Time: 上午 09:46
 */
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!DOCTYPE html>
    <html lang="en">
    <head>
        <title>控制台</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;}
            }
        </style>
    </head>
    <body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a> <img src = "https://upload.wikimedia.org/wikipedia/zh/b/bc/Tw_Asia_University_logo.jpg" style="width: 3.7em"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="http://120.108.117.245/~105021010/index.php">首頁</a></li>
                    <li><a href="http://120.108.117.245/~105021010/LoL/ex01.php">簡歷</a></li>
                    <li><a href="http://120.108.117.245/~105021010/LoL/ex02.php">學術</a></li>
                    <li><a href="http://120.108.117.245/~105021010/LoL/ex03.php">著作</a></li>
                    <li><a href="http://120.108.117.245/~105021010/LoL/ex04.php">學生</a></li>
                    <li class="active"><a href="http://120.108.117.245/~105021010/member.php">控制頁</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    include("Connect.php");
                   echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>'
                ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid ">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <a> <img src = "http://dns2.asia.edu.tw/~wjshih/seoul_103_1221.png" style="width:100%"></a>
                <p><b>通訊地址:</b><br>41354台中市霧峰區柳豐路500號亞洲大學資訊工程學系</p>
            </div>
            <?php
            include("Connect.php");
//            echo '<li><a href="logout.php"  style="color: red;font-size: 3em"><b>登出</b></a></li><br>';
 //將資料庫裡的所有會員資料顯示在畫面上
                $sql = "SELECT * FROM `user`";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "<li style='color: blue;font-size: 2em'> <b>使用者訊息: <br>id : $row[0] <br> name：$row[2]<br> email：$row[3]<br> telephone：$row[4]<br> 權限：$row[5]</b></li><br/>";

            }
            //此判斷為判定觀看此頁有沒有權限
            //說不定是路人或不相關的使用者
            //因此要給予排除
            if($_SESSION['id'] != null)
            {
                echo '<li><a href="register.php" style="font-size: 3em;color: red"><b>新增</b></a></li>';
                echo '<li><a href="update.php" style="font-size: 3em;color: red"><b>修改</b></a></li>';
                echo '<li><a href="delete.php" style="font-size: 3em;color: red"><b>刪除</b></a></li>';

                }
            else
            {
                echo '您無權限觀看此頁面!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
            }
            ?>
            </div>


    <footer class="container-fluid text-center">
        <p>Email: <a style="font-style: italic" ><a style="color: #c8cd1e">wjshih@asia.edu.tw </a> </a>or <a style="color: #c8cd1e">h1wjshih1@gmail.com</a> 研究室：HB39 分機：20039</p>
    </footer>

    </body>
    </html>


