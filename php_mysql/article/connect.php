<?php
	
	define('HOST', 'localhost');
	define('USERNAME', 'wang');
	define('PASSWORD', 'wangying');
	define('DB_NAME', 'test3');

	if(!($con = @mysql_connect(HOST, USERNAME, PASSWORD))){
		echo mysql_error();
	}
	
	if(!mysql_select_db(DB_NAME)){
		echo mysql_error();
	}
	
	if(!mysql_query('set names utf8')){
		echo mysql_error();
	}
?>