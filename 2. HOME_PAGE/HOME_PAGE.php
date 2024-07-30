	<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		<h1 align="center">Registration Page</h1>
		<form action="" method="POST">
			First Name:
			<input type="text" name="txtfname" size="30" placeholder="Enter your first name">

			<br><br>

			Middle Name:
			<input type="text" name="txtmname" size="30" placeholder="Enter your Middle name">

			<br><br>

			Last Name:
			<input type="text" name="txtlname" size="30" placeholder="Enter your Last Name">

			<br><br>

			<input type="submit" name="btnsubmit" value="submit">
			<input type="reset" name="btnreset" value="clear">

		</form>
	</body>
</html>

<?php
	if(isset($_POST['btnsubmit']))
	{
		$fname=$_POST['txtfname'];
		$mname=$_POST['txtmname'];
		$lname=$_POST['txtlname'];

		echo "<br>"."The First Name is : ".$fname;
		echo "<br>"."The Middle Name is : ".$mname;
		echo "<br>"."The Last Name is : ".$lname;
		echo "<br>";
		echo "Your Full Name Is : ","$fname ","$mname ","$lname";
	} 
?>