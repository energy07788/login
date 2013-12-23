<?php
if (!isset($_SESSION['admin']) && !isset($_COOKIE['PHPSESSID']) 
	&& strcasecmp($_COOKIE['PHPSESSID'],$_SESSION['admin'])!=0) {
	header('Location: index1.php');
}
?>