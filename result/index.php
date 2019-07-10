<?php
session_start();
include '../ieban.php';

if(!isset($_SESSION['userid'])){
    header("Location:index.html");
    exit();
}
else if(isset($_SESSION['userid'])){
    if($_SESSION['userid']==1) header("Location:/result/boy/");
  	if($_SESSION['userid']==2) header("Location:/result/girl/");
  	if($_SESSION['userid']==3) header("Location:/result/admin/");
}
?>