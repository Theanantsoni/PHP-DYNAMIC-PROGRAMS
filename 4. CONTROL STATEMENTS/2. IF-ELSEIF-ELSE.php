<html>
<head>
	<title>IF-ELSEIF-ELSE CONTROL STATEMENT</title>
</head>
<body style="background-color: lightgrey;">
	<h1 align="center" style="color:purple;">IF-ELSEIF-ELSE <br> CONTROL STATEMENT EXAMPLES</h1><br>
	<form action="" method="POST">
		<h3 style="color:red; Border-style:Dotted;"> Check Number (Positive, Negative Or Zero)</h3>
		1. Enter a number :
		<input type="text" name="txtnum1" size="30" placeholder="Enter a number"><br><br>
		<h3  style="color:red; Border-style:dashed;"> Check Age</h3>
		2. Enter a your age :
		<input type="text" name="txtnum2" size="30" placeholder="Enter your age"><br><br>
		<h3  style="color:red; Border-style:double;"> Check Between Number</h3>
		3. Enter a number :
		<input type="text" name="txtnum3" size="30" placeholder="Enter a number"><br><br>

		<input type="submit" name="txtsubmit" value="submit">
	</form>
</body>
</html>


<?php
	if(isset($_POST['txtsubmit']))
	{
		$no1=$_POST['txtnum1'];
		$no2=$_POST['txtnum2'];
		$no3=$_POST['txtnum3'];

		echo "1. You entered number is : ".$no1; echo " => ";
		if($no1>0) 			echo "Number is positive";
		else if($no1<0)   	echo "Number is Negative";
		else  				echo "Number is zero"; echo "<br>";

		echo "2. You entered age is : ".$no2; echo " => ";
		if($no2>1 && $no2<=14) 			echo "Children Age";
		else if($no2>14 && $no2<=24) 	echo "Teenager Age";	
		else if($no2>24 && $no2<=40) 	echo "Younger Age";	
		else if($no2>40 && $no2<=60) 	echo "Middle Age";	
		else if($no2>60 && $no2<=100) 	echo "Citizen Age";	
		else echo "2. Invalid Age"; 	echo "<br>";
		

		echo "3. You entered a number is :".$no3; echo " => ";
		if($no3>0 && $no3<=20) 				echo "Number between 1 to 20";
		else if($no3>20 && $no3<=40) 		echo "Number between 21 to 40";
		else if ($no3o>40 && $no3<=60) 		echo "Number between 41 to 60";
		else if($no3>60 && $no3<=80) 		echo "Number between 61 to 80";
		else if($no3>80 && $no3<=100) 		echo "Number between 81 to 100";
		else echo "Invalid Number";
	}
?>