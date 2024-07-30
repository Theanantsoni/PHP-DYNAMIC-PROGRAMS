<html>
	<head>
		<title>SUMS</title>
	</head>
	<body>
		<h1 align="center">-----: SUMS :-----</h1>
		<form action="" method="POST">
			VALUE 1 :
			<input type="text" name="txtval1" size="30" placeholder="Enter First Number">

			<br><br>

			VALUE 2 :
			<input type="text" name="txtval2" size="30" placeholder="Enter Second Number">

			<br><br>

			<input type="submit" name="btnsubmit" value="sumbit">
			<input type="reset" name="btnreset" value="clear">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['btnsubmit']))
	{
		$val1=$_POST['txtval1'];
		$val2=$_POST['txtval2'];

		echo "First Number is : ".$val1; echo '<br>';
		echo "Second Number is : ".$val2; echo '<br><br>';


		$add=$val1+$val2;
		echo "Addition is :".$add;	echo '<br>';

		$sub=$val2-$val1;
		echo "Subtraction is : ".$sub;	echo '<br>';

		$mul=$val1*$val2;
		echo "Multiplication is : ".$mul;	echo '<br>';

		$div=$val2/$val1;
		echo "Division is : ".$div;	echo '<br>';
	}
?>