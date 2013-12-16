<?php
include_once("connect.php");
include_once("session.php");
$id=$_POST['id'];
$pw=$_POST['pw'];
$sql = "SELECT * FROM member where username = '$id'";
$st=$db->query($sql);
$row=$st->fetch(PDO::FETCH_NUM);
if($id!=null && $pw!=null && $row[0]==$id && $row[1]==$pw){
	session_start();
	$_SESSION['admin'] = true;
	$_SESSION['username']=$id;
	$_SESSION['password']=$pw;
	setcookie("username",$id,time()+3600);
	setcookie("password",$pw,time()+3600);
	echo "登入成功";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=insert.php>';
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