<?php 
	require_once('connect.php');
	$sql = "select * from  introduce";
	$query = mysql_query($sql);
	header('Content-Type: application/json; charset=UTF-8');
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_array($query)){
			$data['about'] = str_replace('\n','',$row[0]);
			$data['contact'] = str_replace('\n','',$row[1]);
			var_dump($data);
		//$data[] = $row;
		}
	}
	//$data['about']
	//$data = str_replace('\n','', $data);
	//echo json_encode($data);
?>