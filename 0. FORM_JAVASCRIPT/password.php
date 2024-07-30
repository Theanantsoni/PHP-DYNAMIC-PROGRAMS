<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Password</title>
	<script>
		function form()
		{
			var password = document.getElementById("upwd").value;
			var confirmpassword = document.getElementById("uconpwd").value;

			if(password == "")
			{
				document.getElementById("userpwd").innerHTML="*Password Is Empty*";
				return false;
			}

			if (password.length < 5 || password.length > 20)
			{
				document.getElementById("userpwd").innerHTML="*Password Length Must Be Between 5 And 20*";
				return false;
			}

			if(confirmpassword == "")
			{
				document.getElementById("userconpwd").innerHTML="*Confirm Password Is Empty*";
				return false;
			}

			if (confirmpassword.length < 5 || confirmpassword.length > 20)
			{
				document.getElementById("userconpwd").innerHTML="*Password Length Must Be Between 5 And 20*";
				return false;
			}

			if(password != confirmpassword)
			{
				document.getElementById("userconpwd").innerHTML="*Password And Confirm Password Is Not Same*";
				return false;
			}
		}
	</script>
</head>
<body>
	<center>
		<form action="" method="POST" onsubmit="return form()">
		
		Password : 
		
		<input type="password" name="txtpwd" id="upwd" placeholder="Enter Password">

		<span id="userpwd">	</span>

		<br><br>

		Confirm Password : 

		<input type="password" name="txtconpwd" id= "uconpwd" placeholder="Enter Confirm Password">

		<span id="userconpwd"></span>

		<br><br>

		<input type="submit" name="btnsubmit" value="Submit" size="30" style="Font-size:30px; Border-radius:100px; background-color:#feff0f;">
		
		</form>
	</center>
</body>
</html>


<?php
	if(isset($_POST['btnsubmit']))
	{
		echo "Button Clicked Successfully";
	}
?>