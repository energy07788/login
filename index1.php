<!DOCTYPE html>
<?php
	session_start();
	//判斷使用者有無登入
	if(isset($_SESSION['username']))
		header("Location: main.php");
?>
<html>
	<head>
		<!--告訴網頁瀏覽器你的HTML網頁的文字碼是萬用字元碼"utf-8"-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>登入</title>
	</head>
	<body>
		<form method="POST" action="login.php" align="center">
			使用者帳號:<input type="text" name="id" ><br>
			使用者密碼:<input type="password" name="pw" /><br>
			<input type="submit" name="button" value="登入" />
			<input type="button" value="申請" onclick="window:location.href='register.php'"/>
		</form>
	</body>
</html>
