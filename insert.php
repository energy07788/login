<!DOCTYPE html>
<?
require_once('connect.php');
?>
<html>
	<head>
		<html lang="zh-tw">
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>申請頁面</title>
	</head>
	<body>
	<form method="post" action="logout.php" align="right">
	<input type="submit" value="登出">
	</form>
		<form  name="form" method="post" action="finish.php" >
			申請人：<input type="text" name="applicant"><br><br>
			使用人：<input type="text" name="user">*<br><br>
			科系年級或單位：<input type="text" name="department">*<br><br>
			連絡電話（分機）：<input type="text" name="phone">*<br><br>
			網路卡編號：<input type="text" name="mac">*<br><br>
			DNS 網域名稱（無特殊需求請空白）：<input type="text" name="dns"><br><br>
			使用需求：<input type="text" name="requirements">*<br><br>
			放置位置：<input type="text" name="place">*<br><br>
			學年度：<input type="text" name="year">*<br><br>
			<select value="學期"name="semester"><option>上</option><option>下</option></select>*<br><br><br><br>
			<input type="submit" value="送出">
		</form>
	</body>
</html>