<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	$deletesql = "delete from article where id=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('Delete successfully! :)');";
		echo "window.location.href='article.manage.php';</script>";
	}else{
		echo "<script>alert('Fail to delete :(');";
		echo "window.location.href='article.manage.php';</script>";
	}
?>