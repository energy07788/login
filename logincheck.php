<?php
session_start();
if (isset($_SESSION['admin']) && isset($_COOKIE['PHPSESSID']) && strcasecmp($_COOKIE['PHPSESSID'], session_id() )==0) {
	$_SESSION['username']=$id;
	setcookie("username",$id,time()+1800);
	header('Location: insert.php');
}
if ( !isset($_SESSION['username']) ) {
	header('Location: index1.php');
}
?>