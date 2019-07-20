<?php
$conn = @mysql_connect("localhost","username","password");
//Username填写数据库的账号，Password填写数据库的密码
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db("zk", $conn);
//字符转换，读库
mysql_query("set character set 'utf8'");
//写库
mysql_query("set names 'utf8'");
?>
