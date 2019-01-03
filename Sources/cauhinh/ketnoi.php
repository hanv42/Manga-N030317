<?php
$host="localhost";
$user="root";
$pass="";
$db="webmanga";

$link=mysqli_connect($host,$user,$pass,$db);

if ($link) {
	$setLang=mysqli_query($link,"SET NAMES 'utf8");//xét ngôn ngữ
}
else{
	die ("Kết nối Thất Bại".mysqli_connect_error());
}
?>