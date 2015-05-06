<?php
	require_once('mysqli_connect.php');

	$id = $_GET['id'];

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];
	$birth_date = $_POST['birth_date'];
	$sex = $_POST['sex'];
	$lunch_cost = $_POST['lunch'];
	
	$updatesql = "update student set first_name='$first_name',last_name='$last_name',email='$email',street='$street',
	city='$city',state='$state',zip='$zip',phone='$phone',birth_date='$birth_date',sex='$sex',lunch_cost='$lunch_cost',
	date_entered=now() where student_id=$id";
	if(mysqli_query($dbc,$updatesql)){
		echo "<script>alert('Modify successfully! :)');";
		echo "window.location.href='getstudentinfo.php';</script>";
	}else{
		echo "<script>alert('Fail to modify :(');"; 
		echo "window.location.href='getstudentinfo.php';";
		echo "</script>";
	}