<?php
	if(isset($_POST['btnsubmit']))
	{
		$name1=$_POST['txtname'];
		$address1=$_POST['txtadd1'];
		$city1=$_POST['drpcity1'];
		$pin1=$_POST['txtpin1'];
		$email=$_POST['txtemail'];
		$date=$_POST['txtdte'];
		$name2=$_POST['txtrecname'];
		$cmpnyname=$_POST['txtcmpnyname'];
		$address2=$_POST['txtadd2'];
		$city2=$_POST['drpcity2'];
		$pin2=$_POST['txtpin2'];
		$sign=$_POST['txtsign'];
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="skyblue" style="color:black;font-size:25px;Border-style:solid;Border-width:10px;Border-color:red;Background-color:skyblue;">

	<h3 style="color:black; text-align: center; font-size: 50px;">Introduction Letter</h3>

	<h1 style="color:black; text-align: right"><?php echo $date; ?></h1>
	<?php
		echo "<p style='color:black;Font-family:none;font-size:30px;'>";
		echo $name1;	echo "<br>";
		echo $address1;	echo "<br>";
		echo $city1;	echo "<br>";
		echo $pin1;	echo "<br>";
		echo $email;	echo "<br><br>";
		echo "</p>";

		echo "<p style='color:black;Font-family:none;font-size:30px;'>";
		echo $name2;	echo "<br>";
		echo $cmpnyname;	echo "<br>";
		echo $address2;	echo "<br>";
		echo $city2;	echo "<br>";
		echo $pin2;	echo "<br><br>";
		echo "</p>";
	?>

	<?php
		echo "<font style='color:black;Font-family:Georgia;font-size:50px;'>";
		echo "Dear " .$name2;
		echo "</font>";
	?>

	<p style="color:black;Font-family:Georgia;Text-indent:15%;font-size:35px;">

				I hope the week has been good for you! I'm writing to introduce you to our new project manager, Patricia Jefferson. Patricia comes to us with several years of project management 
		experience, specifically in managing large, long-term construction projects for multifamily residences. Her background will be extremely helpful for our team as we launch our plans for next year.

		<br><br>

				While you will not be working with Patricia on a daily basis, she will be able to provide you with regular timeline updates as you present our progress in the quarterly company 
		meetings. You can find her email at the top of this note, feel free to reach out directly as needed.

		<br><br>

				We're excited about having Patricia on board, and I look forward to your new working relationship. Please let me know if you need any additional information moving forward.

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