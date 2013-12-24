<?php
//require_once可以避免重複引入,引不到檔案會出現錯誤息程式會停止
require_once('connect.php');
require_once('logincheck.php');
require_once('timeout.php');
$sth=$db->prepare("select *from ip");
	//execute執行
	$sth->execute();
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>IP申請網站</title>
	</head>
	<body>
		<form name="form1" method="post">
			<input type="button" onclick="window:location.href='insert.php'"value="申請"/>
			<input type="button" onclick="window:location.href='logout.php'"value="登出"/>
		</form>
		<table border="1">
			<tr>
				<!--欄位名稱-->
				<td> 申請人 </td>
				<td> 使用人 </td>
				<td> 聯絡電話/分機 </td>
				<td> 科系或單位 </td>
				<td> MAC </td>
				<td> DNS </td>
				<td> 使用需求</td>
				<td> 放置位置 </td>
				<td> 學年度 </td>
				<td> 學期 </td>
			</tr>
			<tr>
				<?php
				while($dt=$sth->fetch(PDO::FETCH_ASSOC))
				{
				echo "<tr>";
				echo "<td>".$dt['applicant']."</td>";
				echo "<td>".$dt['user']."</td>";
				echo "<td>".$dt['phone']."</td>";
				echo "<td>".$dt['department']."</td>";
				echo "<td>".$dt['mac']."</td>";
				echo "<td>".$dt['dns']."</td>";
				echo "<td>".$dt['requirements']."</td>";
				echo "<td>".$dt['place']."</td>";
				echo "<td>".$dt['year']."</td>";
				echo "<td>".$dt['semester']."</td>";
				echo "</tr>";
				}
				?>
			</tr>
		</table>
	</body>
</html>