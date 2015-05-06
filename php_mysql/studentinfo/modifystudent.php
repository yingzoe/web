<?php
	require_once('mysqli_connect.php');
	
	$id = $_GET['id'];
	$query = mysqli_query($dbc,"select * from student where student_id=$id");
	$data = mysqli_fetch_assoc($query);


?>
<html>
<head>
<title>Modify Student</title>
</head>
<body>

<form action="http://localhost/php1/studentmodified.php?id=<?php echo $id ?>" method="post">

<b>Modify the Student</b>

<p>First Name:
<input type="text" name="first_name" size="30" value="<?php echo $data['first_name']?>" />
</p>

<p>Last Name:
<input type="text" name="last_name" size="30" value="<?php echo $data['last_name']?>" />
</p>

<p>Email:
<input type="text" name="email" size="30" value="<?php echo $data['email']?>" />
</p>

<p>Street:
<input type="text" name="street" size="30" value="<?php echo $data['street']?>" />
</p>

<p>City:
<input type="text" name="city" size="30" value="<?php echo $data['city']?>" />
</p>

<p>State (2 Characters):
<input type="text" name="state" size="30" maxlength="2" value="<?php echo $data['state']?>" />
</p>

<p>Zip Code:
<input type="text" name="zip" size="30" maxlength="5" value="<?php echo $data['zip']?>" />
</p>

<p>Phone Number:
<input type="text" name="phone" size="30" value="<?php echo $data['phone']?>" />
</p>

<p>Birth Date (YYYY-MM-DD):
<input type="text" name="birth_date" size="30" value="<?php echo $data['birth_date']?>" />
</p>

<p>Sex (M or F):
<input type="text" name="sex" size="30" maxlength="1" value="<?php echo $data['sex']?>" />
</p>

<p>Lunch Cost:
<input type="text" name="lunch" size="30" value="<?php echo $data['lunch_cost']?>" />
</p>

<div>
<p style="float:left;">
<input type="submit" name="submit" value="Modify" />
</p>

<p style="float:left;">
<input type="button" name="return" value="Show" onclick="window.location.href='getstudentinfo.php'" />
</p>
</div>

</form>
</body>
</html>