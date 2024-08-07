<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="#f5fe04">
	<center>
	<form action="sponsership_display.php" method="POST">
		<h1>-------------------------------- : Fill The Basic Details For Create Sponsership Letter : --------------------------------</h1>
		<label style="color:red; font-size:30px;">Enter Your Name : </label>
		<input type="text" name="txtname" size="30" placeholder="Enter Your Name" style="background-color:#ffc0c0;  padding: 10px 20px; margin: 4px 2px; cursor:space;  font-size: 15px;"> <br><br>

		<label style="color:red; font-size:30px;">Enter Your Address : </label>
		<textarea cols="30" rows="5" name="txtadd1" size="30" placeholder="Enter Your Address" style="background-color:#ffc0c0;  padding: 10px 20px; margin: 4px 2px; cursor:space;  font-size: 15px;"> </textarea> <br><br>

		
		<label style="color:red; font-size:30px;">Enter Your City : </label>
		<select name="drpcity1">
			<option value="Kutch">Kutch</option>
			<option value="Vadodara">Vadodara</option>
			<option value="Dang">Dang</option>
			<option value="Bhuj">Bhuj</option>
			<option value="Surat">Surat</option>
			<option value="Navsari">Navsari</option>
			<option value="Ahmedabad">Ahmedabad</option>
			<option value="Rajkot">Rajkot</option>
			<option value="Dwarka">Dwarka</option>
			<option value="Junagadh">Junagadh</option>
			<option value="Palanpur">Palanpur</option>
			<option value="Somnath">Somnath</option>
			<option value="Ankleshwar">Ankleshwar</option>
			<option value="Tharad">Tharad</option>
			<option value="Patan">Patan</option>
			<option value="Mehsana">Mehsana</option>
		</select><br><br>

	<label style="color:red; font-size:30px;">Enter Area Pin Code No : </label>
	<input type="text" name="txtpin1" size="30" placeholder="Enter Area Pin Code No." style="background-color:#ffc0c0;  padding: 10px 20px; margin: 4px 2px; cursor:space;  font-size: 15px;"> <br><br>

	<label style="color:red; font-size:30px;">Enter Your Email : </label>
	<input type="text" name="txtemail" size="30" placeholder="Enter Your Email" style="background-color:#ffc0c0;  padding: 10px 20px; margin: 4px 2px; cursor:space;  font-size: 15px;"> <br><br>

	<label style="color:red; font-size:30px;">Today's Date : </label>
	<input type="text" name="txtdte" size="30" placeholder="Enter Today's Date" style="background-color:#ffc0c0;  padding: 10px 20px; margin: 4px 2px; cursor:space;  font-size: 15px;"> <br><br>

	<label style="color:red; font-size:30px;">Enter Your Signature : </label>
	<input type="text" name="txtsign" size="30" placeholder="Enter Your Signature" style="background-color:#ffc0c0;  padding: 10px 20px; margin: 4px 2px; cursor:space;  font-size: 15px;"> <br><br>

	<input type="submit" name="btnsubmit" value="SUBMIT" style="color:yellow; background-color: red; padding:10px 20px; margin:4px 2px; cursor:space; font-size: 30px; ">

	</form>
	</center>
</body>
</html>

