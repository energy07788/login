<?php
$admin = false;
session_start(); 
if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true) {
	echo "您已經成功登陸";
} 
else {
	// 驗證失敗，將 $_SESSION["admin"] 置為 false
	$_SESSION["admin"] = false; 
	echo "您無權訪問"; 
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
	}
?>