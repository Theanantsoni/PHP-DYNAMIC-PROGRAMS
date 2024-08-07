<?php
	if(isset($_POST['btnsubmit']))
	{
		$name1=$_POST['txtname'];
		$address1=$_POST['txtadd1'];
		$city1=$_POST['drpcity1'];
		$pin1=$_POST['txtpin1'];
		$email=$_POST['txtemail'];
		$date=$_POST['txtdte'];
		$sign=$_POST['txtsign'];
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="skyblue" style="color:black;font-size:25px;Border-style:solid;Border-width:10px;Border-color:red;Background-color:skyblue;">

	<h3 style="color:black; text-align: center; font-size: 50px;">Birthday Letter</h3>

	<h1 style="color:black; text-align: right"><?php echo $date; ?></h1>
	<?php
		echo "<p style='color:black;Font-family:none;font-size:40px;'>";
		echo $name1;	echo "<br>";
		echo $address1;	echo "<br>";
		echo $city1;	echo "<br>";
		echo $pin1;	echo "<br>";
		echo $email;	echo "<br><br>";
		echo "</p>";
	?>

	<?php
		echo "<font style='color:black;Font-family:Georgia;font-size:45px;'>";
		echo "Dear Friend...";
		echo "</font>";
	?>

	<p style="color:black;Font-family:Georgia;Text-indent:15%;font-size:50px;">
		Happy birthday friend! I want to wish you very warm congratulations on your special day and offer my best wishes for many, many more great birthdays to come in your future.

	I hope this particular birthday is the best one ever for you. Knowing you, you probably have a list of exciting things planned to do this year in order to celebrate it with your wonderful family.
	
	<br><br>

	Whenever I need to put a quick smile on my face, I just think about all the good times we've shared over the years. You look as young and beautiful as the first day I met you. Did you discover the fountain of youth'? Also, I want to thank you for being there for me this past year when I really needed help. But, that's what friends are for, and you're the best. Please know that I will always be there for you too.
	
	<br><br>

	Here's to wishing you a long, healthy, and prosperous life my friend!

		<br><br>
		Thanks For Your Time... <br><br>
		<?php
			echo "<font style='color:black;Font-family:Georgia;font-size:30px;'> Signature </font>"; echo "<br>";
			echo "<font style='color:black;Font-family:Script MT;font-size:50px;'> $sign </font>";
		?>
</p>
</body>
</html>

<?php
	}
?>