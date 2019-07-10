<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
error_reporting(0);
session_start();
@header('Content-Type: text/html; charset=UTF-8');
$do=isset($_GET['do'])?$_GET['do']:'0';
?>
<!DOCTYPE html>
<!--STATUS OK-->












<!-- Developed by LJC-->
<!-- Developed & Powered by LJC-->
<!-- Developed & Powered by LJC-->
<!-- Developed & Powered by LJC-->
<!-- Developed & Powered by LJC-->
<!-- Developed & Powered by LJC-->
<html lang="zh-cn"><!-- Developed & Powered by LJC-->
<head>
<meta name="renderer" content="webkit">
<link rel="bookmark" href="logo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="logo.ico" type="image/x-icon">
<meta name="description"content="中考成绩收集系统,Developed&Powered by LJC">
<meta name="keywords" content="中考成绩收集系统,2019年福建省中考成绩收集系统,LJC,李锦成">
<meta name="author"content="李锦成,LJC">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no,minimal-ui">
<title>中考成绩信息收集系统</title><!-- Developed & Powered by LJC-->
 <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/><?php include 'ieban.php'; ?>
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">中考成绩收集系统-导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        	<a href="" title="中考成绩收集系统(Developed & Powered by LJC)">
        		<span class="navbar-brand"><img src="./img/icon.png" herf="/" alt="logo" width="32px" height="32px"></span>
        	</a>
        	<span class="navbar-brand">2019年福建中考</span> <!-- Developed & Powered by LJC -->
      </div>
	  <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="">
            	<a href="http://zheli.org/data/i201907582854.pdf" target="_blank">&nbsp;使用方法</a>
          </li>
          <li class="">
            	<a href="http://zheli.org/data/i201907583154.pdf" target="_blank">&nbsp;常见问题</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="padding-top:60px;">
    <div class="col-xs-12 col-sm-8 col-lg-6 center-block" style="float: none;">
