<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION['admin']))
		header("Location: insert.php");
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>登入</title>
</head>
<body>
<form method="POST" action="login.php" align="center">
使用者帳號:<input type="text" name="id" ><br>
使用者密碼:<input type="password" name="pw" /><br>
<input type="submit" name="button" value="登入" />
<a href="register.php">申請帳號</a>
</form>
</body>
</html>