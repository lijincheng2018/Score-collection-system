<?php

    include('../config.php');



    if(!empty($_GET['id'])){  
        //查找id  
        $uid=intval($_GET['id']);  
        $result=mysql_query("SELECT * FROM user WHERE uid=$uid");  
        if(mysql_error()){  
            die('数据库错误');  
        }  
        //获取结果数组  
        $result_arr=mysql_fetch_assoc($result);  
    }




?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>信息修改系统</title>
   <link rel="bookmark" href="../logo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="../logo.ico" type="image/x-icon">
  <link href="//lib.baomitu.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="//lib.baomitu.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//lib.baomitu.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">信息修改系统</h3></div>
<div class="panel-body">
  <form action="./start.php" method="post" class="form-horizontal" role="form">
    
    <div class="form-group">
      <label class="col-sm-2 control-label">序号</label>
      <div class="col-sm-10"><input type="text" name="uid" value="<?php echo $result_arr['uid']?>" class="form-control" /></div>
    </div><br/>

    <div class="form-group">
      <label class="col-sm-2 control-label">姓名</label>
      <div class="col-sm-10"><input type="text" name="name" value="<?php echo $result_arr['name']?>" class="form-control"/></div>
    </div><br/>

    <div class="form-group">
      <label class="col-sm-2 control-label">考生号</label>
      <div class="col-sm-10"><input type="text" name="ksh" value="<?php echo $result_arr['ksh']?>" class="form-control"/></div>
    </div><br/>

    <div class="form-group">
      <label class="col-sm-2 control-label">语文</label>
      <div class="col-sm-10"><input type="text" name="yw" value="<?php echo $result_arr['yw']?>" class="form-control"/></div>
    </div><br/>

    <div class="form-group">
      <label class="col-sm-2 control-label">数学</label>
      <div class="col-sm-10"><input type="text" name="sx" value="<?php echo $result_arr['sx']?>" class="form-control"/></div>
    </div><br/>

    <div class="form-group">
      <label class="col-sm-2 control-label">英语</label>
      <div class="col-sm-10"><input type="text" name="yy" value="<?php echo $result_arr['yy']?>" class="form-control"/></div>
    </div><br/>

    <div class="form-group">
      <label class="col-sm-2 control-label">政治</label>
      <div class="col-sm-10"><input type="text" name="zz" value="<?php echo $result_arr['zz']?>" class="form-control"/></div>
    </div><br/>

    <div class="form-group">
      <label class="col-sm-2 control-label">历史</label>
      <div class="col-sm-10"><input type="text" name="ls" value="<?php echo $result_arr['ls']?>" class="form-control"/></div>
    </div><br/>

    <div class="form-group">
      <label class="col-sm-2 control-label">物理</label>
      <div class="col-sm-10"><input type="text" name="wl" value="<?php echo $result_arr['wl']?>" class="form-control"/></div>
    </div><br/>

    <div class="form-group">
      <label class="col-sm-2 control-label">化学</label>
      <div class="col-sm-10"><input type="text" name="hx" value="<?php echo $result_arr['hx']?>" class="form-control"/></div>
    </div><br/>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">体育</label>
      <div class="col-sm-10"><input type="text" name="ty" value="<?php echo $result_arr['ty']?>" class="form-control"/></div>
    </div><br/>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
     </div>
    </div>
  </form>
</div>
</div>

</div>
</div><hr>
<center>
    Developed by LJC<br>
    Copyright &copy; LJC.All Rights Reserved.</center><br><br>

</body>
</html>


