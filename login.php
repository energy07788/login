<?php
session_start();
include_once("connect.php");
$id=$_POST['id'];
$pw=$_POST['pw'];
$sql = "SELECT * FROM member where username = '$id'";
$st=$db->query($sql);
$row=$st->fetch(PDO::FETCH_NUM);
if($id!=null && $pw!=null && $row[0]==$id && $row[1]==$pw){
	$_SESSION['admin'] = session_id();
	echo "登入成功";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=main.php>';
	//header('Location:insert.php');
	exit();
}
else{
	echo "登入失敗";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
	//header('Location:index1.php');
	exit();
}
?>