<?php
session_start();
//include_once可以避免重複引入,引不到檔案會出現錯誤息，但程式不會停止
include_once("connect.php");
$id=$_POST['id'];
$pw=$_POST['pw'];
$sql = "SELECT * FROM member where username = '$id'";
$st=$db->query($sql);
$row=$st->fetch(PDO::FETCH_NUM);
if($id!=null && $pw!=null && $row[0]==$id && $row[1]==$pw){
	$_SESSION['admin'] = session_id();
	$_SESSION['username']=$id;
	setcookie("username",$id,time()+1800);

	echo "<script language=javascript>
	     alert('登入成功!');
	     window:location.href='main.php';
	     </script>";
	}
	else{
		
	echo "<script language=javascript>
	     alert('登入失敗!');
	     window:location.href='index.php';
	     </script>";
	}
?>