<?php if($do=='0'){?>
<div class="panel panel-primary">
	<div class="panel-heading" style="background: linear-gradient(to right,#14b7ff,#b221ff);">
		<h3 class="panel-title" align="center">2019年中考成绩收集入口</h3><!-- Developed & Powered by LJC-->
	</div>
	<div class="panel-body">
      <?php 
              if($zk>0)echo '<p><iframe src="./public/readme_test.txt" style="width:100%;height:465px;"></iframe></p>';
               else echo '<p><iframe src="./public/readme.txt" style="width:100%;height:465px;"></iframe></p>';
       ?>
		<p align="center"><a class="btn btn-info" href="./search/search.php">信息查询</a>&nbsp;<a class="btn btn-success" href="index.php?do=1">开始上报</a>&nbsp;<a class="btn btn-warning" href="./result/">后台管理</a></p>	
    </div>
</div><br>
</div>
<?php
    include("./config.php");
    $result=mysql_query("SELECT * FROM user");
    $numm=mysql_num_rows($result);
    echo '<center><font size="3">已有<font color="red"><b>'.$numm.'</b></font>人完成上报</font></center>';
?>
<?php include 'footer.php';?>
<?php }elseif($do=='1'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
	<span class="sr-only">15%</span>
  </div>
</div>
  <?php $_SESSION['back']=1;?>
	<div class="panel-body">
      <center><font size=4 ><b>身份验证</b></font></center>
      <form action="?do=2" class="form-sign" method="post">
        <label for="name">姓名:</label>
		<input type="text" class="form-control" name="name" >
        <br><center><font color=red >为了防止恶意上报成绩，所以上报前必须通过<b>身份验证</b>！</font></center>
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="下一步">
		</form><br/>
	</div>
</div>
<?php include 'footer.php';?>
<?php }elseif($do=='2'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
	<span class="sr-only">30%</span>
  </div>
</div>
  <div class="panel-body">
  <?php
  if(!isset($_POST['submit'])){
    exit('<div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！请按流程依次上报成绩！</div>
				<div class="list-group-item">
					<a href="?do=0" class="btn btn-block btn-warning">返回首页</a>
				</div>');
}
  $name=$_POST['name'];
  $_SESSION['name']=$_POST['name'];
  include("./config.php");
  $result=mysql_query("SELECT * FROM students where name='$name' limit 1");
  $result_arr=mysql_fetch_assoc($result);
  $uid=$result_arr['uid'];
  $_SESSION['sex']=$result_arr['sex'];
  $whether=$result_arr['whether'];
  $imgtest=$result_arr['img'];
  $_SESSION['imgg']=$imgtest;
  $_SESSION['id']=$uid;
  $check_query = mysql_query("select * from students where name='$name' limit 1");
if(!mysql_fetch_array($check_query))
echo <<<HTML
	<!--姓名无法在数据库内查询到，返回错误信息-->
			   <div class="list-group-item list-group-item-info">你的姓名未在本系统数据库备案！<br>
			   <font color=red>注意：本系统仅为泉州中远学校2016级2班提供服务！</font></div>
					<div class="list-group-item">
						<a href="?do=1" class="btn btn-block btn-info">返回</a>
					</div></div>
HTML;
elseif($whether=='1' && $imgtest=='1')
echo'
           <div class="list-group-item list-group-item-info">系统已经检测到你已提交成绩且已上传过截图了，请勿重复提交！<br>
		   <font color=red>注意：如有填错而需要更改的请自行联系李锦成</font></div>
				<div class="list-group-item">
                    <a href="./search/search.php?ljc=set" class="btn btn-block btn-info">查询信息</a><br>
					<a href="?do=9" class="btn btn-block btn-success">将成绩报告发至邮箱</a><br>
					<a href="?do=1" class="btn btn-block btn-warning">返回</a>
				</div></div>';
elseif($whether=='1' && $imgtest=='0')
echo ('<!--没有上传过，返回提示信息-->
           	<div class="list-group-item list-group-item-info">系统已经检测到你还没有提交过照片！请点击下方按钮进行重新上传！但是为了保障安全，请先进行身份再验证！<br></div>
				<div class="list-group-item">
				<a href="?do=12" class="btn btn-block btn-warning">进行身份再验证</a>
				<a href="?do=1" class="btn btn-block btn-info">返回</a>
				</div></div>');

else
echo <<<HTML
		<center><font color=red>请如实填报成绩！</font></center><br>
        <center>（如果历史和政治成绩只能看到等级，那么只填写等级即可）</center><br>
        <center><font size="3" color="red">注意：等级统一填写大写字母（A、B、C、D）！请不要多写，以致于系统无法识别和计算等级！如：历史如果A了，那么，只需也只能填写A，以此类推！<br>请注意成绩填写的对应区域，请不要错填！</font></center>
		<form name="RegForm" action="?do=3" class="form-sign" method="post" onsubmit="return InputCheck(this)">
        <label for="name">姓名:</label>
		<input id="name" type="text" class="form-control" name="name" value="$name" readonly="readonly">
        <label for="name">班级号数：</label>
		<input id="name" type="text" class="form-control" name="id" value="$uid" readonly="readonly"><hr><center>以上为本系统数据库预设数据，由张老师提供，<b>无需填写</b>！</center><hr>
        <label for="name">考生号:</label>
		<input id="ksh" type="text" class="form-control" name="ksh" class="input"/>
		<label for="name">语文成绩:</label>
		<input id="yw" type="text" class="form-control" name="yw" class="input"/>
		<label for="name">数学成绩:</label>
		<input id="sx" type="text" class="form-control" name="sx" class="input"/>
		<label for="name">英语成绩:</label>
		<input id="yy" type="text" class="form-control" name="yy" class="input"/>
		<label for="name">物理成绩:</label>
		<input id="wl" type="text" class="form-control" name="wl" class="input"/>
		<label for="name">化学成绩:</label>
		<input id="hx" type="text" class="form-control" name="hx" class="input"/>
		<label for="name">历史成绩:</label>
		<input id="ls" type="text" class="form-control" name="ls" class="input"/>
        <label for="name">政治成绩:</label>
		<input id="zz" type="text" class="form-control" name="zz" class="input"/>
        <label for="name">体育成绩:</label>
		<input id="ty" type="text" class="form-control" name="ty" class="input"/>
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="下一步">
		</form><br/>
        <script language=JavaScript>
		    eval(function(p,a,c,k,e,r){e=function(c){return c.toString(36)};if('0'.replace(0,e)==0){while(c--)r[e(c)]=k[c];k=[function(e){return r[e]||e}];e=function(){return'[1-9a-i]'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('function InputCheck(1){3(1.i.2==""){4("考生号不可为空!");1.i.5();6(7)}3(1.a.2==""){4("语文成绩不可为空!");1.a.5();6(7)}3(1.b.2==""){4("数学成绩不可为空");1.b.5();6(7)}3(1.c.2==""){4("英语成绩不可为空");1.c.5();6(7)}3(1.d.2==""){4("物理成绩不可为空");1.d.5();6(7)}3(1.e.2==""){4("化学成绩不可为空");1.e.5();6(7)}3(1.8.2==""){4("历史成绩不可为空");1.8.5();6(7)}3(1.9.2==""){4("政治成绩不可为空");1.9.5();6(7)}3(1.f.2==""){4("体育成绩不可为空");1.f.5();6(7)}3(1.a.2<0||1.a.2>h){4("请输入正确的语文成绩");1.a.5();6(7)}3(1.b.2<0||1.b.2>h){4("请输入正确的数学成绩");1.b.5();6(7)}3(1.c.2<0||1.c.2>h){4("请输入正确的英语成绩");1.c.5();6(7)}3(1.d.2<0||1.d.2>g){4("请输入正确的物理成绩");1.d.5();6(7)}3(1.e.2<0||1.e.2>g){4("请输入正确的化学成绩");1.e.5();6(7)}3((1.8.2<0||1.8.2>g)&&(1.8.2!="A"&&1.8.2!="B"&&1.8.2!="C"&&1.8.2!="D")){4("请输入正确的历史成绩");1.8.5();6(7)}3((1.9.2<0||1.9.2>g)&&(1.9.2!="A"&&1.9.2!="B"&&1.9.2!="C"&&1.9.2!="D")){4("请输入正确的政治成绩");1.9.5();6(7)}3(1.f.2<0||1.f.2>20){4("请输入正确的体育成绩");1.f.5();6(7)}}',[],19,'|RegForm|value|if|alert|focus|return|false|ls|zz|yw|sx|yy|wl|hx|ty|100|150|ksh'.split('|'),0,{}))
	    </script><!-- Developed & Powered by LJC-->  
HTML;
?>
    </div>
</div>
<?php include 'footer.php';?>

<?php }elseif($do=='3'){
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
	<span class="sr-only">50%</span>
  </div>
</div>
	<div class="panel-body">
<?php
if(!isset($_POST['submit'])){
    exit('<div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！请按流程依次上报成绩！</div>
				<div class="list-group-item">
					<a href="?do=0" class="btn btn-block btn-warning">返回首页</a>
				</div>');
}
$_SESSION['photo'] = 100;
$a = 0;
$b = 0;
$c = 0;
$d = 0;
$name1 = $_SESSION['name'];
$id = $_POST['id'];
$ksh = $_POST['ksh'];
$yw = $_POST['yw'];
$sx = $_POST['sx'];
$yy = $_POST['yy'];
$zz = $_POST['zz'];
$ls = $_POST['ls'];
$wl = $_POST['wl'];
$hx = $_POST['hx'];
$ty = $_POST['ty'];
$_SESSION['ksh'] = $ksh;
$tot_temp = $yw + $sx + $yy + ($wl * 0.9) + ($hx * 0.6) + $ty;
$tot = round($tot_temp, 1);
if ($yw >= 120) $a++;
elseif ($yw < 120 && $yw >= 105) {
    $b++;
} elseif ($yw < 105 && $yw >= 90) {
    $c++;
} elseif ($yw < 90 && $yw >= 0) {
    $d++;
}
if ($sx >= 127.5) $a++;
elseif ($sx < 127.5 && $sx >= 105) {
    $b++;
} elseif ($sx < 105 && $sx >= 90) {
    $c++;
} elseif ($sx < 90 && $sx >= 0) {
    $d++;
}
if ($yy >= 127.5) $a++;
elseif ($yy < 127.5 && $yy >= 105) {
    $b++;
} elseif ($yy < 105 && $yy >= 90) {
    $c++;
} elseif ($yy < 90 && $yy >= 0) {
    $d++;
}
if ($zz == "A") {
    $a++;
} elseif ($zz == "B") {
    $b++;
} elseif ($zz == "C") {
    $c++;
} elseif ($zz == "D") {
    $d++;
} elseif ($zz == "a") {
    $a++;
} elseif ($zz == "b") {
    $b++;
} elseif ($zz == "c") {
    $c++;
} elseif ($zz == "d") {
    $d++;
} elseif ($zz >= 85) {
    $a++;
} elseif ($zz < 85 && $zz >= 70) {
    $b++;
} elseif ($zz < 70 && $zz >= 60) {
    $c++;
} elseif ($zz < 60 && $zz >= 0) {
    $d++;
}
if ($ls == "A") {
    $a++;
} elseif ($ls == "B") {
    $b++;
} elseif ($ls == "C") {
    $c++;
} elseif ($ls == "D") {
    $d++;
} elseif ($ls == "a") {
    $a++;
} elseif ($ls == "b") {
    $b++;
} elseif ($ls == "c") {
    $c++;
} elseif ($ls == "d") {
    $d++;
} elseif ($ls >= 85) {
    $a++;
} elseif ($ls < 85 && $ls >= 70) {
    $b++;
} elseif ($ls < 70 && $ls >= 60) {
    $c++;
} elseif ($ls < 60 && $ls >= 0) {
    $d++;
}
if ($wl >= 85) $a++;
elseif ($wl < 85 && $wl >= 70) {
    $b++;
} elseif ($wl < 70 && $wl >= 60) {
    $c++;
} elseif ($wl < 60 && $wl >= 0) {
    $d++;
}
if ($hx >= 85) $a++;
elseif ($hx < 85 && $hx >= 70) {
    $b++;
} elseif ($hx < 70 && $hx >= 60) {
    $c++;
} elseif ($hx < 60 && $hx >= 0) {
    $d++;
}
include ("./config.php");
$check_query = mysql_query("select uid from user where name='$name1' limit 1");
if (mysql_fetch_array($check_query)) //判断是否上报过成绩
{
    echo ('<div class="list-group-item list-group-item-info">你的数据已在数据库中保存，请勿重新提交哦！</div>
        <div class="list-group-item">
          <a href="./index.php" class="btn btn-block btn-info">下一步</a>
        </div></div>
        </div><hr>
        <center>Copyright &copy; 2019 中考数据收集系统.All rights reserved.<br>
          Developed & Powered by LJC</center><br><br>');
    exit;
}
$ok = 1;
$sql = "INSERT INTO user(name,id,tot,tot1,ksh,yw,sx,yy,zz,ls,wl,hx,ty,a,b,c,d,time)VALUES('$name1','$id','$tot','$tot1','$ksh','$yw','$sx','$yy','$zz','$ls','$wl','$hx','$ty','$a','$b','$c','$d','$time')";
mysql_query("UPDATE students SET whether='$ok',time='$time' WHERE name='$name1'");
if (mysql_query($sql, $conn)) {
    echo ('<div class="list-group-item list-group-item-info">成绩计算并保存成功</div>
				<div class="list-group-item">
					<a href="?do=4" class="btn btn-block btn-info">下一步</a>
				</div>');
} else {
    echo '抱歉！添加数据失败：', mysql_error() , '<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>
	</div>
</div>
<hr>
<center>Copyright &copy; 2019 中考数据收集系统.All rights reserved.<br>
	Developed & Powered by LJC</center><br><br>
<?php }elseif($do=='4'){?>
<div class="panel panel-primary">
<div class="panel-heading">
  <h3 class="panel-title"  align="center">中考成绩信息收集系统</h3></div><!-- Developed & Powered by LJC-->
  <div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
	<span class="sr-only">70%</span>
  </div>
</div>
<div class="panel-body">
  <?php
    if($_SESSION['photo']!=100){
    exit('<div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！请按流程依次上报成绩！</div>
				<div class="list-group-item">
					<a href="?do=0" class="btn btn-block btn-warning">返回首页</a></div>');}?>
  <center><h3>请上传成绩证明截图</h3></center><br>
   <h4>(PS:成绩证明截图就是指在泉州中考(http://www.qzzk.cn)网站中查询到的中考成绩结果的截图)</h4><br>
  以今年中考为例，下图为证明截图：<br><img src="./public/example.png" alt="示例" width=100% height=23% ><br>
<center>上图为开发者在成绩公布前制作的成绩截图预测图（预测的是图片的框架而不是内容∩▽∩），跟今年的截图应该大同小异！<br><br>
  （仅接受jpg/jpeg/png/gif/bmp格式的图片，同时，文件大小不得超过5M！）<br></center>
  <center><font color="red" >请按照要求上传图片！</font><br><br><font color="red" size=3 >如果你现在不想上传或由于特殊原因无法上传，可以先暂停上报</font><br><br>
  <font color="red" size=4 >继续上报请返回回首页，在身份验证时，系统会自动检查，然后根据提示继续上传！</font></center><br>
  <form action="./index.php?do=5" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group">
      <label class="col-sm-2 control-label">上传截图：</label>
      <div class="col-sm-10">
        <input type="file" name="file" id="file" /> 
      </div>
    </div><br/>
<input type="submit" class="btn btn-primary btn-block" name="submit" value="上传">
  </form>
</div>
<div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> <font color=red >注意:“上传”按钮只需点击一次，点击后上传时可能会卡住，请耐心等待！请不要在短时间内重复点击“上传”按钮，否则可能会被CC防御盾屏蔽，导致你无法正常上报成绩！</font></div>
</div>
<br><br>
<?php include 'footer.php';?>
<?php }elseif($do=='5'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
      <h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
	<span class="sr-only">85%</span>
  </div>
</div>
	<div class="panel-body">
      <?php if(!isset($_POST['submit'])){
    exit('<div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！请按流程依次上报成绩！</div>
				<div class="list-group-item">
					<a href="?do=0" class="btn btn-block btn-warning">返回首页</a></div>');}
        $extension = end(explode(".", $_FILES["file"]["name"]));
		  if(($_FILES["file"]["type"]=="image/png"||$_FILES["file"]["type"]=="image/jpeg"||$_FILES["file"]["type"]=="image/jpg"||
		  $_FILES["file"]["type"]=="image/gif"||$_FILES["file"]["type"]=="image/bmp")&&$_FILES["file"]["size"]<5120000)
          {
  			if ($_FILES["file"]["error"] > 0){  
                return $_FILES["file"]["error"]; 
            }else{
                $url = "./public/img/";
                $whconf = $url.$_FILES['file']['name'];  
                $filename = basename($whconf);     
                $extpos = strrpos($filename,'.');
                $ext = substr($filename,$extpos+1);
				$_SESSION['ext']=$ext;
                $confname = $_SESSION['name']; 
                $path = move_uploaded_file($_FILES["file"]["tmp_name"], $url . $confname .'.'. $ext);
				if($path==true) {
                    $okok=1;
					$time = time();
                  	include './config.php';
					$sqlimg=mysql_query("UPDATE students SET img='$okok',time='$time' WHERE name='$confname'");
					require './mail/src/Exception.php'; 
					require './mail/src/PHPMailer.php'; 
					require './mail/src/SMTP.php'; 
                    if($_SESSION['sex']==0) $user_mail='root@ljcljc.cn';
                    else $user_mail='1470472271@qq.com';
						$mail = new PHPMailer(true); 
						try {
							$mail->CharSet ="UTF-8"; 
							$mail->SMTPDebug = 0; 
							$mail->isSMTP(); 
							$mail->Host = 'smtp.qq.com'; 
							$mail->SMTPAuth = true;
							$mail->Username = '2722793066';
							$mail->Password = 'wieppuhckxsddfhh'; 
							$mail->SMTPSecure = 'ssl'; 
							$mail->Port = 465;
							$mail->setFrom('zk@ljcljc.cn', '中考成绩收集系统-系统信息'); 
							$mail->addAddress($user_mail, 'admin'); 
							$mail->addReplyTo('zk@ljcljc.cn', 'info');
							$mail->isHTML(true); 
							$mail->Subject = $confname.'成绩上报成功！';
							$mail->Body    = '<h1>尊敬的管理员<font color="red" >李锦成</font>，'.$confname.'成绩上报成功！</h1>上报成功时间为：'.date('Y-m-d H:i:s'); 
							$mail->AltBody = '如果邮件客户端不支持HTML则显示此内容'; 
							$mail->send(); 
						} catch (Exception $e) { 
							echo '与管理员的邮箱通讯失败: ', $mail->ErrorInfo; 
						}
					if($sqlimg){
						echo '<div class="list-group-item list-group-item-info">图片上传成功</div>
								<div class="list-group-item">
									<a href="?do=11" class="btn btn-block btn-success">下一步</a>
								</div>';
								$_SESSION['photo']=0;
					} else{
						echo '抱歉！添加数据失败：',mysql_error(),'<br />';
						echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
					}
			}else{
                    echo '<div class="list-group-item list-group-item-info">图片上传失败</div>
						<div class="list-group-item">
						<a href="?do=4" class="btn btn-block btn-warning">返回重试</a>
					</div></div>
						</div><hr>
				<center>Copyright &copy; 2019 中考数据收集系统.All rights reserved.<br>
						Developed & Powered by LJC</center><br><br>';
					exit;
                }
            }
        }else{
            echo ('<div class="list-group-item list-group-item-info">请上传jpg/jpeg/png/gif/bmp格式的图片，同时，文件大小不得超过5M！</div>
						<div class="list-group-item">
						<a href="?do=4" class="btn btn-block btn-warning">返回重试</a>
					</div></div>
						</div><hr>
				<center>Copyright &copy; 2019 中考数据收集系统.All rights reserved.<br>
						Developed & Powered by LJC</center><br><br>');
					exit;}?>
	</div>
</div>
<?php include 'footer.php';?>
<?php }elseif($do=='6'){?>
<div class="panel panel-primary">
	<div class="panel-heading" style="background: linear-gradient(to right,#14b7ff,#b221ff);">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	<span class="sr-only">100%</span>
  </div>
</div>
	<div class="panel-body">	
      <div class="alert alert-info"><font color="green">尊敬的<font color=red><?php echo $_SESSION['name'];?></font>， 恭喜你，成绩上报成功！感谢你的配合！<br>
      你是第<font color="red"><b><?php include("./config.php");$name=$_SESSION['name'];$result=mysql_query("SELECT * FROM user where name='$name' limit 1");$result_arr=mysql_fetch_assoc($result);echo $result_arr['uid'];?></b></font>个完成上报的人！
        如有问题，请联系</font><font color=red>李锦成</font><br>你可以点击下方“<font color=red>将成绩报告发至你的邮箱</font>”来保存和查看成绩报告哦！<br><hr>
        <b>联系方式：</b><br><font color="orange">邮箱：root@ljcljc.cn<br>QQ:2722793066<br>微信:ljc2722793066</font>
</div><br>
<a href="?do=7" class="btn btn-block btn-success">将成绩报告发至你的邮箱</a>
</div>
</div>
<?php include 'footer.php';?>
<?php }elseif($do=='7'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
	<span class="sr-only">50%</span>
  </div>
</div>
	<div class="panel-body">
	<?php if(!isset($_SESSION['name']) || !isset($_SESSION['ksh'])){
    exit('<div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！如果你想重新发送成绩报告，那么请重新进行身份验证，系统会自动引导你重新获取成绩报告！</div>
				<div class="list-group-item">
					<a href="?do=0" class="btn btn-block btn-warning">返回首页</a></div>');}?>
      <center><font size=4 ><b>填写邮箱信息</b></font></center>
      <form action="?do=8" class="form-sign" method="post">
        <label for="name">你的邮箱:</label>
		<input type="text" class="form-control" name="email" >
        <br><center><font color=red >系统将会发送成绩报告至你的邮箱（包括各科成绩、总分、等级等信息），请认真填写邮箱！</font></center>
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="下一步">
		</form><br/>
	</div>
</div>
<?php include 'footer.php';?>

<?php }elseif($do=='8'){?>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	<span class="sr-only">100%</span>
  </div>
</div>
  <?php if(!isset($_POST['submit'])){
    exit('  <div class="panel-body"><div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！请按流程依次上报成绩！</div>
				<div class="list-group-item">
					<a href="?do=0" class="btn btn-block btn-warning">返回首页</a>
				</div>');
}
$email=$_POST['email'];
include './config.php';
include './function.php';
$kshs=$_SESSION['ksh'];
$name=$_SESSION['name'];
$result_row=mysql_query("SELECT * FROM user where ksh='$kshs' limit 1");  
$row=mysql_fetch_assoc($result_row); 
$result=mysql_query("SELECT * FROM students where name='$name' limit 1");
$result_arr=mysql_fetch_assoc($result);
$uid_1=$_SESSION['id'];
$name_1=$_SESSION['name'];
$ksh_1=$kshs;
$tot_1=$row['tot'];
$yw_1=$row['yw'];
$sx_1=$row['sx'];
$yy_1=$row['yy'];
$zz_1=$row['zz'];
$ls_1=$row['ls'];
$wl_1=$row['wl'];
$hx_1=$row['hx'];
$ty_1=$row['ty'];
$a_1=$row['a'];
$b_1=$row['b'];
$c_1=$row['c'];
$d_1=$row['d'];
$dj=str_replace(' ','',ljc_dj_1($a_1,$b_1,$c_1,$d_1));
require './mail/src/Exception.php'; 
require './mail/src/PHPMailer.php'; 
require './mail/src/SMTP.php'; 
$mail_1 = new PHPMailer(true);    
try { 
    $mail_1->CharSet ="UTF-8";  
    $mail_1->SMTPDebug = 0; 
    $mail_1->isSMTP(); 
    $mail_1->Host = 'smtp.qq.com'; 
    $mail_1->SMTPAuth = true;
    $mail_1->Username = '2722793066'; 
    $mail_1->Password = 'wieppuhckxsddfhh'; 
    $mail_1->SMTPSecure = 'ssl';
    $mail_1->Port = 465; 
    $mail_1->setFrom('zk@ljcljc.cn', '中考成绩收集系统-系统信息'); 
    $mail_1->addAddress($email, $_SESSION['name']);
    $mail_1->addReplyTo('zk@ljcljc.cn', 'info');
    $mail_1->addAttachment('./public/img/'.$_SESSION['name'].'.'.$_SESSION['ext']);
    $mail_1->addAttachment('./img/zkcjsjxt_thanks.png');
    $mail_1->isHTML(true); 
    $mail_1->Subject = $_SESSION['name'].'的成绩报告 From 中考成绩收集系统'; 
	$mail_1->Body    = '<h1>下面是<font color="red" >'.$_SESSION['name'].'</font>的成绩报告</h1><br>
	<table frame="box" rules="all">
    <tr>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">号数</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">姓名</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">考生号</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">语文</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">数学</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">英语</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">政治</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">历史</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">物理</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">化学</th>
        <th style="padding-left: 1em; padding-right: 1em; text-align: center">体育</th>
		<th style="padding-left: 1em; padding-right: 1em; text-align: center">实际总分</th>
		<th style="padding-left: 1em; padding-right: 1em; text-align: center">等级</th>
    </tr>
    <tr>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$uid_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$name_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$ksh_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$yw_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$sx_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$yy_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$zz_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$ls_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$wl_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$hx_1.'</td>
        <td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$ty_1.'</td>
		<td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$tot_1.'</td>
		<td style="padding-left: 1em; padding-right: 1em; text-align: center; vertical-align: top">'.$dj.'</td>
    </tr>
</table><font size=3>总分=语文成绩+数学成绩+英语成绩+物理成绩*0.9（四舍五入保留一位小数）+化学成绩*0.6（四舍五入保留一位小数）</font>
<br><br><br><font color="red">由于邮箱客户端的限制，无法加载css框架，所以表格比较简陋，望请谅解！</font><br>发送时间为：'.date('Y-m-d H:i:s');
    $mail_1->send(); 
    echo '
	<div class="panel-body">
	  <center><font size=4 ><b>恭喜你，成绩报告发送成功！请注意在邮箱'.$email.'的收件箱中查收来自邮箱<font color="red">zk@ljcljc.cn</font>发送的邮件！如果没有收到，请查看垃圾箱！</b></font></center><br>
	  <a href="./search/search.php?ljc=start" class="btn btn-block btn-success">查询信息</a></div></div>'; } catch (Exception $e) { 
    echo '
	<div class="panel-body">
	  <font size=4 ><b>成绩报告发送失败！请重试！请注意检查邮箱是否填写正确！</b>错误信息:'.$mail_1->ErrorInfo.'<br>你也可以发送错误信息给李锦成，了解错误详情！</font><br>
	  <a href="?do=7" class="btn btn-block btn-warning">返回</a></div></div>'; }?>
<?php }elseif($do=='9'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
	<div class="panel-body">
	<?php 
		if(!isset($_SESSION['name'])){
			exit('<div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！</div>
						<div class="list-group-item">
							<a href="?do=0" class="btn btn-block btn-warning">返回首页</a></div>');}?>
      <center><font size=4 ><b>身份再次验证</b></font></center>
      <form action="?do=10" class="form-sign" method="post">
        <label for="name">你的考生号:</label>
		<input type="text" class="form-control" name="ksh" >
        <br><center><font color=red >为了防止考生成绩信息被随意获取，所以在发送成绩报告前必须进行<b>身份再次验证</b>！</font></center>
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="下一步">
		</form><br/>
	</div>
</div>
<?php include 'footer.php';?>
<?php }elseif($do=='10'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
	<div class="panel-body">
<?php if(!isset($_POST['submit'])){
    		exit('  <div class="panel-body"><div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！</div>
				<div class="list-group-item">
					<a href="?do=0" class="btn btn-block btn-warning">返回首页</a></div>');}
	$ksh_hs=$_POST['ksh'];
    $name_hs=$_SESSION['name'];
    include './config.php';
	$result=mysql_query("SELECT * FROM user where name='$name_hs' limit 1");
	$row=mysql_fetch_assoc($result);
	$ksh_real=$row['ksh'];
	if($ksh_hs==$ksh_real)
	{
		$_SESSION['ksh']=$ksh_hs;
		echo '<div class="list-group-item list-group-item-info">身份核实成功！<br></div>
		 <div class="list-group-item">
			 <a href="?do=7" class="btn btn-block btn-success">获取成绩报告</a></div></div>';}
	else echo '<div class="list-group-item list-group-item-info"><font color="red" >身份信息不匹配！</font>请检查你的姓名和考生号是否匹配！请勿尝试获取其他考生的成绩报告！<br></div>
	<div class="list-group-item">
		<a href="?do=0" class="btn btn-block btn-warning">返回首页</a></div></div>'?>
	</div>
</div>
<?php include 'footer.php';?>
<?php }elseif($do=='11'){?>
<iframe src="./result.php" frameborder=0 width=100% height=650>恭喜你</iframe>
<br>
<center><a class="btn btn-block btn-danger" href="?do=6">继续</a></center>
<?php include 'footer.php'; ?>
<?php }elseif($do=='12'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
	<div class="panel-body">
	<?php 
		if(!isset($_SESSION['name'])){
			exit('<div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！</div>
						<div class="list-group-item">
							<a href="?do=0" class="btn btn-block btn-warning">返回首页</a>
						</div>');
					}
	?>
      <center><font size=4 ><b>身份再次验证</b></font></center>
      <form action="?do=13" class="form-sign" method="post">
        <label for="name">你的考生号:</label>
		<input type="text" class="form-control" name="ksh" >
        <br><center><font color=red >为了防止考生成绩信息被随意获取，所以在二次上传图片时，必须进行<b>身份再次验证</b>！</font></center>
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="下一步">
		</form><br/>
	</div>
</div>
<?php include 'footer.php';?>
<?php }elseif($do=='13'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">中考成绩信息收集系统</h3><!-- Developed & Powered by LJC-->
	</div>
	<div class="panel-body">
<?php
		if(!isset($_POST['submit'])){
    		exit('  <div class="panel-body"><div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！</div>
				<div class="list-group-item">
					<a href="?do=0" class="btn btn-block btn-warning">返回首页</a>
				</div>');
		}
	$ksh_hs=$_POST['ksh'];
    $name_hs=$_SESSION['name'];
    include './config.php';
	$result=mysql_query("SELECT * FROM user where name='$name_hs' limit 1");
	$row=mysql_fetch_assoc($result);
	$ksh_real=$row['ksh'];
	if($ksh_hs==$ksh_real)
	{
        $_SESSION['ksh']=$ksh_hs;
        $_SESSION['photo']=100;
		echo '<div class="list-group-item list-group-item-info">身份核实成功！<br></div>
		 <div class="list-group-item">
			 <a href="?do=4" class="btn btn-block btn-success">上传照片</a>
		 </div></div>';
	}
	else echo '<div class="list-group-item list-group-item-info"><font color="red" >身份信息不匹配！</font>请检查你的姓名和考生号是否匹配！<br></div>
	<div class="list-group-item">
		<a href="?do=0" class="btn btn-block btn-warning">返回首页</a>
	</div></div>'
		 ?>
	</div>
</div>
<?php include 'footer.php';?>
<?php }?>
      </div></div>
</body>
</html>
