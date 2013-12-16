<!--傳送資料到資料庫-->
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<?php
	require_once('connect.php');
	$applicant= $_POST['applicant'];
	$user= $_POST['user'];
	$phone= $_POST['phone'];
	$department= $_POST['department'];
	$mac= $_POST['mac'];
	$dns= $_POST['dns'];
	$requirements= $_POST['requirements'];
	$place= $_POST['place'];
	$year= $_POST['year'];
	$semester= $_POST['semester'];
	
	if($applicant!=null&&$phone!=null&&$mac!=null&&$requirements!=null){
		$sql1="insert into ip (applicant,user,phone,department,mac,dns,requirements,place,year,semester) 
		values ('$applicant','$user','$phone','$department','$mac','$dns','$requirements','$place','$year','$semester')";
		
		if($db ->query($sql1))
		{
			echo '新增成功!';
		}
		else
		{
			echo '新增失敗!';
		}
	
	}
	
?>