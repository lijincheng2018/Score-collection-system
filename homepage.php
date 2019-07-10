<?php

@header('Content-Type: text/html; charset=UTF-8');
$do=isset($_GET['do']);


	function check1 ($day1, $day2)
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

	$zk = check1($now, $day1);
	if($do!="ty")
    {
      
		if($zk>0)
    	{
      		include './time.php';
      		exit;
    	}
    }

      
?>


<!DOCTYPE html>
<html lang="zh" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
  <meta name="renderer" content="webkit">
 <link rel="bookmark" href="logo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="logo.ico" type="image/x-icon">
<meta name="description"content="中考成绩收集系统,Developed&Powered by LJC">
<meta name="keywords" content="中考成绩收集系统,2019年福建省中考成绩收集系统,LJC,李锦成">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="”Robots”" content="”noindexnofollow”">
<link rel="stylesheet" href="./public/homepage/reset.css">
<link rel="stylesheet" href="./public/homepage/style.css">

<title>中考成绩收集系统-首页</title><!-- Developed & Powered by LJC-->
 <?php include 'ieban.php'; ?>
<style>body{font-family: "microsoft yahei";}</style>
</head>
<body>
	<section class="cd-slider-wrapper">
		<ul class="cd-slider">
			<li class="visible">
              <div><center><img src="./img/icon.png" alt="logo" width="64px" height="64px"></center>
					<h2>中考成绩收集系统</h2>
					<a href="./index.php?do=0" class="cd-btn">进入</a><br>
                	<?php if($zk!=0) echo'<a href="./time.php" class="cd-btn">查看成绩公布倒计时</a>';?>
				</div>
			</li>
		</ul>
	</section> 
<script src="./public/homepage/jquery-2.1.4.js"></script>
<script src="./public/homepage/snap.svg-min.js"></script>
<script src="./public/homepage/main.js"></script> 
<script async="" src="./public/homepage/js"></script>
</body></html>