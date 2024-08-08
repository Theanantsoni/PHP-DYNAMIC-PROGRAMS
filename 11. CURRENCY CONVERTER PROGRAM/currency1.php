<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="#f5fe04">
	<center>
		<h1 style="color:#6512ff; font-size: 50px; border:solid 5px; border-color:red; border-radius:5px; cursor:pointer;">Convert RS To All five Currency</h1>
			<form action="currency1_1.php" method="POST">
				<h2 style="color:red; font-size: 30px; border:dashed 3px; border-color:blue; border-radius:5px; cursor:pointer;">---------- : Enter The Today's Rate Of All The Currencies : ----------</h2>
				<label style="color:maroon; font-size:30px;">A. Enter The Today's Rate Of US Dollar : </label>
				<input type="text" name="txtuscur" size="30" placeholder="Enter Us Dollar Rate" style="background-color:#ffc0c0; border: inset 15px; padding: 10px 20px; margin: 4px 2px; cursor:space; border-radius: 100px; font-size: 15px;"><br><br>

				<label style="color:maroon; font-size:30px;">B. Enter The Today's Rate Of Canadian Dollar : </label>
				<input type="text" name="txtcancur" size="30" placeholder="Enter Canadian Dollar Rate" style="background-color:#ffc0c0; border:outset 15px;padding: 10px 20px; margin: 4px 2px; cursor:space; border-radius:100px; font-size:15px;"><br><br>

				<label style="color:maroon; font-size:30px;">C. Enter The Today's Rate Of Pound : </label>
				<input type="text" name="txtpndcur" size="30" placeholder="Enter Pound Rate" style="background-color:#ffc0c0; border:inset 15px; padding:10px 20px; margin:4px 2px; cursor:space; border-radius:100px; font-size:15px;"><br><br>

				<label style="color:maroon; font-size:30px;">D. Enter The Today's Rate Of Yen : </label>
				<input type="text" name="txtyencur" size="30" placeholder="Enter Yen Rate" style="background-color: #ffc0c0; border:outset 15px; padding:10px 20px; margin:4px 2px; cursor:space; border-radius:100px; font-size:15px;"><br><br>

				<label style="color:maroon; font-size:30px;">E. Enter The Today's Rate Of Dirham (Dubai) :</label>
				<input type="text" name="txtdrhmcur" size="30" placeholder="Enter Dirham Rate" style="background-color:#ffc0c0; border:inset 15px; cursor:space; border-radius:100px; padding:10px 20px; margin:4px 2px; font-size:15px;"><br><br>

				<h4 style="color:maroon; font-size:30px;">Enter The Amount That You Want To Convert Into Indian Ruppes : </h4> 
				<input type="text" name="txtindcur" size="30" placeholder="Enter Rs Rate" style="background-color: #e5c4ff; border:groove 30px; border-color: red; font-size:15px; padding:10px 20px; border-radius:40px; margin:4px 2px; cursor:space;"><br><br>

				<input type="submit" name="btnsubmit" value="CHECK" style="color:yellow; background-color: red; padding:10px 20px; margin:4px 2px; cursor:pointer; border:groove 20px; font-size: 30px; border-radius:500px; ">

				<button style="color:yellow; background-color: red; padding:10px 20px; margin:4px 2px; cursor:pointer; border:groove 20px; font-size: 30px; border-radius:500px;"><a href="currency.php" style="text-decoration: none; color:yellow;">BACK</a></button>
			</form>
	</center>
</body>
</html>