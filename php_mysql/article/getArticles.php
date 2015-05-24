<?php 
	require_once('connect.php');
	$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	header('Content-Type: application/json; charset=UTF-8');
	if($query&&mysql_num_rows($query)){
		// $outp = "{\"records:\"[";
		while($row = mysql_fetch_assoc($query)){
		$data[] = $row;
		// 	if ($outp != "[") {$outp .= ",";}
	 //    		$outp .= '{"id":"'  . $row["id"] . '",';
	 //   			$outp .= '"title":"'   . addslashes($row["title"])        . '",';
	 //    		$outp .= '"author":"'. addslashes($row["author"])     . '",'; 
	 //    		$outp .= '"description":"'. addslashes($row["description"])     . '",'; 
	 //    		$outp .= '"content":"'. addslashes($row["content"])     . '",'; 
	 //    		$outp .= '"dateline":"'. $row["dateline"]     . '"}'; 
		// }
		// $outp .="]}";

		}
	}
	
	//echo($outp);
	echo json_encode($data);
?>