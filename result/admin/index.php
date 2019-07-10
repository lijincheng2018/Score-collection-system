<?php
session_start();
if(!isset($_SESSION['userid'])){
    header("Location:https://zk.ljcljc.cn/result/index.html");
    exit();
}
if( $_SESSION['userid']!=3){
  echo('<font size=5 >你的账号无权限查看本页面</font>');
  exit();
}

?>

<?php
include("../../config.php");
include("../../ieban.php");
$id=0;

$result=mysql_query("SELECT * FROM students ORDER BY uid asc");
//获取数据表的数据条数
$dataCount=mysql_num_rows($result);
//echo $dataCount;
//打印输出所有数据

$all=0;
$wc=0;

for($i=0;$i<$dataCount;$i++){
           
	$result_arr=mysql_fetch_assoc($result);
  $whether=$result_arr['whether'];
  $img=$result_arr['img'];

    $all++;
    if($whether==1 && $img==1) $wc++;

}


?>


<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8"> 
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>总体数据收集情况</title> 
  <link rel="bookmark" href="../../logo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="../../logo.ico" type="image/x-icon">

	<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>



<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;"><br>
  <?php
  	date_default_timezone_set('Asia/Shanghai');
	$h=date("H");
	if($h<11) echo "早上好!";
	else if($h<13) echo "中午好！";
	else if($h<17) echo "下午好！";
	else echo "晚上好！";
 ?>
  尊敬的<font color=red>李锦成（总管理员）</font>，欢迎您！<br>
  <center><font size=6 color=orange>中考数据收集情况一览表</font></center><br><br>
  <center><font size=4><b>总体情况：</b></font><font size=3>应完成人数：<?php echo $all;?>人，
    									</font><font size=3>已完成人数：<?php echo $wc;?>人，
    									</font><font size=3>未完成人数：<font color=red size=3><?php echo $all-$wc;?></font>人</font></center><br>
  <?php
  if(($all-$wc)!=0) echo '<center><font size=3>请您督促完成！</font></center><br>';
  ?>
    <center><a href="./result/" class="btn btn-success">具体成绩</a>&nbsp;<a href="../login.php?action=logout" class="btn btn-warning" >退出登录</a></center><br>
  
   <div class="panel panel-success">
     <table class="table table-bordered table-striped">
	<thead>
		<tr class="success">
            <th>序号</th>
            <th>姓名</th>
			<th>成绩</th>
            <th>截图</th>
			<th>是否完成</th>
			<th>完成时间</th>
		</tr>
	</thead>
       <tbody>
	<?php


$result=mysql_query("SELECT * FROM students ORDER BY uid asc");
//获取数据表的数据条数
$dataCount=mysql_num_rows($result);
//echo $dataCount;
//打印输出所有数据



for($i=0;$i<$dataCount;$i++){
           
	$result_arr=mysql_fetch_assoc($result);
    $sex=$result_arr['sex'];
      
      $ok='<img src="./no.png" width="16px" height="16px">';
      $imgshow='<img src="./no.png" width="16px" height="16px">';
      $allshow='<img src="./no.png" width="16px" height="16px">';

    	$time=0;
    	$timeshow="-";
    	$id++;
    	
  
    	$name=$result_arr['name'];
      	$whether=$result_arr['whether'];
		$img=$result_arr['img'];

		if($whether==1) $ok='<img src="./yes.png" width="16px" height="16px">';
		if($img==1) $imgshow='<img src="./yes.png" width="16px" height="16px">';
		


    	if($whether==1 && $img==1)
    	{
         	$time=$result_arr['time'];
          	$timeshow=date("Y-m-d H:i:s", $time);
           
          	$allshow='<img src="./yes.png" width="16px" height="16px">';
    	}
    	echo "<tr>
            		<td>$id</td>
    			    <td>$name</td>
              		<td>$ok</td>
					<td>$imgshow</td>
					<td>$allshow</td>
    			    <td>$timeshow</td>
          	</tr>";
                
}

?>
</tbody>
           
     </table> </div>  
  <br><hr>
  <center><!--font color=red size=4></font><br-->
    Copyright &copy; 中考成绩收集系统.All rights reserved.<br>
    Developer & Inspector ：LJC</center><br>
</body>
</html>