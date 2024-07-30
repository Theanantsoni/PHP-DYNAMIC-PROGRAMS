<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		input[type="radio"]
		{
			transform: scale(2.5);
		}
	</style>
</head>
<body bgcolor="#b8ff00">
	<center><br><br><br>
		<h1 style="color:red; border:dotted 5px; border-color: red; font-size: 70px; padding-top: 20px; padding-bottom: 20px;">------------------ : Convert RS To Individual Currency : ------------------</h1>
		<form action="currency2_1.php" method="POST">
			
			<input type="radio" name="rdocur" value="US Dollar";> &nbsp&nbsp&nbsp<label style="color:red; font-size: 50px;">1. Convert RS To US Dollar </label>
			<br><br><br><br>
			
			<input type="radio" name="rdocur" value="Canadian Dollar"> &nbsp&nbsp&nbsp<label style="color:red; font-size: 50px;"> 2. Convert RS To Canadian Dollar </label>
			<br><br><br><br>

			<input type="radio" name="rdocur" value="pound"> &nbsp&nbsp&nbsp<label style="color:red; font-size: 50px;"> 3. Convert RS To Pound</label>
			<br><br><br><br>

			<input type="radio" name="rdocur" value="yen"> &nbsp&nbsp&nbsp<label style="color:red; font-size: 50px;"> 4. Convert RS To Yen</label>
			<br><br><br><br>

			<input type="radio" name="rdocur" value="dirham"> &nbsp&nbsp&nbsp<label style="color:red; font-size: 50px;"> 5. Convert RS To Dirham</label>
			<br><br><br><br>

			<input type="submit" name="btnsubmit" value="CHECK" style="color:#00f5ed; background-color: #022ee1; padding:10px 20px; margin:4px 2px; cursor:space; border:double 30px; font-size: 30px; border-radius:500px; "> 

			<button style="color:#00f5ed; background-color: #022ee1; padding:10px 20px; margin:4px 2px; cursor:space; border:double 30px; font-size: 30px; border-radius:500px; "><a href="currency.php" style="text-decoration: none; color:#00f5ed;">BACK</a></button>

		</form>
	</center>
</body>
</html>