<?php

include '../ieban.php';
session_start();
if(!isset($_SESSION['userid'])){
    header("Location:index.html");
    exit();
}
if($_SESSION['userid'] != 3){
    echo('<font size=5 >你的账号无权限查看本页面</font><br><br><a href="./login.php?action=logout"><font size=3 color=gray>返回并注销登录</font></a>');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 <link rel="bookmark" href="../logo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="../logo.ico" type="image/x-icon">
  
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <title>成绩统计系统——后台管理</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,td{
            border:1px solid #ccccff;
            padding: 5px;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<center><font size="5" color="red">成绩统计系统——后台管理</font>|&nbsp;<a href="./login.php?action=logout" class="btn btn-warning" >退出登录</a></center><br>
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;"><br>

   <div class="panel panel-success">
          <table class="table table-bordered table-striped">
    <thead>
        <tr class="success">
        <th>姓名</th>
        <th>考生号</th>
        <th>语文</th>
        <th>数学</th>
        <th>英语</th>
        <th>政治</th>
        <th>历史</th>
        <th>物理</th>
        <th>化学</th>
        <th>体育</th>
        <th>修改</th>
    </tr>

<?php
//连接数据库
include('../config.php');
//查询数据表中的所有数据,并按照id降序排列





$result=mysql_query("SELECT * FROM user ORDER BY uid asc");



//获取数据表的数据条数
$dataCount=mysql_num_rows($result);
//echo $dataCount;
//打印输出所有数据


for($i=0;$i<$dataCount;$i++){
    $result_arr=mysql_fetch_assoc($result);
    $id=$result_arr['uid'];
    $ksh=$result_arr['ksh'];
    $name=$result_arr['name'];
    $yw=$result_arr['yw'];
    $sx=$result_arr['sx'];
    $yy=$result_arr['yy'];
    $zz=$result_arr['zz'];
    $ls=$result_arr['ls'];
    $wl=$result_arr['wl'];
    $hx=$result_arr['hx'];
    $ty=$result_arr['ty'];
    //print_r($result_arr);
    echo "<tr>
            <td>$name</td>
            <td>$ksh</td>
            <td>$yw</td>
            <td>$sx</td>
            <td>$yy</td>
            <td>$zz</td>
            <td>$ls</td>
            <td>$wl</td>
            <td>$hx</td>
            <td>$ty</td>
            <td><a href='xg.php?id=$id'>修改</a></td>
          </tr>";
}

?>
</tbody>
</table>  
  </div>
</body>
  
<br><hr>
  <center>
    Developed by LJC<br>
    Copyright &copy; LJC.All Rights Reserved.</center> 
</html>