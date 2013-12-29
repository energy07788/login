<?php
session_start();
unset($_SESSION['admin']);
unset($_SESSION['username']);
setcookie("username","",time()-1800);
header('Location:index.php');
exit();
?>