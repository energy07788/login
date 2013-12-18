<?php
require_once('connect.php');
require_once('logincheck.php');
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>申請資料</title>
</head>
<body>
<form name="form1" method="post">
	<input type="button" onclick="window:location.href='insert.php'"value="申請"/>
	<input type="button" onclick="window:location.href='logout.php'"value="登出"/>
</form>
</body>
</html>