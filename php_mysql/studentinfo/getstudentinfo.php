<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student informaiton</title>
<style type="text/css">
a:link {
  color: green;
}

a:hover, a:active {
  text-decoration: none;
  color:green;
}

a:visited {
  color: green;
}

.nice  {
background: #FAFAD2;
}

.mouseon  {
background: orange;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  $("document").ready(function() {
    $("#data tr:even").addClass("nice");
    $("#data tr").mouseover(function() { $(this).addClass("mouseon"); });
    $("#data tr").mouseout(function() { $(this).removeClass("mouseon"); });
  });
</script>
</head>
<body>
<?php
// Get a connection for the database
require_once('mysqli_connect.php');

// Create a query for the database
$query = "SELECT first_name, last_name, email, street, city, state, zip,
phone, birth_date, student_id FROM student";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table id="data" align="left" cellspacing="5" cellpadding="10">

<tr><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Street</b></td>
<td align="left"><b>City</b></td>
<td align="left"><b>State</b></td>
<td align="left"><b>Zip</b></td>
<td align="left"><b>Phone</b></td>
<td align="left"><b>Birth Day</b></td>
<td align="left" colspan="2"><b>Operation</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available

//if($response && mysql_num_rows($response){})
while($row = mysqli_fetch_array($response)){


echo '<tr><td align="left">' . 
$row['first_name'] . '</td><td align="left">' . 
$row['last_name'] . '</td><td align="left">' .
$row['email'] . '</td><td align="left">' . 
$row['street'] . '</td><td align="left">' .
$row['city'] . '</td><td align="left">' . 
$row['state'] . '</td><td align="left">' .
$row['zip'] . '</td><td align="left">' . 
$row['phone'] . '</td><td align="left">' .
$row['birth_date'] . '</td>'.
'<td align="left"><a href="deletestudent.php?id='.$row['student_id'].'">Delete</a> </td>'.
 '<td align="left"><a href="modifystudent.php?id='.$row['student_id'].'">Modify</a></td>';

echo '</tr>';
}

echo '</table>';

echo '<input type="button" name="add" value="Add" onclick="window.location.href='."'addstudent.php'".'" />';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
</body>