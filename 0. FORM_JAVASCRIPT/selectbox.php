
<html>
<head>
	<title>SelectBox</title>
	<script>
		function form()
		{
			var stateselect = document.getElementById("ustate").value;

			if(stateselect == "select")
			{
				document.getElementById("userstate").innerHTML="*Please Select State*";
                return false;
			}
		}
	</script>
</head>
<body>
	<center>
		<form action="" method="POST" onsubmit="return form()">
		
		Select State : 

		<select id="ustate">
			<option value="select">Select</option>
			<option value="Ahemdabad">Ahemdabad</option>
			<option value="vadodara">vadodara</option>
			<option value="Rajkot">Rajkot</option>
			<option value="Baroda">Baroda</option>
			<option value="Navsari">Navsari</option>
			<option value="Gandhinagar">Gandhinagar</option>
			<option value="Surat">Surat</option>
			<option value="Somnath">Somnath</option>
			<option value="Kutch">Kutch</option>
			<option value="Palanpur">Palanpur</option>
		</select>

		<br>

		<span id="userstate"></span>

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