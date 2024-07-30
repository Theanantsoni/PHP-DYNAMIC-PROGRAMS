<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		div.main
		{
			width:45%;
			padding: 20px 55px 45px;
			background-color: #bbffb8a6;
			border: 15px solid white;
			box-shadow: 0 0 10px;
			border-radius: 2px;
		}
		#register:hover {
				background: linear-gradient(#10ff00 1%, green 100%);
				color: red;
			}
		
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script>
		$(function () 
		{
        	$('#products').change(function () 
        	{
          	  $('#priceInput').val($('#products option:selected').attr('data-price'));
        	});
   		});
	</script>

</head>
<body bgcolor="skyblue">
	<center>
		<div class="main">
		<h1 style="color:red">-----------------Successfully Login-----------------</h1>
		<h1 style="color:red">-------------Welcome To Chroma Store-------------</h1> <br>
		<form action="chroma_display.php" method="POST">
			<font size=25; color="blue">
			Enter Customer Name :
			<input type="text" name="txtname" size="30" placeholder="Enter Customer Name" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; box-shadow : 0 0 25px #00F5FF; Border-radius:10px; Font-size:15px"><br><br>

			Enter Customer Age :
			<input type="text" name="txtage" size="30" placeholder="Enter customer Age" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; box-shadow : 0 0 25px #00F5FF; Border-radius:10px; Font-size:15px"><br><br>

			Enter Customer Email :
			<input type="text" name="txtemail" size="30" placeholder="Enter Customer Email" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; box-shadow : 0 0 25px #00F5FF; Border-radius:10px; Font-size:15px"><br><br>

			Enter Customer City :
			<input type="text" name="txtcity" size="30" placeholder="Enter Customer City" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; box-shadow : 0 0 25px #00F5FF; Border-radius:10px; Font-size:15px"><br><br>

			Select Your Product Want You Buy :
			<select name="selproduct" value="Select" id="products" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; box-shadow : 0 0 25px #00F5FF; Font-size:15px">
				<option value="Select" data-price=" " style="Font-size:20px; Border-radius:10px; background-color: lawngreen;" >Select</option>
				<option value="Sony Bravia Led Tv 72' Inch" data-price="1000" style="Font-size:20px; Border-radius:10px; background-color: yellow;">1. Sony Bravia Led Tv 72' Inch</option>
				<option value="Boat Headphone" data-price="3000" style="Font-size:20px; Border-radius:10px; background-color: lawngreen;">2. Boat Headphone</option>
				<option value="Boat BlueTooth Speaker" data-price="2000" style="Font-size:20px; Border-radius:10px; background-color: yellow;">3. Boat BlueTooth Speaker</option>
				<option value="Samsung Fridge" data-price="15000" style="Font-size:20px; Border-radius:10px; background-color: lawngreen;">4. Samsung Fridge</option>
				<option value="Home Theater Speaker Set" data-price="70000" style="Font-size:20px; Border-radius:10px; background-color: yellow;">5. Home Theater Speaker Set</option>
				<option value="JBL BlueTooth Speaker" data-price="4000" style="Font-size:20px; Border-radius:10px; background-color: lawngreen;">6. JBL BlueTooth Speaker</option>
				<option value="Blue Star Air-Conditionar 2.5 Ton" data-price="50000" style="Font-size:20px; Border-radius:10px; background-color: yellow;">7. Blue Star Air-Conditionar 2.5 Ton</option>
				<option value="Dell Laptop 500 GB SSD" data-price="25000" style="Font-size:20px; Border-radius:10px; background-color: lawngreen;">8. Dell Laptop 500 GB SSD</option>
				<option value="Camera Sons Alpha" data-price="5000" style="Font-size:20px; Border-radius:10px; background-color: yellow;">9. Camera Sons Alpha</option>
				<option value="Boat Airpods" data-price="2500" style="Font-size:20px; Border-radius:10px; background-color: lawngreen;">10. Boat Airpods</option>
			</select><br><br>

			Price :
			<input type="text" name="productprice" id="priceInput" readonly style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; box-shadow : 0 0 25px #00F5FF; Border-radius:10px; Font-size:15px"></br>

			<br>

			How Many Product Do You Want :
			<input type="text" name="txtqty" size="30" placeholder="Enter quantity" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; box-shadow : 0 0 25px #00F5FF; cursor: space; Border-radius:10px; Font-size:15px">

			<br><br>

			<input type="submit" name="btnsubmit" value="submit" id="register" style="color:yellow; background-color: blue; padding:10px 20px; margin:4px 2px; border:groove 25px; cursor: pointer; font-size: 35px; border-radius:50px;">
			</font>
		</form>
	</div>
	</center>

</body>
</html>

