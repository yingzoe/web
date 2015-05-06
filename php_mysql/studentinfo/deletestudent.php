<?php
	require_once('mysqli_connect.php');

	$id = $_GET['id'];
	$deletesql = "DELETE from student where student_id=$id";
	if(mysqli_query($dbc,$deletesql)){
		echo "<script>alert('Delete successfully! :)');";
		echo "window.location.href='getstudentinfo.php';</script>";
	}else{
		echo "<script>alert('Fail to delete :(');";
		echo "window.location.href='getstudentinfo.php';</script>";
	}

	mysqli_close($dbc);
?>