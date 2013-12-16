<?php
$admin = false;
session_start(); 
if (isset($_SESSION['admin']) && $_SESSION['admin'] == true && isset($_COOKIE['username']) &&  isset($_COOKIE['password'])) {

} 
else {
	// 驗證失敗，將 $_SESSION["admin"] 置為 false
	$_SESSION["admin"] = false; 
	header('Location:index1.php');
	}
?>