	<html>
	<head>
		<title>IF-ELSE</title>
	</head>
	<body style="background-color: lightblue;">
		<center>
		<h1 align="center" style="color:purple;">IF-ELSE <br> CONTROL STATEMENT EXAMPLES</h1><br>
		<form action="" method="POST">

			<h3 style="color:red; Border-style:Dotted;"> Check Age (Eligible For Voting Or Not)</h3>			
			1. Enter Your Age For Checking You Are Eligible For Voting ? : 
			<input type="text" name="txtval1" size="30" placeholder="Enter Your age"> <br><br>	

			<h3  style="color:red; Border-style:dashed;"> Check Number (Even Or Odd)</h3>
			2. Enter A Number For Checking Number Is Even Or Odd ? : 
			<input type="text" name="txtval2" size="30" placeholder="Enter A Number"> <br><br>	

			<h3  style="color:red; Border-style:double;"> Check Number (Equal or Not Equal)</h3>
			3. Enter A two Number For checking Both Number Are Equal Or Not ? <br><br>
			3.1. First Number :
			<input type="text" name="txtnum1" size="30" placeholder="First Number"><br><br>
			3.2. Second Number :
			<input type="text" name="txtnum2" size="30" placeholder="Second Number"><br><br>
			
			<h3  style="color:red; Border-style:groove;"> Check Number (Divisible With 5 & 11)</h3>
			4. Enter A Number For Checking Given Number Is Divisible With 5 & 11 Both ? ...
			<input type="text" name="txtval51" size="30" placeholder="Enter a Number"><br><br>

			<input type="submit" name="btnsubmit" value="submit" style="color:darkblue;">
		</form>
	</center>
	</body>
</html>


<center>
<?php 
//Voting...
	if(isset($_POST['btnsubmit']))
	{
		$no1=$_POST['txtval1'];
		$no2=$_POST['txtval2'];
		$no31=$_POST['txtnum1'];
		$no32=$_POST['txtnum2'];
		$no51=$_POST['txtval51'];
		


		if($no1>=18)
		{
			echo "1. You are eligible for vote";
		}	
		else
		{
			echo "1. You are not eligible for vote";
		}		echo '<br><br>';

	

		if($no2%2==0)
		{
			echo "2. Number is even";
		}
		else
		{
			echo "2. Number is Odd";
		}		echo "<br><br>";



		if($no31==$no32)	
		{
			echo "3. Both number are same";
		}
		else 
		{
			echo "3. both number are does not same";
		}echo "<br><br>";



		if($no51%5==0 && $no51%11==0)
		{
			echo "4. Given number is divisible with 5 & 11.";
		}
		else
		{
			echo "4. Given number is not divisible with 5 & 11.";
		}echo "<br><br>";
	}


?>
</center>