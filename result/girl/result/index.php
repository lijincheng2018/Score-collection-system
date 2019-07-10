<?php
session_start();
if(!isset($_SESSION['userid'])){
    header("Location:https://zk.ljcljc.cn/result/index.html");
    exit();
}
$userid=$_SESSION['userid'];
if($userid!=2 && $userid!=3){
  echo('<font size=5 >你的账号无权限查看本页面</font>');
  exit();
}
?>

<?php
include("../../../config.php");
include '../../../function.php';
include '../../../ieban.php';

?>


<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8"> 
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>女生成绩报告</title> 
  <link rel="bookmark" href="../../../logo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="../../../logo.ico" type="image/x-icon">
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
  尊敬的<font color=red>李田英</font>，欢迎您！<br><br>
  <center><font size=5 color=orange>2019年福建省初中学生毕业和高中阶段学校招考试</font></center><br>
  <center><font size=3 color=orange>成绩报告（女生）</font></center><br>
  <center><a href="../" class="btn btn-success">数据收集情况</a>&nbsp;<a href="../../login.php?action=logout" class="btn btn-warning" >退出登录</a></center><br>
   <div class="panel panel-success">
     <table class="table table-bordered table-striped">
	<thead>
		<tr class="success">
            <th>号数</th>
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
            <th>实际总分</th>
            <th>等级</th>
		</tr>
	</thead>
       <tbody>
	<?php


$result=mysql_query("SELECT * FROM user ORDER BY id asc");

$pd=mysql_query("SELECT * FROM students ORDER BY uid asc");
         
//获取数据表的数据条数
$dataCount=mysql_num_rows($result);
//echo $dataCount;
//打印输出所有数据




for($i=0;$i<$dataCount;$i++){
  
    	$result_arr=mysql_fetch_assoc($result);
    	$uid=$result_arr['uid'];
    	$name=$result_arr['name'];
		$check_query = mysql_query("select * from students where name='$name' limit 1");
        $pd_row=mysql_fetch_assoc($check_query);
          
		if($pd_row['sex']==1)
		{
            $uid=$pd_row['uid'];
  			$ksh=$result_arr['ksh'];
    		$tot=$result_arr['tot'];
    		$yw=$result_arr['yw'];
    		$sx=$result_arr['sx'];
   	 		$yy=$result_arr['yy'];
    		$zz=$result_arr['zz'];
    		$ls=$result_arr['ls'];
    		$wl=$result_arr['wl'];
    		$hx=$result_arr['hx'];
  			$ty=$result_arr['ty'];
    		$a=$result_arr['a'];
    		$b=$result_arr['b'];
    		$c=$result_arr['c'];
    		$d=$result_arr['d'];

        echo "<tr>
                <td>$uid</td>
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
            	<td>$tot</td>";
            	ljc_dj($a,$b,$c,$d);
        }
    
            
}

?>
</tbody>
           
     </table> </div>  
         <br> 
      <center><font size=3>提示：实际总分中，按照中考标准(物理*0.9,化学*0.6)统计！</font></center>
  <br><hr>
  <center><font color=red size=4>内部数据，请勿外传！</font><br>
    Result calculation by 中考数据收集系统<br>
    Developer & Inspector ：LJC</center><br>
</body>
</html>