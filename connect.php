﻿<!--PDO連線到資料庫-->
<?php 
	ini_set('display_errors',1);
	require_once('define.php');
	try{
		$db = new PDO(
		'mysql:host='.HOST.';dbname='.NAME.';',
		USERNAME, PASSWORD,array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" ));
	}
	catch(PDOException $e){
		//error message
		die($e->getMessage()); 
	}
?>