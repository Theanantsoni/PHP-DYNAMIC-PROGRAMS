<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ticket Booking Form</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script>
		$(function()
		{
			$('#tickets').change(function()
			{
				$('#priceinput').val($('#tickets option:selected').attr('ticket-price'));
			});
		});
	</script>

</head>
<body bgcolor="black">
	<center>
		<h2 style="color:burlywood">--------------------- : Welcome To Online Ticket Booking : ---------------------</h2>
		<form action="ticket_form_display.php" method="POST">
			
			<h2 style="color:#00fdb2">Enter Tourist name : 
			<input type="text" name="txtname" size="30" placeholder="Enter Tourist Name" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px"><br><br>		

			<h2 style="color:#00fdb2">Enter Tourist Age :
			<input type="text" name="txtage" size="30" placeholder="Enter Tourist Age" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px"><br><br>		

			<h2 style="color:#00fdb2">Enter Tourist Birth Date :
			<input type="text" name="txtbod" size="30" placeholder="Enter Tourist Birth Of Date" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px"><br><br>		

			<h2 style="color:#00fdb2">Enter Tourist Contact Number :
			<input type="text" name="txtcntct" size="30" placeholder="Enter Tourist Contact Number" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px"><br><br>		

			<h2 style="color:#00fdb2">Enter Tourist City : 
			<select name="txtcity" style="color:red">
				<option value="select" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Select</option>
				<option value="Mumbai" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Mumbai</option>
				<option value="Delhi" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Delhi</option>
				<option value="Ahemdabad" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Ahemdabad</option>
				<option value="Pune" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Pune</option>
				<option value="Bengaluru" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Bengaluru</option>
				<option value="Chennai" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Chennai</option>
				<option value="Kolkata" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Kolkata</option>
				<option value="Surat" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Surat</option>
				<option value="Jaipur" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Jaipur</option>
				<option value="Indore" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Indore</option>
			</select> <br><br>
			

			<h2 style="color:#00fdb2">Your Source : 
			<input type="text" name="txtsrce" size="30" value="Surat" readonly>
			<br><br>

			<h2 style="color:#00fdb2">Select Your Destination : 
			<select name="txtdstnsn" id="tickets" style="color:red">
				<option value="select" ticket-price="700" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Select</option>
				<option value="Mumbai" ticket-price="800" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Mumbai</option>
				<option value="Delhi" ticket-price="900" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Delhi</option>
				<option value="Ahemdabad" ticket-price="1000" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Ahemdabad</option>
				<option value="Pune" ticket-price="2000" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Pune</option>
				<option value="Bengaluru" ticket-price="3000" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Bengaluru</option>
				<option value="Chennai" ticket-price="4000" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Chennai</option>
				<option value="Kolkata" ticket-price="5000" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Kolkata</option>
				<option value="Surat" ticket-price="6000" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Surat</option>
				<option value="Jaipur" ticket-price="7000" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Jaipur</option>
				<option value="Indore" ticket-price="8000" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Indore</option>
			</select><br><br>

			price :
			<input type="text" name="ticketprice" id="priceinput" readonly style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px"> <br>

			<h2 style="color:#00fdb2">How Many Tickets Do You Want :
			<font size="5" color="#ff5dfa">
			<input type="radio" name="txtcnt" value="1">1
			<input type="radio" name="txtcnt" value="2">2
			<input type="radio" name="txtcnt" value="3">3
			<input type="radio" name="txtcnt" value="4">4
			<input type="radio" name="txtcnt" value="5">5
			<input type="radio" name="txtcnt" value="6">6
			<input type="radio" name="txtcnt" value="7">7
			<input type="radio" name="txtcnt" value="8">8
			<input type="radio" name="txtcnt" value="9">9
			<input type="radio" name="txtcnt" value="10">10
			</font>

			<br><br>

			<h2 style="color:#00fdb2">Select Your Coach :
			<font size="5" color="#ff5dfa">
			<input type="radio" name="txtcoch" value="AC">AC
			<input type="radio" name="txtcoch" value="NON-AC">NON-AC
			</font>

			<br><br>

			<input type="submit" name="txtsubmit" value="Submit" style="background-color: yellow; border: none; color:red; padding: 15px 30px; text-decoration: none;margin: 8px 4px; cursor: pointer; Border-radius:100px; Font-size:20px";>
			<input type="reset" name="txtclear" value="Cancel" style="background-color: yellow; border: none; color:red; padding: 15px 30px; text-decoration: none;margin: 8px 4px; cursor: pointer; Border-radius:100px; Font-size:20px";>

		</form>
	</center>
</body>
</html>
