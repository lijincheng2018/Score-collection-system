<?php

if(!isset($_POST['submit'])){
    exit('未经授权的访问!');
}

include("../config.php");
//require "../config.php";


$uid=$_POST['uid'];
$name=$_POST['name'];
$ksh=$_POST['ksh'];
$yw=$_POST['yw'];
$sx=$_POST['sx'];
$yy=$_POST['yy'];
$zz=$_POST['zz'];
$ls=$_POST['ls'];
$wl=$_POST['wl'];
$hx=$_POST['hx'];
$ty=$_POST['ty'];

$a=0;
$b=0;
$c=0;
$d=0;


$tot=$yw+$sx+$yy+($wl*0.9)+($hx*0.6)+$ty;
$tot1=$yw+$sx+$yy+$wl+$hx+$zz+$ls+$ty;

//等级计算
if($yw>=120&&$yw!='-') $a++;
elseif ($yw<120&&$yw>=105&&$yw!='-') {
	$b++;
}elseif ($yw<105&&$yw>=90&&$yw!='-') {
	$c++;
}elseif ($yw<90&&$yw>=0&&$yw!='-') {
	$d++;
}

if($sx>=127.5&&$sx!='-') $a++;
elseif ($sx<127.5&&$sx>=105&&$sx!='-') {
	$b++;
}elseif ($sx<105&&$sx>=90&&$sx!='-') {
	$c++;
}elseif ($sx<90&&$sx>=0&&$sx!='-') {
	$d++;
}


if($yy>=127.5&&$yy!='-') $a++;
elseif ($yy<127.5&&$yy>=105&&$yy!='-') {
	$b++;
}elseif ($yy<105&&$yy>=90&&$yy!='-') {
	$c++;
}elseif ($yy<90&&$yy>=0&&$yy!='-') {
	$d++;
}

if ($zz=="A") {
	$a++;
}elseif ($zz=="B") {
	$b++;
}elseif ($zz=="C") {
	$c++;
}elseif ($zz=="D") {
	$d++;
}elseif ($zz=="a") {
	$a++;
}elseif ($zz=="b") {
	$b++;
}elseif ($zz=="c") {
	$c++;
}elseif ($zz=="d") {
	$d++;
}elseif($zz>=85){
  $a++;
}elseif ($zz<85&&$zz>=70) {
	$b++;
}elseif ($zz<70&&$zz>=60) {
	$c++;
}elseif ($zz<60&&$zz>=0) {
	$d++;
}

if ($ls=="A") {
	$a++;
}elseif ($ls=="B") {
	$b++;
}elseif ($ls=="C") {
	$c++;
}elseif ($ls=="D") {
	$d++;
}elseif ($ls=="a") {
	$a++;
}elseif ($ls=="b") {
	$b++;
}elseif ($ls=="c") {
	$c++;
}elseif ($ls=="d") {
	$d++;
}elseif($ls>=85){ 
  $a++;
}elseif ($ls<85&&$ls>=70) {
	$b++;
}elseif ($ls<70&&$ls>=60) {
	$c++;
}elseif ($ls<60&&$ls>=0) {
	$d++;
}

if($wl>=85&&$wl!='-') $a++;
elseif ($wl<85&&$wl>=70&&$wl!='-') {
	$b++;
}elseif ($wl<70&&$wl>=60&&$wl!='-') {
	$c++;
}elseif ($wl<60&&$wl>=0&&$wl!='-') {
	$d++;
}

if($hx>=85&&$hx!='-') $a++;
elseif ($hx<85&&$hx>=70&&$hx!='-') {
	$b++;
}elseif ($hx<70&&$hx>=60&&$hx!='-') {
	$c++;
}elseif ($hx<60&&$hx>=0&&$hx!='-') {
	$d++;
}


mysql_query("UPDATE user SET name='$name',tot='$tot',tot1='$tot1',ksh='$ksh',yw='$yw',sx='$sx',yy='$yy',zz='$zz',ls='$ls',wl='$wl',hx='$hx',ty='$ty',a='$a',b='$b',c='$c',d='$d' WHERE uid=$uid");


if(mysql_error()){
    echo mysql_error();
}else{
    header("Location:index.php");
}
?>
