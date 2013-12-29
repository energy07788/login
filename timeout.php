 <?php
 //判斷cook是是否逾時,如逾時就回到登入畫面
if(!isset($_COOKIE['username'])){
	header('Location:index.php');
}
?>