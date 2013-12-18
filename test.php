<?php
session_start();
$_SESSION['admin']=session_id();
echo $_SESSION['admin'];
echo "\n";
echo session_id();
?>