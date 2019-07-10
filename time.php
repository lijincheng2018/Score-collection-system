
<?php
function check ($day1, $day2)
{
  $second1 = strtotime($day1);
  $second2 = strtotime($day2);
    
  if ($second1 < $second2) {
    $tmp = $second2;
    $second2 = $second1;
    $second1 = $tmp;
  }
  else return 0;
  return ($second1 - $second2) / 86400;
}
$now = date("Y/m/d");
$day1 = "2019-07-12";

$zk = check($now, $day1);


?>
<html>
  <title>2019年中考成绩收集系统</title>
  <head>
 <link rel="bookmark" href="logo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="logo.ico" type="image/x-icon">
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="中考成绩收集系统" />
<meta name="description" content="2019年中考成绩收集系统，2019年中考成绩上报系统" />
  </head>
  
  <body><br><br>
  <center><h3>2019年福建省中考成绩公布时间倒计时</h3></center>
    <center><img src="./img/icon.png" alt="logo" width="64px" height="64px"></center><br>
    <?php
      if($zk!=0)echo '<center><h4><font color=black>距离2019年福建省中考成绩公布时间：<font size=5 color=red><b>'.$zk.'</b></font>天</font></h4></center>';
    elseif($zk===0)echo '<center><h4><font size=5 color=red><b>中考成绩已公布，请注意查分！</b></font></h4></center>';
    ?>
    
    <br><center><font size=2>注：中考成绩大约是在2019年7月12日，查询网址为：http://www.qzzk.cn/，上报网址为:<font color="079500">https</font>://zk.ljcljc.cn/</font></center><br><br>
    <?php if($zk==1) echo '<center><font size="5" color="red">系统已经关闭，明天将会正式开启，系统正在做最后的优化和调试</font></center>';
    		else echo '<p align="center"><a class="btn btn-info" href="./homepage.php?do=ty">上报成绩</a></p><br><br>';
    ?>
<?php include './footer.php'; ?>
  </body>
</html>
   