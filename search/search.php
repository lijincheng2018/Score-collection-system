<?php
    session_start();
    $ljc=isset($_GET['ljc'])?$_GET['ljc']:'0';
    $ljcs=isset($_GET['ljcs']);

    include '../function.php';

?>
<!--STATUS OK-->












<!-- Developed by LJC-->
<!-- Developed & Powered by LJC-->
<!-- Developed & Powered by LJC-->
<!-- Developed & Powered by LJC-->
<!-- Developed & Powered by LJC-->
<!-- Developed & Powered by LJC-->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
  <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>信息查询-中考成绩信息收集系统</title>

    <link rel="bookmark" href="../logo.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="../logo.ico" type="image/x-icon">
    <meta name="description"content="中考成绩收集系统,Developed&Powered by LJC">
    <meta name="keywords" content="中考成绩收集系统,2019年福建省中考成绩收集系统,LJC,李锦成">
    <meta name="author"content="李锦成,LJC">
    <meta name="revised"content="LJC,2019/6/25">
    <meta name="designer" content="LJC,李锦成">
    <meta name="reply-to" content="root@ljcljc.cn">
    <meta name="owner" content="LJC,李锦成">
  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <link href="./css/main.css" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Developed & Powered by LJC-->
  
<?php include '../ieban.php'; ?>



    <style>
        .header{position:relative;text-align:center;background-color:#27ae60;color:#fff;margin-bottom:0;}.search{-webkit-box-shadow:none;box-shadow:none;font-size:16px;padding:13px 30px;border-radius:0;height:auto;text-align:center;border-color:transparent;}.search-wraper{margin-left:auto;margin-right:auto;max-width:680px;margin-top:30px;margin-bottom:20px;}td,th{text-align:center;}
    </style>

<link rel="stylesheet" href="./css/layer.css" id="layuicss-layer"></head>
<body>
<div id="vue"><div class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark" style="color: white;">
          <a href="" title="中考成绩收集系统(Developed & Powered by LJC)">
        		<span class="navbar-brand"><img src="../img/icon.png" herf="/" alt="logo" width="32px" height="32px"></span>
        	</a>
            <span class="navbar-brand">中考数据收集系统</span> <!-- Developed & Powered by LJC -->
            
        </nav> 
    <div class="col-xs-12">
        <h1>信息查询</h1>
        <div role="search" class="search-wraper">

        <form action="?ljc=search" class="form-sign" method="post">

        <div class="form-group">
        
                <b><font size=4>姓名：</font></b>
                <input placeholder="输入你的姓名" class="form-control search clearable" name="name" >

                <br><b><font size=4>考生号：</font></b>
                <input placeholder="输入你的考生号（如果选择“用姓名+考生号查询”才需要填写）" class="form-control search clearable" name="ksh" >
        </div>
        <div class="form-group" style="margin-left: 5px">
                            <select v-model="search.status" class="form-control" name="chaxun">
                                <option value="xm">用姓名查询</option>
                                <option value="ksh">用姓名+考生号查询</option>
                            </select>
                        </div>
        <div class="form-group" style="margin-left: 5px">
            <input type="submit" class="btn btn-primary" name="submit" value="查询">
        </div>
		</form>

          <br><center><font size=4 color=red><b>用姓名查询</b>只可查询到是否完成，<b>用姓名+考生号查询</b>可以查询到具体成绩及完成情况<br>如果选择“用姓名+考生号查询”<b>才需要</b>填写考生号</font><center><br>
        <div class="form-group" style="margin-left: 5px">
                            <a class="btn btn-warning" href="../index.php">上报成绩</a>
                        </div>
            
            <!--div class="form-inline">
                
                <div class="form-group" style="margin-left: 5px;">
                    <a class="btn btn-primary">
                        <i class="iconfont"></i>&npsb;查询by LJC
                    </a>
                </div>
            </div-->


            <br>
            <br>
        </div>
    </div>
</div>
</div> 
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>号数</th>
                    <th>姓名</th>
                    <th>是否上报成绩信息</th>
                    <th>是否上传截图</th>
                    <th>是否完成上报</th>
                </tr>
            </thead>

            <?php if($ljc=='search'){?>
                <?php
                    

                    $chaxun=$_POST['chaxun'];
                    if($chaxun=="xm")
                    {
                        echo '<tbody>';
                

                        $name=$_POST['name'];


                        if(empty($name))
                        {
                            echo ('
                                    <div class="list-group-item list-group-item-info">请输入姓名！<br>
                                    </div>
                                        <div class="list-group-item">
                                            <a href="?ljc=0" class="btn btn-block btn-info">返回</a>
                                        </div></div>');
  
                                $name="-";
                                $uid="-";
                                $ok="-";
                                $okimg="-";
                                $all="-";
                        }
                        else
                        {
                            
                            include('../config.php');

                            $result=mysql_query("SELECT * FROM students where name='$name' limit 1");
                    


                            $result_arr=mysql_fetch_assoc($result);
                            $uid=$result_arr['uid'];
                            $whether=$result_arr['whether'];
                            $img=$result_arr['img'];


                            if($whether==1) $ok='<img src="../img/yes.png" width="16px" height="16px">';
                            else $ok='<img src="../img/no.png" width="16px" height="16px">';

                            if($img==1) $okimg='<img src="../img/yes.png" width="16px" height="16px">';
                            else $okimg='<img src="../img/no.png" width="16px" height="16px">';

                            if($whether==1 && $img==1) $all='<img src="../img/yes.png" width="16px" height="16px">';
                            else $all='<img src="../img/no.png" width="16px" height="16px">';


                            $check_query = mysql_query("select * from students where name='$name' limit 1");
                            if(!mysql_fetch_array($check_query))
                            {
                                echo ('
                                    <div class="list-group-item list-group-item-info">你的姓名未在本系统数据库备案！<br>
                                    <font color=red>注意：本系统仅为泉州中远学校2016级2班提供服务！</font></div>
                                        <div class="list-group-item">
                                            <a href="?ljc=0" class="btn btn-block btn-info">返回</a>
                                        </div></div>');
  
                                $name="-";
                                $uid="-";
                                $ok="-";
                                $okimg="-";
                                $all="-";
                            }
                        }


                        echo "  <tr>
    		                        <td>$uid</td>
    		                        <td>$name</td>
    		                        <td>$ok</td>
                                    <td>$okimg</td>
                                    <td>$all</td>
                                </tr>";
            
                        echo '</tbody>';

                    }

                    elseif($chaxun=="ksh")
                    {

                        echo '<tbody>';

                        include('../config.php');

                        $kshs=$_POST['ksh'];
                        $name1=$_POST['name'];

                        if(empty($kshs))
                        {
                            echo ('
                                    <div class="list-group-item list-group-item-info">请输入考生号！<br>
                                    </div>
                                        <div class="list-group-item">
                                            <a href="?ljc=0" class="btn btn-block btn-info">返回</a>
                                        </div></div>');
  
                                $name="-";
                                $uid="-";
                                $ok="-";
                                $okimg="-";
                                $all="-";
                        }
                        if(empty($name1))
                        {
                            echo ('
                                    <div class="list-group-item list-group-item-info">请输入姓名！<br>
                                    </div>
                                        <div class="list-group-item">
                                            <a href="?ljc=0" class="btn btn-block btn-info">返回</a>
                                        </div></div>');
  
                                $name="-";
                                $uid="-";
                                $ok="-";
                                $okimg="-";
                                $all="-";
                        }


                        $result_row=mysql_query("SELECT * FROM user where ksh='$kshs' limit 1");  

                        $row=mysql_fetch_assoc($result_row); 


                        $name=$row['name'];

                        if($name==$name1)
                        {
                        
                            $result=mysql_query("SELECT * FROM students where name='$name' limit 1");

                            $result_arr=mysql_fetch_assoc($result);
                            $uid=$result_arr['uid'];
                            $whether=$result_arr['whether'];
                            $img=$result_arr['img'];


                            if($whether==1) $ok='<img src="../img/yes.png" width="16px" height="16px">';
                            else $ok='<img src="../img/no.png" width="16px" height="16px">';

                            if($img==1) $okimg='<img src="../img/yes.png" width="16px" height="16px">';
                            else $okimg='<img src="../img/no.png" width="16px" height="16px">';

                            if($whether==1 && $img==1) $all='<img src="../img/yes.png" width="16px" height="16px">';
                            else $all='<img src="../img/no.png" width="16px" height="16px">';


                            $check_query = mysql_query("select * from students where name='$name' limit 1");
                            if(!mysql_fetch_array($check_query))
                            {
                                echo ('
                                    <div class="list-group-item list-group-item-info">你的姓名未在本系统数据库备案！<br>
                                    <font color=red>注意：本系统仅为泉州中远学校2016级2班提供服务！</font></div>
                                        <div class="list-group-item">
                                            <a href="?ljc=0" class="btn btn-block btn-info">返回</a>
                                        </div></div>');
  
                                $name="-";
                                $uid="-";
                                $ok="-";
                                $okimg="-";
                                $all="-";
                            }
                        }
                        
                        else{
                            echo ('
                                    <div class="list-group-item list-group-item-info">你的姓名和考生不匹配或你还没有上报过成绩！请确认是否一致或是否上报！<br>
                                    </div>
                                        <div class="list-group-item">
                                            <a href="?ljc=0" class="btn btn-block btn-info">返回</a>
                                        </div></div>');
  
                                $name="-";
                                $uid="-";
                                $ok="-";
                                $okimg="-";
                                $all="-";

                        }


                        echo "  <tr>
    		                        <td>$uid</td>
    		                        <td>$name</td>
    		                        <td>$ok</td>
                                    <td>$okimg</td>
                                    <td>$all</td>
                                </tr></tbody>";

                                echo '<br><br>';

                            echo ' 
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
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
                                    </thead>';



                        $ksh=$row['ksh'];
    		            $tot=$row['tot'];
    		            $yw=$row['yw'];
    		            $sx=$row['sx'];
   	 		            $yy=$row['yy'];
    		            $zz=$row['zz'];
    		            $ls=$row['ls'];
    		            $wl=$row['wl'];
    		            $hx=$row['hx'];
  			            $ty=$row['ty'];
    		            $a=$row['a'];
    		            $b=$row['b'];
    		            $c=$row['c'];
    		            $d=$row['d'];

                        echo "<tbody><tr>
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




                                echo '</tbody>';

                        


                            
                    }

                
                
                    
                ?>
                


                <?php }elseif($ljc=='start'){?> 
                
                <tbody>
                <?php

                    include('../config.php');

                    $kshs=$_SESSION['ksh'];

                    $result_row=mysql_query("SELECT * FROM user where ksh='$kshs' limit 1");  

                    $row=mysql_fetch_assoc($result_row); 


                    $name=$row['name'];

                    $result=mysql_query("SELECT * FROM students where name='$name' limit 1");

                    $result_arr=mysql_fetch_assoc($result);
                    $uid=$result_arr['uid'];
                    $whether=$result_arr['whether'];
                    $img=$result_arr['img'];


                    if($whether==1) $ok='<img src="../img/yes.png" width="16px" height="16px">';
                    else $ok='<img src="../img/no.png" width="16px" height="16px">';

                    if($img==1) $okimg='<img src="../img/yes.png" width="16px" height="16px">';
                    else $okimg='<img src="../img/no.png" width="16px" height="16px">';

                    if($whether==1 && $img==1) $all='<img src="../img/yes.png" width="16px" height="16px">';
                    else $all='<img src="../img/no.png" width="16px" height="16px">';


                    $check_query = mysql_query("select * from students where name='$name' limit 1");
                    if(!mysql_fetch_array($check_query))
                    {
                        echo ('
                               <div class="list-group-item list-group-item-info">你的姓名未在本系统数据库备案！<br>
                               <font color=red>注意：本系统仅为泉州中远学校2016级2班提供服务！</font></div>
                                    <div class="list-group-item">
                                        <a href="?ljc=0" class="btn btn-block btn-info">返回</a>
                                    </div></div>');
  
                        $name="-";
                        $uid="-";
                        $ok="-";
                        $okimg="-";
                        $all="-";
                    }

                    echo "  <tr>
    		                    <td>$uid</td>
    		                    <td>$name</td>
    		                    <td>$ok</td>
                                <td>$okimg</td>
                                <td>$all</td>
                            </tr></tbody>";

                            echo '<br><br>';
                    echo ' 
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
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
                                    </thead>';



                    $ksh=$row['ksh'];
    		        $tot=$row['tot'];
    		        $yw=$row['yw'];
    		        $sx=$row['sx'];
   	 		        $yy=$row['yy'];
    		        $zz=$row['zz'];
    		        $ls=$row['ls'];
    		        $wl=$row['wl'];
    		        $hx=$row['hx'];
  			        $ty=$row['ty'];
    		        $a=$row['a'];
    		        $b=$row['b'];
    		        $c=$row['c'];
    		        $d=$row['d'];

                    echo "<tbody><tr>
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


                            

                ?>
                </tbody>









                <?php }elseif($ljc=='set'){?> 
                    
                <?php

                    $whether_name=$_SESSION['names'];

                    if($whether_name!='no')
                    {

                        include('../config.php');
                        
                        $result_name=mysql_query("SELECT * FROM students where name='$whether_name' limit 1");
                        

                        $result_arr_name=mysql_fetch_assoc($result_name);
                        $uid=$result_arr_name['uid'];
                        $whether=$result_arr_name['whether'];
                        $img=$result_arr_name['img'];


                        if($whether==1) $ok='<img src="../img/yes.png" width="16px" height="16px">';
                        else $ok='<img src="../img/no.png" width="16px" height="16px">';

                        if($img==1) $okimg='<img src="../img/yes.png" width="16px" height="16px">';
                        else $okimg='<img src="../img/no.png" width="16px" height="16px">';

                        if($whether==1 && $img==1) $all='<img src="../img/yes.png" width="16px" height="16px">';
                        else $all='<img src="../img/no.png" width="16px" height="16px">';



                        echo "  <tr>
                                <td>$uid</td>
                                <td>$whether_name</td>
                                <td>$ok</td>
                                <td>$okimg</td>
                                <td>$all</td>
                            </tr>";
        
                        echo '</tbody>';

                    }
                    else{
                        exit('<div class="list-group-item list-group-item-info">这是一次未经授权的访问！请不要单独访问该页面！</div>
                        <div class="list-group-item">
                            <a href="./search.php" class="btn btn-block btn-warning">返回查询首页</a>
                        </div>');
                    }


                ?>
                

        
            <?php }?>


                
            </table>
        </div>
    </div>
</div>
 </div>
  </div>
<br><br><br><br>
<?php include '../footer.php'; ?>


</body></html>