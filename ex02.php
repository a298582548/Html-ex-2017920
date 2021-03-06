<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/3
 * Time: 上午 09:58
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>時文中副教授 學術</title>
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
                <li class="active"><a href="http://120.108.117.245/~105021010/LoL/ex02.php">學術</a></li>
                <li><a href="http://120.108.117.245/~105021010/LoL/ex03.php">著作</a></li>
                <li><a href="http://120.108.117.245/~105021010/LoL/ex04.php">學生</a></li>
                <li><a href="http://120.108.117.245/~105021010/member.php">控制頁</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

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
        <div class="col-sm-8 text-left">

            <h3 style="font-size: 3em"><b>學術服務</b></h3>
            <p><b>國際期刊 編輯委員:</b> <br>
                <?php
                include("../Connect.php");
                $sql = "SELECT * FROM `ex02` where style='1'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[0]($row[1])<br>";
                }
                echo"<a style='color: red'>(1)</a>";
                ?>
            </p>
            <p><b>國際期刊 論文審查:</b> <br>
                <?php
                $sql = "SELECT * FROM `ex02` where style='2'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[0]($row[1])<br>";
                }
                echo"<a style='color: red'>(2)</a>";
                ?>
            </p>
            <p><b>研討會委員:</b> <br>
                <?php
                $sql = "SELECT * FROM `ex02` where style='3'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[0]($row[1])<br>";
                }
                echo"<a style='color: red'>(3)</a>";
                ?>
            </p>
            <p><b>研討會議程主持人</b> <br>
                <?php

                $sql = "SELECT * FROM `ex02` where style='4'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[0]($row[1])<br>";
                }
                echo"Session C: 適性化學習與電腦化測驗與評量(一) <br>";
                echo"<a style='color: red'>(4)</a>";
                ?>
            <p></p>
            <p> <b>外校碩士論文口試委員</b> <br>
                <?php
                $sql = "SELECT * FROM `ex02` where style='5'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[0]($row[1])<br>";
                }
                echo"<a style='color: red'>(5)</a>";
                ?>
            </p>
            <hr>


        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <a style="color: red" href="http://120.108.117.245/~105021010/ex02added.php">新增資料</a>
            </div>
            <div class="well">
                <a style="color: red" href="http://120.108.117.245/~105021010/ex02change.php">修改資料</a>
            </div>
            <div class="well">
                <a style="color: red" href="http://120.108.117.245/~105021010/ex02delete.php">刪除資料</a>
            </div>
        </div>
    </div>
</div>


<footer class="container-fluid text-center">
    <p>Email: <a style="font-style: italic" ><a style="color: #c8cd1e">wjshih@asia.edu.tw </a> </a>or <a style="color: #c8cd1e">h1wjshih1@gmail.com</a> 研究室：HB39 分機：20039</p>
</footer>

</body>
</html>

