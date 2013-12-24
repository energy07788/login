<?php
require_once('connect.php');
$id =$_POST['id'];
$pw =$_POST['pw'];
$pw2 =$_POST['pw2'];
if($id != null && $pw != null && $pw2 != null && $pw == $pw2){
	$sql = " insert into member (username,password) values ('$id','$pw')";
if($db ->query($sql)){

	echo "<script language=javascript>
	     alert('註冊成功!');
	     window:location.href='index1.php';
	     </script>";
	}
}
else{
	
	echo "<script language=javascript>
	     alert('註冊失敗!');
	     window:location.href='index1.php';
	     </script>";
}
?>