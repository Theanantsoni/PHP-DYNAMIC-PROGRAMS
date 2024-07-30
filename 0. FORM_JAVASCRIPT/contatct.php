<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<script>
		function form()
		{
			var contact = document.getElementById("ucontact").value;

            if(contact.length>10 || contact.length <10)
            {
            	document.getElementById("usercontact").innerHTML="*Enter Mobile Number must be 10 Digits*";
            	return false;
            }
            if (!/^\d{10}$/.test(contact))  // Use pattern : !/^\d{10}$/
            {
                document.getElementById("usercontact").innerHTML="characters Are Not Allowed*";
                return false;
            }
            /* if(!isNaN(contact))
			{
				document.getElementById("usercontact").innerHTML=" * ONLY CHARACTER ALLOWED*";
				return false;	
			}  ( USE IN OPTIONAL)*/
            else
            {
                document.getElementById("usercontact").innerHTML="";
            }
		}
	</script>
</head>
<body>
	<center>
		<form action="" method="POST" onsubmit="return form()">
		

		<br><br>

		Contact No : 
		<input type="text" name="txtlab" value="+91" readonly size="1">
		<input type="text" name="txtmob1" id="ucontact" size="30" placeholder="Enter Your First Mobile Number">
		<span id="usercontact"></span>

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