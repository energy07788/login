<?php
session_start(); 
include_once("connect.php");
if($_SESSION['username']=""&&$_SESSION['password']=""){
echo "請重新登入";
echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
}
?>