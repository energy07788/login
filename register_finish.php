<?php
require_once('connect.php');
$id =$_POST['id'];
$pw =$_POST['pw'];
$pw2 =$_POST['pw2'];
if($id != null && $pw != null && $pw2 != null && $pw == $pw2){
	$sql = " insert into member (username,password) values ('$id','$pw')";
if($db ->query($sql)){
	echo "註冊成功";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
	exit();
	}
}
else{
	echo "註冊失敗";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
}
?>