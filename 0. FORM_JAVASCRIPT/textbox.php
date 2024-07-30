<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TextBox</title>
	<script>
		function form()
		{
			var fname = document.getElementById("ufname").value;
			var pattern = /^[a-zA-Z]*$|^\d*$/;

			if(fname == "")
			{
				document.getElementById("ufirstname").innerHTML="*Enter Name Is Empty*";
				return false;
			}
			/*if(!isNaN(fname))
			{
				document.getElementById("ufname").innerHTML="*characters Are Not Allowed*";
                return false;
			} */
			if (!pattern.test(fname)) 
            {
                document.getElementById("ufname").innerHTML="characters Are Not Allowed*";
                return false;
            }
			else
			{
				document.getElementById("ufirstname").innerHTML="";
			}
    
		}

	</script>

</head>
<body>
	<center>
		<form action="" method="POST" onsubmit="return form()">
		

		<br><br>

		First Name : 

		<input type="text" name="txtfname" placeholder="Enter First Name" id="ufname">

		<span id="ufirstname" style="color:red"></span>

		<br><br>

		<input type="submit" name="btnsubmit" value="Submit"  size="30" style="Font-size:30px; Border-radius:100px; background-color:#feff0f;">
		
		
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