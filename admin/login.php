<?php

session_start();

@header('Content-Type: text/html; charset=UTF-8');


if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo ("<script language='javascript'>alert('注销登录成功！');window.location.href='index.html';</script>");
    exit;
}

if(!isset($_POST['submit']))
{
    exit('非法访问!');
}

$username = $_POST['username'];
$password = $_POST['password'];

//包含数据库连接文件
include('../config.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select uid from admin where username='$username' and password='$password' limit 1");

if($result = mysql_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['uid'];
    echo ("<script language='javascript'>alert('登录成功！欢迎你！');window.location.href='index.php';</script>");
    //exit;
} else {
    exit("<script language='javascript'>alert('用户名或密码不正确！');history.go(-1);</script>");
}
?>