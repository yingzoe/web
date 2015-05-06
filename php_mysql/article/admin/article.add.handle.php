<?php
	require_once('../connect.php');
	
	if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
		echo "<script>alert('The title is required!');";
		echo "window.location.href='article.add.php';</script>";
	}
	if(!(isset($_POST['author'])&&(!empty($_POST['author'])))){
		echo "<script>alert('The author is required!');";
		echo "window.location.href='article.add.php';</script>";
	}
	if(!(isset($_POST['description'])&&(!empty($_POST['description'])))){
		echo "<script>alert('The description is required!');";
		echo "window.location.href='article.add.php';</script>";
	}
	if(!(isset($_POST['content'])&&(!empty($_POST['content'])))){
		echo "<script>alert('The content is required!');";
		echo "window.location.href='article.add.php';</script>";
	}
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline =  time();
	$insertsql = "insert into article(title, author, description, content, dateline) values('$title', '$author', '$description', '$content', $dateline)";
	if(mysql_query($insertsql)){
		echo "<script>alert('Post successfully :)');";
		echo "window.location.href='article.manage.php';</script>";
	}else{
		echo "<script>alert('Fail to post :(');";
		echo "window.location.href='article.manage.php';</script>";
	}
?>