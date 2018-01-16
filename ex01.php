<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/3
 * Time: 上午 09:57
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>時文中副教授 簡歷</title>
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
                <li class="active"><a href="http://120.108.117.245/~105021010/LoL/ex01.php">簡歷</a></li>
                <li><a href="http://120.108.117.245/~105021010/LoL/ex02.php">學術</a></li>
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
            <h1>時文中</h1>


            <h3><b>行政服務</b></h3>
            <p><b>擔任資應系班導師: <br> </b>
                <?php
                include("../Connect.php");
                $sql = "SELECT * FROM `ex01` where style='1'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[1]($row[2])<br>";
                }
                echo"<a style='color: red'>(1)</a>";
                ?>
            </p>
            <p><b>擔任圖書館推展委員會委員: <br></b>
                <?php
                $sql = "SELECT * FROM `ex01` where style='2'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[1] $row[2]<br>";
                }
                echo"<a style='color: red'>(2)</a>";
                ?>
            </p>
            <p><b>擔任 研究發展委員會委員: <br></b>
                <?php
                $sql = "SELECT * FROM `ex01` where style='3'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[1]<br>$row[2]";
                }
                echo"<a style='color: red'>(3)</a>";
                ?>
            </p>
            <p><b>擔任 研究發展處學術發展組 組長: <br></b>
                <?php
                $sql = "SELECT * FROM `ex01` where style='4'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[1]$row[2]<br>";
                }
                echo"<a style='color: red'>(4)</a>";
                ?>
            </p>
            <p><b>擔任學生事務會議委員: <br></b>
                <?php
                $sql = "SELECT * FROM `ex01` where style='5'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[1]$row[2]<br>";
                }
                echo"<a style='color: red'>(5)</a>";
                ?>
            </p>
            <p><b>擔任專利及技術移轉權益委員會委員: <br></b>
                <?php
                $sql = "SELECT * FROM `ex01` where style='6'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[1]$row[2]<br>";
                }
                echo"<a style='color: red'>(6)</a>";
                ?>
            </p>
            <p><b>擔任資應系生涯導師: <br></b>
                <?php
                $sql = "SELECT * FROM `ex01` where style='7'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_row($result)) {
                    echo "$row[1]$row[2]<br>";
                }
                echo"<a style='color: red'>(7)</a>";
                ?>
            </p>
            <h3><b>得獎紀錄</b>:98學年度優良導師</h3>

            <hr>


        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <a style="color: red" href="http://120.108.117.245/~105021010/ex01added.php">新增資料</a>
            </div>
            <div class="well">
                <a style="color: red" href="http://120.108.117.245/~105021010/ex01change.php">修改資料</a>
            </div>
            <div class="well">
                <a style="color: red" href="http://120.108.117.245/~105021010/ex01delete.php">刪除資料</a>
            </div>
        </div>
    </div>
</div>


<footer class="container-fluid text-center">
    <p>Email: <a style="font-style: italic" ><a style="color: #c8cd1e">wjshih@asia.edu.tw </a> </a>or <a style="color: #c8cd1e">h1wjshih1@gmail.com</a> 研究室：HB39 分機：20039</p>
</footer>

</body>
</html>

