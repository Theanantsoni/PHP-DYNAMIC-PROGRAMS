<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body {
            background-color: #b8ff00;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        form {
            display: inline-block;
            text-align: left;
        }

        input[type="radio"] {
            transform: scale(2.5);
            margin-right: 10px;
        }

        label {
            color: red;
            font-size: 30px;
        }
        h1 {
            color: blue;
            border: dotted 5px white;
            font-size: 30px;
            padding: 20px;
        }
		input[type="radio"]
		{
			transform: scale(2.5);
		}
		input[type="radio"] {
            margin-right: 20px;
        }

        label {
            color: red;
            font-size: 30px;
        }
	</style>
</head>
<body bgcolor="#b8ff00">
	<center><br><br><br>
		<h1 style="color:blue; border:dotted 5px; border-color: blue; font-size: 30px; padding-top: 20px; padding-bottom: 20px;">------------------------------------ : Convert Individual Currency Into Indian Rupees : ------------------------------------</h1>
		<form action="currency2_1.php" method="POST">
			
			<div>
            <input type="radio" name="rdocur" value="US Dollar">
            <label style="font-size: 50px; color: red;">1. Convert US Dollar Into Indian Rupees </label>
        </div>
        <br>
        
        <div>
            <input type="radio" name="rdocur" value="Canadian Dollar">
            <label style="font-size: 50px; color: red;">2. Convert Canadian Dollar Into Indian Rupees </label>
        </div>
        <br>
        
        <div>
            <input type="radio" name="rdocur" value="pound">
            <label style="font-size: 50px; color: red;">3. Convert Pound Into Indian Rupees </label>
        </div>
        <br>
        
        <div>
            <input type="radio" name="rdocur" value="yen">
            <label style="font-size: 50px; color: red;">4. Convert Yen Into Indian Rupees </label>
        </div>
        <br>
        
        <div>
            <input type="radio" name="rdocur" value="dirham">
            <label style="font-size: 50px; color: red;">5. Convert Dirham Into Indian Rupees </label>
        </div>
        <br>
        	<center>
			<input type="submit" name="btnsubmit" value="CHECK" style="color:#00f5ed; background-color: #022ee1; padding:10px 20px; margin:4px 2px; cursor:space; border:double 30px; font-size: 20px; border-radius:500px; "> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button style="color:#00f5ed; background-color: #022ee1; padding:10px 20px; margin:4px 2px; cursor:space; border:double 30px; font-size: 20px; border-radius:500px; "><a href="currency.php" style="text-decoration: none; color:#00f5ed;">BACK</a></button>
			</center>
		</form>
	</center>
</body>
</html>